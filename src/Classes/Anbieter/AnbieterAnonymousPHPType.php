<?php

namespace MediaStoreNet\OpenImmo\Classes\Anbieter;

/**
 * Class representing AnbieterAnonymousPHPType
 */
class AnbieterAnonymousPHPType
{

    /**
     * @var string $anbieternr
     */
    private $anbieternr = null;

    /**
     * @var string $firma
     */
    private $firma = null;

    /**
     * @var string $openimmoAnid
     */
    private $openimmoAnid = null;

    /**
     * @var string $lizenzkennung
     */
    private $lizenzkennung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Anhang $anhang
     */
    private $anhang = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Immobilie[] $immobilie
     */
    private $immobilie = [
        
    ];

    /**
     * @var string $impressum
     */
    private $impressum = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\ImpressumStrukt $impressumStrukt
     */
    private $impressumStrukt = null;

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
     * Gets as anbieternr
     *
     * @return string
     */
    public function getAnbieternr()
    {
        return $this->anbieternr;
    }

    /**
     * Sets a new anbieternr
     *
     * @param string $anbieternr
     * @return self
     */
    public function setAnbieternr($anbieternr)
    {
        $this->anbieternr = $anbieternr;
        return $this;
    }

    /**
     * Gets as firma
     *
     * @return string
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Sets a new firma
     *
     * @param string $firma
     * @return self
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;
        return $this;
    }

    /**
     * Gets as openimmoAnid
     *
     * @return string
     */
    public function getOpenimmoAnid()
    {
        return $this->openimmoAnid;
    }

    /**
     * Sets a new openimmoAnid
     *
     * @param string $openimmoAnid
     * @return self
     */
    public function setOpenimmoAnid($openimmoAnid)
    {
        $this->openimmoAnid = $openimmoAnid;
        return $this;
    }

    /**
     * Gets as lizenzkennung
     *
     * @return string
     */
    public function getLizenzkennung()
    {
        return $this->lizenzkennung;
    }

    /**
     * Sets a new lizenzkennung
     *
     * @param string $lizenzkennung
     * @return self
     */
    public function setLizenzkennung($lizenzkennung)
    {
        $this->lizenzkennung = $lizenzkennung;
        return $this;
    }

    /**
     * Gets as anhang
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Anhang
     */
    public function getAnhang()
    {
        return $this->anhang;
    }

    /**
     * Sets a new anhang
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Anhang $anhang
     * @return self
     */
    public function setAnhang(\MediaStoreNet\OpenImmo\Classes\Anhang $anhang)
    {
        $this->anhang = $anhang;
        return $this;
    }

    /**
     * Adds as immobilie
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Immobilie $immobilie
     */
    public function addToImmobilie(\MediaStoreNet\OpenImmo\Classes\Immobilie $immobilie)
    {
        $this->immobilie[] = $immobilie;
        return $this;
    }

    /**
     * isset immobilie
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImmobilie($index)
    {
        return isset($this->immobilie[$index]);
    }

    /**
     * unset immobilie
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImmobilie($index)
    {
        unset($this->immobilie[$index]);
    }

    /**
     * Gets as immobilie
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Immobilie[]
     */
    public function getImmobilie()
    {
        return $this->immobilie;
    }

    /**
     * Sets a new immobilie
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Immobilie[] $immobilie
     * @return self
     */
    public function setImmobilie(array $immobilie)
    {
        $this->immobilie = $immobilie;
        return $this;
    }

    /**
     * Gets as impressum
     *
     * @return string
     */
    public function getImpressum()
    {
        return $this->impressum;
    }

    /**
     * Sets a new impressum
     *
     * @param string $impressum
     * @return self
     */
    public function setImpressum($impressum)
    {
        $this->impressum = $impressum;
        return $this;
    }

    /**
     * Gets as impressumStrukt
     *
     * @return \MediaStoreNet\OpenImmo\Classes\ImpressumStrukt
     */
    public function getImpressumStrukt()
    {
        return $this->impressumStrukt;
    }

    /**
     * Sets a new impressumStrukt
     *
     * @param \MediaStoreNet\OpenImmo\Classes\ImpressumStrukt $impressumStrukt
     * @return self
     */
    public function setImpressumStrukt(\MediaStoreNet\OpenImmo\Classes\ImpressumStrukt $impressumStrukt)
    {
        $this->impressumStrukt = $impressumStrukt;
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

