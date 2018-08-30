<!-- <?php include '../partials/header.php' ?> -->

<?php
require "../config/php/config.php";

$req = $pdo->query("SELECT * FROM bill ORDER BY date DESC");
echo "
<h1>Factures</h1>
<table border='1'>
<caption>Listedes dernières factures</caption>
<tr>
<th>Date</th>
<th>Sujet</th>
</tr>";

while($data= $req ->fetch()){
  echo "<tr>" .
    "<td>" . htmlspecialchars($data['date']). "</td>".
    "<td><a href=\"/assets/pages/detailbill.php?number=". htmlspecialchars($data['number']) ."\">" . htmlspecialchars($data['object']). "</a></td>".
    "</tr>"
    ;


};
echo "</table>";
$req->closeCursor();

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Factures</title>
  </head>
  <body>
    <table>

      <!-- Afficher la liste des randonnées -->
    </table>
  </body>
</html>
