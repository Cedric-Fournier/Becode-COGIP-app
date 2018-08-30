<?php

    function getDirectory(){
        require "assets/config/php/config.php";
        $requestSQL = "SELECT * FROM person ORDER BY lastname ASC";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->execute();
        return $reponse;
    }

    function getDetailPerson(){
        require "assets/php/function.php";
        $id = $_GET['id'];
        $reponse = displayDetailPersonByID($id);
        $donnees = $reponse->fetchAll();
        $person = $donnees['0'];
        return $person;
    }

?>