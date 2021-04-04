<?php

namespace MediaStoreNet\OpenImmo\Haus;

/**
 * Class representing HausAnonymousPHPType
 */
class HausAnonymousPHPType
{

    /**
     * @var string $haustyp
     */
    private $haustyp = null;

    /**
     * Gets as haustyp
     *
     * @return string
     */
    public function getHaustyp()
    {
        return $this->haustyp;
    }

    /**
     * Sets a new haustyp
     *
     * @param string $haustyp
     * @return self
     */
    public function setHaustyp($haustyp)
    {
        $this->haustyp = $haustyp;
        return $this;
    }


}

