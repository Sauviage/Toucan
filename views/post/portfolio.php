<?php
$reponse = $bdd->query('SELECT * FROM projets');

$articles = $reponse->fetchAll();

?>
<h1>PORTFOLIO</h1>
<div id="nav-page-portfolio">
    <?php foreach ($articles as $article) :?>
     <article class="nav-option-portfolio">
        <div class="filtre-bleu" style="
        background: linear-gradient(
                  rgba(190, 30, 45, 0.75),
                  rgba(243, 191, 191, 0.75)
  ),url('<?= $article['img'] ?>') no-repeat center; background-size: cover"></div>
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