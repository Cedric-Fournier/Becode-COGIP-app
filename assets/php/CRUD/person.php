<?php

    function createPerson($firstname, $lastname, $phone, $email, $company) {
        if (isset($_POST['submit'])) {
            $requestSQL = "INSERT INTO person (firstname, lastname, phone, email, company) VALUES (".$firstname.", ".$lastname.", ".$phone.", ".$email.", ".$company.")";
        } else  {
            $errorMessage = "Erreur de création.";
        }
    }

    function displayPersonByID() {
        $requestSQL = "SELECT * FROM person ORDER BY id ASC";
    }

    function displayPersonByFirstName() {
        $requestSQL = "SELECT * FROM person ORDER BY firstname ASC";
    }

    function displayPersonByLastName() {
        $requestSQL = "SELECT * FROM person ORDER BY lastname ASC";
    }

    function displayPersonByPhone() {
        $requestSQL = "SELECT * FROM person ORDER BY phone ASC";
    }

    function displayPersonByEmail() {
        $requestSQL = "SELECT * FROM person ORDER BY email ASC";
    }

    function displayPersonByCompany() {
        $requestSQL = "SELECT * FROM person ORDER BY company ASC";
    }

    function updatePerson($id, $firstname, $lastname, $phone, $email, $company) {
        if (isset($_POST['submit'])) {
            $requestSQL = "UPDATE person SET firstname = ".$firstname.", lastname = ".$lastname.", phone = ".$phone.", email = ".$email.", company = ".$company." WHERE id = ".$id."";
        } else  {
            $errorMessage = "Erreur de mise à jour.";
        }
    }

    function deletePerson($id) {
        if (isset($_POST['submit'])) {
            $requestSQL = "DELETE FROM person WHERE id = $id";
        } else  {
            $errorMessage = "Erreur de suppression.";
        }
    }

?>