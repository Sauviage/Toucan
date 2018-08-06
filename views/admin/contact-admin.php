<?php
$reponse = $bdd->query('SELECT * FROM messages ORDER BY id DESC');
$messages = $reponse->fetchAll();
?>
<h1>MESSAGES</h1>
<div id="nav-page-portfolio">
    <h3>Messages reçus</h3>
    <?php foreach ($messages as $message) :?>
    <div class="message bloc-admin">
        <h6><?= $message['date'] ?></h6>
        <h4><?= $message['nom'] ?></h4>
        <h5><?= $message['email'] ?></h5>
        <br>
        <h5><?= $message['sujet'] ?></h5>
        <p><?= $message['contenu'] ?></p>
        <a id="<?= $message['id'] ?>" class="delete" href="#"><i class="fa fa-window-close""></i></a>
    </div>
    <?php endforeach; ?>
</div>
<script src="views/js/ajax.js"></script>
