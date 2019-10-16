<?php

namespace Appvise\AppStoreNotifications\Model;

use Illuminate\Database\Eloquent\Model;

class AppleNotification extends Model
{
    public $guarded = [];

    public static function storeNotification(String $notificationType, NotificationPayload $notificationPayload): AppleNotification
    {
        return self::create([
            'type' => $notificationType,
            'payload' => serialize($notificationPayload),
        ]);
    }

}
