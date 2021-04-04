<?php

namespace MediaStoreNet\OpenImmo\Alter;

/**
 * Class representing AlterAnonymousPHPType
 */
class AlterAnonymousPHPType
{

    /**
     * @var string $alterAttr
     */
    private $alterAttr = null;

    /**
     * Gets as alterAttr
     *
     * @return string
     */
    public function getAlterAttr()
    {
        return $this->alterAttr;
    }

    /**
     * Sets a new alterAttr
     *
     * @param string $alterAttr
     * @return self
     */
    public function setAlterAttr($alterAttr)
    {
        $this->alterAttr = $alterAttr;
        return $this;
    }


}

