<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestCustomerDetailsPickupDetails
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
     * @var SupermodelIoLogisticsExpressAddress
     */
    protected $postalAddress;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressContact
     */
    protected $contactInformation;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressAddress
     */
    public function getPostalAddress(): SupermodelIoLogisticsExpressAddress
    {
        return $this->postalAddress;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressAddress $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(SupermodelIoLogisticsExpressAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressContact
     */
    public function getContactInformation(): SupermodelIoLogisticsExpressContact
    {
        return $this->contactInformation;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressContact $contactInformation
     *
     * @return self
     */
    public function setContactInformation(SupermodelIoLogisticsExpressContact $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;
        return $this;
    }
}