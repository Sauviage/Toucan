<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Claire Erhard - Web Designer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="views/css/app.css">
    <link rel="stylesheet" href="views/css/burger.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

</head>
<body>
<header>
<!--    MOBILE   -->
    <div id="mobile-header">
        <div class="logo">
            <a href="index.php">
                <img src="views/img/logofinal.png" alt="logo-toucan">
            </a>
        </div>
        <nav id="burger-menu">
            <!--VERSION INTERNET-->
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <a href="index.php?p=home"><li>HOME</li></a>
                    <a href="portfolio"><li>PORTFOLIO</li></a>
                    <a href="index.php?p=cv"><li>CV</li></a>
                    <a href="index.php?p=contact"><li>CONTACT</li></a>
                </ul>
            </div>
            <!---->
        </nav>
    </div>
<!--    ORDI   -->
    <div id="computer-header">
        <nav>
            <a href="home" class="menu-ordi underline" >HOME</a>
            <a href="portfolio" class="menu-ordi underline">PORTFOLIO</a>
            <div class="logo menu-ordi">
                <a href="index.php">
                    <img class="pulse" src="views/img/logofinal.png" alt="logo-toucan">
                </a>
            </div>
            <a href="cv" class="menu-ordi underline">CV</a>
            <a href="contact" class="menu-ordi underline">CONTACT</a>

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
        </a></p>
</footer>

</body>
</html>