<?php
    session_start();
    require_once __DIR__.'/../../Models/User.php';
    class GetUserController{
        function index(){
            $json_data = file_get_contents('php://input');
            $data = json_decode($json_data, true); 
            $password = $data['passwordLogin'];
            $userModel = new User($data['emailLogin'],$password);
            $result = $userModel->getUser();
            ob_clean();
            echo json_encode([
                'success' => true,
                'result' => $result
            ]);
            exit();
        }
    }