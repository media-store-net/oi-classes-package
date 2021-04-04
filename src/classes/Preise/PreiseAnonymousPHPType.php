<?php

namespace MediaStoreNet\OpenImmo\Preise;

/**
 * Class representing PreiseAnonymousPHPType
 */
class PreiseAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Kaufpreis $kaufpreis
     */
    private $kaufpreis = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Kaufpreisnetto $kaufpreisnetto
     */
    private $kaufpreisnetto = null;

    /**
     * @var float $kaufpreisbrutto
     */
    private $kaufpreisbrutto = null;

    /**
     * @var float $nettokaltmiete
     */
    private $nettokaltmiete = null;

    /**
     * @var float $kaltmiete
     */
    private $kaltmiete = null;

    /**
     * @var float $warmmiete
     */
    private $warmmiete = null;

    /**
     * @var float $nebenkosten
     */
    private $nebenkosten = null;

    /**
     * @var bool $heizkostenEnthalten
     */
    private $heizkostenEnthalten = null;

    /**
     * @var float $heizkosten
     */
    private $heizkosten = null;

    /**
     * @var bool $zzgMehrwertsteuer
     */
    private $zzgMehrwertsteuer = null;

    /**
     * @var float $mietzuschlaege
     */
    private $mietzuschlaege = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Hauptmietzinsnetto $hauptmietzinsnetto
     */
    private $hauptmietzinsnetto = null;

    /**
     * @var float $pauschalmiete
     */
    private $pauschalmiete = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Betriebskostennetto $betriebskostennetto
     */
    private $betriebskostennetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Evbnetto $evbnetto
     */
    private $evbnetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Gesamtmietenetto $gesamtmietenetto
     */
    private $gesamtmietenetto = null;

    /**
     * @var float $gesamtmietebrutto
     */
    private $gesamtmietebrutto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Gesamtbelastungnetto $gesamtbelastungnetto
     */
    private $gesamtbelastungnetto = null;

    /**
     * @var float $gesamtbelastungbrutto
     */
    private $gesamtbelastungbrutto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Gesamtkostenprom2von $gesamtkostenprom2von
     */
    private $gesamtkostenprom2von = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Heizkostennetto $heizkostennetto
     */
    private $heizkostennetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Monatlichekostennetto $monatlichekostennetto
     */
    private $monatlichekostennetto = null;

    /**
     * @var float $monatlichekostenbrutto
     */
    private $monatlichekostenbrutto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Nebenkostenprom2von $nebenkostenprom2von
     */
    private $nebenkostenprom2von = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Ruecklagenetto $ruecklagenetto
     */
    private $ruecklagenetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Sonstigekostennetto $sonstigekostennetto
     */
    private $sonstigekostennetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Sonstigemietenetto $sonstigemietenetto
     */
    private $sonstigemietenetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Summemietenetto $summemietenetto
     */
    private $summemietenetto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Nettomieteprom2von $nettomieteprom2von
     */
    private $nettomieteprom2von = null;

    /**
     * @var float $pacht
     */
    private $pacht = null;

    /**
     * @var float $erbpacht
     */
    private $erbpacht = null;

    /**
     * @var float $hausgeld
     */
    private $hausgeld = null;

    /**
     * @var float $abstand
     */
    private $abstand = null;

    /**
     * @var \DateTime $preisZeitraumVon
     */
    private $preisZeitraumVon = null;

    /**
     * @var \DateTime $preisZeitraumBis
     */
    private $preisZeitraumBis = null;

    /**
     * @var \MediaStoreNet\OpenImmo\PreisZeiteinheit $preisZeiteinheit
     */
    private $preisZeiteinheit = null;

    /**
     * @var float $mietpreisProQm
     */
    private $mietpreisProQm = null;

    /**
     * @var float $kaufpreisProQm
     */
    private $kaufpreisProQm = null;

    /**
     * @var bool $provisionspflichtig
     */
    private $provisionspflichtig = null;

    /**
     * @var \MediaStoreNet\OpenImmo\ProvisionTeilen $provisionTeilen
     */
    private $provisionTeilen = null;

    /**
     * @var \MediaStoreNet\OpenImmo\InnenCourtage $innenCourtage
     */
    private $innenCourtage = null;

    /**
     * @var \MediaStoreNet\OpenImmo\AussenCourtage $aussenCourtage
     */
    private $aussenCourtage = null;

    /**
     * @var string $courtageHinweis
     */
    private $courtageHinweis = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Provisionnetto $provisionnetto
     */
    private $provisionnetto = null;

    /**
     * @var float $provisionbrutto
     */
    private $provisionbrutto = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Waehrung $waehrung
     */
    private $waehrung = null;

    /**
     * @var float $mwstSatz
     */
    private $mwstSatz = null;

    /**
     * @var float $mwstGesamt
     */
    private $mwstGesamt = null;

    /**
     * @var string $freitextPreis
     */
    private $freitextPreis = null;

    /**
     * @var string $xFache
     */
    private $xFache = null;

    /**
     * @var float $nettorendite
     */
    private $nettorendite = null;

    /**
     * @var float $nettorenditeSoll
     */
    private $nettorenditeSoll = null;

    /**
     * @var float $nettorenditeIst
     */
    private $nettorenditeIst = null;

    /**
     * @var \MediaStoreNet\OpenImmo\MieteinnahmenIst $mieteinnahmenIst
     */
    private $mieteinnahmenIst = null;

    /**
     * @var \MediaStoreNet\OpenImmo\MieteinnahmenSoll $mieteinnahmenSoll
     */
    private $mieteinnahmenSoll = null;

    /**
     * @var float $erschliessungskosten
     */
    private $erschliessungskosten = null;

    /**
     * @var float $kaution
     */
    private $kaution = null;

    /**
     * @var string $kautionText
     */
    private $kautionText = null;

    /**
     * @var float $geschaeftsguthaben
     */
    private $geschaeftsguthaben = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpCarport $stpCarport
     */
    private $stpCarport = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpDuplex $stpDuplex
     */
    private $stpDuplex = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpFreiplatz $stpFreiplatz
     */
    private $stpFreiplatz = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpGarage $stpGarage
     */
    private $stpGarage = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpParkhaus $stpParkhaus
     */
    private $stpParkhaus = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpTiefgarage $stpTiefgarage
     */
    private $stpTiefgarage = null;

    /**
     * @var \MediaStoreNet\OpenImmo\StpSonstige[] $stpSonstige
     */
    private $stpSonstige = [
        
    ];

    /**
     * @var float $richtpreis
     */
    private $richtpreis = null;

    /**
     * @var float $richtpreisprom2
     */
    private $richtpreisprom2 = null;

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
     * Gets as kaufpreis
     *
     * @return \MediaStoreNet\OpenImmo\Kaufpreis
     */
    public function getKaufpreis()
    {
        return $this->kaufpreis;
    }

    /**
     * Sets a new kaufpreis
     *
     * @param \MediaStoreNet\OpenImmo\Kaufpreis $kaufpreis
     * @return self
     */
    public function setKaufpreis(\MediaStoreNet\OpenImmo\Kaufpreis $kaufpreis)
    {
        $this->kaufpreis = $kaufpreis;
        return $this;
    }

    /**
     * Gets as kaufpreisnetto
     *
     * @return \MediaStoreNet\OpenImmo\Kaufpreisnetto
     */
    public function getKaufpreisnetto()
    {
        return $this->kaufpreisnetto;
    }

    /**
     * Sets a new kaufpreisnetto
     *
     * @param \MediaStoreNet\OpenImmo\Kaufpreisnetto $kaufpreisnetto
     * @return self
     */
    public function setKaufpreisnetto(\MediaStoreNet\OpenImmo\Kaufpreisnetto $kaufpreisnetto)
    {
        $this->kaufpreisnetto = $kaufpreisnetto;
        return $this;
    }

    /**
     * Gets as kaufpreisbrutto
     *
     * @return float
     */
    public function getKaufpreisbrutto()
    {
        return $this->kaufpreisbrutto;
    }

    /**
     * Sets a new kaufpreisbrutto
     *
     * @param float $kaufpreisbrutto
     * @return self
     */
    public function setKaufpreisbrutto($kaufpreisbrutto)
    {
        $this->kaufpreisbrutto = $kaufpreisbrutto;
        return $this;
    }

    /**
     * Gets as nettokaltmiete
     *
     * @return float
     */
    public function getNettokaltmiete()
    {
        return $this->nettokaltmiete;
    }

    /**
     * Sets a new nettokaltmiete
     *
     * @param float $nettokaltmiete
     * @return self
     */
    public function setNettokaltmiete($nettokaltmiete)
    {
        $this->nettokaltmiete = $nettokaltmiete;
        return $this;
    }

    /**
     * Gets as kaltmiete
     *
     * @return float
     */
    public function getKaltmiete()
    {
        return $this->kaltmiete;
    }

    /**
     * Sets a new kaltmiete
     *
     * @param float $kaltmiete
     * @return self
     */
    public function setKaltmiete($kaltmiete)
    {
        $this->kaltmiete = $kaltmiete;
        return $this;
    }

    /**
     * Gets as warmmiete
     *
     * @return float
     */
    public function getWarmmiete()
    {
        return $this->warmmiete;
    }

    /**
     * Sets a new warmmiete
     *
     * @param float $warmmiete
     * @return self
     */
    public function setWarmmiete($warmmiete)
    {
        $this->warmmiete = $warmmiete;
        return $this;
    }

    /**
     * Gets as nebenkosten
     *
     * @return float
     */
    public function getNebenkosten()
    {
        return $this->nebenkosten;
    }

    /**
     * Sets a new nebenkosten
     *
     * @param float $nebenkosten
     * @return self
     */
    public function setNebenkosten($nebenkosten)
    {
        $this->nebenkosten = $nebenkosten;
        return $this;
    }

    /**
     * Gets as heizkostenEnthalten
     *
     * @return bool
     */
    public function getHeizkostenEnthalten()
    {
        return $this->heizkostenEnthalten;
    }

    /**
     * Sets a new heizkostenEnthalten
     *
     * @param bool $heizkostenEnthalten
     * @return self
     */
    public function setHeizkostenEnthalten($heizkostenEnthalten)
    {
        $this->heizkostenEnthalten = $heizkostenEnthalten;
        return $this;
    }

    /**
     * Gets as heizkosten
     *
     * @return float
     */
    public function getHeizkosten()
    {
        return $this->heizkosten;
    }

    /**
     * Sets a new heizkosten
     *
     * @param float $heizkosten
     * @return self
     */
    public function setHeizkosten($heizkosten)
    {
        $this->heizkosten = $heizkosten;
        return $this;
    }

    /**
     * Gets as zzgMehrwertsteuer
     *
     * @return bool
     */
    public function getZzgMehrwertsteuer()
    {
        return $this->zzgMehrwertsteuer;
    }

    /**
     * Sets a new zzgMehrwertsteuer
     *
     * @param bool $zzgMehrwertsteuer
     * @return self
     */
    public function setZzgMehrwertsteuer($zzgMehrwertsteuer)
    {
        $this->zzgMehrwertsteuer = $zzgMehrwertsteuer;
        return $this;
    }

    /**
     * Gets as mietzuschlaege
     *
     * @return float
     */
    public function getMietzuschlaege()
    {
        return $this->mietzuschlaege;
    }

    /**
     * Sets a new mietzuschlaege
     *
     * @param float $mietzuschlaege
     * @return self
     */
    public function setMietzuschlaege($mietzuschlaege)
    {
        $this->mietzuschlaege = $mietzuschlaege;
        return $this;
    }

    /**
     * Gets as hauptmietzinsnetto
     *
     * @return \MediaStoreNet\OpenImmo\Hauptmietzinsnetto
     */
    public function getHauptmietzinsnetto()
    {
        return $this->hauptmietzinsnetto;
    }

    /**
     * Sets a new hauptmietzinsnetto
     *
     * @param \MediaStoreNet\OpenImmo\Hauptmietzinsnetto $hauptmietzinsnetto
     * @return self
     */
    public function setHauptmietzinsnetto(\MediaStoreNet\OpenImmo\Hauptmietzinsnetto $hauptmietzinsnetto)
    {
        $this->hauptmietzinsnetto = $hauptmietzinsnetto;
        return $this;
    }

    /**
     * Gets as pauschalmiete
     *
     * @return float
     */
    public function getPauschalmiete()
    {
        return $this->pauschalmiete;
    }

    /**
     * Sets a new pauschalmiete
     *
     * @param float $pauschalmiete
     * @return self
     */
    public function setPauschalmiete($pauschalmiete)
    {
        $this->pauschalmiete = $pauschalmiete;
        return $this;
    }

    /**
     * Gets as betriebskostennetto
     *
     * @return \MediaStoreNet\OpenImmo\Betriebskostennetto
     */
    public function getBetriebskostennetto()
    {
        return $this->betriebskostennetto;
    }

    /**
     * Sets a new betriebskostennetto
     *
     * @param \MediaStoreNet\OpenImmo\Betriebskostennetto $betriebskostennetto
     * @return self
     */
    public function setBetriebskostennetto(\MediaStoreNet\OpenImmo\Betriebskostennetto $betriebskostennetto)
    {
        $this->betriebskostennetto = $betriebskostennetto;
        return $this;
    }

    /**
     * Gets as evbnetto
     *
     * @return \MediaStoreNet\OpenImmo\Evbnetto
     */
    public function getEvbnetto()
    {
        return $this->evbnetto;
    }

    /**
     * Sets a new evbnetto
     *
     * @param \MediaStoreNet\OpenImmo\Evbnetto $evbnetto
     * @return self
     */
    public function setEvbnetto(\MediaStoreNet\OpenImmo\Evbnetto $evbnetto)
    {
        $this->evbnetto = $evbnetto;
        return $this;
    }

    /**
     * Gets as gesamtmietenetto
     *
     * @return \MediaStoreNet\OpenImmo\Gesamtmietenetto
     */
    public function getGesamtmietenetto()
    {
        return $this->gesamtmietenetto;
    }

    /**
     * Sets a new gesamtmietenetto
     *
     * @param \MediaStoreNet\OpenImmo\Gesamtmietenetto $gesamtmietenetto
     * @return self
     */
    public function setGesamtmietenetto(\MediaStoreNet\OpenImmo\Gesamtmietenetto $gesamtmietenetto)
    {
        $this->gesamtmietenetto = $gesamtmietenetto;
        return $this;
    }

    /**
     * Gets as gesamtmietebrutto
     *
     * @return float
     */
    public function getGesamtmietebrutto()
    {
        return $this->gesamtmietebrutto;
    }

    /**
     * Sets a new gesamtmietebrutto
     *
     * @param float $gesamtmietebrutto
     * @return self
     */
    public function setGesamtmietebrutto($gesamtmietebrutto)
    {
        $this->gesamtmietebrutto = $gesamtmietebrutto;
        return $this;
    }

    /**
     * Gets as gesamtbelastungnetto
     *
     * @return \MediaStoreNet\OpenImmo\Gesamtbelastungnetto
     */
    public function getGesamtbelastungnetto()
    {
        return $this->gesamtbelastungnetto;
    }

    /**
     * Sets a new gesamtbelastungnetto
     *
     * @param \MediaStoreNet\OpenImmo\Gesamtbelastungnetto $gesamtbelastungnetto
     * @return self
     */
    public function setGesamtbelastungnetto(\MediaStoreNet\OpenImmo\Gesamtbelastungnetto $gesamtbelastungnetto)
    {
        $this->gesamtbelastungnetto = $gesamtbelastungnetto;
        return $this;
    }

    /**
     * Gets as gesamtbelastungbrutto
     *
     * @return float
     */
    public function getGesamtbelastungbrutto()
    {
        return $this->gesamtbelastungbrutto;
    }

    /**
     * Sets a new gesamtbelastungbrutto
     *
     * @param float $gesamtbelastungbrutto
     * @return self
     */
    public function setGesamtbelastungbrutto($gesamtbelastungbrutto)
    {
        $this->gesamtbelastungbrutto = $gesamtbelastungbrutto;
        return $this;
    }

    /**
     * Gets as gesamtkostenprom2von
     *
     * @return \MediaStoreNet\OpenImmo\Gesamtkostenprom2von
     */
    public function getGesamtkostenprom2von()
    {
        return $this->gesamtkostenprom2von;
    }

    /**
     * Sets a new gesamtkostenprom2von
     *
     * @param \MediaStoreNet\OpenImmo\Gesamtkostenprom2von $gesamtkostenprom2von
     * @return self
     */
    public function setGesamtkostenprom2von(\MediaStoreNet\OpenImmo\Gesamtkostenprom2von $gesamtkostenprom2von)
    {
        $this->gesamtkostenprom2von = $gesamtkostenprom2von;
        return $this;
    }

    /**
     * Gets as heizkostennetto
     *
     * @return \MediaStoreNet\OpenImmo\Heizkostennetto
     */
    public function getHeizkostennetto()
    {
        return $this->heizkostennetto;
    }

    /**
     * Sets a new heizkostennetto
     *
     * @param \MediaStoreNet\OpenImmo\Heizkostennetto $heizkostennetto
     * @return self
     */
    public function setHeizkostennetto(\MediaStoreNet\OpenImmo\Heizkostennetto $heizkostennetto)
    {
        $this->heizkostennetto = $heizkostennetto;
        return $this;
    }

    /**
     * Gets as monatlichekostennetto
     *
     * @return \MediaStoreNet\OpenImmo\Monatlichekostennetto
     */
    public function getMonatlichekostennetto()
    {
        return $this->monatlichekostennetto;
    }

    /**
     * Sets a new monatlichekostennetto
     *
     * @param \MediaStoreNet\OpenImmo\Monatlichekostennetto $monatlichekostennetto
     * @return self
     */
    public function setMonatlichekostennetto(\MediaStoreNet\OpenImmo\Monatlichekostennetto $monatlichekostennetto)
    {
        $this->monatlichekostennetto = $monatlichekostennetto;
        return $this;
    }

    /**
     * Gets as monatlichekostenbrutto
     *
     * @return float
     */
    public function getMonatlichekostenbrutto()
    {
        return $this->monatlichekostenbrutto;
    }

    /**
     * Sets a new monatlichekostenbrutto
     *
     * @param float $monatlichekostenbrutto
     * @return self
     */
    public function setMonatlichekostenbrutto($monatlichekostenbrutto)
    {
        $this->monatlichekostenbrutto = $monatlichekostenbrutto;
        return $this;
    }

    /**
     * Gets as nebenkostenprom2von
     *
     * @return \MediaStoreNet\OpenImmo\Nebenkostenprom2von
     */
    public function getNebenkostenprom2von()
    {
        return $this->nebenkostenprom2von;
    }

    /**
     * Sets a new nebenkostenprom2von
     *
     * @param \MediaStoreNet\OpenImmo\Nebenkostenprom2von $nebenkostenprom2von
     * @return self
     */
    public function setNebenkostenprom2von(\MediaStoreNet\OpenImmo\Nebenkostenprom2von $nebenkostenprom2von)
    {
        $this->nebenkostenprom2von = $nebenkostenprom2von;
        return $this;
    }

    /**
     * Gets as ruecklagenetto
     *
     * @return \MediaStoreNet\OpenImmo\Ruecklagenetto
     */
    public function getRuecklagenetto()
    {
        return $this->ruecklagenetto;
    }

    /**
     * Sets a new ruecklagenetto
     *
     * @param \MediaStoreNet\OpenImmo\Ruecklagenetto $ruecklagenetto
     * @return self
     */
    public function setRuecklagenetto(\MediaStoreNet\OpenImmo\Ruecklagenetto $ruecklagenetto)
    {
        $this->ruecklagenetto = $ruecklagenetto;
        return $this;
    }

    /**
     * Gets as sonstigekostennetto
     *
     * @return \MediaStoreNet\OpenImmo\Sonstigekostennetto
     */
    public function getSonstigekostennetto()
    {
        return $this->sonstigekostennetto;
    }

    /**
     * Sets a new sonstigekostennetto
     *
     * @param \MediaStoreNet\OpenImmo\Sonstigekostennetto $sonstigekostennetto
     * @return self
     */
    public function setSonstigekostennetto(\MediaStoreNet\OpenImmo\Sonstigekostennetto $sonstigekostennetto)
    {
        $this->sonstigekostennetto = $sonstigekostennetto;
        return $this;
    }

    /**
     * Gets as sonstigemietenetto
     *
     * @return \MediaStoreNet\OpenImmo\Sonstigemietenetto
     */
    public function getSonstigemietenetto()
    {
        return $this->sonstigemietenetto;
    }

    /**
     * Sets a new sonstigemietenetto
     *
     * @param \MediaStoreNet\OpenImmo\Sonstigemietenetto $sonstigemietenetto
     * @return self
     */
    public function setSonstigemietenetto(\MediaStoreNet\OpenImmo\Sonstigemietenetto $sonstigemietenetto)
    {
        $this->sonstigemietenetto = $sonstigemietenetto;
        return $this;
    }

    /**
     * Gets as summemietenetto
     *
     * @return \MediaStoreNet\OpenImmo\Summemietenetto
     */
    public function getSummemietenetto()
    {
        return $this->summemietenetto;
    }

    /**
     * Sets a new summemietenetto
     *
     * @param \MediaStoreNet\OpenImmo\Summemietenetto $summemietenetto
     * @return self
     */
    public function setSummemietenetto(\MediaStoreNet\OpenImmo\Summemietenetto $summemietenetto)
    {
        $this->summemietenetto = $summemietenetto;
        return $this;
    }

    /**
     * Gets as nettomieteprom2von
     *
     * @return \MediaStoreNet\OpenImmo\Nettomieteprom2von
     */
    public function getNettomieteprom2von()
    {
        return $this->nettomieteprom2von;
    }

    /**
     * Sets a new nettomieteprom2von
     *
     * @param \MediaStoreNet\OpenImmo\Nettomieteprom2von $nettomieteprom2von
     * @return self
     */
    public function setNettomieteprom2von(\MediaStoreNet\OpenImmo\Nettomieteprom2von $nettomieteprom2von)
    {
        $this->nettomieteprom2von = $nettomieteprom2von;
        return $this;
    }

    /**
     * Gets as pacht
     *
     * @return float
     */
    public function getPacht()
    {
        return $this->pacht;
    }

    /**
     * Sets a new pacht
     *
     * @param float $pacht
     * @return self
     */
    public function setPacht($pacht)
    {
        $this->pacht = $pacht;
        return $this;
    }

    /**
     * Gets as erbpacht
     *
     * @return float
     */
    public function getErbpacht()
    {
        return $this->erbpacht;
    }

    /**
     * Sets a new erbpacht
     *
     * @param float $erbpacht
     * @return self
     */
    public function setErbpacht($erbpacht)
    {
        $this->erbpacht = $erbpacht;
        return $this;
    }

    /**
     * Gets as hausgeld
     *
     * @return float
     */
    public function getHausgeld()
    {
        return $this->hausgeld;
    }

    /**
     * Sets a new hausgeld
     *
     * @param float $hausgeld
     * @return self
     */
    public function setHausgeld($hausgeld)
    {
        $this->hausgeld = $hausgeld;
        return $this;
    }

    /**
     * Gets as abstand
     *
     * @return float
     */
    public function getAbstand()
    {
        return $this->abstand;
    }

    /**
     * Sets a new abstand
     *
     * @param float $abstand
     * @return self
     */
    public function setAbstand($abstand)
    {
        $this->abstand = $abstand;
        return $this;
    }

    /**
     * Gets as preisZeitraumVon
     *
     * @return \DateTime
     */
    public function getPreisZeitraumVon()
    {
        return $this->preisZeitraumVon;
    }

    /**
     * Sets a new preisZeitraumVon
     *
     * @param \DateTime $preisZeitraumVon
     * @return self
     */
    public function setPreisZeitraumVon(\DateTime $preisZeitraumVon)
    {
        $this->preisZeitraumVon = $preisZeitraumVon;
        return $this;
    }

    /**
     * Gets as preisZeitraumBis
     *
     * @return \DateTime
     */
    public function getPreisZeitraumBis()
    {
        return $this->preisZeitraumBis;
    }

    /**
     * Sets a new preisZeitraumBis
     *
     * @param \DateTime $preisZeitraumBis
     * @return self
     */
    public function setPreisZeitraumBis(\DateTime $preisZeitraumBis)
    {
        $this->preisZeitraumBis = $preisZeitraumBis;
        return $this;
    }

    /**
     * Gets as preisZeiteinheit
     *
     * @return \MediaStoreNet\OpenImmo\PreisZeiteinheit
     */
    public function getPreisZeiteinheit()
    {
        return $this->preisZeiteinheit;
    }

    /**
     * Sets a new preisZeiteinheit
     *
     * @param \MediaStoreNet\OpenImmo\PreisZeiteinheit $preisZeiteinheit
     * @return self
     */
    public function setPreisZeiteinheit(\MediaStoreNet\OpenImmo\PreisZeiteinheit $preisZeiteinheit)
    {
        $this->preisZeiteinheit = $preisZeiteinheit;
        return $this;
    }

    /**
     * Gets as mietpreisProQm
     *
     * @return float
     */
    public function getMietpreisProQm()
    {
        return $this->mietpreisProQm;
    }

    /**
     * Sets a new mietpreisProQm
     *
     * @param float $mietpreisProQm
     * @return self
     */
    public function setMietpreisProQm($mietpreisProQm)
    {
        $this->mietpreisProQm = $mietpreisProQm;
        return $this;
    }

    /**
     * Gets as kaufpreisProQm
     *
     * @return float
     */
    public function getKaufpreisProQm()
    {
        return $this->kaufpreisProQm;
    }

    /**
     * Sets a new kaufpreisProQm
     *
     * @param float $kaufpreisProQm
     * @return self
     */
    public function setKaufpreisProQm($kaufpreisProQm)
    {
        $this->kaufpreisProQm = $kaufpreisProQm;
        return $this;
    }

    /**
     * Gets as provisionspflichtig
     *
     * @return bool
     */
    public function getProvisionspflichtig()
    {
        return $this->provisionspflichtig;
    }

    /**
     * Sets a new provisionspflichtig
     *
     * @param bool $provisionspflichtig
     * @return self
     */
    public function setProvisionspflichtig($provisionspflichtig)
    {
        $this->provisionspflichtig = $provisionspflichtig;
        return $this;
    }

    /**
     * Gets as provisionTeilen
     *
     * @return \MediaStoreNet\OpenImmo\ProvisionTeilen
     */
    public function getProvisionTeilen()
    {
        return $this->provisionTeilen;
    }

    /**
     * Sets a new provisionTeilen
     *
     * @param \MediaStoreNet\OpenImmo\ProvisionTeilen $provisionTeilen
     * @return self
     */
    public function setProvisionTeilen(\MediaStoreNet\OpenImmo\ProvisionTeilen $provisionTeilen)
    {
        $this->provisionTeilen = $provisionTeilen;
        return $this;
    }

    /**
     * Gets as innenCourtage
     *
     * @return \MediaStoreNet\OpenImmo\InnenCourtage
     */
    public function getInnenCourtage()
    {
        return $this->innenCourtage;
    }

    /**
     * Sets a new innenCourtage
     *
     * @param \MediaStoreNet\OpenImmo\InnenCourtage $innenCourtage
     * @return self
     */
    public function setInnenCourtage(\MediaStoreNet\OpenImmo\InnenCourtage $innenCourtage)
    {
        $this->innenCourtage = $innenCourtage;
        return $this;
    }

    /**
     * Gets as aussenCourtage
     *
     * @return \MediaStoreNet\OpenImmo\AussenCourtage
     */
    public function getAussenCourtage()
    {
        return $this->aussenCourtage;
    }

    /**
     * Sets a new aussenCourtage
     *
     * @param \MediaStoreNet\OpenImmo\AussenCourtage $aussenCourtage
     * @return self
     */
    public function setAussenCourtage(\MediaStoreNet\OpenImmo\AussenCourtage $aussenCourtage)
    {
        $this->aussenCourtage = $aussenCourtage;
        return $this;
    }

    /**
     * Gets as courtageHinweis
     *
     * @return string
     */
    public function getCourtageHinweis()
    {
        return $this->courtageHinweis;
    }

    /**
     * Sets a new courtageHinweis
     *
     * @param string $courtageHinweis
     * @return self
     */
    public function setCourtageHinweis($courtageHinweis)
    {
        $this->courtageHinweis = $courtageHinweis;
        return $this;
    }

    /**
     * Gets as provisionnetto
     *
     * @return \MediaStoreNet\OpenImmo\Provisionnetto
     */
    public function getProvisionnetto()
    {
        return $this->provisionnetto;
    }

    /**
     * Sets a new provisionnetto
     *
     * @param \MediaStoreNet\OpenImmo\Provisionnetto $provisionnetto
     * @return self
     */
    public function setProvisionnetto(\MediaStoreNet\OpenImmo\Provisionnetto $provisionnetto)
    {
        $this->provisionnetto = $provisionnetto;
        return $this;
    }

    /**
     * Gets as provisionbrutto
     *
     * @return float
     */
    public function getProvisionbrutto()
    {
        return $this->provisionbrutto;
    }

    /**
     * Sets a new provisionbrutto
     *
     * @param float $provisionbrutto
     * @return self
     */
    public function setProvisionbrutto($provisionbrutto)
    {
        $this->provisionbrutto = $provisionbrutto;
        return $this;
    }

    /**
     * Gets as waehrung
     *
     * @return \MediaStoreNet\OpenImmo\Waehrung
     */
    public function getWaehrung()
    {
        return $this->waehrung;
    }

    /**
     * Sets a new waehrung
     *
     * @param \MediaStoreNet\OpenImmo\Waehrung $waehrung
     * @return self
     */
    public function setWaehrung(\MediaStoreNet\OpenImmo\Waehrung $waehrung)
    {
        $this->waehrung = $waehrung;
        return $this;
    }

    /**
     * Gets as mwstSatz
     *
     * @return float
     */
    public function getMwstSatz()
    {
        return $this->mwstSatz;
    }

    /**
     * Sets a new mwstSatz
     *
     * @param float $mwstSatz
     * @return self
     */
    public function setMwstSatz($mwstSatz)
    {
        $this->mwstSatz = $mwstSatz;
        return $this;
    }

    /**
     * Gets as mwstGesamt
     *
     * @return float
     */
    public function getMwstGesamt()
    {
        return $this->mwstGesamt;
    }

    /**
     * Sets a new mwstGesamt
     *
     * @param float $mwstGesamt
     * @return self
     */
    public function setMwstGesamt($mwstGesamt)
    {
        $this->mwstGesamt = $mwstGesamt;
        return $this;
    }

    /**
     * Gets as freitextPreis
     *
     * @return string
     */
    public function getFreitextPreis()
    {
        return $this->freitextPreis;
    }

    /**
     * Sets a new freitextPreis
     *
     * @param string $freitextPreis
     * @return self
     */
    public function setFreitextPreis($freitextPreis)
    {
        $this->freitextPreis = $freitextPreis;
        return $this;
    }

    /**
     * Gets as xFache
     *
     * @return string
     */
    public function getXFache()
    {
        return $this->xFache;
    }

    /**
     * Sets a new xFache
     *
     * @param string $xFache
     * @return self
     */
    public function setXFache($xFache)
    {
        $this->xFache = $xFache;
        return $this;
    }

    /**
     * Gets as nettorendite
     *
     * @return float
     */
    public function getNettorendite()
    {
        return $this->nettorendite;
    }

    /**
     * Sets a new nettorendite
     *
     * @param float $nettorendite
     * @return self
     */
    public function setNettorendite($nettorendite)
    {
        $this->nettorendite = $nettorendite;
        return $this;
    }

    /**
     * Gets as nettorenditeSoll
     *
     * @return float
     */
    public function getNettorenditeSoll()
    {
        return $this->nettorenditeSoll;
    }

    /**
     * Sets a new nettorenditeSoll
     *
     * @param float $nettorenditeSoll
     * @return self
     */
    public function setNettorenditeSoll($nettorenditeSoll)
    {
        $this->nettorenditeSoll = $nettorenditeSoll;
        return $this;
    }

    /**
     * Gets as nettorenditeIst
     *
     * @return float
     */
    public function getNettorenditeIst()
    {
        return $this->nettorenditeIst;
    }

    /**
     * Sets a new nettorenditeIst
     *
     * @param float $nettorenditeIst
     * @return self
     */
    public function setNettorenditeIst($nettorenditeIst)
    {
        $this->nettorenditeIst = $nettorenditeIst;
        return $this;
    }

    /**
     * Gets as mieteinnahmenIst
     *
     * @return \MediaStoreNet\OpenImmo\MieteinnahmenIst
     */
    public function getMieteinnahmenIst()
    {
        return $this->mieteinnahmenIst;
    }

    /**
     * Sets a new mieteinnahmenIst
     *
     * @param \MediaStoreNet\OpenImmo\MieteinnahmenIst $mieteinnahmenIst
     * @return self
     */
    public function setMieteinnahmenIst(\MediaStoreNet\OpenImmo\MieteinnahmenIst $mieteinnahmenIst)
    {
        $this->mieteinnahmenIst = $mieteinnahmenIst;
        return $this;
    }

    /**
     * Gets as mieteinnahmenSoll
     *
     * @return \MediaStoreNet\OpenImmo\MieteinnahmenSoll
     */
    public function getMieteinnahmenSoll()
    {
        return $this->mieteinnahmenSoll;
    }

    /**
     * Sets a new mieteinnahmenSoll
     *
     * @param \MediaStoreNet\OpenImmo\MieteinnahmenSoll $mieteinnahmenSoll
     * @return self
     */
    public function setMieteinnahmenSoll(\MediaStoreNet\OpenImmo\MieteinnahmenSoll $mieteinnahmenSoll)
    {
        $this->mieteinnahmenSoll = $mieteinnahmenSoll;
        return $this;
    }

    /**
     * Gets as erschliessungskosten
     *
     * @return float
     */
    public function getErschliessungskosten()
    {
        return $this->erschliessungskosten;
    }

    /**
     * Sets a new erschliessungskosten
     *
     * @param float $erschliessungskosten
     * @return self
     */
    public function setErschliessungskosten($erschliessungskosten)
    {
        $this->erschliessungskosten = $erschliessungskosten;
        return $this;
    }

    /**
     * Gets as kaution
     *
     * @return float
     */
    public function getKaution()
    {
        return $this->kaution;
    }

    /**
     * Sets a new kaution
     *
     * @param float $kaution
     * @return self
     */
    public function setKaution($kaution)
    {
        $this->kaution = $kaution;
        return $this;
    }

    /**
     * Gets as kautionText
     *
     * @return string
     */
    public function getKautionText()
    {
        return $this->kautionText;
    }

    /**
     * Sets a new kautionText
     *
     * @param string $kautionText
     * @return self
     */
    public function setKautionText($kautionText)
    {
        $this->kautionText = $kautionText;
        return $this;
    }

    /**
     * Gets as geschaeftsguthaben
     *
     * @return float
     */
    public function getGeschaeftsguthaben()
    {
        return $this->geschaeftsguthaben;
    }

    /**
     * Sets a new geschaeftsguthaben
     *
     * @param float $geschaeftsguthaben
     * @return self
     */
    public function setGeschaeftsguthaben($geschaeftsguthaben)
    {
        $this->geschaeftsguthaben = $geschaeftsguthaben;
        return $this;
    }

    /**
     * Gets as stpCarport
     *
     * @return \MediaStoreNet\OpenImmo\StpCarport
     */
    public function getStpCarport()
    {
        return $this->stpCarport;
    }

    /**
     * Sets a new stpCarport
     *
     * @param \MediaStoreNet\OpenImmo\StpCarport $stpCarport
     * @return self
     */
    public function setStpCarport(\MediaStoreNet\OpenImmo\StpCarport $stpCarport)
    {
        $this->stpCarport = $stpCarport;
        return $this;
    }

    /**
     * Gets as stpDuplex
     *
     * @return \MediaStoreNet\OpenImmo\StpDuplex
     */
    public function getStpDuplex()
    {
        return $this->stpDuplex;
    }

    /**
     * Sets a new stpDuplex
     *
     * @param \MediaStoreNet\OpenImmo\StpDuplex $stpDuplex
     * @return self
     */
    public function setStpDuplex(\MediaStoreNet\OpenImmo\StpDuplex $stpDuplex)
    {
        $this->stpDuplex = $stpDuplex;
        return $this;
    }

    /**
     * Gets as stpFreiplatz
     *
     * @return \MediaStoreNet\OpenImmo\StpFreiplatz
     */
    public function getStpFreiplatz()
    {
        return $this->stpFreiplatz;
    }

    /**
     * Sets a new stpFreiplatz
     *
     * @param \MediaStoreNet\OpenImmo\StpFreiplatz $stpFreiplatz
     * @return self
     */
    public function setStpFreiplatz(\MediaStoreNet\OpenImmo\StpFreiplatz $stpFreiplatz)
    {
        $this->stpFreiplatz = $stpFreiplatz;
        return $this;
    }

    /**
     * Gets as stpGarage
     *
     * @return \MediaStoreNet\OpenImmo\StpGarage
     */
    public function getStpGarage()
    {
        return $this->stpGarage;
    }

    /**
     * Sets a new stpGarage
     *
     * @param \MediaStoreNet\OpenImmo\StpGarage $stpGarage
     * @return self
     */
    public function setStpGarage(\MediaStoreNet\OpenImmo\StpGarage $stpGarage)
    {
        $this->stpGarage = $stpGarage;
        return $this;
    }

    /**
     * Gets as stpParkhaus
     *
     * @return \MediaStoreNet\OpenImmo\StpParkhaus
     */
    public function getStpParkhaus()
    {
        return $this->stpParkhaus;
    }

    /**
     * Sets a new stpParkhaus
     *
     * @param \MediaStoreNet\OpenImmo\StpParkhaus $stpParkhaus
     * @return self
     */
    public function setStpParkhaus(\MediaStoreNet\OpenImmo\StpParkhaus $stpParkhaus)
    {
        $this->stpParkhaus = $stpParkhaus;
        return $this;
    }

    /**
     * Gets as stpTiefgarage
     *
     * @return \MediaStoreNet\OpenImmo\StpTiefgarage
     */
    public function getStpTiefgarage()
    {
        return $this->stpTiefgarage;
    }

    /**
     * Sets a new stpTiefgarage
     *
     * @param \MediaStoreNet\OpenImmo\StpTiefgarage $stpTiefgarage
     * @return self
     */
    public function setStpTiefgarage(\MediaStoreNet\OpenImmo\StpTiefgarage $stpTiefgarage)
    {
        $this->stpTiefgarage = $stpTiefgarage;
        return $this;
    }

    /**
     * Adds as stpSonstige
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\StpSonstige $stpSonstige
     */
    public function addToStpSonstige(\MediaStoreNet\OpenImmo\StpSonstige $stpSonstige)
    {
        $this->stpSonstige[] = $stpSonstige;
        return $this;
    }

    /**
     * isset stpSonstige
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStpSonstige($index)
    {
        return isset($this->stpSonstige[$index]);
    }

    /**
     * unset stpSonstige
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStpSonstige($index)
    {
        unset($this->stpSonstige[$index]);
    }

    /**
     * Gets as stpSonstige
     *
     * @return \MediaStoreNet\OpenImmo\StpSonstige[]
     */
    public function getStpSonstige()
    {
        return $this->stpSonstige;
    }

    /**
     * Sets a new stpSonstige
     *
     * @param \MediaStoreNet\OpenImmo\StpSonstige[] $stpSonstige
     * @return self
     */
    public function setStpSonstige(array $stpSonstige)
    {
        $this->stpSonstige = $stpSonstige;
        return $this;
    }

    /**
     * Gets as richtpreis
     *
     * @return float
     */
    public function getRichtpreis()
    {
        return $this->richtpreis;
    }

    /**
     * Sets a new richtpreis
     *
     * @param float $richtpreis
     * @return self
     */
    public function setRichtpreis($richtpreis)
    {
        $this->richtpreis = $richtpreis;
        return $this;
    }

    /**
     * Gets as richtpreisprom2
     *
     * @return float
     */
    public function getRichtpreisprom2()
    {
        return $this->richtpreisprom2;
    }

    /**
     * Sets a new richtpreisprom2
     *
     * @param float $richtpreisprom2
     * @return self
     */
    public function setRichtpreisprom2($richtpreisprom2)
    {
        $this->richtpreisprom2 = $richtpreisprom2;
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

