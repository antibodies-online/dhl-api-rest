<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestOutputImagePropertiesCustomerBarcodesItem
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
     * Please enter barcode content
     *
     * @var string
     */
    protected $content;
    /**
     * Please tner text below customer barcode
     *
     * @var string
     */
    protected $textBelowBarcode;
    /**
     * Please enter valid Symbology code
     *
     * @var string
     */
    protected $symbologyCode;
    /**
     * Please enter barcode content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    /**
     * Please enter barcode content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * Please tner text below customer barcode
     *
     * @return string
     */
    public function getTextBelowBarcode(): string
    {
        return $this->textBelowBarcode;
    }
    /**
     * Please tner text below customer barcode
     *
     * @param string $textBelowBarcode
     *
     * @return self
     */
    public function setTextBelowBarcode(string $textBelowBarcode): self
    {
        $this->initialized['textBelowBarcode'] = true;
        $this->textBelowBarcode = $textBelowBarcode;
        return $this;
    }
    /**
     * Please enter valid Symbology code
     *
     * @return string
     */
    public function getSymbologyCode(): string
    {
        return $this->symbologyCode;
    }
    /**
     * Please enter valid Symbology code
     *
     * @param string $symbologyCode
     *
     * @return self
     */
    public function setSymbologyCode(string $symbologyCode): self
    {
        $this->initialized['symbologyCode'] = true;
        $this->symbologyCode = $symbologyCode;
        return $this;
    }
}