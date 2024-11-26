<?php

namespace AntibodiesOnline\DHL\Api\Model;

class DateTimeFieldType extends \ArrayObject
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
    protected $durationType;
    /**
     * 
     *
     * @var DurationFieldType
     */
    protected $rangeDurationType;
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
    public function getDurationType(): DurationFieldType
    {
        return $this->durationType;
    }
    /**
     * 
     *
     * @param DurationFieldType $durationType
     *
     * @return self
     */
    public function setDurationType(DurationFieldType $durationType): self
    {
        $this->initialized['durationType'] = true;
        $this->durationType = $durationType;
        return $this;
    }
    /**
     * 
     *
     * @return DurationFieldType
     */
    public function getRangeDurationType(): DurationFieldType
    {
        return $this->rangeDurationType;
    }
    /**
     * 
     *
     * @param DurationFieldType $rangeDurationType
     *
     * @return self
     */
    public function setRangeDurationType(DurationFieldType $rangeDurationType): self
    {
        $this->initialized['rangeDurationType'] = true;
        $this->rangeDurationType = $rangeDurationType;
        return $this;
    }
}