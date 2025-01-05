<?php

if (isset($__POST)) {
  $name = $__POST["name"];
  $email = $__POST["email"];
  $password = $__POST["password"];
  $confirmPassword = $__POST["confirmePassword"]; 
}

include "../classes/register.class.php";

$register = new Register($name, $email, $password, $confirmPassword);
?>