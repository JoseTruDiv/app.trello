<?php

require_once __DIR__.'/Router/router.php';

$url = $_SERVER['REQUEST_URI'];

$router = new Router();

$router->redirect($url);