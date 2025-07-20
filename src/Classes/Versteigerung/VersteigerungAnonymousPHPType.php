<?php

namespace MediaStoreNet\OpenImmo\Classes\Versteigerung;

/**
 * Class representing VersteigerungAnonymousPHPType
 */
class VersteigerungAnonymousPHPType
{

    /**
     * @var bool $zwangsversteigerung
     */
    private $zwangsversteigerung = null;

    /**
     * @var string $aktenzeichen
     */
    private $aktenzeichen = null;

    /**
     * @var \DateTime $zvtermin
     */
    private $zvtermin = null;

    /**
     * @var \DateTime $zusatztermin
     */
    private $zusatztermin = null;

    /**
     * @var string $amtsgericht
     */
    private $amtsgericht = null;

    /**
     * @var float $verkehrswert
     */
    private $verkehrswert = null;

    /**
     * Gets as zwangsversteigerung
     *
     * @return bool
     */
    public function getZwangsversteigerung()
    {
        return $this->zwangsversteigerung;
    }

    /**
     * Sets a new zwangsversteigerung
     *
     * @param bool $zwangsversteigerung
     * @return self
     */
    public function setZwangsversteigerung($zwangsversteigerung)
    {
        $this->zwangsversteigerung = $zwangsversteigerung;
        return $this;
    }

    /**
     * Gets as aktenzeichen
     *
     * @return string
     */
    public function getAktenzeichen()
    {
        return $this->aktenzeichen;
    }

    /**
     * Sets a new aktenzeichen
     *
     * @param string $aktenzeichen
     * @return self
     */
    public function setAktenzeichen($aktenzeichen)
    {
        $this->aktenzeichen = $aktenzeichen;
        return $this;
    }

    /**
     * Gets as zvtermin
     *
     * @return \DateTime
     */
    public function getZvtermin()
    {
        return $this->zvtermin;
    }

    /**
     * Sets a new zvtermin
     *
     * @param \DateTime $zvtermin
     * @return self
     */
    public function setZvtermin(\DateTime $zvtermin)
    {
        $this->zvtermin = $zvtermin;
        return $this;
    }

    /**
     * Gets as zusatztermin
     *
     * @return \DateTime
     */
    public function getZusatztermin()
    {
        return $this->zusatztermin;
    }

    /**
     * Sets a new zusatztermin
     *
     * @param \DateTime $zusatztermin
     * @return self
     */
    public function setZusatztermin(\DateTime $zusatztermin)
    {
        $this->zusatztermin = $zusatztermin;
        return $this;
    }

    /**
     * Gets as amtsgericht
     *
     * @return string
     */
    public function getAmtsgericht()
    {
        return $this->amtsgericht;
    }

    /**
     * Sets a new amtsgericht
     *
     * @param string $amtsgericht
     * @return self
     */
    public function setAmtsgericht($amtsgericht)
    {
        $this->amtsgericht = $amtsgericht;
        return $this;
    }

    /**
     * Gets as verkehrswert
     *
     * @return float
     */
    public function getVerkehrswert()
    {
        return $this->verkehrswert;
    }

    /**
     * Sets a new verkehrswert
     *
     * @param float $verkehrswert
     * @return self
     */
    public function setVerkehrswert($verkehrswert)
    {
        $this->verkehrswert = $verkehrswert;
        return $this;
    }


}

