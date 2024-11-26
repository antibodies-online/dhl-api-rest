<?php

namespace AntibodiesOnline\DHL\Api\Model;

class DateTimeField extends \ArrayObject
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
     * @var DateTimeFieldType
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
     * @var bool
     */
    protected $lenient;
    /**
     * 
     *
     * @var int
     */
    protected $minimumValue;
    /**
     * 
     *
     * @var int
     */
    protected $maximumValue;
    /**
     * 
     *
     * @var DurationField
     */
    protected $durationField;
    /**
     * 
     *
     * @var DurationField
     */
    protected $rangeDurationField;
    /**
     * 
     *
     * @var DurationField
     */
    protected $leapDurationField;
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
     * @return DateTimeFieldType
     */
    public function getType(): DateTimeFieldType
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param DateTimeFieldType $type
     *
     * @return self
     */
    public function setType(DateTimeFieldType $type): self
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
     * @return bool
     */
    public function getLenient(): bool
    {
        return $this->lenient;
    }
    /**
     * 
     *
     * @param bool $lenient
     *
     * @return self
     */
    public function setLenient(bool $lenient): self
    {
        $this->initialized['lenient'] = true;
        $this->lenient = $lenient;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinimumValue(): int
    {
        return $this->minimumValue;
    }
    /**
     * 
     *
     * @param int $minimumValue
     *
     * @return self
     */
    public function setMinimumValue(int $minimumValue): self
    {
        $this->initialized['minimumValue'] = true;
        $this->minimumValue = $minimumValue;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaximumValue(): int
    {
        return $this->maximumValue;
    }
    /**
     * 
     *
     * @param int $maximumValue
     *
     * @return self
     */
    public function setMaximumValue(int $maximumValue): self
    {
        $this->initialized['maximumValue'] = true;
        $this->maximumValue = $maximumValue;
        return $this;
    }
    /**
     * 
     *
     * @return DurationField
     */
    public function getDurationField(): DurationField
    {
        return $this->durationField;
    }
    /**
     * 
     *
     * @param DurationField $durationField
     *
     * @return self
     */
    public function setDurationField(DurationField $durationField): self
    {
        $this->initialized['durationField'] = true;
        $this->durationField = $durationField;
        return $this;
    }
    /**
     * 
     *
     * @return DurationField
     */
    public function getRangeDurationField(): DurationField
    {
        return $this->rangeDurationField;
    }
    /**
     * 
     *
     * @param DurationField $rangeDurationField
     *
     * @return self
     */
    public function setRangeDurationField(DurationField $rangeDurationField): self
    {
        $this->initialized['rangeDurationField'] = true;
        $this->rangeDurationField = $rangeDurationField;
        return $this;
    }
    /**
     * 
     *
     * @return DurationField
     */
    public function getLeapDurationField(): DurationField
    {
        return $this->leapDurationField;
    }
    /**
     * 
     *
     * @param DurationField $leapDurationField
     *
     * @return self
     */
    public function setLeapDurationField(DurationField $leapDurationField): self
    {
        $this->initialized['leapDurationField'] = true;
        $this->leapDurationField = $leapDurationField;
        return $this;
    }
}