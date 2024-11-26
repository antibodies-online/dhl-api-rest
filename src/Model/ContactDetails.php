<?php

namespace AntibodiesOnline\DHL\Api\Model;

class ContactDetails extends \ArrayObject
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
     * Phone number of the Service Point
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * E-Mail address of the Service Point
     *
     * @var string
     */
    protected $email;
    /**
     * Link to website of the Service Point
     *
     * @var string
     */
    protected $linkUri;
    /**
     * Service Point ID
     *
     * @var string
     */
    protected $servicePointId;
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @var string
     */
    protected $html;
    /**
     * Phone number of the Service Point
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Phone number of the Service Point
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * E-Mail address of the Service Point
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * E-Mail address of the Service Point
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
     * Link to website of the Service Point
     *
     * @return string
     */
    public function getLinkUri(): string
    {
        return $this->linkUri;
    }
    /**
     * Link to website of the Service Point
     *
     * @param string $linkUri
     *
     * @return self
     */
    public function setLinkUri(string $linkUri): self
    {
        $this->initialized['linkUri'] = true;
        $this->linkUri = $linkUri;
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
     * Obsolete. This is planned to be removed in future releases.
     *
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }
    /**
     * Obsolete. This is planned to be removed in future releases.
     *
     * @param string $html
     *
     * @return self
     */
    public function setHtml(string $html): self
    {
        $this->initialized['html'] = true;
        $this->html = $html;
        return $this;
    }
}