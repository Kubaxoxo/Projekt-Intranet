<?php
    $user = mysqli_real_escape_string($dbconn, $_POST["user"]);
    $email = mysqli_real_escape_string($dbconn, $_POST["email"]);
    $pass = mysqli_real_escape_string($dbconn, $_POST["pass"]);

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    
    if (mysqli_query($dbconn, "INSERT INTO uzytkownicy (user, email, pass) VALUES ('$user', '$email', '$pass')")){
        echo "";
     } else{
        echo "Nieoczekiwany błąd";
     }
?>