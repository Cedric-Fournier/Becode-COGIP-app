<?php
if(!isset($_GET["page"]))
{$_GET["page"]="";}
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

    case 'societe':
        require "controller/controller.php";
        companyPage();
        break;

    case 'societeAdd':
        require "controller/controller.php";
        companyAddPage();
        break;

    case 'societeDelete':
        require "controller/controller.php";
        companyDeletePage();
        break;

    case 'societeUpdate':
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

            case 'addbill':
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'updatebill':
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'deletebill':
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'addcompany':
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'updatecompany':
                require "controller/controller.php";
                //Mettre la fonction de controller
                break;

            case 'deletecompany':
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
        
    default:
        echo "Home page";
        break;
}

?>
