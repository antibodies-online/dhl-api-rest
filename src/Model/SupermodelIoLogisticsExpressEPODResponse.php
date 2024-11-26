<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressEPODResponse
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
     * @var list<SupermodelIoLogisticsExpressEPODResponseDocumentsItem>
     */
    protected $documents;
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressEPODResponseDocumentsItem>
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressEPODResponseDocumentsItem> $documents
     *
     * @return self
     */
    public function setDocuments(array $documents): self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
}