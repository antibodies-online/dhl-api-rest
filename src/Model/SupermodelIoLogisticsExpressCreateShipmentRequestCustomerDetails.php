<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetails
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
     * Please enter address and contact details related to shipper
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails
     */
    protected $shipperDetails;
    /**
     * Please enter address and contact details related to receiver
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails
     */
    protected $receiverDetails;
    /**
     * Please enter address and contact details related to buyer
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails
     */
    protected $buyerDetails;
    /**
     * Please enter address and contact details related to importer
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails
     */
    protected $importerDetails;
    /**
     * Please enter address and contact details related to exporter
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails
     */
    protected $exporterDetails;
    /**
     * Please enter address and contact details related to seller
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails
     */
    protected $sellerDetails;
    /**
     * Please enter address and contact details related to payer
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails
     */
    protected $payerDetails;
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails
     */
    protected $manufacturerDetails;
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
     */
    protected $ultimateConsigneeDetails;
    /**
     * Please enter address and contact details related to broker
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails
     */
    protected $brokerDetails;
    /**
     * Please enter address and contact details related to shipper
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails
     */
    public function getShipperDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails
    {
        return $this->shipperDetails;
    }
    /**
     * Please enter address and contact details related to shipper
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails $shipperDetails
     *
     * @return self
     */
    public function setShipperDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsShipperDetails $shipperDetails): self
    {
        $this->initialized['shipperDetails'] = true;
        $this->shipperDetails = $shipperDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to receiver
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails
     */
    public function getReceiverDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails
    {
        return $this->receiverDetails;
    }
    /**
     * Please enter address and contact details related to receiver
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails $receiverDetails
     *
     * @return self
     */
    public function setReceiverDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsReceiverDetails $receiverDetails): self
    {
        $this->initialized['receiverDetails'] = true;
        $this->receiverDetails = $receiverDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to buyer
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails
     */
    public function getBuyerDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails
    {
        return $this->buyerDetails;
    }
    /**
     * Please enter address and contact details related to buyer
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails $buyerDetails
     *
     * @return self
     */
    public function setBuyerDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBuyerDetails $buyerDetails): self
    {
        $this->initialized['buyerDetails'] = true;
        $this->buyerDetails = $buyerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to importer
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails
     */
    public function getImporterDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails
    {
        return $this->importerDetails;
    }
    /**
     * Please enter address and contact details related to importer
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails $importerDetails
     *
     * @return self
     */
    public function setImporterDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsImporterDetails $importerDetails): self
    {
        $this->initialized['importerDetails'] = true;
        $this->importerDetails = $importerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to exporter
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails
     */
    public function getExporterDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails
    {
        return $this->exporterDetails;
    }
    /**
     * Please enter address and contact details related to exporter
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails $exporterDetails
     *
     * @return self
     */
    public function setExporterDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsExporterDetails $exporterDetails): self
    {
        $this->initialized['exporterDetails'] = true;
        $this->exporterDetails = $exporterDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to seller
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails
     */
    public function getSellerDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails
    {
        return $this->sellerDetails;
    }
    /**
     * Please enter address and contact details related to seller
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails $sellerDetails
     *
     * @return self
     */
    public function setSellerDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsSellerDetails $sellerDetails): self
    {
        $this->initialized['sellerDetails'] = true;
        $this->sellerDetails = $sellerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to payer
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails
     */
    public function getPayerDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails
    {
        return $this->payerDetails;
    }
    /**
     * Please enter address and contact details related to payer
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails $payerDetails
     *
     * @return self
     */
    public function setPayerDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsPayerDetails $payerDetails): self
    {
        $this->initialized['payerDetails'] = true;
        $this->payerDetails = $payerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails
     */
    public function getManufacturerDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails
    {
        return $this->manufacturerDetails;
    }
    /**
     * Please enter address and contact details related to manufacturer
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails $manufacturerDetails
     *
     * @return self
     */
    public function setManufacturerDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsManufacturerDetails $manufacturerDetails): self
    {
        $this->initialized['manufacturerDetails'] = true;
        $this->manufacturerDetails = $manufacturerDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
     */
    public function getUltimateConsigneeDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
    {
        return $this->ultimateConsigneeDetails;
    }
    /**
     * Please enter address and contact details related to ultimate consignee
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails
     *
     * @return self
     */
    public function setUltimateConsigneeDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails $ultimateConsigneeDetails): self
    {
        $this->initialized['ultimateConsigneeDetails'] = true;
        $this->ultimateConsigneeDetails = $ultimateConsigneeDetails;
        return $this;
    }
    /**
     * Please enter address and contact details related to broker
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails
     */
    public function getBrokerDetails(): SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails
    {
        return $this->brokerDetails;
    }
    /**
     * Please enter address and contact details related to broker
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails $brokerDetails
     *
     * @return self
     */
    public function setBrokerDetails(SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsBrokerDetails $brokerDetails): self
    {
        $this->initialized['brokerDetails'] = true;
        $this->brokerDetails = $brokerDetails;
        return $this;
    }
}