<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoice
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
     * Please enter accurate date when the invoice was issued at as that is what drives the exchange rate calculation during customs clearance process (where applicable).
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * Please enter who has signed the invoce
     *
     * @var string
     */
    protected $signatureName;
    /**
     * Please provide title of person who has signed the invoice
     *
     * @var string
     */
    protected $signatureTitle;
    /**
     * Please provide the signature image
     *
     * @var string
     */
    protected $signatureImage;
    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @var list<string>
     */
    protected $instructions;
    /**
     * Customer data text to be printed in<BR>                  customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @var list<string>
     */
    protected $customerDataTextEntries;
    /**
     * Please provide the total net weight
     *
     * @var float
     */
    protected $totalNetWeight;
    /**
     * Please provide the total gross weight
     *
     * @var float
     */
    protected $totalGrossWeight;
    /**
     * Please provide the customer references at invoice level. It is recommended to provide less than 20 customer references of 'MRN' type code.
     *
     * @var list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem>
     */
    protected $customerReferences;
    /**
     * Please provide the terms of payment
     *
     * @var string
     */
    protected $termsOfPayment;
    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR>                  These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR>                  <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR>                  <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
     */
    protected $indicativeCustomsValues;
    /**
     * Please provide pre-calculated total values for total goods value and total invoice value.
     *
     * @var SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues
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
     * Please enter accurate date when the invoice was issued at as that is what drives the exchange rate calculation during customs clearance process (where applicable).
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * Please enter accurate date when the invoice was issued at as that is what drives the exchange rate calculation during customs clearance process (where applicable).
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * Please enter who has signed the invoce
     *
     * @return string
     */
    public function getSignatureName(): string
    {
        return $this->signatureName;
    }
    /**
     * Please enter who has signed the invoce
     *
     * @param string $signatureName
     *
     * @return self
     */
    public function setSignatureName(string $signatureName): self
    {
        $this->initialized['signatureName'] = true;
        $this->signatureName = $signatureName;
        return $this;
    }
    /**
     * Please provide title of person who has signed the invoice
     *
     * @return string
     */
    public function getSignatureTitle(): string
    {
        return $this->signatureTitle;
    }
    /**
     * Please provide title of person who has signed the invoice
     *
     * @param string $signatureTitle
     *
     * @return self
     */
    public function setSignatureTitle(string $signatureTitle): self
    {
        $this->initialized['signatureTitle'] = true;
        $this->signatureTitle = $signatureTitle;
        return $this;
    }
    /**
     * Please provide the signature image
     *
     * @return string
     */
    public function getSignatureImage(): string
    {
        return $this->signatureImage;
    }
    /**
     * Please provide the signature image
     *
     * @param string $signatureImage
     *
     * @return self
     */
    public function setSignatureImage(string $signatureImage): self
    {
        $this->initialized['signatureImage'] = true;
        $this->signatureImage = $signatureImage;
        return $this;
    }
    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @return list<string>
     */
    public function getInstructions(): array
    {
        return $this->instructions;
    }
    /**
     * Shipment instructions for customs invoice printing purposes. Printed only when using Customs Invoice template COMMERCIAL_INVOICE_04. If using Customs Invoice template 			COMMERCIAL_INVOICE_04, recommended max length is 120 characters.
     *
     * @param list<string> $instructions
     *
     * @return self
     */
    public function setInstructions(array $instructions): self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;
        return $this;
    }
    /**
     * Customer data text to be printed in<BR>                  customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @return list<string>
     */
    public function getCustomerDataTextEntries(): array
    {
        return $this->customerDataTextEntries;
    }
    /**
     * Customer data text to be printed in<BR>                  customs invoice.<BR>                  Printed only when using Customs<BR>                  Invoice template<BR>                  COMMERCIAL_INVOICE_04.
     *
     * @param list<string> $customerDataTextEntries
     *
     * @return self
     */
    public function setCustomerDataTextEntries(array $customerDataTextEntries): self
    {
        $this->initialized['customerDataTextEntries'] = true;
        $this->customerDataTextEntries = $customerDataTextEntries;
        return $this;
    }
    /**
     * Please provide the total net weight
     *
     * @return float
     */
    public function getTotalNetWeight(): float
    {
        return $this->totalNetWeight;
    }
    /**
     * Please provide the total net weight
     *
     * @param float $totalNetWeight
     *
     * @return self
     */
    public function setTotalNetWeight(float $totalNetWeight): self
    {
        $this->initialized['totalNetWeight'] = true;
        $this->totalNetWeight = $totalNetWeight;
        return $this;
    }
    /**
     * Please provide the total gross weight
     *
     * @return float
     */
    public function getTotalGrossWeight(): float
    {
        return $this->totalGrossWeight;
    }
    /**
     * Please provide the total gross weight
     *
     * @param float $totalGrossWeight
     *
     * @return self
     */
    public function setTotalGrossWeight(float $totalGrossWeight): self
    {
        $this->initialized['totalGrossWeight'] = true;
        $this->totalGrossWeight = $totalGrossWeight;
        return $this;
    }
    /**
     * Please provide the customer references at invoice level. It is recommended to provide less than 20 customer references of 'MRN' type code.
     *
     * @return list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem>
     */
    public function getCustomerReferences(): array
    {
        return $this->customerReferences;
    }
    /**
     * Please provide the customer references at invoice level. It is recommended to provide less than 20 customer references of 'MRN' type code.
     *
     * @param list<SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceCustomerReferencesItem> $customerReferences
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
     * Please provide the terms of payment
     *
     * @return string
     */
    public function getTermsOfPayment(): string
    {
        return $this->termsOfPayment;
    }
    /**
     * Please provide the terms of payment
     *
     * @param string $termsOfPayment
     *
     * @return self
     */
    public function setTermsOfPayment(string $termsOfPayment): self
    {
        $this->initialized['termsOfPayment'] = true;
        $this->termsOfPayment = $termsOfPayment;
        return $this;
    }
    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR>                  These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR>                  <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR>                  <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
     */
    public function getIndicativeCustomsValues(): SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues
    {
        return $this->indicativeCustomsValues;
    }
    /**
     * indicativeCustomsValues contains child nodes importCustomsDutyValue and importTaxesValue.<BR>                  <BR>                  These 2 child elements are only applicable for Commercial Invoice printing purpose in Customs Invoice template*: COMMERCIAL_INVOICE_P_10 and COMMERCIAL_INVOICE_L_10.<BR>                  If any of this child nodes are present, it will only be able to display up to three OtherCharges. <BR>                  <BR>                  Nonetheless, the ShipmentRequest can still contain up to five additionalCharges.<BR>                  If there are more than three additionalCharges, the third additionalCharges onwards will be combined and displayed under one single caption of 'Other Charges'.<BR>                  <BR>                  Note: If either first or second additionalCharges has typeCode of 'other', and there are more than three additionalCharges provided in the request, the additionalCharges with typeCode of 'other' will be consolidated under the combined 'Other Charges' caption as well.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues $indicativeCustomsValues
     *
     * @return self
     */
    public function setIndicativeCustomsValues(SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoiceIndicativeCustomsValues $indicativeCustomsValues): self
    {
        $this->initialized['indicativeCustomsValues'] = true;
        $this->indicativeCustomsValues = $indicativeCustomsValues;
        return $this;
    }
    /**
     * Please provide pre-calculated total values for total goods value and total invoice value.
     *
     * @return SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues
     */
    public function getPreCalculatedTotalValues(): SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues
    {
        return $this->preCalculatedTotalValues;
    }
    /**
     * Please provide pre-calculated total values for total goods value and total invoice value.
     *
     * @param SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues $preCalculatedTotalValues
     *
     * @return self
     */
    public function setPreCalculatedTotalValues(SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues $preCalculatedTotalValues): self
    {
        $this->initialized['preCalculatedTotalValues'] = true;
        $this->preCalculatedTotalValues = $preCalculatedTotalValues;
        return $this;
    }
}