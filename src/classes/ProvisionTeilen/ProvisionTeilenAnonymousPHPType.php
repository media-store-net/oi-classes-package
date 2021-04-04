<?php

namespace MediaStoreNet\OpenImmo\ProvisionTeilen;

/**
 * Class representing ProvisionTeilenAnonymousPHPType
 */
class ProvisionTeilenAnonymousPHPType
{

    /**
     * @var string $wert
     */
    private $wert = null;

    /**
     * Gets as wert
     *
     * @return string
     */
    public function getWert()
    {
        return $this->wert;
    }

    /**
     * Sets a new wert
     *
     * @param string $wert
     * @return self
     */
    public function setWert($wert)
    {
        $this->wert = $wert;
        return $this;
    }


}

