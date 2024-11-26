<?php

namespace AntibodiesOnline\DHL\Api\Model;

class CapacityStatus extends \ArrayObject
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
     * Severity code
     *
     * @var string
     */
    protected $sev;
    /**
     * SCMS
     *
     * @var string
     */
    protected $msgClg;
    /**
     * SCMS Status code
     *
     * @var string
     */
    protected $msgCIgd;
    /**
     * SCMS Description of status code
     *
     * @var string
     */
    protected $dsc;
    /**
     * SCMS detailed description
     *
     * @var string
     */
    protected $dtlDsc;
    /**
     * Severity code
     *
     * @return string
     */
    public function getSev(): string
    {
        return $this->sev;
    }
    /**
     * Severity code
     *
     * @param string $sev
     *
     * @return self
     */
    public function setSev(string $sev): self
    {
        $this->initialized['sev'] = true;
        $this->sev = $sev;
        return $this;
    }
    /**
     * SCMS
     *
     * @return string
     */
    public function getMsgClg(): string
    {
        return $this->msgClg;
    }
    /**
     * SCMS
     *
     * @param string $msgClg
     *
     * @return self
     */
    public function setMsgClg(string $msgClg): self
    {
        $this->initialized['msgClg'] = true;
        $this->msgClg = $msgClg;
        return $this;
    }
    /**
     * SCMS Status code
     *
     * @return string
     */
    public function getMsgCIgd(): string
    {
        return $this->msgCIgd;
    }
    /**
     * SCMS Status code
     *
     * @param string $msgCIgd
     *
     * @return self
     */
    public function setMsgCIgd(string $msgCIgd): self
    {
        $this->initialized['msgCIgd'] = true;
        $this->msgCIgd = $msgCIgd;
        return $this;
    }
    /**
     * SCMS Description of status code
     *
     * @return string
     */
    public function getDsc(): string
    {
        return $this->dsc;
    }
    /**
     * SCMS Description of status code
     *
     * @param string $dsc
     *
     * @return self
     */
    public function setDsc(string $dsc): self
    {
        $this->initialized['dsc'] = true;
        $this->dsc = $dsc;
        return $this;
    }
    /**
     * SCMS detailed description
     *
     * @return string
     */
    public function getDtlDsc(): string
    {
        return $this->dtlDsc;
    }
    /**
     * SCMS detailed description
     *
     * @param string $dtlDsc
     *
     * @return self
     */
    public function setDtlDsc(string $dtlDsc): self
    {
        $this->initialized['dtlDsc'] = true;
        $this->dtlDsc = $dtlDsc;
        return $this;
    }
}