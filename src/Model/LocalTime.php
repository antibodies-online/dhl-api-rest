<?php

namespace AntibodiesOnline\DHL\Api\Model;

class LocalTime extends \ArrayObject
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
     * @var Chronology
     */
    protected $chronology;
    /**
     * 
     *
     * @var int
     */
    protected $hourOfDay;
    /**
     * 
     *
     * @var int
     */
    protected $minuteOfHour;
    /**
     * 
     *
     * @var int
     */
    protected $secondOfMinute;
    /**
     * 
     *
     * @var int
     */
    protected $millisOfSecond;
    /**
     * 
     *
     * @var int
     */
    protected $millisOfDay;
    /**
     * 
     *
     * @var list<DateTimeField>
     */
    protected $fields;
    /**
     * 
     *
     * @var list<int>
     */
    protected $values;
    /**
     * 
     *
     * @var list<DateTimeFieldType>
     */
    protected $fieldTypes;
    /**
     * 
     *
     * @return Chronology
     */
    public function getChronology(): Chronology
    {
        return $this->chronology;
    }
    /**
     * 
     *
     * @param Chronology $chronology
     *
     * @return self
     */
    public function setChronology(Chronology $chronology): self
    {
        $this->initialized['chronology'] = true;
        $this->chronology = $chronology;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHourOfDay(): int
    {
        return $this->hourOfDay;
    }
    /**
     * 
     *
     * @param int $hourOfDay
     *
     * @return self
     */
    public function setHourOfDay(int $hourOfDay): self
    {
        $this->initialized['hourOfDay'] = true;
        $this->hourOfDay = $hourOfDay;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinuteOfHour(): int
    {
        return $this->minuteOfHour;
    }
    /**
     * 
     *
     * @param int $minuteOfHour
     *
     * @return self
     */
    public function setMinuteOfHour(int $minuteOfHour): self
    {
        $this->initialized['minuteOfHour'] = true;
        $this->minuteOfHour = $minuteOfHour;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSecondOfMinute(): int
    {
        return $this->secondOfMinute;
    }
    /**
     * 
     *
     * @param int $secondOfMinute
     *
     * @return self
     */
    public function setSecondOfMinute(int $secondOfMinute): self
    {
        $this->initialized['secondOfMinute'] = true;
        $this->secondOfMinute = $secondOfMinute;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMillisOfSecond(): int
    {
        return $this->millisOfSecond;
    }
    /**
     * 
     *
     * @param int $millisOfSecond
     *
     * @return self
     */
    public function setMillisOfSecond(int $millisOfSecond): self
    {
        $this->initialized['millisOfSecond'] = true;
        $this->millisOfSecond = $millisOfSecond;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMillisOfDay(): int
    {
        return $this->millisOfDay;
    }
    /**
     * 
     *
     * @param int $millisOfDay
     *
     * @return self
     */
    public function setMillisOfDay(int $millisOfDay): self
    {
        $this->initialized['millisOfDay'] = true;
        $this->millisOfDay = $millisOfDay;
        return $this;
    }
    /**
     * 
     *
     * @return list<DateTimeField>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param list<DateTimeField> $fields
     *
     * @return self
     */
    public function setFields(array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
     * 
     *
     * @return list<int>
     */
    public function getValues(): array
    {
        return $this->values;
    }
    /**
     * 
     *
     * @param list<int> $values
     *
     * @return self
     */
    public function setValues(array $values): self
    {
        $this->initialized['values'] = true;
        $this->values = $values;
        return $this;
    }
    /**
     * 
     *
     * @return list<DateTimeFieldType>
     */
    public function getFieldTypes(): array
    {
        return $this->fieldTypes;
    }
    /**
     * 
     *
     * @param list<DateTimeFieldType> $fieldTypes
     *
     * @return self
     */
    public function setFieldTypes(array $fieldTypes): self
    {
        $this->initialized['fieldTypes'] = true;
        $this->fieldTypes = $fieldTypes;
        return $this;
    }
}