<?php

namespace MediaStoreNet\OpenImmo\Geo;

/**
 * Class representing GeoAnonymousPHPType
 */
class GeoAnonymousPHPType
{

    /**
     * @var string $plz
     */
    private $plz = null;

    /**
     * @var string $ort
     */
    private $ort = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Geokoordinaten $geokoordinaten
     */
    private $geokoordinaten = null;

    /**
     * @var string $strasse
     */
    private $strasse = null;

    /**
     * @var string $hausnummer
     */
    private $hausnummer = null;

    /**
     * @var string $bundesland
     */
    private $bundesland = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Land $land
     */
    private $land = null;

    /**
     * @var string $gemeindecode
     */
    private $gemeindecode = null;

    /**
     * @var string $flur
     */
    private $flur = null;

    /**
     * @var string $flurstueck
     */
    private $flurstueck = null;

    /**
     * @var string $gemarkung
     */
    private $gemarkung = null;

    /**
     * @var int $etage
     */
    private $etage = null;

    /**
     * @var int $anzahlEtagen
     */
    private $anzahlEtagen = null;

    /**
     * @var \MediaStoreNet\OpenImmo\LageImBau $lageImBau
     */
    private $lageImBau = null;

    /**
     * @var string $wohnungsnr
     */
    private $wohnungsnr = null;

    /**
     * @var \MediaStoreNet\OpenImmo\LageGebiet $lageGebiet
     */
    private $lageGebiet = null;

    /**
     * @var string $regionalerZusatz
     */
    private $regionalerZusatz = null;

    /**
     * @var bool $kartenMakro
     */
    private $kartenMakro = null;

    /**
     * @var bool $kartenMikro
     */
    private $kartenMikro = null;

    /**
     * @var bool $virtuelletour
     */
    private $virtuelletour = null;

    /**
     * @var bool $luftbildern
     */
    private $luftbildern = null;

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
     * Gets as plz
     *
     * @return string
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Sets a new plz
     *
     * @param string $plz
     * @return self
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;
        return $this;
    }

    /**
     * Gets as ort
     *
     * @return string
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Sets a new ort
     *
     * @param string $ort
     * @return self
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
        return $this;
    }

    /**
     * Gets as geokoordinaten
     *
     * @return \MediaStoreNet\OpenImmo\Geokoordinaten
     */
    public function getGeokoordinaten()
    {
        return $this->geokoordinaten;
    }

    /**
     * Sets a new geokoordinaten
     *
     * @param \MediaStoreNet\OpenImmo\Geokoordinaten $geokoordinaten
     * @return self
     */
    public function setGeokoordinaten(\MediaStoreNet\OpenImmo\Geokoordinaten $geokoordinaten)
    {
        $this->geokoordinaten = $geokoordinaten;
        return $this;
    }

    /**
     * Gets as strasse
     *
     * @return string
     */
    public function getStrasse()
    {
        return $this->strasse;
    }

    /**
     * Sets a new strasse
     *
     * @param string $strasse
     * @return self
     */
    public function setStrasse($strasse)
    {
        $this->strasse = $strasse;
        return $this;
    }

    /**
     * Gets as hausnummer
     *
     * @return string
     */
    public function getHausnummer()
    {
        return $this->hausnummer;
    }

    /**
     * Sets a new hausnummer
     *
     * @param string $hausnummer
     * @return self
     */
    public function setHausnummer($hausnummer)
    {
        $this->hausnummer = $hausnummer;
        return $this;
    }

    /**
     * Gets as bundesland
     *
     * @return string
     */
    public function getBundesland()
    {
        return $this->bundesland;
    }

    /**
     * Sets a new bundesland
     *
     * @param string $bundesland
     * @return self
     */
    public function setBundesland($bundesland)
    {
        $this->bundesland = $bundesland;
        return $this;
    }

    /**
     * Gets as land
     *
     * @return \MediaStoreNet\OpenImmo\Land
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Sets a new land
     *
     * @param \MediaStoreNet\OpenImmo\Land $land
     * @return self
     */
    public function setLand(\MediaStoreNet\OpenImmo\Land $land)
    {
        $this->land = $land;
        return $this;
    }

    /**
     * Gets as gemeindecode
     *
     * @return string
     */
    public function getGemeindecode()
    {
        return $this->gemeindecode;
    }

    /**
     * Sets a new gemeindecode
     *
     * @param string $gemeindecode
     * @return self
     */
    public function setGemeindecode($gemeindecode)
    {
        $this->gemeindecode = $gemeindecode;
        return $this;
    }

    /**
     * Gets as flur
     *
     * @return string
     */
    public function getFlur()
    {
        return $this->flur;
    }

    /**
     * Sets a new flur
     *
     * @param string $flur
     * @return self
     */
    public function setFlur($flur)
    {
        $this->flur = $flur;
        return $this;
    }

    /**
     * Gets as flurstueck
     *
     * @return string
     */
    public function getFlurstueck()
    {
        return $this->flurstueck;
    }

    /**
     * Sets a new flurstueck
     *
     * @param string $flurstueck
     * @return self
     */
    public function setFlurstueck($flurstueck)
    {
        $this->flurstueck = $flurstueck;
        return $this;
    }

    /**
     * Gets as gemarkung
     *
     * @return string
     */
    public function getGemarkung()
    {
        return $this->gemarkung;
    }

    /**
     * Sets a new gemarkung
     *
     * @param string $gemarkung
     * @return self
     */
    public function setGemarkung($gemarkung)
    {
        $this->gemarkung = $gemarkung;
        return $this;
    }

    /**
     * Gets as etage
     *
     * @return int
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Sets a new etage
     *
     * @param int $etage
     * @return self
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;
        return $this;
    }

    /**
     * Gets as anzahlEtagen
     *
     * @return int
     */
    public function getAnzahlEtagen()
    {
        return $this->anzahlEtagen;
    }

    /**
     * Sets a new anzahlEtagen
     *
     * @param int $anzahlEtagen
     * @return self
     */
    public function setAnzahlEtagen($anzahlEtagen)
    {
        $this->anzahlEtagen = $anzahlEtagen;
        return $this;
    }

    /**
     * Gets as lageImBau
     *
     * @return \MediaStoreNet\OpenImmo\LageImBau
     */
    public function getLageImBau()
    {
        return $this->lageImBau;
    }

    /**
     * Sets a new lageImBau
     *
     * @param \MediaStoreNet\OpenImmo\LageImBau $lageImBau
     * @return self
     */
    public function setLageImBau(\MediaStoreNet\OpenImmo\LageImBau $lageImBau)
    {
        $this->lageImBau = $lageImBau;
        return $this;
    }

    /**
     * Gets as wohnungsnr
     *
     * @return string
     */
    public function getWohnungsnr()
    {
        return $this->wohnungsnr;
    }

    /**
     * Sets a new wohnungsnr
     *
     * @param string $wohnungsnr
     * @return self
     */
    public function setWohnungsnr($wohnungsnr)
    {
        $this->wohnungsnr = $wohnungsnr;
        return $this;
    }

    /**
     * Gets as lageGebiet
     *
     * @return \MediaStoreNet\OpenImmo\LageGebiet
     */
    public function getLageGebiet()
    {
        return $this->lageGebiet;
    }

    /**
     * Sets a new lageGebiet
     *
     * @param \MediaStoreNet\OpenImmo\LageGebiet $lageGebiet
     * @return self
     */
    public function setLageGebiet(\MediaStoreNet\OpenImmo\LageGebiet $lageGebiet)
    {
        $this->lageGebiet = $lageGebiet;
        return $this;
    }

    /**
     * Gets as regionalerZusatz
     *
     * @return string
     */
    public function getRegionalerZusatz()
    {
        return $this->regionalerZusatz;
    }

    /**
     * Sets a new regionalerZusatz
     *
     * @param string $regionalerZusatz
     * @return self
     */
    public function setRegionalerZusatz($regionalerZusatz)
    {
        $this->regionalerZusatz = $regionalerZusatz;
        return $this;
    }

    /**
     * Gets as kartenMakro
     *
     * @return bool
     */
    public function getKartenMakro()
    {
        return $this->kartenMakro;
    }

    /**
     * Sets a new kartenMakro
     *
     * @param bool $kartenMakro
     * @return self
     */
    public function setKartenMakro($kartenMakro)
    {
        $this->kartenMakro = $kartenMakro;
        return $this;
    }

    /**
     * Gets as kartenMikro
     *
     * @return bool
     */
    public function getKartenMikro()
    {
        return $this->kartenMikro;
    }

    /**
     * Sets a new kartenMikro
     *
     * @param bool $kartenMikro
     * @return self
     */
    public function setKartenMikro($kartenMikro)
    {
        $this->kartenMikro = $kartenMikro;
        return $this;
    }

    /**
     * Gets as virtuelletour
     *
     * @return bool
     */
    public function getVirtuelletour()
    {
        return $this->virtuelletour;
    }

    /**
     * Sets a new virtuelletour
     *
     * @param bool $virtuelletour
     * @return self
     */
    public function setVirtuelletour($virtuelletour)
    {
        $this->virtuelletour = $virtuelletour;
        return $this;
    }

    /**
     * Gets as luftbildern
     *
     * @return bool
     */
    public function getLuftbildern()
    {
        return $this->luftbildern;
    }

    /**
     * Sets a new luftbildern
     *
     * @param bool $luftbildern
     * @return self
     */
    public function setLuftbildern($luftbildern)
    {
        $this->luftbildern = $luftbildern;
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

