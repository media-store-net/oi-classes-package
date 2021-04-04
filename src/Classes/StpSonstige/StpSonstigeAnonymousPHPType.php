<?php

namespace MediaStoreNet\OpenImmo\Classes\StpSonstige;

use MediaStoreNet\OpenImmo\Classes\StellplatzType;

/**
 * Class representing StpSonstigeAnonymousPHPType
 */
class StpSonstigeAnonymousPHPType extends StellplatzType
{

    /**
     * @var string $platzart
     */
    private $platzart = null;

    /**
     * @var string $bemerkung
     */
    private $bemerkung = null;

    /**
     * Gets as platzart
     *
     * @return string
     */
    public function getPlatzart()
    {
        return $this->platzart;
    }

    /**
     * Sets a new platzart
     *
     * @param string $platzart
     * @return self
     */
    public function setPlatzart($platzart)
    {
        $this->platzart = $platzart;
        return $this;
    }

    /**
     * Gets as bemerkung
     *
     * @return string
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    /**
     * Sets a new bemerkung
     *
     * @param string $bemerkung
     * @return self
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;
        return $this;
    }


}

