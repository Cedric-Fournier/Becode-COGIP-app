<?php

    function directoryPage() {
        require "models/person.model.php";
        $reponse = getDirectory();
        require "views/directory.view.php";
        $reponse->closeCursor();
    }

    function detailPersonPage() {
      require "models/person.model.php";
      $person = getDetailPerson();
      require "views/detailPerson.view.php";
    }


    function billPage() {
      require "models/bill.model.php";
      $bill=lireBill();
      require "views/bill.view.php";
    }

    function detailBillPage() {
      require "models/bill.model.php";
      $detailBill=detailBill();
      require "views/billDetail.view.php";
    }

    function dashboard() {
        require "models/dashboard.model.php";
        $bill=billFiveLatest();
        $company=companyFiveLatest();
        $person=personFiveLatest();
        require "views/dashboard.view.php";
    }

    function companyPage() {
        require "models/company.model.php";
        $company=companyView();
        require "views/company.view.php";
    }

    function detailCompanyPage() {
        require "models/company.model.php";
        $id=companyDetail($_GET['id']);
        $donnees=companyRead($id);
        $company=$donnees['0'];
        $person=$donnees['1'];
        $bill=$donnees['2'];
        require 'views/companyDetail.view.php';
    }

    function companyClientPage() {
        require "models/company.model.php";
        $company=companyClientView();
        require "views/client.view.php";
    }

    function companyProviderPage() {
        require "models/company.model.php";
        $company=companyProviderView();
        require "views/provider.view.php";
    }
   
    function loginPage(){

        require "views/login.php";
    }

    //// ADMIN ////
    function addPersonAdminPage() {
        require "models/person.model.php";
        $person = getAddPerson();
        $getCompany = getCompanyName();
        require "views/admin/addPerson.view.php";
    }

    function updatePersonAdminPage() {
        require "models/person.model.php";
        $personUp = getUpdatePerson();
        $getPerson = getUpdateDetailPerson();
        $getCompany = getCompanyName();
        require "views/admin/updatePerson.view.php";
    }

    function deletePersonAdminPage() {
        require "models/person.model.php";
        $personDelete = getDeletePerson();
        require "views/admin/deletePerson.view.php";
    }

    function addBillAdminPage() {
        require "models/bill.model.php";
        $message=billCreate();
        $typeDataBill=typeDataBill();
        $company=$typeDataBill['0'];
        $person=$typeDataBill['1'];
        require "views/admin/addBill.view.php";
    }
    function updateBillAdminPage() {
        require "models/bill.model.php";
        $donneesBillModife=billUpdate();
        $bill=$donneesBillModife['0'];
        $company=$donneesBillModife['1'];
        $person=$donneesBillModife['2'];
        $selectCompany=$donneesBillModife['3'];
        $selectPerson=$donneesBillModife['4'];
        $message=$donneesBillModife['5'];
        require "views/admin/updateBill.view.php";       
    }
    function deleteBillAdminPage() {
        require "models/bill.model.php";
        $message=deleteBill($_GET['number']);
        require "views/admin/deleteBill.view.php";
    }
    
    function companyAddPage(){
        require "models/company.model.php";
        $message=companyCreate();
        $donneesInfoType=lireTypeCompany();
        $type=$donneesInfoType['0'];
        $checkType=$donneesInfoType['1'];
        require "views/admin/addCompany.view.php";
    }

    function companyDeletePage() {
        require "models/company.model.php";
        $message=companyDelete($_GET['id']);
        require "views/admin/deleteCompany.view.php";
    }
    
    function companyUpdatePage(){
        require "models/company.model.php";
        $donneesCompanyModife=companyUpdate();
        $company=$donneesCompanyModife['0'];
            $checkType=$donneesCompanyModife['1'];
            $type=$donneesCompanyModife['2'];
            $message=$donneesCompanyModife['3'];
        require "views/admin/updateCompany.view.php";
    }
?>
