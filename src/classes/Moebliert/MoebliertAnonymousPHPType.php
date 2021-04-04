<?php

namespace MediaStoreNet\OpenImmo\Moebliert;

/**
 * Class representing MoebliertAnonymousPHPType
 */
class MoebliertAnonymousPHPType
{

    /**
     * @var string $moeb
     */
    private $moeb = null;

    /**
     * Gets as moeb
     *
     * @return string
     */
    public function getMoeb()
    {
        return $this->moeb;
    }

    /**
     * Sets a new moeb
     *
     * @param string $moeb
     * @return self
     */
    public function setMoeb($moeb)
    {
        $this->moeb = $moeb;
        return $this;
    }


}

