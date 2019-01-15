<?php
require 'database.php';


//var_dump($_POST);

$nom = "../../../ToucanGulp/views/img/" .$_FILES['img']['name']. "";

var_dump(getcwd());

$nom = getcwd() . "\\..\\img\\" .$_FILES['img']['name'];

//chdir('../../img/');
echo $nom;
var_dump(getcwd());
var_dump($_FILES['img']);

$resultat = move_uploaded_file($_FILES['img']['tmp_name'], $nom);

if ($resultat) echo "Transfert réussi";



$requete = $bdd->prepare("INSERT INTO projets(icon,lien, titre, soustitre, adresse_img) VALUES(:icon, :lien, :titre, :soustitre, :adresse_img)");



$requete->execute(array(
    'icon' => $_POST['icon'],
    'lien' => $_POST['lien'],
    'titre' => $_POST['titre'],
    'soustitre' => $_POST['soustitre'],
    'adresse_img' => $_FILES['img']['name']

));
header('Location: ../../portfolio-admin');