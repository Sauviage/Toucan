<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 27/09/2018
 * Time: 03:06
 */

session_start();

if(!empty($_SESSION['username'])){

    require 'database.php';

    if(!empty($_FILES)){

        $nom = getcwd() . "\\..\\img\\" .$_FILES['adresse_img']['name'];

        $resultat = move_uploaded_file($_FILES['adresse_img']['tmp_name'], $nom);

        $requete = $bdd->prepare('UPDATE projets SET icon = :icon, lien = :lien, titre = :titre, soustitre = :soustitre, adresse_img = :adresse_img WHERE id=:id');
        $requete->execute(array(
            'icon' => $_POST['icon'],
            'lien' => $_POST['lien'],
            'titre' => $_POST['titre'],
            'soustitre' => $_POST['soustitre'],
            'adresse_img' => $_FILES['adresse_img']['name'],
            'id' => $_POST['id']
        ));
    }else{
        $requete = $bdd->prepare('UPDATE projets SET icon = :icon, lien = :lien, titre = :titre, soustitre = :soustitre WHERE id=:id');
        $requete->execute(array(
            'icon' => $_POST['icon'],
            'lien' => $_POST['lien'],
            'titre' => $_POST['titre'],
            'soustitre' => $_POST['soustitre'],
            'id' => $_POST['id']
        ));
    }



    echo "1";
}

