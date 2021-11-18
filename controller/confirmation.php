<?php 

    require_once "../includes/db.php";

    require_once "../view/head_view.php";

    require_once "../_fonction/fontion.php";

    $errors=[];

    if(isset($_POST['submit'])){
        $code=sanitaze($_POST['code']);
    }
    require_once "../view/confirmation_view.php";