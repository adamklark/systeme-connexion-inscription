<?php
 session_start();
    require 'connexion-bd.php';

    /* echo "présent"; */
    if(isset($_POST['email']) AND isset($_POST['mdps']))
    
    {
        $email = htmlspecialchars($_POST['email']);
        $mdps = htmlspecialchars($_POST['mdps']);

        $check = $bdd->prepare('SELECT  * FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($mdps, $data['mdps']))
                {
                    $_SESSION['user'] = $data['email'];
                    header('Location: messagerie.php');
                    exit();
                }else{echo "mauvais mots de passe";}
            }else header("erreur dans la saisie de l'email");
        }else header('Location: index.php');
    }else header('Location: index.php');



?>