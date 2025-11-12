<?php

use App\Http\Controllers\PATH\RegistroPathController;

class Router{

    public $Home;

    public function __construct() {
        $this->Home = __DIR__.'../../app/views/Home.php';
    }


    public function redirect($url){
        switch ($url) {
            case '/':
                require_once __DIR__.'/../Controllers/PATH/LoginControllerPath.php';
                $controller = new LoginControllerPath();
                $controller->index();
                break;
            case '/login':
                require_once __DIR__.'/../Controllers/PATH/LoginControllerPath.php';
                $controller = new LoginControllerPath();
                $controller->index();
                break;
            case '/home':
                require_once __DIR__.'/../Controllers/PATH/HomeControllerPath.php';
                $controller = new HomeControllerPath();
                $controller->index();
                break;
            case '/reg':
                require_once __DIR__.'/../Controllers/PATH/RegistrarControllerPath.php';
                $controller = new RegistrarPathController();
                $controller->index();
                break;
            case '/setUser':
                require_once __DIR__.'/../Controllers/POST/SetUserController.php';
                $controller = new SetUserController();
                $controller->index();
                break;
            
            default:
                echo '<h1 style="color:red">ERROR 404</h1>';
                break;
        }
    }


}