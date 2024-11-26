<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem
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
     * Breakdown Name. <BR> name within the first occurrence of breakdown will be the Global Product Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery
     *
     * @var string
     */
    protected $serviceCode;
    /**
     * Local service code
     *
     * @var string
     */
    protected $localServiceCode;
    /**
     * Breakdown type code. <BR> typeCode within the first occurrence of breakdown will be the Local Product Name.
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Special service charge code type for service.
     *
     * @var string
     */
    protected $serviceTypeCode;
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement
     *
     * @var bool
     */
    protected $isCustomerAgreement;
    /**
     * Indicator if the special service is marketed service
     *
     * @var bool
     */
    protected $isMarketedService;
    /**
     * Indicator if there is any discount allowed
     *
     * @var bool
     */
    protected $isBillingServiceIndicator;
    /**
     * Breakdown Name. <BR> name within the first occurrence of breakdown will be the Global Product Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Breakdown Name. <BR> name within the first occurrence of breakdown will be the Global Product Name.
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
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery
     *
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }
    /**
     * Special service or extra charge code.  This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode(string $serviceCode): self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * Local service code
     *
     * @return string
     */
    public function getLocalServiceCode(): string
    {
        return $this->localServiceCode;
    }
    /**
     * Local service code
     *
     * @param string $localServiceCode
     *
     * @return self
     */
    public function setLocalServiceCode(string $localServiceCode): self
    {
        $this->initialized['localServiceCode'] = true;
        $this->localServiceCode = $localServiceCode;
        return $this;
    }
    /**
     * Breakdown type code. <BR> typeCode within the first occurrence of breakdown will be the Local Product Name.
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Breakdown type code. <BR> typeCode within the first occurrence of breakdown will be the Local Product Name.
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
     * Special service charge code type for service.
     *
     * @return string
     */
    public function getServiceTypeCode(): string
    {
        return $this->serviceTypeCode;
    }
    /**
     * Special service charge code type for service.
     *
     * @param string $serviceTypeCode
     *
     * @return self
     */
    public function setServiceTypeCode(string $serviceTypeCode): self
    {
        $this->initialized['serviceTypeCode'] = true;
        $this->serviceTypeCode = $serviceTypeCode;
        return $this;
    }
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement
     *
     * @return bool
     */
    public function getIsCustomerAgreement(): bool
    {
        return $this->isCustomerAgreement;
    }
    /**
     * Customer agreement indicator for product and services, if service is offered with prior customer agreement
     *
     * @param bool $isCustomerAgreement
     *
     * @return self
     */
    public function setIsCustomerAgreement(bool $isCustomerAgreement): self
    {
        $this->initialized['isCustomerAgreement'] = true;
        $this->isCustomerAgreement = $isCustomerAgreement;
        return $this;
    }
    /**
     * Indicator if the special service is marketed service
     *
     * @return bool
     */
    public function getIsMarketedService(): bool
    {
        return $this->isMarketedService;
    }
    /**
     * Indicator if the special service is marketed service
     *
     * @param bool $isMarketedService
     *
     * @return self
     */
    public function setIsMarketedService(bool $isMarketedService): self
    {
        $this->initialized['isMarketedService'] = true;
        $this->isMarketedService = $isMarketedService;
        return $this;
    }
    /**
     * Indicator if there is any discount allowed
     *
     * @return bool
     */
    public function getIsBillingServiceIndicator(): bool
    {
        return $this->isBillingServiceIndicator;
    }
    /**
     * Indicator if there is any discount allowed
     *
     * @param bool $isBillingServiceIndicator
     *
     * @return self
     */
    public function setIsBillingServiceIndicator(bool $isBillingServiceIndicator): self
    {
        $this->initialized['isBillingServiceIndicator'] = true;
        $this->isBillingServiceIndicator = $isBillingServiceIndicator;
        return $this;
    }
}