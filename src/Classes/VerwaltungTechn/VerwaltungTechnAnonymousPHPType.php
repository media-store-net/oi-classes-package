<?php

namespace MediaStoreNet\OpenImmo\Classes\VerwaltungTechn;

/**
 * Class representing VerwaltungTechnAnonymousPHPType
 */
class VerwaltungTechnAnonymousPHPType
{

    /**
     * @var string $objektnrIntern
     */
    private $objektnrIntern = null;

    /**
     * @var string $objektnrExtern
     */
    private $objektnrExtern = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Aktion $aktion
     */
    private $aktion = null;

    /**
     * @var \DateTime $aktivVon
     */
    private $aktivVon = null;

    /**
     * @var \DateTime $aktivBis
     */
    private $aktivBis = null;

    /**
     * @var string $openimmoObid
     */
    private $openimmoObid = null;

    /**
     * @var string $kennungUrsprung
     */
    private $kennungUrsprung = null;

    /**
     * @var \DateTime $standVom
     */
    private $standVom = null;

    /**
     * @var bool $weitergabeGenerell
     */
    private $weitergabeGenerell = null;

    /**
     * @var string $weitergabePositiv
     */
    private $weitergabePositiv = null;

    /**
     * @var string $weitergabeNegativ
     */
    private $weitergabeNegativ = null;

    /**
     * @var string $gruppenKennung
     */
    private $gruppenKennung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Master $master
     */
    private $master = null;

    /**
     * @var string $sprache
     */
    private $sprache = null;

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
     * Gets as objektnrIntern
     *
     * @return string
     */
    public function getObjektnrIntern()
    {
        return $this->objektnrIntern;
    }

    /**
     * Sets a new objektnrIntern
     *
     * @param string $objektnrIntern
     * @return self
     */
    public function setObjektnrIntern($objektnrIntern)
    {
        $this->objektnrIntern = $objektnrIntern;
        return $this;
    }

    /**
     * Gets as objektnrExtern
     *
     * @return string
     */
    public function getObjektnrExtern()
    {
        return $this->objektnrExtern;
    }

    /**
     * Sets a new objektnrExtern
     *
     * @param string $objektnrExtern
     * @return self
     */
    public function setObjektnrExtern($objektnrExtern)
    {
        $this->objektnrExtern = $objektnrExtern;
        return $this;
    }

    /**
     * Gets as aktion
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Aktion
     */
    public function getAktion()
    {
        return $this->aktion;
    }

    /**
     * Sets a new aktion
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Aktion $aktion
     * @return self
     */
    public function setAktion(\MediaStoreNet\OpenImmo\Classes\Aktion $aktion)
    {
        $this->aktion = $aktion;
        return $this;
    }

    /**
     * Gets as aktivVon
     *
     * @return \DateTime
     */
    public function getAktivVon()
    {
        return $this->aktivVon;
    }

    /**
     * Sets a new aktivVon
     *
     * @param \DateTime $aktivVon
     * @return self
     */
    public function setAktivVon(\DateTime $aktivVon)
    {
        $this->aktivVon = $aktivVon;
        return $this;
    }

    /**
     * Gets as aktivBis
     *
     * @return \DateTime
     */
    public function getAktivBis()
    {
        return $this->aktivBis;
    }

    /**
     * Sets a new aktivBis
     *
     * @param \DateTime $aktivBis
     * @return self
     */
    public function setAktivBis(\DateTime $aktivBis)
    {
        $this->aktivBis = $aktivBis;
        return $this;
    }

    /**
     * Gets as openimmoObid
     *
     * @return string
     */
    public function getOpenimmoObid()
    {
        return $this->openimmoObid;
    }

    /**
     * Sets a new openimmoObid
     *
     * @param string $openimmoObid
     * @return self
     */
    public function setOpenimmoObid($openimmoObid)
    {
        $this->openimmoObid = $openimmoObid;
        return $this;
    }

    /**
     * Gets as kennungUrsprung
     *
     * @return string
     */
    public function getKennungUrsprung()
    {
        return $this->kennungUrsprung;
    }

    /**
     * Sets a new kennungUrsprung
     *
     * @param string $kennungUrsprung
     * @return self
     */
    public function setKennungUrsprung($kennungUrsprung)
    {
        $this->kennungUrsprung = $kennungUrsprung;
        return $this;
    }

    /**
     * Gets as standVom
     *
     * @return \DateTime
     */
    public function getStandVom()
    {
        return $this->standVom;
    }

    /**
     * Sets a new standVom
     *
     * @param \DateTime $standVom
     * @return self
     */
    public function setStandVom(\DateTime $standVom)
    {
        $this->standVom = $standVom;
        return $this;
    }

    /**
     * Gets as weitergabeGenerell
     *
     * @return bool
     */
    public function getWeitergabeGenerell()
    {
        return $this->weitergabeGenerell;
    }

    /**
     * Sets a new weitergabeGenerell
     *
     * @param bool $weitergabeGenerell
     * @return self
     */
    public function setWeitergabeGenerell($weitergabeGenerell)
    {
        $this->weitergabeGenerell = $weitergabeGenerell;
        return $this;
    }

    /**
     * Gets as weitergabePositiv
     *
     * @return string
     */
    public function getWeitergabePositiv()
    {
        return $this->weitergabePositiv;
    }

    /**
     * Sets a new weitergabePositiv
     *
     * @param string $weitergabePositiv
     * @return self
     */
    public function setWeitergabePositiv($weitergabePositiv)
    {
        $this->weitergabePositiv = $weitergabePositiv;
        return $this;
    }

    /**
     * Gets as weitergabeNegativ
     *
     * @return string
     */
    public function getWeitergabeNegativ()
    {
        return $this->weitergabeNegativ;
    }

    /**
     * Sets a new weitergabeNegativ
     *
     * @param string $weitergabeNegativ
     * @return self
     */
    public function setWeitergabeNegativ($weitergabeNegativ)
    {
        $this->weitergabeNegativ = $weitergabeNegativ;
        return $this;
    }

    /**
     * Gets as gruppenKennung
     *
     * @return string
     */
    public function getGruppenKennung()
    {
        return $this->gruppenKennung;
    }

    /**
     * Sets a new gruppenKennung
     *
     * @param string $gruppenKennung
     * @return self
     */
    public function setGruppenKennung($gruppenKennung)
    {
        $this->gruppenKennung = $gruppenKennung;
        return $this;
    }

    /**
     * Gets as master
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Master
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Sets a new master
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Master $master
     * @return self
     */
    public function setMaster(\MediaStoreNet\OpenImmo\Classes\Master $master)
    {
        $this->master = $master;
        return $this;
    }

    /**
     * Gets as sprache
     *
     * @return string
     */
    public function getSprache()
    {
        return $this->sprache;
    }

    /**
     * Sets a new sprache
     *
     * @param string $sprache
     * @return self
     */
    public function setSprache($sprache)
    {
        $this->sprache = $sprache;
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

