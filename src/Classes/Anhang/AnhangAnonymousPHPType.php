<?php

namespace MediaStoreNet\OpenImmo\Classes\Anhang;

/**
 * Class representing AnhangAnonymousPHPType
 */
class AnhangAnonymousPHPType
{

    /**
     * @var string $location
     */
    private $location = null;

    /**
     * @var string $gruppe
     */
    private $gruppe = null;

    /**
     * @var string $anhangtitel
     */
    private $anhangtitel = null;

    /**
     * @var string $format
     */
    private $format = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Check $check
     */
    private $check = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Daten $daten
     */
    private $daten = null;

    /**
     * Gets as location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as gruppe
     *
     * @return string
     */
    public function getGruppe()
    {
        return $this->gruppe;
    }

    /**
     * Sets a new gruppe
     *
     * @param string $gruppe
     * @return self
     */
    public function setGruppe($gruppe)
    {
        $this->gruppe = $gruppe;
        return $this;
    }

    /**
     * Gets as anhangtitel
     *
     * @return string
     */
    public function getAnhangtitel()
    {
        return $this->anhangtitel;
    }

    /**
     * Sets a new anhangtitel
     *
     * @param string $anhangtitel
     * @return self
     */
    public function setAnhangtitel($anhangtitel)
    {
        $this->anhangtitel = $anhangtitel;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as check
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Check
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Sets a new check
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Check $check
     * @return self
     */
    public function setCheck(\MediaStoreNet\OpenImmo\Classes\Check $check)
    {
        $this->check = $check;
        return $this;
    }

    /**
     * Gets as daten
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Daten
     */
    public function getDaten()
    {
        return $this->daten;
    }

    /**
     * Sets a new daten
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Daten $daten
     * @return self
     */
    public function setDaten(\MediaStoreNet\OpenImmo\Classes\Daten $daten)
    {
        $this->daten = $daten;
        return $this;
    }


}

