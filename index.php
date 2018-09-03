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
        case 'billAdd':
            require "controller/controller.php";
            billAddPage();
            break;
        case 'billUpdate'://avec second paramet 'number'
            require "controller/controller.php";
            billUpdatePage();
            break;
        case 'billDelete'://avec second paramet 'number'
            require "controller/controller.php";
            billDeletePage();
            break;    
        case 'detailbill':
            require "controller/controller.php";
            detailBillPage();
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
    default:
            echo "Home page";
            break;
    }

?>
