<?php

namespace Appvise\AppStoreNotifications;

use Illuminate\Http\Request;
use Appvise\AppStoreNotifications\Model\NotificationType;
use Appvise\AppStoreNotifications\Model\AppleNotification;
use Appvise\AppStoreNotifications\Exceptions\WebhookFailed;
use Appvise\AppStoreNotifications\Model\NotificationPayload;

class WebhooksController
{
    public function __invoke(Request $request)
    {
        $jobConfigKey = NotificationType::{$request->input('notification_type')}();
        $this->determineValidRequest($request->input('password'));

        AppleNotification::storeNotification($jobConfigKey, $request->input());

        $payload = NotificationPayload::createFromRequest($request);

        $jobClass = config("appstore-server-notifications.jobs.{$jobConfigKey}", null);

        if (is_null($jobClass)) {
            throw WebhookFailed::jobClassDoesNotExist($jobConfigKey);
        }

        $job = new $jobClass($payload);
        dispatch($job);

        return response()->json();
    }

    private function determineValidRequest(string $password): bool
    {
        if ($password !== config('appstore-server-notifications.shared_secret')) {
            throw WebhookFailed::nonValidRequest();
        }

        return true;
    }
}
