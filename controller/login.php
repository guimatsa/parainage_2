<?php 

    require_once "../includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";

    

    $errors=[];

    if(isset($_POST['connexion'])){
        
        $email = sanitaze($_POST['email']);
        $password = sanitaze($_POST['password']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email invalide";
        }

        if(empty($password)){
            $errors['password'] = "Champ obligatoire";
        }else if(mb_strlen($password)<6){
            $errors['password'] = "Doit avoir au moins 6 caractères";
        }
        if(empty($email)){
            $errors['email'] = "Champ obligatoire";
        }
        
        if(empty($errors)){
            $crypted=password_hash($password, PASSWORD_DEFAULT);
            $query_log = $db->query("SELECT * FROM l1 WHERE email='$email'");
            $query_log2 = $db->query("SELECT * FROM l2 WHERE email='$email'");
            $ligne=$query_log->fetch_assoc();
            $ligne2=$query_log2->fetch_assoc();
            $dpassword=$ligne['password'];
            $dpassword2=$ligne2['password'];

            if(password_verify($password, $dpassword)){
                header('location:../home.php');
                $_SESSION['email']=$email;
                $_SESSION['nom']=$nom;
            }else if(password_verify($password, $dpassword2)){
                $_SESSION['email']=$email;
                header('location:../home.php');
                $_SESSION['nom']=$nom;
            }
            else{
                $errors['global']="Email ou mot de passe invalide";
            }
        }
    }

    require_once "../view/login_view.php";

    ?>