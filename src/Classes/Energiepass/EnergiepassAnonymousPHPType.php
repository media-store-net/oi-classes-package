<?php

namespace MediaStoreNet\OpenImmo\Classes\Energiepass;

/**
 * Class representing EnergiepassAnonymousPHPType
 */
class EnergiepassAnonymousPHPType
{

    /**
     * @var string $epart
     */
    private $epart = null;

    /**
     * @var string $gueltigBis
     */
    private $gueltigBis = null;

    /**
     * @var string $energieverbrauchkennwert
     */
    private $energieverbrauchkennwert = null;

    /**
     * @var bool $mitwarmwasser
     */
    private $mitwarmwasser = null;

    /**
     * @var string $endenergiebedarf
     */
    private $endenergiebedarf = null;

    /**
     * @var string $primaerenergietraeger
     */
    private $primaerenergietraeger = null;

    /**
     * @var string $stromwert
     */
    private $stromwert = null;

    /**
     * @var string $waermewert
     */
    private $waermewert = null;

    /**
     * @var string $wertklasse
     */
    private $wertklasse = null;

    /**
     * @var string $baujahr
     */
    private $baujahr = null;

    /**
     * @var \DateTime $ausstelldatum
     */
    private $ausstelldatum = null;

    /**
     * @var string $jahrgang
     */
    private $jahrgang = null;

    /**
     * @var string $gebaeudeart
     */
    private $gebaeudeart = null;

    /**
     * @var string $epasstext
     */
    private $epasstext = null;

    /**
     * @var string $geg2018
     */
    private $geg2018 = null;

    /**
     * @var string $hwbwert
     */
    private $hwbwert = null;

    /**
     * @var string $hwbklasse
     */
    private $hwbklasse = null;

    /**
     * @var string $fgeewert
     */
    private $fgeewert = null;

    /**
     * @var string $fgeeklasse
     */
    private $fgeeklasse = null;

    /**
     * Gets as epart
     *
     * @return string
     */
    public function getEpart()
    {
        return $this->epart;
    }

    /**
     * Sets a new epart
     *
     * @param string $epart
     * @return self
     */
    public function setEpart($epart)
    {
        $this->epart = $epart;
        return $this;
    }

    /**
     * Gets as gueltigBis
     *
     * @return string
     */
    public function getGueltigBis()
    {
        return $this->gueltigBis;
    }

    /**
     * Sets a new gueltigBis
     *
     * @param string $gueltigBis
     * @return self
     */
    public function setGueltigBis($gueltigBis)
    {
        $this->gueltigBis = $gueltigBis;
        return $this;
    }

    /**
     * Gets as energieverbrauchkennwert
     *
     * @return string
     */
    public function getEnergieverbrauchkennwert()
    {
        return $this->energieverbrauchkennwert;
    }

    /**
     * Sets a new energieverbrauchkennwert
     *
     * @param string $energieverbrauchkennwert
     * @return self
     */
    public function setEnergieverbrauchkennwert($energieverbrauchkennwert)
    {
        $this->energieverbrauchkennwert = $energieverbrauchkennwert;
        return $this;
    }

    /**
     * Gets as mitwarmwasser
     *
     * @return bool
     */
    public function getMitwarmwasser()
    {
        return $this->mitwarmwasser;
    }

    /**
     * Sets a new mitwarmwasser
     *
     * @param bool $mitwarmwasser
     * @return self
     */
    public function setMitwarmwasser($mitwarmwasser)
    {
        $this->mitwarmwasser = $mitwarmwasser;
        return $this;
    }

    /**
     * Gets as endenergiebedarf
     *
     * @return string
     */
    public function getEndenergiebedarf()
    {
        return $this->endenergiebedarf;
    }

    /**
     * Sets a new endenergiebedarf
     *
     * @param string $endenergiebedarf
     * @return self
     */
    public function setEndenergiebedarf($endenergiebedarf)
    {
        $this->endenergiebedarf = $endenergiebedarf;
        return $this;
    }

    /**
     * Gets as primaerenergietraeger
     *
     * @return string
     */
    public function getPrimaerenergietraeger()
    {
        return $this->primaerenergietraeger;
    }

    /**
     * Sets a new primaerenergietraeger
     *
     * @param string $primaerenergietraeger
     * @return self
     */
    public function setPrimaerenergietraeger($primaerenergietraeger)
    {
        $this->primaerenergietraeger = $primaerenergietraeger;
        return $this;
    }

    /**
     * Gets as stromwert
     *
     * @return string
     */
    public function getStromwert()
    {
        return $this->stromwert;
    }

    /**
     * Sets a new stromwert
     *
     * @param string $stromwert
     * @return self
     */
    public function setStromwert($stromwert)
    {
        $this->stromwert = $stromwert;
        return $this;
    }

    /**
     * Gets as waermewert
     *
     * @return string
     */
    public function getWaermewert()
    {
        return $this->waermewert;
    }

    /**
     * Sets a new waermewert
     *
     * @param string $waermewert
     * @return self
     */
    public function setWaermewert($waermewert)
    {
        $this->waermewert = $waermewert;
        return $this;
    }

    /**
     * Gets as wertklasse
     *
     * @return string
     */
    public function getWertklasse()
    {
        return $this->wertklasse;
    }

    /**
     * Sets a new wertklasse
     *
     * @param string $wertklasse
     * @return self
     */
    public function setWertklasse($wertklasse)
    {
        $this->wertklasse = $wertklasse;
        return $this;
    }

    /**
     * Gets as baujahr
     *
     * @return string
     */
    public function getBaujahr()
    {
        return $this->baujahr;
    }

    /**
     * Sets a new baujahr
     *
     * @param string $baujahr
     * @return self
     */
    public function setBaujahr($baujahr)
    {
        $this->baujahr = $baujahr;
        return $this;
    }

    /**
     * Gets as ausstelldatum
     *
     * @return \DateTime
     */
    public function getAusstelldatum()
    {
        return $this->ausstelldatum;
    }

    /**
     * Sets a new ausstelldatum
     *
     * @param \DateTime $ausstelldatum
     * @return self
     */
    public function setAusstelldatum(\DateTime $ausstelldatum)
    {
        $this->ausstelldatum = $ausstelldatum;
        return $this;
    }

    /**
     * Gets as jahrgang
     *
     * @return string
     */
    public function getJahrgang()
    {
        return $this->jahrgang;
    }

    /**
     * Sets a new jahrgang
     *
     * @param string $jahrgang
     * @return self
     */
    public function setJahrgang($jahrgang)
    {
        $this->jahrgang = $jahrgang;
        return $this;
    }

    /**
     * Gets as gebaeudeart
     *
     * @return string
     */
    public function getGebaeudeart()
    {
        return $this->gebaeudeart;
    }

    /**
     * Sets a new gebaeudeart
     *
     * @param string $gebaeudeart
     * @return self
     */
    public function setGebaeudeart($gebaeudeart)
    {
        $this->gebaeudeart = $gebaeudeart;
        return $this;
    }

    /**
     * Gets as epasstext
     *
     * @return string
     */
    public function getEpasstext()
    {
        return $this->epasstext;
    }

    /**
     * Sets a new epasstext
     *
     * @param string $epasstext
     * @return self
     */
    public function setEpasstext($epasstext)
    {
        $this->epasstext = $epasstext;
        return $this;
    }

    /**
     * Gets as geg2018
     *
     * @return string
     */
    public function getGeg2018()
    {
        return $this->geg2018;
    }

    /**
     * Sets a new geg2018
     *
     * @param string $geg2018
     * @return self
     */
    public function setGeg2018($geg2018)
    {
        $this->geg2018 = $geg2018;
        return $this;
    }

    /**
     * Gets as hwbwert
     *
     * @return string
     */
    public function getHwbwert()
    {
        return $this->hwbwert;
    }

    /**
     * Sets a new hwbwert
     *
     * @param string $hwbwert
     * @return self
     */
    public function setHwbwert($hwbwert)
    {
        $this->hwbwert = $hwbwert;
        return $this;
    }

    /**
     * Gets as hwbklasse
     *
     * @return string
     */
    public function getHwbklasse()
    {
        return $this->hwbklasse;
    }

    /**
     * Sets a new hwbklasse
     *
     * @param string $hwbklasse
     * @return self
     */
    public function setHwbklasse($hwbklasse)
    {
        $this->hwbklasse = $hwbklasse;
        return $this;
    }

    /**
     * Gets as fgeewert
     *
     * @return string
     */
    public function getFgeewert()
    {
        return $this->fgeewert;
    }

    /**
     * Sets a new fgeewert
     *
     * @param string $fgeewert
     * @return self
     */
    public function setFgeewert($fgeewert)
    {
        $this->fgeewert = $fgeewert;
        return $this;
    }

    /**
     * Gets as fgeeklasse
     *
     * @return string
     */
    public function getFgeeklasse()
    {
        return $this->fgeeklasse;
    }

    /**
     * Sets a new fgeeklasse
     *
     * @param string $fgeeklasse
     * @return self
     */
    public function setFgeeklasse($fgeeklasse)
    {
        $this->fgeeklasse = $fgeeklasse;
        return $this;
    }


}

