<?php

namespace MediaStoreNet\OpenImmo\Classes\LandUndForstwirtschaft;

/**
 * Class representing LandUndForstwirtschaftAnonymousPHPType
 */
class LandUndForstwirtschaftAnonymousPHPType
{

    /**
     * @var string $landTyp
     */
    private $landTyp = null;

    /**
     * Gets as landTyp
     *
     * @return string
     */
    public function getLandTyp()
    {
        return $this->landTyp;
    }

    /**
     * Sets a new landTyp
     *
     * @param string $landTyp
     * @return self
     */
    public function setLandTyp($landTyp)
    {
        $this->landTyp = $landTyp;
        return $this;
    }


}

