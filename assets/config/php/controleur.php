<?php
$sql="SELECT id,type FROM company";
include '/var/www/html/COGIP-app/assets/php-pdo/connect.php';
$requete->execute();
$company = $requete->fetchAll();
$requete->closeCursor();
$pagesCompanyTrouver=false;
$uri = "";

function home()
{
    require 'assets/pages/home.php';
}
function company()
{
require 'assets/pages/company.php';
}
function client($uri)
{
    if(empty($uri))
    {
        require 'assets/pages/client.php';
    }
    elseif(filter_var($uri,FILTER_VALIDATE_INT))
    {
        foreach ($company as $value) {
            if(($value['id']==$uri)and($value['type']==2))
            { $idSociete=$uri;
            require 'assets/pages/companyDetail.php';}
            elseif(($value['id']==$uri)and($value['type']==1))
            {
                require 'assets/pages/404.php';
            }
        }   
    }
}
function provider($uri)
{
    if(empty($uri)){
        require 'assets/pages/provider.php'; 
    }
    elseif(filter_var($uri,FILTER_VALIDATE_INT))
    {
        foreach ($company as $value)
        {
            if(($value['id']==$uri)and($value['type']==1))
            {
                $idSociete=$uri;
                require 'assets/pages/companyDetail.php';
            }elseif(($value['id']==$uri)and($value['type']==2))
            {
                require 'assets/pages/404.php';
            }
        }
    }
}
function companyDetail($uri)
{
    foreach ($company as $value) {
        if($value['id']==$uri)
        { $idSociete=$uri;
            $pagesCompanyTrouver=true;
        require 'assets/pages/companyDetail.php';}
    }
    if($pagesCompanyTrouver===false){require 'assets/pages/404.php';}
}