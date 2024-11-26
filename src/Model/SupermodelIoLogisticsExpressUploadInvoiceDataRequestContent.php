<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
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
     * Here you can find all details related to export declaration
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclaration>
     */
    protected $exportDeclaration;
    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     *
     * @var string
     */
    protected $currency;
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @var string
     */
    protected $unitOfMeasurement;
    /**
     * Here you can find all details related to export declaration
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclaration>
     */
    public function getExportDeclaration(): array
    {
        return $this->exportDeclaration;
    }
    /**
     * Here you can find all details related to export declaration
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclaration> $exportDeclaration
     *
     * @return self
     */
    public function setExportDeclaration(array $exportDeclaration): self
    {
        $this->initialized['exportDeclaration'] = true;
        $this->exportDeclaration = $exportDeclaration;
        return $this;
    }
    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * For customs purposes please advise on currency code of the indicated amount in invoice.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @return string
     */
    public function getUnitOfMeasurement(): string
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Please enter Unit of measurement - metric,imperial
     *
     * @param string $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(string $unitOfMeasurement): self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
}