<?php 

    require_once "../includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";

    
    session_start();

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
                $nom=$ligne['nom'];
                header('location:../home.php');
                $_SESSION['email']=$email;
                $nom=$_SESSION['nom'];
            }else if(password_verify($password, $dpassword2)){
                $nom=$ligne2['nom_p'];
                $_SESSION['email']=$email;
                header('location:../home.php');
                $nom=$_SESSION['nom'];
            }
            else{
                $errors['global']="Email ou mot de passe invalide";
            }
        }
    }

    require_once "../view/login_view.php";

    ?>



<!-- Footer -->
<body class="d-flex flex-column">
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h1 class="fw-light mt-4 text-white">Sticky Footer using Flexbox</h1>
          <p class="lead text-white-50">Use just two Bootstrap utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>
</body>