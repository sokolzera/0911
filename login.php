<?php
require_once('config.php');

        if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
            $db = new mysqli('localhost', 'root', '', 'loginForm');
            $user = new User($_REQUEST['login'], $_REQUEST['password']);
            $user->login();
            if($user->isAuth()) {
            $message = "Zalogowano poprawnie" .$user->getName();
            } else {
                $twig->display("message.html.twig, ['message' => Błąd logowania");
            }
        } else {
            $twig->display("login.html.twig");
        }
    ?>
   