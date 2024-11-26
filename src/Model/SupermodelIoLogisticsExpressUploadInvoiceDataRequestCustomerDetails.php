<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetails
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
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails
     */
    protected $sellerDetails;
    /**
     * Please enter address and contact details related to buyer
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails
     */
    protected $buyerDetails;
    /**
     * Please enter address and contact details related to importer
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails
     */
    protected $importerDetails;
    /**
     * Please enter address and contact details related to exporter
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails
     */
    protected $exporterDetails;
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails
     */
    protected $manufacturerDetails;
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails
     */
    protected $ultimateConsigneeDetails;
    /**
     * Please enter address and contact details related to broker
     *
     * @var SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails
     */
    protected $brokerDetails;
    /**
     * Please enter address and contact details related to seller
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails
     */
    public function getSellerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails
    {
        return $this->sellerDetails;
    }
    /**
     * Please enter address and contact details related to seller
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails $sellerDetails
     *
     * @return self
     */
    public function setSellerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsSellerDetails $sellerDetails): self
    {
        $this->initialized['sellerDetails'] = true;
        $this->sellerDetails = $sellerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to buyer
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails
     */
    public function getBuyerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails
    {
        return $this->buyerDetails;
    }
    /**
     * Please enter address and contact details related to buyer
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails $buyerDetails
     *
     * @return self
     */
    public function setBuyerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBuyerDetails $buyerDetails): self
    {
        $this->initialized['buyerDetails'] = true;
        $this->buyerDetails = $buyerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to importer
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails
     */
    public function getImporterDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails
    {
        return $this->importerDetails;
    }
    /**
     * Please enter address and contact details related to importer
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails $importerDetails
     *
     * @return self
     */
    public function setImporterDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsImporterDetails $importerDetails): self
    {
        $this->initialized['importerDetails'] = true;
        $this->importerDetails = $importerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to exporter
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails
     */
    public function getExporterDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails
    {
        return $this->exporterDetails;
    }
    /**
     * Please enter address and contact details related to exporter
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails $exporterDetails
     *
     * @return self
     */
    public function setExporterDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsExporterDetails $exporterDetails): self
    {
        $this->initialized['exporterDetails'] = true;
        $this->exporterDetails = $exporterDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails
     */
    public function getManufacturerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails
    {
        return $this->manufacturerDetails;
    }
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails $manufacturerDetails
     *
     * @return self
     */
    public function setManufacturerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsManufacturerDetails $manufacturerDetails): self
    {
        $this->initialized['manufacturerDetails'] = true;
        $this->manufacturerDetails = $manufacturerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails
     */
    public function getUltimateConsigneeDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails
    {
        return $this->ultimateConsigneeDetails;
    }
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails
     *
     * @return self
     */
    public function setUltimateConsigneeDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails): self
    {
        $this->initialized['ultimateConsigneeDetails'] = true;
        $this->ultimateConsigneeDetails = $ultimateConsigneeDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to broker
     *
     * @return SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails
     */
    public function getBrokerDetails(): SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails
    {
        return $this->brokerDetails;
    }
    /**
     * Please enter address and contact details related to broker
     *
     * @param SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails $brokerDetails
     *
     * @return self
     */
    public function setBrokerDetails(SupermodelIoLogisticsExpressUploadInvoiceDataRequestCustomerDetailsBrokerDetails $brokerDetails): self
    {
        $this->initialized['brokerDetails'] = true;
        $this->brokerDetails = $brokerDetails;
        return $this;
    }
}