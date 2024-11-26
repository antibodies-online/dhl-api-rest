<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressReferenceDataResponse extends \ArrayObject
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
     * The result of search from provided reference criteria
     *
     * @var list<SupermodelIoLogisticsExpressReferenceData>
     */
    protected $referenceData;
    /**
     * 
     *
     * @var list<string>
     */
    protected $warnings;
    /**
     * The result of search from provided reference criteria
     *
     * @return list<SupermodelIoLogisticsExpressReferenceData>
     */
    public function getReferenceData(): array
    {
        return $this->referenceData;
    }
    /**
     * The result of search from provided reference criteria
     *
     * @param list<SupermodelIoLogisticsExpressReferenceData> $referenceData
     *
     * @return self
     */
    public function setReferenceData(array $referenceData): self
    {
        $this->initialized['referenceData'] = true;
        $this->referenceData = $referenceData;
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