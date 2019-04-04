<?php

include "views/utils/utils.php";

$reponse = $bdd->query('SELECT * FROM experiences');

$experiences = $reponse->fetchAll();

$reponse = $bdd->query('SELECT * FROM diplomes ORDER BY date desc');

$diplomes = $reponse->fetchAll();

$reponse = $bdd->query('SELECT * FROM connaissances');

$connaissances = $reponse->fetchAll();

?>
<h1>Curriculum vitae</h1>
<div id="nav-page-cv">
    <article class="cv-categorie">
        <h3>Experiences :</h3>
        <ul>
            <?php foreach ($experiences as $experience) :?>
            <li><a href="<?= $experience['lien'] ?>"><?= $experience['entreprise'] ?></a> - <?= $experience['date'] ?></li>
            <?php endforeach; ?>
        </ul>
    </article>
    <article class="cv-categorie">
        <h3>Projets réalisés :</h3>
        <p>Ils sont divers et variés, vous pouvez retrouver mes réalisations en cliquant sur le portefolio dans le menu du site ou encore en cliquant sur <a href="index.php?p=portfolio"> ce livre <i class="fa fa-book"></i></a></p>
    </article>
    <article class="cv-categorie">
        <h3>Diplomes & Formations :</h3>
        <ul>
            <?php foreach ($diplomes as $diplome) :?>
            <li><a href="<?= $diplome['lien'] ?>"><?= $diplome['diplome'] ?></a> - <?= $diplome['date'] ?></li>
            <?php endforeach; ?>
        </ul>
    </article>
    <article class="cv-categorie">
        <h3>Connaissances :</h3>
        <canvas id="bar-chart-horizontal" width="800" height="300"></canvas>
    </article>
    <script src="views/js/chart.js"></script>
    <script>
    <?php
        chartJs($connaissances);
    ?>
    test.update();
    </script>




</div>