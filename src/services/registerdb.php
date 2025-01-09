<?php


require_once "../config/db.php";

require_once "../services/register.php";

class RegisterDb  extends Register{
    private $link;
    
    
    public function __construct($name, $email, $password, $confirmPassword) {
        parent::__construct($name, $email, $password, $confirmPassword);

        $this->link = (new DatabaseConnection)->connect();
    }
    protected function checkUser() {
     
            $stmt = $this->link->prepare("SELECT * FROM users WHERE name = ? OR email = ?");
            
            if (!$stmt->execute([$this->name, $this->email])) {
                return false;
            }

            if ($stmt->rowCount() > 0) {
                return true;
            }

            return false; 

    }

    public function registerUser() {
        
        if ($this->checkUser()) {
            return "this email or name is already used"; 
        }
            $stmt = $this->link->prepare("INSERT INTO users (name, email, pwd) VALUES (?, ?, ?)");
            // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            if(!$stmt->execute([$this->name, $this->email, $this->password])){
                return "oops somthing went wrong";
            } 
            $stmt = null;
    }

    
}



// if ($user->emptyInput()) {
//     echo $user->emptyInput();
//    return;
// }elseif ($user->invalidEmail()) {
//     echo $user->invalidEmail();
//    return;
// }elseif ($user->password()) {
//     echo $user->password();
//     return;
// }elseif ($user->pwdMatch()) {
//     echo $user->password();
//     return;
// }elseif ($user->invalidUserName()) {
//     echo $user->invalidUserName();
//     return;
// }