<?php

    function inputFilter($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function getDirectory() {
        require "assets/config/php/config.php";
        $requestSQL = "SELECT * FROM person ORDER BY lastname ASC";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->execute();
        return $reponse;
    }

    function getDetailPerson() {
        require "assets/config/php/config.php";
        $id = intval($_GET['id']);
        $requestSQL = 
            "SELECT person.*, company.name, 
            CONCAT(company.number, ', ', company.street, ' ', company.zip, ' ', company.city, ' ', company.country) 
                AS adress, 
            bill.object 
                AS billList 
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

    //// ADMIN ////

    function getAddPerson() {
        if(isset($_POST["submit"])){
            require "assets/config/php/config.php";

            $firstname = inputFilter($_POST["firstname"]);
            $lastname = inputFilter($_POST["lastname"]);
            $phone = inputFilter($_POST["phone"]);
            $email = inputFilter($_POST["email"]);
            $company = inputFilter($_POST["company"]);

            if (filter_var($firstname, FILTER_SANITIZE_STRING)) {
               $firstname_valid = $firstname;
            } 
            // else {
            //    // header("")// redirection
            // }

            if (filter_var($lastname, FILTER_SANITIZE_STRING)) {
               $lastname_valid = $lastname;
            } 

            if (filter_var($phone, FILTER_SANITIZE_STRING)) {
               $phone_valid = $phone;
            } 

            $email_san = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (filter_var($email_san, FILTER_VALIDATE_EMAIL)) {
               $email_valid = $email_san;
            }


            if (filter_var($company, FILTER_SANITIZE_NUMBER_INT)) {
                $company_valid = $company;
            }            

            $addRequestSQL = "INSERT INTO person (firstname, lastname, phone, email, company) VALUES (?,?,?,?,?)";
            $reponse = $pdo->prepare($addRequestSQL);
            $reponse->bindParam(1, $firstname_valid, PDO::PARAM_STR);
            $reponse->bindParam(2, $lastname_valid, PDO::PARAM_STR);
            $reponse->bindParam(3, $phone_valid, PDO::PARAM_STR);
            $reponse->bindParam(4, $email_valid, PDO::PARAM_STR);
            $reponse->bindParam(5, $company_valid, PDO::PARAM_INT);
            $reponse->execute();
            $reponse->closeCursor();
            return $reponse;

        } else {
            // header('Location: /COGIP-app/?page=admin');
        }
    }

    function getCompanyName() {
        require "assets/config/php/config.php";
        $companyRequestSQL = "SELECT company.id, company.name FROM company";
        $getCompanyName = $pdo->prepare($companyRequestSQL);
        $getCompanyName->execute();
        return $getCompanyName;
    }
    
    function getUpdatePerson() {
        if(isset($_POST["submit"])){
            require "assets/config/php/config.php";
            $id = intval($_GET['id']);
            $firstname = inputFilter($_POST["firstname"]);
            $lastname = inputFilter($_POST["lastname"]);
            $phone = inputFilter($_POST["phone"]);
            $email = inputFilter($_POST["email"]);
            $company = inputFilter($_POST["company"]);

            if (filter_var($firstname, FILTER_SANITIZE_STRING)) {
                $firstname_valid = $firstname;
            }
 
            if (filter_var($lastname, FILTER_SANITIZE_STRING)) {
            $lastname_valid = $lastname;
            } 

            if (filter_var($phone, FILTER_SANITIZE_STRING)) {
            $phone_valid = $phone;
            } 

            $email_san = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (filter_var($email_san, FILTER_VALIDATE_EMAIL)) {
            $email_valid = $email_san;
            }


            if (filter_var($company, FILTER_SANITIZE_NUMBER_INT)) {
                $company_valid = $company;
            }    
            
            $updateRequestSQL = "
                UPDATE person  
                SET firstname = ?, lastname = ?, phone = ?, email = ?, company = ?
                WHERE id=?;";
            $reponse = $pdo->prepare($updateRequestSQL);
            $reponse->bindParam(1, $firstname_valid, PDO::PARAM_STR);
            $reponse->bindParam(2, $lastname_valid, PDO::PARAM_STR);
            $reponse->bindParam(3, $phone_valid, PDO::PARAM_STR);
            $reponse->bindParam(4, $email_valid, PDO::PARAM_STR);
            $reponse->bindParam(5, $company_valid, PDO::PARAM_INT);
            $reponse->bindParam(6, $id, PDO::PARAM_INT);
            $reponse->execute();
            $reponse->closeCursor();
            return $reponse;

        }
    }

    function getUpdateDetailPerson() {
        require "assets/config/php/config.php";
        $id = intval($_GET['id']);
        $requestSQL = "
            SELECT *
            FROM person
            WHERE person.id=?;";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, $id, PDO::PARAM_INT);
        $reponse->execute();
        $donnees = $reponse->fetch();
        $reponse->closeCursor();
        return $donnees;
    }

    function getDeletePerson() {
        require "assets/config/php/config.php";
        $id = intval($_GET['id']);
        $requestSQL = "
            DELETE FROM person
            WHERE id=?;";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(1, $id, PDO::PARAM_INT);
        $reponse->execute();
        $donnees = $reponse->fetch();
        $reponse->closeCursor();
        return $donnees;
    }

?>