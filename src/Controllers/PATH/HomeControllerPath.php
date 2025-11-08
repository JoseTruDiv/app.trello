<?php

class HomeControllerPath{

    function index(){
        $return_view = __DIR__.'/../../../app/views/Home.php';
        require_once $return_view;
    }

}