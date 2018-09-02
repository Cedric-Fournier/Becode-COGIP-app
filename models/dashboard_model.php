<?php
require "assets/config/php/config.php";

    $reqbill = $pdo->query("SELECT bill.*,company.name
      FROM bill,company
      WHERE bill.company=company.id
      ORDER BY date DESC
      LIMIT 5");

    echo "
      <h1>Factures</h1>
      <table border='1'>
      <caption>Liste des dernières factures</caption>
      <tr>
      <th>numéro</th>
      <th>Date</th>
      <th>Sujet</th>
      <th>Société</th>
      </tr>";

    while($dataBill= $reqbill ->fetch()){
      echo "<tr>" .
        "<td>" . htmlspecialchars($dataBill['number']). "</td>".
        "<td>" . htmlspecialchars($dataBill['date']) ."</td>".
        "<td>" . htmlspecialchars($dataBill['object']). "</td>".
        "<td>" . htmlspecialchars($dataBill['name']). "</td>".
        "</tr>"
        ;
    };
    echo "</table>";


    $reqcompany = $pdo->query("SELECT company.*,type.*
       FROM company,type
       WHERE company.type=type.id
       LIMIT 5");
    echo "<h1>Sociétés</h1>
      <table border='1'>
      <caption>Liste des dernières sociétés</caption>
      <tr>
      <th>nom</th>
      <th>numéro de téléphone</th>
      <th>type</th>";
      while($dataCompany =$reqcompany->fetch()){
      echo "</tr>".
        "<tr>" .
        "<td>" . htmlspecialchars($dataCompany['name']). "</td>".
        "<td>" . htmlspecialchars($dataCompany['phone']) ."</td>".
        "<td>" . htmlspecialchars($dataCompany['type']). "</td>".
        "</tr>"
        ;
    };
    echo "</table>";



    $reqPerson = $pdo->query("SELECT person.*,company.name
    FROM person,company
    WHERE person.company=company.id
    ORDER BY lastname DESC
    LIMIT 5");
    echo "<h1>Personnes</h1>
      <table border='1'>
      <caption>Liste des dernières personnes</caption>
      <tr>
      <th>nom</th>
      <th>prénom</th>
      <th>numéro de téléphone</th>
      <th>adresse e-mail</th>
      <th>société</th>";
      while($dataperson =$reqPerson->fetch()){
      echo "</tr>".
        "<tr>" .
        "<td>" . htmlspecialchars($dataperson['firstname']). "</td>".
        "<td>" . htmlspecialchars($dataperson['lastname']) ."</td>".
        "<td>" . htmlspecialchars($dataperson['phone']). "</td>".
        "<td>" . htmlspecialchars($dataperson['email']). "</td>".
        "<td>" . htmlspecialchars($dataperson['name']). "</td>".
        "</tr>"
        ;
    };
    echo "</table>";


 ?>
