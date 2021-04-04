<?php

namespace MediaStoreNet\OpenImmo\Land;

/**
 * Class representing LandAnonymousPHPType
 */
class LandAnonymousPHPType
{

    /**
     * @var string $isoLand
     */
    private $isoLand = null;

    /**
     * Gets as isoLand
     *
     * @return string
     */
    public function getIsoLand()
    {
        return $this->isoLand;
    }

    /**
     * Sets a new isoLand
     *
     * @param string $isoLand
     * @return self
     */
    public function setIsoLand($isoLand)
    {
        $this->isoLand = $isoLand;
        return $this;
    }


}

