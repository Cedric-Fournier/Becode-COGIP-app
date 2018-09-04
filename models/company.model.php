<?php

  function companyCreate() {
      require "assets/config/php/config.php";
      $message="";
      if(isset($_POST['creer'])) {
        $name=$_POST['name'];
        if (filter_var($name, FILTER_SANITIZE_STRING)) 
        {
          $name_valid = $name;
        }
        $street=$_POST['street'];
        if (filter_var($street, FILTER_SANITIZE_STRING)) 
        {
          $street_valid = $street;
        }
        $number=$_POST['number'];
        if (filter_var($number, FILTER_SANITIZE_NUMBER_INT)) 
        {
          $number_valid = $number;
        }
        $zip=$_POST['zip'];
        if (filter_var($zip, FILTER_SANITIZE_NUMBER_INT)) 
        {
          $zip_valid = $zip;
        }
        $city=$_POST['city'];
        if (filter_var($city, FILTER_SANITIZE_STRING)) 
        {
          $city_valid = $city;
        }
        $country=$_POST['country'];
        if (filter_var($country, FILTER_SANITIZE_STRING)) 
        {
          $country_valid = $country;
        }
        $VAT=$_POST['VAT'];
        if (filter_var($VAT, FILTER_SANITIZE_NUMBER_INT)) 
        {
          $VAT_valid = $VAT;
        }
        $phone=$_POST['phone'];
        if (filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) 
        {
          $phone_valid = $phone;
        }
        $type=$_POST['type'];
        if (filter_var($type, FILTER_SANITIZE_NUMBER_INT)) 
        {
          $type_valid = $type;
        }
        $requestSQL=
          "INSERT INTO company (name, street, number, zip, city, country, VAT, phone, type)
          VALUES (:name, :street, :number, :zip, :city, :country, :VAT, :phone, :type);";

        $requete = $pdo->prepare($requestSQL);

        $requete->bindParam(":name", $name_valid);
    		$requete->bindParam(":street", $street_valid);
        $requete->bindParam(":number", $number_valid);
        $requete->bindParam(":zip", $zip_valid);
    		$requete->bindParam(":city", $city_valid);
        $requete->bindParam(":country", $country_valid);
        $requete->bindParam(":VAT", $VAT_valid);
        $requete->bindParam(":phone", $phone_valid);
        $requete->bindParam(":type", $type_valid);

		    $requete->execute();
		    $message="La société a été ajoutée avec succès.";

        $requete->closeCursor();
      }
      return $message;
  }

  function lireTypeCompany() {
      $data=array();
      require "assets/config/php/config.php";
      $requestSQL="SELECT type.* FROM type ";

      $requete = $pdo->prepare($requestSQL);

      $requete->execute();

      $type = $requete->fetchAll();

      $requete->closeCursor();
      $checkType=["1"=>"checked","2"=>""];
      $data['0']=$type;
      $data['1']=$checkType;

      return $data;
  }

  function companyRead($id) {
      $data=array();
      require "assets/config/php/config.php";

          // company
      $requestSQL=
        "SELECT company.*,type.type
        AS categorie FROM company,type
        WHERE company.id = $id
        AND company.type=type.id";

      $requete = $pdo->prepare($requestSQL);

      $requete->execute();

      $company = $requete->fetch();
      $requete->closeCursor();

      $data[0]=$company;


          // person
      $requestSQL=
        "SELECT lastname,firstname
        FROM person
        WHERE person.company = $id";

      $requete = $pdo->prepare($requestSQL);

      $requete->execute();

      $person = $requete->fetchAll();
      $requete->closeCursor();
      $data[1]=$person;


          // bill
      $requestSQL=
        "SELECT object
        FROM bill
        WHERE bill.company = $id";

      $requete = $pdo->prepare($requestSQL);

      $requete->execute();

      $bill = $requete->fetchAll();
      $requete->closeCursor();
      $data[2]=$bill;

      return $data;
  }

  function companyUpdate() {
      $data=array();
      $message="";

      require "assets/config/php/config.php";

      if(isset($_POST['modifier']))
      {
          $id=$_GET['id'];
          $requestSQL=
            "UPDATE company
            SET name=:name, street=:street, number=:number, zip=:zip, city=:city, country=:country, VAT=:VAT, phone=:phone, type=:type
            WHERE id = $id";
          $requete = $pdo->prepare($requestSQL);

          $requete->bindParam(":name", $_POST['name']);
          $requete->bindParam(":street", $_POST['street']);
          $requete->bindParam(":number", $_POST['number']);
          $requete->bindParam(":zip", $_POST['zip']);
          $requete->bindParam(":city", $_POST['city']);
          $requete->bindParam(":country", $_POST['country']);
          $requete->bindParam(":VAT", $_POST['VAT']);
          $requete->bindParam(":phone", $_POST['phone']);
          $requete->bindParam(":type", $_POST['type']);

          $requete->execute();

          $requete->closeCursor();
          $message="Vous avez modifier la société";
      }else{
          $id=$_GET['id']; //variable de defaut pour le test remplacer par la variable qu'on va recuperer plus tard
      }
      $checkType=array();
          $requestSQL=
            "SELECT company.*
            FROM company
            WHERE id = $id";

          $requete = $pdo->prepare($requestSQL);

          $requete->execute();

          $company = $requete->fetch();
          $requete->closeCursor();

          switch ($company['type']) {
              case 1:
              $checkType['1']="checked";
              $checkType['2']="";
                  break;

              case 2:
              $checkType['1']="";
              $checkType['2']="checked";
                  break;
          }

          $requestSQL=
            "SELECT type.*
            FROM type ";

          $requete = $pdo->prepare($requestSQL);

          $requete->execute();

          $type = $requete->fetchAll();

          $requete->closeCursor();


          $data['0']=$company;
          $data['1']=$checkType;
          $data['2']=$type;
          $data['3']=$message;

          return $data;
   }

   function companyDelete($id){
      require "assets/config/php/config.php";
      $requestSQL=
        "DELETE FROM company
        WHERE id = $id";

      $requete = $pdo->prepare($requestSQL);

      $requete->execute();

      $requete->closeCursor();

      $message='vous avez bien supprimé la société';

      return $message;
  }

  function companyView() {
      require "assets/config/php/config.php";
      $requestSQL=
        "SELECT id,name
        FROM company
        ORDER BY name ASC";

      $requete = $pdo->prepare($requestSQL);

      $requete->execute();

      $company = $requete->fetchAll();
      $requete->closeCursor();

      return $company;
  }

  function companyClientView() {
      require "assets/config/php/config.php";
      $requestSQL=
        "SELECT company.id AS id,company.name AS name
        FROM company, type
        WHERE type.id=company.type
        AND type.type=:categorie
        ORDER BY company.name ASC";

      $requete = $pdo->prepare($requestSQL);

      $categorie="client";
      $requete->bindParam(":categorie" , $categorie);

      $requete->execute();
      $company = $requete->fetchAll();

      $requete->closeCursor();

      return $company;
  }

  function companyProviderView() {
      require "assets/config/php/config.php";
      $requestSQL=
        "SELECT company.id AS id,company.name AS name
        FROM company, type
        WHERE type.id=company.type
        AND type.type=:categorie
        ORDER BY company.name ASC";

      $requete = $pdo->prepare($requestSQL);

      $categorie="fournisseur";
      $requete->bindParam(":categorie" , $categorie);

      $requete->execute();
      $company = $requete->fetchAll();

      $requete->closeCursor();

      return $company;
  }

  function companyDetail($idSociete) {
      if(!empty($idSociete)) {
        $id=$idSociete;
      }else {
        $id=$_GET['id'];
      }
      return $id;
  }
?>
