<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 27/09/2018
 * Time: 03:06
 */

session_start();



$nom = "salut";

if(!empty($_SESSION['username'])){

    var_dump($_POST);
    require 'database.php';

    $requete = $bdd->prepare('UPDATE projets SET icon = :icon, lien = :lien, titre = :titre, soustitre = :soustitre, adresse_img = :adresse_img WHERE id=:id');
    $requete->execute(array(
        'icon' => $_POST['icon'],
        'lien' => $_POST['lien'],
        'titre' => $_POST['titre'],
        'soustitre' => $_POST['soustitre'],
        'adresse_img' => $nom,
        'id' => $_POST['id']
    ));

    echo "1";
}

