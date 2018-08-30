<?php

    require "assets/config/php/config.php";
    $pdo=connectDB();
    function companyCreate(){global $pdo;}
    function companyRead(){global $pdo;}
    function companyUpdate(){global $pdo;}
    function companyDelete(){global $pdo;}

    function companyView(){
        $requestSQL="SELECT id,name from company order by name asc";
        global $pdo;
        $requete = $pdo->prepare($requestSQL);
        $requete->execute();
        $company = $requete->fetchAll();
        $requete->closeCursor();
        return $company;
    }
?>