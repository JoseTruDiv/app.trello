<?php

class LoginControllerPath{

    function index(){
        $return_view = __DIR__.'/../../../app/views/Login.php';
        require_once $return_view;
    }

}