<?php

namespace AntibodiesOnline\DHL\Api\Model;

class Partner extends \ArrayObject
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
     * ID of a partner
     *
     * @var string
     */
    protected $partnerId;
    /**
     * Name of a partner
     *
     * @var string
     */
    protected $partnerName;
    /**
     * Code of a partner
     *
     * @var string
     */
    protected $partnerTypeCode;
    /**
     * Promotion on a SVP level
     *
     * @var Promotion
     */
    protected $promotion;
    /**
     * ID of a partner
     *
     * @return string
     */
    public function getPartnerId(): string
    {
        return $this->partnerId;
    }
    /**
     * ID of a partner
     *
     * @param string $partnerId
     *
     * @return self
     */
    public function setPartnerId(string $partnerId): self
    {
        $this->initialized['partnerId'] = true;
        $this->partnerId = $partnerId;
        return $this;
    }
    /**
     * Name of a partner
     *
     * @return string
     */
    public function getPartnerName(): string
    {
        return $this->partnerName;
    }
    /**
     * Name of a partner
     *
     * @param string $partnerName
     *
     * @return self
     */
    public function setPartnerName(string $partnerName): self
    {
        $this->initialized['partnerName'] = true;
        $this->partnerName = $partnerName;
        return $this;
    }
    /**
     * Code of a partner
     *
     * @return string
     */
    public function getPartnerTypeCode(): string
    {
        return $this->partnerTypeCode;
    }
    /**
     * Code of a partner
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
     * Promotion on a SVP level
     *
     * @return Promotion
     */
    public function getPromotion(): Promotion
    {
        return $this->promotion;
    }
    /**
     * Promotion on a SVP level
     *
     * @param Promotion $promotion
     *
     * @return self
     */
    public function setPromotion(Promotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
}