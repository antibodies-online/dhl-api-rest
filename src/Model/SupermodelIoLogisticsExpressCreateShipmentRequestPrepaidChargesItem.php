<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestPrepaidChargesItem
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
     * Please enter type of prepaid charge. At this moment only freight is supported
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please enter currency for the value you have entered into value field
     *
     * @var string
     */
    protected $currency;
    /**
     * Please enter nominal value related to the charge
     *
     * @var float
     */
    protected $value;
    /**
     * Please enter method you have used to pay the charges. At this moment only cash is supported
     *
     * @var string
     */
    protected $method;
    /**
     * Please enter type of prepaid charge. At this moment only freight is supported
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter type of prepaid charge. At this moment only freight is supported
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * Please enter currency for the value you have entered into value field
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Please enter currency for the value you have entered into value field
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
     * Please enter nominal value related to the charge
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Please enter nominal value related to the charge
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
     * Please enter method you have used to pay the charges. At this moment only cash is supported
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Please enter method you have used to pay the charges. At this moment only cash is supported
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