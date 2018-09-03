<?php
// require "controller/controller.php";
switch ($_GET["page"]) {

    case 'directory':
        require "controller/controller.php";
        directoryPage();
        break;

    case 'detailPerson':
        require "controller/controller.php";
        detailPersonPage();
        break;

    case 'bill':
        require "controller/controller.php";
        billPage();
        break;

    case 'detailbill':
        require "controller/controller.php";
        detailBillPage();
        break;

    case 'company':
        require "controller/controller.php";
        //Mettre la fonction de controller
        break;

    case 'detailcompany':
        require "controller/controller.php";
        //Mettre la fonction de controller
        break;

    case 'admin':

        switch ($_GET["admin"]){
            case 'addperson':
                require "controller/controller.php";
                addPersonAdminPage();
                break;

            case 'updateperson':
                require "controller/controller.php";
                updatePersonAdminPage();
                break;

            case 'deleteperson':
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'addbill': // Ajouter une facture
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'updatebill': // Modifier une facture
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'deletebill': // Supprimer une facture
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'addcompany': // Ajouter une société
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'updatecompany': // Modifier une société
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'deletecompany': // Supprimer une société
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            default:
                echo "Admin page";
                break;
        }

        break;

    default:
        echo "Home page";
        break;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COGIPapp</title>
</head>
<body>
    <a href="?page=index">Accueil</a>
    <a href="?page=directory">Annuaire</a>
    <a href="?page=bill">Factures</a>
    <a href="?page=company">Société</a>
</body>
</html>
