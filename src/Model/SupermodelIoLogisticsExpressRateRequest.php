<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressRateRequest
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
     * @var SupermodelIoLogisticsExpressRateRequestCustomerDetails
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
     * Please use if you wish to filter the response by value added services
     *
     * @var list<SupermodelIoLogisticsExpressValueAddedServicesRates>
     */
    protected $valueAddedServices;
    /**
     * Please use if you wish to filter the response by product(s) and/or value added services
     *
     * @var list<SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem>
     */
    protected $productsAndServices;
    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country)
     *
     * @var string
     */
    protected $payerCountryCode;
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     *
     * @var string
     */
    protected $plannedShippingDateAndTime;
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false)
     *
     * @var bool
     */
    protected $isCustomsDeclarable;
    /**
     * Please provide monetary amount related to your shipment, for example shipment declared value
     *
     * @var list<SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem>
     */
    protected $monetaryAmount;
    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available
     *
     * @var bool
     */
    protected $requestAllValueAddedServices;
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @var SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate
     */
    protected $estimatedDeliveryDate;
    /**
     * Provides additional information in the response like all value added services, and rule groups
     *
     * @var list<SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem>
     */
    protected $getAdditionalInformation;
    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement
     *
     * @var bool
     */
    protected $returnStandardProductsOnly;
    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day
     *
     * @var bool
     */
    protected $nextBusinessDay = false;
    /**
     * Please select which type of priducts you are interested in
     *
     * @var string
     */
    protected $productTypeCode;
    /**
     * Here you can define properties per package
     *
     * @var list<SupermodelIoLogisticsExpressPackageRR>
     */
    protected $packages;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressRateRequestCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressRateRequestCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressRateRequestCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressRateRequestCustomerDetails $customerDetails): self
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
     * Please use if you wish to filter the response by value added services
     *
     * @return list<SupermodelIoLogisticsExpressValueAddedServicesRates>
     */
    public function getValueAddedServices(): array
    {
        return $this->valueAddedServices;
    }
    /**
     * Please use if you wish to filter the response by value added services
     *
     * @param list<SupermodelIoLogisticsExpressValueAddedServicesRates> $valueAddedServices
     *
     * @return self
     */
    public function setValueAddedServices(array $valueAddedServices): self
    {
        $this->initialized['valueAddedServices'] = true;
        $this->valueAddedServices = $valueAddedServices;
        return $this;
    }
    /**
     * Please use if you wish to filter the response by product(s) and/or value added services
     *
     * @return list<SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem>
     */
    public function getProductsAndServices(): array
    {
        return $this->productsAndServices;
    }
    /**
     * Please use if you wish to filter the response by product(s) and/or value added services
     *
     * @param list<SupermodelIoLogisticsExpressRateRequestProductsAndServicesItem> $productsAndServices
     *
     * @return self
     */
    public function setProductsAndServices(array $productsAndServices): self
    {
        $this->initialized['productsAndServices'] = true;
        $this->productsAndServices = $productsAndServices;
        return $this;
    }
    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country)
     *
     * @return string
     */
    public function getPayerCountryCode(): string
    {
        return $this->payerCountryCode;
    }
    /**
     * payerCountryCode is to be provided if your profile has been enabled to view rates without an account number (this will provide DHL Express published rates for the payer country)
     *
     * @param string $payerCountryCode
     *
     * @return self
     */
    public function setPayerCountryCode(string $payerCountryCode): self
    {
        $this->initialized['payerCountryCode'] = true;
        $this->payerCountryCode = $payerCountryCode;
        return $this;
    }
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     *
     * @return string
     */
    public function getPlannedShippingDateAndTime(): string
    {
        return $this->plannedShippingDateAndTime;
    }
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be a past date or a date more than 10 days in the future. The time is the local time of the shipment based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24 hour clock. The date and time parts are separated by the letter T (e.g. 2006-06-26T17:00:00 GMT+01:00).
     *
     * @param string $plannedShippingDateAndTime
     *
     * @return self
     */
    public function setPlannedShippingDateAndTime(string $plannedShippingDateAndTime): self
    {
        $this->initialized['plannedShippingDateAndTime'] = true;
        $this->plannedShippingDateAndTime = $plannedShippingDateAndTime;
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
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false)
     *
     * @return bool
     */
    public function getIsCustomsDeclarable(): bool
    {
        return $this->isCustomsDeclarable;
    }
    /**
     * For customs purposes please advise if your shipment is dutiable (true) or non dutiable (false)
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
     * Please provide monetary amount related to your shipment, for example shipment declared value
     *
     * @return list<SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem>
     */
    public function getMonetaryAmount(): array
    {
        return $this->monetaryAmount;
    }
    /**
     * Please provide monetary amount related to your shipment, for example shipment declared value
     *
     * @param list<SupermodelIoLogisticsExpressRateRequestMonetaryAmountItem> $monetaryAmount
     *
     * @return self
     */
    public function setMonetaryAmount(array $monetaryAmount): self
    {
        $this->initialized['monetaryAmount'] = true;
        $this->monetaryAmount = $monetaryAmount;
        return $this;
    }
    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available
     *
     * @return bool
     */
    public function getRequestAllValueAddedServices(): bool
    {
        return $this->requestAllValueAddedServices;
    }
    /**
     * Legacy field and replaced by newer field getAdditionalInformation. Please set this to true to receive all value added services for each product available
     *
     * @param bool $requestAllValueAddedServices
     *
     * @return self
     */
    public function setRequestAllValueAddedServices(bool $requestAllValueAddedServices): self
    {
        $this->initialized['requestAllValueAddedServices'] = true;
        $this->requestAllValueAddedServices = $requestAllValueAddedServices;
        return $this;
    }
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @return SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate
     */
    public function getEstimatedDeliveryDate(): SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate
    {
        return $this->estimatedDeliveryDate;
    }
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @param SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate $estimatedDeliveryDate
     *
     * @return self
     */
    public function setEstimatedDeliveryDate(SupermodelIoLogisticsExpressRateRequestEstimatedDeliveryDate $estimatedDeliveryDate): self
    {
        $this->initialized['estimatedDeliveryDate'] = true;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }
    /**
     * Provides additional information in the response like all value added services, and rule groups
     *
     * @return list<SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem>
     */
    public function getGetAdditionalInformation(): array
    {
        return $this->getAdditionalInformation;
    }
    /**
     * Provides additional information in the response like all value added services, and rule groups
     *
     * @param list<SupermodelIoLogisticsExpressRateRequestGetAdditionalInformationItem> $getAdditionalInformation
     *
     * @return self
     */
    public function setGetAdditionalInformation(array $getAdditionalInformation): self
    {
        $this->initialized['getAdditionalInformation'] = true;
        $this->getAdditionalInformation = $getAdditionalInformation;
        return $this;
    }
    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement
     *
     * @return bool
     */
    public function getReturnStandardProductsOnly(): bool
    {
        return $this->returnStandardProductsOnly;
    }
    /**
     * Please set this to true to filter out all products which needs DHL Express special customer agreement
     *
     * @param bool $returnStandardProductsOnly
     *
     * @return self
     */
    public function setReturnStandardProductsOnly(bool $returnStandardProductsOnly): self
    {
        $this->initialized['returnStandardProductsOnly'] = true;
        $this->returnStandardProductsOnly = $returnStandardProductsOnly;
        return $this;
    }
    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day
     *
     * @return bool
     */
    public function getNextBusinessDay(): bool
    {
        return $this->nextBusinessDay;
    }
    /**
     * Please set this to true in case you want to receive products which are not available on planned shipping date but next available day
     *
     * @param bool $nextBusinessDay
     *
     * @return self
     */
    public function setNextBusinessDay(bool $nextBusinessDay): self
    {
        $this->initialized['nextBusinessDay'] = true;
        $this->nextBusinessDay = $nextBusinessDay;
        return $this;
    }
    /**
     * Please select which type of priducts you are interested in
     *
     * @return string
     */
    public function getProductTypeCode(): string
    {
        return $this->productTypeCode;
    }
    /**
     * Please select which type of priducts you are interested in
     *
     * @param string $productTypeCode
     *
     * @return self
     */
    public function setProductTypeCode(string $productTypeCode): self
    {
        $this->initialized['productTypeCode'] = true;
        $this->productTypeCode = $productTypeCode;
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
}