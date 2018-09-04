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
            <label for="date">La date de la Facture : </label><input type="date" name="date" id="date"><br>
            <label for="object">L'object de la Facture : </label><input type="text" name="object" id="object"><br>
            <label for="company">Quel société : </label>
            <select name="company" id="company">
                <?php foreach ($company as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['name']?></option>
                <?php } ?>
            </select>
            <br>
            <label for="person">Quel personne : </label>
            <select name="person" id="person">
                <?php foreach ($person as $key => $value) { ?>
                <option value="<?=$value['id']?>"><?=$value['nom']?></option>
                <?php } ?>
            </select>
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