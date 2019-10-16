<?php

namespace Appvise\AppStoreNotifications\Model;

use BenSampo\Enum\Enum;

class NotificationType extends Enum
{
    const INITIAL_BUY = 'initial_buy';
    const CANCEL = 'cancel';
    const RENEWAL = 'renewal';
    const INTERACTIVE_RENEWAL = 'interactive_renewal';
    const DID_CHANGE_RENEWAL_PREF = 'did_change_renewal_pref';
    const DID_CHANGE_RENEWAL_STATUS = 'did_change_renewal_status';
    const DID_FAIL_TO_RENEW = 'did_fail_to_renew';
    const DID_RECOVER = 'did_recover'; // replaces RENEWAL
    const PRICE_INCREASE_CONSENT = 'price_increase_consent';
}
