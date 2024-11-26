<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressCreateShipmentRequestShipmentNotificationItem
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
     * Please enter channel type to send the notification by. At this moment only email is supported
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Please enter notification receiver email address
     *
     * @var string
     */
    protected $receiverId;
    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in
     *
     * @var string
     */
    protected $languageCode = 'eng';
    /**
     * Please enter two letter language country code
     *
     * @var string
     */
    protected $languageCountryCode = 'UK';
    /**
     * Please enter your message which will be added to the DHL Express notification email
     *
     * @var string
     */
    protected $bespokeMessage;
    /**
     * Please enter channel type to send the notification by. At this moment only email is supported
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * Please enter channel type to send the notification by. At this moment only email is supported
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
     * Please enter notification receiver email address
     *
     * @return string
     */
    public function getReceiverId(): string
    {
        return $this->receiverId;
    }
    /**
     * Please enter notification receiver email address
     *
     * @param string $receiverId
     *
     * @return self
     */
    public function setReceiverId(string $receiverId): self
    {
        $this->initialized['receiverId'] = true;
        $this->receiverId = $receiverId;
        return $this;
    }
    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in
     *
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
    /**
     * Please enter three letter lanuage code in which you wish to receive the notification in
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
     * Please enter two letter language country code
     *
     * @return string
     */
    public function getLanguageCountryCode(): string
    {
        return $this->languageCountryCode;
    }
    /**
     * Please enter two letter language country code
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
     * Please enter your message which will be added to the DHL Express notification email
     *
     * @return string
     */
    public function getBespokeMessage(): string
    {
        return $this->bespokeMessage;
    }
    /**
     * Please enter your message which will be added to the DHL Express notification email
     *
     * @param string $bespokeMessage
     *
     * @return self
     */
    public function setBespokeMessage(string $bespokeMessage): self
    {
        $this->initialized['bespokeMessage'] = true;
        $this->bespokeMessage = $bespokeMessage;
        return $this;
    }
}