<?php

namespace Appvise\AppStoreNotifications\Model;

class Receipt
{
    private $originalTransactionId;
    private $webOrderLineItemId;
    private $productId;
    private $purchaseDateMs;
    private $purchaseDate;
    private $purchaseDatePst;
    private $originalPurchaseDate;
    private $originalPurchaseDateMs;
    private $originalPurchaseDatePst;
    private $cancellationReason;
    private $cancellationDate;
    private $cancellationDateMs;
    private $cancellationDatePst;
    private $expiresDate;
    private $expiresDateMs;
    private $expiresDateFormatted;
    private $expiresDateFormattedPst;
    private $quantity;
    private $uniqueIdentifier;
    private $uniqueVendorIdentifier;
    private $isInIntroOfferPeriod;
    private $isTrialPeriod;
    private $itemId;
    private $appItemId;
    private $versionExternalIdentifier;
    private $transactionId;
    private $bvrs;
    private $bid;

    public function __construct()
    {
    }

    public static function createFromArray(array $receiptInfo)
    {
        $instance = new self();
        $instance->originalTransactionId = $receiptInfo['original_transaction_id'] ?? null;
        $instance->webOrderLineItemId = $receiptInfo['web_order_line_item_id'] ?? null;
        $instance->productId = $receiptInfo['product_id'] ?? null;
        $instance->purchaseDateMs = $receiptInfo['purchase_date_ms'] ?? null;
        $instance->purchaseDate = $receiptInfo['purchase_date'] ?? null;
        $instance->purchaseDatePst = $receiptInfo['purchase_date_pst'] ?? null;
        $instance->originalPurchaseDate = $receiptInfo['original_purchase_date'] ?? null;
        $instance->originalPurchaseDateMs = $receiptInfo['original_purchase_date_ms'] ?? null;
        $instance->originalPurchaseDatePst = $receiptInfo['original_purchase_date_pst'] ?? null;
        $instance->cancellationReason = $receiptInfo['cancellation_reason'] ?? null;
        $instance->cancellationDate = $receiptInfo['cancellation_date'] ?? null;
        $instance->cancellationDateMs = $receiptInfo['cancellation_date_ms'] ?? null;
        $instance->cancellationDatePst = $receiptInfo['cancellation_date_pst'] ?? null;
        $instance->expiresDate = $receiptInfo['expires_date'] ?? null;
        $instance->expiresDateMs = $receiptInfo['expires_date_ms'] ?? null;
        $instance->expiresDateFormatted = $receiptInfo['expires_date_formatted'] ?? null;
        $instance->expiresDateFormattedPst = $receiptInfo['expires_date_formatted_pst'] ?? null;
        $instance->quantity = $receiptInfo['quantity'] ?? null;
        $instance->uniqueIdentifier = $receiptInfo['unique_identifier'] ?? null;
        $instance->uniqueVendorIdentifier = $receiptInfo['unique_vendor_identifier'] ?? null;
        $instance->isInIntroOfferPeriod = $receiptInfo['is_in_intro_offer_period'] ?? null;
        $instance->isTrialPeriod = $receiptInfo['is_trial_period'] ?? null;
        $instance->itemId = $receiptInfo['item_id'] ?? null;
        $instance->appItemId = $receiptInfo['app_item_id'] ?? null;
        $instance->versionExternalIdentifier = $receiptInfo['version_external_identifier'] ?? null;
        $instance->transactionId = $receiptInfo['transaction_id'] ?? null;
        $instance->bvrs = $receiptInfo['bvrs'] ?? null;
        $instance->bid = $receiptInfo['bid'] ?? null;

        return $instance;
    }

    /**
     * Get the value of bid.
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Get the value of bvrs.
     */
    public function getBvrs()
    {
        return $this->bvrs;
    }

    /**
     * Get the value of transactionId.
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Get the value of versionExternalIdentifier.
     */
    public function getVersionExternalIdentifier()
    {
        return $this->versionExternalIdentifier;
    }

    /**
     * Get the value of appItemId.
     */
    public function getAppItemId()
    {
        return $this->appItemId;
    }

    /**
     * Get the value of itemId.
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Get the value of isTrialPeriod.
     */
    public function getIsTrialPeriod()
    {
        return $this->isTrialPeriod;
    }

    /**
     * Get the value of isInIntroOfferPeriod.
     */
    public function getIsInIntroOfferPeriod()
    {
        return $this->isInIntroOfferPeriod;
    }

    /**
     * Get the value of uniqueVendorIdentifier.
     */
    public function getUniqueVendorIdentifier()
    {
        return $this->uniqueVendorIdentifier;
    }

    /**
     * Get the value of uniqueIdentifier.
     */
    public function getUniqueIdentifier()
    {
        return $this->uniqueIdentifier;
    }

    /**
     * Get the value of quantity.
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get the value of expiresDateFormattedPst.
     */
    public function getExpiresDateFormattedPst()
    {
        return $this->expiresDateFormattedPst;
    }

    /**
     * Get the value of expiresDateFormatted.
     */
    public function getExpiresDateFormatted()
    {
        return $this->expiresDateFormatted;
    }

    /**
     * Get the value of expiresDateMs.
     */
    public function getExpiresDateMs()
    {
        return $this->expiresDateMs;
    }

    /**
     * Get the value of expiresDate.
     */
    public function getExpiresDate()
    {
        return $this->expiresDate;
    }

    /**
     * Get the value of cancellationDatePst.
     */
    public function getCancellationDatePst()
    {
        return $this->cancellationDatePst;
    }

    /**
     * Get the value of cancellationDateMs.
     */
    public function getCancellationDateMs()
    {
        return $this->cancellationDateMs;
    }

    /**
     * Get the value of cancellationDate.
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Get the value of cancellationReason.
     */
    public function getCancellationReason()
    {
        return $this->cancellationReason;
    }

    /**
     * Get the value of originalPurchaseDatePst.
     */
    public function getOriginalPurchaseDatePst()
    {
        return $this->originalPurchaseDatePst;
    }

    /**
     * Get the value of originalPurchaseDateMs.
     */
    public function getOriginalPurchaseDateMs()
    {
        return $this->originalPurchaseDateMs;
    }

    /**
     * Get the value of originalPurchaseDate.
     */
    public function getOriginalPurchaseDate()
    {
        return $this->originalPurchaseDate;
    }

    /**
     * Get the value of purchaseDatePst.
     */
    public function getPurchaseDatePst()
    {
        return $this->purchaseDatePst;
    }

    /**
     * Get the value of purchaseDate.
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Get the value of purchaseDateMs.
     */
    public function getPurchaseDateMs()
    {
        return $this->purchaseDateMs;
    }

    /**
     * Get the value of productId.
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Get the value of webOrderLineItemId.
     */
    public function getWebOrderLineItemId()
    {
        return $this->webOrderLineItemId;
    }

    /**
     * Get the value of originalTransactionId.
     */
    public function getOriginalTransactionId()
    {
        return $this->originalTransactionId;
    }
}
