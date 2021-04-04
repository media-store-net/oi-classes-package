<?php

namespace MediaStoreNet\OpenImmo\Classes\Immobilie;

/**
 * Class representing ImmobilieAnonymousPHPType
 */
class ImmobilieAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Objektkategorie $objektkategorie
     */
    private $objektkategorie = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Geo $geo
     */
    private $geo = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Kontaktperson $kontaktperson
     */
    private $kontaktperson = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\WeitereAdresse[] $weitereAdresse
     */
    private $weitereAdresse = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Preise $preise
     */
    private $preise = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Bieterverfahren $bieterverfahren
     */
    private $bieterverfahren = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Versteigerung $versteigerung
     */
    private $versteigerung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Flaechen $flaechen
     */
    private $flaechen = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Ausstattung $ausstattung
     */
    private $ausstattung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\ZustandAngaben $zustandAngaben
     */
    private $zustandAngaben = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[] $bewertung
     */
    private $bewertung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Infrastruktur $infrastruktur
     */
    private $infrastruktur = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Freitexte $freitexte
     */
    private $freitexte = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Anhaenge $anhaenge
     */
    private $anhaenge = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\VerwaltungObjekt $verwaltungObjekt
     */
    private $verwaltungObjekt = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\VerwaltungTechn $verwaltungTechn
     */
    private $verwaltungTechn = null;

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
     * Gets as objektkategorie
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Objektkategorie
     */
    public function getObjektkategorie()
    {
        return $this->objektkategorie;
    }

    /**
     * Sets a new objektkategorie
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Objektkategorie $objektkategorie
     * @return self
     */
    public function setObjektkategorie(\MediaStoreNet\OpenImmo\Classes\Objektkategorie $objektkategorie)
    {
        $this->objektkategorie = $objektkategorie;
        return $this;
    }

    /**
     * Gets as geo
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Geo
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * Sets a new geo
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Geo $geo
     * @return self
     */
    public function setGeo(\MediaStoreNet\OpenImmo\Classes\Geo $geo)
    {
        $this->geo = $geo;
        return $this;
    }

    /**
     * Gets as kontaktperson
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Kontaktperson
     */
    public function getKontaktperson()
    {
        return $this->kontaktperson;
    }

    /**
     * Sets a new kontaktperson
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Kontaktperson $kontaktperson
     * @return self
     */
    public function setKontaktperson(\MediaStoreNet\OpenImmo\Classes\Kontaktperson $kontaktperson)
    {
        $this->kontaktperson = $kontaktperson;
        return $this;
    }

    /**
     * Adds as weitereAdresse
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\WeitereAdresse $weitereAdresse
     */
    public function addToWeitereAdresse(\MediaStoreNet\OpenImmo\Classes\WeitereAdresse $weitereAdresse)
    {
        $this->weitereAdresse[] = $weitereAdresse;
        return $this;
    }

    /**
     * isset weitereAdresse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWeitereAdresse($index)
    {
        return isset($this->weitereAdresse[$index]);
    }

    /**
     * unset weitereAdresse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWeitereAdresse($index)
    {
        unset($this->weitereAdresse[$index]);
    }

    /**
     * Gets as weitereAdresse
     *
     * @return \MediaStoreNet\OpenImmo\Classes\WeitereAdresse[]
     */
    public function getWeitereAdresse()
    {
        return $this->weitereAdresse;
    }

    /**
     * Sets a new weitereAdresse
     *
     * @param \MediaStoreNet\OpenImmo\Classes\WeitereAdresse[] $weitereAdresse
     * @return self
     */
    public function setWeitereAdresse(array $weitereAdresse)
    {
        $this->weitereAdresse = $weitereAdresse;
        return $this;
    }

    /**
     * Gets as preise
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Preise
     */
    public function getPreise()
    {
        return $this->preise;
    }

    /**
     * Sets a new preise
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Preise $preise
     * @return self
     */
    public function setPreise(\MediaStoreNet\OpenImmo\Classes\Preise $preise)
    {
        $this->preise = $preise;
        return $this;
    }

    /**
     * Gets as bieterverfahren
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Bieterverfahren
     */
    public function getBieterverfahren()
    {
        return $this->bieterverfahren;
    }

    /**
     * Sets a new bieterverfahren
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Bieterverfahren $bieterverfahren
     * @return self
     */
    public function setBieterverfahren(\MediaStoreNet\OpenImmo\Classes\Bieterverfahren $bieterverfahren)
    {
        $this->bieterverfahren = $bieterverfahren;
        return $this;
    }

    /**
     * Gets as versteigerung
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Versteigerung
     */
    public function getVersteigerung()
    {
        return $this->versteigerung;
    }

    /**
     * Sets a new versteigerung
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Versteigerung $versteigerung
     * @return self
     */
    public function setVersteigerung(\MediaStoreNet\OpenImmo\Classes\Versteigerung $versteigerung)
    {
        $this->versteigerung = $versteigerung;
        return $this;
    }

    /**
     * Gets as flaechen
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Flaechen
     */
    public function getFlaechen()
    {
        return $this->flaechen;
    }

    /**
     * Sets a new flaechen
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Flaechen $flaechen
     * @return self
     */
    public function setFlaechen(\MediaStoreNet\OpenImmo\Classes\Flaechen $flaechen)
    {
        $this->flaechen = $flaechen;
        return $this;
    }

    /**
     * Gets as ausstattung
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Ausstattung
     */
    public function getAusstattung()
    {
        return $this->ausstattung;
    }

    /**
     * Sets a new ausstattung
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Ausstattung $ausstattung
     * @return self
     */
    public function setAusstattung(\MediaStoreNet\OpenImmo\Classes\Ausstattung $ausstattung)
    {
        $this->ausstattung = $ausstattung;
        return $this;
    }

    /**
     * Gets as zustandAngaben
     *
     * @return \MediaStoreNet\OpenImmo\Classes\ZustandAngaben
     */
    public function getZustandAngaben()
    {
        return $this->zustandAngaben;
    }

    /**
     * Sets a new zustandAngaben
     *
     * @param \MediaStoreNet\OpenImmo\Classes\ZustandAngaben $zustandAngaben
     * @return self
     */
    public function setZustandAngaben(\MediaStoreNet\OpenImmo\Classes\ZustandAngaben $zustandAngaben)
    {
        $this->zustandAngaben = $zustandAngaben;
        return $this;
    }

    /**
     * Adds as feld
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToBewertung(\MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType $feld)
    {
        $this->bewertung[] = $feld;
        return $this;
    }

    /**
     * isset bewertung
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBewertung($index)
    {
        return isset($this->bewertung[$index]);
    }

    /**
     * unset bewertung
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBewertung($index)
    {
        unset($this->bewertung[$index]);
    }

    /**
     * Gets as bewertung
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getBewertung()
    {
        return $this->bewertung;
    }

    /**
     * Sets a new bewertung
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[] $bewertung
     * @return self
     */
    public function setBewertung(array $bewertung)
    {
        $this->bewertung = $bewertung;
        return $this;
    }

    /**
     * Gets as infrastruktur
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Infrastruktur
     */
    public function getInfrastruktur()
    {
        return $this->infrastruktur;
    }

    /**
     * Sets a new infrastruktur
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Infrastruktur $infrastruktur
     * @return self
     */
    public function setInfrastruktur(\MediaStoreNet\OpenImmo\Classes\Infrastruktur $infrastruktur)
    {
        $this->infrastruktur = $infrastruktur;
        return $this;
    }

    /**
     * Gets as freitexte
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Freitexte
     */
    public function getFreitexte()
    {
        return $this->freitexte;
    }

    /**
     * Sets a new freitexte
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Freitexte $freitexte
     * @return self
     */
    public function setFreitexte(\MediaStoreNet\OpenImmo\Classes\Freitexte $freitexte)
    {
        $this->freitexte = $freitexte;
        return $this;
    }

    /**
     * Gets as anhaenge
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Anhaenge
     */
    public function getAnhaenge()
    {
        return $this->anhaenge;
    }

    /**
     * Sets a new anhaenge
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Anhaenge $anhaenge
     * @return self
     */
    public function setAnhaenge(\MediaStoreNet\OpenImmo\Classes\Anhaenge $anhaenge)
    {
        $this->anhaenge = $anhaenge;
        return $this;
    }

    /**
     * Gets as verwaltungObjekt
     *
     * @return \MediaStoreNet\OpenImmo\Classes\VerwaltungObjekt
     */
    public function getVerwaltungObjekt()
    {
        return $this->verwaltungObjekt;
    }

    /**
     * Sets a new verwaltungObjekt
     *
     * @param \MediaStoreNet\OpenImmo\Classes\VerwaltungObjekt $verwaltungObjekt
     * @return self
     */
    public function setVerwaltungObjekt(\MediaStoreNet\OpenImmo\Classes\VerwaltungObjekt $verwaltungObjekt)
    {
        $this->verwaltungObjekt = $verwaltungObjekt;
        return $this;
    }

    /**
     * Gets as verwaltungTechn
     *
     * @return \MediaStoreNet\OpenImmo\Classes\VerwaltungTechn
     */
    public function getVerwaltungTechn()
    {
        return $this->verwaltungTechn;
    }

    /**
     * Sets a new verwaltungTechn
     *
     * @param \MediaStoreNet\OpenImmo\Classes\VerwaltungTechn $verwaltungTechn
     * @return self
     */
    public function setVerwaltungTechn(\MediaStoreNet\OpenImmo\Classes\VerwaltungTechn $verwaltungTechn)
    {
        $this->verwaltungTechn = $verwaltungTechn;
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

