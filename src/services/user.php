<?php

require_once "crud.php";
require_once "../config/db.php";

class User extends Crud{
    private $email;
    private $name;
    private $password;

    public function __construct($link, $email, $name, $password) {
        parent::__construct($link);
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    } 

    public function seConnect(){}
    public function seDeconnect(){}

    public function getEmail(){
        return $this->email;
    }
    public function getName(){
        return $this->name;
    }
    public function getPassword(){
        return $this->password;
    }
}


$user = new User($link, "ahmedfoullane@gmail.com", "ahmed", "mypassword");


// $user->crud("create", "users", ["name" => $user->getEmail(), "email" => $user->getName(),"pwd" => $user->getPassword()]);

// $user->crud("update", "users", ["name" => $user->getEmail(), "email" => $user->getName(),"pwd" => $user->getPassword()]);



// $user->crud("delete", "users", ["user_id" => 6]);



?>