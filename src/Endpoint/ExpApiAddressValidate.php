<?php

namespace AntibodiesOnline\DHL\Api\Endpoint;

class ExpApiAddressValidate extends \AntibodiesOnline\DHL\Api\Runtime\Client\BaseEndpoint implements \AntibodiesOnline\DHL\Api\Runtime\Client\Endpoint
{
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
        return '/address-validate';
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
        $optionsResolver->setDefined(['type', 'countryCode', 'postalCode', 'cityName', 'countyName', 'strictValidation']);
        $optionsResolver->setRequired(['type', 'countryCode']);
        $optionsResolver->setDefaults(['strictValidation' => true]);
        $optionsResolver->addAllowedTypes('type', ['string']);
        $optionsResolver->addAllowedTypes('countryCode', ['string']);
        $optionsResolver->addAllowedTypes('postalCode', ['string']);
        $optionsResolver->addAllowedTypes('cityName', ['string']);
        $optionsResolver->addAllowedTypes('countyName', ['string']);
        $optionsResolver->addAllowedTypes('strictValidation', ['bool']);
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
     * @throws \AntibodiesOnline\DHL\Api\Exception\ExpApiAddressValidateBadRequestException
     *
     * @return null|\AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressAddressValidateResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \AntibodiesOnline\DHL\Api\Exception\ExpApiAddressValidateBadRequestException($serializer->deserialize($body, 'AntibodiesOnline\DHL\Api\Model\SupermodelIoLogisticsExpressErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['basicAuth'];
    }
}