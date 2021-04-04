<?php

namespace MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType;

/**
 * Class representing FeldAnonymousPHPType
 */
class FeldAnonymousPHPType
{

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $wert
     */
    private $wert = null;

    /**
     * @var string[] $typ
     */
    private $typ = [
        
    ];

    /**
     * @var string[] $modus
     */
    private $modus = [
        
    ];

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as wert
     *
     * @return string
     */
    public function getWert()
    {
        return $this->wert;
    }

    /**
     * Sets a new wert
     *
     * @param string $wert
     * @return self
     */
    public function setWert($wert)
    {
        $this->wert = $wert;
        return $this;
    }

    /**
     * Adds as typ
     *
     * @return self
     * @param string $typ
     */
    public function addToTyp($typ)
    {
        $this->typ[] = $typ;
        return $this;
    }

    /**
     * isset typ
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTyp($index)
    {
        return isset($this->typ[$index]);
    }

    /**
     * unset typ
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTyp($index)
    {
        unset($this->typ[$index]);
    }

    /**
     * Gets as typ
     *
     * @return string[]
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * @param string[] $typ
     * @return self
     */
    public function setTyp(array $typ)
    {
        $this->typ = $typ;
        return $this;
    }

    /**
     * Adds as modus
     *
     * @return self
     * @param string $modus
     */
    public function addToModus($modus)
    {
        $this->modus[] = $modus;
        return $this;
    }

    /**
     * isset modus
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModus($index)
    {
        return isset($this->modus[$index]);
    }

    /**
     * unset modus
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModus($index)
    {
        unset($this->modus[$index]);
    }

    /**
     * Gets as modus
     *
     * @return string[]
     */
    public function getModus()
    {
        return $this->modus;
    }

    /**
     * Sets a new modus
     *
     * @param string[] $modus
     * @return self
     */
    public function setModus(array $modus)
    {
        $this->modus = $modus;
        return $this;
    }


}

