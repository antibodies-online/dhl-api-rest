<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Holidays extends \ArrayObject
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
     * Array of objects: {date, from, to}, where date is date and from and to is time
     *
     * @var list<OpenDatesTime>
     */
    protected $open;
    /**
     * Array of dates:{from, to} when is closed.
     *
     * @var list<ClosedDates>
     */
    protected $closed;
    /**
     * Array of objects: {date, from, to}, where date is date and from and to is time
     *
     * @return list<OpenDatesTime>
     */
    public function getOpen(): array
    {
        return $this->open;
    }
    /**
     * Array of objects: {date, from, to}, where date is date and from and to is time
     *
     * @param list<OpenDatesTime> $open
     *
     * @return self
     */
    public function setOpen(array $open): self
    {
        $this->initialized['open'] = true;
        $this->open = $open;
        return $this;
    }
    /**
     * Array of dates:{from, to} when is closed.
     *
     * @return list<ClosedDates>
     */
    public function getClosed(): array
    {
        return $this->closed;
    }
    /**
     * Array of dates:{from, to} when is closed.
     *
     * @param list<ClosedDates> $closed
     *
     * @return self
     */
    public function setClosed(array $closed): self
    {
        $this->initialized['closed'] = true;
        $this->closed = $closed;
        return $this;
    }
}