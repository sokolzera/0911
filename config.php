<?php
require_once('vendor/autoload.php');
require_once('class/user.class.php');


$db = new mysqli('localhost', 'root', '', 'loginform');
$loader = new Twig\Loader\FilesystemLoader(('./templates'));
$twig = new Twig\Environment($loader);

?>
