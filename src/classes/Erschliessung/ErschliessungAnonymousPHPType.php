<?php

namespace MediaStoreNet\OpenImmo\Erschliessung;

/**
 * Class representing ErschliessungAnonymousPHPType
 */
class ErschliessungAnonymousPHPType
{

    /**
     * @var string $erschlAttr
     */
    private $erschlAttr = null;

    /**
     * Gets as erschlAttr
     *
     * @return string
     */
    public function getErschlAttr()
    {
        return $this->erschlAttr;
    }

    /**
     * Sets a new erschlAttr
     *
     * @param string $erschlAttr
     * @return self
     */
    public function setErschlAttr($erschlAttr)
    {
        $this->erschlAttr = $erschlAttr;
        return $this;
    }


}

