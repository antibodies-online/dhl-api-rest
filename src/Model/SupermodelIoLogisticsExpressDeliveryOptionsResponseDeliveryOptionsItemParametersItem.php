<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemParametersItem
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
     * delivery option parameter name"
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $isRequired;
    /**
     * Returned only for type=signatureRelease
     *
     * @var list<string>
     */
    protected $acceptedValues;
    /**
     * delivery option parameter name"
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * delivery option parameter name"
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }
    /**
     * 
     *
     * @param bool $isRequired
     *
     * @return self
     */
    public function setIsRequired(bool $isRequired): self
    {
        $this->initialized['isRequired'] = true;
        $this->isRequired = $isRequired;
        return $this;
    }
    /**
     * Returned only for type=signatureRelease
     *
     * @return list<string>
     */
    public function getAcceptedValues(): array
    {
        return $this->acceptedValues;
    }
    /**
     * Returned only for type=signatureRelease
     *
     * @param list<string> $acceptedValues
     *
     * @return self
     */
    public function setAcceptedValues(array $acceptedValues): self
    {
        $this->initialized['acceptedValues'] = true;
        $this->acceptedValues = $acceptedValues;
        return $this;
    }
}