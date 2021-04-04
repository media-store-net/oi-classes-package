<?php

namespace MediaStoreNet\OpenImmo\Classes\Sicherheitstechnik;

/**
 * Class representing SicherheitstechnikAnonymousPHPType
 */
class SicherheitstechnikAnonymousPHPType
{

    /**
     * @var bool $aLARMANLAGE
     */
    private $aLARMANLAGE = null;

    /**
     * @var bool $kAMERA
     */
    private $kAMERA = null;

    /**
     * @var bool $pOLIZEIRUF
     */
    private $pOLIZEIRUF = null;

    /**
     * Gets as aLARMANLAGE
     *
     * @return bool
     */
    public function getALARMANLAGE()
    {
        return $this->aLARMANLAGE;
    }

    /**
     * Sets a new aLARMANLAGE
     *
     * @param bool $aLARMANLAGE
     * @return self
     */
    public function setALARMANLAGE($aLARMANLAGE)
    {
        $this->aLARMANLAGE = $aLARMANLAGE;
        return $this;
    }

    /**
     * Gets as kAMERA
     *
     * @return bool
     */
    public function getKAMERA()
    {
        return $this->kAMERA;
    }

    /**
     * Sets a new kAMERA
     *
     * @param bool $kAMERA
     * @return self
     */
    public function setKAMERA($kAMERA)
    {
        $this->kAMERA = $kAMERA;
        return $this;
    }

    /**
     * Gets as pOLIZEIRUF
     *
     * @return bool
     */
    public function getPOLIZEIRUF()
    {
        return $this->pOLIZEIRUF;
    }

    /**
     * Sets a new pOLIZEIRUF
     *
     * @param bool $pOLIZEIRUF
     * @return self
     */
    public function setPOLIZEIRUF($pOLIZEIRUF)
    {
        $this->pOLIZEIRUF = $pOLIZEIRUF;
        return $this;
    }


}

