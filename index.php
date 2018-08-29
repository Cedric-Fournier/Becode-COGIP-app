<?php
print_r($_SERVER);
$request = $_SERVER['REQUEST_URI'];
print_r($request);
if(isset($request)){
print_r($request);
    $url = explode('/', $request);
}


switch ($request) {
    case '/COGIP-app/' :
        require __DIR__ . '/assets/pages/home.php';
        break;
    case 'home' :
        require __DIR__ . '/assets/pages/home.php';
        break;
    default: 
        require __DIR__ . '/assets/pages/404.php';
        break;
}


// var_dump($url);
//  if($url == ""){
//  require 'assets/pages/home.php';
//  }
//  else{
//     require 'assets/pages/404.php';
// }
 //elseif( ($url[0] == 'article') AND (!empty($url[1]))){
//     $idArticle=$url[1];
//     require 'article.php';
// }else{
//     require '404.php';
// }