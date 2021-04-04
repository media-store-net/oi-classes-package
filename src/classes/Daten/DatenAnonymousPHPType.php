<?php

namespace MediaStoreNet\OpenImmo\Daten;

/**
 * Class representing DatenAnonymousPHPType
 */
class DatenAnonymousPHPType
{

    /**
     * @var string $pfad
     */
    private $pfad = null;

    /**
     * @var string $anhanginhalt
     */
    private $anhanginhalt = null;

    /**
     * Gets as pfad
     *
     * @return string
     */
    public function getPfad()
    {
        return $this->pfad;
    }

    /**
     * Sets a new pfad
     *
     * @param string $pfad
     * @return self
     */
    public function setPfad($pfad)
    {
        $this->pfad = $pfad;
        return $this;
    }

    /**
     * Gets as anhanginhalt
     *
     * @return string
     */
    public function getAnhanginhalt()
    {
        return $this->anhanginhalt;
    }

    /**
     * Sets a new anhanginhalt
     *
     * @param string $anhanginhalt
     * @return self
     */
    public function setAnhanginhalt($anhanginhalt)
    {
        $this->anhanginhalt = $anhanginhalt;
        return $this;
    }


}

