<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Administration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="views/css/app.css">
    <link rel="stylesheet" href="views/css/burger.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

</head>
<body>
<header>
    <div id="computer-header-admin">
        <nav>
            <a href="portfolio-admin" class="menu-ordi underline">PORTFOLIO</a>
            <a href="cv-admin" class="menu-ordi underline">CV</a>
            <a href="contact-admin" class="menu-ordi underline">MESSAGES</a>
        </nav>
    </div>
</header>
<main>
    <!--PHP INCLUDE CONTENU-->
    <?= $content; ?>
</main>
<footer>
    <nav id="reseaux">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-twitter-square"></i></a>
        <a href="#"><i class="fab fa-google-plus-square"></i></a>
    </nav>
    <p>&copy;Copyright - 2018 - <a href="home">Claire Erhard</a> -
        <?php if(!empty($_SESSION['username'])){
            echo "<a href=\"deconnexion\"><i class=\"fa fa-unlock\"></i>";
        }else{
            echo "<a href=\"connection-admin\"><i class=\"fa fa-lock\"></i>";
        }
        ?>
</footer>
<script src="views/js/chart.js"></script>


</body>
</html>