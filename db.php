<?php

$db=mysqli_connect("localhost", "root", "", "iai") or die("erreur de connexion a la base de donnée");
    $nom = $_POST['name'];
    $password = $_POST['password'];
    $filiere = $_POST['filiere'];
    $niveau = $_POST['niveau'];
    $email = $_POST['email'];

?>