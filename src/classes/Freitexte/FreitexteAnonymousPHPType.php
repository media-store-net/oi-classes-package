<?php

namespace MediaStoreNet\OpenImmo\Freitexte;

/**
 * Class representing FreitexteAnonymousPHPType
 */
class FreitexteAnonymousPHPType
{

    /**
     * @var string $objekttitel
     */
    private $objekttitel = null;

    /**
     * @var string $dreizeiler
     */
    private $dreizeiler = null;

    /**
     * @var string $lage
     */
    private $lage = null;

    /**
     * @var string $ausstattBeschr
     */
    private $ausstattBeschr = null;

    /**
     * @var string $objektbeschreibung
     */
    private $objektbeschreibung = null;

    /**
     * @var string $sonstigeAngaben
     */
    private $sonstigeAngaben = null;

    /**
     * @var \MediaStoreNet\OpenImmo\ObjektText $objektText
     */
    private $objektText = null;

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedSimplefield[] $userDefinedSimplefield
     */
    private $userDefinedSimplefield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedAnyfield[] $userDefinedAnyfield
     */
    private $userDefinedAnyfield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     */
    private $userDefinedExtend = null;

    /**
     * Gets as objekttitel
     *
     * @return string
     */
    public function getObjekttitel()
    {
        return $this->objekttitel;
    }

    /**
     * Sets a new objekttitel
     *
     * @param string $objekttitel
     * @return self
     */
    public function setObjekttitel($objekttitel)
    {
        $this->objekttitel = $objekttitel;
        return $this;
    }

    /**
     * Gets as dreizeiler
     *
     * @return string
     */
    public function getDreizeiler()
    {
        return $this->dreizeiler;
    }

    /**
     * Sets a new dreizeiler
     *
     * @param string $dreizeiler
     * @return self
     */
    public function setDreizeiler($dreizeiler)
    {
        $this->dreizeiler = $dreizeiler;
        return $this;
    }

    /**
     * Gets as lage
     *
     * @return string
     */
    public function getLage()
    {
        return $this->lage;
    }

    /**
     * Sets a new lage
     *
     * @param string $lage
     * @return self
     */
    public function setLage($lage)
    {
        $this->lage = $lage;
        return $this;
    }

    /**
     * Gets as ausstattBeschr
     *
     * @return string
     */
    public function getAusstattBeschr()
    {
        return $this->ausstattBeschr;
    }

    /**
     * Sets a new ausstattBeschr
     *
     * @param string $ausstattBeschr
     * @return self
     */
    public function setAusstattBeschr($ausstattBeschr)
    {
        $this->ausstattBeschr = $ausstattBeschr;
        return $this;
    }

    /**
     * Gets as objektbeschreibung
     *
     * @return string
     */
    public function getObjektbeschreibung()
    {
        return $this->objektbeschreibung;
    }

    /**
     * Sets a new objektbeschreibung
     *
     * @param string $objektbeschreibung
     * @return self
     */
    public function setObjektbeschreibung($objektbeschreibung)
    {
        $this->objektbeschreibung = $objektbeschreibung;
        return $this;
    }

    /**
     * Gets as sonstigeAngaben
     *
     * @return string
     */
    public function getSonstigeAngaben()
    {
        return $this->sonstigeAngaben;
    }

    /**
     * Sets a new sonstigeAngaben
     *
     * @param string $sonstigeAngaben
     * @return self
     */
    public function setSonstigeAngaben($sonstigeAngaben)
    {
        $this->sonstigeAngaben = $sonstigeAngaben;
        return $this;
    }

    /**
     * Gets as objektText
     *
     * @return \MediaStoreNet\OpenImmo\ObjektText
     */
    public function getObjektText()
    {
        return $this->objektText;
    }

    /**
     * Sets a new objektText
     *
     * @param \MediaStoreNet\OpenImmo\ObjektText $objektText
     * @return self
     */
    public function setObjektText(\MediaStoreNet\OpenImmo\ObjektText $objektText)
    {
        $this->objektText = $objektText;
        return $this;
    }

    /**
     * Adds as userDefinedSimplefield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedSimplefield $userDefinedSimplefield
     */
    public function addToUserDefinedSimplefield(\MediaStoreNet\OpenImmo\UserDefinedSimplefield $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield[] = $userDefinedSimplefield;
        return $this;
    }

    /**
     * isset userDefinedSimplefield
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedSimplefield($index)
    {
        return isset($this->userDefinedSimplefield[$index]);
    }

    /**
     * unset userDefinedSimplefield
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedSimplefield($index)
    {
        unset($this->userDefinedSimplefield[$index]);
    }

    /**
     * Gets as userDefinedSimplefield
     *
     * @return \MediaStoreNet\OpenImmo\UserDefinedSimplefield[]
     */
    public function getUserDefinedSimplefield()
    {
        return $this->userDefinedSimplefield;
    }

    /**
     * Sets a new userDefinedSimplefield
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedSimplefield[] $userDefinedSimplefield
     * @return self
     */
    public function setUserDefinedSimplefield(array $userDefinedSimplefield)
    {
        $this->userDefinedSimplefield = $userDefinedSimplefield;
        return $this;
    }

    /**
     * Adds as userDefinedAnyfield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedAnyfield $userDefinedAnyfield
     */
    public function addToUserDefinedAnyfield(\MediaStoreNet\OpenImmo\UserDefinedAnyfield $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield[] = $userDefinedAnyfield;
        return $this;
    }

    /**
     * isset userDefinedAnyfield
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedAnyfield($index)
    {
        return isset($this->userDefinedAnyfield[$index]);
    }

    /**
     * unset userDefinedAnyfield
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedAnyfield($index)
    {
        unset($this->userDefinedAnyfield[$index]);
    }

    /**
     * Gets as userDefinedAnyfield
     *
     * @return \MediaStoreNet\OpenImmo\UserDefinedAnyfield[]
     */
    public function getUserDefinedAnyfield()
    {
        return $this->userDefinedAnyfield;
    }

    /**
     * Sets a new userDefinedAnyfield
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedAnyfield[] $userDefinedAnyfield
     * @return self
     */
    public function setUserDefinedAnyfield(array $userDefinedAnyfield)
    {
        $this->userDefinedAnyfield = $userDefinedAnyfield;
        return $this;
    }

    /**
     * Adds as feld
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToUserDefinedExtend(\MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld)
    {
        $this->userDefinedExtend[] = $feld;
        return $this;
    }

    /**
     * isset userDefinedExtend
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedExtend($index)
    {
        return isset($this->userDefinedExtend[$index]);
    }

    /**
     * unset userDefinedExtend
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedExtend($index)
    {
        unset($this->userDefinedExtend[$index]);
    }

    /**
     * Gets as userDefinedExtend
     *
     * @return \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getUserDefinedExtend()
    {
        return $this->userDefinedExtend;
    }

    /**
     * Sets a new userDefinedExtend
     *
     * @param \MediaStoreNet\OpenImmo\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     * @return self
     */
    public function setUserDefinedExtend(array $userDefinedExtend)
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }


}

