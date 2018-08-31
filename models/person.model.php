<?php

    function getDirectory(){
        require "assets/config/php/config.php";
        $requestSQL = "SELECT * FROM person ORDER BY lastname ASC";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->execute();
        return $reponse;
    }

    function getDetailPerson(){
        require "assets/config/php/config.php";
        $id = intval($_GET['id']);
        $requestSQL = "
        SELECT person.*, company.name, 
        CONCAT(company.number, ', ', company.street, ' ', company.zip, ' ', company.city, ' ', company.country) AS adress, 
              bill.object AS billList 
        FROM person, company, bill 
        WHERE person.id=? 
        AND person.company=company.id 
        AND bill.person=person.id;";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, $id, PDO::PARAM_INT);
        $reponse->execute();
        $donnees = $reponse->fetchAll();
        $reponse->closeCursor();
        return $donnees;
    }

?>