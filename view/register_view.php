<?php 
    require_once '../_fonction/fontion.php';
?>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="../index.php">
                <div class="logo">
                    <img class="logo-size" src="../assets/images/iailogo.png" alt="">
                    ACCEUIL
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="../assets/images/iailogo.png" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Inscription</h3>
                        <p>Plateforme de parainage des etudiants de l'IAI centre de Douala.</p>
                        <div class="page-links">
                            <a href="../controller/login.php">Connexion</a><a href="../controller/register.php" class="active">Inscription</a>
                        </div>
                        <form method="POST">
                            <label for="name" class="form-label">Nom et Prénom complet :</label>
                            <input class="form-control" type="text" name="name" value="<?= get_data($_POST, 'name')?>" placeholder="Nom complet">
                            <?= display_errors($errors, 'name')?>

                            <label for="email" class="form-label">Email:</label>
                            <input class="form-control" type="email" name="email" value="<?= get_data($_POST, 'email')?>" placeholder="Ex. azerty@xyz.com">
                            <?= display_errors($errors, 'email')?>

                            <label for="password" class="form-label">Mot de passe :</label>
                            <input class="form-control" type="password" name="password" value="<?= get_data($_POST, 'password')?>" placeholder="Mot de passe">
                            <?= display_errors($errors, 'password')?>

                            <label for="password" class="form-label">Confirmer votre mot de passe :</label>
                            <input class="form-control" type="password" name="cpassword" value="<?= get_data($_POST, 'cpassword')?>" placeholder="Confirmer votre mot de passe">
                            <?= display_errors($errors, 'cpassword')?>

                            <label for="filiere" class="form-label">Filière :</label>
                            <select name="filiere" id="filiere" class="form-control">
                                <option value="GL">Génie Logiciel</option>
                                <option value="SR">Système et réseaux</option>
                            </select>
                            <?= display_errors($errors, 'filiere')?>
                            
                            <label for="niveau" class="form-label">Niveau :</label>
                            <select name="niveau" id="niveau" class="form-control">
                                <option value="l1">Niveau 1</option>
                                <option value="l2">Niveau 2</option>
                            </select>
                            <?= display_errors($errors, 'niveau')?>
                            <div class="form-button">
                                <button id="submit" type="submit" class="btn btn-primary" name="submit">S'enregistrer</button>
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