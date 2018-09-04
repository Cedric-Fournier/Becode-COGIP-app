<?php

  function lireBill() {
    require "assets/config/php/config.php";
    $requestSQL=
      "SELECT * FROM bill
      ORDER BY date DESC";

    $requete = $pdo->prepare($requestSQL);

    $requete->execute();

    $bill = $requete->fetchAll();

    $requete->closeCursor();

    return $bill;
  }

  function deleteBill($number){
    require "assets/config/php/config.php";
    $requestSQL=
      "DELETE from bill
      WHERE number = $number";

    $requete = $pdo->prepare($requestSQL);

    $requete->execute();

    $requete->closeCursor();
    $message='vous avez bien supprimé la facture';

    return $message;
  }

  function billCreate(){
    require "assets/config/php/config.php";

    $message="";
    if(isset($_POST['creer'])){
        $requestSQL=
          "INSERT INTO bill (date, object, company, person)
           VALUES ( :date, :object, :company, :person);";

        $requete = $pdo->prepare($requestSQL);

        $requete->bindParam(":date", $_POST['date']);
        $requete->bindParam(":object", $_POST['object']);
        $requete->bindParam(":company", $_POST['company']);
        $requete->bindParam(":person", $_POST['person']);

        $requete->execute();
        $message="La Facture a été ajoutée avec succès.";
        $requete->closeCursor();
    }
    return $message;
  }


  function typeDataBill(){
    $data=array();
    require "assets/config/php/config.php";
    $requestSQL=
      "SELECT id, name
      FROM company";

    $requete = $pdo->prepare($requestSQL);

    $requete->execute();
    $company = $requete->fetchAll();

    $requete->closeCursor();


    $requestSQL=
    "SELECT id, CONCAT(lastname,' ',firstname) AS nom
    FROM person";

    $requete = $pdo->prepare($requestSQL);

    $requete->execute();
    $person = $requete->fetchAll();

    $requete->closeCursor();

    $data['0']=$company;
    $data['1']=$person;

    return $data;
  }


  function billUpdate(){
      $data=array();
      $message="";
      $data=array();
      require "assets/config/php/config.php";
      if(isset($_POST['modifier']))
      {
          $number=$_GET['number'];
          $requestSQL=
            "UPDATE bill
            SET date=:date, object=:object, company=:company, person=:person
            WHERE number = $number";

          $requete = $pdo->prepare($requestSQL);

          $requete->bindParam(":date", $_POST['date']);
          $requete->bindParam(":object", $_POST['object']);
          $requete->bindParam(":company", $_POST['company']);
          $requete->bindParam(":person", $_POST['person']);

          $requete->execute();
          $requete->closeCursor();
          $message="Vous avez modifié la facture";
      }else {
          $number=$_GET['number']; //variable de defaut pour le test remplacer par la variable qu'on va recuperer plutart
      }
      $selectCompany=array();
      $selectPerson=array();
          $requestSQL=
            "SELECT bill.*
            FROM bill
            WHERE number = $number";

          $requete = $pdo->prepare($requestSQL);

          $requete->execute();

          $bill = $requete->fetch();
          $requete->closeCursor();

          $data['0']=$bill;
          $dataBill=typeDataBill();

          foreach ($dataBill['0'] as $key => $value) {
            if($value['id']==$bill['company']) {
              $selectCompany[$value['id']]="selected";
            }
            else {
              $selectCompany[$value['id']]="";
            }
          }

          $data['1']=$dataBill['0'];

          foreach ($dataBill['1'] as $key => $value) {
            if($value['id']==$bill['person']) {
              $selectPerson[$value['id']]="selected";
            }
            else {
              $selectPerson[$value['id']]="";
            }
          }

          $data['2']=$dataBill['1'];
          $data['3']=$selectCompany;
          $data['4']=$selectPerson;
          $data['5']=$message;

          return $data;
       }




  function detailBill() {
    require "assets/config/php/config.php";
    $id=intval($_GET['number']);

    $requestSQL=
      "SELECT bill.*,company.name,person.lastname, person.firstname
      FROM bill,company,person WHERE bill.number=:number
      AND bill.company=company.id
      AND bill.person=person.id";
      $requete = $pdo->prepare($requestSQL);

      $requete->bindParam(":number", $id);

    $requete->execute();
    $detailBill = $requete->fetch();

    $requete->closeCursor();

    return $detailBill;
  }


?>
