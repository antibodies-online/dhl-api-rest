<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem
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
     * Please enter valid DHL Express Dangerous good content id (please contact your DHL Express IT representative for the relevant content ID code if you are shipping Dan
     *
     * @var string
     */
    protected $contentId;
    /**
     * Please enter dry ice total net weight when shipping dry ice
     *
     * @var float
     */
    protected $dryIceTotalNetWeight;
    /**
     * The customDescription node contains the customized Dangerous Goods statement to declare contents accurately. The customDescription node value will be displayed in the Transport Label and Waybill Document, replacing the default IATA Dangerous Goods statement constructed based on contentId node.<BR>            Multiple customDescription nodes from multiple dangerousGoods nodes will be concatenated using comma separator with combined maximum limit of 200 characters.<BR>            <BR>            It is recommended to use customDescription for entire shipment for each dangerousGoods to fully utilize customDescription printout in Transport Label and Waybill Document.<BR>            <BR>            Note: For 'customDescription' usage, ensure all 'dangerousGoods' segments are including the 'customDescription' field value. Any of the dangerousGoods does not provide with customDescription field value will be ignored from printing in Transport Label and Waybill Document.
     *
     * @var string
     */
    protected $customDescription;
    /**
     * Please enter UN code(s)
     *
     * @var list<string>
     */
    protected $unCodes;
    /**
     * Please enter valid DHL Express Dangerous good content id (please contact your DHL Express IT representative for the relevant content ID code if you are shipping Dan
     *
     * @return string
     */
    public function getContentId(): string
    {
        return $this->contentId;
    }
    /**
     * Please enter valid DHL Express Dangerous good content id (please contact your DHL Express IT representative for the relevant content ID code if you are shipping Dan
     *
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId(string $contentId): self
    {
        $this->initialized['contentId'] = true;
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * Please enter dry ice total net weight when shipping dry ice
     *
     * @return float
     */
    public function getDryIceTotalNetWeight(): float
    {
        return $this->dryIceTotalNetWeight;
    }
    /**
     * Please enter dry ice total net weight when shipping dry ice
     *
     * @param float $dryIceTotalNetWeight
     *
     * @return self
     */
    public function setDryIceTotalNetWeight(float $dryIceTotalNetWeight): self
    {
        $this->initialized['dryIceTotalNetWeight'] = true;
        $this->dryIceTotalNetWeight = $dryIceTotalNetWeight;
        return $this;
    }
    /**
     * The customDescription node contains the customized Dangerous Goods statement to declare contents accurately. The customDescription node value will be displayed in the Transport Label and Waybill Document, replacing the default IATA Dangerous Goods statement constructed based on contentId node.<BR>            Multiple customDescription nodes from multiple dangerousGoods nodes will be concatenated using comma separator with combined maximum limit of 200 characters.<BR>            <BR>            It is recommended to use customDescription for entire shipment for each dangerousGoods to fully utilize customDescription printout in Transport Label and Waybill Document.<BR>            <BR>            Note: For 'customDescription' usage, ensure all 'dangerousGoods' segments are including the 'customDescription' field value. Any of the dangerousGoods does not provide with customDescription field value will be ignored from printing in Transport Label and Waybill Document.
     *
     * @return string
     */
    public function getCustomDescription(): string
    {
        return $this->customDescription;
    }
    /**
     * The customDescription node contains the customized Dangerous Goods statement to declare contents accurately. The customDescription node value will be displayed in the Transport Label and Waybill Document, replacing the default IATA Dangerous Goods statement constructed based on contentId node.<BR>            Multiple customDescription nodes from multiple dangerousGoods nodes will be concatenated using comma separator with combined maximum limit of 200 characters.<BR>            <BR>            It is recommended to use customDescription for entire shipment for each dangerousGoods to fully utilize customDescription printout in Transport Label and Waybill Document.<BR>            <BR>            Note: For 'customDescription' usage, ensure all 'dangerousGoods' segments are including the 'customDescription' field value. Any of the dangerousGoods does not provide with customDescription field value will be ignored from printing in Transport Label and Waybill Document.
     *
     * @param string $customDescription
     *
     * @return self
     */
    public function setCustomDescription(string $customDescription): self
    {
        $this->initialized['customDescription'] = true;
        $this->customDescription = $customDescription;
        return $this;
    }
    /**
     * Please enter UN code(s)
     *
     * @return list<string>
     */
    public function getUnCodes(): array
    {
        return $this->unCodes;
    }
    /**
     * Please enter UN code(s)
     *
     * @param list<string> $unCodes
     *
     * @return self
     */
    public function setUnCodes(array $unCodes): self
    {
        $this->initialized['unCodes'] = true;
        $this->unCodes = $unCodes;
        return $this;
    }
}