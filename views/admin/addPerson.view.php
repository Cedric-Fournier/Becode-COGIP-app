<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Person</title>
</head>
<body>
    <section>
        <form method="post" action="?page=admin&admin=addperson">

            <label>Prénom :</label>
            <input type="text" name="firstname">
            <br>

            <label>Nom :</label>
            <input type="text" name="lastname">
            <br>

            <label>Téléphone :</label>
            <input type="text" name="phone">
            <br>

            <label>Mail :</label>
            <input type="text" name="email">
            <br>

            <label>Société :</label>
            <select name='company'>
                <?php foreach ($getCompany as $company) { 
                    echo "<option value='".$company['id']."'>".$company['name']."</option>";
                 } ?>
            </select>
            <br>

            <input type="submit" name="submit" value="Ajouter">
            <a href="?page=dashboard">Retour à l'administration</a>

        </form>
    </section>
</body>
</html>