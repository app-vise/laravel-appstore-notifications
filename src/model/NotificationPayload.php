<?php

namespace Appvise\AppStoreNotifications\Model;

use Illuminate\Http\Request;

class NotificationPayload
{
    private $environment;
    private $notificationType;
    private $password;
    private $cancellationDate;
    private $cancellationDatePst;
    private $cancellationDateMs;
    private $webOrderLineItemId;
    private $latestReceipt;
    private $latestReceiptInfo;
    private $latestExpiredReceipt;
    private $latestExpiredReceiptInfo;
    private $autoRenewStatus;
    private $autoRenewProductId;
    private $autoRenewStatusChangeDate;
    private $autoRenewStatusChangeDatePst;
    private $autoRenewStatusChangeDateMs;
    private $pendingRenewalInfo;

    public function __construct()
    {
    }

    public static function createFromRequest(Request $request)
    {
        $instance = new self();
        $instance->environment = $request->input('environment');
        $instance->password = $request->input('password');
        $instance->notificationType = $request->input('notification_type');
        $instance->cancellationDate = $request->input('cancellation_date');
        $instance->cancellationDatePst = $request->input('cancellation_date_pst');
        $instance->cancellationDateMs = $request->input('cancellation_date_ms');
        $instance->webOrderLineItemId = $request->input('web_order_line_item_id');
        $instance->latestReceipt = $request->input('latest_receipt');
        $instance->latestReceiptInfo = Receipt::createFromArray($request->input('latest_receipt_info'));
        $instance->latestExpiredReceipt = $request->input('latest_expired_receipt');
        if ($request->has('latest_expired_receipt_info')) {
            $instance->latestExpiredReceiptInfo = Receipt::createFromArray($request->input('latest_expired_receipt_info'));
        } else {
            $instance->latestExpiredReceiptInfo = null;
        }
        $instance->autoRenewStatus = $request->input('auto_renew_status');
        $instance->autoRenewProductId = $request->input('auto_renew_product_id');
        $instance->autoRenewStatusChangeDate = $request->input('auto_renew_status_change_date');
        $instance->autoRenewStatusChangeDatePst = $request->input('auto_renew_status_change_date_pst');
        $instance->autoRenewStatusChangeDateMs = $request->input('auto_renew_status_change_date_ms');
        if ($request->has('pending_renewal_info')) {
            foreach ($request->input('pending_renewal_info') as $pendingRenewalInfo) {
                $instance->pendingRenewalInfo[] = RenewalInfo::createFromRequest($pendingRenewalInfo);
            }
        } else {
            $instance->pendingRenewalInfo = null;
        }

        return $instance;
    }

    /**
     * Get the value of environment.
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Get the value of notificationType.
     */
    public function getNotificationType()
    {
        return $this->notificationType;
    }

    /**
     * Get the value of pendingRenewalInfo.
     */
    public function getPendingRenewalInfo()
    {
        return $this->pendingRenewalInfo;
    }

    /**
     * Get the value of autoRenewStatusChangeDateMs.
     */
    public function getAutoRenewStatusChangeDateMs()
    {
        return $this->autoRenewStatusChangeDateMs;
    }

    /**
     * Get the value of autoRenewStatusChangeDatePst.
     */
    public function getAutoRenewStatusChangeDatePst()
    {
        return $this->autoRenewStatusChangeDatePst;
    }

    /**
     * Get the value of autoRenewStatusChangeDate.
     */
    public function getAutoRenewStatusChangeDate()
    {
        return $this->autoRenewStatusChangeDate;
    }

    /**
     * Get the value of autoRenewProductId.
     */
    public function getAutoRenewProductId()
    {
        return $this->autoRenewProductId;
    }

    /**
     * Get the value of autoRenewStatus.
     */
    public function getAutoRenewStatus()
    {
        return $this->autoRenewStatus;
    }

    /**
     * Get the value of latestExpiredReceiptInfo.
     */
    public function getLatestExpiredReceiptInfo()
    {
        return $this->latestExpiredReceiptInfo;
    }

    /**
     * Get the value of latestExpiredReceipt.
     */
    public function getLatestExpiredReceipt()
    {
        return $this->latestExpiredReceipt;
    }

    /**
     * Get the value of latestReceiptInfo.
     */
    public function getLatestReceiptInfo()
    {
        return $this->latestReceiptInfo;
    }

    /**
     * Get the value of latestReceipt.
     */
    public function getLatestReceipt()
    {
        return $this->latestReceipt;
    }

    /**
     * Get the value of webOrderLineItemId.
     */
    public function getWebOrderLineItemId()
    {
        return $this->webOrderLineItemId;
    }

    /**
     * Get the value of cancellationDateMs.
     */
    public function getCancellationDateMs()
    {
        return $this->cancellationDateMs;
    }

    /**
     * Get the value of cancellationDatePst.
     */
    public function getCancellationDatePst()
    {
        return $this->cancellationDatePst;
    }

    /**
     * Get the value of cancellationDate.
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Get the value of password.
     */
    public function getPassword()
    {
        return $this->password;
    }
}
