<?php 

    require_once "../includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../includes/PHPMailer.php';
    require '../includes/SMTP.php';
    require '../includes/Exception.php';


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
        $verif_email2 = $db->query("SELECT email FROM l2 WHERE email='$email'");
        $email_result = mysqli_num_rows($verif_email);
        $email_result2 = mysqli_num_rows($verif_email2);
        if($email_result==1){
            $errors['email'] = "Cet adresse email est déjà utilisé.";
        }
        $email_result2 = mysqli_num_rows($verif_email2);
        if($email_result2==1){
            $errors['email'] = "Cet adresse email est déjà utilisé.";
        }
        if(empty($errors)){
            //Envoyer un mail a l'utilisateur
            $otp_code = rand(999999,100000);
            $mail = new PHPMailer();
                    //Set mailer to use smtp
                        $mail->isSMTP();
                    //Define smtp host
                        $mail->Host = "smtp.gmail.com";
                    //Enable smtp authentication
                        $mail->SMTPAuth = true;
                    //Set smtp encryption type (ssl/tls)
                        $mail->SMTPSecure = "tls";
                    //Port to connect smtp
                        $mail->Port = "587";
                    //Set gmail username
                        $mail->Username = "Dilanzambou2@gmail.com";
                    //Set gmail password
                        $mail->Password = "dllitesoft";
                    //Email subject
                        $mail->Subject = "INSCRIPTION SUR LA PLATEFORME DE PARAINAGE DE L'IAI CENTRE DE DOUALA";
                    //Set sender email
                        $mail->setFrom('siteofficiel@support.com');
                    //Enable HTML
                        $mail->isHTML(true);
                    //Attachment

                    //    $mail->addAttachment('img/attachment.png');

                    //Email body
                        $mail->Body = "<h1>Code de confirmation</h1></br>
                        <p>Suite a votre inscription sur la plateforme de parainage de l'IAI centre de Douala. Votre code de confirmation est $otp_code";
                   
            //Enregistrer l'utilisateur en base de donnée

            
            $active=0;
            $today = date("Y-m-d H:i:s"); 
            $crypted = password_hash($password, PASSWORD_DEFAULT);

                if($niveau=="l1"){
                    $req = $db->query("SELECT * FROM l2 WHERE filleule IS NULL");
                    $ligne = $req->fetch_assoc();
                    ECHO $nom_p = $ligne['nom_p'];
                    ECHO $id_p = $ligne['id'];
                    $add_user = $db->query("INSERT INTO l1 VALUES(NULL, '$nom', '$crypted', '$email', '', '$filiere', '$niveau', '$active', '$otp_code', '$today')");
                     //Add recipient
                     $mail->addAddress($email);
                     //Finally send email
                         if ( $mail->send() ) {
                             $message='<div class="alert alert-success">Incription en cour vous allez recevoir un code de confirmation par email</div>';
                           
                         }else{
                             $message= '<div class="alert alert-danger"> L\'email n\'a pas été envoyer $mail->ErrorInfo;</div>';
                         }
                     //Closing smtp connection
                         $mail->smtpClose();
 
                    if($add_user==1){
                        $maj = $db->query("UPDATE l1 SET nom_parain='$nom_p' WHERE nom='$nom'");
                        $updatel2 = $db->query("UPDATE l2 SET filleule='$nom' WHERE id=$id_p");
                        echo "Parain attribuer";
                    }else{
                        echo "Erreur lors de lenregistrement";
                    }
                    ECHO "ok";
                }else if($niveau=="l2"){
                    $add_l2 = $db->query("INSERT INTO l2 VALUES(NULL, '$nom', '$email', '$crypted', '', '$today')");
                     //Add recipient
                     $mail->addAddress($email);
                     //Finally send email
                         if ( $mail->send() ) {
                             $message='<div class="alert alert-success">Incription en cour vous allez recevoir un code de confirmation par email</div>';
                           
                         }else{
                             $message= '<div class="alert alert-danger"> L\'email n\'a pas été envoyer $mail->ErrorInfo;</div>';
                         }
                     //Closing smtp connection
                         $mail->smtpClose();
 
                }else{
                    echo "Impossible pour le moment. Merci de patienter";
                }
        }else{
            $errors['global'] = "Veiller remplir convenablement le formulaire";
        }
    }

    

    require_once "../view/register_view.php";

    // require_once "../view/footer_view.php";

?>