<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImageProperties
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
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output
     *
     * @var float
     */
    protected $printerDPI;
    /**
     * Customer barcodes to be printed on supported transport label templates
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem>
     */
    protected $customerBarcodes;
    /**
     * Customer Logo Image to be printed on transport label
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem>
     */
    protected $customerLogos;
    /**
     * Please provide the format of the output documents. Note that invoice and shipment receipt will always come back as PDF
     *
     * @var string
     */
    protected $encodingFormat = 'pdf';
    /**
     * Here the image options are defined for label, waybillDoc, invoice, QRcode and shipment receipt
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem>
     */
    protected $imageOptions;
    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @var bool
     */
    protected $splitTransportAndWaybillDocLabels;
    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     *
     * @var bool
     */
    protected $allDocumentsInOneImage;
    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @var bool
     */
    protected $splitDocumentsByPages;
    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     *
     * @var bool
     */
    protected $splitInvoiceAndReceipt;
    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response.  Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     *
     * @var bool
     */
    protected $receiptAndLabelsInOneImage;
    /**
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output
     *
     * @return float
     */
    public function getPrinterDPI(): float
    {
        return $this->printerDPI;
    }
    /**
     * Printer DPI Resolution for X-axis and Y-axis (in DPI) for transport label and waybill document output
     *
     * @param float $printerDPI
     *
     * @return self
     */
    public function setPrinterDPI(float $printerDPI): self
    {
        $this->initialized['printerDPI'] = true;
        $this->printerDPI = $printerDPI;
        return $this;
    }
    /**
     * Customer barcodes to be printed on supported transport label templates
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem>
     */
    public function getCustomerBarcodes(): array
    {
        return $this->customerBarcodes;
    }
    /**
     * Customer barcodes to be printed on supported transport label templates
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem> $customerBarcodes
     *
     * @return self
     */
    public function setCustomerBarcodes(array $customerBarcodes): self
    {
        $this->initialized['customerBarcodes'] = true;
        $this->customerBarcodes = $customerBarcodes;
        return $this;
    }
    /**
     * Customer Logo Image to be printed on transport label
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem>
     */
    public function getCustomerLogos(): array
    {
        return $this->customerLogos;
    }
    /**
     * Customer Logo Image to be printed on transport label
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerLogosItem> $customerLogos
     *
     * @return self
     */
    public function setCustomerLogos(array $customerLogos): self
    {
        $this->initialized['customerLogos'] = true;
        $this->customerLogos = $customerLogos;
        return $this;
    }
    /**
     * Please provide the format of the output documents. Note that invoice and shipment receipt will always come back as PDF
     *
     * @return string
     */
    public function getEncodingFormat(): string
    {
        return $this->encodingFormat;
    }
    /**
     * Please provide the format of the output documents. Note that invoice and shipment receipt will always come back as PDF
     *
     * @param string $encodingFormat
     *
     * @return self
     */
    public function setEncodingFormat(string $encodingFormat): self
    {
        $this->initialized['encodingFormat'] = true;
        $this->encodingFormat = $encodingFormat;
        return $this;
    }
    /**
     * Here the image options are defined for label, waybillDoc, invoice, QRcode and shipment receipt
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem>
     */
    public function getImageOptions(): array
    {
        return $this->imageOptions;
    }
    /**
     * Here the image options are defined for label, waybillDoc, invoice, QRcode and shipment receipt
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem> $imageOptions
     *
     * @return self
     */
    public function setImageOptions(array $imageOptions): self
    {
        $this->initialized['imageOptions'] = true;
        $this->imageOptions = $imageOptions;
        return $this;
    }
    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @return bool
     */
    public function getSplitTransportAndWaybillDocLabels(): bool
    {
        return $this->splitTransportAndWaybillDocLabels;
    }
    /**
     * When set to true it will generate a single PDF or thermal output file for the Transport Label, a single PDF or thermal output file for the Waybill document and a single PDF file consisting of Commercial Invoice and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @param bool $splitTransportAndWaybillDocLabels
     *
     * @return self
     */
    public function setSplitTransportAndWaybillDocLabels(bool $splitTransportAndWaybillDocLabels): self
    {
        $this->initialized['splitTransportAndWaybillDocLabels'] = true;
        $this->splitTransportAndWaybillDocLabels = $splitTransportAndWaybillDocLabels;
        return $this;
    }
    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     *
     * @return bool
     */
    public function getAllDocumentsInOneImage(): bool
    {
        return $this->allDocumentsInOneImage;
    }
    /**
     * When set to true it will generate a single PDF or thermal output image file consists of Transport Label, Waybill Document, Shipment Receipt and Commercial Invoice.<BR>          The default value is false, where a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned.
     *
     * @param bool $allDocumentsInOneImage
     *
     * @return self
     */
    public function setAllDocumentsInOneImage(bool $allDocumentsInOneImage): self
    {
        $this->initialized['allDocumentsInOneImage'] = true;
        $this->allDocumentsInOneImage = $allDocumentsInOneImage;
        return $this;
    }
    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @return bool
     */
    public function getSplitDocumentsByPages(): bool
    {
        return $this->splitDocumentsByPages;
    }
    /**
     * When set to true it will generate a single PDF or thermal output image file for each page for the Transport Label and single PDF or thermal output image file for Waybill Document will be returned in the create shipment response. The default value is false, a single PDF or thermal output image file for each page for Transport Label and single PDF or thermal output image file for Waybill Document will be returned in create shipment response.
     *
     * @param bool $splitDocumentsByPages
     *
     * @return self
     */
    public function setSplitDocumentsByPages(bool $splitDocumentsByPages): self
    {
        $this->initialized['splitDocumentsByPages'] = true;
        $this->splitDocumentsByPages = $splitDocumentsByPages;
        return $this;
    }
    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     *
     * @return bool
     */
    public function getSplitInvoiceAndReceipt(): bool
    {
        return $this->splitInvoiceAndReceipt;
    }
    /**
     * When set to true it will generate a single PDF or thermal output image file consisting of Transport Label + Waybill Document, a single file consist of Commercial Invoice and a single file consist of Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF or thermal output image file for Shipment Receipt and Customs Invoice will be returned in create shipment response.
     *
     * @param bool $splitInvoiceAndReceipt
     *
     * @return self
     */
    public function setSplitInvoiceAndReceipt(bool $splitInvoiceAndReceipt): self
    {
        $this->initialized['splitInvoiceAndReceipt'] = true;
        $this->splitInvoiceAndReceipt = $splitInvoiceAndReceipt;
        return $this;
    }
    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response.  Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     *
     * @return bool
     */
    public function getReceiptAndLabelsInOneImage(): bool
    {
        return $this->receiptAndLabelsInOneImage;
    }
    /**
     * When set to true it will generate a single PDF file consisting of Transport Label, Waybill Document and Shipment Receipt. The default value is false, a single PDF or thermal output image file consists of Transport Label + Waybill Document and single PDF file for Shipment Receipt will be returned in create shipment response.  Applicable only when #/outputImageProperties/imageOptions/0/typeCode is 'receipt' and #/outputImageProperties/encodingFormat is PDF.
     *
     * @param bool $receiptAndLabelsInOneImage
     *
     * @return self
     */
    public function setReceiptAndLabelsInOneImage(bool $receiptAndLabelsInOneImage): self
    {
        $this->initialized['receiptAndLabelsInOneImage'] = true;
        $this->receiptAndLabelsInOneImage = $receiptAndLabelsInOneImage;
        return $this;
    }
}