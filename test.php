<?php
    require_once('db.php');
    $nom="kenfack";
    $select = $db->query("SELECT * FROM l2 WHERE nom_p='$nom'");
    $row=mysqli_num_rows($select);

    if($row==1){
        echo "reussi";
    }else{
        echo "echec";
    }
?>