<?php

// session_start();

if(!isset($_GET["page"])) {
    $_GET["page"]="";
}

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
                deletePersonAdminPage();
                break;

            case 'addbill':
                require "controller/controller.php";
                addBillAdminPage();
                break;

            case 'updatebill':
                require "controller/controller.php";
                updateBillAdminPage();
                break;

            case 'deletebill':
                require "controller/controller.php";
                deleteBillAdminPage();
                break;

            case 'addcompany':
                require "controller/controller.php";
                addCompanyAdminPage();
                break;

            case 'updatecompany':
                require "controller/controller.php";
                updateCompanyAdminPage();
                break;

            case 'deletecompany':
                require "controller/controller.php";
                deleteCompanyAdminPage();
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

    case 'dashboard':
        require "controller/controller.php";
        dashboard();
        break;

    default:
        require "controller/controller.php";
        loginPage();
        break;
}

?>
