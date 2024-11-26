<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressExportDeclaration
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
     * Please enter details for each export line item
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItem>
     */
    protected $lineItems;
    /**
     * Please provide invoice related information
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationInvoice
     */
    protected $invoice;
    /**
     * Please enter up to three remarks
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationRemarksItem>
     */
    protected $remarks;
    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR>      documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem>
     */
    protected $additionalCharges;
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     *
     * @var string
     */
    protected $placeOfIncoterm;
    /**
     * Please enter recipient reference
     *
     * @var string
     */
    protected $recipientReference;
    /**
     * Exporter related details
     *
     * @var SupermodelIoLogisticsExpressExportDeclarationExporter
     */
    protected $exporter;
    /**
     * Please provide the reason for export
     *
     * @var string
     */
    protected $exportReasonType;
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons
     *
     * @var string
     */
    protected $shipmentType;
    /**
     * Please provide the Customs Documents at invoice level
     *
     * @var list<SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem>
     */
    protected $customsDocuments;
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship
     *
     * @var string
     */
    protected $incoterm;
    /**
     * Please enter details for each export line item
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItem>
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }
    /**
     * Please enter details for each export line item
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationLineItemsItem> $lineItems
     *
     * @return self
     */
    public function setLineItems(array $lineItems): self
    {
        $this->initialized['lineItems'] = true;
        $this->lineItems = $lineItems;
        return $this;
    }
    /**
     * Please provide invoice related information
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationInvoice
     */
    public function getInvoice(): SupermodelIoLogisticsExpressExportDeclarationInvoice
    {
        return $this->invoice;
    }
    /**
     * Please provide invoice related information
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationInvoice $invoice
     *
     * @return self
     */
    public function setInvoice(SupermodelIoLogisticsExpressExportDeclarationInvoice $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
    /**
     * Please enter up to three remarks
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationRemarksItem>
     */
    public function getRemarks(): array
    {
        return $this->remarks;
    }
    /**
     * Please enter up to three remarks
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationRemarksItem> $remarks
     *
     * @return self
     */
    public function setRemarks(array $remarks): self
    {
        $this->initialized['remarks'] = true;
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR>      documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem>
     */
    public function getAdditionalCharges(): array
    {
        return $this->additionalCharges;
    }
    /**
     * Please enter additional charge to appear on the invoice<BR>      admin, Administration Charge<BR>      delivery, Delivery Charge<BR>      documentation, Documentation Charge<BR>      expedite, Expedite Charge<BR>      freight, Freight Charge<BR>      fuel surcharge, Fuel Surcharge<BR>      logistic, Logistic Charge<BR>      other, Other Charge<BR>      packaging, Packaging Charge<BR>      pickup, Pickup Charge<BR>      handling, Handling Charge<BR>      vat, VAT Charge<BR>      insurance, Insurance Cost
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationAdditionalChargesItem> $additionalCharges
     *
     * @return self
     */
    public function setAdditionalCharges(array $additionalCharges): self
    {
        $this->initialized['additionalCharges'] = true;
        $this->additionalCharges = $additionalCharges;
        return $this;
    }
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     *
     * @return string
     */
    public function getPlaceOfIncoterm(): string
    {
        return $this->placeOfIncoterm;
    }
    /**
     * Name of port of departure, shipment or destination as required under the applicable delivery term.
     *
     * @param string $placeOfIncoterm
     *
     * @return self
     */
    public function setPlaceOfIncoterm(string $placeOfIncoterm): self
    {
        $this->initialized['placeOfIncoterm'] = true;
        $this->placeOfIncoterm = $placeOfIncoterm;
        return $this;
    }
    /**
     * Please enter recipient reference
     *
     * @return string
     */
    public function getRecipientReference(): string
    {
        return $this->recipientReference;
    }
    /**
     * Please enter recipient reference
     *
     * @param string $recipientReference
     *
     * @return self
     */
    public function setRecipientReference(string $recipientReference): self
    {
        $this->initialized['recipientReference'] = true;
        $this->recipientReference = $recipientReference;
        return $this;
    }
    /**
     * Exporter related details
     *
     * @return SupermodelIoLogisticsExpressExportDeclarationExporter
     */
    public function getExporter(): SupermodelIoLogisticsExpressExportDeclarationExporter
    {
        return $this->exporter;
    }
    /**
     * Exporter related details
     *
     * @param SupermodelIoLogisticsExpressExportDeclarationExporter $exporter
     *
     * @return self
     */
    public function setExporter(SupermodelIoLogisticsExpressExportDeclarationExporter $exporter): self
    {
        $this->initialized['exporter'] = true;
        $this->exporter = $exporter;
        return $this;
    }
    /**
     * Please provide the reason for export
     *
     * @return string
     */
    public function getExportReasonType(): string
    {
        return $this->exportReasonType;
    }
    /**
     * Please provide the reason for export
     *
     * @param string $exportReasonType
     *
     * @return self
     */
    public function setExportReasonType(string $exportReasonType): self
    {
        $this->initialized['exportReasonType'] = true;
        $this->exportReasonType = $exportReasonType;
        return $this;
    }
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons
     *
     * @return string
     */
    public function getShipmentType(): string
    {
        return $this->shipmentType;
    }
    /**
     * Please provide the shipment was sent for Personal (Gift) or Commercial (Sale) reasons
     *
     * @param string $shipmentType
     *
     * @return self
     */
    public function setShipmentType(string $shipmentType): self
    {
        $this->initialized['shipmentType'] = true;
        $this->shipmentType = $shipmentType;
        return $this;
    }
    /**
     * Please provide the Customs Documents at invoice level
     *
     * @return list<SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem>
     */
    public function getCustomsDocuments(): array
    {
        return $this->customsDocuments;
    }
    /**
     * Please provide the Customs Documents at invoice level
     *
     * @param list<SupermodelIoLogisticsExpressExportDeclarationCustomsDocumentsItem> $customsDocuments
     *
     * @return self
     */
    public function setCustomsDocuments(array $customsDocuments): self
    {
        $this->initialized['customsDocuments'] = true;
        $this->customsDocuments = $customsDocuments;
        return $this;
    }
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship
     *
     * @return string
     */
    public function getIncoterm(): string
    {
        return $this->incoterm;
    }
    /**
     * The Incoterms rules are a globally-recognized set of standards, used worldwide in international and domestic contracts for the delivery of goods, illustrating responsibilities between buyer and seller for costs and risk, as well as cargo insurance.<BR>      EXW ExWorks<BR>      FCA Free Carrier<BR>      CPT Carriage Paid To<BR>      CIP Carriage and Insurance Paid To<BR>      DPU Delivered at Place Unloaded<BR>      DAP Delivered at Place<BR>      DDP Delivered Duty Paid<BR>      FAS Free Alongside Ship<BR>      FOB Free on Board<BR>      CFR Cost and Freight<BR>      CIF Cost, Insurance and Freight<BR>      DAF Delivered at Frontier<BR>      DAT Delivered at Terminal<BR>      DDU Delivered Duty Unpaid<BR>      DEQ Delivery ex Quay<BR>      DES Delivered ex Ship
     *
     * @param string $incoterm
     *
     * @return self
     */
    public function setIncoterm(string $incoterm): self
    {
        $this->initialized['incoterm'] = true;
        $this->incoterm = $incoterm;
        return $this;
    }
}