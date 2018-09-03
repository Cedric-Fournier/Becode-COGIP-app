<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COGIP</title>
    <?php
    require 'views/partials/link.php';
    ?>
</head>
<body>
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
            Type de société : 
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
    </body>
</html>