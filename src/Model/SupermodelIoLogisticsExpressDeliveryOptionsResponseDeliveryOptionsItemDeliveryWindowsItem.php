<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressDeliveryOptionsResponseDeliveryOptionsItemDeliveryWindowsItem
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
     * Format e.g 2016-12-31T00:00:00 GMT+08:00
     *
     * @var string
     */
    protected $startDateTime;
    /**
     * Format e.g 2016-12-31T23:59:00 GMT+08:00
     *
     * @var string
     */
    protected $endDateTime;
    /**
     * Format e.g 2016-12-31T00:00:00 GMT+08:00
     *
     * @return string
     */
    public function getStartDateTime(): string
    {
        return $this->startDateTime;
    }
    /**
     * Format e.g 2016-12-31T00:00:00 GMT+08:00
     *
     * @param string $startDateTime
     *
     * @return self
     */
    public function setStartDateTime(string $startDateTime): self
    {
        $this->initialized['startDateTime'] = true;
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * Format e.g 2016-12-31T23:59:00 GMT+08:00
     *
     * @return string
     */
    public function getEndDateTime(): string
    {
        return $this->endDateTime;
    }
    /**
     * Format e.g 2016-12-31T23:59:00 GMT+08:00
     *
     * @param string $endDateTime
     *
     * @return self
     */
    public function setEndDateTime(string $endDateTime): self
    {
        $this->initialized['endDateTime'] = true;
        $this->endDateTime = $endDateTime;
        return $this;
    }
}