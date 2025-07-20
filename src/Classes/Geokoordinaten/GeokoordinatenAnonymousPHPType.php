<?php

namespace MediaStoreNet\OpenImmo\Classes\Geokoordinaten;

/**
 * Class representing GeokoordinatenAnonymousPHPType
 */
class GeokoordinatenAnonymousPHPType
{

    /**
     * @var float $breitengrad
     */
    private $breitengrad = null;

    /**
     * @var float $laengengrad
     */
    private $laengengrad = null;

    /**
     * Gets as breitengrad
     *
     * @return float
     */
    public function getBreitengrad()
    {
        return $this->breitengrad;
    }

    /**
     * Sets a new breitengrad
     *
     * @param float $breitengrad
     * @return self
     */
    public function setBreitengrad($breitengrad)
    {
        $this->breitengrad = $breitengrad;
        return $this;
    }

    /**
     * Gets as laengengrad
     *
     * @return float
     */
    public function getLaengengrad()
    {
        return $this->laengengrad;
    }

    /**
     * Sets a new laengengrad
     *
     * @param float $laengengrad
     * @return self
     */
    public function setLaengengrad($laengengrad)
    {
        $this->laengengrad = $laengengrad;
        return $this;
    }


}

