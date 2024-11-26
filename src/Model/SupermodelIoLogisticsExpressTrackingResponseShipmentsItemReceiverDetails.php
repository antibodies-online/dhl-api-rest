<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetails
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
     * @var SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress
     */
    protected $postalAddress;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem>
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
     * @return SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress
     */
    public function getPostalAddress(): SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress
    {
        return $this->postalAddress;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsPostalAddress $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem>
     */
    public function getServiceArea(): array
    {
        return $this->serviceArea;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem> $serviceArea
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