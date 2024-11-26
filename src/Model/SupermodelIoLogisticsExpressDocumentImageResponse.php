<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressDocumentImageResponse
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
     * Here you can find all document images from search query
     *
     * @var list<SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem>
     */
    protected $documents;
    /**
     * Here you can find all document images from search query
     *
     * @return list<SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem>
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }
    /**
     * Here you can find all document images from search query
     *
     * @param list<SupermodelIoLogisticsExpressDocumentImageResponseDocumentsItem> $documents
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