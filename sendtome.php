<?php
$servername = "";
$username = "";
$password = "";

$conn = new mysqli($servername, $username, $password, "#db");
if ($conn->connect_error) {
    die("Interner Fehler " . $conn->connect_error);
}
$name = $_POST['name'];
$adress = $_POST['adresse'];
$time = $_POST['time'];
$anzahl = $_POST['anzahl'];
$sql = "INSERT INTO maul_ve (name, adresse, abholzeit, anzahl)"
        . " VALUES ('".$name."','".$adress."','".$time."','".$anzahl."')";
if ($conn->query($sql) == FALSE) {
    die("Error bitte erneut versuchen");
}
$conn->close();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Friedl's Maultaschen</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="bestellen.php">Bestellen</a>
      <a href="login.php">Login</a>
    </div>
    <div id="content">
      <div class="contis">
      <h3 style="text-align:center">Deine Anfrage wurde erfolgreich übermittelt</h3>
     </div>
    </div>
    <footer>
         <p>&COPY; Friedls Maultaschen</p>
     </footer>
</body>
