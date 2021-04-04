<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
} 

    require 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue sur la messagerie<?php echo $_SESSION['user']?></h1>
    <a href="deconnexion.php">Déconnection</a>
</body>
</html>