<?php
require 'database.php';


//var_dump($_POST);



$requete = $bdd->prepare('INSERT INTO messages(nom, email, sujet, date, contenu) VALUES(:nom, :email, :sujet, NOW(), :contenu)');



$requete->execute(array(
    'nom' => $_POST['nom'],
    'email' => $_POST['email'],
    'sujet' => $_POST['sujet'],
    'contenu' => $_POST['contenu']

));