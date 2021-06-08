<?php
  session_start();
  if(isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php?logout=1');
    die();
  }
  if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
  
  }

    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "";
    $db_set;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Interner Fehler " . $conn->connect_error);
    }
    if(isset($_GET['remove'])) {
        $workingid = $_GET['remove'];
        $removesql = "UPDATE maul_ve SET orderstatus = 2 WHERE orderid='".$workingid."';";
        $removeresult = $conn->query($removesql);
    }
    if(isset($_GET['done'])) {
        $workingid = $_GET['done'];
        $donesql = "UPDATE maul_ve SET orderstatus = 1 WHERE orderid='".$workingid."';";
        $doneresult = $conn->query($donesql);
    }
    if(isset($_GET['undone'])) {
        $workingid = $_GET['undone'];
        $undonesql = "UPDATE maul_ve SET orderstatus = 0 WHERE orderid='".$workingid."';";
        $undoneresult = $conn->query($undonesql);
    }
    $sql = "SELECT orderid, name, adresse, abholzeit, anzahl, ordertime, orderstatus FROM maul_ve";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $tabledata = array();
        for($i = 0; $row = $result->fetch_assoc(); $i++) {
          $status = intval($row["orderstatus"]);
          if($status == 2) {  
          $tabledata[$i] = "<tr id='done' class='tabcon'>
            <td>OrderID: ".$row["orderid"]."</td>
            <td style='color: red'>Gelöscht</td>
            <td class='tabcon'>Gelöscht<br><a href='?undone=".$row["orderid"]."'>Wiederherstellen</a></td>   
            </tr>
            <tr class='tabcon'>
          <td>---</td>
          </tr>";
          }
          if($status == 1) {  
          $tabledata[$i] = "<tr id='done' class='flright'>
            <td>OrderID: ".$row["orderid"]."</td>
            <td style='color:green;'>Erledigt</td></tr>
            <tr id='done'><td>".$row["name"]."</td>
            <td>".$row["adresse"]."</td>
            <td class='tabcon'>".$row["abholzeit"]."</td>
            <td class='tabcon'>".$row["anzahl"]."</td>
            <td class='tabcon'>".$row["ordertime"]."</td>
            <td class='tabcon'><a href='?remove=".$row["orderid"]."'>x</a></td>   
            <td class='tabcon'>Bereits erledigt<br><a href='?undone=".$row["orderid"]."'>Rückgängig</a></td>
          </tr><tr class='tabcon'>
          <td>---</td>
          </tr>";
          }

          if($status == 0) { 
          $tabledata[$i] = "<tr class='flright'>
            <td>OrderID: ".$row["orderid"]."</td></tr>
            <tr><td>".$row["name"]."</td>
            <td>".$row["adresse"]."</td>
            <td class='tabcon'>".$row["abholzeit"]."</td>
            <td class='tabcon'>".$row["anzahl"]."</td>
            <td class='tabcon'>".$row["ordertime"]."</td>
            <td class='tabcon'><a href='?remove=".$row["orderid"]."'>x</a></td>   
            <td class='tabcon'><a href='?done=".$row["orderid"]."'>x</a></td>
          </tr><tr class='tabcon'>
          <td>---</td>
          </tr>";
          }
        }
    }
        $conn->close();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin-Panel</title>
    <meta charset="utf-8"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  </head>
  <body>
        <div class="topnav">
          <a href="index.php">Home</a>
          <a href="bestellen.php">Bestellen</a>
          <a href="login.php">Login</a>
          <a class="active" href="?logout=1">Augloggen</a>
          <a href="download.php">Downloaden</a>
        </div>
      <div id="content">
        <div class="contis" style="width: auto;">
        <h3>Bestellverzeichnis</h3>
        <div class="subcontis">
            <table id="ve">
                <tr>
                    <th>Name</th>
                    <th>Adresse</th>
                    <th>Abholzeit</th>
                    <th>Anzahl</th>
                    <th>Bestellzeit</th>
                    <th>Löschen</th>
                    <th>Bearbeitet</th>
                </tr><tr class="flright">
                    <td>---</td>
                </tr>
                <?php 
                foreach ($tabledata as $value) {
                    echo $value;
                }
                ?>
            </table>
        </div>
        </div>
      </div>
      <footer>
         <p>&COPY; Friedls Maultaschen</p>
     </footer>
   </body>
</html>
