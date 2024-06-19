<?php

    //funcion en php obtener el nombre de las clases
    //echo __DIR__;

    spl_autoload_register(function($clase){

        $archivo= __DIR__."/".$clase.".php";
        $archivo=str_replace("\\","/",$archivo);

        if(is_file($archivo)){
            require_once $archivo;
        }
    });