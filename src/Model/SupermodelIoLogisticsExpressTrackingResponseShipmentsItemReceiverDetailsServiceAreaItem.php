<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemReceiverDetailsServiceAreaItem
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
    protected $code;
    /**
     * 
     *
     * @var string
     */
    protected $description;
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
    protected $inboundSortCode;
    /**
     * 
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
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
    public function getInboundSortCode(): string
    {
        return $this->inboundSortCode;
    }
    /**
     * 
     *
     * @param string $inboundSortCode
     *
     * @return self
     */
    public function setInboundSortCode(string $inboundSortCode): self
    {
        $this->initialized['inboundSortCode'] = true;
        $this->inboundSortCode = $inboundSortCode;
        return $this;
    }
}