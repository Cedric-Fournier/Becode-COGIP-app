<?php
$url="http://localhost/COGIP-app/";//http://challenge-sql:8888/

    function directoryPage() {
        global $url;
        require "models/person.model.php";
        $reponse = getDirectory();
        require "views/directory.view.php";
        $reponse->closeCursor();
    }

    function detailPersonPage() {
      global $url;
      require "models/person.model.php";
      $person = getDetailPerson();
      require "views/detailPerson.view.php";
    }


    function billPage() {
      global $url;
      require "models/bill.model.php";
      $bill=lireBill();
      require "views/bill.view.php";
    }

    function detailBillPage() {
        global $url;
      require "models/bill.model.php";
      $detailBill=detailBill();
      require "views/billDetail.view.php";
    }

    function dashboard() {
        global $url;
        require "models/dashboard.model.php";
        $bill=billFiveLatest();
        $company=companyFiveLatest();
        $person=personFiveLatest();
        require "views/dashboard.view.php";
    }

    function companyPage() {
        require "models/company.model.php";
        global $url;
        $company=companyView();
        require "views/company.view.php";
    }

    function detailCompanyPage() {
        global $url;
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
        global $url;
        $company=companyClientView();
        require "views/client.view.php";
    }

    function companyProviderPage() {
        require "models/company.model.php";
        global $url;
        $company=companyProviderView();
        require "views/provider.view.php";
    }

    function companyAddPage() {
        require "models/company.model.php";
        global $url;
        $message=companyCreate();
        $donneesInfoType=lireTypeCompany();
        $type=$donneesInfoType['0'];
        $checkType=$donneesInfoType['1'];
        require "views/admin/addCompany.view.php";
    }

    function companyDeletePage() {
        require "models/company.model.php";
        global $url;
        $message=companyDelete($_GET['id']);
        require "views/admin/deleteCompany.view.php";
    }

    function companyUpdatePage() {
        require "models/company.model.php";
        global $url;
        $donneesCompanyModife=companyUpdate();
        $company=$donneesCompanyModife['0'];
            $checkType=$donneesCompanyModife['1'];
            $type=$donneesCompanyModife['2'];
            $message=$donneesCompanyModife['3'];
        require "views/admin/updateCompany.view.php";

    }
    function loginPage(){
        global $url;
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
    }

    function updateBillAdminPage() {
    }

    function deleteBillAdminPage() {
    }

?>
