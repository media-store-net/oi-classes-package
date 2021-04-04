<?php

namespace MediaStoreNet\OpenImmo\Classes\Bauweise;

/**
 * Class representing BauweiseAnonymousPHPType
 */
class BauweiseAnonymousPHPType
{

    /**
     * @var bool $mASSIV
     */
    private $mASSIV = null;

    /**
     * @var bool $fERTIGTEILE
     */
    private $fERTIGTEILE = null;

    /**
     * @var bool $hOLZ
     */
    private $hOLZ = null;

    /**
     * Gets as mASSIV
     *
     * @return bool
     */
    public function getMASSIV()
    {
        return $this->mASSIV;
    }

    /**
     * Sets a new mASSIV
     *
     * @param bool $mASSIV
     * @return self
     */
    public function setMASSIV($mASSIV)
    {
        $this->mASSIV = $mASSIV;
        return $this;
    }

    /**
     * Gets as fERTIGTEILE
     *
     * @return bool
     */
    public function getFERTIGTEILE()
    {
        return $this->fERTIGTEILE;
    }

    /**
     * Sets a new fERTIGTEILE
     *
     * @param bool $fERTIGTEILE
     * @return self
     */
    public function setFERTIGTEILE($fERTIGTEILE)
    {
        $this->fERTIGTEILE = $fERTIGTEILE;
        return $this;
    }

    /**
     * Gets as hOLZ
     *
     * @return bool
     */
    public function getHOLZ()
    {
        return $this->hOLZ;
    }

    /**
     * Sets a new hOLZ
     *
     * @param bool $hOLZ
     * @return self
     */
    public function setHOLZ($hOLZ)
    {
        $this->hOLZ = $hOLZ;
        return $this;
    }


}

