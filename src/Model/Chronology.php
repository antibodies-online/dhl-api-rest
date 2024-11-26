<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Chronology extends \ArrayObject
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
     * @var DateTimeZone
     */
    protected $zone;
    /**
     * 
     *
     * @return DateTimeZone
     */
    public function getZone(): DateTimeZone
    {
        return $this->zone;
    }
    /**
     * 
     *
     * @param DateTimeZone $zone
     *
     * @return self
     */
    public function setZone(DateTimeZone $zone): self
    {
        $this->initialized['zone'] = true;
        $this->zone = $zone;
        return $this;
    }
}