<?php

namespace AntibodiesOnline\DHL\Api\Endpoint;

class ExpApiPickupsUpdate extends \AntibodiesOnline\DHL\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\DHL\Api\Runtime\Client\Endpoint
{
    protected $dispatchConfirmationNumber;
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
     */
    public function __construct(string $dispatchConfirmationNumber, \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest $requestBody, array $headerParameters = [])
    {
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \AntibodiesOnline\DHL\Api\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{dispatchConfirmationNumber}'], [$this->dispatchConfirmationNumber], '/pickups/{dispatchConfirmationNumber}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
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
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateBadRequestException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateNotFoundException
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateUnprocessableEntityException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressUpdatePickupResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateNotFoundException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiPickupsUpdateUnprocessableEntityException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}