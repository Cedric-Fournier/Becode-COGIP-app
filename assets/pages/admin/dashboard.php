<?php
try {
  $bdd= new PDO('mysql:host=localhost;dbname=COGIP-DB;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
function requete(){
  $reqtotal=
  "SELECT person.*,bill.*,company.*
  FROM person,bill,company
  WHERE


  "
}
$requete= $bdd->query();
$requete->fetch();
$requete->closeCursor();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
  </head>
  <body>

  </body>
</html>
