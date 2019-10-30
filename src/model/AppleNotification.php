<?php

namespace Appvise\AppStoreNotifications\Model;

use Illuminate\Database\Eloquent\Model;

class AppleNotification extends Model
{
    public $guarded = [];

    public static function storeNotification(string $notificationType, array $notificationPayload)
    {
        return self::create(
            [
            'type' => $notificationType,
            'payload' => $notificationPayload,
            ]
        );
    }
}
