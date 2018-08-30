<?php
    require "assets/config/php/config.php";

    $selectionPrepare= "SELECT bill.*,company.name,person.lastname, person.firstname
    FROM bill,company,person WHERE bill.number=:number
    AND bill.company=company.id
    AND bill.person=person.id";

    $req = $pdo->prepare($selectionPrepare);

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
      <th>Personne en charge</th>
      <th>Personne en charge</th>
      </tr>";
    echo (
      "<tr>".
      "<td>".$data['number'] . "</td>".
      "<td>".$data['date'] . "</td>".
      "<td>".$data['object'] . "</td>".
      "<td>".$data['name'] . "</td>".
      "<td>".$data['firstname'] . "</td>".
      "<td>".$data['lastname'] . "</td>".
      "</tr>"
      );


   ?>
