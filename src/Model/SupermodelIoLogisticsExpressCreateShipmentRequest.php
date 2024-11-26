<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequest
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
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be in the past or more than 10 days in the future. The time represents the local time of the shipment origin coupled with corresponding time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24-hour clock. The date and time parts are separated by the letter T (e.g., 2025-01-18T17:00:00 GMT+01:00). It is not recommended to populate this field with current time, the time the request is sent to DHL Express as it may be evaluated as being in the past the time it is received.
     *
     * @var string
     */
    protected $plannedShippingDateAndTime;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestPickup
     */
    protected $pickup;
    /**
     * Please enter DHL Express Global Product code
     *
     * @var string
     */
    protected $productCode;
    /**
     * Please enter DHL Express Local Product code. Important when shipping domestic products.
     *
     * @var string
     */
    protected $localProductCode;
    /**
     * Please advise if you want to get rate estimates for given shipment
     *
     * @var bool
     */
    protected $getRateEstimates = false;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment
     *
     * @var list<SupermodelIoLogisticsExpressAccount>
     */
    protected $accounts;
    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @var list<SupermodelIoLogisticsExpressValueAddedServices>
     */
    protected $valueAddedServices;
    /**
     * Here you can modify label, waybillDoc, invoice and shipment receipt properties
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties
     */
    protected $outputImageProperties;
    /**
     * Here you can declare your customer references
     *
     * @var list<SupermodelIoLogisticsExpressReference>
     */
    protected $customerReferences;
    /**
     * Identifiers section is on the shipment level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @var list<SupermodelIoLogisticsExpressIdentifier>
     */
    protected $identifiers;
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails
     */
    protected $customerDetails;
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContent
     */
    protected $content;
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned
     *
     * @var list<SupermodelIoLogisticsExpressDocumentImagesItem>
     */
    protected $documentImages;
    /**
     * Here you can provide data in case you wish to use DHL Express On demand delivery service
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery
     */
    protected $onDemandDelivery;
    /**
     * Determines whether to request the On Demand Delivery (ODD) link. When set to true it will provide an URL link for the specified Waybill Number, Shipper Account Number. The default value is false, no ODD link URL is provided in the response message.
     *
     * @var bool
     */
    protected $requestOndemandDeliveryURL;
    /**
     * This is to support sending email notification once the shipment is created. The email will contain the basic information on the shipper, recipient, waybill number, and shipment information
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem>
     */
    protected $shipmentNotification;
    /**
     * Please provide any charges you have already paid for this shipment, like freight paid upfront. To allow using this section please contact your DHL Express representative
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem>
     */
    protected $prepaidCharges;
    /**
     * If set to true, response will return transliterated text of shipper and receiver details.
     *
     * @var bool
     */
    protected $getTransliteratedResponse;
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate
     */
    protected $estimatedDeliveryDate;
    /**
     * Provides additional information in the response like service area details, routing code and pickup-related information
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem>
     */
    protected $getAdditionalInformation;
    /**
     * Please provide the parent (mother) shipment details
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment
     */
    protected $parentShipment;
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be in the past or more than 10 days in the future. The time represents the local time of the shipment origin coupled with corresponding time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24-hour clock. The date and time parts are separated by the letter T (e.g., 2025-01-18T17:00:00 GMT+01:00). It is not recommended to populate this field with current time, the time the request is sent to DHL Express as it may be evaluated as being in the past the time it is received.
     *
     * @return string
     */
    public function getPlannedShippingDateAndTime(): string
    {
        return $this->plannedShippingDateAndTime;
    }
    /**
     * Identifies the date and time the package is tendered. Both the date and time portions of the string are expected to be used. The date should not be in the past or more than 10 days in the future. The time represents the local time of the shipment origin coupled with corresponding time zone. The date component must be in the format: YYYY-MM-DD; the time component must be in the format: HH:MM:SS using a 24-hour clock. The date and time parts are separated by the letter T (e.g., 2025-01-18T17:00:00 GMT+01:00). It is not recommended to populate this field with current time, the time the request is sent to DHL Express as it may be evaluated as being in the past the time it is received.
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
     * 
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestPickup
     */
    public function getPickup(): SupermodelIoLogisticsExpressCreateShipmentRequestPickup
    {
        return $this->pickup;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestPickup $pickup
     *
     * @return self
     */
    public function setPickup(SupermodelIoLogisticsExpressCreateShipmentRequestPickup $pickup): self
    {
        $this->initialized['pickup'] = true;
        $this->pickup = $pickup;
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
     * Please enter DHL Express Local Product code. Important when shipping domestic products.
     *
     * @return string
     */
    public function getLocalProductCode(): string
    {
        return $this->localProductCode;
    }
    /**
     * Please enter DHL Express Local Product code. Important when shipping domestic products.
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
     * Please advise if you want to get rate estimates for given shipment
     *
     * @return bool
     */
    public function getGetRateEstimates(): bool
    {
        return $this->getRateEstimates;
    }
    /**
     * Please advise if you want to get rate estimates for given shipment
     *
     * @param bool $getRateEstimates
     *
     * @return self
     */
    public function setGetRateEstimates(bool $getRateEstimates): self
    {
        $this->initialized['getRateEstimates'] = true;
        $this->getRateEstimates = $getRateEstimates;
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
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @return list<SupermodelIoLogisticsExpressValueAddedServices>
     */
    public function getValueAddedServices(): array
    {
        return $this->valueAddedServices;
    }
    /**
     * This section communicates additional shipping services, such as Insurance (or Shipment Value Protection).
     *
     * @param list<SupermodelIoLogisticsExpressValueAddedServices> $valueAddedServices
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
     * Here you can modify label, waybillDoc, invoice and shipment receipt properties
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties
     */
    public function getOutputImageProperties(): SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties
    {
        return $this->outputImageProperties;
    }
    /**
     * Here you can modify label, waybillDoc, invoice and shipment receipt properties
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties $outputImageProperties
     *
     * @return self
     */
    public function setOutputImageProperties(SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties $outputImageProperties): self
    {
        $this->initialized['outputImageProperties'] = true;
        $this->outputImageProperties = $outputImageProperties;
        return $this;
    }
    /**
     * Here you can declare your customer references
     *
     * @return list<SupermodelIoLogisticsExpressReference>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * Here you can declare your customer references
     *
     * @param list<SupermodelIoLogisticsExpressReference> $customerReferences
     *
     * @return self
     */
    public function setCustomerReferences(array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;
        return $this;
    }
    /**
     * Identifiers section is on the shipment level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @return list<SupermodelIoLogisticsExpressIdentifier>
     */
    public function getIdentifiers(): array
    {
        return $this->identifiers;
    }
    /**
     * Identifiers section is on the shipment level where you can optionaly provide a DHL Express waybill number. This has to be enabled by your DHL Express IT contact.
     *
     * @param list<SupermodelIoLogisticsExpressIdentifier> $identifiers
     *
     * @return self
     */
    public function setIdentifiers(array $identifiers): self
    {
        $this->initialized['identifiers'] = true;
        $this->identifiers = $identifiers;
        return $this;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;
        return $this;
    }
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContent
     */
    public function getContent(): SupermodelIoLogisticsExpressCreateShipmentRequestContent
    {
        return $this->content;
    }
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContent $content
     *
     * @return self
     */
    public function setContent(SupermodelIoLogisticsExpressCreateShipmentRequestContent $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned
     *
     * @return list<SupermodelIoLogisticsExpressDocumentImagesItem>
     */
    public function getDocumentImages(): array
    {
        return $this->documentImages;
    }
    /**
     * This section is to support multiple base64 encoded string with the image of export documentation for Paperless Trade images. When an invalid base64 encoded string is provided, an error message will be returned
     *
     * @param list<SupermodelIoLogisticsExpressDocumentImagesItem> $documentImages
     *
     * @return self
     */
    public function setDocumentImages(array $documentImages): self
    {
        $this->initialized['documentImages'] = true;
        $this->documentImages = $documentImages;
        return $this;
    }
    /**
     * Here you can provide data in case you wish to use DHL Express On demand delivery service
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery
     */
    public function getOnDemandDelivery(): SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery
    {
        return $this->onDemandDelivery;
    }
    /**
     * Here you can provide data in case you wish to use DHL Express On demand delivery service
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery $onDemandDelivery
     *
     * @return self
     */
    public function setOnDemandDelivery(SupermodelIoLogisticsExpressCreateShipmentRequestOnDemandDelivery $onDemandDelivery): self
    {
        $this->initialized['onDemandDelivery'] = true;
        $this->onDemandDelivery = $onDemandDelivery;
        return $this;
    }
    /**
     * Determines whether to request the On Demand Delivery (ODD) link. When set to true it will provide an URL link for the specified Waybill Number, Shipper Account Number. The default value is false, no ODD link URL is provided in the response message.
     *
     * @return bool
     */
    public function getRequestOndemandDeliveryURL(): bool
    {
        return $this->requestOndemandDeliveryURL;
    }
    /**
     * Determines whether to request the On Demand Delivery (ODD) link. When set to true it will provide an URL link for the specified Waybill Number, Shipper Account Number. The default value is false, no ODD link URL is provided in the response message.
     *
     * @param bool $requestOndemandDeliveryURL
     *
     * @return self
     */
    public function setRequestOndemandDeliveryURL(bool $requestOndemandDeliveryURL): self
    {
        $this->initialized['requestOndemandDeliveryURL'] = true;
        $this->requestOndemandDeliveryURL = $requestOndemandDeliveryURL;
        return $this;
    }
    /**
     * This is to support sending email notification once the shipment is created. The email will contain the basic information on the shipper, recipient, waybill number, and shipment information
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem>
     */
    public function getShipmentNotification(): array
    {
        return $this->shipmentNotification;
    }
    /**
     * This is to support sending email notification once the shipment is created. The email will contain the basic information on the shipper, recipient, waybill number, and shipment information
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem> $shipmentNotification
     *
     * @return self
     */
    public function setShipmentNotification(array $shipmentNotification): self
    {
        $this->initialized['shipmentNotification'] = true;
        $this->shipmentNotification = $shipmentNotification;
        return $this;
    }
    /**
     * Please provide any charges you have already paid for this shipment, like freight paid upfront. To allow using this section please contact your DHL Express representative
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem>
     */
    public function getPrepaidCharges(): array
    {
        return $this->prepaidCharges;
    }
    /**
     * Please provide any charges you have already paid for this shipment, like freight paid upfront. To allow using this section please contact your DHL Express representative
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem> $prepaidCharges
     *
     * @return self
     */
    public function setPrepaidCharges(array $prepaidCharges): self
    {
        $this->initialized['prepaidCharges'] = true;
        $this->prepaidCharges = $prepaidCharges;
        return $this;
    }
    /**
     * If set to true, response will return transliterated text of shipper and receiver details.
     *
     * @return bool
     */
    public function getGetTransliteratedResponse(): bool
    {
        return $this->getTransliteratedResponse;
    }
    /**
     * If set to true, response will return transliterated text of shipper and receiver details.
     *
     * @param bool $getTransliteratedResponse
     *
     * @return self
     */
    public function setGetTransliteratedResponse(bool $getTransliteratedResponse): self
    {
        $this->initialized['getTransliteratedResponse'] = true;
        $this->getTransliteratedResponse = $getTransliteratedResponse;
        return $this;
    }
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate
     */
    public function getEstimatedDeliveryDate(): SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate
    {
        return $this->estimatedDeliveryDate;
    }
    /**
     * Estimated delivery date option for QDDF or QDDC.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate $estimatedDeliveryDate
     *
     * @return self
     */
    public function setEstimatedDeliveryDate(SupermodelIoLogisticsExpressCreateShipmentRequestEstimatedDeliveryDate $estimatedDeliveryDate): self
    {
        $this->initialized['estimatedDeliveryDate'] = true;
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }
    /**
     * Provides additional information in the response like service area details, routing code and pickup-related information
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem>
     */
    public function getGetAdditionalInformation(): array
    {
        return $this->getAdditionalInformation;
    }
    /**
     * Provides additional information in the response like service area details, routing code and pickup-related information
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestGetAdditionalInformationItem> $getAdditionalInformation
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
     * Please provide the parent (mother) shipment details
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment
     */
    public function getParentShipment(): SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment
    {
        return $this->parentShipment;
    }
    /**
     * Please provide the parent (mother) shipment details
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment $parentShipment
     *
     * @return self
     */
    public function setParentShipment(SupermodelIoLogisticsExpressCreateShipmentRequestParentShipment $parentShipment): self
    {
        $this->initialized['parentShipment'] = true;
        $this->parentShipment = $parentShipment;
        return $this;
    }
}