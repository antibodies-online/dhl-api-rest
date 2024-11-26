<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesImageOptionsItem
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
     * Please enter the document type you want to wish set properties for
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please enter DHL Express document template name. <BR>                Sample Transport label templates:<BR>                ECOM26_84_A4_001 <BR>                ECOM26_84_001 - default<BR>                ECOM_TC_A4<BR>                ECOM26_A6_002<BR>                ECOM26_84CI_001<BR>                ECOM26_84CI_002 - supported single customer barcode<BR>                ECOM26_84CI_003 - to be used if customer barcodes are used<BR>                ECOM_A4_RU_002<BR> ECOM26_84_LBBX_001 - supported for loose BBX shipment<BR> ECOM26_64_LBBX_001 - supported for loose BBX shipment<BR>Sample WaybillDoc templates<BR>                ARCH_8X4_A4_002<BR>                ARCH_8X4 - default<BR>                ARCH_6X4<BR>                ARCH_A4_RU_002<BR>                <BR>                Sample Commercial invoice templates:<BR>                COMMERCIAL_INVOICE_04 - This template can print the Shipper, Recipient, and Buyer and Importer address details and is on portrait orientation, exclusive use for preparing Loose BBX shipment.<BR>                COMMERCIAL_INVOICE_P_10 - (default) This template can print the Shipper, Recipient and upto two more additional address details in portrait orientation. Note: If customer provided more than four address roles in the request message and this template is selected, the rendered invoice will only contain four address roles based on order of priority: Shipper, Recipient, Seller, Importer, Exporter, Buyer. <BR>                COMMERCIAL_INVOICE_L_10 - This template can print the Shipper,Recipient, Buyer, and Importer and Exporter address details and is on landscape orientation..<BR>                RET_COM_INVOICE_A4_01 - This template can print the Shipper, Recipient and Importer of record address details and is on landscape orientation. This template is for exclusive use for certain shipment where the goods are actual 'returns'. The Shipper is the party that earlier has received the goods, but now wishes to return the goods to its originating party. The Recipient in this shipment scenario will receive the 'returned goods'. Therefore such request of shipment with an invoice rendering may utilize the specific invoice template for 'Returns Invoice'.<BR>                <BR>                Sample Shipment Receipt template<BR>                SHIP_RECPT_A4_RU_002<BR> SHIPRCPT_EN_001 - default <BR> <BR> Sample QR Code template template<BR>  QR_1_00_LL_PNG_001 - default
     *
     * @var string
     */
    protected $templateName;
    /**
     * To be used for waybillDoc, invoice, shipment receipt and QRcode. If set to true then the document is provided otherwise not
     *
     * @var bool
     */
    protected $isRequested;
    /**
     * To be used for waybillDoc. If set to true then account information will not be printed on the waybillDoc
     *
     * @var bool
     */
    protected $hideAccountNumber;
    /**
     * You can ask up to 2 waybillDoc copies to be provided
     *
     * @var float
     */
    protected $numberOfCopies;
    /**
     * Please advise what type of customs documentation is required
     *
     * @var string
     */
    protected $invoiceType;
    /**
     * Please enter ISO 3 letters language code for invoice or shipment receipt
     *
     * @var string
     */
    protected $languageCode;
    /**
     * Please enter ISO 2 letters language country code for invoice or shipment receipt
     *
     * @var string
     */
    protected $languageCountryCode;
    /**
     * Please enter ISO 4 letters language script code for shipment receipt
     *
     * @var string
     */
    protected $languageScriptCode;
    /**
     * Please provide the format of the QR Code output format.
     *
     * @var string
     */
    protected $encodingFormat;
    /**
     * DHL Logo to be printed in Transport Label or Waybill Document
     *
     * @var bool
     */
    protected $renderDHLLogo;
    /**
     * To print respective Transport Label and Waybill document into A4 margin PDF.<BR>                Note: ECOM26_A6_002,ECOM26_84CI_001,ECOM26_84CI_002,ARCH_6X4,ARCH_8X4 template. <BR>                This option is applicable only for PDF encodingFormat selection.<BR>                false: Transport Label and Waybill document will use default margin settings (default behavior) <BR>                true: Transport Label and Waybill document will print into A4 margin PDF
     *
     * @var bool
     */
    protected $fitLabelsToA4;
    /**
     * Additional customer label free text that can be printed in certain label.Note: Applicable only to ECOM26_A6_002, ECOM_TC_A4 and ECOM26_84CI_001.
     *
     * @var string
     */
    protected $labelFreeText;
    /**
     * Additional customer label text that can be printed in certain label.Note: Applicable only to ECOM26_84_A4_001, ECOM_TC_A4 and ECOM26_84CI_001
     *
     * @var string
     */
    protected $labelCustomerDataText;
    /**
     * Declaration text that can be printed in certain shipment receipt template
     *
     * @var string
     */
    protected $shipmentReceiptCustomerDataText;
    /**
     * Please enter the document type you want to wish set properties for
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter the document type you want to wish set properties for
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(string $typeCode): self
    {
        $this->initialized['typeCode'] = true;
        $this->typeCode = $typeCode;
        return $this;
    }
    /**
     * Please enter DHL Express document template name. <BR>                Sample Transport label templates:<BR>                ECOM26_84_A4_001 <BR>                ECOM26_84_001 - default<BR>                ECOM_TC_A4<BR>                ECOM26_A6_002<BR>                ECOM26_84CI_001<BR>                ECOM26_84CI_002 - supported single customer barcode<BR>                ECOM26_84CI_003 - to be used if customer barcodes are used<BR>                ECOM_A4_RU_002<BR> ECOM26_84_LBBX_001 - supported for loose BBX shipment<BR> ECOM26_64_LBBX_001 - supported for loose BBX shipment<BR>Sample WaybillDoc templates<BR>                ARCH_8X4_A4_002<BR>                ARCH_8X4 - default<BR>                ARCH_6X4<BR>                ARCH_A4_RU_002<BR>                <BR>                Sample Commercial invoice templates:<BR>                COMMERCIAL_INVOICE_04 - This template can print the Shipper, Recipient, and Buyer and Importer address details and is on portrait orientation, exclusive use for preparing Loose BBX shipment.<BR>                COMMERCIAL_INVOICE_P_10 - (default) This template can print the Shipper, Recipient and upto two more additional address details in portrait orientation. Note: If customer provided more than four address roles in the request message and this template is selected, the rendered invoice will only contain four address roles based on order of priority: Shipper, Recipient, Seller, Importer, Exporter, Buyer. <BR>                COMMERCIAL_INVOICE_L_10 - This template can print the Shipper,Recipient, Buyer, and Importer and Exporter address details and is on landscape orientation..<BR>                RET_COM_INVOICE_A4_01 - This template can print the Shipper, Recipient and Importer of record address details and is on landscape orientation. This template is for exclusive use for certain shipment where the goods are actual 'returns'. The Shipper is the party that earlier has received the goods, but now wishes to return the goods to its originating party. The Recipient in this shipment scenario will receive the 'returned goods'. Therefore such request of shipment with an invoice rendering may utilize the specific invoice template for 'Returns Invoice'.<BR>                <BR>                Sample Shipment Receipt template<BR>                SHIP_RECPT_A4_RU_002<BR> SHIPRCPT_EN_001 - default <BR> <BR> Sample QR Code template template<BR>  QR_1_00_LL_PNG_001 - default
     *
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }
    /**
     * Please enter DHL Express document template name. <BR>                Sample Transport label templates:<BR>                ECOM26_84_A4_001 <BR>                ECOM26_84_001 - default<BR>                ECOM_TC_A4<BR>                ECOM26_A6_002<BR>                ECOM26_84CI_001<BR>                ECOM26_84CI_002 - supported single customer barcode<BR>                ECOM26_84CI_003 - to be used if customer barcodes are used<BR>                ECOM_A4_RU_002<BR> ECOM26_84_LBBX_001 - supported for loose BBX shipment<BR> ECOM26_64_LBBX_001 - supported for loose BBX shipment<BR>Sample WaybillDoc templates<BR>                ARCH_8X4_A4_002<BR>                ARCH_8X4 - default<BR>                ARCH_6X4<BR>                ARCH_A4_RU_002<BR>                <BR>                Sample Commercial invoice templates:<BR>                COMMERCIAL_INVOICE_04 - This template can print the Shipper, Recipient, and Buyer and Importer address details and is on portrait orientation, exclusive use for preparing Loose BBX shipment.<BR>                COMMERCIAL_INVOICE_P_10 - (default) This template can print the Shipper, Recipient and upto two more additional address details in portrait orientation. Note: If customer provided more than four address roles in the request message and this template is selected, the rendered invoice will only contain four address roles based on order of priority: Shipper, Recipient, Seller, Importer, Exporter, Buyer. <BR>                COMMERCIAL_INVOICE_L_10 - This template can print the Shipper,Recipient, Buyer, and Importer and Exporter address details and is on landscape orientation..<BR>                RET_COM_INVOICE_A4_01 - This template can print the Shipper, Recipient and Importer of record address details and is on landscape orientation. This template is for exclusive use for certain shipment where the goods are actual 'returns'. The Shipper is the party that earlier has received the goods, but now wishes to return the goods to its originating party. The Recipient in this shipment scenario will receive the 'returned goods'. Therefore such request of shipment with an invoice rendering may utilize the specific invoice template for 'Returns Invoice'.<BR>                <BR>                Sample Shipment Receipt template<BR>                SHIP_RECPT_A4_RU_002<BR> SHIPRCPT_EN_001 - default <BR> <BR> Sample QR Code template template<BR>  QR_1_00_LL_PNG_001 - default
     *
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName(string $templateName): self
    {
        $this->initialized['templateName'] = true;
        $this->templateName = $templateName;
        return $this;
    }
    /**
     * To be used for waybillDoc, invoice, shipment receipt and QRcode. If set to true then the document is provided otherwise not
     *
     * @return bool
     */
    public function getIsRequested(): bool
    {
        return $this->isRequested;
    }
    /**
     * To be used for waybillDoc, invoice, shipment receipt and QRcode. If set to true then the document is provided otherwise not
     *
     * @param bool $isRequested
     *
     * @return self
     */
    public function setIsRequested(bool $isRequested): self
    {
        $this->initialized['isRequested'] = true;
        $this->isRequested = $isRequested;
        return $this;
    }
    /**
     * To be used for waybillDoc. If set to true then account information will not be printed on the waybillDoc
     *
     * @return bool
     */
    public function getHideAccountNumber(): bool
    {
        return $this->hideAccountNumber;
    }
    /**
     * To be used for waybillDoc. If set to true then account information will not be printed on the waybillDoc
     *
     * @param bool $hideAccountNumber
     *
     * @return self
     */
    public function setHideAccountNumber(bool $hideAccountNumber): self
    {
        $this->initialized['hideAccountNumber'] = true;
        $this->hideAccountNumber = $hideAccountNumber;
        return $this;
    }
    /**
     * You can ask up to 2 waybillDoc copies to be provided
     *
     * @return float
     */
    public function getNumberOfCopies(): float
    {
        return $this->numberOfCopies;
    }
    /**
     * You can ask up to 2 waybillDoc copies to be provided
     *
     * @param float $numberOfCopies
     *
     * @return self
     */
    public function setNumberOfCopies(float $numberOfCopies): self
    {
        $this->initialized['numberOfCopies'] = true;
        $this->numberOfCopies = $numberOfCopies;
        return $this;
    }
    /**
     * Please advise what type of customs documentation is required
     *
     * @return string
     */
    public function getInvoiceType(): string
    {
        return $this->invoiceType;
    }
    /**
     * Please advise what type of customs documentation is required
     *
     * @param string $invoiceType
     *
     * @return self
     */
    public function setInvoiceType(string $invoiceType): self
    {
        $this->initialized['invoiceType'] = true;
        $this->invoiceType = $invoiceType;
        return $this;
    }
    /**
     * Please enter ISO 3 letters language code for invoice or shipment receipt
     *
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
    /**
     * Please enter ISO 3 letters language code for invoice or shipment receipt
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * Please enter ISO 2 letters language country code for invoice or shipment receipt
     *
     * @return string
     */
    public function getLanguageCountryCode(): string
    {
        return $this->languageCountryCode;
    }
    /**
     * Please enter ISO 2 letters language country code for invoice or shipment receipt
     *
     * @param string $languageCountryCode
     *
     * @return self
     */
    public function setLanguageCountryCode(string $languageCountryCode): self
    {
        $this->initialized['languageCountryCode'] = true;
        $this->languageCountryCode = $languageCountryCode;
        return $this;
    }
    /**
     * Please enter ISO 4 letters language script code for shipment receipt
     *
     * @return string
     */
    public function getLanguageScriptCode(): string
    {
        return $this->languageScriptCode;
    }
    /**
     * Please enter ISO 4 letters language script code for shipment receipt
     *
     * @param string $languageScriptCode
     *
     * @return self
     */
    public function setLanguageScriptCode(string $languageScriptCode): self
    {
        $this->initialized['languageScriptCode'] = true;
        $this->languageScriptCode = $languageScriptCode;
        return $this;
    }
    /**
     * Please provide the format of the QR Code output format.
     *
     * @return string
     */
    public function getEncodingFormat(): string
    {
        return $this->encodingFormat;
    }
    /**
     * Please provide the format of the QR Code output format.
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
     * DHL Logo to be printed in Transport Label or Waybill Document
     *
     * @return bool
     */
    public function getRenderDHLLogo(): bool
    {
        return $this->renderDHLLogo;
    }
    /**
     * DHL Logo to be printed in Transport Label or Waybill Document
     *
     * @param bool $renderDHLLogo
     *
     * @return self
     */
    public function setRenderDHLLogo(bool $renderDHLLogo): self
    {
        $this->initialized['renderDHLLogo'] = true;
        $this->renderDHLLogo = $renderDHLLogo;
        return $this;
    }
    /**
     * To print respective Transport Label and Waybill document into A4 margin PDF.<BR>                Note: ECOM26_A6_002,ECOM26_84CI_001,ECOM26_84CI_002,ARCH_6X4,ARCH_8X4 template. <BR>                This option is applicable only for PDF encodingFormat selection.<BR>                false: Transport Label and Waybill document will use default margin settings (default behavior) <BR>                true: Transport Label and Waybill document will print into A4 margin PDF
     *
     * @return bool
     */
    public function getFitLabelsToA4(): bool
    {
        return $this->fitLabelsToA4;
    }
    /**
     * To print respective Transport Label and Waybill document into A4 margin PDF.<BR>                Note: ECOM26_A6_002,ECOM26_84CI_001,ECOM26_84CI_002,ARCH_6X4,ARCH_8X4 template. <BR>                This option is applicable only for PDF encodingFormat selection.<BR>                false: Transport Label and Waybill document will use default margin settings (default behavior) <BR>                true: Transport Label and Waybill document will print into A4 margin PDF
     *
     * @param bool $fitLabelsToA4
     *
     * @return self
     */
    public function setFitLabelsToA4(bool $fitLabelsToA4): self
    {
        $this->initialized['fitLabelsToA4'] = true;
        $this->fitLabelsToA4 = $fitLabelsToA4;
        return $this;
    }
    /**
     * Additional customer label free text that can be printed in certain label.Note: Applicable only to ECOM26_A6_002, ECOM_TC_A4 and ECOM26_84CI_001.
     *
     * @return string
     */
    public function getLabelFreeText(): string
    {
        return $this->labelFreeText;
    }
    /**
     * Additional customer label free text that can be printed in certain label.Note: Applicable only to ECOM26_A6_002, ECOM_TC_A4 and ECOM26_84CI_001.
     *
     * @param string $labelFreeText
     *
     * @return self
     */
    public function setLabelFreeText(string $labelFreeText): self
    {
        $this->initialized['labelFreeText'] = true;
        $this->labelFreeText = $labelFreeText;
        return $this;
    }
    /**
     * Additional customer label text that can be printed in certain label.Note: Applicable only to ECOM26_84_A4_001, ECOM_TC_A4 and ECOM26_84CI_001
     *
     * @return string
     */
    public function getLabelCustomerDataText(): string
    {
        return $this->labelCustomerDataText;
    }
    /**
     * Additional customer label text that can be printed in certain label.Note: Applicable only to ECOM26_84_A4_001, ECOM_TC_A4 and ECOM26_84CI_001
     *
     * @param string $labelCustomerDataText
     *
     * @return self
     */
    public function setLabelCustomerDataText(string $labelCustomerDataText): self
    {
        $this->initialized['labelCustomerDataText'] = true;
        $this->labelCustomerDataText = $labelCustomerDataText;
        return $this;
    }
    /**
     * Declaration text that can be printed in certain shipment receipt template
     *
     * @return string
     */
    public function getShipmentReceiptCustomerDataText(): string
    {
        return $this->shipmentReceiptCustomerDataText;
    }
    /**
     * Declaration text that can be printed in certain shipment receipt template
     *
     * @param string $shipmentReceiptCustomerDataText
     *
     * @return self
     */
    public function setShipmentReceiptCustomerDataText(string $shipmentReceiptCustomerDataText): self
    {
        $this->initialized['shipmentReceiptCustomerDataText'] = true;
        $this->shipmentReceiptCustomerDataText = $shipmentReceiptCustomerDataText;
        return $this;
    }
}