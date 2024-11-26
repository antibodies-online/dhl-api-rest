<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclarationInvoice
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
     * Please enter commercial invoice number
     *
     * @var string
     */
    protected $number;
    /**
     * Please enter commercial invoice date
     *
     * @var string
     */
    protected $date;
    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers
     *
     * @var string
     */
    protected $function;
    /**
     * Please provide the customer references at invoice level.  Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request. It is recommended to provide less than 20 customer references of 'MRN' type code
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Please provide Perfect Invoice related information
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues
     */
    protected $indicativeCustomsValues;
    /**
     * Please provide pre-calculated total values for total goods value and total invoice value.
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues
     */
    protected $preCalculatedTotalValues;
    /**
     * Please enter commercial invoice number
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * Please enter commercial invoice number
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * Please enter commercial invoice date
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * Please enter commercial invoice date
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers
     *
     * @return string
     */
    public function getFunction(): string
    {
        return $this->function;
    }
    /**
     * Please provide the purpose was the document details captured and are planned to be used. Note: export and import is only applicable for approve Sale In Transit customers
     *
     * @param string $function
     *
     * @return self
     */
    public function setFunction(string $function): self
    {
        $this->initialized['function'] = true;
        $this->function = $function;
        return $this;
    }
    /**
     * Please provide the customer references at invoice level.  Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request. It is recommended to provide less than 20 customer references of 'MRN' type code
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * Please provide the customer references at invoice level.  Note: customerReference/0/value with typeCode 'CU' is mandatory if using POST method and no shipmentTrackingNumber is provided in request. It is recommended to provide less than 20 customer references of 'MRN' type code
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationInvoiceCustomerReferencesItem> $customerReferences
     *
     * @return self
     */
    public function setCustomerReferences(array $customerReferences): self
    {
        $this->initialized['customerReferences'] = true;
        $this->customerReferences = $customerReferences;
        return $this;
    }
    /**
     * Please provide Perfect Invoice related information
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues
     */
    public function getIndicativeCustomsValues(): SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues
    {
        return $this->indicativeCustomsValues;
    }
    /**
     * Please provide Perfect Invoice related information
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues $indicativeCustomsValues
     *
     * @return self
     */
    public function setIndicativeCustomsValues(SupermodelIoLogisticsExpressExportDeclarationInvoiceIndicativeCustomsValues $indicativeCustomsValues): self
    {
        $this->initialized['indicativeCustomsValues'] = true;
        $this->indicativeCustomsValues = $indicativeCustomsValues;
        return $this;
    }
    /**
     * Please provide pre-calculated total values for total goods value and total invoice value.
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues
     */
    public function getPreCalculatedTotalValues(): SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues
    {
        return $this->preCalculatedTotalValues;
    }
    /**
     * Please provide pre-calculated total values for total goods value and total invoice value.
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues $preCalculatedTotalValues
     *
     * @return self
     */
    public function setPreCalculatedTotalValues(SupermodelIoLogisticsExpressExportDeclarationInvoicePreCalculatedTotalValues $preCalculatedTotalValues): self
    {
        $this->initialized['preCalculatedTotalValues'] = true;
        $this->preCalculatedTotalValues = $preCalculatedTotalValues;
        return $this;
    }
}