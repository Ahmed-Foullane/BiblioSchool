<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  include_once "../services/registerdb.php";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmePassword"]; 

  $user = new RegisterDb($name, $email, $password, $confirmPassword);

  $user->registerUser();
}

?>
