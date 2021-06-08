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
      <a class="active" href="index.php">Home</a>
      <a href="bestellen.php">Bestellen</a>
      <a href="login.php">Login</a>
    </div>
    <div id="content">
    <div class="contis">
    <?php
        if(isset($_GET['logout'])) {
            ?>
      <h3>Erfolgreich ausgeloggt</h3> 
    <?php 
           } ?>
    <h3>Friedls Maultaschen</h3>
    <div class="subcontis">
      <p>Man kann zum Beispiel in einem unserer Teams mitmachen! Jedes Semester gibt es in der ersten Vorlesungswoche den Fachschafts-Kennenlernabend, wo sich die verschiedenen Teams vorstellen. Dort bekommt man einen guten Überblick darüber, was wir alles machen und welche Möglichkeiten es gibt, sich bei uns zu engagieren. Im Anschluss wird gemeinsam gegrillt. Aber keine Sorge, man kann auch außerhalb des Termins bei uns einsteigen.

        Eine weitere gute Möglichkeit ist es, einfach donnerstags um 19:30 Uhr ins WiSo-Büro zu kommen. Dort findet jede Woche (auch in den Semesterferien) der Jour fixe statt; unser Fachschaftstreffen. Hier treffen wir uns, um aktuelle Geschehnisse zu besprechen und Beschlüsse zu fassen. Anschließend sitzen wir noch gemütlich bei einem Bier oder einer Fassbrause zusammen. ;) Der Jour fixe ist daher eine gute Möglichkeit, um andere Fachschafter kennenzulernen und bei uns einzusteigen. Aber keine Sorge,     man unterschreibt nichts und auch ein interessiertes vorbeischauen verpflichtet zu gar nichts!
      </p>
    </div>
    </div>
    </div>
    <footer>
         <p> Friedls Maultaschen</p>
     </footer>
</body>
</html>
