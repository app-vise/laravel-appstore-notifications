<?php

namespace Appvise\AppStoreNotifications;

use Appvise\AppStoreNotifications\Exceptions\WebhookFailed;
use Appvise\AppStoreNotifications\Model\AppleNotification;
use Appvise\AppStoreNotifications\Model\NotificationPayload;
use Appvise\AppStoreNotifications\Model\NotificationType;
use Illuminate\Http\Request;

class WebhooksController
{
    public function __invoke(Request $request)
    {
        $jobConfigKey = NotificationType::{$request->input('notification_type')}();
        $payload = NotificationPayload::createFromRequest($request);

        $this->determineValidRequest($payload);

        AppleNotification::storeNotification($jobConfigKey, $payload);

        $jobClass = config("appstore-server-notifications.jobs.{$jobConfigKey}", null);

        if (is_null($jobClass)) {
            throw WebhookFailed::jobClassDoesNotExist($jobConfigKey);
        }


        $job = new $jobClass($payload);
        dispatch($job);

        return response()->json();
    }

    private function determineValidRequest(NotificationPayload $notificationPayload): bool
    {
        if ($notificationPayload->getPassword() !== config('appstore-server-notifications.shared_secret')) {
            throw WebhookFailed::nonValidRequest();
        }

        return true;
    }
}
