<?php
require 'config.php';
$requestSQL="SELECT * FROM user";
    $requete = $pdo->prepare($requestSQL);
    $requete->execute();
    $connection = $requete->fetchAll();
    $requete->closeCursor();
// on teste si nos variables sont définies
if (isset($_POST['login'])==true && isset($_POST['pwd'])==true) {
    $errorConnect=0;
    foreach ($connection as $key => $value) {
        if (($value['login'] == $_POST['login']) && ($value['password'] == $_POST['pwd'])){
        session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		// on redirige notre visiteur vers une page de notre section membre
        header ('location: http://localhost/COGIP-app/?page=dashboard');
        exit();
        }
        else{$errorConnect++;}
    }
	
	if($errorConnect==count($connection)){
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL="index.htm>';
	}
}
else {
    header ('location: http://localhost/COGIP-app/?page=login');
        exit();
}

?>