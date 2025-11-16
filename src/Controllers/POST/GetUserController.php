<?php
    session_start();
    require_once __DIR__.'/../../Models/User.php';
    class GetUserController{
        function index(){
            $json_data = file_get_contents('php://input');
            $data = json_decode($json_data, true); 
            var_dump($data);
            $password = $data['passwordLogin'];
            $recordarme = number_format($data['savePoint']);
            $userModel = new User($data['emailLogin'],$password);
            $result = $userModel->getUser();
            $redirect = '';
            if ($result==0) {
                $_SESSION['result'] = 0;
                $redirect = '/login';
            }else{
                $redirect = '/home';
                $_SESSION['result'] = $result;
            }
            if ($recordarme==1) {
                $_SESSION['recordarme'] = true;
            }
            ob_clean();
            echo json_encode([
                'success' => true,
                'redirect' => $redirect,
            ]);
            exit();
        }
    }