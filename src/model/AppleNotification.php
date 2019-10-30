<?php

namespace Appvise\AppStoreNotifications\Model;

use Illuminate\Database\Eloquent\Model;

class AppleNotification extends Model
{
    public $guarded = [];

    protected $casts = [
        'payload' => 'array',
    ];

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
