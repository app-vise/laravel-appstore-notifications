# Handle Appstore server-to-server notifications for auto-renewable subscriptions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/app-vise/app-vise/laravel-appstore-server-notifications.svg?style=flat-square)](https://packagist.org/packages/app-vise/laravel-appstore-server-notifications)
[![Build Status](https://travis-ci.org/app-vise/laravel-appstore-notifications.svg?branch=master)](https://travis-ci.org/app-vise/laravel-appstore-notifications)
[![StyleCI](https://styleci.io/repos/215539443/shield?branch=master)](https://styleci.io/repos/215539443)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/app-vise/laravel-appstore-notifications/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/app-vise/laravel-appstore-notifications/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/app-vise/laravel-appstore-server-notifications.svg?style=flat-square)](https://packagist.org/packages/app-vise/laravel-appstore-server-notifications)

## Installation
You can install this package via composer

```bash
composer require app-vise/laravel-appstore-server-notifications 
 ```

The service provider will register itself.
You have to publish the config file with:

```bash
php artisan vendor:publish --provider="Appvise\AppStoreNotifications\NotificationsServiceProvider" --tag="config" 
 ```
This is the config that will be published.
```php
return [
    /*
     * Apple will send the shared secret with the request that should match
     * the one you use when validating receipts.
     * https://developer.apple.com/documentation/storekit/in-app_purchase/enabling_server-to-server_notifications?language=objc#overview
     */
    'shared_secret' => env('APPLE_SHARED_SECRET'),
    /*
     * All the events that should be handeled by your application.
     * Typically you should uncomment all jobs
     *
     * You can find a list of all notification types here:
     * https://developer.apple.com/documentation/storekit/in-app_purchase/enabling_server-to-server_notifications?language=objc#3162176
     */
    'jobs' => [
        // 'initial_buy' => \App\Jobs\AppstoreNotifications\HandleInitialBuy::class,
        // 'cancel' => \App\Jobs\AppstoreNotifications\HandleCancellation::class,
        // 'renewal' => \App\Jobs\AppstoreNotifications\HandleRenewal::class,
        // 'interactive_renewal' => \App\Jobs\AppstoreNotifications\HandleInteractiveRenewal::class,
        // 'did_change_renewal_pref' => \App\Jobs\AppstoreNotifications\HandleDidChangeRenewalPreferences::class,
        // 'did_change_renewal_status' => \App\Jobs\AppstoreNotifications\HandleDidChangeRenewalStatus::class,
    ],
];
```
The shared secret should match the one you send to the store to validate receipts

This package logs all the incoming requests to the database so these steps are mandatory:

```bash
php artisan vendor:publish --provider="Appvise\AppStoreNotifications\NotificationsServiceProvider" --tag="migrations"
```

You should run migrate next to create the apple_notifications table:

```bash
php artisan migrate
```

This packages registers a POST route (/apple/server/notifications) to the Webhookscontroller of this package

## Usage
When there is an change in one of the subscriptions Apple will send a POST request to a configured endpoint.
[Follow this guide to configure the endpoint:](https://help.apple.com/app-store-connect/#/dev0067a330b)

This package will send a 200 response if you configured the right Job for the right Notification Type otherwise it will send a 500 back to Apple.
Apple will retry a couple of times more. The incoming payload is stored in the apple_notifications table.

### Handling incoming notifications via Jobs
```php
<?php

namespace App\Jobs\AppstoreNotifications;

use App\Jobs\Job;
use Appvise\AppStoreNotifications\Model\NotificationPayload;

class HandleInitialBuy extends Job
{
    public $payload;

    public function __construct(NotificationPayload $payload)
    {
        $this->payload = $payload;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Do something that matches your business logic with $this->payload
    }
}
```

## Changelog

Please see CHANGELOG for more information about what has changed recently.

## Testing

```bash
composer test
```

## Security

If you discover any security related issues, please email daan@app-vise.nl instead of using the issue tracker.

## Credits

- [Daan Geurts](https://github.com/DaanGeurts)
- [All Contributors](../../contributors)

A big thanks to [Spatie's](https://spatie.be) laravel-stripe-webhooks which was a huge inspiration and starting point for this package
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
