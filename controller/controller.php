<?php
require "models/person.model.php";
require "models/company.model.php";
$url="http://localhost/COGIP-app/";
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
        global $url;
        $company=companyView();
        require "views/company.view.php";
    }
    function detailCompanyPage(){
        global $idSociete;
        $id=companyDetail($idSociete);
        $donnees=companyRead($id);
        $company=$donnees['0'];
        $person=$donnees['1'];
        $bill=$donnees['2'];
        require 'views/companyDetail.view.php';
    }
    function companyClientPage(){
        global $url;
        $company=companyClientView();
        require "views/client.view.php";
    }
    function companyProviderPage(){
        global $url;
        $company=companyProviderView();
        require "views/provider.view.php";  
    }
/*
            page home
*/
    function homePage(){require 'views/home.view.php';}
/*
            page error
*/
    function error404Page(){
        require "views/404.view.php";
    }
?>