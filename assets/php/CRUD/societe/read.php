<?php
$sql="SELECT * from company where id = 1";
include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
$requete->execute();
$donnees = $requete->fetchAll();
$requete->closeCursor();
//print_r($donnees);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/COGIP-app/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/COGIP-app/vendor/components/font-awesome/css/fontawesome.min.css">
</head>
<body>
    <header></header>
    <section>
        <div class="row">
            <div class="col-2">désignation sociale de la société</div><div class="col-4">l'adresse de la société</div><div class="col-2">le pays</div><div class="col-2">le n° de TVA</div><div class="col-2">le n° de téléphone</div>
            <?php foreach ($donnees as $key => $value) { ?>
            <div class="col-2"><?=$value['name']?></div><div class="col-4"><?=($value['street']." ".$value['number'].", ".$value['zip']." ".$value['city'])?></div><div class="col-2"><?=$value['country']?></div><div class="col-2"><?=$value['VAT']?></div><div class="col-2"><?=$value['phone']?></div>
            <?php } ?>
        </div>
    </section>
    <footer></footer>
    <script src="http://localhost/COGIP-app/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>