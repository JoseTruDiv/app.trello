<?php
require_once __DIR__.'/../Data/database.php';
class User{
    protected $idUser;
    protected $email;
    protected $password;
    public function __construct($email,$password) {
        $this->email = $email;
        $this->password = $password;
    }
    public function setUser(){
        $sql = 'INSERT INTO user (email,password) VALUES(:email,:password)';
        try {
            $pdo = db();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':email' => $this->email,
                ':password' => $this->password
            ]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function getUser(){
        $sql = 'SELECT id, password FROM user WHERE email=:email';
        try {
            $pdo = db();
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->execute();
            $user_row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user_row && password_verify($this->password, $user_row['password'])) {
                return $user_row['id'];
            }else{
                return 0;
            }
        } catch (\Throwable $th) {
            return 0;
        }
    }
}