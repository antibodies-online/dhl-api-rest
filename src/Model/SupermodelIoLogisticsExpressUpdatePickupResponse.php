<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUpdatePickupResponse
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
     * Identifies the pickup you made the changes for
     *
     * @var string
     */
    protected $dispatchConfirmationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $readyByTime;
    /**
     * 
     *
     * @var string
     */
    protected $nextPickupDate;
    /**
     * 
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * Identifies the pickup you made the changes for
     *
     * @return string
     */
    public function getDispatchConfirmationNumber(): string
    {
        return $this->dispatchConfirmationNumber;
    }
    /**
     * Identifies the pickup you made the changes for
     *
     * @param string $dispatchConfirmationNumber
     *
     * @return self
     */
    public function setDispatchConfirmationNumber(string $dispatchConfirmationNumber): self
    {
        $this->initialized['dispatchConfirmationNumber'] = true;
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReadyByTime(): string
    {
        return $this->readyByTime;
    }
    /**
     * 
     *
     * @param string $readyByTime
     *
     * @return self
     */
    public function setReadyByTime(string $readyByTime): self
    {
        $this->initialized['readyByTime'] = true;
        $this->readyByTime = $readyByTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNextPickupDate(): string
    {
        return $this->nextPickupDate;
    }
    /**
     * 
     *
     * @param string $nextPickupDate
     *
     * @return self
     */
    public function setNextPickupDate(string $nextPickupDate): self
    {
        $this->initialized['nextPickupDate'] = true;
        $this->nextPickupDate = $nextPickupDate;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<string> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}