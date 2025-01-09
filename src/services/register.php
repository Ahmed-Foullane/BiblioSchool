<?php
// namespace BiblioSchool\Services;


class Register {
    protected $name;
    protected $email;
    protected $password;
    protected $confirmPassword; 

    
    public function __construct($name, $email, $password, $confirmPassword){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }



    public function emptyInput(){
        $result;
        if (empty($this->name || $this->email || $this->password || $this->confirmPassword)) {
            return "fill all inputs";
        }else{
          return true;  
        }
        
    }

    public function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "invalid email";
        } else {
          return true;
        }
    }

    public function pwdMatch() {
        $result;
        if ($this->password !== $this->confirmPassword) {
            return "match password";
        } else {
          return true;  
        }
    }

    public function password() {
        $result;
        if (strlen($this->password) < 8 || 
            !preg_match("/[A-Z]/", $this->password) || 
            !preg_match("/[a-z]/", $this->password) || 
            !preg_match("/[0-9]/", $this->password)) {
            return "password is not strong";
        } else {
          return true;  
        }
        
    }

    public function invalidUserName() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name)) {
            return "in valid user name";
        } else {
          return true;  
        }
         
    }
}


?>