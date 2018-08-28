<?php
    $url="http://localhost/COGIP-app/";
    try
        {
            // company
            $sql="SELECT id,name from company order by name asc";
            include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
            $requete->execute();
            $company = $requete->fetchAll();
            $requete->closeCursor();
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
    <script src="<?=$url?>vendor/components/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=$url?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url?>vendor/components/font-awesome/css/fontawesome.min.css">
</head>
<body>
<header></header>
    <section>
        <div>
            <ul>
                <?php
                    foreach ($company as $key => $value) { ?>
                        <li><a href="<?=$url?>assets/php/CRUD/company/companyDetail.php?id=<?=$value['id']?>"><?=$value['name']?></a></li>
                <?php } ?>
                
            </ul>
        </div>
    </section>
    <footer></footer>
<script src="<?=$url?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>