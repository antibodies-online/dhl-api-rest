<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ValueUnit extends \ArrayObject
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
     * Value in BigDecimal
     *
     * @var float
     */
    protected $value;
    /**
     * UOM
     *
     * @var string
     */
    protected $uom;
    /**
     * Value in BigDecimal
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Value in BigDecimal
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
     * UOM
     *
     * @return string
     */
    public function getUom(): string
    {
        return $this->uom;
    }
    /**
     * UOM
     *
     * @param string $uom
     *
     * @return self
     */
    public function setUom(string $uom): self
    {
        $this->initialized['uom'] = true;
        $this->uom = $uom;
        return $this;
    }
}