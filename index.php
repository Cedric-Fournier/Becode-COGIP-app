<?php
    require "controller/controller.php";
    $sql="SELECT id,type FROM company";
    require 'assets/php-pdo/connect.php';
    $requete->execute();
    $company = $requete->fetchAll();
    $requete->closeCursor();
    $pagesCompanyTrouver=false;
    $page = "";
    $id="";
    $url="http://localhost/COGIP-app/";

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}
if(!empty($_GET['id'])){
    $id = $_GET['id'];
}
if(($page == "")OR($page == 'home'))//test pour la page accuel
{
    require 'views/home.view.php';
}

elseif($page == 'societe'){
    if( (empty($_GET['type'])) AND (empty($id)))
    {
        companyPage();
    }
    elseif((filter_var($id,FILTER_VALIDATE_INT))AND(empty($_GET['type']))){
        foreach ($company as $value) {
            if($value['id']==$id)
            { $idSociete=$id;
                $pagesCompanyTrouver=true;
            require 'views/companyDetail.view.php';}
        }
        if($pagesCompanyTrouver==false){require 'views/404.view.php';}
    }
    elseif($_GET['type']=="client")
    {
        if(empty($_GET['id']))
        {
            require 'views/client.view.php';
        }
        elseif(filter_var($_GET['id'],FILTER_VALIDATE_INT))
        {
            foreach ($company as $value) {
                if(($value['id']==$_GET['id'])and($value['type']==2))
                    { $idSociete=$_GET['id'];
                        require 'views/companyDetail.view.php';
                    }
                elseif(($value['id']==$_GET['id'])and($value['type']==1))
                    {
                        error404Page();
                    }                
            }
        }
        else
        {
            error404Page();
        }
    }
    elseif($_GET['type']=="fournisseur")
    {
        if(empty($_GET['id'])){
            require 'views/provider.view.php';
        }
        elseif(filter_var($_GET['id'],FILTER_VALIDATE_INT))
        {
            foreach ($company as $value) {
                if(($value['id']==$_GET['id'])and($value['type']==1))
                    { $idSociete=$_GET['id'];
                        require 'views/companyDetail.view.php';
                    }
                elseif(($value['id']==$_GET['id'])and($value['type']==2))
                    {
                        error404Page();
                    }                
            }
        }
        else
        {
            error404Page();
        }
    }
    else
    {
        error404Page();
    }
}
elseif($page == 'annulaire'){
    require 'views/home.view.php';
}
elseif($page == 'bill'){
    require 'views/home.view.php';
}
else{
    error404Page();
}
// switch ($_GET["page"]) {
//     case 'directory':
//         require "controllers/controller.php";
//         directoryPage();
//         break;

//     case 'detailPerson':
//         require "controllers/controller.php";
//         detailPersonPage();
//         break;
                
//     default:            
//         echo "Home page";
//         break;
// }
//     elseif((!empty($_GET[''])) AND (!empty())){
//         if((!filter_var($url[1],FILTER_VALIDATE_INT))AND($url[1] == 'client'))
//         {
//             if(empty($url[2])){
//             require 'views/client.view.php'; }
//             elseif(filter_var($url[2],FILTER_VALIDATE_INT))
//             {
//                 foreach ($company as $value) {
//                     if(($value['id']==$url[2])and($value['type']==2))
//                     { $idSociete=$url[2];
//                     require 'views/companyDetail.view.php';}
//                     elseif(($value['id']==$url[2])and($value['type']==1))
//                     {
//                         require 'views/404.view.php';
//                     }
//                 }   
//             }
//         }
//         elseif((!filter_var($url[1],FILTER_VALIDATE_INT))AND($url[1] == 'fournisseur'))
//         {
//             if(empty($url[2])){
//                 require 'views/provider.view.php'; 
//             }
//             elseif(filter_var($url[2],FILTER_VALIDATE_INT))
//             {
//                 foreach ($company as $value)
//                 {
//                     if(($value['id']==$url[2])and($value['type']==1))
//                     {
//                         $idSociete=$url[2];
//                         require 'views/companyDetail.view.php';
//                     }elseif(($value['id']==$url[2])and($value['type']==2))
//                     {
//                         require 'views/404.view.php';
//                     }
//                 }
//             }
//         }
//         elseif()
//         {
            
//         }else
//         {
//             require 'views/404.view.php';
//         }
//     }
// }
// elseif( ($_GET['url'] == 'bill'){
//     require 'views/company.view.php';
// }
// elseif( ($_GET['url'] == 'person'){
//     require 'views/company.view.php';
// }
// else
// {
//     require 'views/404.view.php';
// }
?>