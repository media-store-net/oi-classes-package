<?php

namespace MediaStoreNet\OpenImmo\Classes\Uebertragung;

/**
 * Class representing UebertragungAnonymousPHPType
 */
class UebertragungAnonymousPHPType
{

    /**
     * @var string $art
     */
    private $art = null;

    /**
     * @var string $umfang
     */
    private $umfang = null;

    /**
     * @var string $modus
     */
    private $modus = null;

    /**
     * @var string $version
     */
    private $version = null;

    /**
     * @var string $sendersoftware
     */
    private $sendersoftware = null;

    /**
     * @var string $senderversion
     */
    private $senderversion = null;

    /**
     * @var string $technEmail
     */
    private $technEmail = null;

    /**
     * @var string $regiId
     */
    private $regiId = null;

    /**
     * @var \DateTime $timestamp
     */
    private $timestamp = null;

    /**
     * Gets as art
     *
     * @return string
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Sets a new art
     *
     * @param string $art
     * @return self
     */
    public function setArt($art)
    {
        $this->art = $art;
        return $this;
    }

    /**
     * Gets as umfang
     *
     * @return string
     */
    public function getUmfang()
    {
        return $this->umfang;
    }

    /**
     * Sets a new umfang
     *
     * @param string $umfang
     * @return self
     */
    public function setUmfang($umfang)
    {
        $this->umfang = $umfang;
        return $this;
    }

    /**
     * Gets as modus
     *
     * @return string
     */
    public function getModus()
    {
        return $this->modus;
    }

    /**
     * Sets a new modus
     *
     * @param string $modus
     * @return self
     */
    public function setModus($modus)
    {
        $this->modus = $modus;
        return $this;
    }

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as sendersoftware
     *
     * @return string
     */
    public function getSendersoftware()
    {
        return $this->sendersoftware;
    }

    /**
     * Sets a new sendersoftware
     *
     * @param string $sendersoftware
     * @return self
     */
    public function setSendersoftware($sendersoftware)
    {
        $this->sendersoftware = $sendersoftware;
        return $this;
    }

    /**
     * Gets as senderversion
     *
     * @return string
     */
    public function getSenderversion()
    {
        return $this->senderversion;
    }

    /**
     * Sets a new senderversion
     *
     * @param string $senderversion
     * @return self
     */
    public function setSenderversion($senderversion)
    {
        $this->senderversion = $senderversion;
        return $this;
    }

    /**
     * Gets as technEmail
     *
     * @return string
     */
    public function getTechnEmail()
    {
        return $this->technEmail;
    }

    /**
     * Sets a new technEmail
     *
     * @param string $technEmail
     * @return self
     */
    public function setTechnEmail($technEmail)
    {
        $this->technEmail = $technEmail;
        return $this;
    }

    /**
     * Gets as regiId
     *
     * @return string
     */
    public function getRegiId()
    {
        return $this->regiId;
    }

    /**
     * Sets a new regiId
     *
     * @param string $regiId
     * @return self
     */
    public function setRegiId($regiId)
    {
        $this->regiId = $regiId;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * @param \DateTime $timestamp
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }


}

