<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem
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
     * Provide type code of data that can be returned in response.  Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups
     *
     * @var string
     */
    protected $typeCode;
    /**
     * 
     *
     * @var bool
     */
    protected $isRequested;
    /**
     * Provide type code of data that can be returned in response.  Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Provide type code of data that can be returned in response.  Values can be allValueAddedServices, allValueAddedServicesAndRuleGroups
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsRequested(): bool
    {
        return $this->isRequested;
    }
    /**
     * 
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
}