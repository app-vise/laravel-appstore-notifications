<?php
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
