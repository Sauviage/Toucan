<?php

session_start();
if(!empty($_SESSION['username'])){
    require 'database.php';


    if($_POST['categorie'] == 'Experience'){
        $requete = $bdd->prepare('DELETE FROM experiences WHERE id=:id');
        $requete->execute(array(
            'id' => $_POST['id'],
        ));
    }
    elseif ($_POST['categorie'] == 'Diplomes'){
        $requete = $bdd->prepare('DELETE FROM diplomes WHERE id=:id');
        $requete->execute(array(
            'id' => $_POST['id'],
        ));
    }
    elseif ($_POST['categorie'] == 'Connaissances'){
        $requete = $bdd->prepare('DELETE FROM Connaissances WHERE id=:id');
        $requete->execute(array(
            'id' => $_POST['id'],
        ));
    }
}




echo "1";