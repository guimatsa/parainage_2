<?php 
    require_once '../_fonction/fontion.php';
?>
<div class="form-body">
        <div class="website-logo">
            <a href="../index.php">
                <div class="logo">
                    <img class="logo-size" src="images/Python.png" alt="">Acceuil
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
                        <h3>Connexion</h3>
                        <p>Plateforme de parainage des étudiants de l'IAI centre de Douala.</p>
                        <div class="page-links">
                            <a href="../controller/login.php" class="active">Connexion</a><a href="../controller/register.php">Inscription</a>
                        </div>
                        <?= display_errors($errors, 'global')?>
                        <form method="POST">
                            <input class="form-control" type="email" name="email" value="<?= get_data($_POST, 'email')?>" placeholder="E-mail">
                            <?= display_errors($errors, 'email')?>
                            <input class="form-control" type="password" name="password" value="<?= get_data($_POST, 'password')?>" placeholder="Mot de passe">
                            <?= display_errors($errors, 'password')?>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="connexion">Connexion</button> <a href="../controller/forget.php">Mot de passe oublier?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>