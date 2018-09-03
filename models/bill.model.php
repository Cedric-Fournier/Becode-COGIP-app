<?php


function lireBill(){
  require "assets/config/php/config.php";
  $requestSQL="SELECT * FROM bill ORDER BY date DESC";
  $requete = $pdo->prepare($requestSQL);
  $requete->execute();
  $bill = $requete->fetchAll();
  $requete->closeCursor();
  return $bill;
}


function detailBill(){
  require "assets/config/php/config.php";
  $id=intval($_GET['number']);
  $requestSQL="SELECT bill.*,company.name,person.lastname, person.firstname
    FROM bill,company,person WHERE bill.number=:number
    AND bill.company=company.id
    AND bill.person=person.id";
    $requete = $pdo->prepare($requestSQL);
    
    $requete->bindParam(":number", $id);
  $requete->execute();
  $detailBill = $requete->fetch();
  $requete->closeCursor();
  return $detailBill;}

 ?>
