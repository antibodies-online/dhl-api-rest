<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressPackageReference
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
     * Please provide reference
     *
     * @var string
     */
    protected $value;
    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number
     *
     * @var string
     */
    protected $typeCode = 'CU';
    /**
     * Please provide reference
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Please provide reference
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please provide reference type<BR>      <BR>      AAO, shipment reference number of receiver<BR>      CU, reference number of consignor - default<BR>      FF, reference number of freight forwarder<BR>      FN, freight bill number for <ex works invoice number><BR>      IBC, inbound center reference number<BR>      LLR, load list reference for <10-digit Shipment ID><BR>      OBC, outbound center reference number for <SHIPMEN IDENTIFIER (COUNTRY OF ORIGIN)><BR>      PRN, pickup request number for <BOOKINGREFERENCE NUMBER><BR>      ACP, local payer account number<BR>      ACS, local shipper account number<BR>      ACR, local receiver account number<BR>      CDN, customs declaration number<BR>      STD, eurolog 15-digit shipment id<BR>      CO, buyers order number
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
}