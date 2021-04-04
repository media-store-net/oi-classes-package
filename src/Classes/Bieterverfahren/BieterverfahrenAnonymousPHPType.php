<?php

namespace MediaStoreNet\OpenImmo\Classes\Bieterverfahren;

/**
 * Class representing BieterverfahrenAnonymousPHPType
 */
class BieterverfahrenAnonymousPHPType
{

    /**
     * @var \DateTime $beginnAngebotsphase
     */
    private $beginnAngebotsphase = null;

    /**
     * @var \DateTime $besichtigungstermin
     */
    private $besichtigungstermin = null;

    /**
     * @var \DateTime $besichtigungstermin2
     */
    private $besichtigungstermin2 = null;

    /**
     * @var \DateTime $beginnBietzeit
     */
    private $beginnBietzeit = null;

    /**
     * @var \DateTime $endeBietzeit
     */
    private $endeBietzeit = null;

    /**
     * @var bool $hoechstgebotZeigen
     */
    private $hoechstgebotZeigen = null;

    /**
     * @var float $mindestpreis
     */
    private $mindestpreis = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[] $userDefinedSimplefield
     */
    private $userDefinedSimplefield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[] $userDefinedAnyfield
     */
    private $userDefinedAnyfield = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     */
    private $userDefinedExtend = null;

    /**
     * Gets as beginnAngebotsphase
     *
     * @return \DateTime
     */
    public function getBeginnAngebotsphase()
    {
        return $this->beginnAngebotsphase;
    }

    /**
     * Sets a new beginnAngebotsphase
     *
     * @param \DateTime $beginnAngebotsphase
     * @return self
     */
    public function setBeginnAngebotsphase(\DateTime $beginnAngebotsphase)
    {
        $this->beginnAngebotsphase = $beginnAngebotsphase;
        return $this;
    }

    /**
     * Gets as besichtigungstermin
     *
     * @return \DateTime
     */
    public function getBesichtigungstermin()
    {
        return $this->besichtigungstermin;
    }

    /**
     * Sets a new besichtigungstermin
     *
     * @param \DateTime $besichtigungstermin
     * @return self
     */
    public function setBesichtigungstermin(\DateTime $besichtigungstermin)
    {
        $this->besichtigungstermin = $besichtigungstermin;
        return $this;
    }

    /**
     * Gets as besichtigungstermin2
     *
     * @return \DateTime
     */
    public function getBesichtigungstermin2()
    {
        return $this->besichtigungstermin2;
    }

    /**
     * Sets a new besichtigungstermin2
     *
     * @param \DateTime $besichtigungstermin2
     * @return self
     */
    public function setBesichtigungstermin2(\DateTime $besichtigungstermin2)
    {
        $this->besichtigungstermin2 = $besichtigungstermin2;
        return $this;
    }

    /**
     * Gets as beginnBietzeit
     *
     * @return \DateTime
     */
    public function getBeginnBietzeit()
    {
        return $this->beginnBietzeit;
    }

    /**
     * Sets a new beginnBietzeit
     *
     * @param \DateTime $beginnBietzeit
     * @return self
     */
    public function setBeginnBietzeit(\DateTime $beginnBietzeit)
    {
        $this->beginnBietzeit = $beginnBietzeit;
        return $this;
    }

    /**
     * Gets as endeBietzeit
     *
     * @return \DateTime
     */
    public function getEndeBietzeit()
    {
        return $this->endeBietzeit;
    }

    /**
     * Sets a new endeBietzeit
     *
     * @param \DateTime $endeBietzeit
     * @return self
     */
    public function setEndeBietzeit(\DateTime $endeBietzeit)
    {
        $this->endeBietzeit = $endeBietzeit;
        return $this;
    }

    /**
     * Gets as hoechstgebotZeigen
     *
     * @return bool
     */
    public function getHoechstgebotZeigen()
    {
        return $this->hoechstgebotZeigen;
    }

    /**
     * Sets a new hoechstgebotZeigen
     *
     * @param bool $hoechstgebotZeigen
     * @return self
     */
    public function setHoechstgebotZeigen($hoechstgebotZeigen)
    {
        $this->hoechstgebotZeigen = $hoechstgebotZeigen;
        return $this;
    }

    /**
     * Gets as mindestpreis
     *
     * @return float
     */
    public function getMindestpreis()
    {
        return $this->mindestpreis;
    }

    /**
     * Sets a new mindestpreis
     *
     * @param float $mindestpreis
     * @return self
     */
    public function setMindestpreis($mindestpreis)
    {
        $this->mindestpreis = $mindestpreis;
        return $this;
    }

    /**
     * Adds as userDefinedSimplefield
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield $userDefinedSimplefield
     */
    public function addToUserDefinedSimplefield(\MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield $userDefinedSimplefield)
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
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[]
     */
    public function getUserDefinedSimplefield()
    {
        return $this->userDefinedSimplefield;
    }

    /**
     * Sets a new userDefinedSimplefield
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedSimplefield[] $userDefinedSimplefield
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
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield $userDefinedAnyfield
     */
    public function addToUserDefinedAnyfield(\MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield $userDefinedAnyfield)
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
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[]
     */
    public function getUserDefinedAnyfield()
    {
        return $this->userDefinedAnyfield;
    }

    /**
     * Sets a new userDefinedAnyfield
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedAnyfield[] $userDefinedAnyfield
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
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld
     */
    public function addToUserDefinedExtend(\MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType $feld)
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
     * @return \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[]
     */
    public function getUserDefinedExtend()
    {
        return $this->userDefinedExtend;
    }

    /**
     * Sets a new userDefinedExtend
     *
     * @param \MediaStoreNet\OpenImmo\Classes\UserDefinedExtend\UserDefinedExtendAnonymousPHPType\FeldAnonymousPHPType[] $userDefinedExtend
     * @return self
     */
    public function setUserDefinedExtend(array $userDefinedExtend)
    {
        $this->userDefinedExtend = $userDefinedExtend;
        return $this;
    }


}

