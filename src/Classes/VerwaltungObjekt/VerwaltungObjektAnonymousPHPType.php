<?php

namespace MediaStoreNet\OpenImmo\Classes\VerwaltungObjekt;

/**
 * Class representing VerwaltungObjektAnonymousPHPType
 */
class VerwaltungObjektAnonymousPHPType
{

    /**
     * @var bool $objektadresseFreigeben
     */
    private $objektadresseFreigeben = null;

    /**
     * @var string $verfuegbarAb
     */
    private $verfuegbarAb = null;

    /**
     * @var \DateTime $abdatum
     */
    private $abdatum = null;

    /**
     * @var \DateTime $bisdatum
     */
    private $bisdatum = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\MinMietdauer $minMietdauer
     */
    private $minMietdauer = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\MaxMietdauer $maxMietdauer
     */
    private $maxMietdauer = null;

    /**
     * @var \DateTime $versteigerungstermin
     */
    private $versteigerungstermin = null;

    /**
     * @var bool $wbsSozialwohnung
     */
    private $wbsSozialwohnung = null;

    /**
     * @var bool $vermietet
     */
    private $vermietet = null;

    /**
     * @var string $gruppennummer
     */
    private $gruppennummer = null;

    /**
     * @var string $zugang
     */
    private $zugang = null;

    /**
     * @var float $laufzeit
     */
    private $laufzeit = null;

    /**
     * @var int $maxPersonen
     */
    private $maxPersonen = null;

    /**
     * @var bool $nichtraucher
     */
    private $nichtraucher = null;

    /**
     * @var bool $haustiere
     */
    private $haustiere = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Geschlecht $geschlecht
     */
    private $geschlecht = null;

    /**
     * @var bool $denkmalgeschuetzt
     */
    private $denkmalgeschuetzt = null;

    /**
     * @var bool $alsFerien
     */
    private $alsFerien = null;

    /**
     * @var bool $gewerblicheNutzung
     */
    private $gewerblicheNutzung = null;

    /**
     * @var string $branchen
     */
    private $branchen = null;

    /**
     * @var bool $hochhaus
     */
    private $hochhaus = null;

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
     * Gets as objektadresseFreigeben
     *
     * @return bool
     */
    public function getObjektadresseFreigeben()
    {
        return $this->objektadresseFreigeben;
    }

    /**
     * Sets a new objektadresseFreigeben
     *
     * @param bool $objektadresseFreigeben
     * @return self
     */
    public function setObjektadresseFreigeben($objektadresseFreigeben)
    {
        $this->objektadresseFreigeben = $objektadresseFreigeben;
        return $this;
    }

    /**
     * Gets as verfuegbarAb
     *
     * @return string
     */
    public function getVerfuegbarAb()
    {
        return $this->verfuegbarAb;
    }

    /**
     * Sets a new verfuegbarAb
     *
     * @param string $verfuegbarAb
     * @return self
     */
    public function setVerfuegbarAb($verfuegbarAb)
    {
        $this->verfuegbarAb = $verfuegbarAb;
        return $this;
    }

    /**
     * Gets as abdatum
     *
     * @return \DateTime
     */
    public function getAbdatum()
    {
        return $this->abdatum;
    }

    /**
     * Sets a new abdatum
     *
     * @param \DateTime $abdatum
     * @return self
     */
    public function setAbdatum(\DateTime $abdatum)
    {
        $this->abdatum = $abdatum;
        return $this;
    }

    /**
     * Gets as bisdatum
     *
     * @return \DateTime
     */
    public function getBisdatum()
    {
        return $this->bisdatum;
    }

    /**
     * Sets a new bisdatum
     *
     * @param \DateTime $bisdatum
     * @return self
     */
    public function setBisdatum(\DateTime $bisdatum)
    {
        $this->bisdatum = $bisdatum;
        return $this;
    }

    /**
     * Gets as minMietdauer
     *
     * @return \MediaStoreNet\OpenImmo\Classes\MinMietdauer
     */
    public function getMinMietdauer()
    {
        return $this->minMietdauer;
    }

    /**
     * Sets a new minMietdauer
     *
     * @param \MediaStoreNet\OpenImmo\Classes\MinMietdauer $minMietdauer
     * @return self
     */
    public function setMinMietdauer(\MediaStoreNet\OpenImmo\Classes\MinMietdauer $minMietdauer)
    {
        $this->minMietdauer = $minMietdauer;
        return $this;
    }

    /**
     * Gets as maxMietdauer
     *
     * @return \MediaStoreNet\OpenImmo\Classes\MaxMietdauer
     */
    public function getMaxMietdauer()
    {
        return $this->maxMietdauer;
    }

    /**
     * Sets a new maxMietdauer
     *
     * @param \MediaStoreNet\OpenImmo\Classes\MaxMietdauer $maxMietdauer
     * @return self
     */
    public function setMaxMietdauer(\MediaStoreNet\OpenImmo\Classes\MaxMietdauer $maxMietdauer)
    {
        $this->maxMietdauer = $maxMietdauer;
        return $this;
    }

    /**
     * Gets as versteigerungstermin
     *
     * @return \DateTime
     */
    public function getVersteigerungstermin()
    {
        return $this->versteigerungstermin;
    }

    /**
     * Sets a new versteigerungstermin
     *
     * @param \DateTime $versteigerungstermin
     * @return self
     */
    public function setVersteigerungstermin(\DateTime $versteigerungstermin)
    {
        $this->versteigerungstermin = $versteigerungstermin;
        return $this;
    }

    /**
     * Gets as wbsSozialwohnung
     *
     * @return bool
     */
    public function getWbsSozialwohnung()
    {
        return $this->wbsSozialwohnung;
    }

    /**
     * Sets a new wbsSozialwohnung
     *
     * @param bool $wbsSozialwohnung
     * @return self
     */
    public function setWbsSozialwohnung($wbsSozialwohnung)
    {
        $this->wbsSozialwohnung = $wbsSozialwohnung;
        return $this;
    }

    /**
     * Gets as vermietet
     *
     * @return bool
     */
    public function getVermietet()
    {
        return $this->vermietet;
    }

    /**
     * Sets a new vermietet
     *
     * @param bool $vermietet
     * @return self
     */
    public function setVermietet($vermietet)
    {
        $this->vermietet = $vermietet;
        return $this;
    }

    /**
     * Gets as gruppennummer
     *
     * @return string
     */
    public function getGruppennummer()
    {
        return $this->gruppennummer;
    }

    /**
     * Sets a new gruppennummer
     *
     * @param string $gruppennummer
     * @return self
     */
    public function setGruppennummer($gruppennummer)
    {
        $this->gruppennummer = $gruppennummer;
        return $this;
    }

    /**
     * Gets as zugang
     *
     * @return string
     */
    public function getZugang()
    {
        return $this->zugang;
    }

    /**
     * Sets a new zugang
     *
     * @param string $zugang
     * @return self
     */
    public function setZugang($zugang)
    {
        $this->zugang = $zugang;
        return $this;
    }

    /**
     * Gets as laufzeit
     *
     * @return float
     */
    public function getLaufzeit()
    {
        return $this->laufzeit;
    }

    /**
     * Sets a new laufzeit
     *
     * @param float $laufzeit
     * @return self
     */
    public function setLaufzeit($laufzeit)
    {
        $this->laufzeit = $laufzeit;
        return $this;
    }

    /**
     * Gets as maxPersonen
     *
     * @return int
     */
    public function getMaxPersonen()
    {
        return $this->maxPersonen;
    }

    /**
     * Sets a new maxPersonen
     *
     * @param int $maxPersonen
     * @return self
     */
    public function setMaxPersonen($maxPersonen)
    {
        $this->maxPersonen = $maxPersonen;
        return $this;
    }

    /**
     * Gets as nichtraucher
     *
     * @return bool
     */
    public function getNichtraucher()
    {
        return $this->nichtraucher;
    }

    /**
     * Sets a new nichtraucher
     *
     * @param bool $nichtraucher
     * @return self
     */
    public function setNichtraucher($nichtraucher)
    {
        $this->nichtraucher = $nichtraucher;
        return $this;
    }

    /**
     * Gets as haustiere
     *
     * @return bool
     */
    public function getHaustiere()
    {
        return $this->haustiere;
    }

    /**
     * Sets a new haustiere
     *
     * @param bool $haustiere
     * @return self
     */
    public function setHaustiere($haustiere)
    {
        $this->haustiere = $haustiere;
        return $this;
    }

    /**
     * Gets as geschlecht
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Geschlecht
     */
    public function getGeschlecht()
    {
        return $this->geschlecht;
    }

    /**
     * Sets a new geschlecht
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Geschlecht $geschlecht
     * @return self
     */
    public function setGeschlecht(\MediaStoreNet\OpenImmo\Classes\Geschlecht $geschlecht)
    {
        $this->geschlecht = $geschlecht;
        return $this;
    }

    /**
     * Gets as denkmalgeschuetzt
     *
     * @return bool
     */
    public function getDenkmalgeschuetzt()
    {
        return $this->denkmalgeschuetzt;
    }

    /**
     * Sets a new denkmalgeschuetzt
     *
     * @param bool $denkmalgeschuetzt
     * @return self
     */
    public function setDenkmalgeschuetzt($denkmalgeschuetzt)
    {
        $this->denkmalgeschuetzt = $denkmalgeschuetzt;
        return $this;
    }

    /**
     * Gets as alsFerien
     *
     * @return bool
     */
    public function getAlsFerien()
    {
        return $this->alsFerien;
    }

    /**
     * Sets a new alsFerien
     *
     * @param bool $alsFerien
     * @return self
     */
    public function setAlsFerien($alsFerien)
    {
        $this->alsFerien = $alsFerien;
        return $this;
    }

    /**
     * Gets as gewerblicheNutzung
     *
     * @return bool
     */
    public function getGewerblicheNutzung()
    {
        return $this->gewerblicheNutzung;
    }

    /**
     * Sets a new gewerblicheNutzung
     *
     * @param bool $gewerblicheNutzung
     * @return self
     */
    public function setGewerblicheNutzung($gewerblicheNutzung)
    {
        $this->gewerblicheNutzung = $gewerblicheNutzung;
        return $this;
    }

    /**
     * Gets as branchen
     *
     * @return string
     */
    public function getBranchen()
    {
        return $this->branchen;
    }

    /**
     * Sets a new branchen
     *
     * @param string $branchen
     * @return self
     */
    public function setBranchen($branchen)
    {
        $this->branchen = $branchen;
        return $this;
    }

    /**
     * Gets as hochhaus
     *
     * @return bool
     */
    public function getHochhaus()
    {
        return $this->hochhaus;
    }

    /**
     * Sets a new hochhaus
     *
     * @param bool $hochhaus
     * @return self
     */
    public function setHochhaus($hochhaus)
    {
        $this->hochhaus = $hochhaus;
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

