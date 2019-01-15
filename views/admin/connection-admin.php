<form method="post" action="views/controller/connection.php" class="formulaire">
    <label for="username">Identifiant :</label>
    <input type="text" name="username" />
    <br>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" />
    <br>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error'] == 1){
            echo "<p class=\"msg-erreur-connexion\">Identifiant ou mot de passe incorrect. </p>";
        }
    }
    ?>
    <button>Envoyer</button>
</form>