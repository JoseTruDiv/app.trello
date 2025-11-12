<?php

class RegistrarPathController{

    function index(){
        $return_view = __DIR__.'/../../../app/views/Registrar.php';
        require_once $return_view;
    }

}