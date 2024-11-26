<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressContact
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
     * Please enter email address
     *
     * @var string
     */
    protected $email;
    /**
     * Please enter phone number
     *
     * @var string
     */
    protected $phone;
    /**
     * Please enter mobile phone number
     *
     * @var string
     */
    protected $mobilePhone;
    /**
     * Please enter company name
     *
     * @var string
     */
    protected $companyName;
    /**
     * Please enter full name
     *
     * @var string
     */
    protected $fullName;
    /**
     * Please enter email address
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Please enter email address
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Please enter phone number
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * Please enter phone number
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * Please enter mobile phone number
     *
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }
    /**
     * Please enter mobile phone number
     *
     * @param string $mobilePhone
     *
     * @return self
     */
    public function setMobilePhone(string $mobilePhone): self
    {
        $this->initialized['mobilePhone'] = true;
        $this->mobilePhone = $mobilePhone;
        return $this;
    }
    /**
     * Please enter company name
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Please enter company name
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Please enter full name
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }
    /**
     * Please enter full name
     *
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;
        return $this;
    }
}