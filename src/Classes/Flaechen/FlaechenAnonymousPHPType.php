<?php

namespace MediaStoreNet\OpenImmo\Classes\Flaechen;

/**
 * Class representing FlaechenAnonymousPHPType
 */
class FlaechenAnonymousPHPType
{

    /**
     * @var float $wohnflaeche
     */
    private $wohnflaeche = null;

    /**
     * @var float $nutzflaeche
     */
    private $nutzflaeche = null;

    /**
     * @var float $gesamtflaeche
     */
    private $gesamtflaeche = null;

    /**
     * @var float $ladenflaeche
     */
    private $ladenflaeche = null;

    /**
     * @var float $lagerflaeche
     */
    private $lagerflaeche = null;

    /**
     * @var float $verkaufsflaeche
     */
    private $verkaufsflaeche = null;

    /**
     * @var float $freiflaeche
     */
    private $freiflaeche = null;

    /**
     * @var float $bueroflaeche
     */
    private $bueroflaeche = null;

    /**
     * @var float $bueroteilflaeche
     */
    private $bueroteilflaeche = null;

    /**
     * @var float $fensterfront
     */
    private $fensterfront = null;

    /**
     * @var float $verwaltungsflaeche
     */
    private $verwaltungsflaeche = null;

    /**
     * @var float $gastroflaeche
     */
    private $gastroflaeche = null;

    /**
     * @var string $grz
     */
    private $grz = null;

    /**
     * @var string $gfz
     */
    private $gfz = null;

    /**
     * @var string $bmz
     */
    private $bmz = null;

    /**
     * @var string $bgf
     */
    private $bgf = null;

    /**
     * @var float $grundstuecksflaeche
     */
    private $grundstuecksflaeche = null;

    /**
     * @var float $sonstflaeche
     */
    private $sonstflaeche = null;

    /**
     * @var float $anzahlZimmer
     */
    private $anzahlZimmer = null;

    /**
     * @var float $anzahlSchlafzimmer
     */
    private $anzahlSchlafzimmer = null;

    /**
     * @var float $anzahlBadezimmer
     */
    private $anzahlBadezimmer = null;

    /**
     * @var float $anzahlSepWc
     */
    private $anzahlSepWc = null;

    /**
     * @var float $anzahlBalkone
     */
    private $anzahlBalkone = null;

    /**
     * @var float $anzahlTerrassen
     */
    private $anzahlTerrassen = null;

    /**
     * @var float $anzahlLogia
     */
    private $anzahlLogia = null;

    /**
     * @var float $balkonTerrasseFlaeche
     */
    private $balkonTerrasseFlaeche = null;

    /**
     * @var float $anzahlWohnSchlafzimmer
     */
    private $anzahlWohnSchlafzimmer = null;

    /**
     * @var float $gartenflaeche
     */
    private $gartenflaeche = null;

    /**
     * @var float $kellerflaeche
     */
    private $kellerflaeche = null;

    /**
     * @var float $fensterfrontQm
     */
    private $fensterfrontQm = null;

    /**
     * @var float $grundstuecksfront
     */
    private $grundstuecksfront = null;

    /**
     * @var float $dachbodenflaeche
     */
    private $dachbodenflaeche = null;

    /**
     * @var float $teilbarAb
     */
    private $teilbarAb = null;

    /**
     * @var float $beheizbareFlaeche
     */
    private $beheizbareFlaeche = null;

    /**
     * @var int $anzahlStellplaetze
     */
    private $anzahlStellplaetze = null;

    /**
     * @var float $plaetzeGastraum
     */
    private $plaetzeGastraum = null;

    /**
     * @var float $anzahlBetten
     */
    private $anzahlBetten = null;

    /**
     * @var float $anzahlTagungsraeume
     */
    private $anzahlTagungsraeume = null;

    /**
     * @var float $vermietbareFlaeche
     */
    private $vermietbareFlaeche = null;

    /**
     * @var float $anzahlWohneinheiten
     */
    private $anzahlWohneinheiten = null;

    /**
     * @var float $anzahlGewerbeeinheiten
     */
    private $anzahlGewerbeeinheiten = null;

    /**
     * @var bool $einliegerwohnung
     */
    private $einliegerwohnung = null;

    /**
     * @var float $kubatur
     */
    private $kubatur = null;

    /**
     * @var float $ausnuetzungsziffer
     */
    private $ausnuetzungsziffer = null;

    /**
     * @var float $flaechevon
     */
    private $flaechevon = null;

    /**
     * @var float $flaechebis
     */
    private $flaechebis = null;

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
     * Gets as wohnflaeche
     *
     * @return float
     */
    public function getWohnflaeche()
    {
        return $this->wohnflaeche;
    }

    /**
     * Sets a new wohnflaeche
     *
     * @param float $wohnflaeche
     * @return self
     */
    public function setWohnflaeche($wohnflaeche)
    {
        $this->wohnflaeche = $wohnflaeche;
        return $this;
    }

    /**
     * Gets as nutzflaeche
     *
     * @return float
     */
    public function getNutzflaeche()
    {
        return $this->nutzflaeche;
    }

    /**
     * Sets a new nutzflaeche
     *
     * @param float $nutzflaeche
     * @return self
     */
    public function setNutzflaeche($nutzflaeche)
    {
        $this->nutzflaeche = $nutzflaeche;
        return $this;
    }

    /**
     * Gets as gesamtflaeche
     *
     * @return float
     */
    public function getGesamtflaeche()
    {
        return $this->gesamtflaeche;
    }

    /**
     * Sets a new gesamtflaeche
     *
     * @param float $gesamtflaeche
     * @return self
     */
    public function setGesamtflaeche($gesamtflaeche)
    {
        $this->gesamtflaeche = $gesamtflaeche;
        return $this;
    }

    /**
     * Gets as ladenflaeche
     *
     * @return float
     */
    public function getLadenflaeche()
    {
        return $this->ladenflaeche;
    }

    /**
     * Sets a new ladenflaeche
     *
     * @param float $ladenflaeche
     * @return self
     */
    public function setLadenflaeche($ladenflaeche)
    {
        $this->ladenflaeche = $ladenflaeche;
        return $this;
    }

    /**
     * Gets as lagerflaeche
     *
     * @return float
     */
    public function getLagerflaeche()
    {
        return $this->lagerflaeche;
    }

    /**
     * Sets a new lagerflaeche
     *
     * @param float $lagerflaeche
     * @return self
     */
    public function setLagerflaeche($lagerflaeche)
    {
        $this->lagerflaeche = $lagerflaeche;
        return $this;
    }

    /**
     * Gets as verkaufsflaeche
     *
     * @return float
     */
    public function getVerkaufsflaeche()
    {
        return $this->verkaufsflaeche;
    }

    /**
     * Sets a new verkaufsflaeche
     *
     * @param float $verkaufsflaeche
     * @return self
     */
    public function setVerkaufsflaeche($verkaufsflaeche)
    {
        $this->verkaufsflaeche = $verkaufsflaeche;
        return $this;
    }

    /**
     * Gets as freiflaeche
     *
     * @return float
     */
    public function getFreiflaeche()
    {
        return $this->freiflaeche;
    }

    /**
     * Sets a new freiflaeche
     *
     * @param float $freiflaeche
     * @return self
     */
    public function setFreiflaeche($freiflaeche)
    {
        $this->freiflaeche = $freiflaeche;
        return $this;
    }

    /**
     * Gets as bueroflaeche
     *
     * @return float
     */
    public function getBueroflaeche()
    {
        return $this->bueroflaeche;
    }

    /**
     * Sets a new bueroflaeche
     *
     * @param float $bueroflaeche
     * @return self
     */
    public function setBueroflaeche($bueroflaeche)
    {
        $this->bueroflaeche = $bueroflaeche;
        return $this;
    }

    /**
     * Gets as bueroteilflaeche
     *
     * @return float
     */
    public function getBueroteilflaeche()
    {
        return $this->bueroteilflaeche;
    }

    /**
     * Sets a new bueroteilflaeche
     *
     * @param float $bueroteilflaeche
     * @return self
     */
    public function setBueroteilflaeche($bueroteilflaeche)
    {
        $this->bueroteilflaeche = $bueroteilflaeche;
        return $this;
    }

    /**
     * Gets as fensterfront
     *
     * @return float
     */
    public function getFensterfront()
    {
        return $this->fensterfront;
    }

    /**
     * Sets a new fensterfront
     *
     * @param float $fensterfront
     * @return self
     */
    public function setFensterfront($fensterfront)
    {
        $this->fensterfront = $fensterfront;
        return $this;
    }

    /**
     * Gets as verwaltungsflaeche
     *
     * @return float
     */
    public function getVerwaltungsflaeche()
    {
        return $this->verwaltungsflaeche;
    }

    /**
     * Sets a new verwaltungsflaeche
     *
     * @param float $verwaltungsflaeche
     * @return self
     */
    public function setVerwaltungsflaeche($verwaltungsflaeche)
    {
        $this->verwaltungsflaeche = $verwaltungsflaeche;
        return $this;
    }

    /**
     * Gets as gastroflaeche
     *
     * @return float
     */
    public function getGastroflaeche()
    {
        return $this->gastroflaeche;
    }

    /**
     * Sets a new gastroflaeche
     *
     * @param float $gastroflaeche
     * @return self
     */
    public function setGastroflaeche($gastroflaeche)
    {
        $this->gastroflaeche = $gastroflaeche;
        return $this;
    }

    /**
     * Gets as grz
     *
     * @return string
     */
    public function getGrz()
    {
        return $this->grz;
    }

    /**
     * Sets a new grz
     *
     * @param string $grz
     * @return self
     */
    public function setGrz($grz)
    {
        $this->grz = $grz;
        return $this;
    }

    /**
     * Gets as gfz
     *
     * @return string
     */
    public function getGfz()
    {
        return $this->gfz;
    }

    /**
     * Sets a new gfz
     *
     * @param string $gfz
     * @return self
     */
    public function setGfz($gfz)
    {
        $this->gfz = $gfz;
        return $this;
    }

    /**
     * Gets as bmz
     *
     * @return string
     */
    public function getBmz()
    {
        return $this->bmz;
    }

    /**
     * Sets a new bmz
     *
     * @param string $bmz
     * @return self
     */
    public function setBmz($bmz)
    {
        $this->bmz = $bmz;
        return $this;
    }

    /**
     * Gets as bgf
     *
     * @return string
     */
    public function getBgf()
    {
        return $this->bgf;
    }

    /**
     * Sets a new bgf
     *
     * @param string $bgf
     * @return self
     */
    public function setBgf($bgf)
    {
        $this->bgf = $bgf;
        return $this;
    }

    /**
     * Gets as grundstuecksflaeche
     *
     * @return float
     */
    public function getGrundstuecksflaeche()
    {
        return $this->grundstuecksflaeche;
    }

    /**
     * Sets a new grundstuecksflaeche
     *
     * @param float $grundstuecksflaeche
     * @return self
     */
    public function setGrundstuecksflaeche($grundstuecksflaeche)
    {
        $this->grundstuecksflaeche = $grundstuecksflaeche;
        return $this;
    }

    /**
     * Gets as sonstflaeche
     *
     * @return float
     */
    public function getSonstflaeche()
    {
        return $this->sonstflaeche;
    }

    /**
     * Sets a new sonstflaeche
     *
     * @param float $sonstflaeche
     * @return self
     */
    public function setSonstflaeche($sonstflaeche)
    {
        $this->sonstflaeche = $sonstflaeche;
        return $this;
    }

    /**
     * Gets as anzahlZimmer
     *
     * @return float
     */
    public function getAnzahlZimmer()
    {
        return $this->anzahlZimmer;
    }

    /**
     * Sets a new anzahlZimmer
     *
     * @param float $anzahlZimmer
     * @return self
     */
    public function setAnzahlZimmer($anzahlZimmer)
    {
        $this->anzahlZimmer = $anzahlZimmer;
        return $this;
    }

    /**
     * Gets as anzahlSchlafzimmer
     *
     * @return float
     */
    public function getAnzahlSchlafzimmer()
    {
        return $this->anzahlSchlafzimmer;
    }

    /**
     * Sets a new anzahlSchlafzimmer
     *
     * @param float $anzahlSchlafzimmer
     * @return self
     */
    public function setAnzahlSchlafzimmer($anzahlSchlafzimmer)
    {
        $this->anzahlSchlafzimmer = $anzahlSchlafzimmer;
        return $this;
    }

    /**
     * Gets as anzahlBadezimmer
     *
     * @return float
     */
    public function getAnzahlBadezimmer()
    {
        return $this->anzahlBadezimmer;
    }

    /**
     * Sets a new anzahlBadezimmer
     *
     * @param float $anzahlBadezimmer
     * @return self
     */
    public function setAnzahlBadezimmer($anzahlBadezimmer)
    {
        $this->anzahlBadezimmer = $anzahlBadezimmer;
        return $this;
    }

    /**
     * Gets as anzahlSepWc
     *
     * @return float
     */
    public function getAnzahlSepWc()
    {
        return $this->anzahlSepWc;
    }

    /**
     * Sets a new anzahlSepWc
     *
     * @param float $anzahlSepWc
     * @return self
     */
    public function setAnzahlSepWc($anzahlSepWc)
    {
        $this->anzahlSepWc = $anzahlSepWc;
        return $this;
    }

    /**
     * Gets as anzahlBalkone
     *
     * @return float
     */
    public function getAnzahlBalkone()
    {
        return $this->anzahlBalkone;
    }

    /**
     * Sets a new anzahlBalkone
     *
     * @param float $anzahlBalkone
     * @return self
     */
    public function setAnzahlBalkone($anzahlBalkone)
    {
        $this->anzahlBalkone = $anzahlBalkone;
        return $this;
    }

    /**
     * Gets as anzahlTerrassen
     *
     * @return float
     */
    public function getAnzahlTerrassen()
    {
        return $this->anzahlTerrassen;
    }

    /**
     * Sets a new anzahlTerrassen
     *
     * @param float $anzahlTerrassen
     * @return self
     */
    public function setAnzahlTerrassen($anzahlTerrassen)
    {
        $this->anzahlTerrassen = $anzahlTerrassen;
        return $this;
    }

    /**
     * Gets as anzahlLogia
     *
     * @return float
     */
    public function getAnzahlLogia()
    {
        return $this->anzahlLogia;
    }

    /**
     * Sets a new anzahlLogia
     *
     * @param float $anzahlLogia
     * @return self
     */
    public function setAnzahlLogia($anzahlLogia)
    {
        $this->anzahlLogia = $anzahlLogia;
        return $this;
    }

    /**
     * Gets as balkonTerrasseFlaeche
     *
     * @return float
     */
    public function getBalkonTerrasseFlaeche()
    {
        return $this->balkonTerrasseFlaeche;
    }

    /**
     * Sets a new balkonTerrasseFlaeche
     *
     * @param float $balkonTerrasseFlaeche
     * @return self
     */
    public function setBalkonTerrasseFlaeche($balkonTerrasseFlaeche)
    {
        $this->balkonTerrasseFlaeche = $balkonTerrasseFlaeche;
        return $this;
    }

    /**
     * Gets as anzahlWohnSchlafzimmer
     *
     * @return float
     */
    public function getAnzahlWohnSchlafzimmer()
    {
        return $this->anzahlWohnSchlafzimmer;
    }

    /**
     * Sets a new anzahlWohnSchlafzimmer
     *
     * @param float $anzahlWohnSchlafzimmer
     * @return self
     */
    public function setAnzahlWohnSchlafzimmer($anzahlWohnSchlafzimmer)
    {
        $this->anzahlWohnSchlafzimmer = $anzahlWohnSchlafzimmer;
        return $this;
    }

    /**
     * Gets as gartenflaeche
     *
     * @return float
     */
    public function getGartenflaeche()
    {
        return $this->gartenflaeche;
    }

    /**
     * Sets a new gartenflaeche
     *
     * @param float $gartenflaeche
     * @return self
     */
    public function setGartenflaeche($gartenflaeche)
    {
        $this->gartenflaeche = $gartenflaeche;
        return $this;
    }

    /**
     * Gets as kellerflaeche
     *
     * @return float
     */
    public function getKellerflaeche()
    {
        return $this->kellerflaeche;
    }

    /**
     * Sets a new kellerflaeche
     *
     * @param float $kellerflaeche
     * @return self
     */
    public function setKellerflaeche($kellerflaeche)
    {
        $this->kellerflaeche = $kellerflaeche;
        return $this;
    }

    /**
     * Gets as fensterfrontQm
     *
     * @return float
     */
    public function getFensterfrontQm()
    {
        return $this->fensterfrontQm;
    }

    /**
     * Sets a new fensterfrontQm
     *
     * @param float $fensterfrontQm
     * @return self
     */
    public function setFensterfrontQm($fensterfrontQm)
    {
        $this->fensterfrontQm = $fensterfrontQm;
        return $this;
    }

    /**
     * Gets as grundstuecksfront
     *
     * @return float
     */
    public function getGrundstuecksfront()
    {
        return $this->grundstuecksfront;
    }

    /**
     * Sets a new grundstuecksfront
     *
     * @param float $grundstuecksfront
     * @return self
     */
    public function setGrundstuecksfront($grundstuecksfront)
    {
        $this->grundstuecksfront = $grundstuecksfront;
        return $this;
    }

    /**
     * Gets as dachbodenflaeche
     *
     * @return float
     */
    public function getDachbodenflaeche()
    {
        return $this->dachbodenflaeche;
    }

    /**
     * Sets a new dachbodenflaeche
     *
     * @param float $dachbodenflaeche
     * @return self
     */
    public function setDachbodenflaeche($dachbodenflaeche)
    {
        $this->dachbodenflaeche = $dachbodenflaeche;
        return $this;
    }

    /**
     * Gets as teilbarAb
     *
     * @return float
     */
    public function getTeilbarAb()
    {
        return $this->teilbarAb;
    }

    /**
     * Sets a new teilbarAb
     *
     * @param float $teilbarAb
     * @return self
     */
    public function setTeilbarAb($teilbarAb)
    {
        $this->teilbarAb = $teilbarAb;
        return $this;
    }

    /**
     * Gets as beheizbareFlaeche
     *
     * @return float
     */
    public function getBeheizbareFlaeche()
    {
        return $this->beheizbareFlaeche;
    }

    /**
     * Sets a new beheizbareFlaeche
     *
     * @param float $beheizbareFlaeche
     * @return self
     */
    public function setBeheizbareFlaeche($beheizbareFlaeche)
    {
        $this->beheizbareFlaeche = $beheizbareFlaeche;
        return $this;
    }

    /**
     * Gets as anzahlStellplaetze
     *
     * @return int
     */
    public function getAnzahlStellplaetze()
    {
        return $this->anzahlStellplaetze;
    }

    /**
     * Sets a new anzahlStellplaetze
     *
     * @param int $anzahlStellplaetze
     * @return self
     */
    public function setAnzahlStellplaetze($anzahlStellplaetze)
    {
        $this->anzahlStellplaetze = $anzahlStellplaetze;
        return $this;
    }

    /**
     * Gets as plaetzeGastraum
     *
     * @return float
     */
    public function getPlaetzeGastraum()
    {
        return $this->plaetzeGastraum;
    }

    /**
     * Sets a new plaetzeGastraum
     *
     * @param float $plaetzeGastraum
     * @return self
     */
    public function setPlaetzeGastraum($plaetzeGastraum)
    {
        $this->plaetzeGastraum = $plaetzeGastraum;
        return $this;
    }

    /**
     * Gets as anzahlBetten
     *
     * @return float
     */
    public function getAnzahlBetten()
    {
        return $this->anzahlBetten;
    }

    /**
     * Sets a new anzahlBetten
     *
     * @param float $anzahlBetten
     * @return self
     */
    public function setAnzahlBetten($anzahlBetten)
    {
        $this->anzahlBetten = $anzahlBetten;
        return $this;
    }

    /**
     * Gets as anzahlTagungsraeume
     *
     * @return float
     */
    public function getAnzahlTagungsraeume()
    {
        return $this->anzahlTagungsraeume;
    }

    /**
     * Sets a new anzahlTagungsraeume
     *
     * @param float $anzahlTagungsraeume
     * @return self
     */
    public function setAnzahlTagungsraeume($anzahlTagungsraeume)
    {
        $this->anzahlTagungsraeume = $anzahlTagungsraeume;
        return $this;
    }

    /**
     * Gets as vermietbareFlaeche
     *
     * @return float
     */
    public function getVermietbareFlaeche()
    {
        return $this->vermietbareFlaeche;
    }

    /**
     * Sets a new vermietbareFlaeche
     *
     * @param float $vermietbareFlaeche
     * @return self
     */
    public function setVermietbareFlaeche($vermietbareFlaeche)
    {
        $this->vermietbareFlaeche = $vermietbareFlaeche;
        return $this;
    }

    /**
     * Gets as anzahlWohneinheiten
     *
     * @return float
     */
    public function getAnzahlWohneinheiten()
    {
        return $this->anzahlWohneinheiten;
    }

    /**
     * Sets a new anzahlWohneinheiten
     *
     * @param float $anzahlWohneinheiten
     * @return self
     */
    public function setAnzahlWohneinheiten($anzahlWohneinheiten)
    {
        $this->anzahlWohneinheiten = $anzahlWohneinheiten;
        return $this;
    }

    /**
     * Gets as anzahlGewerbeeinheiten
     *
     * @return float
     */
    public function getAnzahlGewerbeeinheiten()
    {
        return $this->anzahlGewerbeeinheiten;
    }

    /**
     * Sets a new anzahlGewerbeeinheiten
     *
     * @param float $anzahlGewerbeeinheiten
     * @return self
     */
    public function setAnzahlGewerbeeinheiten($anzahlGewerbeeinheiten)
    {
        $this->anzahlGewerbeeinheiten = $anzahlGewerbeeinheiten;
        return $this;
    }

    /**
     * Gets as einliegerwohnung
     *
     * @return bool
     */
    public function getEinliegerwohnung()
    {
        return $this->einliegerwohnung;
    }

    /**
     * Sets a new einliegerwohnung
     *
     * @param bool $einliegerwohnung
     * @return self
     */
    public function setEinliegerwohnung($einliegerwohnung)
    {
        $this->einliegerwohnung = $einliegerwohnung;
        return $this;
    }

    /**
     * Gets as kubatur
     *
     * @return float
     */
    public function getKubatur()
    {
        return $this->kubatur;
    }

    /**
     * Sets a new kubatur
     *
     * @param float $kubatur
     * @return self
     */
    public function setKubatur($kubatur)
    {
        $this->kubatur = $kubatur;
        return $this;
    }

    /**
     * Gets as ausnuetzungsziffer
     *
     * @return float
     */
    public function getAusnuetzungsziffer()
    {
        return $this->ausnuetzungsziffer;
    }

    /**
     * Sets a new ausnuetzungsziffer
     *
     * @param float $ausnuetzungsziffer
     * @return self
     */
    public function setAusnuetzungsziffer($ausnuetzungsziffer)
    {
        $this->ausnuetzungsziffer = $ausnuetzungsziffer;
        return $this;
    }

    /**
     * Gets as flaechevon
     *
     * @return float
     */
    public function getFlaechevon()
    {
        return $this->flaechevon;
    }

    /**
     * Sets a new flaechevon
     *
     * @param float $flaechevon
     * @return self
     */
    public function setFlaechevon($flaechevon)
    {
        $this->flaechevon = $flaechevon;
        return $this;
    }

    /**
     * Gets as flaechebis
     *
     * @return float
     */
    public function getFlaechebis()
    {
        return $this->flaechebis;
    }

    /**
     * Sets a new flaechebis
     *
     * @param float $flaechebis
     * @return self
     */
    public function setFlaechebis($flaechebis)
    {
        $this->flaechebis = $flaechebis;
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

