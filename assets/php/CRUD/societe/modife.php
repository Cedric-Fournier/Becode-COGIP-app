<?php
    try
        {
            if(isset($_POST['modifier']))
            {
                $id=$_POST['id'];
                $sql="UPDATE company SET name=:name, street=:street, number=:number, zip=:zip, city=:city, country=:country, VAT=:VAT, phone=:phone where id = $id";
                include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
                $requete->bindParam(":name", $_POST['name']);
                $requete->bindParam(":street", $_POST['street']);
                $requete->bindParam(":number", $_POST['number']);
                $requete->bindParam(":zip", $_POST['zip']);
                $requete->bindParam(":city", $_POST['city']);
                $requete->bindParam(":country", $_POST['country']);
                $requete->bindParam(":VAT", $_POST['VAT']);
                $requete->bindParam(":phone", $_POST['phone']);
                $requete->execute();
                $requete->closeCursor();
            }
            $sql="SELECT * from company where id = 1";
            include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
            $requete->execute();
            $donnees = $requete->fetchAll();
            $requete->closeCursor();
            $donnees=$donnees['0'];
        }
    catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
        } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../vendor/components/font-awesome/css/fontawesome.min.css">
</head>
<body>
    <header></header>
    <section>
        <form action="#" method="post">
            <label for="id">L'id de la société : </label><input type="number" name="id" id="id" value="1"><br>
            <label for="name">La désignation sociale de la société : </label><input type="text" name="name" id="name" value="<?=$donnees['name']?>"><br>
            <label for="street">Le nom de la rue : </label><input type="text" name="street" id="street" value="<?=$donnees['street']?>"><br>
            <label for="number">Le numéro de la rue : </label><input type="number" name="number" id="number" value="<?=$donnees['number']?>"><br>
            <label for="zip">Le code postale : </label><input type="number" name="zip" id="zip" value="<?=$donnees['zip']?>"><br>
            <label for="city">Le nom de la commune : </label><input type="text" name="city" id="city" value="<?=$donnees['city']?>"><br>
            <label for="country">Le nom du pays : </label><input type="text" name="country" id="country" value="<?=$donnees['country']?>"><br>
            <label for="VAT">Le numéro de TVA : </label><input type="number" name="VAT" id="VAT" value="<?=$donnees['VAT']?>"><br>
            <label for="phone">Le numéro de téléphone : </label><input type="tel" name="phone" id="phone" value="<?=$donnees['phone']?>"><br>
            <button type="submit" name="modifier">modifier la société</button>
        </form>
    </section>
    <footer></footer>
    <script src="../../../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>