<?php

namespace MediaStoreNet\OpenImmo\Classes\Foto;

/**
 * Class representing FotoAnonymousPHPType
 */
class FotoAnonymousPHPType
{

    /**
     * @var string $location
     */
    private $location = null;

    /**
     * @var string $format
     */
    private $format = null;

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

