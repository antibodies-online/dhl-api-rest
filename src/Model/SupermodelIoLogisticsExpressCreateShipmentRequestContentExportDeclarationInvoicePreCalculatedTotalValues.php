<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestContentExportDeclarationInvoicePreCalculatedTotalValues
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
     * Please provide the pre-calculated total value of all line items. preCalculatedTotalGoodsValue indicates pre-calculated sum of all Export Line Items’ Subtotal in Export Declaration. This field value will be rendered in Commercial Invoice output and manifest message.
     *
     * @var float
     */
    protected $preCalculatedTotalGoodsValue;
    /**
     * Please provide the total value of all line items plus additional charges if any. preCalculatedTotalInvoiceValue indicates pre-calculated sum of all Export Line Items’ Subtotal  amount plus all Other Charges amount.  This field value will be used in rendered Commercial Invoice output, Waybill document and manifest message.
     *
     * @var float
     */
    protected $preCalculatedTotalInvoiceValue;
    /**
     * Please provide the pre-calculated total value of all line items. preCalculatedTotalGoodsValue indicates pre-calculated sum of all Export Line Items’ Subtotal in Export Declaration. This field value will be rendered in Commercial Invoice output and manifest message.
     *
     * @return float
     */
    public function getPreCalculatedTotalGoodsValue(): float
    {
        return $this->preCalculatedTotalGoodsValue;
    }
    /**
     * Please provide the pre-calculated total value of all line items. preCalculatedTotalGoodsValue indicates pre-calculated sum of all Export Line Items’ Subtotal in Export Declaration. This field value will be rendered in Commercial Invoice output and manifest message.
     *
     * @param float $preCalculatedTotalGoodsValue
     *
     * @return self
     */
    public function setPreCalculatedTotalGoodsValue(float $preCalculatedTotalGoodsValue): self
    {
        $this->initialized['preCalculatedTotalGoodsValue'] = true;
        $this->preCalculatedTotalGoodsValue = $preCalculatedTotalGoodsValue;
        return $this;
    }
    /**
     * Please provide the total value of all line items plus additional charges if any. preCalculatedTotalInvoiceValue indicates pre-calculated sum of all Export Line Items’ Subtotal  amount plus all Other Charges amount.  This field value will be used in rendered Commercial Invoice output, Waybill document and manifest message.
     *
     * @return float
     */
    public function getPreCalculatedTotalInvoiceValue(): float
    {
        return $this->preCalculatedTotalInvoiceValue;
    }
    /**
     * Please provide the total value of all line items plus additional charges if any. preCalculatedTotalInvoiceValue indicates pre-calculated sum of all Export Line Items’ Subtotal  amount plus all Other Charges amount.  This field value will be used in rendered Commercial Invoice output, Waybill document and manifest message.
     *
     * @param float $preCalculatedTotalInvoiceValue
     *
     * @return self
     */
    public function setPreCalculatedTotalInvoiceValue(float $preCalculatedTotalInvoiceValue): self
    {
        $this->initialized['preCalculatedTotalInvoiceValue'] = true;
        $this->preCalculatedTotalInvoiceValue = $preCalculatedTotalInvoiceValue;
        return $this;
    }
}