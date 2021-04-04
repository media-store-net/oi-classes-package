<?php

namespace MediaStoreNet\OpenImmo\Classes\Zustand;

/**
 * Class representing ZustandAnonymousPHPType
 */
class ZustandAnonymousPHPType
{

    /**
     * @var string $zustandArt
     */
    private $zustandArt = null;

    /**
     * Gets as zustandArt
     *
     * @return string
     */
    public function getZustandArt()
    {
        return $this->zustandArt;
    }

    /**
     * Sets a new zustandArt
     *
     * @param string $zustandArt
     * @return self
     */
    public function setZustandArt($zustandArt)
    {
        $this->zustandArt = $zustandArt;
        return $this;
    }


}

