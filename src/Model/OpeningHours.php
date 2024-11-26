<?php

namespace AntibodiesOnline\DHL\Api\Model;

class OpeningHours extends \ArrayObject
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
     * Multiple opening hours entities can exist for the same week day.
     *
     * @var list<OpeningTime>
     */
    protected $openingHours;
    /**
     * Holiday details with date
     *
     * @var list<\DateTime>
     */
    protected $holidayDates;
    /**
     * Holiday details with date
     *
     * @var array<string, list<\DateTime>>
     */
    protected $holidaysDates;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $html;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $holidayOpeningHoursHtml;
    /**
     * Holiday details
     *
     * @var Holidays
     */
    protected $holidays;
    /**
     * Multiple opening hours entities can exist for the same week day.
     *
     * @return list<OpeningTime>
     */
    public function getOpeningHours(): array
    {
        return $this->openingHours;
    }
    /**
     * Multiple opening hours entities can exist for the same week day.
     *
     * @param list<OpeningTime> $openingHours
     *
     * @return self
     */
    public function setOpeningHours(array $openingHours): self
    {
        $this->initialized['openingHours'] = true;
        $this->openingHours = $openingHours;
        return $this;
    }
    /**
     * Holiday details with date
     *
     * @return list<\DateTime>
     */
    public function getHolidayDates(): array
    {
        return $this->holidayDates;
    }
    /**
     * Holiday details with date
     *
     * @param list<\DateTime> $holidayDates
     *
     * @return self
     */
    public function setHolidayDates(array $holidayDates): self
    {
        $this->initialized['holidayDates'] = true;
        $this->holidayDates = $holidayDates;
        return $this;
    }
    /**
     * Holiday details with date
     *
     * @return array<string, list<\DateTime>>
     */
    public function getHolidaysDates(): iterable
    {
        return $this->holidaysDates;
    }
    /**
     * Holiday details with date
     *
     * @param array<string, list<\DateTime>> $holidaysDates
     *
     * @return self
     */
    public function setHolidaysDates(iterable $holidaysDates): self
    {
        $this->initialized['holidaysDates'] = true;
        $this->holidaysDates = $holidaysDates;
        return $this;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html): self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @return string
     */
    public function getHolidayOpeningHoursHtml(): string
    {
        return $this->holidayOpeningHoursHtml;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @param string $holidayOpeningHoursHtml
     *
     * @return self
     */
    public function setHolidayOpeningHoursHtml(string $holidayOpeningHoursHtml): self
    {
        $this->initialized['holidayOpeningHoursHtml'] = true;
        $this->holidayOpeningHoursHtml = $holidayOpeningHoursHtml;
        return $this;
    }
    /**
     * Holiday details
     *
     * @return Holidays
     */
    public function getHolidays(): Holidays
    {
        return $this->holidays;
    }
    /**
     * Holiday details
     *
     * @param Holidays $holidays
     *
     * @return self
     */
    public function setHolidays(Holidays $holidays): self
    {
        $this->initialized['holidays'] = true;
        $this->holidays = $holidays;
        return $this;
    }
}