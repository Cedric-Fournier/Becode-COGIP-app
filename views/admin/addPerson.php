<?php

    require "../../config/php/config.php";

    $firstname = $lastname = $phone = $email = $company = "";

    $reponse = createPerson($firstname, $lastname, $phone, $email, $company);
    $donnees = $reponse->fetchAll();

    if(isset($_POST["submit"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $company = $_POST["company"];
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Person</title>
</head>
<body>
    <section>
        <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <label>Prénom :</label>
            <input type="text" name="firstname" value="<?= $firstname;?>">
            <br>

            <label>Nom :</label>
            <input type="text" name="lastname" value="<?= $lastname;?>">
            <br>

            <label>Téléphone :</label>
            <input type="text" name="phone" value="<?= $phone;?>">
            <br>

            <label>Mail :</label>
            <input type="text" name="email" value="<?= $email;?>">
            <br>

            <label>Société :</label>
            <input type="text" name="company" value="<?= $company;?>">
            <br>

        </form>
    </section>
</body>
</html>