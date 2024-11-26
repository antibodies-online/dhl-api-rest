<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues extends \ArrayObject
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
     * Please provide the pre-calculated import customs duties value for the shipment
     *
     * @var float
     */
    protected $importCustomsDutyValue;
    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment
     *
     * @var float
     */
    protected $importTaxesValue;
    /**
     * Please provide pre-calculated total of all line items plus additional charges plus indicativeCustomsValues
     *
     * @var float
     */
    protected $totalWithImportDutiesAndTaxes;
    /**
     * Please provide the pre-calculated import customs duties value for the shipment
     *
     * @return float
     */
    public function getImportCustomsDutyValue(): float
    {
        return $this->importCustomsDutyValue;
    }
    /**
     * Please provide the pre-calculated import customs duties value for the shipment
     *
     * @param float $importCustomsDutyValue
     *
     * @return self
     */
    public function setImportCustomsDutyValue(float $importCustomsDutyValue): self
    {
        $this->initialized['importCustomsDutyValue'] = true;
        $this->importCustomsDutyValue = $importCustomsDutyValue;
        return $this;
    }
    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment
     *
     * @return float
     */
    public function getImportTaxesValue(): float
    {
        return $this->importTaxesValue;
    }
    /**
     * Please provide the pre-calculated import taxes (VAT/GST) value for the shipment
     *
     * @param float $importTaxesValue
     *
     * @return self
     */
    public function setImportTaxesValue(float $importTaxesValue): self
    {
        $this->initialized['importTaxesValue'] = true;
        $this->importTaxesValue = $importTaxesValue;
        return $this;
    }
    /**
     * Please provide pre-calculated total of all line items plus additional charges plus indicativeCustomsValues
     *
     * @return float
     */
    public function getTotalWithImportDutiesAndTaxes(): float
    {
        return $this->totalWithImportDutiesAndTaxes;
    }
    /**
     * Please provide pre-calculated total of all line items plus additional charges plus indicativeCustomsValues
     *
     * @param float $totalWithImportDutiesAndTaxes
     *
     * @return self
     */
    public function setTotalWithImportDutiesAndTaxes(float $totalWithImportDutiesAndTaxes): self
    {
        $this->initialized['totalWithImportDutiesAndTaxes'] = true;
        $this->totalWithImportDutiesAndTaxes = $totalWithImportDutiesAndTaxes;
        return $this;
    }
}