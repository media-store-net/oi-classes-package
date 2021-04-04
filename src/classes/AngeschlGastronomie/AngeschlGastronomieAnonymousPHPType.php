<?php

namespace MediaStoreNet\OpenImmo\AngeschlGastronomie;

/**
 * Class representing AngeschlGastronomieAnonymousPHPType
 */
class AngeschlGastronomieAnonymousPHPType
{

    /**
     * @var bool $hOTELRESTAURANT
     */
    private $hOTELRESTAURANT = null;

    /**
     * @var bool $bAR
     */
    private $bAR = null;

    /**
     * Gets as hOTELRESTAURANT
     *
     * @return bool
     */
    public function getHOTELRESTAURANT()
    {
        return $this->hOTELRESTAURANT;
    }

    /**
     * Sets a new hOTELRESTAURANT
     *
     * @param bool $hOTELRESTAURANT
     * @return self
     */
    public function setHOTELRESTAURANT($hOTELRESTAURANT)
    {
        $this->hOTELRESTAURANT = $hOTELRESTAURANT;
        return $this;
    }

    /**
     * Gets as bAR
     *
     * @return bool
     */
    public function getBAR()
    {
        return $this->bAR;
    }

    /**
     * Sets a new bAR
     *
     * @param bool $bAR
     * @return self
     */
    public function setBAR($bAR)
    {
        $this->bAR = $bAR;
        return $this;
    }


}

