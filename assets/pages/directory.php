<?php

    require "../config/php/config.php";
    require "../php/CRUD/person.php";

    $reponse = $pdo->prepare(readPersonByLastName());  
    $reponse->execute();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire</title>
</head>
<body>
    <section>
        <table>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
            <?php while ($donnees = $reponse->fetch()) { ?>
            <tr>
                <td><?php echo $donnees['firstname'] . ' '; ?></td>
                <td><a href="detailPerson.php?id=<?= $donnees['id']; ?>"><?= $donnees['lastname'] . '<br />'; ?></a></td>
            </tr>
            <?php } ?>
        </table>
    </section>
</body>
</html>
    
<?php $reponse->closeCursor();?>