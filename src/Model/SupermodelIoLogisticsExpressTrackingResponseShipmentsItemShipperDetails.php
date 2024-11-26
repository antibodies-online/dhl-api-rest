<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetails
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
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.                  
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
     */
    protected $postalAddress;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem>
     */
    protected $serviceArea;
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.                  
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.                  
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
     */
    public function getPostalAddress(): SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress
    {
        return $this->postalAddress;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsPostalAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem>
     */
    public function getServiceArea(): array
    {
        return $this->serviceArea;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemShipperDetailsServiceAreaItem> $serviceArea
     *
     * @return self
     */
    public function setServiceArea(array $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;
        return $this;
    }
}