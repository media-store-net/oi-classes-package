<?php

namespace MediaStoreNet\OpenImmo\Classes\BebaubarNach;

/**
 * Class representing BebaubarNachAnonymousPHPType
 */
class BebaubarNachAnonymousPHPType
{

    /**
     * @var string $bebaubarAttr
     */
    private $bebaubarAttr = null;

    /**
     * Gets as bebaubarAttr
     *
     * @return string
     */
    public function getBebaubarAttr()
    {
        return $this->bebaubarAttr;
    }

    /**
     * Sets a new bebaubarAttr
     *
     * @param string $bebaubarAttr
     * @return self
     */
    public function setBebaubarAttr($bebaubarAttr)
    {
        $this->bebaubarAttr = $bebaubarAttr;
        return $this;
    }


}

