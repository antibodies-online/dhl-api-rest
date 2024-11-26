<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities
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
     * Delivery Date capabilities considering customs clearance days. Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL's service commitment. QDDC: cconstitutes DHL's service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant. 
     *
     * @var string
     */
    protected $deliveryTypeCode;
    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed
     *
     * @var string
     */
    protected $estimatedDeliveryDateAndTime;
    /**
     * The DHL Service Area Code for the destination of the Shipment
     *
     * @var string
     */
    protected $destinationServiceAreaCode;
    /**
     * The DHL Facility Code for the Destination
     *
     * @var string
     */
    protected $destinationFacilityAreaCode;
    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     *
     * @var float
     */
    protected $deliveryAdditionalDays;
    /**
     * Destination day of the week number
     *
     * @var float
     */
    protected $deliveryDayOfWeek;
    /**
     * The number of transit days
     *
     * @var float
     */
    protected $totalTransitDays;
    /**
     * Delivery Date capabilities considering customs clearance days. Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL's service commitment. QDDC: cconstitutes DHL's service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant. 
     *
     * @return string
     */
    public function getDeliveryTypeCode(): string
    {
        return $this->deliveryTypeCode;
    }
    /**
     * Delivery Date capabilities considering customs clearance days. Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL's service commitment. QDDC: cconstitutes DHL's service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant. 
     *
     * @param string $deliveryTypeCode
     *
     * @return self
     */
    public function setDeliveryTypeCode(string $deliveryTypeCode): self
    {
        $this->initialized['deliveryTypeCode'] = true;
        $this->deliveryTypeCode = $deliveryTypeCode;
        return $this;
    }
    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed
     *
     * @return string
     */
    public function getEstimatedDeliveryDateAndTime(): string
    {
        return $this->estimatedDeliveryDateAndTime;
    }
    /**
     * This is the estimated date/time the shipment will be delivered by for the rated shipment and product listed
     *
     * @param string $estimatedDeliveryDateAndTime
     *
     * @return self
     */
    public function setEstimatedDeliveryDateAndTime(string $estimatedDeliveryDateAndTime): self
    {
        $this->initialized['estimatedDeliveryDateAndTime'] = true;
        $this->estimatedDeliveryDateAndTime = $estimatedDeliveryDateAndTime;
        return $this;
    }
    /**
     * The DHL Service Area Code for the destination of the Shipment
     *
     * @return string
     */
    public function getDestinationServiceAreaCode(): string
    {
        return $this->destinationServiceAreaCode;
    }
    /**
     * The DHL Service Area Code for the destination of the Shipment
     *
     * @param string $destinationServiceAreaCode
     *
     * @return self
     */
    public function setDestinationServiceAreaCode(string $destinationServiceAreaCode): self
    {
        $this->initialized['destinationServiceAreaCode'] = true;
        $this->destinationServiceAreaCode = $destinationServiceAreaCode;
        return $this;
    }
    /**
     * The DHL Facility Code for the Destination
     *
     * @return string
     */
    public function getDestinationFacilityAreaCode(): string
    {
        return $this->destinationFacilityAreaCode;
    }
    /**
     * The DHL Facility Code for the Destination
     *
     * @param string $destinationFacilityAreaCode
     *
     * @return self
     */
    public function setDestinationFacilityAreaCode(string $destinationFacilityAreaCode): self
    {
        $this->initialized['destinationFacilityAreaCode'] = true;
        $this->destinationFacilityAreaCode = $destinationFacilityAreaCode;
        return $this;
    }
    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     *
     * @return float
     */
    public function getDeliveryAdditionalDays(): float
    {
        return $this->deliveryAdditionalDays;
    }
    /**
     * This is additional transit delays (in days) for shipment delivered to the<BR>                mentioned city or postal area following arrival at the service area.
     *
     * @param float $deliveryAdditionalDays
     *
     * @return self
     */
    public function setDeliveryAdditionalDays(float $deliveryAdditionalDays): self
    {
        $this->initialized['deliveryAdditionalDays'] = true;
        $this->deliveryAdditionalDays = $deliveryAdditionalDays;
        return $this;
    }
    /**
     * Destination day of the week number
     *
     * @return float
     */
    public function getDeliveryDayOfWeek(): float
    {
        return $this->deliveryDayOfWeek;
    }
    /**
     * Destination day of the week number
     *
     * @param float $deliveryDayOfWeek
     *
     * @return self
     */
    public function setDeliveryDayOfWeek(float $deliveryDayOfWeek): self
    {
        $this->initialized['deliveryDayOfWeek'] = true;
        $this->deliveryDayOfWeek = $deliveryDayOfWeek;
        return $this;
    }
    /**
     * The number of transit days
     *
     * @return float
     */
    public function getTotalTransitDays(): float
    {
        return $this->totalTransitDays;
    }
    /**
     * The number of transit days
     *
     * @param float $totalTransitDays
     *
     * @return self
     */
    public function setTotalTransitDays(float $totalTransitDays): self
    {
        $this->initialized['totalTransitDays'] = true;
        $this->totalTransitDays = $totalTransitDays;
        return $this;
    }
}