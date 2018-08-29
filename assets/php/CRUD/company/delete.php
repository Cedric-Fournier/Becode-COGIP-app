<?php
    try
        {
            if(isset($_POST['delete']))
            {
                $id=$_POST['id'];
                $sql="DELETE from company where id = $id";
                include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
                $requete->execute();
                $requete->closeCursor();
            }else{
                $id=$_GET['id']; //variable de defaut pour le test remplacer par la variable qu'on va recuperer plutart
            }
            $sql="SELECT * from company where id = $id";
            include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
            $requete->execute();
            $donnees = $requete->fetch();
            $requete->closeCursor();
            switch ($company['type']) {
                case 1:
                $checkType['1']="checked";
                $checkType['2']="";
                    break;
                
                case 2:
                $checkType['1']="";
                $checkType['2']="checked";
                    break;
            }
            $sql="SELECT type.* from type ";
            include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
            $requete->execute();
            $type = $requete->fetchAll();
            $requete->closeCursor();
        }
    catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
        } 
?>
<?php
    include '/var/www/html/COGIP-app/assets/partials/header.php';
    ?>
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
            Type de société : </label>
            <?php foreach ($type as $key => $value) { ?>
                <input type="radio" name="type" id="type<?=$value['id']?>" value='<?=$value['id']?>' <?=$checkType[$value['id']]?>><label for="type<?=$value['id']?>"><?=$value['type']?></label>
                <?php } ?>
            <br>
            <button type="submit" name="delete">delete</button>
        </form>
    </section>
    <?php
    include '/var/www/html/COGIP-app/assets/partials/footer.php';
    ?>