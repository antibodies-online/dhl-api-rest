<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressValueAddedServices
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
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates
     *
     * @var string
     */
    protected $serviceCode;
    /**
     * Please enter monetary value of service (e.g. Insured Value)
     *
     * @var float
     */
    protected $value;
    /**
     * Please enter currency code (e.g. Insured Value currency code)
     *
     * @var string
     */
    protected $currency;
    /**
     * Payment method code (e.g. Cash)
     *
     * @var string
     */
    protected $method;
    /**
    * The DangerousGoods section indicates if there is dangerous good content within the shipment. <BR> The ContentID node contains the Content ID for Dangerous Good classification. <BR> It is required to provide the dangerous good Content ID for every dangerous good special service provided, and vice versa. <BR>
    For the complete list of dangerous goods Content IDs and dangerous goods special services combinations, refer to Reference Data Guide section 5. valueAddedServicesDefinition\\dangerousGoods. <BR> Note: Please contact your DHL Express IT representative if additional assistance is required.<BR><BR>
    For dangerous goods shipment with Dry Ice example: UN1845 (Content ID: 901), additional node must be populated 'dryIceTotalNetWeight.'<BR>
    For dangerous goods shipment with 'Excepted Quantities', additional node must be populated 'unCodes'. Few scenarios guideline to prepare a Dangerous Goods shipment for:<BR><BR>
    A) Dry Ice: <BR> 1.'serviceCode' element must contain value of 'HC'<BR> 2.'contentID' element consists of '901'<BR> 3.'dryIceTotalNetWeight' element consists of the total net weight of the dry ice in 'unitofMeasurement' <BR><BR>
    B) Lithium Battery: <BR> 1.'serviceType' element must contain value of 'HD', 'HM', 'HV' or 'HW'<BR> 2.'contentID' element consists of '966', '969', '967', '970' respectively<BR><BR>
    C) Excepted Quantities:<BR> 1.'serviceCode' element must contain value of 'HH'<BR> 2.'contentID' element consists of 'E01<BR> 3.'unCodes' element consists of the UN code associate with it.<BR>
    *
    * @var list<SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem>
    */
    protected $dangerousGoods;
    /**
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates
     *
     * @return string
     */
    public function getServiceCode(): string
    {
        return $this->serviceCode;
    }
    /**
     * Please enter DHL Express value added service code. For detailed list of all available service codes for your prospect shipment please invoke GET /products or GET /rates
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode(string $serviceCode): self
    {
        $this->initialized['serviceCode'] = true;
        $this->serviceCode = $serviceCode;
        return $this;
    }
    /**
     * Please enter monetary value of service (e.g. Insured Value)
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * Please enter monetary value of service (e.g. Insured Value)
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Please enter currency code (e.g. Insured Value currency code)
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * Please enter currency code (e.g. Insured Value currency code)
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * Payment method code (e.g. Cash)
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Payment method code (e.g. Cash)
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
    * The DangerousGoods section indicates if there is dangerous good content within the shipment. <BR> The ContentID node contains the Content ID for Dangerous Good classification. <BR> It is required to provide the dangerous good Content ID for every dangerous good special service provided, and vice versa. <BR>
    For the complete list of dangerous goods Content IDs and dangerous goods special services combinations, refer to Reference Data Guide section 5. valueAddedServicesDefinition\\dangerousGoods. <BR> Note: Please contact your DHL Express IT representative if additional assistance is required.<BR><BR>
    For dangerous goods shipment with Dry Ice example: UN1845 (Content ID: 901), additional node must be populated 'dryIceTotalNetWeight.'<BR>
    For dangerous goods shipment with 'Excepted Quantities', additional node must be populated 'unCodes'. Few scenarios guideline to prepare a Dangerous Goods shipment for:<BR><BR>
    A) Dry Ice: <BR> 1.'serviceCode' element must contain value of 'HC'<BR> 2.'contentID' element consists of '901'<BR> 3.'dryIceTotalNetWeight' element consists of the total net weight of the dry ice in 'unitofMeasurement' <BR><BR>
    B) Lithium Battery: <BR> 1.'serviceType' element must contain value of 'HD', 'HM', 'HV' or 'HW'<BR> 2.'contentID' element consists of '966', '969', '967', '970' respectively<BR><BR>
    C) Excepted Quantities:<BR> 1.'serviceCode' element must contain value of 'HH'<BR> 2.'contentID' element consists of 'E01<BR> 3.'unCodes' element consists of the UN code associate with it.<BR>
    *
    * @return list<SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem>
    */
    public function getDangerousGoods(): array
    {
        return $this->dangerousGoods;
    }
    /**
    * The DangerousGoods section indicates if there is dangerous good content within the shipment. <BR> The ContentID node contains the Content ID for Dangerous Good classification. <BR> It is required to provide the dangerous good Content ID for every dangerous good special service provided, and vice versa. <BR>
    For the complete list of dangerous goods Content IDs and dangerous goods special services combinations, refer to Reference Data Guide section 5. valueAddedServicesDefinition\\dangerousGoods. <BR> Note: Please contact your DHL Express IT representative if additional assistance is required.<BR><BR>
    For dangerous goods shipment with Dry Ice example: UN1845 (Content ID: 901), additional node must be populated 'dryIceTotalNetWeight.'<BR>
    For dangerous goods shipment with 'Excepted Quantities', additional node must be populated 'unCodes'. Few scenarios guideline to prepare a Dangerous Goods shipment for:<BR><BR>
    A) Dry Ice: <BR> 1.'serviceCode' element must contain value of 'HC'<BR> 2.'contentID' element consists of '901'<BR> 3.'dryIceTotalNetWeight' element consists of the total net weight of the dry ice in 'unitofMeasurement' <BR><BR>
    B) Lithium Battery: <BR> 1.'serviceType' element must contain value of 'HD', 'HM', 'HV' or 'HW'<BR> 2.'contentID' element consists of '966', '969', '967', '970' respectively<BR><BR>
    C) Excepted Quantities:<BR> 1.'serviceCode' element must contain value of 'HH'<BR> 2.'contentID' element consists of 'E01<BR> 3.'unCodes' element consists of the UN code associate with it.<BR>
    *
    * @param list<SupermodelIoLogisticsExpressValueAddedServicesDangerousGoodsItem> $dangerousGoods
    *
    * @return self
    */
    public function setDangerousGoods(array $dangerousGoods): self
    {
        $this->initialized['dangerousGoods'] = true;
        $this->dangerousGoods = $dangerousGoods;
        return $this;
    }
}