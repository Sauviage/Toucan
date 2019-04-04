<?php

session_start();

if(!empty($_SESSION['username'])){
    require 'database.php';

    $requete = $bdd->prepare('DELETE FROM projets WHERE id=:id');



    $requete->execute(array(
        'id' => $_POST['id'],

    ));
}
echo "1";
