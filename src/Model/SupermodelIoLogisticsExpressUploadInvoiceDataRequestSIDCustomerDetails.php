<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetails
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
     * Please enter address and contact details related to seller
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails
     */
    protected $sellerDetails;
    /**
     * Please enter address and contact details related to buyer
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails
     */
    protected $buyerDetails;
    /**
     * Please enter address and contact details related to importer
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails
     */
    protected $importerDetails;
    /**
     * Please enter address and contact details related to exporter
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails
     */
    protected $exporterDetails;
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails
     */
    protected $manufacturerDetails;
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails
     */
    protected $ultimateConsigneeDetails;
    /**
     * Please enter address and contact details related to broker
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails
     */
    protected $brokerDetails;
    /**
     * Please enter address and contact details related to seller
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails
     */
    public function getSellerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails
    {
        return $this->sellerDetails;
    }
    /**
     * Please enter address and contact details related to seller
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails $sellerDetails
     *
     * @return self
     */
    public function setSellerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsSellerDetails $sellerDetails): self
    {
        $this->initialized['sellerDetails'] = true;
        $this->sellerDetails = $sellerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to buyer
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails
     */
    public function getBuyerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails
    {
        return $this->buyerDetails;
    }
    /**
     * Please enter address and contact details related to buyer
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails $buyerDetails
     *
     * @return self
     */
    public function setBuyerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBuyerDetails $buyerDetails): self
    {
        $this->initialized['buyerDetails'] = true;
        $this->buyerDetails = $buyerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to importer
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails
     */
    public function getImporterDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails
    {
        return $this->importerDetails;
    }
    /**
     * Please enter address and contact details related to importer
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails $importerDetails
     *
     * @return self
     */
    public function setImporterDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsImporterDetails $importerDetails): self
    {
        $this->initialized['importerDetails'] = true;
        $this->importerDetails = $importerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to exporter
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails
     */
    public function getExporterDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails
    {
        return $this->exporterDetails;
    }
    /**
     * Please enter address and contact details related to exporter
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails $exporterDetails
     *
     * @return self
     */
    public function setExporterDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsExporterDetails $exporterDetails): self
    {
        $this->initialized['exporterDetails'] = true;
        $this->exporterDetails = $exporterDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails
     */
    public function getManufacturerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails
    {
        return $this->manufacturerDetails;
    }
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails $manufacturerDetails
     *
     * @return self
     */
    public function setManufacturerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsManufacturerDetails $manufacturerDetails): self
    {
        $this->initialized['manufacturerDetails'] = true;
        $this->manufacturerDetails = $manufacturerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails
     */
    public function getUltimateConsigneeDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails
    {
        return $this->ultimateConsigneeDetails;
    }
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails
     *
     * @return self
     */
    public function setUltimateConsigneeDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails): self
    {
        $this->initialized['ultimateConsigneeDetails'] = true;
        $this->ultimateConsigneeDetails = $ultimateConsigneeDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to broker
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails
     */
    public function getBrokerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails
    {
        return $this->brokerDetails;
    }
    /**
     * Please enter address and contact details related to broker
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails $brokerDetails
     *
     * @return self
     */
    public function setBrokerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDCustomerDetailsBrokerDetails $brokerDetails): self
    {
        $this->initialized['brokerDetails'] = true;
        $this->brokerDetails = $brokerDetails;
        return $this;
    }
}