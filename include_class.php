<?php
    function __autoload($class_name){
        include_once 'class/' . $class_name . '.class.php';
        //print '<p>'.$class_name.'</p>'; //PARA TESTES
    }
?>