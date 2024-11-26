<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Promotion extends \ArrayObject
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
     * Unique identifier for promotion
     *
     * @var int
     */
    protected $id;
    /**
     * Country Code
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Partner Type code
     *
     * @var string
     */
    protected $partnerTypeCode;
    /**
     * Service Point ID
     *
     * @var string
     */
    protected $servicePointId;
    /**
     * Client ID
     *
     * @var string
     */
    protected $clientId;
    /**
     * Capability(PPC)
     *
     * @var string
     */
    protected $capability;
    /**
     * Promotion Start date
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * Promotion End date
     *
     * @var \DateTime
     */
    protected $endDate;
    /**
     * Promotion on specific day of the week
     *
     * @var string
     */
    protected $dayOfWeek;
    /**
     * Promotion message
     *
     * @var string
     */
    protected $text;
    /**
     * Promotion button text
     *
     * @var string
     */
    protected $buttonText;
    /**
     * Promotion Language Code
     *
     * @var string
     */
    protected $languageCode1;
    /**
     * Promotion message
     *
     * @var string
     */
    protected $text1;
    /**
     * Promotion button text
     *
     * @var string
     */
    protected $buttonText1;
    /**
     * Promotion Language Code
     *
     * @var string
     */
    protected $languageCode2;
    /**
     * Promotion message
     *
     * @var string
     */
    protected $text2;
    /**
     * Promotion button text
     *
     * @var string
     */
    protected $buttonText2;
    /**
     * Promotion Language Code
     *
     * @var string
     */
    protected $languageCode3;
    /**
     * Promotion message
     *
     * @var string
     */
    protected $text3;
    /**
     * Promotion button text
     *
     * @var string
     */
    protected $buttonText3;
    /**
     * Promotion Web link
     *
     * @var string
     */
    protected $hyperlink;
    /**
     * Promotion created date
     *
     * @var \DateTime
     */
    protected $created;
    /**
     * Unique identifier for promotion
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Unique identifier for promotion
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Country Code
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country Code
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Partner Type code
     *
     * @return string
     */
    public function getPartnerTypeCode(): string
    {
        return $this->partnerTypeCode;
    }
    /**
     * Partner Type code
     *
     * @param string $partnerTypeCode
     *
     * @return self
     */
    public function setPartnerTypeCode(string $partnerTypeCode): self
    {
        $this->initialized['partnerTypeCode'] = true;
        $this->partnerTypeCode = $partnerTypeCode;
        return $this;
    }
    /**
     * Service Point ID
     *
     * @return string
     */
    public function getServicePointId(): string
    {
        return $this->servicePointId;
    }
    /**
     * Service Point ID
     *
     * @param string $servicePointId
     *
     * @return self
     */
    public function setServicePointId(string $servicePointId): self
    {
        $this->initialized['servicePointId'] = true;
        $this->servicePointId = $servicePointId;
        return $this;
    }
    /**
     * Client ID
     *
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }
    /**
     * Client ID
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * Capability(PPC)
     *
     * @return string
     */
    public function getCapability(): string
    {
        return $this->capability;
    }
    /**
     * Capability(PPC)
     *
     * @param string $capability
     *
     * @return self
     */
    public function setCapability(string $capability): self
    {
        $this->initialized['capability'] = true;
        $this->capability = $capability;
        return $this;
    }
    /**
     * Promotion Start date
     *
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }
    /**
     * Promotion Start date
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Promotion End date
     *
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }
    /**
     * Promotion End date
     *
     * @param \DateTime $endDate
     *
     * @return self
     */
    public function setEndDate(\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Promotion on specific day of the week
     *
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }
    /**
     * Promotion on specific day of the week
     *
     * @param string $dayOfWeek
     *
     * @return self
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        $this->initialized['dayOfWeek'] = true;
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Promotion message
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Promotion message
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * Promotion button text
     *
     * @return string
     */
    public function getButtonText(): string
    {
        return $this->buttonText;
    }
    /**
     * Promotion button text
     *
     * @param string $buttonText
     *
     * @return self
     */
    public function setButtonText(string $buttonText): self
    {
        $this->initialized['buttonText'] = true;
        $this->buttonText = $buttonText;
        return $this;
    }
    /**
     * Promotion Language Code
     *
     * @return string
     */
    public function getLanguageCode1(): string
    {
        return $this->languageCode1;
    }
    /**
     * Promotion Language Code
     *
     * @param string $languageCode1
     *
     * @return self
     */
    public function setLanguageCode1(string $languageCode1): self
    {
        $this->initialized['languageCode1'] = true;
        $this->languageCode1 = $languageCode1;
        return $this;
    }
    /**
     * Promotion message
     *
     * @return string
     */
    public function getText1(): string
    {
        return $this->text1;
    }
    /**
     * Promotion message
     *
     * @param string $text1
     *
     * @return self
     */
    public function setText1(string $text1): self
    {
        $this->initialized['text1'] = true;
        $this->text1 = $text1;
        return $this;
    }
    /**
     * Promotion button text
     *
     * @return string
     */
    public function getButtonText1(): string
    {
        return $this->buttonText1;
    }
    /**
     * Promotion button text
     *
     * @param string $buttonText1
     *
     * @return self
     */
    public function setButtonText1(string $buttonText1): self
    {
        $this->initialized['buttonText1'] = true;
        $this->buttonText1 = $buttonText1;
        return $this;
    }
    /**
     * Promotion Language Code
     *
     * @return string
     */
    public function getLanguageCode2(): string
    {
        return $this->languageCode2;
    }
    /**
     * Promotion Language Code
     *
     * @param string $languageCode2
     *
     * @return self
     */
    public function setLanguageCode2(string $languageCode2): self
    {
        $this->initialized['languageCode2'] = true;
        $this->languageCode2 = $languageCode2;
        return $this;
    }
    /**
     * Promotion message
     *
     * @return string
     */
    public function getText2(): string
    {
        return $this->text2;
    }
    /**
     * Promotion message
     *
     * @param string $text2
     *
     * @return self
     */
    public function setText2(string $text2): self
    {
        $this->initialized['text2'] = true;
        $this->text2 = $text2;
        return $this;
    }
    /**
     * Promotion button text
     *
     * @return string
     */
    public function getButtonText2(): string
    {
        return $this->buttonText2;
    }
    /**
     * Promotion button text
     *
     * @param string $buttonText2
     *
     * @return self
     */
    public function setButtonText2(string $buttonText2): self
    {
        $this->initialized['buttonText2'] = true;
        $this->buttonText2 = $buttonText2;
        return $this;
    }
    /**
     * Promotion Language Code
     *
     * @return string
     */
    public function getLanguageCode3(): string
    {
        return $this->languageCode3;
    }
    /**
     * Promotion Language Code
     *
     * @param string $languageCode3
     *
     * @return self
     */
    public function setLanguageCode3(string $languageCode3): self
    {
        $this->initialized['languageCode3'] = true;
        $this->languageCode3 = $languageCode3;
        return $this;
    }
    /**
     * Promotion message
     *
     * @return string
     */
    public function getText3(): string
    {
        return $this->text3;
    }
    /**
     * Promotion message
     *
     * @param string $text3
     *
     * @return self
     */
    public function setText3(string $text3): self
    {
        $this->initialized['text3'] = true;
        $this->text3 = $text3;
        return $this;
    }
    /**
     * Promotion button text
     *
     * @return string
     */
    public function getButtonText3(): string
    {
        return $this->buttonText3;
    }
    /**
     * Promotion button text
     *
     * @param string $buttonText3
     *
     * @return self
     */
    public function setButtonText3(string $buttonText3): self
    {
        $this->initialized['buttonText3'] = true;
        $this->buttonText3 = $buttonText3;
        return $this;
    }
    /**
     * Promotion Web link
     *
     * @return string
     */
    public function getHyperlink(): string
    {
        return $this->hyperlink;
    }
    /**
     * Promotion Web link
     *
     * @param string $hyperlink
     *
     * @return self
     */
    public function setHyperlink(string $hyperlink): self
    {
        $this->initialized['hyperlink'] = true;
        $this->hyperlink = $hyperlink;
        return $this;
    }
    /**
     * Promotion created date
     *
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->created;
    }
    /**
     * Promotion created date
     *
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created): self
    {
        $this->initialized['created'] = true;
        $this->created = $created;
        return $this;
    }
}