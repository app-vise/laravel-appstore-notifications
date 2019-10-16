<?php

namespace Appvise\AppStoreNotifications\Model;

class RenewalInfo
{
    private $autoRenewProductId;
    private $autoRenewStatus;
    private $expirationIntent;
    private $originalTransactionId;
    private $isInBillingRetryPeriod;
    private $productId;
    private $priceConsentStatus;
    private $gracePeriodExpiresDate;
    private $gracePeriodExpiresDateMs;
    private $gracePeriodExpiresDatePst;

    public function __construct()
    {
    }

    public static function createFromRequest(array $pendingRenewalInfo)
    {
        $instance = new self();
        $instance->autoRenewProductId = $pendingRenewalInfo['auto_renew_product_id'] ?? null;
        $instance->autoRenewStatus = $pendingRenewalInfo['auto_renew_status'] ?? null;
        $instance->expirationIntent = $pendingRenewalInfo['expiration_intent'] ?? null;
        $instance->originalTransactionId = $pendingRenewalInfo['original_transaction_id'] ?? null;
        $instance->isInBillingRetryPeriod = $pendingRenewalInfo['is_in_billing_retry_period'] ?? null;
        $instance->productId = $pendingRenewalInfo['product_id'] ?? null;
        $instance->priceConsentStatus = $pendingRenewalInfo['price_consent_status'] ?? null;
        $instance->gracePeriodExpiresDate = $pendingRenewalInfo['grace_period_expires_date'] ?? null;
        $instance->gracePeriodExpiresDatePst = $pendingRenewalInfo['grace_period_expires_date_pst'] ?? null;

        return $instance;
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
     * Get the value of expirationIntent.
     */
    public function getExpirationIntent()
    {
        return $this->expirationIntent;
    }

    /**
     * Get the value of originalTransactionId.
     */
    public function getOriginalTransactionId()
    {
        return $this->originalTransactionId;
    }

    /**
     * Get the value of isInBillingRetryPeriod.
     */
    public function getIsInBillingRetryPeriod()
    {
        return $this->isInBillingRetryPeriod;
    }

    /**
     * Get the value of productId.
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Get the value of priceConsentStatus.
     */
    public function getPriceConsentStatus()
    {
        return $this->priceConsentStatus;
    }

    /**
     * Get the value of gracePeriodExpiresDate.
     */
    public function getGracePeriodExpiresDate()
    {
        return $this->gracePeriodExpiresDate;
    }

    /**
     * Get the value of gracePeriodExpiresDateMs.
     */
    public function getGracePeriodExpiresDateMs()
    {
        return $this->gracePeriodExpiresDateMs;
    }

    /**
     * Get the value of gracePeriodExpiresDatePst.
     */
    public function getGracePeriodExpiresDatePst()
    {
        return $this->gracePeriodExpiresDatePst;
    }
}
