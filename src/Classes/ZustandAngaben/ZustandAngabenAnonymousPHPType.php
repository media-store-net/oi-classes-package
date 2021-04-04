<?php

namespace MediaStoreNet\OpenImmo\Classes\ZustandAngaben;

/**
 * Class representing ZustandAngabenAnonymousPHPType
 */
class ZustandAngabenAnonymousPHPType
{

    /**
     * @var string $baujahr
     */
    private $baujahr = null;

    /**
     * @var string $letztemodernisierung
     */
    private $letztemodernisierung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Zustand $zustand
     */
    private $zustand = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Alter $alter
     */
    private $alter = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\BebaubarNach $bebaubarNach
     */
    private $bebaubarNach = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Erschliessung $erschliessung
     */
    private $erschliessung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\ErschliessungUmfang $erschliessungUmfang
     */
    private $erschliessungUmfang = null;

    /**
     * @var string $bauzone
     */
    private $bauzone = null;

    /**
     * @var string $altlasten
     */
    private $altlasten = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Energiepass[] $energiepass
     */
    private $energiepass = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Verkaufstatus $verkaufstatus
     */
    private $verkaufstatus = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[] $userDefinedSimplefield
     */
    private $userDefinedSimplefield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[] $userDefinedAnyfield
     */
    private $userDefinedAnyfield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     */
    private $userDefinedExtend = null;

    /**
     * Gets as baujahr
     *
     * @return string
     */
    public function getBaujahr()
    {
        return $this->baujahr;
    }

    /**
     * Sets a new baujahr
     *
     * @param string $baujahr
     * @return self
     */
    public function setBaujahr($baujahr)
    {
        $this->baujahr = $baujahr;
        return $this;
    }

    /**
     * Gets as letztemodernisierung
     *
     * @return string
     */
    public function getLetztemodernisierung()
    {
        return $this->letztemodernisierung;
    }

    /**
     * Sets a new letztemodernisierung
     *
     * @param string $letztemodernisierung
     * @return self
     */
    public function setLetztemodernisierung($letztemodernisierung)
    {
        $this->letztemodernisierung = $letztemodernisierung;
        return $this;
    }

    /**
     * Gets as zustand
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Zustand
     */
    public function getZustand()
    {
        return $this->zustand;
    }

    /**
     * Sets a new zustand
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Zustand $zustand
     * @return self
     */
    public function setZustand(\MediaStoreNet\OpenImmo\Classes\Zustand $zustand)
    {
        $this->zustand = $zustand;
        return $this;
    }

    /**
     * Gets as alter
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Alter
     */
    public function getAlter()
    {
        return $this->alter;
    }

    /**
     * Sets a new alter
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Alter $alter
     * @return self
     */
    public function setAlter(\MediaStoreNet\OpenImmo\Classes\Alter $alter)
    {
        $this->alter = $alter;
        return $this;
    }

    /**
     * Gets as bebaubarNach
     *
     * @return \MediaStoreNet\OpenImmo\Classes\BebaubarNach
     */
    public function getBebaubarNach()
    {
        return $this->bebaubarNach;
    }

    /**
     * Sets a new bebaubarNach
     *
     * @param \MediaStoreNet\OpenImmo\Classes\BebaubarNach $bebaubarNach
     * @return self
     */
    public function setBebaubarNach(\MediaStoreNet\OpenImmo\Classes\BebaubarNach $bebaubarNach)
    {
        $this->bebaubarNach = $bebaubarNach;
        return $this;
    }

    /**
     * Gets as erschliessung
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Erschliessung
     */
    public function getErschliessung()
    {
        return $this->erschliessung;
    }

    /**
     * Sets a new erschliessung
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Erschliessung $erschliessung
     * @return self
     */
    public function setErschliessung(\MediaStoreNet\OpenImmo\Classes\Erschliessung $erschliessung)
    {
        $this->erschliessung = $erschliessung;
        return $this;
    }

    /**
     * Gets as erschliessungUmfang
     *
     * @return \MediaStoreNet\OpenImmo\Classes\ErschliessungUmfang
     */
    public function getErschliessungUmfang()
    {
        return $this->erschliessungUmfang;
    }

    /**
     * Sets a new erschliessungUmfang
     *
     * @param \MediaStoreNet\OpenImmo\Classes\ErschliessungUmfang $erschliessungUmfang
     * @return self
     */
    public function setErschliessungUmfang(\MediaStoreNet\OpenImmo\Classes\ErschliessungUmfang $erschliessungUmfang)
    {
        $this->erschliessungUmfang = $erschliessungUmfang;
        return $this;
    }

    /**
     * Gets as bauzone
     *
     * @return string
     */
    public function getBauzone()
    {
        return $this->bauzone;
    }

    /**
     * Sets a new bauzone
     *
     * @param string $bauzone
     * @return self
     */
    public function setBauzone($bauzone)
    {
        $this->bauzone = $bauzone;
        return $this;
    }

    /**
     * Gets as altlasten
     *
     * @return string
     */
    public function getAltlasten()
    {
        return $this->altlasten;
    }

    /**
     * Sets a new altlasten
     *
     * @param string $altlasten
     * @return self
     */
    public function setAltlasten($altlasten)
    {
        $this->altlasten = $altlasten;
        return $this;
    }

    /**
     * Adds as energiepass
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Energiepass $energiepass
     */
    public function addToEnergiepass(\MediaStoreNet\OpenImmo\Classes\Energiepass $energiepass)
    {
        $this->energiepass[] = $energiepass;
        return $this;
    }

    /**
     * isset energiepass
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnergiepass($index)
    {
        return isset($this->energiepass[$index]);
    }

    /**
     * unset energiepass
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnergiepass($index)
    {
        unset($this->energiepass[$index]);
    }

    /**
     * Gets as energiepass
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Energiepass[]
     */
    public function getEnergiepass()
    {
        return $this->energiepass;
    }

    /**
     * Sets a new energiepass
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Energiepass[] $energiepass
     * @return self
     */
    public function setEnergiepass(array $energiepass)
    {
        $this->energiepass = $energiepass;
        return $this;
    }

    /**
     * Gets as verkaufstatus
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Verkaufstatus
     */
    public function getVerkaufstatus()
    {
        return $this->verkaufstatus;
    }

    /**
     * Sets a new verkaufstatus
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Verkaufstatus $verkaufstatus
     * @return self
     */
    public function setVerkaufstatus(\MediaStoreNet\OpenImmo\Classes\Verkaufstatus $verkaufstatus)
    {
        $this->verkaufstatus = $verkaufstatus;
        return $this;
    }

    /**
     * Adds as userDefinedSimplefield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield $userDefinedSimplefield
     */
    public function addToUserDefinedSimplefield(\MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield[] = $userDefinedSimplefield;
        return $this;
    }

    /**
     * isset userDefinedSimplefield
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedSimplefield($index)
    {
        return isset($this->userDefinedSimplefield[$index]);
    }

    /**
     * unset userDefinedSimplefield
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedSimplefield($index)
    {
        unset($this->userDefinedSimplefield[$index]);
    }

    /**
     * Gets as userDefinedSimplefield
     *
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[]
     */
    public function getUserDefinedSimplefield()
    {
        return $this->userDefinedSimplefield;
    }

    /**
     * Sets a new userDefinedSimplefield
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[] $userDefinedSimplefield
     * @return self
     */
    public function setUserDefinedSimplefield(array $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Adds as userDefinedAnyfield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield $userDefinedAnyfield
     */
    public function addToUserDefinedAnyfield(\MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield[] = $userDefinedAnyfield;
        return $this;
    }

    /**
     * isset userDefinedAnyfield
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedAnyfield($index)
    {
        return isset($this->userDefinedAnyfield[$index]);
    }

    /**
     * unset userDefinedAnyfield
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedAnyfield($index)
    {
        unset($this->userDefinedAnyfield[$index]);
    }

    /**
     * Gets as userDefinedAnyfield
     *
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[]
     */
    public function getUserDefinedAnyfield()
    {
        return $this->userDefinedAnyfield;
    }

    /**
     * Sets a new userDefinedAnyfield
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[] $userDefinedAnyfield
     * @return self
     */
    public function setUserDefinedAnyfield(array $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Adds as feld
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToUserDefinedExtend(\MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld)
    {
        $this->userDefinedExtend[] = $feld;
        return $this;
    }

    /**
     * isset userDefinedExtend
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedExtend($index)
    {
        return isset($this->userDefinedExtend[$index]);
    }

    /**
     * unset userDefinedExtend
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedExtend($index)
    {
        unset($this->userDefinedExtend[$index]);
    }

    /**
     * Gets as userDefinedExtend
     *
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getUserDefinedExtend()
    {
        return $this->userDefinedExtend;
    }

    /**
     * Sets a new userDefinedExtend
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     * @return self
     */
    public function setUserDefinedExtend(array $userDefinedExtend)
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }


}

