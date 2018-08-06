<?php
/**
 * Created by PhpStorm.
 * User: Sauviage
 * Date: 11/06/2018
 * Time: 17:01
 */

require 'database.php';

$requete = $bdd->prepare('DELETE FROM messages WHERE id=:id');



$requete->execute(array(
    'id' => $_POST['id'],

));
echo "1";