<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bestellen</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     <div class="topnav">
       <a href="index.php">Home</a>
       <a class="active" href="bestellen.php">Bestellen</a>
       <a href="login.php">Login</a>
     </div><!-- comment -->
    <div id="content">
    <div class="contis" id="bestell-form">
    <div id="subbut">
     <h3>Bestellen</h3>
    </div>
    <form action="sendtome.php" method="post">
      <div>
        <p class="lefts">Ihr Name</p>
        <span class="bestellfeld"><input type="text" name ="name" placeholder="Vorname, Nachname"></input></span>
      </div>
      <div>
        <p class="lefts">E-Mail</p>
        <span class="bestellfeld"><input type="text" name ="adresse" placeholder="example@mail.com"></input></span>
      </div>
      <div>
        <p class="lefts">Gewünschte Abholzeit</p>
        <span class="bestellfeld"><input type="time" name ="time"></input></span>
      </div>
      <div>
        <p class="lefts">Orginal Maultaschen</p>
        <span class="bestellfeld"><input type="number" name="anzahl" placeholder="0"></input></span>
      </div>
      <div id="subbut">
        <span><input id="submitbut" type="submit" value="Abschicken"></input></span>
      </div>
     </form>
      </div>
    </div>
     <footer>
         <p>&COPY; Friedls Maultaschen</p>
     </footer>
    </body>
</html>
