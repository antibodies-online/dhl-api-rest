<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImageProperties
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
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode
     *
     * @var list<SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem>
     */
    protected $imageOptions;
    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode
     *
     * @return list<SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem>
     */
    public function getImageOptions(): array
    {
        return $this->imageOptions;
    }
    /**
     * Here the image options are defined for label, waybillDoc, invoice, receipt and QRcode
     *
     * @param list<SupermodelIoLogisticsExpressUploadInvoiceDataRequestSIDOutputImagePropertiesImageOptionsItem> $imageOptions
     *
     * @return self
     */
    public function setImageOptions(array $imageOptions): self
    {
        $this->initialized['imageOptions'] = true;
        $this->imageOptions = $imageOptions;
        return $this;
    }
}