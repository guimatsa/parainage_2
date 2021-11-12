<?php
    if(isset($_POST['reg'])){
        var_dump($_POST);
        $db=mysqli_connect("localhost", "root", "", "iai") or die("erreur de connexion a la base de donnée");
        $nom=$_POST['name'];
        $password=$_POST['password'];
        $filiere=$_POST['filiere'];
        $niveau=$_POST['niveau'];
        $email=$_POST['email'];
        $num_parainage=rand(1, 10);
        $num_parainage;
        $query=$db->query("INSERT INTO l1 VALUES(NULL, '$nom', '$password', '$email', '$num_parainage', 'null', '$niveau')");
        if($query==1){
            echo "reussi";
            
        }else{
            echo 'error';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme4.css"> 
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/Python.png" alt="">
                    sfd
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/Python.png" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Inscription</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="login4.html">Connexion</a><a href="register4.html" class="active">Inscription</a>
                        </div>
                        <form method="POST">
                            <input class="form-control" type="text" name="name" placeholder="Nom complet" >
                            <input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
                            <input class="form-control" type="text" name="filiere" placeholder="filiere" required>
                            <input class="form-control" type="text" name="niveau" placeholder="niveau" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail " required>
                        
                            
                            <div class="form-button">
                                <button id="submit" type="submit" class="reg" name="reg">S'enregistrer</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>