<?php

$serveur = "localhost";
$nom_bd = "systeme_conection";
$user = "adam";
$pass= "azerty";

try{
    //Conection a la bdd
    $bdd = new PDO("mysql:host=$serveur;dbname=$nom_bd",$user,$pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
        echo 'Erreur : '.$e->getMessage();
}

?>