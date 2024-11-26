<?php

namespace AntibodiesOnline\DHL\Api\Model;

class DurationField extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var DurationFieldType
     */
    protected $type;
    /**
     * 
     *
     * @var bool
     */
    protected $supported;
    /**
     * 
     *
     * @var int
     */
    protected $unitMillis;
    /**
     * 
     *
     * @var bool
     */
    protected $precise;
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * @return DurationFieldType
     */
    public function getType(): DurationFieldType
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param DurationFieldType $type
     *
     * @return self
     */
    public function setType(DurationFieldType $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSupported(): bool
    {
        return $this->supported;
    }
    /**
     * 
     *
     * @param bool $supported
     *
     * @return self
     */
    public function setSupported(bool $supported): self
    {
        $this->initialized['supported'] = true;
        $this->supported = $supported;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUnitMillis(): int
    {
        return $this->unitMillis;
    }
    /**
     * 
     *
     * @param int $unitMillis
     *
     * @return self
     */
    public function setUnitMillis(int $unitMillis): self
    {
        $this->initialized['unitMillis'] = true;
        $this->unitMillis = $unitMillis;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPrecise(): bool
    {
        return $this->precise;
    }
    /**
     * 
     *
     * @param bool $precise
     *
     * @return self
     */
    public function setPrecise(bool $precise): self
    {
        $this->initialized['precise'] = true;
        $this->precise = $precise;
        return $this;
    }
}