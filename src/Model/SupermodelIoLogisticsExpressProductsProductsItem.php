<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressProductsProductsItem
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
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product
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
     * @var SupermodelIoLogisticsExpressProductsProductsItemWeight
     */
    protected $weight;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem>
     */
    protected $breakdown;
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem>
     */
    protected $serviceCodeMutuallyExclusiveGroups;
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @var list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem>
     */
    protected $serviceCodeDependencyRuleGroups;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities
     */
    protected $pickupCapabilities;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities
     */
    protected $deliveryCapabilities;
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
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product
     *
     * @return string
     */
    public function getNetworkTypeCode(): string
    {
        return $this->networkTypeCode;
    }
    /**
     * The NetworkTypeCode element indicates the product belongs to the Day Definite (DD) or Time Definite (TD) network.<BR>            Possible Values;<BR>            DD: Day Definite product<BR>            TD: Time Definite product
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
     * @return SupermodelIoLogisticsExpressProductsProductsItemWeight
     */
    public function getWeight(): SupermodelIoLogisticsExpressProductsProductsItemWeight
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressProductsProductsItemWeight $weight
     *
     * @return self
     */
    public function setWeight(SupermodelIoLogisticsExpressProductsProductsItemWeight $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem>
     */
    public function getBreakdown(): array
    {
        return $this->breakdown;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItemBreakdownItem> $breakdown
     *
     * @return self
     */
    public function setBreakdown(array $breakdown): self
    {
        $this->initialized['breakdown'] = true;
        $this->breakdown = $breakdown;
        return $this;
    }
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @return list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem>
     */
    public function getServiceCodeMutuallyExclusiveGroups(): array
    {
        return $this->serviceCodeMutuallyExclusiveGroups;
    }
    /**
     * Group of serviceCodes that are mutually exclusive.  Only one serviceCode among the list must be applied for a shipment
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeMutuallyExclusiveGroupsItem> $serviceCodeMutuallyExclusiveGroups
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
     * @return list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem>
     */
    public function getServiceCodeDependencyRuleGroups(): array
    {
        return $this->serviceCodeDependencyRuleGroups;
    }
    /**
     * Dependency rule groups for a particular serviceCode.
     *
     * @param list<SupermodelIoLogisticsExpressProductsProductsItemServiceCodeDependencyRuleGroupsItem> $serviceCodeDependencyRuleGroups
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
     * @return SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities
     */
    public function getPickupCapabilities(): SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities
    {
        return $this->pickupCapabilities;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities $pickupCapabilities
     *
     * @return self
     */
    public function setPickupCapabilities(SupermodelIoLogisticsExpressProductsProductsItemPickupCapabilities $pickupCapabilities): self
    {
        $this->initialized['pickupCapabilities'] = true;
        $this->pickupCapabilities = $pickupCapabilities;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities
     */
    public function getDeliveryCapabilities(): SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities
    {
        return $this->deliveryCapabilities;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities $deliveryCapabilities
     *
     * @return self
     */
    public function setDeliveryCapabilities(SupermodelIoLogisticsExpressProductsProductsItemDeliveryCapabilities $deliveryCapabilities): self
    {
        $this->initialized['deliveryCapabilities'] = true;
        $this->deliveryCapabilities = $deliveryCapabilities;
        return $this;
    }
}