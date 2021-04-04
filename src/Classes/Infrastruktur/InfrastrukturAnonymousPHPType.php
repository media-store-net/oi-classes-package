<?php

namespace MediaStoreNet\OpenImmo\Classes\Infrastruktur;

/**
 * Class representing InfrastrukturAnonymousPHPType
 */
class InfrastrukturAnonymousPHPType
{

    /**
     * @var bool $zulieferung
     */
    private $zulieferung = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Ausblick $ausblick
     */
    private $ausblick = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Distanzen[] $distanzen
     */
    private $distanzen = [
        
    ];

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\DistanzenSport[] $distanzenSport
     */
    private $distanzenSport = [
        
    ];

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
     * Gets as zulieferung
     *
     * @return bool
     */
    public function getZulieferung()
    {
        return $this->zulieferung;
    }

    /**
     * Sets a new zulieferung
     *
     * @param bool $zulieferung
     * @return self
     */
    public function setZulieferung($zulieferung)
    {
        $this->zulieferung = $zulieferung;
        return $this;
    }

    /**
     * Gets as ausblick
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Ausblick
     */
    public function getAusblick()
    {
        return $this->ausblick;
    }

    /**
     * Sets a new ausblick
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Ausblick $ausblick
     * @return self
     */
    public function setAusblick(\MediaStoreNet\OpenImmo\Classes\Ausblick $ausblick)
    {
        $this->ausblick = $ausblick;
        return $this;
    }

    /**
     * Adds as distanzen
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\Distanzen $distanzen
     */
    public function addToDistanzen(\MediaStoreNet\OpenImmo\Classes\Distanzen $distanzen)
    {
        $this->distanzen[] = $distanzen;
        return $this;
    }

    /**
     * isset distanzen
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistanzen($index)
    {
        return isset($this->distanzen[$index]);
    }

    /**
     * unset distanzen
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistanzen($index)
    {
        unset($this->distanzen[$index]);
    }

    /**
     * Gets as distanzen
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Distanzen[]
     */
    public function getDistanzen()
    {
        return $this->distanzen;
    }

    /**
     * Sets a new distanzen
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Distanzen[] $distanzen
     * @return self
     */
    public function setDistanzen(array $distanzen)
    {
        $this->distanzen = $distanzen;
        return $this;
    }

    /**
     * Adds as distanzenSport
     *
     * @return self
     * @param \MediaStoreNet\OpenImmo\Classes\DistanzenSport $distanzenSport
     */
    public function addToDistanzenSport(\MediaStoreNet\OpenImmo\Classes\DistanzenSport $distanzenSport)
    {
        $this->distanzenSport[] = $distanzenSport;
        return $this;
    }

    /**
     * isset distanzenSport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistanzenSport($index)
    {
        return isset($this->distanzenSport[$index]);
    }

    /**
     * unset distanzenSport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistanzenSport($index)
    {
        unset($this->distanzenSport[$index]);
    }

    /**
     * Gets as distanzenSport
     *
     * @return \MediaStoreNet\OpenImmo\Classes\DistanzenSport[]
     */
    public function getDistanzenSport()
    {
        return $this->distanzenSport;
    }

    /**
     * Sets a new distanzenSport
     *
     * @param \MediaStoreNet\OpenImmo\Classes\DistanzenSport[] $distanzenSport
     * @return self
     */
    public function setDistanzenSport(array $distanzenSport)
    {
        $this->distanzenSport = $distanzenSport;
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

