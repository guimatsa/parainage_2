<?php 
    require_once '../_fonction/fontion.php';
?>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/1Python.png" alt="">
                    ACCEUIL
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/1Python.png" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Inscription</h3>
                        <p>Plateforme de parainage des etudiants de l'IAI centre de Douala.</p>
                        <div class="page-links">
                            <a href="login4.html">Connexion</a><a href="register4.html" class="active">Inscription</a>
                        </div>
                        <form method="POST">
                            <input class="form-control" type="text" name="name" placeholder="Nom complet">
                            <input class="form-control" type="email" name="email" placeholder="Votre adresse E-mail ">
                            <input class="form-control" type="password" name="password" placeholder="Definissez votre Mot de passe">
                            <input class="form-control" type="text" name="filiere" placeholder="filiere">
                            <input class="form-control" type="text" name="niveau" placeholder="niveau">
                            


                            <div class="form-button">
                                <button id="submit" type="submit" class="btn btn-primary" name="reg">S'enregistrer</button>
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