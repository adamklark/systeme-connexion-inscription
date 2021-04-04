<?php
//Inclure la page de conection au bdd
require 'connexion-bd.php';

/* echo "je suis la"; */
if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['mdps']) AND isset($_POST['mdps2']))
{ 
    //eviter la failles xss
    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdps = htmlspecialchars($_POST["mdps"]);
    $mdps2 = htmlspecialchars($_POST["mdps2"]);

    //verifie si l'utilisateur existe dans la bdd
    $insertion = $bdd->prepare('SELECT * FROM utilisateurs WHERE email = ?');
    $insertion->execute(array($email));
    $data = $insertion->fetch();
    $row = $insertion->rowCount();

    //si utilisateur n'existe pas
    if($row == 0){ 
            if(strlen($email) <= 100){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if($mdps == $mdps2){
                        //si oui alors le mots de passe est hachée
                        $mdps= password_hash($mdps, PASSWORD_BCRYPT);
                        
                        /* header('Location:inscription-affichage.php?reg_err=success');
                        die(); */
                        //Préparation de requette sql
                        $insertion = $bdd->prepare('INSERT INTO utilisateurs(nom, prenom, email, mdps) 
                        VALUES(:nom, :prenom, :email, :mdps)');

                        //associe les valeurs entrées dans le formulaire au valeur des variables qui contient les champs de formulaire
                        $insertion->bindValue(':nom', $nom);
                        $insertion->bindValue(':prenom', $prenom);
                        $insertion->bindValue(':email', $email);
                        $insertion->bindValue(':mdps', $mdps);
                   
                        //execute la requette
                        $insertion->execute();

                        header('Location:messagerie.php');
                        exit();
                    }else{
                        echo "Les deux mots de passe ne sont pas identiques";
                    }
                }else echo "email invalide" ;
            }else{ echo "email trop long";}
    }else{ }
}

                 
               






                        
                        
                        
