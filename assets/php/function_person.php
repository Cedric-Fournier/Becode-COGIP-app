<?php
    require "assets/config/php/config.php";

    function displayDetailPersonByID($getID) {
        $getID = intval($getID);
        global $pdo;
        // if(!intval($getID)){return $reponse = "Erreur";}
        $requestSQL = "SELECT person.*, company.name, CONCAT(company.number, ', ', company.street, ' ', company.zip, ' ', company.city, ' ', company.country) AS adress, bill.object AS billList FROM person, company, bill WHERE person.id=? AND person.company=company.id AND bill.person=person.id;";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, $getID, PDO::PARAM_INT);
        $reponse->execute();
        return $reponse;
    }

    function createPerson($firstname, $lastname, $phone, $email, $company) {
        global $pdo;
        $requestSQL = "INSERT INTO person (firstname, lastname, phone, email, company) VALUES (?,?,?,?,?)";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, filterSanitizeString(inputFilter($firstname)), PDO::PARAM_STR);
        $reponse->bindParam(2, filterSanitizeString(inputFilter($lastname)), PDO::PARAM_STR);
        $reponse->bindParam(3, filterSanitizeNumberInt($phone), PDO::PARAM_STR);
        $reponse->bindParam(4, filterSanitizeAndValidateEmail($email), PDO::PARAM_STR);
        $reponse->bindParam(5, filterSanitizeNumberInt($company), PDO::PARAM_INT);
        $reponse->execute();        
        return $reponse;
    }

    function updatePerson($firstname, $lastname, $phone, $email, $company, $id) {
        global $pdo;
        $requestSQL = "UPDATE person SET firstname=?, lastname=?, phone=?, email=?, company=? WHERE id=?";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, filterSanitizeString(inputFilter($firstname)), PDO::PARAM_STR);
        $reponse->bindParam(2, filterSanitizeString(inputFilter($lastname)), PDO::PARAM_STR);
        $reponse->bindParam(3, filterSanitizeNumberInt($phone), PDO::PARAM_STR);
        $reponse->bindParam(4, filterSanitizeAndValidateEmail($email), PDO::PARAM_STR);
        $reponse->bindParam(5, filterSanitizeNumberInt($company), PDO::PARAM_INT);
        $reponse->bindParam(6, filterSanitizeNumberInt($id), PDO::PARAM_INT);
        $reponse->execute();        
        return $reponse;
    }

    function deletePerson($id) {
        global $pdo;
        $requestSQL = "DELETE FROM person WHERE id = $id";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, filterSanitizeNumberInt($id), PDO::PARAM_INT);
        $reponse->execute();        
        return $reponse;
    }

?>