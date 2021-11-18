<?php 
    session_start();

    $nom=$_SESSION['nom'];
    $email=$_SESSION['email'];
        echo "Bienvenue .$nom . $email vous venez de créer votre compte et il est en attente pour verification. Merci de patienter.";