<?php

namespace AntibodiesOnline\DHL\Api\Endpoint;

class ExpApiServicepoints extends \AntibodiesOnline\DHL\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\DHL\Api\Runtime\Client\Endpoint
{
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
    */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\DHL\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/servicepoints';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['address', 'placeId', 'providerId', 'latitude', 'longitude', 'servicePointID', 'countryCode', 'language', 'languageScriptCode', 'languageCountryCode', 'servicePointResults', 'capability', 'openBefore', 'openAfter', 'openDay', 'weight', 'weightUom', 'length', 'width', 'height', 'dimensionsUom', 'resultUom', 'serviceAreaCode', 'servicePointTypes', 'maxDistance', 'pieceCountLimit', 'importCharges', 'key', 'combineParameters', 'edd', 'excludeFullyBooked', 'shipmentID', 'pieceID', 'shipmentOriginServiceAreaCode', 'isResultsSpecificCapabRequired', 'encrypt', 'b64', 'svpStatus']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('address', ['string']);
        $optionsResolver->addAllowedTypes('placeId', ['string']);
        $optionsResolver->addAllowedTypes('providerId', ['string']);
        $optionsResolver->addAllowedTypes('latitude', ['string']);
        $optionsResolver->addAllowedTypes('longitude', ['string']);
        $optionsResolver->addAllowedTypes('servicePointID', ['string']);
        $optionsResolver->addAllowedTypes('countryCode', ['string']);
        $optionsResolver->addAllowedTypes('language', ['string']);
        $optionsResolver->addAllowedTypes('languageScriptCode', ['string']);
        $optionsResolver->addAllowedTypes('languageCountryCode', ['string']);
        $optionsResolver->addAllowedTypes('servicePointResults', ['string']);
        $optionsResolver->addAllowedTypes('capability', ['string']);
        $optionsResolver->addAllowedTypes('openBefore', ['string']);
        $optionsResolver->addAllowedTypes('openAfter', ['string']);
        $optionsResolver->addAllowedTypes('openDay', ['array']);
        $optionsResolver->addAllowedTypes('weight', ['string']);
        $optionsResolver->addAllowedTypes('weightUom', ['array']);
        $optionsResolver->addAllowedTypes('length', ['string']);
        $optionsResolver->addAllowedTypes('width', ['string']);
        $optionsResolver->addAllowedTypes('height', ['string']);
        $optionsResolver->addAllowedTypes('dimensionsUom', ['array']);
        $optionsResolver->addAllowedTypes('resultUom', ['array']);
        $optionsResolver->addAllowedTypes('serviceAreaCode', ['string']);
        $optionsResolver->addAllowedTypes('servicePointTypes', ['array']);
        $optionsResolver->addAllowedTypes('maxDistance', ['string']);
        $optionsResolver->addAllowedTypes('pieceCountLimit', ['string']);
        $optionsResolver->addAllowedTypes('importCharges', ['array']);
        $optionsResolver->addAllowedTypes('key', ['string']);
        $optionsResolver->addAllowedTypes('combineParameters', ['string']);
        $optionsResolver->addAllowedTypes('edd', ['string']);
        $optionsResolver->addAllowedTypes('excludeFullyBooked', ['array']);
        $optionsResolver->addAllowedTypes('shipmentID', ['string']);
        $optionsResolver->addAllowedTypes('pieceID', ['string']);
        $optionsResolver->addAllowedTypes('shipmentOriginServiceAreaCode', ['string']);
        $optionsResolver->addAllowedTypes('isResultsSpecificCapabRequired', ['array']);
        $optionsResolver->addAllowedTypes('encrypt', ['array']);
        $optionsResolver->addAllowedTypes('b64', ['array']);
        $optionsResolver->addAllowedTypes('svpStatus', ['array']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Message-Reference', 'Message-Reference-Date', 'Plugin-Name', 'Plugin-Version', 'Shipping-System-Platform-Name', 'Shipping-System-Platform-Version', 'Webstore-Platform-Name', 'Webstore-Platform-Version', 'x-version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Message-Reference', ['string']);
        $optionsResolver->addAllowedTypes('Message-Reference-Date', ['string']);
        $optionsResolver->addAllowedTypes('Plugin-Name', ['string']);
        $optionsResolver->addAllowedTypes('Plugin-Version', ['string']);
        $optionsResolver->addAllowedTypes('Shipping-System-Platform-Name', ['string']);
        $optionsResolver->addAllowedTypes('Shipping-System-Platform-Version', ['string']);
        $optionsResolver->addAllowedTypes('Webstore-Platform-Name', ['string']);
        $optionsResolver->addAllowedTypes('Webstore-Platform-Version', ['string']);
        $optionsResolver->addAllowedTypes('x-version', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiServicepointsInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\ServicePointsRestResponseV3', 'json');
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiServicepointsInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\ExceptionResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['apiKey', 'basicAuth'];
    }
}