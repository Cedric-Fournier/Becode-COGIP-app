<?php    

    function createPerson($firstname, $lastname, $phone, $email, $company) {
        if (isset($_POST['submit'])) {
            $requestSQL = "INSERT INTO person (firstname, lastname, phone, email, company) VALUES (".$firstname.", ".$lastname.", ".$phone.", ".$email.", ".$company.")";
        } else  {
            $errorMessage = "Erreur de création.";
        }
        return $requestSQL;
    }

    function readPersonByID() {
        $requestSQL = "SELECT * FROM person ORDER BY id ASC";
        return $requestSQL;
    }

    function readDetailPersonByID($getID) {
        require "../config/php/config.php";
        $requestSQL = "SELECT person.*, company.name, CONCAT(company.number, ', ', company.street, ' ', company.zip, ' ', company.city, ' ', company.country) AS adress, bill.object AS billList FROM person, company, bill WHERE person.id=:id AND person.company=company.id AND bill.person=person.id;";
        $reponse = $pdo->prepare($requestSQL);
        $reponse->bindParam(":id", $getID);
        $reponse->execute();
        return $reponse;
    }

    function readPersonByFirstName() {
        $requestSQL = "SELECT * FROM person ORDER BY firstname ASC";
        return $requestSQL;
    }

    function readPersonByLastName() {
        $requestSQL = "SELECT * FROM person ORDER BY lastname ASC";
        return $requestSQL;
    }

    function readPersonByPhone() {
        $requestSQL = "SELECT * FROM person ORDER BY phone ASC";
        return $requestSQL;
    }

    function readPersonByEmail() {
        $requestSQL = "SELECT * FROM person ORDER BY email ASC";
        return $requestSQL;
    }

    function readPersonByCompany() {
        $requestSQL = "SELECT * FROM person ORDER BY company ASC";
        return $requestSQL;
    }

    function updatePerson($id, $firstname, $lastname, $phone, $email, $company) {
        if (isset($_POST['submit'])) {
            $requestSQL = "UPDATE person SET firstname = ".$firstname.", lastname = ".$lastname.", phone = ".$phone.", email = ".$email.", company = ".$company." WHERE id = ".$id."";
        } else  {
            $errorMessage = "Erreur de mise à jour.";
        }
        return $requestSQL;
    }

    function deletePerson($id) {
        if (isset($_POST['submit'])) {
            $requestSQL = "DELETE FROM person WHERE id = $id";
        } else  {
            $errorMessage = "Erreur de suppression.";
        }
        return $requestSQL;
    }

?>