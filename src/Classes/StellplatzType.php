<?php

namespace MediaStoreNet\OpenImmo\Classes;

/**
 * Class representing StellplatzType
 *
 *
 * XSD Type: stellplatz
 */
class StellplatzType
{

    /**
     * @var float $stellplatzmiete
     */
    private $stellplatzmiete = null;

    /**
     * @var float $stellplatzkaufpreis
     */
    private $stellplatzkaufpreis = null;

    /**
     * @var int $anzahl
     */
    private $anzahl = null;

    /**
     * Gets as stellplatzmiete
     *
     * @return float
     */
    public function getStellplatzmiete()
    {
        return $this->stellplatzmiete;
    }

    /**
     * Sets a new stellplatzmiete
     *
     * @param float $stellplatzmiete
     * @return self
     */
    public function setStellplatzmiete($stellplatzmiete)
    {
        $this->stellplatzmiete = $stellplatzmiete;
        return $this;
    }

    /**
     * Gets as stellplatzkaufpreis
     *
     * @return float
     */
    public function getStellplatzkaufpreis()
    {
        return $this->stellplatzkaufpreis;
    }

    /**
     * Sets a new stellplatzkaufpreis
     *
     * @param float $stellplatzkaufpreis
     * @return self
     */
    public function setStellplatzkaufpreis($stellplatzkaufpreis)
    {
        $this->stellplatzkaufpreis = $stellplatzkaufpreis;
        return $this;
    }

    /**
     * Gets as anzahl
     *
     * @return int
     */
    public function getAnzahl()
    {
        return $this->anzahl;
    }

    /**
     * Sets a new anzahl
     *
     * @param int $anzahl
     * @return self
     */
    public function setAnzahl($anzahl)
    {
        $this->anzahl = $anzahl;
        return $this;
    }


}

