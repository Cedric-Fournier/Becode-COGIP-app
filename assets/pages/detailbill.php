<?php

try {
  $bdd= new PDO('mysql:host=localhost;dbname=COGIP-DB;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

//
  $req = $bdd->prepare("SELECT * FROM bill where number=:number");
  $id=intval($_GET['number']);
  $req->bindParam(":number", $id);

  $req->execute();
  $data= $req ->fetch();
  echo "
  <table border='1'>
  <tr>
  <th> Numéro</th>
  <th>Date</th>
  <th>sujet</th>
  <th>Société</th>
  <th>Personne</th>
  </tr>";
  echo ( "<tr>".
    "<td>".$data['number'] . "</td>".
    "<td>".$data['date'] . "</td>".
    "<td>".$data['object'] . "</td>".
    "<td>".$data['company'] . "</td>".
    "<td>".$data['person'] . "</td>".
    "</tr>"
    );
  // while($data= $req ->fetchAll()){
  //   echo "<tr>" .
  //     "<td>" . htmlspecialchars($data['number']). "</td>".
  //     "<td>" . htmlspecialchars($data['date']). "</td>".
  //     "<td>" . htmlspecialchars($data['object']). "</td>".
  //     "<td>" . htmlspecialchars($data['company']). "</td>".
  //     "<td>" . htmlspecialchars($data['person']). "</td>".
  //     "</tr>"
  //     ;
  //
  // };


  $req->closeCursor();






 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table>

     </table>
   </body>
 </html>
