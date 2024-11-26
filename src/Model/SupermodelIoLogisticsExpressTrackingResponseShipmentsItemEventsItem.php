<?php

namespace AntibodiesOnline\DHL\Api\Model;

class SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItem
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
     * @var string
     */
    protected $date;
    /**
     * 
     *
     * @var string
     */
    protected $time;
    /**
     * 
     *
     * @var string
     */
    protected $gMTOffset;
    /**
     * 
     *
     * @var string
     */
    protected $typeCode;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem>
     */
    protected $serviceArea;
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.    
     *
     * @var string
     */
    protected $signedBy;
    /**
     * 
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }
    /**
     * 
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGMTOffset(): string
    {
        return $this->gMTOffset;
    }
    /**
     * 
     *
     * @param string $gMTOffset
     *
     * @return self
     */
    public function setGMTOffset(string $gMTOffset): self
    {
        $this->initialized['gMTOffset'] = true;
        $this->gMTOffset = $gMTOffset;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->typeCode;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem>
     */
    public function getServiceArea(): array
    {
        return $this->serviceArea;
    }
    /**
     * 
     *
     * @param list<SupermodelIoLogisticsExpressTrackingResponseShipmentsItemEventsItemServiceAreaItem> $serviceArea
     *
     * @return self
     */
    public function setServiceArea(array $serviceArea): self
    {
        $this->initialized['serviceArea'] = true;
        $this->serviceArea = $serviceArea;
        return $this;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.    
     *
     * @return string
     */
    public function getSignedBy(): string
    {
        return $this->signedBy;
    }
    /**
     * Note: This field may be intentionally left empty in accordance with the General Data Protection Regulation (GDPR) requirements.    
     *
     * @param string $signedBy
     *
     * @return self
     */
    public function setSignedBy(string $signedBy): self
    {
        $this->initialized['signedBy'] = true;
        $this->signedBy = $signedBy;
        return $this;
    }
}