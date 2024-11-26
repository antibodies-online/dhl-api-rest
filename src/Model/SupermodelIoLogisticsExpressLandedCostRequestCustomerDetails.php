<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
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
     * Address defintion for rating related services
     *
     * @var SupermodelIoLogisticsExpressAddressRatesRequest
     */
    protected $shipperDetails;
    /**
     * Address defintion for rating related services
     *
     * @var SupermodelIoLogisticsExpressAddressRatesRequest
     */
    protected $receiverDetails;
    /**
     * Address defintion for rating related services
     *
     * @return SupermodelIoLogisticsExpressAddressRatesRequest
     */
    public function getShipperDetails(): SupermodelIoLogisticsExpressAddressRatesRequest
    {
        return $this->shipperDetails;
    }
    /**
     * Address defintion for rating related services
     *
     * @param SupermodelIoLogisticsExpressAddressRatesRequest $shipperDetails
     *
     * @return self
     */
    public function setShipperDetails(SupermodelIoLogisticsExpressAddressRatesRequest $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;
        return $this;
    }
    /**
     * Address defintion for rating related services
     *
     * @return SupermodelIoLogisticsExpressAddressRatesRequest
     */
    public function getReceiverDetails(): SupermodelIoLogisticsExpressAddressRatesRequest
    {
        return $this->receiverDetails;
    }
    /**
     * Address defintion for rating related services
     *
     * @param SupermodelIoLogisticsExpressAddressRatesRequest $receiverDetails
     *
     * @return self
     */
    public function setReceiverDetails(SupermodelIoLogisticsExpressAddressRatesRequest $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;
        return $this;
    }
}