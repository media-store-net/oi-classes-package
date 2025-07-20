<?php

namespace MediaStoreNet\OpenImmo\Classes\MinMietdauer;

/**
 * Class representing MinMietdauerAnonymousPHPType
 */
class MinMietdauerAnonymousPHPType
{

    /**
     * @var string $minDauer
     */
    private $minDauer = null;

    /**
     * Gets as minDauer
     *
     * @return string
     */
    public function getMinDauer()
    {
        return $this->minDauer;
    }

    /**
     * Sets a new minDauer
     *
     * @param string $minDauer
     * @return self
     */
    public function setMinDauer($minDauer)
    {
        $this->minDauer = $minDauer;
        return $this;
    }


}

