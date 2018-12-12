<?php

spl_autoload_register(function($class){
    $file='vendor'.DIRECTORY_SEPARATOR.$class.'.php';
    if(file_exists($file)){
        include_once $file;
        return true;
    }
    return false;
});

//$controller=new controllers\Main();
//echo $controller;
