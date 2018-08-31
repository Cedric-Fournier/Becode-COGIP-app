<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail <?= $person[0]['firstname'] . " " . $person[0]['lastname']; ?></title>
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
                <td><?= $person[0]['lastname'] . " " . $person[0]['firstname'] . ' '; ?></td>
                
                <td><?= $person[0]['phone'] . '<br />'; ?></td>
                <td><?= $person[0]['email'] . '<br />'; ?></td>
                <td><?= $person[0]['name'] . '<br />';?></td>
                <td><?= $person[0]['adress'] . '<br />';?></td>
                <td>
                    <ul>
                        <?php foreach ($person as $bills) { ?>
                        <li>
                            <?= $bills['billList']; ?>
                        </li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        </table>
        <a href="./?page=directory">Retour en arrière</a>
    </section>    
</body>
</html>