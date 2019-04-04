<?php
$reponse = $bdd->query('SELECT * FROM projets ORDER BY id DESC');

$articles = $reponse->fetchAll();

?>
<h1>PORTFOLIO</h1>
<div id="nav-page-portfolio">
    <?php foreach ($articles as $article) :?>
     <article class="nav-option-portfolio">
        <div class="filtre-bleu" style="
        background: linear-gradient(
                  rgba(190, 30, 45, 0.40),
                  rgba(243, 191, 191, 0.40)
  ),url('views/img/<?= $article['adresse_img'] ?>') no-repeat center; background-size: cover"></div>
        <div class="contenu text">
            <a href="<?= $article['lien'] ?>" class="lien-cliquable">
                <i class="<?= $article['icon'] ?>"></i>
                <h3><?= $article['titre'] ?></h3>
                <p><?= $article['soustitre'] ?></p>
            </a>
        </div>
    </article>
    <?php endforeach; ?>


</div>