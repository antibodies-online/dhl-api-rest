<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequest
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
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD
     *
     * @var string
     */
    protected $plannedShipDate;
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.  Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @var list<SupermodelIoLogisticsExpressAccount>
     */
    protected $accounts;
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
     */
    protected $content;
    /**
     * Here you can set invoice properties
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
     */
    protected $outputImageProperties;
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
     */
    protected $customerDetails;
    /**
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD
     *
     * @return string
     */
    public function getPlannedShipDate(): string
    {
        return $this->plannedShipDate;
    }
    /**
     * The planned shipment date for the provided shipmentTrackingNumber.  The date must be in the format: YYYY-MM-DD
     *
     * @param string $plannedShipDate
     *
     * @return self
     */
    public function setPlannedShipDate(string $plannedShipDate): self
    {
        $this->initialized['plannedShipDate'] = true;
        $this->plannedShipDate = $plannedShipDate;
        return $this;
    }
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.  Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @return list<SupermodelIoLogisticsExpressAccount>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
    /**
     * Please enter all the DHL Express accounts and types to be used for this shipment.  Note: accounts/0/number with typeCode 'shipper' is mandatory if using POST method and no shipmentTrackingNumber is provided in request.
     *
     * @param list<SupermodelIoLogisticsExpressAccount> $accounts
     *
     * @return self
     */
    public function setAccounts(array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
     */
    public function getContent(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent
    {
        return $this->content;
    }
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent $content
     *
     * @return self
     */
    public function setContent(SupermodelIoLogisticsExpressUploadInvoiceDataRequestContent $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * Here you can set invoice properties
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
     */
    public function getOutputImageProperties(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties
    {
        return $this->outputImageProperties;
    }
    /**
     * Here you can set invoice properties
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties $outputImageProperties
     *
     * @return self
     */
    public function setOutputImageProperties(SupermodelIoLogisticsExpressUploadInvoiceDataRequestOutputImageProperties $outputImageProperties): self
    {
        $this->initialized['outputImageProperties'] = true;
        $this->outputImageProperties = $outputImageProperties;
        return $this;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;
        return $this;
    }
}