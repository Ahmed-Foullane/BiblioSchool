<?php

class Register {
    private $name;
    private $email;
    private $password;
    private $confirmPassword;  
    
    public function __construct($name, $email, $password, $confirmPassword){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;

    }

    public function emptyInput(){
        $result;
        if (empty($this->name || $this->email || $this->password || $this->confirmPassword)) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result;
        if ($this->password !== $this->confirmPassword) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function password() {
        $result;
        if (strlen($this->password) < 8 || 
            !preg_match("/[A-Z]/", $this->password) || 
            !preg_match("/[a-z]/", $this->password) || 
            !preg_match("/[0-9]/", $this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // Fix for existing invalidUserName method
    private function invalidUserName() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result; // Added missing return
    }
}


?>