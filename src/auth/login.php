<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="web site for selling cars">

    <title>Document</title>
    <link rel="stylesheet" href="./public/styles/style.css?v=<?php echo time()?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <header>
        <img src="../assets/icons/logo.svg" style="margin-top: 15px" alt="">
        <nav>
            <ul class="navMenu">
                <li><a class="navItem" href="index.html ">Home</a></li>
               
                
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
            <h3>Sign In</h3>
      
            
            <label for="email">email:</label>
            <input id="email" type="email" name="email" placeholder="enter your email">
            <label for="password">enter password:</label>
            <div>
                <input id="password" type="password" name="pasword" placeholder="enter your email">
                <img class="eye open" src="./public/assets/icons/eye.svg" style="width: 25px; height: 20px; display: none;" alt="">
                <img class="eye close" src="./public/assets/icons/closeEye.svg" style="width: 25px; height: 20px;" alt="">
            </div>
            <button id="loginUser">Sign In</button>
           <p class="go-to-register">I don't have an acount<a href="singUp.html">Register</a></p> 
        </form>
    </section>

    <script src="./public/script.js?v=<?php echo time();?>"></script>
</body>
</html>