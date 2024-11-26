<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestCustomerDetailsUltimateConsigneeDetails
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
     * 
     *
     * @var SupermodelIoLogisticsExpressAddressCreateShipmentRequest
     */
    protected $postalAddress;
    /**
     * 
     *
     * @var SupermodelIoLogisticsExpressContact
     */
    protected $contactInformation;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressRegistrationNumbers>
     */
    protected $registrationNumbers;
    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here
     *
     * @var SupermodelIoLogisticsExpressRegistrationNumbers
     */
    protected $bankDetails;
    /**
     * Please enter the business party role type of the ultimate consignee
     *
     * @var string
     */
    protected $typeCode;
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressAddressCreateShipmentRequest
     */
    public function getPostalAddress(): SupermodelIoLogisticsExpressAddressCreateShipmentRequest
    {
        return $this->postalAddress;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress
     *
     * @return self
     */
    public function setPostalAddress(SupermodelIoLogisticsExpressAddressCreateShipmentRequest $postalAddress): self
    {
        $this->initialized['postalAddress'] = true;
        $this->postalAddress = $postalAddress;
        return $this;
    }
    /**
     * 
     *
     * @return SupermodelIoLogisticsExpressContact
     */
    public function getContactInformation(): SupermodelIoLogisticsExpressContact
    {
        return $this->contactInformation;
    }
    /**
     * 
     *
     * @param SupermodelIoLogisticsExpressContact $contactInformation
     *
     * @return self
     */
    public function setContactInformation(SupermodelIoLogisticsExpressContact $contactInformation): self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressRegistrationNumbers>
     */
    public function getRegistrationNumbers(): array
    {
        return $this->registrationNumbers;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressRegistrationNumbers> $registrationNumbers
     *
     * @return self
     */
    public function setRegistrationNumbers(array $registrationNumbers): self
    {
        $this->initialized['registrationNumbers'] = true;
        $this->registrationNumbers = $registrationNumbers;
        return $this;
    }
    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here
     *
     * @return SupermodelIoLogisticsExpressRegistrationNumbers
     */
    public function getBankDetails(): SupermodelIoLogisticsExpressRegistrationNumbers
    {
        return $this->bankDetails;
    }
    /**
     * Should your country require registration numbers, such as VAT, EOR etc., please declare it here
     *
     * @param SupermodelIoLogisticsExpressRegistrationNumbers $bankDetails
     *
     * @return self
     */
    public function setBankDetails(SupermodelIoLogisticsExpressRegistrationNumbers $bankDetails): self
    {
        $this->initialized['bankDetails'] = true;
        $this->bankDetails = $bankDetails;
        return $this;
    }
    /**
     * Please enter the business party role type of the ultimate consignee
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter the business party role type of the ultimate consignee
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