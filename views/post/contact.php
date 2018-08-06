<h1>CONTACT</h1>
<div class="formulaire">
    <p>Vous voulez des renseignements, un devis, ou même discuter d'un projet autour d'un café ?<br> Alors n'hésitez pas à prendre contact avec moi !</p>
    <form action="views/controller/post.php" method="post">
        <div>
            <label for="nom">Nom (obligatoire) :</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="email">E-mail (obligatoire) :</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet">
        </div>
        <div>
            <label for="contenu">Message :</label>
            <textarea id="contenu" name="contenu" cols='20' rows='5' ></textarea>
        </div>
        <button>ENVOYER</button>
    </form>
</div>
