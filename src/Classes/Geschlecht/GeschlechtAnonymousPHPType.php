<?php

namespace MediaStoreNet\OpenImmo\Classes\Geschlecht;

/**
 * Class representing GeschlechtAnonymousPHPType
 */
class GeschlechtAnonymousPHPType
{

    /**
     * @var string $geschlAttr
     */
    private $geschlAttr = null;

    /**
     * Gets as geschlAttr
     *
     * @return string
     */
    public function getGeschlAttr()
    {
        return $this->geschlAttr;
    }

    /**
     * Sets a new geschlAttr
     *
     * @param string $geschlAttr
     * @return self
     */
    public function setGeschlAttr($geschlAttr)
    {
        $this->geschlAttr = $geschlAttr;
        return $this;
    }


}

