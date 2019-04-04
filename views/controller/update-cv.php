<<?php

session_start();

require 'database.php';

if(!empty($_SESSION['username'])){

    if(!empty($_POST['categorie'])){

        if($_POST['categorie'] == "Experience"){
            $requete = $bdd->prepare('UPDATE experiences SET entreprise = :entreprise, lien = :lien, date = :date WHERE id=:id');
            $requete->execute(array(
                'entreprise' => $_POST['entreprise'],
                'lien' => $_POST['lien'],
                'date' => $_POST['date'],
                'id' => $_POST['id']
            ));
            echo "1";
        }

        if($_POST['categorie'] == "Diplomes"){
            $requete = $bdd->prepare('UPDATE diplomes SET diplome = :diplome, lien = :lien, date = :date WHERE id=:id');
            $requete->execute(array(
                'diplome' => $_POST['diplome'],
                'lien' => $_POST['lien'],
                'date' => $_POST['date'],
                'id' => $_POST['id']
            ));
            echo "1";
        }

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


