<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 22/09/2018
 * Time: 03:25
 */

require 'database.php';


if(isset($_POST['username']) && isset($_POST['password'])){

    $username = htmlspecialchars($_POST['username']);

    $requete = $bdd->query("SELECT * FROM users WHERE username = '$username'");

    //var_dump($requete->fetch());

    $response = $requete->fetch();

    if(!empty($response)){
            if($response['password'] == $_POST['password']){
                echo 1;
                session_start();
                $_SESSION['username'] = $username;
                header('Location: ../../admin');
            }else{
                header('Location: ../../connection-admin?error=1');
            }
    }

}


