<?php

namespace MediaStoreNet\OpenImmo\Ausblick;

/**
 * Class representing AusblickAnonymousPHPType
 */
class AusblickAnonymousPHPType
{

    /**
     * @var string $blick
     */
    private $blick = null;

    /**
     * Gets as blick
     *
     * @return string
     */
    public function getBlick()
    {
        return $this->blick;
    }

    /**
     * Sets a new blick
     *
     * @param string $blick
     * @return self
     */
    public function setBlick($blick)
    {
        $this->blick = $blick;
        return $this;
    }


}

