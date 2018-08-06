<?php
$reponse = $bdd->query('SELECT * FROM projets');
$articles = $reponse->fetchAll();
?>
<h1>PORTFOLIO</h1>
<div id="nav-page-portfolio">
    <h3>Ajouter un projet</h3>
    <form method="post" action="views/controller/post-portfolio.php">
        <p>
            <label for="icon">Icon :</label>
            <input type="text" name="icon" id="titre" placeholder="<i class=fa fa-car></i>" />
            <br>
            <label for="lien">Lien :</label>
            <input type="text" name="lien" id="lien" placeholder="https://..." />
            <br>
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" placeholder="Nom du site / Entreprise"  />
            <br>
            <label for="soustitre">Sous-Titre :</label>
            <input type="text" name="soustitre" id="soustitre" placeholder="Slogan qui déchire"  />
            <br>
            <label for="img">Image :</label>
            <input type="file" name="img"/>
            <br>
            <button>Ajouter</button>
        </p>
    </form>
    <h3>Projets affichés :</h3>
    <table>
        <tr>
            <td><h4>Titre</h4></td>
            <td><h4>Sous-titre</h4></td>
            <td><h4>Lien</h4></td>
            <td><h4>Icon</h4></td>
            <td><h4>Image</h4></td>
            <td><h4>Modifier / Supprimer</h4></td>
        </tr>
        <?php foreach ($articles as $article) :?>
        <tr>
            <td><input type="text" name="titre" id="titre" placeholder="Nom du site / Entreprise"value="<?= $article['titre'] ?>" /></td>
            <td><input type="text" name="soustitre" id="soustitre" placeholder="Slogan qui déchire" value="<?= $article['soustitre'] ?>" /></td>
            <td><input type="text" name="lien" id="lien" placeholder="https://..." value="<?= $article['lien'] ?>" /></td>
            <td><input type="text" name="icon" id="titre" placeholder="<i class=fa fa-car></i>" value="<?= $article['icon'] ?>" /></td>
            <td>
                <img src="" style="width: 200px">
                <input type="file" name="img"/></td>
            <td><a><i class="fa fa-pencil-square"></i></a>
                <a href="#" id="<?= $article['id'] ?>" class="delete"><i class="fa fa-window-close""></i></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<script src="views/js/ajax-portfolio.js"></script>