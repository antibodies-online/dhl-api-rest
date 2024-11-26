<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentResponseShipmentDetailsItemOriginServiceArea
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
     * @var string
     */
    protected $facilityCode;
    /**
     * 
     *
     * @var string
     */
    protected $serviceAreaCode;
    /**
     * 
     *
     * @var string
     */
    protected $outboundSortCode;
    /**
     * 
     *
     * @return string
     */
    public function getFacilityCode(): string
    {
        return $this->facilityCode;
    }
    /**
     * 
     *
     * @param string $facilityCode
     *
     * @return self
     */
    public function setFacilityCode(string $facilityCode): self
    {
        $this->initialized['facilityCode'] = true;
        $this->facilityCode = $facilityCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getServiceAreaCode(): string
    {
        return $this->serviceAreaCode;
    }
    /**
     * 
     *
     * @param string $serviceAreaCode
     *
     * @return self
     */
    public function setServiceAreaCode(string $serviceAreaCode): self
    {
        $this->initialized['serviceAreaCode'] = true;
        $this->serviceAreaCode = $serviceAreaCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOutboundSortCode(): string
    {
        return $this->outboundSortCode;
    }
    /**
     * 
     *
     * @param string $outboundSortCode
     *
     * @return self
     */
    public function setOutboundSortCode(string $outboundSortCode): self
    {
        $this->initialized['outboundSortCode'] = true;
        $this->outboundSortCode = $outboundSortCode;
        return $this;
    }
}