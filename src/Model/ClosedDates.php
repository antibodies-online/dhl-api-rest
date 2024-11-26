<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ClosedDates extends \ArrayObject
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
     * Date – start when it is closed
     *
     * @var string
     */
    protected $from;
    /**
     * Date – end when it is closed
     *
     * @var string
     */
    protected $to;
    /**
     * Date – start when it is closed
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * Date – start when it is closed
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
     * Date – end when it is closed
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * Date – end when it is closed
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