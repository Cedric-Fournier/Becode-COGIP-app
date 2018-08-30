<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail <?= $person['0']['firstname'] . " " . $person['0']['lastname']; ?></title>
</head>
<body>
    <section>
        <table>
            <tr>
                <th>Nom/Prénom</th>
                <th>Téléphone</th>
                <th>Mail</th>
                <th>Société</th>
                <th>Adresse de la sociétés</th>
                <th>Facture</th>
            </tr>            
            <tr>
                <td><?= $person['lastname'] . " " . $person['firstname'] . ' '; ?></td>
                
                <td><?= $person['phone'] . '<br />'; ?></td>
                <td><?= $person['email'] . '<br />'; ?></td>
                <td><?= $person['name'] . '<br />';?></td>
                <td><?= $person['adress'] . '<br />';?></td>
                <td>
                    <ul>
                    <?php foreach ($donnees as $reponse) { ?>
                    <li>
                        <?= $reponse['billList']; ?>
                    </li>
                    <?php } ?>
                    </ul>
                </td>
            </tr>
        </table>
        <a href="./directory.php">Retour en arrière</a>
    </section>    
</body>
</html>