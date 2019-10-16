<?php

namespace Appvise\AppStoreNotifications\Tests;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Appvise\AppStoreNotifications\Model\NotificationPayload;

class DummyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $payload;

    public function __construct(NotificationPayload $payload)
    {
        $this->payload = $payload;
    }

    public function handle()
    {
    }
}
