<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Language extends \ArrayObject
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
     * Language Code
     *
     * @var string
     */
    protected $languageCode;
    /**
     * Language Script Code
     *
     * @var string
     */
    protected $languageScriptCode;
    /**
     * Language Country Code
     *
     * @var string
     */
    protected $languageCountryCode;
    /**
     * Language Valid
     *
     * @var bool
     */
    protected $languageOk;
    /**
     * Language Code
     *
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
    /**
     * Language Code
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
     * Language Script Code
     *
     * @return string
     */
    public function getLanguageScriptCode(): string
    {
        return $this->languageScriptCode;
    }
    /**
     * Language Script Code
     *
     * @param string $languageScriptCode
     *
     * @return self
     */
    public function setLanguageScriptCode(string $languageScriptCode): self
    {
        $this->initialized['languageScriptCode'] = true;
        $this->languageScriptCode = $languageScriptCode;
        return $this;
    }
    /**
     * Language Country Code
     *
     * @return string
     */
    public function getLanguageCountryCode(): string
    {
        return $this->languageCountryCode;
    }
    /**
     * Language Country Code
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
     * Language Valid
     *
     * @return bool
     */
    public function getLanguageOk(): bool
    {
        return $this->languageOk;
    }
    /**
     * Language Valid
     *
     * @param bool $languageOk
     *
     * @return self
     */
    public function setLanguageOk(bool $languageOk): self
    {
        $this->initialized['languageOk'] = true;
        $this->languageOk = $languageOk;
        return $this;
    }
}