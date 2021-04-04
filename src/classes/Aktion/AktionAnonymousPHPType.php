<?php

namespace MediaStoreNet\OpenImmo\Aktion;

/**
 * Class representing AktionAnonymousPHPType
 */
class AktionAnonymousPHPType
{

    /**
     * @var string $aktionart
     */
    private $aktionart = null;

    /**
     * Gets as aktionart
     *
     * @return string
     */
    public function getAktionart()
    {
        return $this->aktionart;
    }

    /**
     * Sets a new aktionart
     *
     * @param string $aktionart
     * @return self
     */
    public function setAktionart($aktionart)
    {
        $this->aktionart = $aktionart;
        return $this;
    }


}

