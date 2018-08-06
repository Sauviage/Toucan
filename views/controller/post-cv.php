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
header('Location: http://localhost:3000/ToucanGulp/index.php?p=cv-admin');