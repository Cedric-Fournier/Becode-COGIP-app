<?php

    // require "assets/config/php/config.php";
    // global $pdo;
    // function companyCreate(){global $pdo;}
    function companyRead($id){
        $data=array();
        global $pdo;
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
    // function companyUpdate(){global $pdo;}
     function companyDelete($id){global $pdo;
        $requestSQL="DELETE from company where id = $id";
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $requete->closeCursor();}

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
        $requestSQL="SELECT company.id AS id,company.name AS name FROM company, type WHERE type.id=company.type AND type.type=:categorie ORDER BY company.name asc";
        global $pdo;
        $requete = $pdo->prepare($requestSQL);
        $categorie="client";
        $requete->bindParam(":categorie" , $categorie);
        $requete->execute();
        $company = $requete->fetchAll();
        $requete->closeCursor();
        return $company;
    }
    function companyProviderView(){
        $requestSQL="SELECT company.id AS id,company.name AS name FROM company, type WHERE type.id=company.type AND type.type=:categorie ORDER BY company.name asc";
        global $pdo;
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
