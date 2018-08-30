<?php
    $sql="SELECT id,type FROM company";
    require 'assets/php-pdo/connect.php';
    $requete->execute();
    $company = $requete->fetchAll();
    $requete->closeCursor();
    $pagesCompanyTrouver=false;
    $page = "";
    $id="";

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}
if(!empty($_GET['id'])){
    $id = $_GET['id'];
}
if(($page == "")OR($page == 'home'))//test pour la page accuel
{
    require 'vues/home.php';
}

elseif($page == 'societe'){
    if( (empty($_GET['type'])) AND (empty($id)))
    {
        require 'vues/company.php';

    switch ($_GET["page"]) {
        case 'directory':
            require "controllers/controller.php";
            directoryPage();
            break;

        case 'detailPerson':
            require "controllers/controller.php";
            detailPersonPage();
            break;
                    
        default:            
            echo "Home page";
            break;
    }
    elseif((filter_var($id,FILTER_VALIDATE_INT))AND(empty($_GET['type']))){
        foreach ($company as $value) {
            if($value['id']==$id)
            { $idSociete=$id;
                $pagesCompanyTrouver=true;
            require 'vues/companyDetail.php';}
        }
        if($pagesCompanyTrouver==false){require 'assets/pages/404.php';}
    }
    elseif($_GET['type']=="client")
    {
        if(empty($_GET['id']))
        {
            require 'vues/client.php';
        }
        elseif(filter_var($_GET['id'],FILTER_VALIDATE_INT))
        {
            foreach ($company as $value) {
                if(($value['id']==$_GET['id'])and($value['type']==2))
                    { $idSociete=$_GET['id'];
                        require 'vues/companyDetail.php';
                    }
                elseif(($value['id']==$_GET['id'])and($value['type']==1))
                    {
                        require 'assets/pages/404.php';
                    }                
            }
        }
        else
        {
            require 'assets/pages/404.php';
        }
    }
    elseif($_GET['type']=="fournisseur")
    {
        if(empty($_GET['id'])){
            require 'vues/provider.php';
        }
        elseif(filter_var($_GET['id'],FILTER_VALIDATE_INT))
        {
            foreach ($company as $value) {
                if(($value['id']==$_GET['id'])and($value['type']==1))
                    { $idSociete=$_GET['id'];
                        require 'vues/companyDetail.php';
                    }
                elseif(($value['id']==$_GET['id'])and($value['type']==2))
                    {
                        require 'assets/pages/404.php';
                    }                
            }
        }
        else
        {
            require 'assets/pages/404.php';
        }
    }
    else
    {
        require '404.php';
    }
}
elseif($page == 'annulaire'){
    require 'vues/home.php';
}
elseif($page == 'bill'){
    require 'vues/home.php';
}
else{
    require 'assets/pages/404.php';
}
//     elseif((!empty($_GET[''])) AND (!empty())){
//         if((!filter_var($url[1],FILTER_VALIDATE_INT))AND($url[1] == 'client'))
//         {
//             if(empty($url[2])){
//             require 'assets/pages/client.php'; }
//             elseif(filter_var($url[2],FILTER_VALIDATE_INT))
//             {
//                 foreach ($company as $value) {
//                     if(($value['id']==$url[2])and($value['type']==2))
//                     { $idSociete=$url[2];
//                     require 'assets/pages/companyDetail.php';}
//                     elseif(($value['id']==$url[2])and($value['type']==1))
//                     {
//                         require 'assets/pages/404.php';
//                     }
//                 }   
//             }
//         }
//         elseif((!filter_var($url[1],FILTER_VALIDATE_INT))AND($url[1] == 'fournisseur'))
//         {
//             if(empty($url[2])){
//                 require 'assets/pages/provider.php'; 
//             }
//             elseif(filter_var($url[2],FILTER_VALIDATE_INT))
//             {
//                 foreach ($company as $value)
//                 {
//                     if(($value['id']==$url[2])and($value['type']==1))
//                     {
//                         $idSociete=$url[2];
//                         require 'assets/pages/companyDetail.php';
//                     }elseif(($value['id']==$url[2])and($value['type']==2))
//                     {
//                         require 'assets/pages/404.php';
//                     }
//                 }
//             }
//         }
//         elseif()
//         {
            
//         }else
//         {
//             require 'assets/pages/404.php';
//         }
//     }
// }
// elseif( ($_GET['url'] == 'bill'){
//     require 'assets/pages/company.php';
// }
// elseif( ($_GET['url'] == 'person'){
//     require 'assets/pages/company.php';
// }
// else
// {
//     require 'assets/pages/404.php';
// }
// var_dump($url);
//  if($url == ""){
//  require 'assets/pages/home.php';
//  }
//  else{
//     require 'assets/pages/404.php';
// }
 //elseif( ($_GET['url'] == 'article') AND (!empty($url[1]))){
//     $idArticle=$url[1];
//     require 'article.php';
// }else{
//     require '404.php';
// }

?>