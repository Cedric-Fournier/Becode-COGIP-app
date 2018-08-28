<?php
    include './assets/config/php/config.php';
    try {
        $host=$config['DB_HOST'];
        $dbname=$config['DB_DATABASE'];
        $conn= new PDO("mysql:host=$host;dbname=$dbname",$config['DB_USERNAME'],$config['DB_PASSWORD']);
        //new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    }
    catch(PDOException $e) {
        echo "Error:".$e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/components/font-awesome/css/fontawesome.min.css">
</head>
<body>
    <header></header>
    <section></section>
    <footer></footer>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
