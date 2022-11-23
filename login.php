<?php
require_once('config.php');

        if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
            $db = new mysqli('localhost', 'root', '', 'loginForm');
            $user = new User($_REQUEST['login'], $_REQUEST['password']);
            $user->login();
            if($user->isAuth()) {
                echo "Zalogowano poprawnie";
            } else {
                echo "Błąd logowania";
            }
        } else {
            $twig->display("login.html.twig");
        }
    ?>
   