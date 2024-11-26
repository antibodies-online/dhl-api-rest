<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressPickupRequestCustomerDetails
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
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails
     */
    protected $shipperDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails
     */
    protected $receiverDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails
     */
    protected $bookingRequestorDetails;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails
     */
    protected $pickupDetails;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails
     */
    public function getShipperDetails(): SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails $shipperDetails
     *
     * @return self
     */
    public function setShipperDetails(SupermodelIoLogisticsExpressPickupRequestCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails
     */
    public function getReceiverDetails(): SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails $receiverDetails
     *
     * @return self
     */
    public function setReceiverDetails(SupermodelIoLogisticsExpressPickupRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails
     */
    public function getBookingRequestorDetails(): SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails
    {
        return $this->bookingRequestorDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails
     *
     * @return self
     */
    public function setBookingRequestorDetails(SupermodelIoLogisticsExpressPickupRequestCustomerDetailsBookingRequestorDetails $bookingRequestorDetails): self
    {
        $this->initialized['bookingRequestorDetails'] = true;
        $this->bookingRequestorDetails = $bookingRequestorDetails;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails
     */
    public function getPickupDetails(): SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails
    {
        return $this->pickupDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails $pickupDetails
     *
     * @return self
     */
    public function setPickupDetails(SupermodelIoLogisticsExpressPickupRequestCustomerDetailsPickupDetails $pickupDetails): self
    {
        $this->initialized['pickupDetails'] = true;
        $this->pickupDetails = $pickupDetails;
        return $this;
    }
}