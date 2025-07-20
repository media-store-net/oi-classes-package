<?php

namespace MediaStoreNet\OpenImmo\Classes\BreitbandZugang;

/**
 * Class representing BreitbandZugangAnonymousPHPType
 */
class BreitbandZugangAnonymousPHPType
{

    /**
     * @var string $art
     */
    private $art = null;

    /**
     * @var float $speed
     */
    private $speed = null;

    /**
     * Gets as art
     *
     * @return string
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Sets a new art
     *
     * @param string $art
     * @return self
     */
    public function setArt($art)
    {
        $this->art = $art;
        return $this;
    }

    /**
     * Gets as speed
     *
     * @return float
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Sets a new speed
     *
     * @param float $speed
     * @return self
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }


}

