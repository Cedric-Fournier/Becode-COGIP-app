<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Annuaire</title>
    <?php
        require 'views/partials/link.php';
        ?>
</head>
<body>
<?php
            require 'views/partials/header.php';
        ?>
    <section>
        <div class="model"><div class="general">
        <table border='1'>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
            <?php while ($donnees = $reponse->fetch()) { ?>
            <tr>
                <td><?php echo $donnees['firstname'] . ' '; ?></td>
                <td><a href="?page=detailPerson&id=<?= $donnees['id']; ?>"><?= $donnees['lastname'] . '<br />'; ?></a></td>
            </tr>
            <?php } ?>
        </table>
        </div></div>
    </section>
    <?php
            require 'views/partials/footer.php';
        ?>
</body>
</html>