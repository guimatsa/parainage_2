<?php 

    require_once "..includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";


    $errors=[];

    if(isset($_POST['submit'])){
        $nom = sanitaze($_POST['name']);
        $password = sanitaze($_POST['password']);
        $filiere = sanitaze($_POST['filiere']);
        $niveau = sanitaze($_POST['niveau']);
        $email = sanitaze($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email invalide";
        }
        else{
            $erros['email'] = "Cet adresse email est déjà utilisé.";
        }

        if(empty($errors)){
            //Envoyer un mail a l'utilisateur
            //Enregistrer l'utilisateur en base de donnée
        }else{
            $errors['globel'] = "Veiller remplir convenablement le formulaire";
        }
    }

    

    require_once "../view/register_view.php";


    require_once "../view/footer_view.php";

?>