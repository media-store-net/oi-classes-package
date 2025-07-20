<?php

namespace MediaStoreNet\OpenImmo\Classes\LageGebiet;

/**
 * Class representing LageGebietAnonymousPHPType
 */
class LageGebietAnonymousPHPType
{

    /**
     * @var string $gebiete
     */
    private $gebiete = null;

    /**
     * Gets as gebiete
     *
     * @return string
     */
    public function getGebiete()
    {
        return $this->gebiete;
    }

    /**
     * Sets a new gebiete
     *
     * @param string $gebiete
     * @return self
     */
    public function setGebiete($gebiete)
    {
        $this->gebiete = $gebiete;
        return $this;
    }


}

