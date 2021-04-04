<?php

namespace MediaStoreNet\OpenImmo\Immobilie;

/**
 * Class representing ImmobilieAnonymousPHPType
 */
class ImmobilieAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Objektkategorie $objektkategorie
     */
    private $objektkategorie = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Geo $geo
     */
    private $geo = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Kontaktperson $kontaktperson
     */
    private $kontaktperson = null;

    /**
     * @var \MediaStoreNet\OpenImmo\WeitereAdresse[] $weitereAdresse
     */
    private $weitereAdresse = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Preise $preise
     */
    private $preise = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Bieterverfahren $bieterverfahren
     */
    private $bieterverfahren = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Versteigerung $versteigerung
     */
    private $versteigerung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Flaechen $flaechen
     */
    private $flaechen = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Ausstattung $ausstattung
     */
    private $ausstattung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\ZustandAngaben $zustandAngaben
     */
    private $zustandAngaben = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[] $bewertung
     */
    private $bewertung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Infrastruktur $infrastruktur
     */
    private $infrastruktur = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Freitexte $freitexte
     */
    private $freitexte = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Anhaenge $anhaenge
     */
    private $anhaenge = null;

    /**
     * @var \MediaStoreNet\OpenImmo\VerwaltungObjekt $verwaltungObjekt
     */
    private $verwaltungObjekt = null;

    /**
     * @var \MediaStoreNet\OpenImmo\VerwaltungTechn $verwaltungTechn
     */
    private $verwaltungTechn = null;

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedSimplefield[] $userDefinedSimplefield
     */
    private $userDefinedSimplefield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedAnyfield[] $userDefinedAnyfield
     */
    private $userDefinedAnyfield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     */
    private $userDefinedExtend = null;

    /**
     * Gets as objektkategorie
     *
     * @return \MediaStoreNet\OpenImmo\Objektkategorie
     */
    public function getObjektkategorie()
    {
        return $this->objektkategorie;
    }

    /**
     * Sets a new objektkategorie
     *
     * @param \MediaStoreNet\OpenImmo\Objektkategorie $objektkategorie
     * @return self
     */
    public function setObjektkategorie(\MediaStoreNet\OpenImmo\Objektkategorie $objektkategorie)
    {
        $this->objektkategorie = $objektkategorie;
        return $this;
    }

    /**
     * Gets as geo
     *
     * @return \MediaStoreNet\OpenImmo\Geo
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * Sets a new geo
     *
     * @param \MediaStoreNet\OpenImmo\Geo $geo
     * @return self
     */
    public function setGeo(\MediaStoreNet\OpenImmo\Geo $geo)
    {
        $this->geo = $geo;
        return $this;
    }

    /**
     * Gets as kontaktperson
     *
     * @return \MediaStoreNet\OpenImmo\Kontaktperson
     */
    public function getKontaktperson()
    {
        return $this->kontaktperson;
    }

    /**
     * Sets a new kontaktperson
     *
     * @param \MediaStoreNet\OpenImmo\Kontaktperson $kontaktperson
     * @return self
     */
    public function setKontaktperson(\MediaStoreNet\OpenImmo\Kontaktperson $kontaktperson)
    {
        $this->kontaktperson = $kontaktperson;
        return $this;
    }

    /**
     * Adds as weitereAdresse
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\WeitereAdresse $weitereAdresse
     */
    public function addToWeitereAdresse(\MediaStoreNet\OpenImmo\WeitereAdresse $weitereAdresse)
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
     * @return \MediaStoreNet\OpenImmo\WeitereAdresse[]
     */
    public function getWeitereAdresse()
    {
        return $this->weitereAdresse;
    }

    /**
     * Sets a new weitereAdresse
     *
     * @param \MediaStoreNet\OpenImmo\WeitereAdresse[] $weitereAdresse
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
     * @return \MediaStoreNet\OpenImmo\Preise
     */
    public function getPreise()
    {
        return $this->preise;
    }

    /**
     * Sets a new preise
     *
     * @param \MediaStoreNet\OpenImmo\Preise $preise
     * @return self
     */
    public function setPreise(\MediaStoreNet\OpenImmo\Preise $preise)
    {
        $this->preise = $preise;
        return $this;
    }

    /**
     * Gets as bieterverfahren
     *
     * @return \MediaStoreNet\OpenImmo\Bieterverfahren
     */
    public function getBieterverfahren()
    {
        return $this->bieterverfahren;
    }

    /**
     * Sets a new bieterverfahren
     *
     * @param \MediaStoreNet\OpenImmo\Bieterverfahren $bieterverfahren
     * @return self
     */
    public function setBieterverfahren(\MediaStoreNet\OpenImmo\Bieterverfahren $bieterverfahren)
    {
        $this->bieterverfahren = $bieterverfahren;
        return $this;
    }

    /**
     * Gets as versteigerung
     *
     * @return \MediaStoreNet\OpenImmo\Versteigerung
     */
    public function getVersteigerung()
    {
        return $this->versteigerung;
    }

    /**
     * Sets a new versteigerung
     *
     * @param \MediaStoreNet\OpenImmo\Versteigerung $versteigerung
     * @return self
     */
    public function setVersteigerung(\MediaStoreNet\OpenImmo\Versteigerung $versteigerung)
    {
        $this->versteigerung = $versteigerung;
        return $this;
    }

    /**
     * Gets as flaechen
     *
     * @return \MediaStoreNet\OpenImmo\Flaechen
     */
    public function getFlaechen()
    {
        return $this->flaechen;
    }

    /**
     * Sets a new flaechen
     *
     * @param \MediaStoreNet\OpenImmo\Flaechen $flaechen
     * @return self
     */
    public function setFlaechen(\MediaStoreNet\OpenImmo\Flaechen $flaechen)
    {
        $this->flaechen = $flaechen;
        return $this;
    }

    /**
     * Gets as ausstattung
     *
     * @return \MediaStoreNet\OpenImmo\Ausstattung
     */
    public function getAusstattung()
    {
        return $this->ausstattung;
    }

    /**
     * Sets a new ausstattung
     *
     * @param \MediaStoreNet\OpenImmo\Ausstattung $ausstattung
     * @return self
     */
    public function setAusstattung(\MediaStoreNet\OpenImmo\Ausstattung $ausstattung)
    {
        $this->ausstattung = $ausstattung;
        return $this;
    }

    /**
     * Gets as zustandAngaben
     *
     * @return \MediaStoreNet\OpenImmo\ZustandAngaben
     */
    public function getZustandAngaben()
    {
        return $this->zustandAngaben;
    }

    /**
     * Sets a new zustandAngaben
     *
     * @param \MediaStoreNet\OpenImmo\ZustandAngaben $zustandAngaben
     * @return self
     */
    public function setZustandAngaben(\MediaStoreNet\OpenImmo\ZustandAngaben $zustandAngaben)
    {
        $this->zustandAngaben = $zustandAngaben;
        return $this;
    }

    /**
     * Adds as feld
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToBewertung(\MediaStoreNet\OpenImmo\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType $feld)
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
     * @return \MediaStoreNet\OpenImmo\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getBewertung()
    {
        return $this->bewertung;
    }

    /**
     * Sets a new bewertung
     *
     * @param \MediaStoreNet\OpenImmo\Bewertung\BewertungAnonymousPHPType\FeldAnonymousPHPType[] $bewertung
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
     * @return \MediaStoreNet\OpenImmo\Infrastruktur
     */
    public function getInfrastruktur()
    {
        return $this->infrastruktur;
    }

    /**
     * Sets a new infrastruktur
     *
     * @param \MediaStoreNet\OpenImmo\Infrastruktur $infrastruktur
     * @return self
     */
    public function setInfrastruktur(\MediaStoreNet\OpenImmo\Infrastruktur $infrastruktur)
    {
        $this->infrastruktur = $infrastruktur;
        return $this;
    }

    /**
     * Gets as freitexte
     *
     * @return \MediaStoreNet\OpenImmo\Freitexte
     */
    public function getFreitexte()
    {
        return $this->freitexte;
    }

    /**
     * Sets a new freitexte
     *
     * @param \MediaStoreNet\OpenImmo\Freitexte $freitexte
     * @return self
     */
    public function setFreitexte(\MediaStoreNet\OpenImmo\Freitexte $freitexte)
    {
        $this->freitexte = $freitexte;
        return $this;
    }

    /**
     * Gets as anhaenge
     *
     * @return \MediaStoreNet\OpenImmo\Anhaenge
     */
    public function getAnhaenge()
    {
        return $this->anhaenge;
    }

    /**
     * Sets a new anhaenge
     *
     * @param \MediaStoreNet\OpenImmo\Anhaenge $anhaenge
     * @return self
     */
    public function setAnhaenge(\MediaStoreNet\OpenImmo\Anhaenge $anhaenge)
    {
        $this->anhaenge = $anhaenge;
        return $this;
    }

    /**
     * Gets as verwaltungObjekt
     *
     * @return \MediaStoreNet\OpenImmo\VerwaltungObjekt
     */
    public function getVerwaltungObjekt()
    {
        return $this->verwaltungObjekt;
    }

    /**
     * Sets a new verwaltungObjekt
     *
     * @param \MediaStoreNet\OpenImmo\VerwaltungObjekt $verwaltungObjekt
     * @return self
     */
    public function setVerwaltungObjekt(\MediaStoreNet\OpenImmo\VerwaltungObjekt $verwaltungObjekt)
    {
        $this->verwaltungObjekt = $verwaltungObjekt;
        return $this;
    }

    /**
     * Gets as verwaltungTechn
     *
     * @return \MediaStoreNet\OpenImmo\VerwaltungTechn
     */
    public function getVerwaltungTechn()
    {
        return $this->verwaltungTechn;
    }

    /**
     * Sets a new verwaltungTechn
     *
     * @param \MediaStoreNet\OpenImmo\VerwaltungTechn $verwaltungTechn
     * @return self
     */
    public function setVerwaltungTechn(\MediaStoreNet\OpenImmo\VerwaltungTechn $verwaltungTechn)
    {
        $this->verwaltungTechn = $verwaltungTechn;
        return $this;
    }

    /**
     * Adds as userDefinedSimplefield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedSimplefield $userDefinedSimplefield
     */
    public function addToUserDefinedSimplefield(\MediaStoreNet\OpenImmo\UserDefinedSimplefield $userDefinedSimplefield)
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
     * @return \MediaStoreNet\OpenImmo\UserDefinedSimplefield[]
     */
    public function getUserDefinedSimplefield()
    {
        return $this->userDefinedSimplefield;
    }

    /**
     * Sets a new userDefinedSimplefield
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedSimplefield[] $userDefinedSimplefield
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
     * @param \MediaStoreNet\OpenImmo\UserDefinedAnyfield $userDefinedAnyfield
     */
    public function addToUserDefinedAnyfield(\MediaStoreNet\OpenImmo\UserDefinedAnyfield $userDefinedAnyfield)
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
     * @return \MediaStoreNet\OpenImmo\UserDefinedAnyfield[]
     */
    public function getUserDefinedAnyfield()
    {
        return $this->userDefinedAnyfield;
    }

    /**
     * Sets a new userDefinedAnyfield
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedAnyfield[] $userDefinedAnyfield
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
     * @param \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToUserDefinedExtend(\MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld)
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
     * @return \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getUserDefinedExtend()
    {
        return $this->userDefinedExtend;
    }

    /**
     * Sets a new userDefinedExtend
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     * @return self
     */
    public function setUserDefinedExtend(array $userDefinedExtend)
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }


}

