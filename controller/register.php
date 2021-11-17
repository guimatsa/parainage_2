<?php 

    require_once "../includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";


    $errors=[];

    if(isset($_POST['submit'])){
        $nom = sanitaze($_POST['name']);
        $password = sanitaze($_POST['password']);
        $cpassword = sanitaze($_POST['cpassword']);
        $filiere = sanitaze($_POST['filiere']);
        $niveau = sanitaze($_POST['niveau']);
        $email = sanitaze($_POST['email']);

        if(empty($nom)){
            $errors['name'] = "Champ obligatoire";
        }else if(mb_strlen($nom)<3){
            $errors['name'] = "Doit être compris entre 3 et 200";
        }else if(mb_strlen($nom)>200){
            $errors['name'] = "Doit être compris entre 3 et 200";
        }

        if(empty($password)){
            $errors['password'] = "Champ obligatoire";
        }else if(mb_strlen($password)<6){
            $errors['password'] = "Doit avoir au moins 6 caractères";
        }

        if($password!=$cpassword){
            $errors['cpassword']="Les mots de passe ne sont pas identiques";
        }

        if(empty($email)){
            $errors['email'] = "Champ obligatoire";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email invalide";
        }
        $verif_email = $db->query("SELECT email FROM l1 WHERE email='$email'");
        $email_result = mysqli_num_rows($verif_email);
        if($email_result==1){
            $errors['email'] = "Cet adresse email est déjà utilisé.";
        }

        if(empty($errors)){
            //Envoyer un mail a l'utilisateur
            //Enregistrer l'utilisateur en base de donnée

            $req = $db->query("SELECT * FROM l2 WHERE filleule IS NULL");
            $row = mysqli_num_rows($req);
            $ligne = $req->fetch_assoc();
            $num_parainage = rand(1,10);
            $active=0;
            $today = date("Y-m-d H:i:s"); 

            if($row==TRUE){
                $add_user = $db->query("INSERT INTO l1 VALUES(NULL, '$nom', '$password', '$email', '', '$filiere', '$niveau', '$active', '$today')");
                $nom_p = $ligne['nom_p'];
                $id_p = $ligne['id'];
                if($add_user==1){
                    $maj = $db->query("UPDATE l1 SET nom_parain='$nom_p' WHERE nom='$nom'");
                    $updatel2 = $db->query("UPDATE l2 SET filleule='$nom' WHERE id=$id_p");
                }else{
                    echo "Erreur lors de lenregistrement";
                }
            }else{
                echo "plus de parain disponible...";
            }
        }else{
            $errors['global'] = "Veiller remplir convenablement le formulaire";
        }
    }

    

    require_once "../view/register_view.php";

    // require_once "../view/footer_view.php";

?>