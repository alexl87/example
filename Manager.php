<?php
/**
 * Created by PhpStorm.
 * User: Alessandro
 * Date: 27/12/2015
 * Time: 14:11
 *
    Questo per intenderci è il vecchio model
*/
include "Bean.php";

class Manager
{
    /**
     * is utilized for reading data from inaccessible members.
     *
     * @param $name string
     * @return mixed
     * @link http://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.members
     */
    function readAll(){

        //supponiamo di leggere qualcosa dal db, come fa un manager (ex model)
        $b = new Bean();
        $b->setProva("ciao");
        $b->setProva2("ciao");
        $b2 = new Bean();
        $b2->setProva("ciao2");
        $b2->setProva2("ciao2");
        return array($b,$b2);
    }

}