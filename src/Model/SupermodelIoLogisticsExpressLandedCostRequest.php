<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressLandedCostRequest
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
     * Here you need to define all the parties needed to ship the package
     *
     * @var SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
     */
    protected $customerDetails;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @var list<SupermodelIoLogisticsExpressAccount>
     */
    protected $accounts;
    /**
     * Please enter DHL Express Global Product code
     *
     * @var string
     */
    protected $productCode;
    /**
     * Please enter DHL Express Local Product code
     *
     * @var string
     */
    protected $localProductCode;
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Set this to true is shipment contains declarable content
     *
     * @var bool
     */
    protected $isCustomsDeclarable;
    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination
     *
     * @var bool
     */
    protected $isDTPRequested;
    /**
     * Set this true if you ask for DHL Express insurance service
     *
     * @var bool
     */
    protected $isInsuranceRequested;
    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned
     *
     * @var bool
     */
    protected $getCostBreakdown;
    /**
     * Please provide any additional charges you would like to include in total cost calculation
     *
     * @var list<SupermodelIoLogisticsExpressLandedCostRequestChargesItem>
     */
    protected $charges;
    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C
     *
     * @var string
     */
    protected $shipmentPurpose;
    /**
     * 
     *
     * @var string
     */
    protected $transportationMode;
    /**
     * Carrier being used to ship with. Allowed values are:<BR>      'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'
     *
     * @var string
     */
    protected $merchantSelectedCarrierName;
    /**
     * Here you can define properties per package
     *
     * @var list<SupermodelIoLogisticsExpressPackageRR>
     */
    protected $packages;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressLandedCostRequestItemsItem>
     */
    protected $items;
    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned
     *
     * @var bool
     */
    protected $getTariffFormula;
    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned
     *
     * @var bool
     */
    protected $getQuotationID;
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @return SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @param SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressLandedCostRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;
        return $this;
    }
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @return list<SupermodelIoLogisticsExpressAccount>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @param list<SupermodelIoLogisticsExpressAccount> $accounts
     *
     * @return self
     */
    public function setAccounts(array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * Please enter DHL Express Global Product code
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * Please enter DHL Express Global Product code
     *
     * @param string $productCode
     *
     * @return self
     */
    public function setProductCode(string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Please enter DHL Express Local Product code
     *
     * @return string
     */
    public function getLocalProductCode(): string
    {
        return $this->localProductCode;
    }
    /**
     * Please enter DHL Express Local Product code
     *
     * @param string $localProductCode
     *
     * @return self
     */
    public function setLocalProductCode(string $localProductCode): self
    {
        $this->initialized['localProductCode'] = true;
        $this->localProductCode = $localProductCode;
        return $this;
    }
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @return string
     */
    public function getUnitOfMeasurement(): string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @param string $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency
     *
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }
    /**
     * Currency code for the item price (the product being sold) and freight charge. The Landed Cost calculation result will be returned in this defined currency
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Set this to true is shipment contains declarable content
     *
     * @return bool
     */
    public function getIsCustomsDeclarable(): bool
    {
        return $this->isCustomsDeclarable;
    }
    /**
     * Set this to true is shipment contains declarable content
     *
     * @param bool $isCustomsDeclarable
     *
     * @return self
     */
    public function setIsCustomsDeclarable(bool $isCustomsDeclarable): self
    {
        $this->initialized['isCustomsDeclarable'] = true;
        $this->isCustomsDeclarable = $isCustomsDeclarable;
        return $this;
    }
    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination
     *
     * @return bool
     */
    public function getIsDTPRequested(): bool
    {
        return $this->isDTPRequested;
    }
    /**
     * Set this to true if you want DHL EXpress product Duties and Taxes Paid outside shipment destination
     *
     * @param bool $isDTPRequested
     *
     * @return self
     */
    public function setIsDTPRequested(bool $isDTPRequested): self
    {
        $this->initialized['isDTPRequested'] = true;
        $this->isDTPRequested = $isDTPRequested;
        return $this;
    }
    /**
     * Set this true if you ask for DHL Express insurance service
     *
     * @return bool
     */
    public function getIsInsuranceRequested(): bool
    {
        return $this->isInsuranceRequested;
    }
    /**
     * Set this true if you ask for DHL Express insurance service
     *
     * @param bool $isInsuranceRequested
     *
     * @return self
     */
    public function setIsInsuranceRequested(bool $isInsuranceRequested): self
    {
        $this->initialized['isInsuranceRequested'] = true;
        $this->isInsuranceRequested = $isInsuranceRequested;
        return $this;
    }
    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned
     *
     * @return bool
     */
    public function getGetCostBreakdown(): bool
    {
        return $this->getCostBreakdown;
    }
    /**
     * Allowed values 'true' - item cost breakdown will be returned, 'false' - item cost breakdown will not be returned
     *
     * @param bool $getCostBreakdown
     *
     * @return self
     */
    public function setGetCostBreakdown(bool $getCostBreakdown): self
    {
        $this->initialized['getCostBreakdown'] = true;
        $this->getCostBreakdown = $getCostBreakdown;
        return $this;
    }
    /**
     * Please provide any additional charges you would like to include in total cost calculation
     *
     * @return list<SupermodelIoLogisticsExpressLandedCostRequestChargesItem>
     */
    public function getCharges(): array
    {
        return $this->charges;
    }
    /**
     * Please provide any additional charges you would like to include in total cost calculation
     *
     * @param list<SupermodelIoLogisticsExpressLandedCostRequestChargesItem> $charges
     *
     * @return self
     */
    public function setCharges(array $charges): self
    {
        $this->initialized['charges'] = true;
        $this->charges = $charges;
        return $this;
    }
    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C
     *
     * @return string
     */
    public function getShipmentPurpose(): string
    {
        return $this->shipmentPurpose;
    }
    /**
     * Possible values:<BR>      commercial: B2B<BR>      personal: B2C<BR>      commercia': B2B<BR>      personal: B2C
     *
     * @param string $shipmentPurpose
     *
     * @return self
     */
    public function setShipmentPurpose(string $shipmentPurpose): self
    {
        $this->initialized['shipmentPurpose'] = true;
        $this->shipmentPurpose = $shipmentPurpose;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransportationMode(): string
    {
        return $this->transportationMode;
    }
    /**
     * 
     *
     * @param string $transportationMode
     *
     * @return self
     */
    public function setTransportationMode(string $transportationMode): self
    {
        $this->initialized['transportationMode'] = true;
        $this->transportationMode = $transportationMode;
        return $this;
    }
    /**
     * Carrier being used to ship with. Allowed values are:<BR>      'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'
     *
     * @return string
     */
    public function getMerchantSelectedCarrierName(): string
    {
        return $this->merchantSelectedCarrierName;
    }
    /**
     * Carrier being used to ship with. Allowed values are:<BR>      'DHL','UPS','FEDEX','TNT','POST',<BR>      'OTHERS'
     *
     * @param string $merchantSelectedCarrierName
     *
     * @return self
     */
    public function setMerchantSelectedCarrierName(string $merchantSelectedCarrierName): self
    {
        $this->initialized['merchantSelectedCarrierName'] = true;
        $this->merchantSelectedCarrierName = $merchantSelectedCarrierName;
        return $this;
    }
    /**
     * Here you can define properties per package
     *
     * @return list<SupermodelIoLogisticsExpressPackageRR>
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
    /**
     * Here you can define properties per package
     *
     * @param list<SupermodelIoLogisticsExpressPackageRR> $packages
     *
     * @return self
     */
    public function setPackages(array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressLandedCostRequestItemsItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressLandedCostRequestItemsItem> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned
     *
     * @return bool
     */
    public function getGetTariffFormula(): bool
    {
        return $this->getTariffFormula;
    }
    /**
     * Allowed values 'true' - tariff formula on item and shipment level will be returned, 'false' - tariff formula on item and shipment level will not be returned
     *
     * @param bool $getTariffFormula
     *
     * @return self
     */
    public function setGetTariffFormula(bool $getTariffFormula): self
    {
        $this->initialized['getTariffFormula'] = true;
        $this->getTariffFormula = $getTariffFormula;
        return $this;
    }
    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned
     *
     * @return bool
     */
    public function getGetQuotationID(): bool
    {
        return $this->getQuotationID;
    }
    /**
     * Allowed values 'true' - quotation ID on shipment level will be returned, 'false' - quotation ID on shipment level will not be returned
     *
     * @param bool $getQuotationID
     *
     * @return self
     */
    public function setGetQuotationID(bool $getQuotationID): self
    {
        $this->initialized['getQuotationID'] = true;
        $this->getQuotationID = $getQuotationID;
        return $this;
    }
}