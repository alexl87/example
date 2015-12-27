<?php
/**
 * Created by PhpStorm.
 * User: Alessandro
 * Date: 27/12/2015
 * Time: 14:23
 */
header("Content-type: text/xml");

include "Manager.php";
include_once "Bean.php";

echo "<?xml version='1.0' encoding='UTF-8'?>";
if(isset($_GET["something"])){
    //fingo di chiedere qualcosa al manager/model
    $mng = new Manager();


    echo "<list>";
    for($i=0;$i<count($mng->readAll());$i++){
        echo "<element>";
        echo $mng->readAll()[$i];
        echo "</element>";
    }
    echo "</list>";
}