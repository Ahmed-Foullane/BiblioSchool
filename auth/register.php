<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="web site for selling cars">

    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/style.css?v=<?php echo time()?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <header>
       
        <img src="/logo_books-removebg-preview.png" style="margin-top: 15px" alt="logo">
        <nav>
            <ul class="navMenu">
                <li><a class="navItem" href="index.html">Home</a></li>
                <li><a class="navItem" href="Models.html">Models</a></li>
                <li><a class="navItem" href="contact.html">Contact</a></li>
                
            </ul>
            <div style="display: flex; flex-direction: row;">

              <button id="login" class="navLoginBtn"><a href="../pages/login.html">Login</a></button>
              <button id="signup" class="navSignUp"><a href="../pages/singUp.html">Sign up</a></button>
              <button class="navLogOut">Log Out</button>
          </div>
        </nav>
           <div class="humberger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
    </header>

    <section class="authentcation">

        <form>
            <h3>Sign Up</h3>
            <label for="name">name:</label>
            <input id="name" type="text" name="name" placeholder="enter your name">
            <label  for="name">email:</label>
            <input id="sginUpEamil" type="email" name="email" placeholder="enter your email" >
            <label for="name">password:</label>
            <div>
                
                <input id="signUpPassword" type="password" name="password" placeholder="enter  password">
                <img class="eye open" src="../assets/icons/eye.svg"  alt="">
                <img class="eye close" src="../assets/icons/closeEye.svg"  alt="">

            </div>
            <label for="name">confirm password:</label>
            <div>

                <input type="password" class="confirmPassword" name="confirmePassword" placeholder="confirm  password">
                <img class="eye open" src="../assets/icons/eye.svg"  alt="">
                <img class="eye close eye" src="../assets/icons/closeEye.svg" style="width: 25px; height: 20px;" alt="">
            </div>
            
            <button id="signUpBtn">Sign Up</button>
           <p class="go-to-register">Alrady have an acount  <a href="login.html">Sign In</a></p> 
        </form>
    </section>

    <script src="../script.js"></script>
    
</body>
</html>