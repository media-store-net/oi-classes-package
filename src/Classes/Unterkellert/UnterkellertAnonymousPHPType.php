<?php

namespace MediaStoreNet\OpenImmo\Classes\Unterkellert;

/**
 * Class representing UnterkellertAnonymousPHPType
 */
class UnterkellertAnonymousPHPType
{

    /**
     * @var string $keller
     */
    private $keller = null;

    /**
     * Gets as keller
     *
     * @return string
     */
    public function getKeller()
    {
        return $this->keller;
    }

    /**
     * Sets a new keller
     *
     * @param string $keller
     * @return self
     */
    public function setKeller($keller)
    {
        $this->keller = $keller;
        return $this;
    }


}

