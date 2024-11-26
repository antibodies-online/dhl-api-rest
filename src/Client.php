<?php

namespace AntibodiesOnline\DHL\Api;

class Client extends \AntibodiesOnline\DHL\Api\Runtime\Client\Client
{
    /**
     * The Cancel Pickup service can be used to cancel a DHL Express pickup booking request. Delete of a previous successful pickups are subject to entire consolidated pickup if applicable.
     *
     * @param string $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param array $queryParameters {
     *     @var string $requestorName Name of the person requesting to cancel the scheduled pickup
     *     @var string $reason Provide why scheduled pickup is being cancelled
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsCancelBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsCancelNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function expApiPickupsCancel(string $dispatchConfirmationNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiPickupsCancel($dispatchConfirmationNumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Update Pickup service can be used to update pickup information for an existing DHL Express pickup booking request. Update of a previous successful pickups are subject to entire consolidated pickup if applicable.
     *
     * @param string $dispatchConfirmationNumber Shipment pickup confirmation number for example `PRG999126012345`
     * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateNotFoundException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateUnprocessableEntityException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiPickupsUpdate(string $dispatchConfirmationNumber, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiPickupsUpdate($dispatchConfirmationNumber, $requestBody, $headerParameters), $fetch);
    }
    /**
     * The Pickup service creates a DHL Express pickup booking request
     *
     * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsBadRequestException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiPickups(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressPickupRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiPickups($requestBody, $headerParameters), $fetch);
    }
    /**
     * Service to allocate identifiers upfront for DHL Express Breakbulk or Loose Break Bulk shipments. Requires authorization to use this service from DHL Express.
     *
     * @param array $queryParameters {
     *     @var string $accountNumber DHL Express customer account number
     *     @var string $type Type of DHL Express identifier to retrieve
     *     @var string $size Number of identifiers to be retrieved
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiIdentifiersBadRequestException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressIdentifierResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiIdentifiers(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiIdentifiers($queryParameters, $headerParameters), $fetch);
    }
    /**
     * Validates if DHL Express has got pickup/delivery capabilities at origin/destination
     *
     * @param array $queryParameters {
     *     @var string $type 
     *     @var string $countryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     *     @var string $postalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *     @var string $cityName Text specifying the city name
     *     @var string $countyName Text specifying the county name
     *     @var bool $strictValidation If set to true service will return no records when exact valid match not found
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiAddressValidateBadRequestException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiAddressValidate(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiAddressValidate($queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable)
     *
     * @param array $queryParameters {
     *     @var string $accountNumber DHL Express customer account number
     *     @var string $originCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
     *     @var string $originPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *     @var string $originCityName Text specifying the city name
     *     @var string $destinationCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
     *     @var string $destinationPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
     *     @var string $destinationCityName Text specifying the city name
     *     @var float $weight Gross weight of the shipment including packaging.
     *     @var float $length Total length of the shipment including packaging.
     *     @var float $width Total width of the shipment including packaging.
     *     @var float $height Total height of the shipment including packaging.
     *     @var string $plannedShippingDate Timestamp represents the date you plan to ship your prospected shipment
     *     @var bool $isCustomsDeclarable 
     *     @var string $unitOfMeasurement The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
     *     @var bool $nextBusinessDay When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
     *     @var bool $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     *     @var bool $getAllValueAddedServices Option to return list of all value added services and its rule groups if applicable
     *     @var bool $requestEstimatedDeliveryDate Option to return Estimated Delivery Date in response
     *     @var string $estimatedDeliveryDateType Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL's service commitment. QDDC: cconstitutes DHL's service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant. 
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiRatesBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiRatesInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates|\Psr\Http\Message\ResponseInterface
     */
    public function expApiRates(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiRates($queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Rate request will return DHL's product capabilities and prices (where applicable) based on the input data. Using the shipper and receiver address as well as the dimension and weights of the pieces belonging to a shipment, this operation returns the available products including the shipping price (where applicable)
     *
     * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest $requestBody 
     * @param array $queryParameters {
     *     @var bool $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiRatesManyBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiRatesManyInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates|\Psr\Http\Message\ResponseInterface
     */
    public function expApiRatesMany(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRateRequest $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiRatesMany($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Landed Cost section allows further information around products being sold to be provided. In return the duty, tax and shipping charges are calculated in real time and provides transparency about any extra costs the buyer may have to pay before they reach them.
     *
     * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiLandedCostBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiLandedCostInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressRates|\Psr\Http\Message\ResponseInterface
     */
    public function expApiLandedCost(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressLandedCostRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiLandedCost($requestBody, $headerParameters), $fetch);
    }
    /**
    * The GET Products API will return DHL's product capabilities for a certain set of input data. 
    Using the shipper and receiver address as well as the dimension and weight of the piece belonging to a shipment, this operation returns the available products.
    
    *
    * @param array $queryParameters {
    *     @var string $accountNumber DHL Express customer account number
    *     @var string $originCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment origin country. https://gs1.org/voc/Country, Alpha-2 Code
    *     @var string $originPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
    *     @var string $originCityName Text specifying the city name
    *     @var string $destinationCountryCode A short text string code (see values defined in ISO 3166) specifying the shipment destination country. https://gs1.org/voc/Country, Alpha-2 Code
    *     @var string $destinationPostalCode Text specifying the postal code for an address. https://gs1.org/voc/postalCode
    *     @var string $destinationCityName Text specifying the city name
    *     @var float $weight Gross weight of the shipment including packaging.
    *     @var float $length Total length of the shipment including packaging.
    *     @var float $width Total width of the shipment including packaging.
    *     @var float $height Total height of the shipment including packaging.
    *     @var string $plannedShippingDate Timestamp represents the date you plan to ship your prospected shipment
    
    *     @var bool $isCustomsDeclarable 
    *     @var string $unitOfMeasurement The UnitOfMeasurement node conveys the unit of measurements used in the operation. This single value corresponds to the units of weight and measurement which are used throughout the message processing.
    
    *     @var bool $nextBusinessDay When set to true and there are no products available for given plannedShippingDate then products available for the next possible pickup date are returned
    
    *     @var bool $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
    *     @var bool $getAllValueAddedServices Option to return list of all value added services and its rule groups if applicable
    *     @var bool $requestEstimatedDeliveryDate Option to return Estimated Delivery Date in response
    *     @var string $estimatedDeliveryDateType Estimated Delivery Date Type. QDDF: is the fastest transit time as quoted to the customer at booking or shipment creation. When clearance or any other non-transport operational component is expected to impact transit time, QDDF does not constitute DHL's service commitment. QDDC: cconstitutes DHL's service commitment as quoted at booking or shipment creation. QDDC builds in clearance time, and potentially other special operational non-transport component(s), when relevant. 
    * }
    * @param array $headerParameters {
    *     @var string $Message-Reference Please provide message reference
    
    *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
    *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
    
    *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
    
    *     @var string $x-version Interface version - do not change this field value
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiProductsBadRequestException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiProductsInternalServerErrorException
    *
    * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressProducts|\Psr\Http\Message\ResponseInterface
    */
    public function expApiProducts(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiProducts($queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Tracking service retrieves tracking statuses for a single DHL Express Shipment
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array $queryParameters {
     *     @var string $trackingView 
     *     @var string $levelOfDetail 
     *     @var bool $requestControlledAccessDataCodes Query parameter to request to return values of controlled access code fields in response.
     *     @var bool $requestGMTOffsetPerEvent Query parameter to request to return GMT Offset of each event in response, for both shipment level and piece level.
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Accept-Language Format {3-character language code}
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingNotFoundException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiShipmentsTracking(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsTracking($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The Tracking service retrieves tracking statuses for a single or multiple DHL Express Shipments
     *
     * @param array $queryParameters {
     *     @var array $shipmentTrackingNumber DHL Express shipment identification number
     *     @var array $pieceTrackingNumber DHL Express shipment piece tracking number
     *     @var string $shipmentReference Shipment reference which was provided during the shipment label creation
     *     @var string $shipmentReferenceType Shipment reference type which was provided during the shipment label creation
     *     @var string $shipperAccountNumber Shipper DHL Express Account number under which the shipment label was created
     *     @var string $dateRangeFrom When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the start of the period.
     *     @var string $dateRangeTo When tracking by Shipment reference you need to restrict the search by timeframe. Please provide the end of the period.
     *     @var string $trackingView 
     *     @var string $levelOfDetail 
     *     @var bool $requestControlledAccessDataCodes Query parameter to request to return values of controlled access code fields in response.
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Accept-Language Format {3-character language code}
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingMultiBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingMultiNotFoundException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiShipmentsTrackingMulti(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsTrackingMulti($queryParameters, $headerParameters), $fetch);
    }
    /**
     * The electronic proof of delivery service can be used to retrieve proof of delivery for certain delivered DHL Express shipments
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array $queryParameters {
     *     @var string $shipperAccountNumber DHL Express customer shipper account number
     *     @var string $content 
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsEpodBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsEpodNotFoundException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressEPODResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiShipmentsEpod(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsEpod($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * The upload-image service can be used to upload PLT images to a previously created shipment.  The PLT images for the shipment can be uploaded before the shipment has been physically  collected by DHL courier. However, the original shipment must contain WY as the special service otherwise,  an error will be returned when the customer wants to use the reupload function in this upload-image service.     IMPORTANT: Please note that at least 10mins must be given between the initial createShipment request and then  the upload-image request (including subsequent upload-image request). 
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest $requestBody 
     * @param array $headerParameters {
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsImgUploadBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsImgUploadNotFoundException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsImgUploadUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function expApiShipmentsImgUpload(string $shipmentTrackingNumber, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressImageUploadRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsImgUpload($shipmentTrackingNumber, $requestBody, $headerParameters), $fetch);
    }
    /**
    * ## Create Shipment
    The ShipmentRequest Operation will allow you to generate an AWB number and piece IDs, generate a shipping label, transmit manifest shipment detail to DHL, and optionally book a courier for the pickup of a shipment. The key elements in the response of the Shipment Request will be a base64 encoded PDF label and the Shipment and Piece identification numbers, which you can use for tracking on the DHL web site.
    While the RateRequest and ShipmentRequest services can be used independently, DHL recommends the use of RateRequest to first validate the products available for the shipper/receiver. The global product codes which are output during the RateResponse can be used directly as input into the Shipment Request, as both perform similar validations in terms of service capability.
    
    *
    * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest $requestBody 
    * @param array $queryParameters {
    *     @var bool $strictValidation If set to true, indicate strict DCT validation of address details, and validation of product and service(s) combination provided in request.
    *     @var bool $bypassPLTError Option to bypass PLT - WY service code lane capability validation
    
    *     @var bool $validateDataOnly If set to true, indicate to perform shipment data compliant validation on the shipment information.
    * }
    * @param array $headerParameters {
    *     @var string $Message-Reference Please provide message reference
    
    *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
    *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
    
    *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
    
    *     @var string $x-version Interface version - do not change this field value
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsBadRequestException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsUnprocessableEntityException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInternalServerErrorException
    *
    * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse|\Psr\Http\Message\ResponseInterface
    */
    public function expApiShipments(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest $requestBody, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipments($requestBody, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * ## Upload Invoice Data with Shipment ID
    The upload invoice data service can be used to upload Commerical Invoice data with Shipment Identification Number for your DHL Express shipment.Customer can provide Commercial Invoice data before Shipment Data via Create Shipment flow or vice versa.
    
    Important Note: UploadInvoiceData service is not enabled by default and must be requested per customer. Use of this service is only enabled on exceptional basis and DHL Express recommends to submit shipment requests together with a commercial invoice data.To enable use of UploadInvoiceData service, please contact your DHL Express IT representative. To use UploadInvoiceData service, it is required that "PM" service code is provided in MyDHL API Create Shipment request. "PM" service code is not enabled by 
    default for the customers, and needs to be enabled upon request.
    
    When Shipment is created via MyDHL API Create Shipment service before uploading the Commercial Invoice (CIN) data,it is mandatory to provide the Shipment Identification Number as received in MyDHL API Create Shipment service Response.
    When Commercial Invoice (CIN) data is uploaded prior to creating a shipment via MyDHL API Create Shipment service, it is mandatory to provide Invoice Reference Number with Invoice Reference Type value "CU" and Shipper Account Number. 
    
    These elements are mandatory to facilitate an effective data merge of the Commercial Invoice (CIN) data with Shipment Data. As an output customer will receive Notification element value '0' on successful upload of Commercial Invoice (CIN) data. 
    DHL backend application performs the subsequent data merging process of the Shipment Data and Commercial Invoice data.
    
    *
    * @param string $shipmentTrackingNumber DHL Express shipment identification number
    * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest $requestBody 
    * @param array $headerParameters {
    *     @var string $Message-Reference Please provide message reference
    
    *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
    *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
    
    *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
    
    *     @var string $x-version Interface version - do not change this field value
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInvoiceDataAwbBadRequestException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInvoiceDataAwbUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function expApiShipmentsInvoiceDataAwb(string $shipmentTrackingNumber, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequest $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsInvoiceDataAwb($shipmentTrackingNumber, $requestBody, $headerParameters), $fetch);
    }
    /**
    * ## Upload invoice data
    The upload invoice data service can be used to upload Commerical Invoice data without Shipment Identification Number for your DHL Express shipment. Customer can provide Commercial Invoice data before Shipment Data via Create Shipment flow or vice versa.
    
    Important Note: UploadInvoiceData service is not enabled by default and must be requested per customer.Use of this service is only enabled on exceptional basis and DHL Express recommends to submit shipment requests together with a commercial invoice data.
    To enable use of UploadInvoiceData service, please contact your DHL Express IT representative. To use UploadInvoiceData service, it is required that "PM" service code is provided in MyDHL API Create Shipment request.
    "PM" service code is not enabled by default for the customers, and needs to be enabled upon request.
    
    When Shipment is created via MyDHL API Create Shipment service before uploading the Commercial Invoice (CIN) data,it is mandatory to provide the Shipment Identification Number as received in MyDHL API Create Shipment service Response. When Commercial Invoice (CIN) data is uploaded prior to creating a shipment via MyDHL API Create Shipment service, it is 
    mandatory to provide Invoice Reference Number with Invoice Reference Type value "CU" and Shipper Account Number.
    
    These elements are mandatory to facilitate an effective data merge of the Commercial Invoice (CIN) data with Shipment Data. As an output customer will receive Notification element value '0' on successful upload of Commercial Invoice (CIN) data.
    DHL backend application performs the subsequent data merging process of the Shipment Data and Commercial Invoice data.
    
    *
    * @param \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID $requestBody 
    * @param array $headerParameters {
    *     @var string $Message-Reference Please provide message reference
    
    *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
    *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
    
    *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
    
    *     @var string $x-version Interface version - do not change this field value
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInvoiceDataBadRequestException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInvoiceDataInternalServerErrorException
    *
    * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataResponse|\Psr\Http\Message\ResponseInterface
    */
    public function expApiShipmentsInvoiceData(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsInvoiceData($requestBody, $headerParameters), $fetch);
    }
    /**
     * The Get Image service can be used to retrieve customer's own uploaded or DHL generated Commercial Invoice, Waybill Document or other supporting documents that was uploaded during shipment creation.
     *
     * @param string $shipmentTrackingNumber DHL Express shipment identification number
     * @param array $queryParameters {
     *     @var string $shipperAccountNumber DHL Express customer shipper account number
     *     @var string $typeCode Please provide correct document type.
     *     @var string $pickupYearAndMonth Please provide the pickup's date in YYYY-MM format
     *     @var string $encodingFormat Please provide the document image encoding format in pdf or tiff format
     *     @var bool $allInOnePDF Option to return all the document images in a single PDF file
     *     @var bool $compressedPackage Option to return all the document images in a compressed package
     * }
     * @param array $headerParameters {
     *     @var string $Message-Reference Please provide message reference
     *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
     *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
     *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
     *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
     *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
     *     @var string $x-version Interface version - do not change this field value
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsDocumentimageBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsDocumentimageNotFoundException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressDocumentImageResponse|\Psr\Http\Message\ResponseInterface
     */
    public function expApiShipmentsDocumentimage(string $shipmentTrackingNumber, array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiShipmentsDocumentimage($shipmentTrackingNumber, $queryParameters, $headerParameters), $fetch);
    }
    /**
    * Get service points based on the given input parameters
    *
    * @param array $queryParameters {
    *     @var string $address The address near which Service Points are to be found. If servicePointID is used, address is not needed. 
    
    Address can be sent as raw address. However to be GDPR compliant, tokenized address in  request should be sent.
    *     @var string $placeId To specify the placeID for which the nearest service points have to be searched. PlaceId refers to the ID provided by any provider for particular Address. Ex: Google
    *     @var string $providerId To specify the providerId(provider) for the place ID
    *     @var string $latitude Latitude of user location. If address / servicePointID  parameter used, this parameter is not needed.
    *     @var string $longitude Longitude of user location. If address / servicePointID  parameter used, this parameter is not needed. It works in combination with the latitude parameter
    *     @var string $servicePointID Service Point ID is a unique key with 6 characters, consisting of Service Area for first 3 characters (e.g. BRU) and the last 3 characters is the Facility code (e.g. 001); Service point ID = BRU001. 
    
    If address is used, id is not possible to use.
    *     @var string $countryCode Only ISO 3166-1 - Alpha-2 for country code can be used, e.g. “NL”, “ES”, “GB”, “US”, “DE”, .... This country code is used for returning matching service points in that country. 
    
    
    
    When rendering the service point information, the time format (24h or AM/PM), and distance unit (km/miles) are derived from the country information stored in the GSPL database for the country specified via this parameter. 
    
    E.g. for countryCode=GB will be time format AM/PM and distance unit will be mi. 
    
    E.g. for countryCode=DE will be time format 24h and distance unit will be km.  
    
    
    
    The CountryCode is also used in the address search by Google/Bing to limit the results to the specified country (f.e. to avoid picking a street with the same name from a different country) 
    *     @var string $language Language Code - represents the language. Mandatory if Script Code is provided or Language Country Code is provided, else optional. E.g. ‘eng’ 
    
    Language Code is using ISO 3166-1 alpha-3 (3 letters) 
    *     @var string $languageScriptCode Language Script Code - represents the writing system. Mandatory if Language Country Code is provided, else optional.
    *     @var string $languageCountryCode Language Country Code - can be used to differentiate between linguistic variants of the same Language.
    *     @var string $servicePointResults Max. number of service points to be returned.  
    
    If id or idf is used, this parameter is not needed as this will return searched service point. 
    *     @var string $capability Comma separated list of physical process capability codes.
    
    81: I have a DHL account or return shipment
    
    82: I have paid online
    
    88: I will pay at the DHL Service Point
    
    73: I will create a DHL shipping label at the DHL Service Point
    
    74: I have printed a DHL label
    
    75,76: I have a QR code
    
    78,79: Im collecting a DHL Express parcel
    
    86,87: I have directed a DHL Express parcel to a DHL Service Point
    
    Possible Combinations : 81,73 | 81,74 | 81,75,76  | 82,74 | 82,75,76 | 88,73 | 78,79 | 86,87
    
    Note: | is just used to represent the seperation of combinations.
    
    
    *     @var string $openBefore Service points open Before given Time. E.g.: 14:00 will find service points which are open before 14:00
    *     @var string $openAfter Service points open After given time e.g.:15:00 will find service points which are open after 15:00
    *     @var array $openDay Open on Weekday, valid values as follow: 
    
    1 - Monday 
    
    2 - Tuesday 
    
    3 - Wednesday 
    
    4 - Thursday 
    
    5 - Friday 
    
    6 - Saturday 
    
    0 – Sunday 
    *     @var string $weight Max. weight of the shipment. Decimals are allowed as well (decimal separator either “,” or “.”) 
    *     @var array $weightUom Weight units – kg or lb. Required if weight is passed in. 
    *     @var string $length Max. length of the shipment  - the highest dimension 
    
    e.g. 30. Decimals are allowed as well (decimal separator either “,” or “.”)
    *     @var string $width Max. width of the shipment  - the middle dimension 
    
    e.g. 20. Decimals are allowed as well (decimal separator either “,” or “.”) 
    *     @var string $height Max. height of the shipment  - the lowest dimension 
    
    e.g. 10. Decimals are allowed as well (decimal separator either “,” or “.”) 
    *     @var array $dimensionsUom Dimension units – cm or in. Required with any of length, width or height parameter.
    *     @var array $resultUom Distance uom to be used when returning response, it can be either km or mi. If not provided, default uom set for the country is returned. 
    *     @var string $serviceAreaCode Service Area Code of the search address
    *     @var array $servicePointTypes Comma separated list of service point types, e.g. “CTY,STN,247”. 
    
    Allowed Values: 
    
    CTY (City) - High street premises. DHL owned and managed. Eg. Downtown
    
    STN (Station) - DHL premises. DHL owned and managed at PUD locations
    
    PRT (Partner) - Partners(External) store. Eg. 7-Eleven, Shell
    
    247 (24/7) - operating 24hours a day, has locker facility.  DHL owned and unmanned or / and automated
    *     @var string $maxDistance Maximum distance in kilometers between the geocoded address and the returned Service Points. Values equal or less than 0 are ignored. 
    
    Accuracy of the maxDistance parameter: 
    
    The GREF web service uses a search rectangle for  Service Point searches. Therefore the maxDistance value is used to create a square with side length l = maxDistance * 2. This means that the distance of some of the found Service Points may actually be longer as specified by the maxDistance parameter, if the Service Point is located outside the circle with radius r = maxDistance, but still within the search square: 
    
    Centre point of the search square is the latitude/longitude pair resulting from a geocoding request to the Bing geocoding API, which in some cases may not represent the actual location of the address. The more precisely the address is specified, the higher is the probability that the geocoded location matches with the search address. 
    *     @var string $pieceCountLimit Static number, max pieces which can be handled on the service point.
    *     @var array $importCharges Y/N – indicator whether it is possible to pay import charges on service point. 
    *     @var string $key Unique API key which required separate onboarding request to enable this service.  Please approach your country representative for onboarding. Once approval is granted, API key will be generated and used for authentication.
    *     @var string $combineParameters Allows combination of values for parameters servicePointTypes and importChanges. Limitations:- Only 1 level of conditions is allowed (not multiple AND/OR)Applicable only on servicePointTypes and importCharges parameters “,” stands for OR condition “&” stands for AND condition “()” splits multiple conditions.
    *     @var string $edd Estimated Delivery date: 
    
    YYYY-MM-DDThh:mm:ssTZD (for example 2023-06-25T22:59:00Z). This is a Servicepoint Capacity Management System Parameter to receive a capacity data of the found service points additionally calling Servicepoint Capacity Management System service.
    *     @var array $excludeFullyBooked Parameter which will enable to filter out fully booked services in the Service Point Locator response to client. 
    
    Values: 
    
    Y - Service Point Locator will not send back service points which are fully booked. 
    
    N - Service Point Locator will send back all service points, also those where is no free capacity. 
    
    If not provided in request, it will be set up as N by default.  
    
    This is a Servicepoint Capacity Management System parameter. 
    *     @var string $shipmentID To specify the shipment ID. This is used for Servicepoint Capacity Management System parameter.
    *     @var string $pieceID Piece ID without Data Identifier / Prefix. (for example JD0081105201831337270 instead of JJD0081105201831337270). This is a Servicepoint Capacity Management System parameter.
    *     @var string $shipmentOriginServiceAreaCode To specify the Shipment Origin Service Area Code. This is a Servicepoint Capacity Management System parameter.
    *     @var array $isResultsSpecificCapabRequired This is to include preconfigured non UI capability codes(ex. PPC 72) to be considered while sending the request to Reference Data backend service.  PPC 72 is applicable only for REST request and not for Service Point Locator UI. 
    *     @var array $encrypt This 'encrypt' flag is to indicate to Service Point Locator whether the address is tokenized(encrypt=y) or non-tokenized. So that Service Point Locator can detokenize to provide matching Service Point list. 
    
    
    
    When 'encrypt=y', Service Point Locator clients should mandatorily send tokenized address in the REST request.  
    
    When 'encrypt=n' or without 'encrypt' parameter, client should only send non-tokenized address(raw address). 
    
    Sample below:  
    
         Non-tokenized(raw) address: Sabah, Malaysia 
    
         Tokenized address: YmtzOVpTQWdQSGRjSm41bFlDRkZjR0ZKSWc9PQ== 
    
    
    
    Address Tokenization: Service Point Locator provides additional security to mask the address sent by the client in REST request which will hide raw address visible on the ‘View page Source’ or in ‘Developer tools. 
    *     @var array $b64 This indicates whether the address parameter contains the base64 encoded value or not. 
    *     @var array $svpStatus ServicePoint Status(svpStatus) to be used especially when looking for inactive service points with the svpStatus S,U,X,Y. By default active svpStatus 'A' is considered when this parameter is not sent in the request. 
    A = Service Available (Open)
    S = Service Suspended (Temporarily closed) 
    U = Service Unavailable (Temporarily closed) 
    Y = Not Yet Open (Temporarily closed) 
    X = Closed (Temporarily closed)
    * }
    * @param array $headerParameters {
    *     @var string $Message-Reference Please provide message reference
    
    *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
    *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
    
    *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
    
    *     @var string $x-version Interface version - do not change this field value
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiServicepointsInternalServerErrorException
    *
    * @return null|\AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3|\Psr\Http\Message\ResponseInterface
    */
    public function expApiServicepoints(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiServicepoints($queryParameters, $headerParameters), $fetch);
    }
    /**
    * The reference data service retrieves the reference data used for MyDHL API shipment or upload invoice data service.
    
    *
    * @param array $queryParameters {
    *     @var string $datasetName Must provide at least one datasetName value. If providing just the datasetName with no filterBy fields - the response will return the entire data set from the dataset table (bulk).
    *     @var string $filterByValue Use filter by value to query based on the specific string for optimized search.<br> <br> List of supported filterByValue per dataset (eg. dataset: filterByAttribute| supported filterByValue) <br><br> a) returnStatusMessage: serviceName|CreateShipment,DocumentImageRequest,RateRequest,RequestIdentifier,RequestPickup,AddressValidateRequest,TrackingRequest,UpdatePickup,UpdateShipment,UploadInvoiceData,DeleteShipment,DocumentRetrieve-ePOD <br> b) returnStatusMessage: operationName|get-image,identifiers,address-validate,
      RouteRequest, shipments, tracking, upload-image,landed-cost,rates,upload-invoice-data,pickup,proof-of-delivery <br>
    c) returnStatusMessage: protocol|REST,SOAP,XMLPI <br> d) productCode: docNonDocIndicator|Y,N <br> e) languageCode: serviceName|Tracking,CreateShipment, categoryGroup|Tracking,commercial invoice, shipment receipt, email notification
    *     @var string $filterByAttribute Use filter by attribute to define the list of supported attibuted for the specified datasetName. <br> List of supported attributes per dataset <br> (eg. dataset: supported filterByAttributes values) <br><br> a) country: countryCode, countryName <br> b) countryPostalcodeFormat: countryCode <br> c) dangerousGoods: serviceCode <br> d) incoterm: incoterm <br> e) productCode: productCode, countryCode, docNonDocIndicator <br> f) serviceCode: serviceCode, countryCode, chargeCodeTypeCode, serviceGroupDescription <br> g) packageTypeCode: packageTypeCode <br> h) documentTypeCode: customsDocumentTypeCode <br> i) customerShipmentReferenceType: shipmentReferenceTypeCode <br> j) customerPackageReferenceType: packageReferenceTypeCode <br> k) invoiceReferenceType: invoiceReferenceTypeCode <br> l) invoiceItemReferenceType: itemReferenceTypeCode <br> m) registrationNumberTypeCode: registrationTypeCode <br> n) commodityCategory: commodityCategoryCode, commodityCategoryGroup, commodityCategoryDescription <br> o) returnStatusMessage: statusCode, serviceName, operationName, protocol <br> p) trackingEventCode: eventTypeCode, eventTypeDescription, visibleToCustomer <br> q) unitOfMeasurement: unitOfMeasurement <br> r) languageCode: languageCode, serviceName, categoryGroup, description
    *     @var string $comparisonOperator Use comparison operator to define the specific match condition for optimized search.
    *     @var string $queryString Use queryString for additional filter criteria in format of '[attribute]:[value]:[comparisonOperator]'. <br> All additional filters are applied together with logical connector 'AND'. <br> Maximum of three additional attribute-value-comparisonOperator combinations. <br> Multiple queryString parameters will be separated  by comma "," separator
    * }
    * @param array $headerParameters {
    *     @var string $Message-Reference Please provide message reference
    
    *     @var string $Message-Reference-Date Optional reference date in the  HTTP-date format https://tools.ietf.org/html/rfc7231#section-7.1.1.2
    *     @var string $Plugin-Name Please provide name of the plugin (applicable to 3PV only)
    
    *     @var string $Plugin-Version Please provide version of the plugin (applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Name Please provide name of the shipping platform(applicable to 3PV only)
    
    *     @var string $Shipping-System-Platform-Version Please provide version of the shipping platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Name Please provide name of the webstore platform (applicable to 3PV only)
    
    *     @var string $Webstore-Platform-Version Please provide version of the webstore platform (applicable to 3PV only)
    
    *     @var string $x-version Interface version - do not change this field value
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiReferenceDataBadRequestException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiReferenceDataNotFoundException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiReferenceDataForbiddenException
    * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiReferenceDataInternalServerErrorException
    *
    * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressReferenceDataResponse|\Psr\Http\Message\ResponseInterface
    */
    public function expApiReferenceData(array $queryParameters = [], array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \AntibodiesOnline\DHL\Api\Endpoint\ExpApiReferenceData($queryParameters, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://api-mock.dhl.com/mydhlapi');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \AntibodiesOnline\DHL\Api\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}