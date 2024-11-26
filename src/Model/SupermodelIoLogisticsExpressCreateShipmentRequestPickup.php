<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPickup
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
     * Please advise if a pickup is needed for this shipment
     *
     * @var bool
     */
    protected $isRequested = false;
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) 
     *
     * @var string
     */
    protected $closeTime;
    /**
     * Provides information on where the package should be picked up by DHL courier.
     *
     * @var string
     */
    protected $location;
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem>
     */
    protected $specialInstructions;
    /**
     * Please enter address and contact details related to your pickup
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails
     */
    protected $pickupDetails;
    /**
     * Please enter address and contact details of the individual requesting the pickup
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails
     */
    protected $pickupRequestorDetails;
    /**
     * Please advise if a pickup is needed for this shipment
     *
     * @return bool
     */
    public function getIsRequested(): bool
    {
        return $this->isRequested;
    }
    /**
     * Please advise if a pickup is needed for this shipment
     *
     * @param bool $isRequested
     *
     * @return self
     */
    public function setIsRequested(bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
        $this->isRequested = $isRequested;
        return $this;
    }
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) 
     *
     * @return string
     */
    public function getCloseTime(): string
    {
        return $this->closeTime;
    }
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) 
     *
     * @param string $closeTime
     *
     * @return self
     */
    public function setCloseTime(string $closeTime): self
    {
        $this->initialized['closeTime'] = true;
        $this->closeTime = $closeTime;
        return $this;
    }
    /**
     * Provides information on where the package should be picked up by DHL courier.
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * Provides information on where the package should be picked up by DHL courier.
     *
     * @param string $location
     *
     * @return self
     */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem>
     */
    public function getSpecialInstructions(): array
    {
        return $this->specialInstructions;
    }
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestPickupSpecialInstructionsItem> $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(array $specialInstructions): self
    {
        $this->initialized['specialInstructions'] = true;
        $this->specialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Please enter address and contact details related to your pickup
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails
     */
    public function getPickupDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails
    {
        return $this->pickupDetails;
    }
    /**
     * Please enter address and contact details related to your pickup
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails $pickupDetails
     *
     * @return self
     */
    public function setPickupDetails(SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;
        return $this;
    }
    /**
     * Please enter address and contact details of the individual requesting the pickup
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails
     */
    public function getPickupRequestorDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails
    {
        return $this->pickupRequestorDetails;
    }
    /**
     * Please enter address and contact details of the individual requesting the pickup
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails $pickupRequestorDetails
     *
     * @return self
     */
    public function setPickupRequestorDetails(SupermodelIoLogisticsExpressCreateShipmentRequestPickupPickupRequestorDetails $pickupRequestorDetails): self
    {
        $this->initialized['pickupRequestorDetails'] = true;
        $this->pickupRequestorDetails = $pickupRequestorDetails;
        return $this;
    }
}