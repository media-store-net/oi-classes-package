<?php

namespace MediaStoreNet\OpenImmo\Classes\Objektkategorie;

/**
 * Class representing ObjektkategorieAnonymousPHPType
 */
class ObjektkategorieAnonymousPHPType
{

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Nutzungsart $nutzungsart
     */
    private $nutzungsart = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Vermarktungsart $vermarktungsart
     */
    private $vermarktungsart = null;

    /**
     * @var \MediaStoreNet\OpenImmo\Classes\Objektart $objektart
     */
    private $objektart = null;

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
     * Gets as nutzungsart
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Nutzungsart
     */
    public function getNutzungsart()
    {
        return $this->nutzungsart;
    }

    /**
     * Sets a new nutzungsart
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Nutzungsart $nutzungsart
     * @return self
     */
    public function setNutzungsart(\MediaStoreNet\OpenImmo\Classes\Nutzungsart $nutzungsart)
    {
        $this->nutzungsart = $nutzungsart;
        return $this;
    }

    /**
     * Gets as vermarktungsart
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Vermarktungsart
     */
    public function getVermarktungsart()
    {
        return $this->vermarktungsart;
    }

    /**
     * Sets a new vermarktungsart
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Vermarktungsart $vermarktungsart
     * @return self
     */
    public function setVermarktungsart(\MediaStoreNet\OpenImmo\Classes\Vermarktungsart $vermarktungsart)
    {
        $this->vermarktungsart = $vermarktungsart;
        return $this;
    }

    /**
     * Gets as objektart
     *
     * @return \MediaStoreNet\OpenImmo\Classes\Objektart
     */
    public function getObjektart()
    {
        return $this->objektart;
    }

    /**
     * Sets a new objektart
     *
     * @param \MediaStoreNet\OpenImmo\Classes\Objektart $objektart
     * @return self
     */
    public function setObjektart(\MediaStoreNet\OpenImmo\Classes\Objektart $objektart)
    {
        $this->objektart = $objektart;
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

