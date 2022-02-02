<?php
require_once "connect.php";
                 
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
$sql = "SELECT id, user, email FROM uzytkownicy ORDER BY id";
                 
$rezultat = mysqli_query($polaczenie, $sql);
$wiersz = $rezultat->fetch_assoc();
                 
$_SESSION['id'] = $wiersz['id'];
$_SESSION['user'] = $wiersz['user'];
$_SESSION['email'] = $wiersz['email'];
                 
    if (mysqli_num_rows($rezultat) > 0) {
                     
    while($row = mysqli_fetch_assoc($rezultat)) 
    {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['user']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "</tr>";
   }
} else {
   echo "0 results";
}
$polaczenie->close();
 
?>