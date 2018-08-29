<?php
$url="http://localhost/COGIP-app/";
try
    {
        // company
        $sql="SELECT company.id AS id,company.name AS name FROM company, type WHERE type.id=company.type AND type.type=:categorie ORDER BY company.name asc";
        include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
        $categorie="client";
        $requete->bindParam(":categorie" , $categorie);
        $requete->execute();
        $company = $requete->fetchAll();
        $requete->closeCursor();
    }
catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
include '/var/www/html/COGIP-app/assets/partials/header.php';
?>
<section>

    <div>
    <h1>liste des société qui sonnt de type client :</h1>
        <ul>
            <?php
                foreach ($company as $key => $value) { ?>
                    <li><a href="<?=$url?>assets/pages/companyDetail.php?id=<?=$value['id']?>"><h3><?=$value['name']?></h3></a></li>
            <?php } ?>
            
        </ul>
    </div>
    </section>
    <?php
include '/var/www/html/COGIP-app/assets/partials/footer.php';
?>