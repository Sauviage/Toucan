<<?php

session_start();

require 'database.php';

if(!empty($_SESSION['username'])){

    var_dump($_POST);
    require 'database.php';
    if(!empty($_POST['categorie'])){
        if($_POST['categorie'] == "Connaissances"){
            $requete = $bdd->prepare('UPDATE connaissances SET label = :label, value = :value, text = :text, couleur = :couleur WHERE id=:id');
            $requete->execute(array(
                'label' => $_POST['label'],
                'value' => $_POST['competence'],
                'text' => $_POST['description'],
                'couleur' => $_POST['couleur'],
                'id' => $_POST['id']
            ));
            echo "1";
        }
    }

    /*$requete = $bdd->prepare('UPDATE projets SET icon = :icon, lien = :lien, titre = :titre, soustitre = :soustitre, adresse_img = :adresse_img WHERE id=:id');
    $requete->execute(array(
        'icon' => $_POST['icon'],
        'lien' => $_POST['lien'],
        'titre' => $_POST['titre'],
        'soustitre' => $_POST['soustitre'],
        'adresse_img' => $nom,
        'id' => $_POST['id']
    ));

    echo "1";*/
}


