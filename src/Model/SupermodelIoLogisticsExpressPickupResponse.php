<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressPickupResponse
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
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup
     *
     * @var list<string>
     */
    protected $dispatchConfirmationNumbers;
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
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup
     *
     * @return list<string>
     */
    public function getDispatchConfirmationNumbers(): array
    {
        return $this->dispatchConfirmationNumbers;
    }
    /**
     * List of Dispatch Confirmation Numbers which identifies the scheduled pickup
     *
     * @param list<string> $dispatchConfirmationNumbers
     *
     * @return self
     */
    public function setDispatchConfirmationNumbers(array $dispatchConfirmationNumbers): self
    {
        $this->initialized['dispatchConfirmationNumbers'] = true;
        $this->dispatchConfirmationNumbers = $dispatchConfirmationNumbers;
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