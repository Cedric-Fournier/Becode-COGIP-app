<?php
if(!isset($_GET["page"]))
{$_GET["page"]="";}
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
        case 'billV2':
            require "controller/controller.php";
            billPageV2();
            break;
    case 'detailbill':
            require "controller/controller.php";
            detailBillPage();
            break;
        case 'detailbillV2':
            require "controller/controller.php";
            detailBillPageV2();
            break;
    case 'societe':
            require "controller/controller.php";
            companyPage();
            break;
    case 'societeAdd':
        require "controller/controller.php";
        companyAddPage();
        break;
    case 'societeDelete'://avec second paramet 'id'
        require "controller/controller.php";
        companyDeletePage();
        break;
    case 'societeUpdate'://avec second paramet 'id'
        require "controller/controller.php";
        companyUpdatePage();
        break;

    case 'detailCompany':
        require "controller/controller.php";
        detailCompanyPage();
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

          }
          break;
    case 'client':
      require "controller/controller.php";
      companyClientPage();
      break;
    case 'provider':
            require "controller/controller.php";
            companyProviderPage();
            break;
    case 'login':
            require "controller/controller.php";
            loginPage();
            break;
    case 'dashboard':
            require "controller/controller.php";
            dashboard();
            break;
    case 'dashboardV2':
            require "controller/controller.php";
            dashboardV2();
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
