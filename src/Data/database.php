<?php

    function db(){
        $username = 'root';
        $password = 'root';
        $dns = 'mysql:host=localhost;port=10034;dbname=trello';
        $options = [
            \PDO::ATTR_EMULATE_PREPARES => false,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ];

        return new PDO($dns,$username,$password,$options);
    } 