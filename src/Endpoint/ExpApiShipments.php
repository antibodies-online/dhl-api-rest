<?php

namespace AntibodiesOnline\DHL\Api\Endpoint;

class ExpApiShipments extends \AntibodiesOnline\DHL\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\DHL\Api\Runtime\Client\Endpoint
{
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
    */
    public function __construct(\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest $requestBody, array $queryParameters = [], array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\DHL\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/shipments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['strictValidation', 'bypassPLTError', 'validateDataOnly']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['strictValidation' => false, 'validateDataOnly' => false]);
        $optionsResolver->addAllowedTypes('strictValidation', ['bool']);
        $optionsResolver->addAllowedTypes('bypassPLTError', ['bool']);
        $optionsResolver->addAllowedTypes('validateDataOnly', ['bool']);
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
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsUnprocessableEntityException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInternalServerErrorException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressCreateShipmentResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsUnprocessableEntityException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/problem+json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiShipmentsInternalServerErrorException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}