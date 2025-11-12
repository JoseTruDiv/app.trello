<?php
    session_start();
    require_once __DIR__.'/../../Models/User.php';
    class SetUserController{
        function index(){
            $json_data = file_get_contents('php://input');
            $data = json_decode($json_data, true); 
            $passwordFormat = hash('sha256',$data['passwordLogin']);
            $userModel = new User($data['emailLogin'],$passwordFormat);
            $userModel->setUser();
            $_SESSION['emailUser'] = $data['emailLogin'];
            $_SESSION['reg'] = true;
            ob_clean();
            echo json_encode([
                'success' => true,
                'redirect' => '/login'
            ]);
            exit();
        }
    }