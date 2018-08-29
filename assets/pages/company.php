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
<?php
    include '/var/www/html/COGIP-app/assets/partials/header.php';
    ?>
    <section>
        <div>
            <ul>
                <?php
                    foreach ($company as $key => $value) { ?>
                        <li><a href="<?=$url?>assets/pages/companyDetail.php?id=<?=$value['id']?>"><?=$value['name']?></a></li>
                <?php } ?>
                
            </ul>
        </div>
        </section>
        <?php
    include '/var/www/html/COGIP-app/assets/partials/footer.php';
    ?>