<?php
// Login.php
namespace BiblioSchool\Services;

class Login {
    protected $email;
    protected $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser(){
        if(!$this->emptyInput()){
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if(!$this->validEmail()){
            header("location: ../index.php?error=invalidEmail");
            exit();
        }
    }
    
    public function emptyInput() {
        if (empty($this->email) || empty($this->password)) {
            return false;
        }
        return true;
    }

    protected function validEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {    
            $result = true;
        }
        return $result;
    }

   
}