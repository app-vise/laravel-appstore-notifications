<?php

namespace Appvise\AppStoreNotifications\Tests;

use Appvise\AppStoreNotifications\Model\NotificationPayload;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class DummyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $payload;

    public function __construct(NotificationPayload $payload)
    {
        $this->payload = $payload;
    }

    function handle()
    {
    }
}
