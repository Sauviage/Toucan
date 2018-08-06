<?php
require 'database.php';


//var_dump($_POST);



$requete = $bdd->prepare("INSERT INTO projets(icon,lien, titre, soustitre) VALUES(:icon, :lien, :titre, :soustitre)");



$requete->execute(array(
    'icon' => $_POST['icon'],
    'lien' => $_POST['lien'],
    'titre' => $_POST['titre'],
    'soustitre' => $_POST['soustitre']

));
header('Location: http://localhost:3000/ToucanGulp/index.php?p=portfolio-admin');