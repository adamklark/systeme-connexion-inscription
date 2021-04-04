<?php

    require 'navbar.php';

?>
    
<link rel="stylesheet" href="assets/style.css">
<div class="login-signup-container">
    <img src="./img/connection.png" alt="image-page-de-connexion-et-deconnexion">
        <div class="container-formulary">
            
            <form class="formulary" method="post" action="inscription.php">
                <h3>
                Inscription
                </h3>
              
                <!-- <label for="">Nom</label> -->
                <input type="text" name="nom" id="Name" placeholder="Votre Nom *" required>
                <!-- <label for="">Prénom</label> -->
                <input type="text" name="prenom" id="Pname" placeholder="Votre Prénom *" required>
                <!-- <label for="">E-mail</label> -->
                <input type="email" name="email" id="Email" placeholder="Votre E-mail *" required>
                
                <!-- <label for="">Mot de passe</label> -->
                <input type="password" id="password"  name="mdps" placeholder="Votre Mot de Passe *" required>
                
                <!-- <label for="">Confirmer le mot de passe</label> -->
                <input type="password" id="password2"  name="mdps2" placeholder="Confirmer le Mot de Passe *" required>
            
                <button id="inscription" type="submit" class="btn">
                    <h4>
                        Inscription
                    </h4>
                    
                </button>
            </form>
     
        </div> 
</div>