<?php

namespace MediaStoreNet\OpenImmo\Ausstattung;

/**
 * Class representing AusstattungAnonymousPHPType
 */
class AusstattungAnonymousPHPType
{

    /**
     * @var string $ausstattKategorie
     */
    private $ausstattKategorie = null;

    /**
     * @var bool $wgGeeignet
     */
    private $wgGeeignet = null;

    /**
     * @var bool $raeumeVeraenderbar
     */
    private $raeumeVeraenderbar = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Bad $bad
     */
    private $bad = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Kueche $kueche
     */
    private $kueche = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Boden $boden
     */
    private $boden = null;

    /**
     * @var bool $kamin
     */
    private $kamin = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Heizungsart $heizungsart
     */
    private $heizungsart = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Befeuerung $befeuerung
     */
    private $befeuerung = null;

    /**
     * @var bool $klimatisiert
     */
    private $klimatisiert = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Fahrstuhl $fahrstuhl
     */
    private $fahrstuhl = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Stellplatzart[] $stellplatzart
     */
    private $stellplatzart = [
        
    ];

    /**
     * @var bool $gartennutzung
     */
    private $gartennutzung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\AusrichtBalkonTerrasse $ausrichtBalkonTerrasse
     */
    private $ausrichtBalkonTerrasse = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Moebliert $moebliert
     */
    private $moebliert = null;

    /**
     * @var bool $rollstuhlgerecht
     */
    private $rollstuhlgerecht = null;

    /**
     * @var bool $kabelSatTv
     */
    private $kabelSatTv = null;

    /**
     * @var bool $dvbt
     */
    private $dvbt = null;

    /**
     * @var bool $barrierefrei
     */
    private $barrierefrei = null;

    /**
     * @var bool $sauna
     */
    private $sauna = null;

    /**
     * @var bool $swimmingpool
     */
    private $swimmingpool = null;

    /**
     * @var bool $waschTrockenraum
     */
    private $waschTrockenraum = null;

    /**
     * @var bool $wintergarten
     */
    private $wintergarten = null;

    /**
     * @var bool $dvVerkabelung
     */
    private $dvVerkabelung = null;

    /**
     * @var bool $rampe
     */
    private $rampe = null;

    /**
     * @var bool $hebebuehne
     */
    private $hebebuehne = null;

    /**
     * @var bool $kran
     */
    private $kran = null;

    /**
     * @var bool $gastterrasse
     */
    private $gastterrasse = null;

    /**
     * @var string $stromanschlusswert
     */
    private $stromanschlusswert = null;

    /**
     * @var bool $kantineCafeteria
     */
    private $kantineCafeteria = null;

    /**
     * @var bool $teekueche
     */
    private $teekueche = null;

    /**
     * @var float $hallenhoehe
     */
    private $hallenhoehe = null;

    /**
     * @var \MediaStoreNet\OpenImmo\AngeschlGastronomie $angeschlGastronomie
     */
    private $angeschlGastronomie = null;

    /**
     * @var bool $brauereibindung
     */
    private $brauereibindung = null;

    /**
     * @var bool $sporteinrichtungen
     */
    private $sporteinrichtungen = null;

    /**
     * @var bool $wellnessbereich
     */
    private $wellnessbereich = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Serviceleistungen[] $serviceleistungen
     */
    private $serviceleistungen = [
        
    ];

    /**
     * @var bool $telefonFerienimmobilie
     */
    private $telefonFerienimmobilie = null;

    /**
     * @var \MediaStoreNet\OpenImmo\BreitbandZugang $breitbandZugang
     */
    private $breitbandZugang = null;

    /**
     * @var bool $umtsEmpfang
     */
    private $umtsEmpfang = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Sicherheitstechnik $sicherheitstechnik
     */
    private $sicherheitstechnik = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Unterkellert $unterkellert
     */
    private $unterkellert = null;

    /**
     * @var bool $abstellraum
     */
    private $abstellraum = null;

    /**
     * @var bool $fahrradraum
     */
    private $fahrradraum = null;

    /**
     * @var bool $rolladen
     */
    private $rolladen = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Dachform $dachform
     */
    private $dachform = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Bauweise $bauweise
     */
    private $bauweise = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Ausbaustufe $ausbaustufe
     */
    private $ausbaustufe = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Energietyp $energietyp
     */
    private $energietyp = null;

    /**
     * @var bool $bibliothek
     */
    private $bibliothek = null;

    /**
     * @var bool $dachboden
     */
    private $dachboden = null;

    /**
     * @var bool $gaestewc
     */
    private $gaestewc = null;

    /**
     * @var bool $kabelkanaele
     */
    private $kabelkanaele = null;

    /**
     * @var bool $seniorengerecht
     */
    private $seniorengerecht = null;

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
     * Gets as ausstattKategorie
     *
     * @return string
     */
    public function getAusstattKategorie()
    {
        return $this->ausstattKategorie;
    }

    /**
     * Sets a new ausstattKategorie
     *
     * @param string $ausstattKategorie
     * @return self
     */
    public function setAusstattKategorie($ausstattKategorie)
    {
        $this->ausstattKategorie = $ausstattKategorie;
        return $this;
    }

    /**
     * Gets as wgGeeignet
     *
     * @return bool
     */
    public function getWgGeeignet()
    {
        return $this->wgGeeignet;
    }

    /**
     * Sets a new wgGeeignet
     *
     * @param bool $wgGeeignet
     * @return self
     */
    public function setWgGeeignet($wgGeeignet)
    {
        $this->wgGeeignet = $wgGeeignet;
        return $this;
    }

    /**
     * Gets as raeumeVeraenderbar
     *
     * @return bool
     */
    public function getRaeumeVeraenderbar()
    {
        return $this->raeumeVeraenderbar;
    }

    /**
     * Sets a new raeumeVeraenderbar
     *
     * @param bool $raeumeVeraenderbar
     * @return self
     */
    public function setRaeumeVeraenderbar($raeumeVeraenderbar)
    {
        $this->raeumeVeraenderbar = $raeumeVeraenderbar;
        return $this;
    }

    /**
     * Gets as bad
     *
     * @return \MediaStoreNet\OpenImmo\Bad
     */
    public function getBad()
    {
        return $this->bad;
    }

    /**
     * Sets a new bad
     *
     * @param \MediaStoreNet\OpenImmo\Bad $bad
     * @return self
     */
    public function setBad(\MediaStoreNet\OpenImmo\Bad $bad)
    {
        $this->bad = $bad;
        return $this;
    }

    /**
     * Gets as kueche
     *
     * @return \MediaStoreNet\OpenImmo\Kueche
     */
    public function getKueche()
    {
        return $this->kueche;
    }

    /**
     * Sets a new kueche
     *
     * @param \MediaStoreNet\OpenImmo\Kueche $kueche
     * @return self
     */
    public function setKueche(\MediaStoreNet\OpenImmo\Kueche $kueche)
    {
        $this->kueche = $kueche;
        return $this;
    }

    /**
     * Gets as boden
     *
     * @return \MediaStoreNet\OpenImmo\Boden
     */
    public function getBoden()
    {
        return $this->boden;
    }

    /**
     * Sets a new boden
     *
     * @param \MediaStoreNet\OpenImmo\Boden $boden
     * @return self
     */
    public function setBoden(\MediaStoreNet\OpenImmo\Boden $boden)
    {
        $this->boden = $boden;
        return $this;
    }

    /**
     * Gets as kamin
     *
     * @return bool
     */
    public function getKamin()
    {
        return $this->kamin;
    }

    /**
     * Sets a new kamin
     *
     * @param bool $kamin
     * @return self
     */
    public function setKamin($kamin)
    {
        $this->kamin = $kamin;
        return $this;
    }

    /**
     * Gets as heizungsart
     *
     * @return \MediaStoreNet\OpenImmo\Heizungsart
     */
    public function getHeizungsart()
    {
        return $this->heizungsart;
    }

    /**
     * Sets a new heizungsart
     *
     * @param \MediaStoreNet\OpenImmo\Heizungsart $heizungsart
     * @return self
     */
    public function setHeizungsart(\MediaStoreNet\OpenImmo\Heizungsart $heizungsart)
    {
        $this->heizungsart = $heizungsart;
        return $this;
    }

    /**
     * Gets as befeuerung
     *
     * @return \MediaStoreNet\OpenImmo\Befeuerung
     */
    public function getBefeuerung()
    {
        return $this->befeuerung;
    }

    /**
     * Sets a new befeuerung
     *
     * @param \MediaStoreNet\OpenImmo\Befeuerung $befeuerung
     * @return self
     */
    public function setBefeuerung(\MediaStoreNet\OpenImmo\Befeuerung $befeuerung)
    {
        $this->befeuerung = $befeuerung;
        return $this;
    }

    /**
     * Gets as klimatisiert
     *
     * @return bool
     */
    public function getKlimatisiert()
    {
        return $this->klimatisiert;
    }

    /**
     * Sets a new klimatisiert
     *
     * @param bool $klimatisiert
     * @return self
     */
    public function setKlimatisiert($klimatisiert)
    {
        $this->klimatisiert = $klimatisiert;
        return $this;
    }

    /**
     * Gets as fahrstuhl
     *
     * @return \MediaStoreNet\OpenImmo\Fahrstuhl
     */
    public function getFahrstuhl()
    {
        return $this->fahrstuhl;
    }

    /**
     * Sets a new fahrstuhl
     *
     * @param \MediaStoreNet\OpenImmo\Fahrstuhl $fahrstuhl
     * @return self
     */
    public function setFahrstuhl(\MediaStoreNet\OpenImmo\Fahrstuhl $fahrstuhl)
    {
        $this->fahrstuhl = $fahrstuhl;
        return $this;
    }

    /**
     * Adds as stellplatzart
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Stellplatzart $stellplatzart
     */
    public function addToStellplatzart(\MediaStoreNet\OpenImmo\Stellplatzart $stellplatzart)
    {
        $this->stellplatzart[] = $stellplatzart;
        return $this;
    }

    /**
     * isset stellplatzart
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStellplatzart($index)
    {
        return isset($this->stellplatzart[$index]);
    }

    /**
     * unset stellplatzart
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStellplatzart($index)
    {
        unset($this->stellplatzart[$index]);
    }

    /**
     * Gets as stellplatzart
     *
     * @return \MediaStoreNet\OpenImmo\Stellplatzart[]
     */
    public function getStellplatzart()
    {
        return $this->stellplatzart;
    }

    /**
     * Sets a new stellplatzart
     *
     * @param \MediaStoreNet\OpenImmo\Stellplatzart[] $stellplatzart
     * @return self
     */
    public function setStellplatzart(array $stellplatzart)
    {
        $this->stellplatzart = $stellplatzart;
        return $this;
    }

    /**
     * Gets as gartennutzung
     *
     * @return bool
     */
    public function getGartennutzung()
    {
        return $this->gartennutzung;
    }

    /**
     * Sets a new gartennutzung
     *
     * @param bool $gartennutzung
     * @return self
     */
    public function setGartennutzung($gartennutzung)
    {
        $this->gartennutzung = $gartennutzung;
        return $this;
    }

    /**
     * Gets as ausrichtBalkonTerrasse
     *
     * @return \MediaStoreNet\OpenImmo\AusrichtBalkonTerrasse
     */
    public function getAusrichtBalkonTerrasse()
    {
        return $this->ausrichtBalkonTerrasse;
    }

    /**
     * Sets a new ausrichtBalkonTerrasse
     *
     * @param \MediaStoreNet\OpenImmo\AusrichtBalkonTerrasse $ausrichtBalkonTerrasse
     * @return self
     */
    public function setAusrichtBalkonTerrasse(\MediaStoreNet\OpenImmo\AusrichtBalkonTerrasse $ausrichtBalkonTerrasse)
    {
        $this->ausrichtBalkonTerrasse = $ausrichtBalkonTerrasse;
        return $this;
    }

    /**
     * Gets as moebliert
     *
     * @return \MediaStoreNet\OpenImmo\Moebliert
     */
    public function getMoebliert()
    {
        return $this->moebliert;
    }

    /**
     * Sets a new moebliert
     *
     * @param \MediaStoreNet\OpenImmo\Moebliert $moebliert
     * @return self
     */
    public function setMoebliert(\MediaStoreNet\OpenImmo\Moebliert $moebliert)
    {
        $this->moebliert = $moebliert;
        return $this;
    }

    /**
     * Gets as rollstuhlgerecht
     *
     * @return bool
     */
    public function getRollstuhlgerecht()
    {
        return $this->rollstuhlgerecht;
    }

    /**
     * Sets a new rollstuhlgerecht
     *
     * @param bool $rollstuhlgerecht
     * @return self
     */
    public function setRollstuhlgerecht($rollstuhlgerecht)
    {
        $this->rollstuhlgerecht = $rollstuhlgerecht;
        return $this;
    }

    /**
     * Gets as kabelSatTv
     *
     * @return bool
     */
    public function getKabelSatTv()
    {
        return $this->kabelSatTv;
    }

    /**
     * Sets a new kabelSatTv
     *
     * @param bool $kabelSatTv
     * @return self
     */
    public function setKabelSatTv($kabelSatTv)
    {
        $this->kabelSatTv = $kabelSatTv;
        return $this;
    }

    /**
     * Gets as dvbt
     *
     * @return bool
     */
    public function getDvbt()
    {
        return $this->dvbt;
    }

    /**
     * Sets a new dvbt
     *
     * @param bool $dvbt
     * @return self
     */
    public function setDvbt($dvbt)
    {
        $this->dvbt = $dvbt;
        return $this;
    }

    /**
     * Gets as barrierefrei
     *
     * @return bool
     */
    public function getBarrierefrei()
    {
        return $this->barrierefrei;
    }

    /**
     * Sets a new barrierefrei
     *
     * @param bool $barrierefrei
     * @return self
     */
    public function setBarrierefrei($barrierefrei)
    {
        $this->barrierefrei = $barrierefrei;
        return $this;
    }

    /**
     * Gets as sauna
     *
     * @return bool
     */
    public function getSauna()
    {
        return $this->sauna;
    }

    /**
     * Sets a new sauna
     *
     * @param bool $sauna
     * @return self
     */
    public function setSauna($sauna)
    {
        $this->sauna = $sauna;
        return $this;
    }

    /**
     * Gets as swimmingpool
     *
     * @return bool
     */
    public function getSwimmingpool()
    {
        return $this->swimmingpool;
    }

    /**
     * Sets a new swimmingpool
     *
     * @param bool $swimmingpool
     * @return self
     */
    public function setSwimmingpool($swimmingpool)
    {
        $this->swimmingpool = $swimmingpool;
        return $this;
    }

    /**
     * Gets as waschTrockenraum
     *
     * @return bool
     */
    public function getWaschTrockenraum()
    {
        return $this->waschTrockenraum;
    }

    /**
     * Sets a new waschTrockenraum
     *
     * @param bool $waschTrockenraum
     * @return self
     */
    public function setWaschTrockenraum($waschTrockenraum)
    {
        $this->waschTrockenraum = $waschTrockenraum;
        return $this;
    }

    /**
     * Gets as wintergarten
     *
     * @return bool
     */
    public function getWintergarten()
    {
        return $this->wintergarten;
    }

    /**
     * Sets a new wintergarten
     *
     * @param bool $wintergarten
     * @return self
     */
    public function setWintergarten($wintergarten)
    {
        $this->wintergarten = $wintergarten;
        return $this;
    }

    /**
     * Gets as dvVerkabelung
     *
     * @return bool
     */
    public function getDvVerkabelung()
    {
        return $this->dvVerkabelung;
    }

    /**
     * Sets a new dvVerkabelung
     *
     * @param bool $dvVerkabelung
     * @return self
     */
    public function setDvVerkabelung($dvVerkabelung)
    {
        $this->dvVerkabelung = $dvVerkabelung;
        return $this;
    }

    /**
     * Gets as rampe
     *
     * @return bool
     */
    public function getRampe()
    {
        return $this->rampe;
    }

    /**
     * Sets a new rampe
     *
     * @param bool $rampe
     * @return self
     */
    public function setRampe($rampe)
    {
        $this->rampe = $rampe;
        return $this;
    }

    /**
     * Gets as hebebuehne
     *
     * @return bool
     */
    public function getHebebuehne()
    {
        return $this->hebebuehne;
    }

    /**
     * Sets a new hebebuehne
     *
     * @param bool $hebebuehne
     * @return self
     */
    public function setHebebuehne($hebebuehne)
    {
        $this->hebebuehne = $hebebuehne;
        return $this;
    }

    /**
     * Gets as kran
     *
     * @return bool
     */
    public function getKran()
    {
        return $this->kran;
    }

    /**
     * Sets a new kran
     *
     * @param bool $kran
     * @return self
     */
    public function setKran($kran)
    {
        $this->kran = $kran;
        return $this;
    }

    /**
     * Gets as gastterrasse
     *
     * @return bool
     */
    public function getGastterrasse()
    {
        return $this->gastterrasse;
    }

    /**
     * Sets a new gastterrasse
     *
     * @param bool $gastterrasse
     * @return self
     */
    public function setGastterrasse($gastterrasse)
    {
        $this->gastterrasse = $gastterrasse;
        return $this;
    }

    /**
     * Gets as stromanschlusswert
     *
     * @return string
     */
    public function getStromanschlusswert()
    {
        return $this->stromanschlusswert;
    }

    /**
     * Sets a new stromanschlusswert
     *
     * @param string $stromanschlusswert
     * @return self
     */
    public function setStromanschlusswert($stromanschlusswert)
    {
        $this->stromanschlusswert = $stromanschlusswert;
        return $this;
    }

    /**
     * Gets as kantineCafeteria
     *
     * @return bool
     */
    public function getKantineCafeteria()
    {
        return $this->kantineCafeteria;
    }

    /**
     * Sets a new kantineCafeteria
     *
     * @param bool $kantineCafeteria
     * @return self
     */
    public function setKantineCafeteria($kantineCafeteria)
    {
        $this->kantineCafeteria = $kantineCafeteria;
        return $this;
    }

    /**
     * Gets as teekueche
     *
     * @return bool
     */
    public function getTeekueche()
    {
        return $this->teekueche;
    }

    /**
     * Sets a new teekueche
     *
     * @param bool $teekueche
     * @return self
     */
    public function setTeekueche($teekueche)
    {
        $this->teekueche = $teekueche;
        return $this;
    }

    /**
     * Gets as hallenhoehe
     *
     * @return float
     */
    public function getHallenhoehe()
    {
        return $this->hallenhoehe;
    }

    /**
     * Sets a new hallenhoehe
     *
     * @param float $hallenhoehe
     * @return self
     */
    public function setHallenhoehe($hallenhoehe)
    {
        $this->hallenhoehe = $hallenhoehe;
        return $this;
    }

    /**
     * Gets as angeschlGastronomie
     *
     * @return \MediaStoreNet\OpenImmo\AngeschlGastronomie
     */
    public function getAngeschlGastronomie()
    {
        return $this->angeschlGastronomie;
    }

    /**
     * Sets a new angeschlGastronomie
     *
     * @param \MediaStoreNet\OpenImmo\AngeschlGastronomie $angeschlGastronomie
     * @return self
     */
    public function setAngeschlGastronomie(\MediaStoreNet\OpenImmo\AngeschlGastronomie $angeschlGastronomie)
    {
        $this->angeschlGastronomie = $angeschlGastronomie;
        return $this;
    }

    /**
     * Gets as brauereibindung
     *
     * @return bool
     */
    public function getBrauereibindung()
    {
        return $this->brauereibindung;
    }

    /**
     * Sets a new brauereibindung
     *
     * @param bool $brauereibindung
     * @return self
     */
    public function setBrauereibindung($brauereibindung)
    {
        $this->brauereibindung = $brauereibindung;
        return $this;
    }

    /**
     * Gets as sporteinrichtungen
     *
     * @return bool
     */
    public function getSporteinrichtungen()
    {
        return $this->sporteinrichtungen;
    }

    /**
     * Sets a new sporteinrichtungen
     *
     * @param bool $sporteinrichtungen
     * @return self
     */
    public function setSporteinrichtungen($sporteinrichtungen)
    {
        $this->sporteinrichtungen = $sporteinrichtungen;
        return $this;
    }

    /**
     * Gets as wellnessbereich
     *
     * @return bool
     */
    public function getWellnessbereich()
    {
        return $this->wellnessbereich;
    }

    /**
     * Sets a new wellnessbereich
     *
     * @param bool $wellnessbereich
     * @return self
     */
    public function setWellnessbereich($wellnessbereich)
    {
        $this->wellnessbereich = $wellnessbereich;
        return $this;
    }

    /**
     * Adds as serviceleistungen
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Serviceleistungen $serviceleistungen
     */
    public function addToServiceleistungen(\MediaStoreNet\OpenImmo\Serviceleistungen $serviceleistungen)
    {
        $this->serviceleistungen[] = $serviceleistungen;
        return $this;
    }

    /**
     * isset serviceleistungen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceleistungen($index)
    {
        return isset($this->serviceleistungen[$index]);
    }

    /**
     * unset serviceleistungen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceleistungen($index)
    {
        unset($this->serviceleistungen[$index]);
    }

    /**
     * Gets as serviceleistungen
     *
     * @return \MediaStoreNet\OpenImmo\Serviceleistungen[]
     */
    public function getServiceleistungen()
    {
        return $this->serviceleistungen;
    }

    /**
     * Sets a new serviceleistungen
     *
     * @param \MediaStoreNet\OpenImmo\Serviceleistungen[] $serviceleistungen
     * @return self
     */
    public function setServiceleistungen(array $serviceleistungen)
    {
        $this->serviceleistungen = $serviceleistungen;
        return $this;
    }

    /**
     * Gets as telefonFerienimmobilie
     *
     * @return bool
     */
    public function getTelefonFerienimmobilie()
    {
        return $this->telefonFerienimmobilie;
    }

    /**
     * Sets a new telefonFerienimmobilie
     *
     * @param bool $telefonFerienimmobilie
     * @return self
     */
    public function setTelefonFerienimmobilie($telefonFerienimmobilie)
    {
        $this->telefonFerienimmobilie = $telefonFerienimmobilie;
        return $this;
    }

    /**
     * Gets as breitbandZugang
     *
     * @return \MediaStoreNet\OpenImmo\BreitbandZugang
     */
    public function getBreitbandZugang()
    {
        return $this->breitbandZugang;
    }

    /**
     * Sets a new breitbandZugang
     *
     * @param \MediaStoreNet\OpenImmo\BreitbandZugang $breitbandZugang
     * @return self
     */
    public function setBreitbandZugang(\MediaStoreNet\OpenImmo\BreitbandZugang $breitbandZugang)
    {
        $this->breitbandZugang = $breitbandZugang;
        return $this;
    }

    /**
     * Gets as umtsEmpfang
     *
     * @return bool
     */
    public function getUmtsEmpfang()
    {
        return $this->umtsEmpfang;
    }

    /**
     * Sets a new umtsEmpfang
     *
     * @param bool $umtsEmpfang
     * @return self
     */
    public function setUmtsEmpfang($umtsEmpfang)
    {
        $this->umtsEmpfang = $umtsEmpfang;
        return $this;
    }

    /**
     * Gets as sicherheitstechnik
     *
     * @return \MediaStoreNet\OpenImmo\Sicherheitstechnik
     */
    public function getSicherheitstechnik()
    {
        return $this->sicherheitstechnik;
    }

    /**
     * Sets a new sicherheitstechnik
     *
     * @param \MediaStoreNet\OpenImmo\Sicherheitstechnik $sicherheitstechnik
     * @return self
     */
    public function setSicherheitstechnik(\MediaStoreNet\OpenImmo\Sicherheitstechnik $sicherheitstechnik)
    {
        $this->sicherheitstechnik = $sicherheitstechnik;
        return $this;
    }

    /**
     * Gets as unterkellert
     *
     * @return \MediaStoreNet\OpenImmo\Unterkellert
     */
    public function getUnterkellert()
    {
        return $this->unterkellert;
    }

    /**
     * Sets a new unterkellert
     *
     * @param \MediaStoreNet\OpenImmo\Unterkellert $unterkellert
     * @return self
     */
    public function setUnterkellert(\MediaStoreNet\OpenImmo\Unterkellert $unterkellert)
    {
        $this->unterkellert = $unterkellert;
        return $this;
    }

    /**
     * Gets as abstellraum
     *
     * @return bool
     */
    public function getAbstellraum()
    {
        return $this->abstellraum;
    }

    /**
     * Sets a new abstellraum
     *
     * @param bool $abstellraum
     * @return self
     */
    public function setAbstellraum($abstellraum)
    {
        $this->abstellraum = $abstellraum;
        return $this;
    }

    /**
     * Gets as fahrradraum
     *
     * @return bool
     */
    public function getFahrradraum()
    {
        return $this->fahrradraum;
    }

    /**
     * Sets a new fahrradraum
     *
     * @param bool $fahrradraum
     * @return self
     */
    public function setFahrradraum($fahrradraum)
    {
        $this->fahrradraum = $fahrradraum;
        return $this;
    }

    /**
     * Gets as rolladen
     *
     * @return bool
     */
    public function getRolladen()
    {
        return $this->rolladen;
    }

    /**
     * Sets a new rolladen
     *
     * @param bool $rolladen
     * @return self
     */
    public function setRolladen($rolladen)
    {
        $this->rolladen = $rolladen;
        return $this;
    }

    /**
     * Gets as dachform
     *
     * @return \MediaStoreNet\OpenImmo\Dachform
     */
    public function getDachform()
    {
        return $this->dachform;
    }

    /**
     * Sets a new dachform
     *
     * @param \MediaStoreNet\OpenImmo\Dachform $dachform
     * @return self
     */
    public function setDachform(\MediaStoreNet\OpenImmo\Dachform $dachform)
    {
        $this->dachform = $dachform;
        return $this;
    }

    /**
     * Gets as bauweise
     *
     * @return \MediaStoreNet\OpenImmo\Bauweise
     */
    public function getBauweise()
    {
        return $this->bauweise;
    }

    /**
     * Sets a new bauweise
     *
     * @param \MediaStoreNet\OpenImmo\Bauweise $bauweise
     * @return self
     */
    public function setBauweise(\MediaStoreNet\OpenImmo\Bauweise $bauweise)
    {
        $this->bauweise = $bauweise;
        return $this;
    }

    /**
     * Gets as ausbaustufe
     *
     * @return \MediaStoreNet\OpenImmo\Ausbaustufe
     */
    public function getAusbaustufe()
    {
        return $this->ausbaustufe;
    }

    /**
     * Sets a new ausbaustufe
     *
     * @param \MediaStoreNet\OpenImmo\Ausbaustufe $ausbaustufe
     * @return self
     */
    public function setAusbaustufe(\MediaStoreNet\OpenImmo\Ausbaustufe $ausbaustufe)
    {
        $this->ausbaustufe = $ausbaustufe;
        return $this;
    }

    /**
     * Gets as energietyp
     *
     * @return \MediaStoreNet\OpenImmo\Energietyp
     */
    public function getEnergietyp()
    {
        return $this->energietyp;
    }

    /**
     * Sets a new energietyp
     *
     * @param \MediaStoreNet\OpenImmo\Energietyp $energietyp
     * @return self
     */
    public function setEnergietyp(\MediaStoreNet\OpenImmo\Energietyp $energietyp)
    {
        $this->energietyp = $energietyp;
        return $this;
    }

    /**
     * Gets as bibliothek
     *
     * @return bool
     */
    public function getBibliothek()
    {
        return $this->bibliothek;
    }

    /**
     * Sets a new bibliothek
     *
     * @param bool $bibliothek
     * @return self
     */
    public function setBibliothek($bibliothek)
    {
        $this->bibliothek = $bibliothek;
        return $this;
    }

    /**
     * Gets as dachboden
     *
     * @return bool
     */
    public function getDachboden()
    {
        return $this->dachboden;
    }

    /**
     * Sets a new dachboden
     *
     * @param bool $dachboden
     * @return self
     */
    public function setDachboden($dachboden)
    {
        $this->dachboden = $dachboden;
        return $this;
    }

    /**
     * Gets as gaestewc
     *
     * @return bool
     */
    public function getGaestewc()
    {
        return $this->gaestewc;
    }

    /**
     * Sets a new gaestewc
     *
     * @param bool $gaestewc
     * @return self
     */
    public function setGaestewc($gaestewc)
    {
        $this->gaestewc = $gaestewc;
        return $this;
    }

    /**
     * Gets as kabelkanaele
     *
     * @return bool
     */
    public function getKabelkanaele()
    {
        return $this->kabelkanaele;
    }

    /**
     * Sets a new kabelkanaele
     *
     * @param bool $kabelkanaele
     * @return self
     */
    public function setKabelkanaele($kabelkanaele)
    {
        $this->kabelkanaele = $kabelkanaele;
        return $this;
    }

    /**
     * Gets as seniorengerecht
     *
     * @return bool
     */
    public function getSeniorengerecht()
    {
        return $this->seniorengerecht;
    }

    /**
     * Sets a new seniorengerecht
     *
     * @param bool $seniorengerecht
     * @return self
     */
    public function setSeniorengerecht($seniorengerecht)
    {
        $this->seniorengerecht = $seniorengerecht;
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

