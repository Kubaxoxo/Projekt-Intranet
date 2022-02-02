<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: intranet.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="PL">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>INTRANET</title>
	<meta name="description" content="intranet" />
	<link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
        <h1>INTRANET - Dołącz już dziś! </h1>
    <form action="zaloguj.php" class="form" method="post">
     <div class="action">
     <span class="load show" id="login-action" onclick="openLoginPage()">Login</span  >
     <span class="load" onclick="openRegPage()" id="reg-action">Register</span>
     </div>
     <div class="login show-page">
     <input type="text" placeholder="Username" name="login"/>
     <input type="Password" placeholder="Password" name="haslo"/>
     <button>Login</button>
     <a href="#" onclick="openRegPage()">Register</a>
     </div>
    </from>
    
    <from action="register.php" method="post">
     <div class="reg">
       <input type="text" name="user" placeholder="Username" />
       <input type="text" name="email" placeholder="Email" />
       <input type="password" name= "pass" placeholder="Password" />
       <button type="submit" name="submit">Register</button>
       <a href="#" onclick="openLoginPage()">Login</a>
     </div>
     </form>
    <?php
        if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
    ?>
     </body>
     <script>
       function openLoginPage() {
   document.querySelector(".reg").classList.remove("show-page");
   document.querySelector(".login").classList.add("show-page");
   document.getElementById("login-action").classList.add("show");
   document.getElementById("reg-action").classList.remove("show");
       }
       function openRegPage() {
   document.querySelector(".reg").classList.add("show-page");
   document.querySelector(".login").classList.remove("show-page");
   document.getElementById("reg-action").classList.add("show");
   document.getElementById("login-action").classList.remove("show");
       }
     </script>
   </html>