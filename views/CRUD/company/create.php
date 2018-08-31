<?php
try
    {
        $message=""; 
        if(isset($_POST['creer'])){
    
            // print_r($_POST);
            $sql="INSERT INTO company (name, street, number, zip, city, country, VAT, phone, type) VALUES (:name, :street, :number, :zip, :city, :country, :VAT, :phone, :type);";
            include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
            $requete->bindParam(":name", $_POST['name']);
			$requete->bindParam(":street", $_POST['street']);
            $requete->bindParam(":number", $_POST['number']);
            $requete->bindParam(":zip", $_POST['zip']);
			$requete->bindParam(":city", $_POST['city']);
            $requete->bindParam(":country", $_POST['country']);
            $requete->bindParam(":VAT", $_POST['VAT']);
            $requete->bindParam(":phone", $_POST['phone']);
            $requete->bindParam(":type", $_POST['type']);
			$requete->execute();
			$message="La société a été ajoutée avec succès.";
            $requete->closeCursor();

    
        }
            $sql="SELECT type.* from type ";
            include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
            $requete->execute();
            $type = $requete->fetchAll();
            $requete->closeCursor();
            $checkType=["1"=>"checked","2"=>""];
    }
catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    } 

?>
<?php
    require 'views/partials/header.php';
    ?>
    <section>
        <form action="#" method="post">
            <label for="name">La désignation sociale de la société : </label><input type="text" name="name" id="name"><br>
            <label for="street">Le nom de la rue : </label><input type="text" name="street" id="street"><br>
            <label for="number">Le numéro de la rue : </label><input type="number" name="number" id="number"><br>
            <label for="zip">Le code postale : </label><input type="number" name="zip" id="zip"><br>
            <label for="city">Le nom de la commune : </label><input type="text" name="city" id="city"><br>
            <label for="country">Le nom du pays : </label><input type="text" name="country" id="country"><br>
            <label for="VAT">Le numéro de TVA : </label><input type="number" name="VAT" id="VAT"><br>
            <label for="phone">Le numéro de téléphone : </label><input type="tel" name="phone" id="phone"><br>
            Type de société : </label>
            <?php foreach ($type as $key => $value) { ?>
                <input type="radio" name="type" id="type<?=$value['id']?>" value='<?=$value['id']?>' <?=$checkType[$value['id']]?>><label for="type<?=$value['id']?>"><?=$value['type']?></label>
                <?php } ?>
            <br>
            <button type="submit" name="creer">créer</button>
        </form>

        <?=$message?>
    </section>
    <?php
    require 'views/partials/footer.php';
    ?>
