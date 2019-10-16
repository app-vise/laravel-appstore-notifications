<?php

namespace Appvise\AppStoreNotifications\Exceptions;

use Exception;

class WebhookFailed extends Exception
{
    public static function nonValidRequest()
    {
        return new static("Your shared secret does not match password in Apple's request", 400);
    }

    public static function jobClassDoesNotExist(string $jobClass)
    {
        return new static("Could not process webhook because the configured job `$jobClass` does not exist.", 501);
    }

    public function render($request)
    {
        return response(['error' => $this->getMessage()], 400);
    }
}
