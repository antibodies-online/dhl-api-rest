<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupRequestSpecialInstructionsItem
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
     * Any special instructions user wish to send to the courier for the order pick-up.
     *
     * @var string
     */
    protected $value;
    /**
     * for future use
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Any special instructions user wish to send to the courier for the order pick-up.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Any special instructions user wish to send to the courier for the order pick-up.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * for future use
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * for future use
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
}