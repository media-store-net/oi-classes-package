<?php

namespace MediaStoreNet\OpenImmo\Classes\ObjektText;

/**
 * Class representing ObjektTextAnonymousPHPType
 */
class ObjektTextAnonymousPHPType
{

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }


}

