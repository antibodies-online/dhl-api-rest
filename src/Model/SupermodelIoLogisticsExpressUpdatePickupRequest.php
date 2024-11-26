<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequest
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
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup
     *
     * @var string
     */
    protected $dispatchConfirmationNumber;
    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation
     *
     * @var string
     */
    protected $originalShipperAccountNumber;
    /**
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>                           
     *
     * @var string
     */
    protected $plannedPickupDateAndTime;
    /**
     * The latest time the location premises is available to dispatch the DHL Express shipment. (HH:MM) 
     *
     * @var string
     */
    protected $closeTime;
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>                           
     *
     * @var string
     */
    protected $location;
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>                           
     *
     * @var string
     */
    protected $locationType;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressAccount>
     */
    protected $accounts;
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @var list<SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem>
     */
    protected $specialInstructions;
    /**
     * Please provide additional pickup remark
     *
     * @var string
     */
    protected $remark;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
     */
    protected $customerDetails;
    /**
     * Please provide updated details related to shipment you want update the pickup for
     *
     * @var list<SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem>
     */
    protected $shipmentDetails;
    /**
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup
     *
     * @return string
     */
    public function getDispatchConfirmationNumber(): string
    {
        return $this->dispatchConfirmationNumber;
    }
    /**
     * Please enter Dispatch confirmation number which identifies the already scheduled pickup
     *
     * @param string $dispatchConfirmationNumber
     *
     * @return self
     */
    public function setDispatchConfirmationNumber(string $dispatchConfirmationNumber): self
    {
        $this->initialized['dispatchConfirmationNumber'] = true;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }
    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation
     *
     * @return string
     */
    public function getOriginalShipperAccountNumber(): string
    {
        return $this->originalShipperAccountNumber;
    }
    /**
     * Please enter the shipper account number which was used during the scheduled pickup creation
     *
     * @param string $originalShipperAccountNumber
     *
     * @return self
     */
    public function setOriginalShipperAccountNumber(string $originalShipperAccountNumber): self
    {
        $this->initialized['originalShipperAccountNumber'] = true;
        $this->originalShipperAccountNumber = $originalShipperAccountNumber;
        return $this;
    }
    /**
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>                           
     *
     * @return string
     */
    public function getPlannedPickupDateAndTime(): string
    {
        return $this->plannedPickupDateAndTime;
    }
    /**
     * Identifies the date and time the package is ready for pickup Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).<BR>                           
     *
     * @param string $plannedPickupDateAndTime
     *
     * @return self
     */
    public function setPlannedPickupDateAndTime(string $plannedPickupDateAndTime): self
    {
        $this->initialized['plannedPickupDateAndTime'] = true;
        $this->plannedPickupDateAndTime = $plannedPickupDateAndTime;
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
     * Provides information on where the package should be picked up by DHL courier. <BR>                           
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>                           
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
     * Provides information on where the package should be picked up by DHL courier. <BR>                           
     *
     * @return string
     */
    public function getLocationType(): string
    {
        return $this->locationType;
    }
    /**
     * Provides information on where the package should be picked up by DHL courier. <BR>                           
     *
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(string $locationType): self
    {
        $this->initialized['locationType'] = true;
        $this->locationType = $locationType;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressAccount>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressAccount> $accounts
     *
     * @return self
     */
    public function setAccounts(array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @return list<SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem>
     */
    public function getSpecialInstructions(): array
    {
        return $this->specialInstructions;
    }
    /**
     * Details special pickup instructions you may wish to send to the DHL Courier.
     *
     * @param list<SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem> $specialInstructions
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
     * Please provide additional pickup remark
     *
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }
    /**
     * Please provide additional pickup remark
     *
     * @param string $remark
     *
     * @return self
     */
    public function setRemark(string $remark): self
    {
        $this->initialized['remark'] = true;
        $this->remark = $remark;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;
        return $this;
    }
    /**
     * Please provide updated details related to shipment you want update the pickup for
     *
     * @return list<SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem>
     */
    public function getShipmentDetails(): array
    {
        return $this->shipmentDetails;
    }
    /**
     * Please provide updated details related to shipment you want update the pickup for
     *
     * @param list<SupermodelIoLogisticsExpressUpdatePickupRequestShipmentDetailsItem> $shipmentDetails
     *
     * @return self
     */
    public function setShipmentDetails(array $shipmentDetails): self
    {
        $this->initialized['shipmentDetails'] = true;
        $this->shipmentDetails = $shipmentDetails;
        return $this;
    }
}