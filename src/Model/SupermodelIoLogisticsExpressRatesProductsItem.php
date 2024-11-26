<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRatesProductsItem
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
     * DHL Express product - Global Product Name
     *
     * @var string
     */
    protected $productName;
    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @var string
     */
    protected $productCode;
    /**
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @var string
     */
    protected $localProductCode;
    /**
     * The country code for the local service used
     *
     * @var string
     */
    protected $localProductCountryCode;
    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product
     *
     * @var string
     */
    protected $networkTypeCode;
    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     *
     * @var bool
     */
    protected $isCustomerAgreement;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressRatesProductsItemWeight
     */
    protected $weight;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem>
     */
    protected $totalPrice;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem>
     */
    protected $totalPriceBreakdown;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem>
     */
    protected $detailedPriceBreakdown;
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem>
     */
    protected $serviceCodeMutuallyExclusiveGroups;
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem>
     */
    protected $serviceCodeDependencyRuleGroups;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities
     */
    protected $pickupCapabilities;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities
     */
    protected $deliveryCapabilities;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRatesProductsItemItemsItem>
     */
    protected $items;
    /**
     * The date when the rates for DHL products and services is provided
     *
     * @var string
     */
    protected $pricingDate;
    /**
     * DHL Express product - Global Product Name
     *
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }
    /**
     * DHL Express product - Global Product Name
     *
     * @param string $productName
     *
     * @return self
     */
    public function setProductName(string $productName): self
    {
        $this->initialized['productName'] = true;
        $this->productName = $productName;
        return $this;
    }
    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }
    /**
     * This is the global DHL Express product code for which the delivery is feasible respecting the input data from the request.
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
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
     *
     * @return string
     */
    public function getLocalProductCode(): string
    {
        return $this->localProductCode;
    }
    /**
     * This is the local DHL Express product code for which the delivery is feasible respecting the input data from the request.
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
     * The country code for the local service used
     *
     * @return string
     */
    public function getLocalProductCountryCode(): string
    {
        return $this->localProductCountryCode;
    }
    /**
     * The country code for the local service used
     *
     * @param string $localProductCountryCode
     *
     * @return self
     */
    public function setLocalProductCountryCode(string $localProductCountryCode): self
    {
        $this->initialized['localProductCountryCode'] = true;
        $this->localProductCountryCode = $localProductCountryCode;
        return $this;
    }
    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product
     *
     * @return string
     */
    public function getNetworkTypeCode(): string
    {
        return $this->networkTypeCode;
    }
    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>             DD: Day Definite product<BR>             TD: Time Definite product
     *
     * @param string $networkTypeCode
     *
     * @return self
     */
    public function setNetworkTypeCode(string $networkTypeCode): self
    {
        $this->initialized['networkTypeCode'] = true;
        $this->networkTypeCode = $networkTypeCode;
        return $this;
    }
    /**
     * Indicator that the product only can be offered to customers with prior agreement.
     *
     * @return bool
     */
    public function getIsCustomerAgreement(): bool
    {
        return $this->isCustomerAgreement;
    }
    /**
     * Indicator that the product only can be offered to customers with prior agreement.
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
     * 
     *
     * @return SupermodelIoLogisticsExpressRatesProductsItemWeight
     */
    public function getWeight(): SupermodelIoLogisticsExpressRatesProductsItemWeight
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressRatesProductsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(SupermodelIoLogisticsExpressRatesProductsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem>
     */
    public function getTotalPrice(): array
    {
        return $this->totalPrice;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceItem> $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(array $totalPrice): self
    {
        $this->initialized['totalPrice'] = true;
        $this->totalPrice = $totalPrice;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem>
     */
    public function getTotalPriceBreakdown(): array
    {
        return $this->totalPriceBreakdown;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemTotalPriceBreakdownItem> $totalPriceBreakdown
     *
     * @return self
     */
    public function setTotalPriceBreakdown(array $totalPriceBreakdown): self
    {
        $this->initialized['totalPriceBreakdown'] = true;
        $this->totalPriceBreakdown = $totalPriceBreakdown;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem>
     */
    public function getDetailedPriceBreakdown(): array
    {
        return $this->detailedPriceBreakdown;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemDetailedPriceBreakdownItem> $detailedPriceBreakdown
     *
     * @return self
     */
    public function setDetailedPriceBreakdown(array $detailedPriceBreakdown): self
    {
        $this->initialized['detailedPriceBreakdown'] = true;
        $this->detailedPriceBreakdown = $detailedPriceBreakdown;
        return $this;
    }
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem>
     */
    public function getServiceCodeMutuallyExclusiveGroups(): array
    {
        return $this->serviceCodeMutuallyExclusiveGroups;
    }
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeMutuallyExclusiveGroupsItem> $serviceCodeMutuallyExclusiveGroups
     *
     * @return self
     */
    public function setServiceCodeMutuallyExclusiveGroups(array $serviceCodeMutuallyExclusiveGroups): self
    {
        $this->initialized['serviceCodeMutuallyExclusiveGroups'] = true;
        $this->serviceCodeMutuallyExclusiveGroups = $serviceCodeMutuallyExclusiveGroups;
        return $this;
    }
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem>
     */
    public function getServiceCodeDependencyRuleGroups(): array
    {
        return $this->serviceCodeDependencyRuleGroups;
    }
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemServiceCodeDependencyRuleGroupsItem> $serviceCodeDependencyRuleGroups
     *
     * @return self
     */
    public function setServiceCodeDependencyRuleGroups(array $serviceCodeDependencyRuleGroups): self
    {
        $this->initialized['serviceCodeDependencyRuleGroups'] = true;
        $this->serviceCodeDependencyRuleGroups = $serviceCodeDependencyRuleGroups;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities
     */
    public function getPickupCapabilities(): SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities
    {
        return $this->pickupCapabilities;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities $pickupCapabilities
     *
     * @return self
     */
    public function setPickupCapabilities(SupermodelIoLogisticsExpressRatesProductsItemPickupCapabilities $pickupCapabilities): self
    {
        $this->initialized['pickupCapabilities'] = true;
        $this->pickupCapabilities = $pickupCapabilities;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities
     */
    public function getDeliveryCapabilities(): SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities
    {
        return $this->deliveryCapabilities;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities $deliveryCapabilities
     *
     * @return self
     */
    public function setDeliveryCapabilities(SupermodelIoLogisticsExpressRatesProductsItemDeliveryCapabilities $deliveryCapabilities): self
    {
        $this->initialized['deliveryCapabilities'] = true;
        $this->deliveryCapabilities = $deliveryCapabilities;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRatesProductsItemItemsItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRatesProductsItemItemsItem> $items
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
     * The date when the rates for DHL products and services is provided
     *
     * @return string
     */
    public function getPricingDate(): string
    {
        return $this->pricingDate;
    }
    /**
     * The date when the rates for DHL products and services is provided
     *
     * @param string $pricingDate
     *
     * @return self
     */
    public function setPricingDate(string $pricingDate): self
    {
        $this->initialized['pricingDate'] = true;
        $this->pricingDate = $pricingDate;
        return $this;
    }
}