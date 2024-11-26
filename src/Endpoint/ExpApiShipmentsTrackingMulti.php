<?php

namespace AntibodiesOnline\DHL\Api\Endpoint;

class ExpApiShipmentsTrackingMulti extends \AntibodiesOnline\DHL\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\DHL\Api\Runtime\Client\Endpoint
{
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
        return '/tracking';
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
        $optionsResolver->setDefined(['shipmentTrackingNumber', 'pieceTrackingNumber', 'shipmentReference', 'shipmentReferenceType', 'shipperAccountNumber', 'dateRangeFrom', 'dateRangeTo', 'trackingView', 'levelOfDetail', 'requestControlledAccessDataCodes']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['trackingView' => 'all-checkpoints', 'levelOfDetail' => 'shipment']);
        $optionsResolver->addAllowedTypes('shipmentTrackingNumber', ['array']);
        $optionsResolver->addAllowedTypes('pieceTrackingNumber', ['array']);
        $optionsResolver->addAllowedTypes('shipmentReference', ['string']);
        $optionsResolver->addAllowedTypes('shipmentReferenceType', ['string']);
        $optionsResolver->addAllowedTypes('shipperAccountNumber', ['string']);
        $optionsResolver->addAllowedTypes('dateRangeFrom', ['string']);
        $optionsResolver->addAllowedTypes('dateRangeTo', ['string']);
        $optionsResolver->addAllowedTypes('trackingView', ['string']);
        $optionsResolver->addAllowedTypes('levelOfDetail', ['string']);
        $optionsResolver->addAllowedTypes('requestControlledAccessDataCodes', ['bool']);
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Message-Reference', 'Message-Reference-Date', 'Accept-Language', 'Plugin-Name', 'Plugin-Version', 'Shipping-System-Platform-Name', 'Shipping-System-Platform-Version', 'Webstore-Platform-Name', 'Webstore-Platform-Version', 'x-version']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['Accept-Language' => 'eng']);
        $optionsResolver->addAllowedTypes('Message-Reference', ['string']);
        $optionsResolver->addAllowedTypes('Message-Reference-Date', ['string']);
        $optionsResolver->addAllowedTypes('Accept-Language', ['string']);
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
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingMultiBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingMultiNotFoundException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressTrackingResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingMultiBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsTrackingMultiNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}