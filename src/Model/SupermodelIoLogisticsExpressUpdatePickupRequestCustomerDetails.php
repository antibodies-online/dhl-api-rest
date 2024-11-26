<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetails
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
     * 
     *
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails
     */
    protected $shipperDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails
     */
    protected $receiverDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails
     */
    protected $bookingRequestorDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails
     */
    protected $pickupDetails;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails
     */
    public function getShipperDetails(): SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails $shipperDetails
     *
     * @return self
     */
    public function setShipperDetails(SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails
     */
    public function getReceiverDetails(): SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails $receiverDetails
     *
     * @return self
     */
    public function setReceiverDetails(SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails
     */
    public function getBookingRequestorDetails(): SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails
    {
        return $this->bookingRequestorDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails
     *
     * @return self
     */
    public function setBookingRequestorDetails(SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails): self
    {
        $this->initialized['bookingRequestorDetails'] = true;
        $this->bookingRequestorDetails = $bookingRequestorDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails
     */
    public function getPickupDetails(): SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails
    {
        return $this->pickupDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails $pickupDetails
     *
     * @return self
     */
    public function setPickupDetails(SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;
        return $this;
    }
}