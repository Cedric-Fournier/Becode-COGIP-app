<?php
require "assets/config/php/config.php";

$req = $pdo->query("SELECT * FROM bill ORDER BY date DESC");
echo "
  <h1>Factures</h1>
  <table border='1'>
  <caption>Liste des dernières factures</caption>
  <tr>
  <th>Date</th>
  <th>Sujet</th>
  </tr>";

while($data= $req ->fetch()){
  echo "<tr>" .
    "<td>" . htmlspecialchars($data['date']). "</td>".
    "<td><a href=\"?page=detailbill&number=". htmlspecialchars($data['number']) ."\">" . htmlspecialchars($data['object']). "</a></td>".
    "</tr>"
    ;


};
echo "</table>";

 ?>
