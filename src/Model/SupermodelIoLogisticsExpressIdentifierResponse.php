<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressIdentifierResponse
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
     * @var list<string>
     */
    protected $warnings;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem>
     */
    protected $identifiers;
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
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem>
     */
    public function getIdentifiers(): array
    {
        return $this->identifiers;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressIdentifierResponseIdentifiersItem> $identifiers
     *
     * @return self
     */
    public function setIdentifiers(array $identifiers): self
    {
        $this->initialized['identifiers'] = true;
        $this->identifiers = $identifiers;
        return $this;
    }
}