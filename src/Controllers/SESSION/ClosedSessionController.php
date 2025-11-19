<?php
    session_start();
    class ClosedSessionController{
        function index(){
           $_SESSION['recordarme'] = null;
           header('Location: /login');
        }
    }