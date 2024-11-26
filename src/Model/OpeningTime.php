<?php

namespace AntibodiesOnline\DHL\Api\Model;

class OpeningTime extends \ArrayObject
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
     * Weekday for which this opening hours entity is valid. Possible values are: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY, HOLIDAY
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * The opening time of this entity
     *
     * @var string
     */
    protected $openingTime;
    /**
     * The closing time of this entity
     *
     * @var string
     */
    protected $closingTime;
    /**
     * Weekday for which this opening hours entity is valid. Possible values are: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY, HOLIDAY
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * Weekday for which this opening hours entity is valid. Possible values are: MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY, HOLIDAY
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * The opening time of this entity
     *
     * @return string
     */
    public function getOpeningTime(): string
    {
        return $this->openingTime;
    }
    /**
     * The opening time of this entity
     *
     * @param string $openingTime
     *
     * @return self
     */
    public function setOpeningTime(string $openingTime): self
    {
        $this->initialized['openingTime'] = true;
        $this->openingTime = $openingTime;
        return $this;
    }
    /**
     * The closing time of this entity
     *
     * @return string
     */
    public function getClosingTime(): string
    {
        return $this->closingTime;
    }
    /**
     * The closing time of this entity
     *
     * @param string $closingTime
     *
     * @return self
     */
    public function setClosingTime(string $closingTime): self
    {
        $this->initialized['closingTime'] = true;
        $this->closingTime = $closingTime;
        return $this;
    }
}