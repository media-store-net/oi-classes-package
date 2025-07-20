<?php

namespace MediaStoreNet\OpenImmo\Classes\Wohnung;

/**
 * Class representing WohnungAnonymousPHPType
 */
class WohnungAnonymousPHPType
{

    /**
     * @var string $wohnungtyp
     */
    private $wohnungtyp = null;

    /**
     * Gets as wohnungtyp
     *
     * @return string
     */
    public function getWohnungtyp()
    {
        return $this->wohnungtyp;
    }

    /**
     * Sets a new wohnungtyp
     *
     * @param string $wohnungtyp
     * @return self
     */
    public function setWohnungtyp($wohnungtyp)
    {
        $this->wohnungtyp = $wohnungtyp;
        return $this;
    }


}

