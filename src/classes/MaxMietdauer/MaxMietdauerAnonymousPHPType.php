<?php

namespace MediaStoreNet\OpenImmo\MaxMietdauer;

/**
 * Class representing MaxMietdauerAnonymousPHPType
 */
class MaxMietdauerAnonymousPHPType
{

    /**
     * @var string $maxDauer
     */
    private $maxDauer = null;

    /**
     * Gets as maxDauer
     *
     * @return string
     */
    public function getMaxDauer()
    {
        return $this->maxDauer;
    }

    /**
     * Sets a new maxDauer
     *
     * @param string $maxDauer
     * @return self
     */
    public function setMaxDauer($maxDauer)
    {
        $this->maxDauer = $maxDauer;
        return $this;
    }


}

