<?php 
require 'views/controller/database.php';
session_start();

//var_dump($_GET);

$content = ob_start();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

if($p === 'home'){
    require 'views/post/home.php';
    $content = ob_get_clean();
    require 'views/template/default.php';
}
elseif($p === 'portfolio'){
    require 'views/post/portfolio.php';
    $content = ob_get_clean();
    require 'views/template/default.php';
}
elseif($p === 'cv'){
    require  'views/post/cv.php';
    $content = ob_get_clean();
    require 'views/template/default.php';
}
elseif($p === 'contact'){
    require  'views/post/contact.php';
    $content = ob_get_clean();
    require 'views/template/default.php';
}
elseif($p === 'admin' && !empty($_SESSION['username'])){
    require 'views/admin/admin.php';
    $content = ob_get_clean();
    require 'views/template/default-admin.php';
}
elseif($p === 'portfolio-admin' && !empty($_SESSION['username'])){
    require 'views/admin/portfolio-admin.php';
    $content = ob_get_clean();
    require 'views/template/default-admin.php';
}
elseif($p === 'cv-admin' && !empty($_SESSION['username'])){
    require 'views/admin/cv-admin.php';
    $content = ob_get_clean();
    require 'views/template/default-admin.php';
}
elseif($p === 'contact-admin' && !empty($_SESSION['username'])){
    require 'views/admin/contact-admin.php';
    $content = ob_get_clean();
    require 'views/template/default-admin.php';
}
elseif($p === 'connection-admin') {
    require 'views/admin/connection-admin.php';
    $content = ob_get_clean();
    require 'views/template/default-admin.php';
}
elseif($p === 'deconnexion') {
    session_destroy();
    $content = ob_get_clean();
    header('Location: home');
}
else{
    require 'views/post/home.php';
    $content = ob_get_clean();
    require 'views/template/default.php';
}