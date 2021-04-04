<?php

namespace MediaStoreNet\OpenImmo\Classes\Objektart;

/**
 * Class representing ObjektartAnonymousPHPType
 */
class ObjektartAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Zimmer[] $zimmer
     */
    private $zimmer = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Wohnung[] $wohnung
     */
    private $wohnung = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Haus[] $haus
     */
    private $haus = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Grundstueck[] $grundstueck
     */
    private $grundstueck = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\BueroPraxen[] $bueroPraxen
     */
    private $bueroPraxen = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Einzelhandel[] $einzelhandel
     */
    private $einzelhandel = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Gastgewerbe[] $gastgewerbe
     */
    private $gastgewerbe = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\HallenLagerProd[] $hallenLagerProd
     */
    private $hallenLagerProd = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\LandUndForstwirtschaft[] $landUndForstwirtschaft
     */
    private $landUndForstwirtschaft = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Parken[] $parken
     */
    private $parken = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Sonstige[] $sonstige
     */
    private $sonstige = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\FreizeitimmobilieGewerblich[] $freizeitimmobilieGewerblich
     */
    private $freizeitimmobilieGewerblich = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\ZinshausRenditeobjekt[] $zinshausRenditeobjekt
     */
    private $zinshausRenditeobjekt = [
        
    ];

    /**
     * @var string[] $objektartZusatz
     */
    private $objektartZusatz = [
        
    ];

    /**
     * Adds as zimmer
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Zimmer $zimmer
     */
    public function addToZimmer(\MediaStoreNet\OpenImmo\Classes\Zimmer $zimmer)
    {
        $this->zimmer[] = $zimmer;
        return $this;
    }

    /**
     * isset zimmer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZimmer($index)
    {
        return isset($this->zimmer[$index]);
    }

    /**
     * unset zimmer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZimmer($index)
    {
        unset($this->zimmer[$index]);
    }

    /**
     * Gets as zimmer
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Zimmer[]
     */
    public function getZimmer()
    {
        return $this->zimmer;
    }

    /**
     * Sets a new zimmer
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Zimmer[] $zimmer
     * @return self
     */
    public function setZimmer(array $zimmer)
    {
        $this->zimmer = $zimmer;
        return $this;
    }

    /**
     * Adds as wohnung
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Wohnung $wohnung
     */
    public function addToWohnung(\MediaStoreNet\OpenImmo\Classes\Wohnung $wohnung)
    {
        $this->wohnung[] = $wohnung;
        return $this;
    }

    /**
     * isset wohnung
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWohnung($index)
    {
        return isset($this->wohnung[$index]);
    }

    /**
     * unset wohnung
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWohnung($index)
    {
        unset($this->wohnung[$index]);
    }

    /**
     * Gets as wohnung
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Wohnung[]
     */
    public function getWohnung()
    {
        return $this->wohnung;
    }

    /**
     * Sets a new wohnung
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Wohnung[] $wohnung
     * @return self
     */
    public function setWohnung(array $wohnung)
    {
        $this->wohnung = $wohnung;
        return $this;
    }

    /**
     * Adds as haus
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Haus $haus
     */
    public function addToHaus(\MediaStoreNet\OpenImmo\Classes\Haus $haus)
    {
        $this->haus[] = $haus;
        return $this;
    }

    /**
     * isset haus
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHaus($index)
    {
        return isset($this->haus[$index]);
    }

    /**
     * unset haus
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHaus($index)
    {
        unset($this->haus[$index]);
    }

    /**
     * Gets as haus
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Haus[]
     */
    public function getHaus()
    {
        return $this->haus;
    }

    /**
     * Sets a new haus
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Haus[] $haus
     * @return self
     */
    public function setHaus(array $haus)
    {
        $this->haus = $haus;
        return $this;
    }

    /**
     * Adds as grundstueck
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Grundstueck $grundstueck
     */
    public function addToGrundstueck(\MediaStoreNet\OpenImmo\Classes\Grundstueck $grundstueck)
    {
        $this->grundstueck[] = $grundstueck;
        return $this;
    }

    /**
     * isset grundstueck
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGrundstueck($index)
    {
        return isset($this->grundstueck[$index]);
    }

    /**
     * unset grundstueck
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGrundstueck($index)
    {
        unset($this->grundstueck[$index]);
    }

    /**
     * Gets as grundstueck
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Grundstueck[]
     */
    public function getGrundstueck()
    {
        return $this->grundstueck;
    }

    /**
     * Sets a new grundstueck
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Grundstueck[] $grundstueck
     * @return self
     */
    public function setGrundstueck(array $grundstueck)
    {
        $this->grundstueck = $grundstueck;
        return $this;
    }

    /**
     * Adds as bueroPraxen
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\BueroPraxen $bueroPraxen
     */
    public function addToBueroPraxen(\MediaStoreNet\OpenImmo\Classes\BueroPraxen $bueroPraxen)
    {
        $this->bueroPraxen[] = $bueroPraxen;
        return $this;
    }

    /**
     * isset bueroPraxen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBueroPraxen($index)
    {
        return isset($this->bueroPraxen[$index]);
    }

    /**
     * unset bueroPraxen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBueroPraxen($index)
    {
        unset($this->bueroPraxen[$index]);
    }

    /**
     * Gets as bueroPraxen
     *
     * @return \MediaStoreNet\OpenImmo\Classes\BueroPraxen[]
     */
    public function getBueroPraxen()
    {
        return $this->bueroPraxen;
    }

    /**
     * Sets a new bueroPraxen
     *
     * @param \MediaStoreNet\OpenImmo\Classes\BueroPraxen[] $bueroPraxen
     * @return self
     */
    public function setBueroPraxen(array $bueroPraxen)
    {
        $this->bueroPraxen = $bueroPraxen;
        return $this;
    }

    /**
     * Adds as einzelhandel
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Einzelhandel $einzelhandel
     */
    public function addToEinzelhandel(\MediaStoreNet\OpenImmo\Classes\Einzelhandel $einzelhandel)
    {
        $this->einzelhandel[] = $einzelhandel;
        return $this;
    }

    /**
     * isset einzelhandel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEinzelhandel($index)
    {
        return isset($this->einzelhandel[$index]);
    }

    /**
     * unset einzelhandel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEinzelhandel($index)
    {
        unset($this->einzelhandel[$index]);
    }

    /**
     * Gets as einzelhandel
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Einzelhandel[]
     */
    public function getEinzelhandel()
    {
        return $this->einzelhandel;
    }

    /**
     * Sets a new einzelhandel
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Einzelhandel[] $einzelhandel
     * @return self
     */
    public function setEinzelhandel(array $einzelhandel)
    {
        $this->einzelhandel = $einzelhandel;
        return $this;
    }

    /**
     * Adds as gastgewerbe
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Gastgewerbe $gastgewerbe
     */
    public function addToGastgewerbe(\MediaStoreNet\OpenImmo\Classes\Gastgewerbe $gastgewerbe)
    {
        $this->gastgewerbe[] = $gastgewerbe;
        return $this;
    }

    /**
     * isset gastgewerbe
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGastgewerbe($index)
    {
        return isset($this->gastgewerbe[$index]);
    }

    /**
     * unset gastgewerbe
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGastgewerbe($index)
    {
        unset($this->gastgewerbe[$index]);
    }

    /**
     * Gets as gastgewerbe
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Gastgewerbe[]
     */
    public function getGastgewerbe()
    {
        return $this->gastgewerbe;
    }

    /**
     * Sets a new gastgewerbe
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Gastgewerbe[] $gastgewerbe
     * @return self
     */
    public function setGastgewerbe(array $gastgewerbe)
    {
        $this->gastgewerbe = $gastgewerbe;
        return $this;
    }

    /**
     * Adds as hallenLagerProd
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\HallenLagerProd $hallenLagerProd
     */
    public function addToHallenLagerProd(\MediaStoreNet\OpenImmo\Classes\HallenLagerProd $hallenLagerProd)
    {
        $this->hallenLagerProd[] = $hallenLagerProd;
        return $this;
    }

    /**
     * isset hallenLagerProd
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHallenLagerProd($index)
    {
        return isset($this->hallenLagerProd[$index]);
    }

    /**
     * unset hallenLagerProd
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHallenLagerProd($index)
    {
        unset($this->hallenLagerProd[$index]);
    }

    /**
     * Gets as hallenLagerProd
     *
     * @return \MediaStoreNet\OpenImmo\Classes\HallenLagerProd[]
     */
    public function getHallenLagerProd()
    {
        return $this->hallenLagerProd;
    }

    /**
     * Sets a new hallenLagerProd
     *
     * @param \MediaStoreNet\OpenImmo\Classes\HallenLagerProd[] $hallenLagerProd
     * @return self
     */
    public function setHallenLagerProd(array $hallenLagerProd)
    {
        $this->hallenLagerProd = $hallenLagerProd;
        return $this;
    }

    /**
     * Adds as landUndForstwirtschaft
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\LandUndForstwirtschaft $landUndForstwirtschaft
     */
    public function addToLandUndForstwirtschaft(\MediaStoreNet\OpenImmo\Classes\LandUndForstwirtschaft $landUndForstwirtschaft)
    {
        $this->landUndForstwirtschaft[] = $landUndForstwirtschaft;
        return $this;
    }

    /**
     * isset landUndForstwirtschaft
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLandUndForstwirtschaft($index)
    {
        return isset($this->landUndForstwirtschaft[$index]);
    }

    /**
     * unset landUndForstwirtschaft
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLandUndForstwirtschaft($index)
    {
        unset($this->landUndForstwirtschaft[$index]);
    }

    /**
     * Gets as landUndForstwirtschaft
     *
     * @return \MediaStoreNet\OpenImmo\Classes\LandUndForstwirtschaft[]
     */
    public function getLandUndForstwirtschaft()
    {
        return $this->landUndForstwirtschaft;
    }

    /**
     * Sets a new landUndForstwirtschaft
     *
     * @param \MediaStoreNet\OpenImmo\Classes\LandUndForstwirtschaft[] $landUndForstwirtschaft
     * @return self
     */
    public function setLandUndForstwirtschaft(array $landUndForstwirtschaft)
    {
        $this->landUndForstwirtschaft = $landUndForstwirtschaft;
        return $this;
    }

    /**
     * Adds as parken
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Parken $parken
     */
    public function addToParken(\MediaStoreNet\OpenImmo\Classes\Parken $parken)
    {
        $this->parken[] = $parken;
        return $this;
    }

    /**
     * isset parken
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParken($index)
    {
        return isset($this->parken[$index]);
    }

    /**
     * unset parken
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParken($index)
    {
        unset($this->parken[$index]);
    }

    /**
     * Gets as parken
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Parken[]
     */
    public function getParken()
    {
        return $this->parken;
    }

    /**
     * Sets a new parken
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Parken[] $parken
     * @return self
     */
    public function setParken(array $parken)
    {
        $this->parken = $parken;
        return $this;
    }

    /**
     * Adds as sonstige
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Sonstige $sonstige
     */
    public function addToSonstige(\MediaStoreNet\OpenImmo\Classes\Sonstige $sonstige)
    {
        $this->sonstige[] = $sonstige;
        return $this;
    }

    /**
     * isset sonstige
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSonstige($index)
    {
        return isset($this->sonstige[$index]);
    }

    /**
     * unset sonstige
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSonstige($index)
    {
        unset($this->sonstige[$index]);
    }

    /**
     * Gets as sonstige
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Sonstige[]
     */
    public function getSonstige()
    {
        return $this->sonstige;
    }

    /**
     * Sets a new sonstige
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Sonstige[] $sonstige
     * @return self
     */
    public function setSonstige(array $sonstige)
    {
        $this->sonstige = $sonstige;
        return $this;
    }

    /**
     * Adds as freizeitimmobilieGewerblich
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\FreizeitimmobilieGewerblich $freizeitimmobilieGewerblich
     */
    public function addToFreizeitimmobilieGewerblich(\MediaStoreNet\OpenImmo\Classes\FreizeitimmobilieGewerblich $freizeitimmobilieGewerblich)
    {
        $this->freizeitimmobilieGewerblich[] = $freizeitimmobilieGewerblich;
        return $this;
    }

    /**
     * isset freizeitimmobilieGewerblich
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreizeitimmobilieGewerblich($index)
    {
        return isset($this->freizeitimmobilieGewerblich[$index]);
    }

    /**
     * unset freizeitimmobilieGewerblich
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreizeitimmobilieGewerblich($index)
    {
        unset($this->freizeitimmobilieGewerblich[$index]);
    }

    /**
     * Gets as freizeitimmobilieGewerblich
     *
     * @return \MediaStoreNet\OpenImmo\Classes\FreizeitimmobilieGewerblich[]
     */
    public function getFreizeitimmobilieGewerblich()
    {
        return $this->freizeitimmobilieGewerblich;
    }

    /**
     * Sets a new freizeitimmobilieGewerblich
     *
     * @param \MediaStoreNet\OpenImmo\Classes\FreizeitimmobilieGewerblich[] $freizeitimmobilieGewerblich
     * @return self
     */
    public function setFreizeitimmobilieGewerblich(array $freizeitimmobilieGewerblich)
    {
        $this->freizeitimmobilieGewerblich = $freizeitimmobilieGewerblich;
        return $this;
    }

    /**
     * Adds as zinshausRenditeobjekt
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\ZinshausRenditeobjekt $zinshausRenditeobjekt
     */
    public function addToZinshausRenditeobjekt(\MediaStoreNet\OpenImmo\Classes\ZinshausRenditeobjekt $zinshausRenditeobjekt)
    {
        $this->zinshausRenditeobjekt[] = $zinshausRenditeobjekt;
        return $this;
    }

    /**
     * isset zinshausRenditeobjekt
     *
     * @param int|string $index
     * @return bool
     */
    public function issetZinshausRenditeobjekt($index)
    {
        return isset($this->zinshausRenditeobjekt[$index]);
    }

    /**
     * unset zinshausRenditeobjekt
     *
     * @param int|string $index
     * @return void
     */
    public function unsetZinshausRenditeobjekt($index)
    {
        unset($this->zinshausRenditeobjekt[$index]);
    }

    /**
     * Gets as zinshausRenditeobjekt
     *
     * @return \MediaStoreNet\OpenImmo\Classes\ZinshausRenditeobjekt[]
     */
    public function getZinshausRenditeobjekt()
    {
        return $this->zinshausRenditeobjekt;
    }

    /**
     * Sets a new zinshausRenditeobjekt
     *
     * @param \MediaStoreNet\OpenImmo\Classes\ZinshausRenditeobjekt[] $zinshausRenditeobjekt
     * @return self
     */
    public function setZinshausRenditeobjekt(array $zinshausRenditeobjekt)
    {
        $this->zinshausRenditeobjekt = $zinshausRenditeobjekt;
        return $this;
    }

    /**
     * Adds as objektartZusatz
     *
     * @return self
     * @param string $objektartZusatz
     */
    public function addToObjektartZusatz($objektartZusatz)
    {
        $this->objektartZusatz[] = $objektartZusatz;
        return $this;
    }

    /**
     * isset objektartZusatz
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObjektartZusatz($index)
    {
        return isset($this->objektartZusatz[$index]);
    }

    /**
     * unset objektartZusatz
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObjektartZusatz($index)
    {
        unset($this->objektartZusatz[$index]);
    }

    /**
     * Gets as objektartZusatz
     *
     * @return string[]
     */
    public function getObjektartZusatz()
    {
        return $this->objektartZusatz;
    }

    /**
     * Sets a new objektartZusatz
     *
     * @param string[] $objektartZusatz
     * @return self
     */
    public function setObjektartZusatz(array $objektartZusatz)
    {
        $this->objektartZusatz = $objektartZusatz;
        return $this;
    }


}

