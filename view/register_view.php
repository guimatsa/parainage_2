<?php 
    require_once '../_fonction/fontion.php';
?>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="../assets/images/Python.png" alt="">
                    ACCEUIL
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="../assets/images/Python.png" alt="">
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
                            <input class="form-control" type="text" name="name" value="<?= get_data($_POST, 'name')?>" placeholder="Nom complet">
                            <?= display_errors($errors, 'name')?>
                            <input class="form-control" type="email" name="email" value="<?= get_data($_POST, 'email')?>" placeholder="Votre adresse E-mail ">
                            <?= display_errors($errors, 'email')?>
                            <input class="form-control" type="password" name="password" value="<?= get_data($_POST, 'password')?>" placeholder="Definissez votre Mot de passe">
                            <?= display_errors($errors, 'password')?>
                            <p>Selectionner votre filière</p>
                            <select name="filiere" id="filiere" class="form-control">
                                <option value="GL">Génie Logiciel</option>
                                <option value="SR">Système et réseaux</option>
                            </select>
                            <?= display_errors($errors, 'filiere')?>
                            <label for="niveau"></label>
                            <p>Selectionner votre niveau</p>
                            <select name="niveau" id="niveau" class="form-control">
                                <option value="l1">Niveau 1</option>
                                <option value="l2">Niveau 2</option>
                            </select>
                            <?= display_errors($errors, 'niveau')?>
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