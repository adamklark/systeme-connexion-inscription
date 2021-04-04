<?php

require 'navbar.php';

?>

<link rel="stylesheet" href="assets/style.css">
<div class="login-signup-container">
    <!-- <img src="./img/connection.png" alt="image-page-de-connexion-et-deconnexion"> -->
        <div class="container-formulary">
            
                <form class="formulary" method="post" action="connexion.php">
                    <h3>
                    Connexion
                    </h3>
               
                    <!-- <label for="E-mail">E-mail</label> -->
                    <input type="email" name="email" id="mdps" placeholder="Votre E-mail" required>
                    <!-- <label for="">Mot de passe</label> -->
                    <input type="password" id="mdps" name="mdps" placeholder="Votre Mot de Passe" required></input >
            
                    <button id="connection" class="btn" type="submit">
                        <h4>
                           connection
                        </h4>
                        
                    </button>
                </form>
        </div>
</div>