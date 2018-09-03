<?php

    // require "assets/config/php/config.php";
    // global $pdo;
    function companyCreate(){
        require "assets/config/php/config.php";
        $message="";
        if(isset($_POST['creer'])){
            // print_r($_POST);
            $requestSQL="INSERT INTO company (name, street, number, zip, city, country, VAT, phone, type) VALUES (:name, :street, :number, :zip, :city, :country, :VAT, :phone, :type);";
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
			$message="La société a été ajoutée avec succès.";
            $requete->closeCursor();
        }
        return $message;
    }

function lireTypeCompany(){
    $data=array();
    require "assets/config/php/config.php";
    $requestSQL="SELECT type.* from type ";
    $requete = $pdo->prepare($requestSQL);
    $requete->execute();
    $type = $requete->fetchAll();
    $requete->closeCursor();
    $checkType=["1"=>"checked","2"=>""];
    $data['0']=$type;
    $data['1']=$checkType;
    return $data;
}

    function companyRead($id){
        $data=array();
        require "assets/config/php/config.php";
            // company
        $requestSQL="SELECT company.*,type.type AS categorie from company,type where company.id = $id and company.type=type.id";
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $company = $requete->fetch();
        $requete->closeCursor();
        $data[0]=$company;
            // person
        $requestSQL="SELECT lastname,firstname from person where person.company = $id";
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $person = $requete->fetchAll();
        $requete->closeCursor();
        $data[1]=$person;
            // bill
        $requestSQL="SELECT object from bill where bill.company = $id";
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $bill = $requete->fetchAll();
        $requete->closeCursor();
        $data[2]=$bill;
        return $data;
    }
     function companyUpdate(){
        $data=array();
        $message="";
        require "assets/config/php/config.php";
        if(isset($_POST['modifier']))
        {
            $id=$_POST['id'];
            $requestSQL="UPDATE company SET name=:name, street=:street, number=:number, zip=:zip, city=:city, country=:country, VAT=:VAT, phone=:phone, type=:type where id = $id";
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
            $id=$_GET['id']; //variable de defaut pour le test remplacer par la variable qu'on va recuperer plutart
        }
        $checkType=array();
            $requestSQL="SELECT company.* from company where id = $id";
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

            $requestSQL="SELECT type.* from type ";
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
        $requestSQL="DELETE from company where id = $id";
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $requete->closeCursor();
        $message='vous aviez bien supprimer la societe';
        return $message;
    }

    function companyView(){
        require "assets/config/php/config.php";
        $requestSQL="SELECT id,name from company order by name asc";
        // global $pdo;
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $company = $requete->fetchAll();
        $requete->closeCursor();
        return $company;
    }

    function companyClientView(){
        require "assets/config/php/config.php";
        $requestSQL="SELECT company.id AS id,company.name AS name FROM company, type WHERE type.id=company.type AND type.type=:categorie ORDER BY company.name asc";
        $requete = $pdo->prepare($requestSQL);
        $categorie="client";
        $requete->bindParam(":categorie" , $categorie);
        $requete->execute();
        $company = $requete->fetchAll();
        $requete->closeCursor();
        return $company;
    }

    function companyProviderView(){
        require "assets/config/php/config.php";
        $requestSQL="SELECT company.id AS id,company.name AS name FROM company, type WHERE type.id=company.type AND type.type=:categorie ORDER BY company.name asc";
        $requete = $pdo->prepare($requestSQL);
        $categorie="fournisseur";
        $requete->bindParam(":categorie" , $categorie);
        $requete->execute();
        $company = $requete->fetchAll();
        $requete->closeCursor();
        return $company;
    }

    function companyDetail($idSociete){
        if(!empty($idSociete))
        {$id=$idSociete;
        }else{$id=$_GET['id'];}return $id;
    }
?>
