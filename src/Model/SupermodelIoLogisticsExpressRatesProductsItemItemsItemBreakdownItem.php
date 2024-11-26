<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItem
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
     * Name of the charge
     *
     * @var string
     */
    protected $name;
    /**
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery
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
     * Charge type or category.<BR>                        Possible values;<BR>                        - DUTY<BR>                        - TAX<BR>                        - FEE
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Special service charge code type for service. XCH type charge codes are Optional Services and should be displayed to users for selection.<BR>                        The possible values are;<BR>                        - XCH = Extra charge<BR>                        - FEE = Fee<BR>                        - SCH = Surcharge<BR>                        - NRI = Non Revenue Item<BR>                        Other charges may be automatically returned when applicable.
     *
     * @var string
     */
    protected $serviceTypeCode;
    /**
     * The charge amount of the line item charge.
     *
     * @var float
     */
    protected $price;
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @var string
     */
    protected $priceCurrency;
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
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem>
     */
    protected $priceBreakdown;
    /**
     * Tariff Rate Formula on Line Item Level
     *
     * @var string
     */
    protected $tariffRateFormula;
    /**
     * Name of the charge
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the charge
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
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery
     *
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }
    /**
     * Special service or extra charge code. This is the code you would have to use in the /shipment service if you wish to add an optional Service such as Saturday delivery
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
     * Charge type or category.<BR>                        Possible values;<BR>                        - DUTY<BR>                        - TAX<BR>                        - FEE
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Charge type or category.<BR>                        Possible values;<BR>                        - DUTY<BR>                        - TAX<BR>                        - FEE
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
     * Special service charge code type for service. XCH type charge codes are Optional Services and should be displayed to users for selection.<BR>                        The possible values are;<BR>                        - XCH = Extra charge<BR>                        - FEE = Fee<BR>                        - SCH = Surcharge<BR>                        - NRI = Non Revenue Item<BR>                        Other charges may be automatically returned when applicable.
     *
     * @return string
     */
    public function getServiceTypeCode(): string
    {
        return $this->serviceTypeCode;
    }
    /**
     * Special service charge code type for service. XCH type charge codes are Optional Services and should be displayed to users for selection.<BR>                        The possible values are;<BR>                        - XCH = Extra charge<BR>                        - FEE = Fee<BR>                        - SCH = Surcharge<BR>                        - NRI = Non Revenue Item<BR>                        Other charges may be automatically returned when applicable.
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
     * The charge amount of the line item charge.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
    /**
     * The charge amount of the line item charge.
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @return string
     */
    public function getPriceCurrency(): string
    {
        return $this->priceCurrency;
    }
    /**
     * This the currency of the rated shipment for the prices listed.
     *
     * @param string $priceCurrency
     *
     * @return self
     */
    public function setPriceCurrency(string $priceCurrency): self
    {
        $this->initialized['priceCurrency'] = true;
        $this->priceCurrency = $priceCurrency;
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
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem>
     */
    public function getPriceBreakdown(): array
    {
        return $this->priceBreakdown;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemItemsItemBreakdownItemPriceBreakdownItem> $priceBreakdown
     *
     * @return self
     */
    public function setPriceBreakdown(array $priceBreakdown): self
    {
        $this->initialized['priceBreakdown'] = true;
        $this->priceBreakdown = $priceBreakdown;
        return $this;
    }
    /**
     * Tariff Rate Formula on Line Item Level
     *
     * @return string
     */
    public function getTariffRateFormula(): string
    {
        return $this->tariffRateFormula;
    }
    /**
     * Tariff Rate Formula on Line Item Level
     *
     * @param string $tariffRateFormula
     *
     * @return self
     */
    public function setTariffRateFormula(string $tariffRateFormula): self
    {
        $this->initialized['tariffRateFormula'] = true;
        $this->tariffRateFormula = $tariffRateFormula;
        return $this;
    }
}