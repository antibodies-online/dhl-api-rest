<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities
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
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     *
     * @var bool
     */
    protected $nextBusinessDay;
    /**
     * This is the cutoff time for the service<BR>                offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
     *
     * @var string
     */
    protected $localCutoffDateAndTime;
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
     * The DHL Service Area Code for the origin of the Shipment
     *
     * @var string
     */
    protected $originServiceAreaCode;
    /**
     * The DHL Facility Code for the Origin
     *
     * @var string
     */
    protected $originFacilityAreaCode;
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     *
     * @var float
     */
    protected $pickupAdditionalDays;
    /**
     * Pickup day of the week number
     *
     * @var float
     */
    protected $pickupDayOfWeek;
    /**
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     *
     * @return bool
     */
    public function getNextBusinessDay(): bool
    {
        return $this->nextBusinessDay;
    }
    /**
     * This indicator has values of Y or N, and tells the consumer if the service in the response has a pickup date on the same day as the requested shipment date (per the request).
     *
     * @param bool $nextBusinessDay
     *
     * @return self
     */
    public function setNextBusinessDay(bool $nextBusinessDay): self
    {
        $this->initialized['nextBusinessDay'] = true;
        $this->nextBusinessDay = $nextBusinessDay;
        return $this;
    }
    /**
     * This is the cutoff time for the service<BR>                offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
     *
     * @return string
     */
    public function getLocalCutoffDateAndTime(): string
    {
        return $this->localCutoffDateAndTime;
    }
    /**
     * This is the cutoff time for the service<BR>                offered in the response. This represents the latest time (local to origin) which the shipment can be tendered to the courier for that service on that day.
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
     * The DHL Service Area Code for the origin of the Shipment
     *
     * @return string
     */
    public function getOriginServiceAreaCode(): string
    {
        return $this->originServiceAreaCode;
    }
    /**
     * The DHL Service Area Code for the origin of the Shipment
     *
     * @param string $originServiceAreaCode
     *
     * @return self
     */
    public function setOriginServiceAreaCode(string $originServiceAreaCode): self
    {
        $this->initialized['originServiceAreaCode'] = true;
        $this->originServiceAreaCode = $originServiceAreaCode;
        return $this;
    }
    /**
     * The DHL Facility Code for the Origin
     *
     * @return string
     */
    public function getOriginFacilityAreaCode(): string
    {
        return $this->originFacilityAreaCode;
    }
    /**
     * The DHL Facility Code for the Origin
     *
     * @param string $originFacilityAreaCode
     *
     * @return self
     */
    public function setOriginFacilityAreaCode(string $originFacilityAreaCode): self
    {
        $this->initialized['originFacilityAreaCode'] = true;
        $this->originFacilityAreaCode = $originFacilityAreaCode;
        return $this;
    }
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     *
     * @return float
     */
    public function getPickupAdditionalDays(): float
    {
        return $this->pickupAdditionalDays;
    }
    /**
     * This is additional transit delays (in days) for shipment picked up from the mentioned city or postal area to arrival at the service area.
     *
     * @param float $pickupAdditionalDays
     *
     * @return self
     */
    public function setPickupAdditionalDays(float $pickupAdditionalDays): self
    {
        $this->initialized['pickupAdditionalDays'] = true;
        $this->pickupAdditionalDays = $pickupAdditionalDays;
        return $this;
    }
    /**
     * Pickup day of the week number
     *
     * @return float
     */
    public function getPickupDayOfWeek(): float
    {
        return $this->pickupDayOfWeek;
    }
    /**
     * Pickup day of the week number
     *
     * @param float $pickupDayOfWeek
     *
     * @return self
     */
    public function setPickupDayOfWeek(float $pickupDayOfWeek): self
    {
        $this->initialized['pickupDayOfWeek'] = true;
        $this->pickupDayOfWeek = $pickupDayOfWeek;
        return $this;
    }
}