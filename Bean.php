<?php

/**
 * Created by PhpStorm.
 * User: Alessandro
 * Date: 27/12/2015
 * Time: 14:13
 */
class Bean
{
    private $prova="";
    private $prova2="";

    /**
     * @return string
     */
    public function getProva()
    {
        return $this->prova;
    }

    /**
     * @param string $prova
     */
    public function setProva($prova)
    {
        $this->prova = $prova;
    }

    /**
     * @return string
     */
    public function getProva2()
    {
        return $this->prova2;
    }

    /**
     * @param string $prova2
     */
    public function setProva2($prova2)
    {
        $this->prova2 = $prova2;
    }

    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    function __toString()
    {
        return $this->prova;
    }


}