<?php

namespace MediaStoreNet\OpenImmo\Waehrung;

/**
 * Class representing WaehrungAnonymousPHPType
 */
class WaehrungAnonymousPHPType
{

    /**
     * @var string $isoWaehrung
     */
    private $isoWaehrung = null;

    /**
     * Gets as isoWaehrung
     *
     * @return string
     */
    public function getIsoWaehrung()
    {
        return $this->isoWaehrung;
    }

    /**
     * Sets a new isoWaehrung
     *
     * @param string $isoWaehrung
     * @return self
     */
    public function setIsoWaehrung($isoWaehrung)
    {
        $this->isoWaehrung = $isoWaehrung;
        return $this;
    }


}

