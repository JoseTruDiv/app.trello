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
}