<?php
require 'database.php';

if($_POST['categorie'] == 'experience'){
    $requete = $bdd->prepare("INSERT INTO experiences(lien, titre, date) VALUES( :lien, :titre, :date)");
    $requete->execute(array(
        'lien' => $_POST['lien'],
        'titre' => $_POST['titre'],
        'date' => $_POST['date']
    ));
}
elseif ($_POST['categorie'] == 'diplomes'){
    $requete = $bdd->prepare("INSERT INTO diplomes(lien, titre, date) VALUES( :lien, :titre, :date)");
    $requete->execute(array(
        'lien' => $_POST['lien'],
        'titre' => $_POST['titre'],
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
header('Location: http://localhost:3000/ToucanGulp/index.php?p=cv-admin');