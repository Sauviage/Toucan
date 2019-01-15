<?php
$reponse = $bdd->query('SELECT * FROM experiences');

$experiences = $reponse->fetchAll();

$reponse = $bdd->query('SELECT * FROM diplomes');

$diplomes = $reponse->fetchAll();

$reponse = $bdd->query('SELECT * FROM connaissances');

$connaissances = $reponse->fetchAll();

?>
<h1>CV</h1>
<div id="nav-page-portfolio">
    <div class="bloc-admin">
        <h3 class="catégorie">Experience</h3>
        <h4>Ajouter une experience</h4>
        <form method="post" action="views/controller/post-cv.php">
            <p>
                <label for="icon">Entreprise :</label>
                <input type="text" name="titre" id="diplome" placeholder="Nom du diplome..."  />
                <br>
                <label for="lien">Lien (facultatif) :</label>
                <input type="text" name="lien" id="lien" placeholder="https://..." />
                <br>
                <label for="titre">Date :</label>
                <input type="text" name="date" id="date" placeholder="Date..."  />
                <input name="categorie" type="hidden" value="experience">
                <br>
                <button>Ajouter</button>
            </p>
        </form>
        <h4>Experiences affichés :</h4>
        <table>
            <tr>
                <td><h4>Entreprise</h4></td>
                <td><h4>Lien</h4></td>
                <td><h4>Date</h4></td>
                <td><h4>Modifier / Supprimer</h4></td>
            </tr>
            <?php foreach ($experiences as $experience) :?>
            <tr>
                <td><input type="text" name="entreprise" id="entreprise" placeholder="Nom du site / Entreprise" value="<?= $experience['titre'] ?>"  /></td>
                <td><input type="text" name="lien" id="lien" placeholder="https://..." value="<?= $experience['lien'] ?>" /></td>
                <td><input type="text" name="date" id="date" placeholder="Date..." value="<?= $experience['date'] ?>" /></td>
                <td><a><i class="fa fa-pencil-square"></i></a>
                    <a href="#" id="<?= $experience['id'] ?>" class="delete"><i class="fa fa-window-close""></i></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
<!--Diplome-->
    <div class="bloc-admin">
        <h3 class="catégorie">Diplomes</h3>
        <h4>Ajouter un diplome</h4>
        <form method="post" action="views/controller/post-cv.php">
            <p>
                <label for="icon">Diplome :</label>
                <input type="text" name="titre" id="titre" placeholder="Nom de l'entreprise..." />
                <br>
                <label for="lien">Lien (facultatif) :</label>
                <input type="text" name="lien" id="lien" placeholder="https://..." />
                <br>
                <label for="titre">Date :</label>
                <input type="text" name="date" id="date" placeholder="Date..."  />
                <input name="categorie" type="hidden" value="diplomes">
                <br>
                <button>Ajouter</button>
            </p>
        </form>
        <h4>Diplomes affichés :</h4>
        <table>
            <tr>
                <td><h4>Diplome</h4></td>
                <td><h4>Lien</h4></td>
                <td><h4>Date</h4></td>
                <td><h4>Modifier / Supprimer</h4></td>
            </tr>
            <?php foreach ($diplomes as $diplome) :?>
            <tr>
                <td><input type="text" name="entreprise" id="entreprise" placeholder="Nom du site / Entreprise" value="<?= $diplome['titre'] ?>" /></td>
                <td><input type="text" name="lien" id="lien" placeholder="https://..." value="<?= $diplome['lien'] ?>"/></td>
                <td><input type="text" name="date" id="date" placeholder="Date..." value="<?= $diplome['date'] ?>" /></td>
                <td><a><i class="fa fa-pencil-square"></i></a>
                    <a href="#" id="<?= $diplome['id'] ?>" class="delete"><i class="fa fa-window-close""></i></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
<!--Connaissance-->
    <div class="bloc-admin">
        <h3 class="catégorie">Connaissances</h3>
        <h4>Ajouter une connaissance</h4>
        <form method="post" action="views/controller/post-cv.php">
            <p>
                <label for="icon">Legende :</label>
                <input type="text" name="legende" id="legende" placeholder="Legendes..." />
                <br>
                <label for="titre">Valeur :</label>
                <input type="number" name="valeur" id="valeur" placeholder="Niveau de compétence"  />
                <br>
                <label for="titre">Desc' :</label>
                <input type="text" name="description" id="description" placeholder="Description"  />
                <br>
                <label for="titre">Couleur :</label>
                <input type="text" name="couleur" id="couleur" placeholder="#000"  />
                <input name="categorie" type="hidden" value="connaissances">
                <br>
                <button>Ajouter</button>
            </p>
        </form>
        <br>
        <br>
        <h4>Connaissances affichés :</h4>
        <table>
            <tr>
                <td><h4>Légende</h4></td>
                <td><h4>Valeur</h4></td>
                <td><h4>Description</h4></td>
                <td><h4>Couleur</h4></td>
                <td><h4>Modifier / Supprimer</h4></td>
            </tr>
            <?php foreach ($connaissances as $connaissance) :?>
            <tr>
                <td><input type="text" name="legende" id="legende" placeholder="legende" value="<?= $connaissance['label'] ?>" /></td>
                <td><input type="number" name="valeur" id="valeur" placeholder="niveau de compétence" value="<?= $connaissance['value'] ?>" /></td>
                <td><input type="text" name="description" id="description" placeholder="Description" value="<?= $connaissance['text'] ?>"/></td>
                <td><input type="text" name="couleur" id="couleur" placeholder="#000" value="<?= $connaissance['couleur'] ?>"/></td>
                <td><a><i class="fa fa-pencil-square"></i></a>
                    <a><i class="fa fa-window-close""></i></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<script src="views/js/ajax-cv.js"></script>