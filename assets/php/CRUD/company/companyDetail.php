<?php
try
{
// company
    $id=$_GET['id'];//variable de defaut pour le test remplacer par la variable qu'on va recuperer plutart
    $sql="SELECT * from company where company.id = $id";
    include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
    $requete->execute();
    $company = $requete->fetchAll();
    $requete->closeCursor();
    $company=$company['0'];
// person
    $sql="SELECT lastname,firstname from person where person.company = $id";
    include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
    $requete->execute();
    $person = $requete->fetchAll();
    $requete->closeCursor();
// bill
    $sql="SELECT object from bill where bill.company = $id";
    include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
    $requete->execute();
    $bill = $requete->fetchAll();
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
        <div class="row">
            <div class="col-12 text-center title"><h1>désignation sociale de la société</h1></div>
            <div class="col-12 text-center"><?=$company['name']?></div>
            <div class="col-8 text-center"><h1>l'adresse de la société</h1></div>
            <div class="col-4 text-center"><h1>le pays</h1></div>
            <div class="col-8 text-center"><?=($company['street']." ".$company['number'].", ".$company['zip']." ".$company['city'])?></div>
            <div class="col-4 text-center"><?=$company['country']?></div>
            <div class="col-12 text-center"><h1>le n° de téléphone</h1></div>
            <div class="col-12 text-center"><?=$company['phone']?></div>
            <div class="col-12 text-center"><h1>le n° de TVA</h1></div>
            <div class="col-12 text-center"><?=$company['VAT']?></div>
            <div class="col-6 text-center"><h1>liste des personnes</h1></div>
            <div class="col-6 text-center"><h1>liste des factures</h1></div>
            <div class="col-6 text-center">
                <ul>
                    <?php foreach ($person as $key => $value) { ?>
                        <li><?=($value['lastname']." ".$value['firstname'])?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-6 text-center">
                <ul>
                    <?php foreach ($bill as $key => $value) { ?>
                        <li><?=$value['object']?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <?php
    include '/var/www/html/COGIP-app/assets/partials/footer.php';
    ?>
</body>
</html>