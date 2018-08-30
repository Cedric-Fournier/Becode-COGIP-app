<?php
require "models/person.model.php";
require "models/company.model.php";

/*
            page for person
*/
    // function directoryPage(){
    //     $reponse = getDirectory();
    //     require "views/directory.view.php";
    //     $reponse->closeCursor();
        
    // }

    // function detailPersonPage(){
    //     $person = getDetailPerson();
    //     require "views/detailPerson.view.php";
    //     $reponse->closeCursor();
    // }
/*
            page for company
*/
    function companyPage(){
        $company=companyView();
        require "views/company.view.php";
    }
    function detailCompanyPage(){}
    function companyClientPage(){}
    function companyProviderPage(){}
/*
            page home
*/
    function homePage(){}
/*
            page error
*/
    function error404Page(){
        require "views/404.view.php";
    }
?>