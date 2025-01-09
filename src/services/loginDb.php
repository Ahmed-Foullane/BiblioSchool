<?php

namespace BiblioSchool\Services;

class LoginDb extends Login {
    protected $link;
    protected $userData = null;
    
    public function __construct($email, $password, $link) {
        parent::__construct($email, $password);
        $this->link = $link;
    }

    protected function checkUser() {
        $stmt = $this->link->prepare("SELECT * FROM users WHERE email = ?");
        
        if (!$stmt->execute([$this->email])) {
            throw new \Exception("Database error while checking user");
        }
        
        $userData = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        if (!$userData) {
            throw new \Exception("User not found");
        }

        if (!password_verify($this->password, $userData['password'])) {
            throw new \Exception("Invalid password");
        }

        $this->userData = $userData;
        return true;
    }

    public function authenticateUser() {
        $this->validateAll();
        return $this->checkUser();
    }

    // public function getUserData() {
    //     return $this->userData;
    // }
}