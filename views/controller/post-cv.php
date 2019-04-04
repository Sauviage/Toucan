<?php

session_start();

if(!empty($_SESSION['username'])){
require 'database.php';

    if($_POST['categorie'] == 'experience'){
        $requete = $bdd->prepare("INSERT INTO experiences(lien, entreprise, date) VALUES( :lien, :entreprise, :date)");
        $requete->execute(array(
            'lien' => $_POST['lien'],
            'entreprise' => $_POST['entreprise'],
            'date' => $_POST['date']
        ));
    }
    elseif ($_POST['categorie'] == 'diplomes'){
        $requete = $bdd->prepare("INSERT INTO diplomes(lien, diplome, date) VALUES( :lien, :diplome, :date)");
        $requete->execute(array(
            'lien' => $_POST['lien'],
            'diplome' => $_POST['diplome'],
            'date' => $_POST['date']
        ));
    }
    elseif ($_POST['categorie'] == 'connaissances'){
        $requete = $bdd->prepare("INSERT INTO connaissances(label, value, text, couleur) VALUES( :label, :value, :text, :couleur)");
        $requete->execute(array(
            'label' => $_POST['legende'],
            'value' => $_POST['valeur'],
            'text' => $_POST['description'],
            'couleur' => $_POST['couleur']
        ));
    }

//var_dump($_POST);
}
header('Location: ../../cv-admin');