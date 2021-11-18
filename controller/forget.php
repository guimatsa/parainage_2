<?php 

    require_once "../includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";

    session_start();

    $nom=$_SESSION['nom'];
    if($nom){
        header('location:login.php');
    }else{
        echo "Bienvenue".$nom."vous venez de créer votre compte et il est en attente pour verification. Merci de patienter.";
    }

    require_once "../view/home_view.php";