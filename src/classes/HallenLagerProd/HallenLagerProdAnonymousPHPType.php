<?php

namespace MediaStoreNet\OpenImmo\HallenLagerProd;

/**
 * Class representing HallenLagerProdAnonymousPHPType
 */
class HallenLagerProdAnonymousPHPType
{

    /**
     * @var string $hallenTyp
     */
    private $hallenTyp = null;

    /**
     * Gets as hallenTyp
     *
     * @return string
     */
    public function getHallenTyp()
    {
        return $this->hallenTyp;
    }

    /**
     * Sets a new hallenTyp
     *
     * @param string $hallenTyp
     * @return self
     */
    public function setHallenTyp($hallenTyp)
    {
        $this->hallenTyp = $hallenTyp;
        return $this;
    }


}

