<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemPickupDetails
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Pickup booking cutoff time
     *
     * @var string
     */
    protected $localCutoffDateAndTime;
    /**
     * Pickup booking cutoff time in GMT offset
     *
     * @var string
     */
    protected $cutoffTimeOffset;
    /**
     * The DHL earliest time possible for pickup
     *
     * @var string
     */
    protected $pickupEarliest;
    /**
     * The DHL latest time possible for pickup
     *
     * @var string
     */
    protected $pickupLatest;
    /**
     * Local pickup cut off time which allows forwarding the shipment on the requested day. Any Pickup requested after this pickup cutoff time may have an impact on transit time.
     *
     * @var string
     */
    protected $pickupCutoffSameDayOutboundProcessing;
    /**
     * The number of transit days
     *
     * @var string
     */
    protected $totalTransitDays;
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area
     *
     * @var string
     */
    protected $pickupAdditionalDays;
    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area
     *
     * @var string
     */
    protected $deliveryAdditionalDays;
    /**
     * Pickup day of the week number
     *
     * @var string
     */
    protected $pickupDayOfWeek;
    /**
     * Destination day of the week number
     *
     * @var string
     */
    protected $deliveryDayOfWeek;
    /**
     * Pickup booking cutoff time
     *
     * @return string
     */
    public function getLocalCutoffDateAndTime(): string
    {
        return $this->localCutoffDateAndTime;
    }
    /**
     * Pickup booking cutoff time
     *
     * @param string $localCutoffDateAndTime
     *
     * @return self
     */
    public function setLocalCutoffDateAndTime(string $localCutoffDateAndTime): self
    {
        $this->initialized['localCutoffDateAndTime'] = true;
        $this->localCutoffDateAndTime = $localCutoffDateAndTime;
        return $this;
    }
    /**
     * Pickup booking cutoff time in GMT offset
     *
     * @return string
     */
    public function getCutoffTimeOffset(): string
    {
        return $this->cutoffTimeOffset;
    }
    /**
     * Pickup booking cutoff time in GMT offset
     *
     * @param string $cutoffTimeOffset
     *
     * @return self
     */
    public function setCutoffTimeOffset(string $cutoffTimeOffset): self
    {
        $this->initialized['cutoffTimeOffset'] = true;
        $this->cutoffTimeOffset = $cutoffTimeOffset;
        return $this;
    }
    /**
     * The DHL earliest time possible for pickup
     *
     * @return string
     */
    public function getPickupEarliest(): string
    {
        return $this->pickupEarliest;
    }
    /**
     * The DHL earliest time possible for pickup
     *
     * @param string $pickupEarliest
     *
     * @return self
     */
    public function setPickupEarliest(string $pickupEarliest): self
    {
        $this->initialized['pickupEarliest'] = true;
        $this->pickupEarliest = $pickupEarliest;
        return $this;
    }
    /**
     * The DHL latest time possible for pickup
     *
     * @return string
     */
    public function getPickupLatest(): string
    {
        return $this->pickupLatest;
    }
    /**
     * The DHL latest time possible for pickup
     *
     * @param string $pickupLatest
     *
     * @return self
     */
    public function setPickupLatest(string $pickupLatest): self
    {
        $this->initialized['pickupLatest'] = true;
        $this->pickupLatest = $pickupLatest;
        return $this;
    }
    /**
     * Local pickup cut off time which allows forwarding the shipment on the requested day. Any Pickup requested after this pickup cutoff time may have an impact on transit time.
     *
     * @return string
     */
    public function getPickupCutoffSameDayOutboundProcessing(): string
    {
        return $this->pickupCutoffSameDayOutboundProcessing;
    }
    /**
     * Local pickup cut off time which allows forwarding the shipment on the requested day. Any Pickup requested after this pickup cutoff time may have an impact on transit time.
     *
     * @param string $pickupCutoffSameDayOutboundProcessing
     *
     * @return self
     */
    public function setPickupCutoffSameDayOutboundProcessing(string $pickupCutoffSameDayOutboundProcessing): self
    {
        $this->initialized['pickupCutoffSameDayOutboundProcessing'] = true;
        $this->pickupCutoffSameDayOutboundProcessing = $pickupCutoffSameDayOutboundProcessing;
        return $this;
    }
    /**
     * The number of transit days
     *
     * @return string
     */
    public function getTotalTransitDays(): string
    {
        return $this->totalTransitDays;
    }
    /**
     * The number of transit days
     *
     * @param string $totalTransitDays
     *
     * @return self
     */
    public function setTotalTransitDays(string $totalTransitDays): self
    {
        $this->initialized['totalTransitDays'] = true;
        $this->totalTransitDays = $totalTransitDays;
        return $this;
    }
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area
     *
     * @return string
     */
    public function getPickupAdditionalDays(): string
    {
        return $this->pickupAdditionalDays;
    }
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area
     *
     * @param string $pickupAdditionalDays
     *
     * @return self
     */
    public function setPickupAdditionalDays(string $pickupAdditionalDays): self
    {
        $this->initialized['pickupAdditionalDays'] = true;
        $this->pickupAdditionalDays = $pickupAdditionalDays;
        return $this;
    }
    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area
     *
     * @return string
     */
    public function getDeliveryAdditionalDays(): string
    {
        return $this->deliveryAdditionalDays;
    }
    /**
     * This is additional transit delays (in days) for shipment delivered to the mentioned city or postal area following arrival at the service area
     *
     * @param string $deliveryAdditionalDays
     *
     * @return self
     */
    public function setDeliveryAdditionalDays(string $deliveryAdditionalDays): self
    {
        $this->initialized['deliveryAdditionalDays'] = true;
        $this->deliveryAdditionalDays = $deliveryAdditionalDays;
        return $this;
    }
    /**
     * Pickup day of the week number
     *
     * @return string
     */
    public function getPickupDayOfWeek(): string
    {
        return $this->pickupDayOfWeek;
    }
    /**
     * Pickup day of the week number
     *
     * @param string $pickupDayOfWeek
     *
     * @return self
     */
    public function setPickupDayOfWeek(string $pickupDayOfWeek): self
    {
        $this->initialized['pickupDayOfWeek'] = true;
        $this->pickupDayOfWeek = $pickupDayOfWeek;
        return $this;
    }
    /**
     * Destination day of the week number
     *
     * @return string
     */
    public function getDeliveryDayOfWeek(): string
    {
        return $this->deliveryDayOfWeek;
    }
    /**
     * Destination day of the week number
     *
     * @param string $deliveryDayOfWeek
     *
     * @return self
     */
    public function setDeliveryDayOfWeek(string $deliveryDayOfWeek): self
    {
        $this->initialized['deliveryDayOfWeek'] = true;
        $this->deliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
}