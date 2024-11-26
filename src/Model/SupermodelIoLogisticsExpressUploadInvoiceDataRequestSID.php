<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSID
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
     * Please provide Shipment Identification number (AWB number)
     *
     * @var string
     */
    protected $shipmentTrackingNumber;
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
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent
     */
    protected $content;
    /**
     * Here you can set invoice properties
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties
     */
    protected $outputImageProperties;
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
     */
    protected $customerDetails;
    /**
     * Please provide Shipment Identification number (AWB number)
     *
     * @return string
     */
    public function getShipmentTrackingNumber(): string
    {
        return $this->shipmentTrackingNumber;
    }
    /**
     * Please provide Shipment Identification number (AWB number)
     *
     * @param string $shipmentTrackingNumber
     *
     * @return self
     */
    public function setShipmentTrackingNumber(string $shipmentTrackingNumber): self
    {
        $this->initialized['shipmentTrackingNumber'] = true;
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }
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
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent
     */
    public function getContent(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent
    {
        return $this->content;
    }
    /**
     * Here you can define all the properties related to the content of the prospected shipment
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent $content
     *
     * @return self
     */
    public function setContent(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDContent $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * Here you can set invoice properties
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties
     */
    public function getOutputImageProperties(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties
    {
        return $this->outputImageProperties;
    }
    /**
     * Here you can set invoice properties
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties $outputImageProperties
     *
     * @return self
     */
    public function setOutputImageProperties(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties $outputImageProperties): self
    {
        $this->initialized['outputImageProperties'] = true;
        $this->outputImageProperties = $outputImageProperties;
        return $this;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
     */
    public function getCustomerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
    {
        return $this->customerDetails;
    }
    /**
     * Here you need to define all the parties needed to ship the package
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails $customerDetails
     *
     * @return self
     */
    public function setCustomerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails $customerDetails): self
    {
        $this->initialized['customerDetails'] = true;
        $this->customerDetails = $customerDetails;
        return $this;
    }
}