<?php

namespace AntibodiesOnline\DHL\Api\Model;

class OpenDatesTime extends \ArrayObject
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
     * Date – when is open during holidays
     *
     * @var string
     */
    protected $date;
    /**
     * Time – beginning of open hours
     *
     * @var string
     */
    protected $from;
    /**
     * Time – end of open hours
     *
     * @var string
     */
    protected $to;
    /**
     * Date – when is open during holidays
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * Date – when is open during holidays
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Time – beginning of open hours
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Time – beginning of open hours
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * Time – end of open hours
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * Time – end of open hours
     *
     * @param string $to
     *
     * @return self
     */
    public function setTo(string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}