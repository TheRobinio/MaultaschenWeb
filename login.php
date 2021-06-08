<?php
  session_start();
  if(isset($_SESSION['userid'])) {
    header('Location: control.php');
  }
  if(isset($_GET['login'])) {
  $name = $_POST['name'];
  $passwort = $_POST['pw'];
  
  //Überprüfung des Passworts
  if ($name == "maultasche") {
    if($passwort == "maultasche") {
    $_SESSION['userid'] = $name;
    header('Location: control.php');
    die('Login erfolgreich. Weiter zu <a href="control.php">internen Bereich</a>');
    }
  }
}     ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
        <div class="topnav">
          <a href="index.php">Home</a>
          <a href="bestellen.php">Bestellen</a>
          <a class="active" href="login.php">Login</a>
        </div>
        <div id="content">
        <div class="contis">
        <h3 style="text-align:center">Login-Berreich</h3>
        <form class="loginfield" action="?login=1" method="post">
          <input name="name" placeholder="User"/>
          <input type="password" name="pw" placeholder="Passwort"/>
          <input type="submit" value="Log in"/>
        </form>
        </div>
        </div>
      <footer>
         <p>&COPY; Friedls Maultaschen</p>
     </footer>
   </body>
</html>
