<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressValueAddedServicesRates
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
     * Please enter DHL Express value added global service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates
     *
     * @var string
     */
    protected $serviceCode;
    /**
     * Please enter DHL Express value added local service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates
     *
     * @var string
     */
    protected $localServiceCode;
    /**
     * Please enter monetary value of service (e.g. Insured Value)
     *
     * @var float
     */
    protected $value;
    /**
     * Please enter currency code (e.g. Insured Value currency code)
     *
     * @var string
     */
    protected $currency;
    /**
     * For future use
     *
     * @var string
     */
    protected $method;
    /**
     * Please enter DHL Express value added global service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates
     *
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }
    /**
     * Please enter DHL Express value added global service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode(string $serviceCode): self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * Please enter DHL Express value added local service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates
     *
     * @return string
     */
    public function getLocalServiceCode(): string
    {
        return $this->localServiceCode;
    }
    /**
     * Please enter DHL Express value added local service code. For detailed list of all available service codes for your prospect shipment please invoke /products or /rates
     *
     * @param string $localServiceCode
     *
     * @return self
     */
    public function setLocalServiceCode(string $localServiceCode): self
    {
        $this->initialized['localServiceCode'] = true;
        $this->localServiceCode = $localServiceCode;
        return $this;
    }
    /**
     * Please enter monetary value of service (e.g. Insured Value)
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Please enter monetary value of service (e.g. Insured Value)
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Please enter currency code (e.g. Insured Value currency code)
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Please enter currency code (e.g. Insured Value currency code)
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * For future use
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * For future use
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}