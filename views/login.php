<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COGIP</title>
    <?php
    require 'views/partials/link.php';
    ?>
</head>
<body>
<?php
    require 'views/partials/header.php';
?>
<div class="model">
    <div class='login'>
        <form action="" method="post">
            <div class="row">
                <div class="col-5 offset-1 text-left"><label class="labelLog text-primary" for="login">Identifiant</label></div>
                <div class="col-6 text-center"><input class="inputLog bg-info text-white" type="text" name="login" id="login"></div>
            </div>
            <div class="row">
                <div class="col-5 offset-1 text-left"><label class="labelLog text-primary" for="pwd">Mot de passe </label></div>
                <div class="col-6 text-center"><input class="inputLog bg-info text-white" type="password" name="pwd" id=pwd></div> 
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <button class="buttonLog" type="submit" name="button">Se connecter</button>
                </div>
            </div>
            
        </form>
    </div>
</div>
<?php
    require 'views/partials/footer.php';
?>
    </body>
</html>