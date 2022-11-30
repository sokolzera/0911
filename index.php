<?php

use Steampixel\Route;

require_once ('config.php');
require_once('class/user.class.php');

Route::add('/login' , function() {
    global $twig;
    $twig->display('login.html.twig');
});

Route::add('/login' , function() {
    global $twig;
    if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
        //jeżeli już podano dane do logowania
        
        $user = new User($_REQUEST['login'], $_REQUEST['password']);
        if($user->login()) {
            $_SESSION['authorized'] = true ;
        
            $v = array(
                'message' => "Zalogowano poprawnie użytkownika: ".$user->getName(),
            );
            $twig->display('message.html.twig', $v);
        } else {
            //echo "Błędny login lub hasło";
            $twig->display('message.html.twig', 
                                ['message' => "Błędny login lub hasło"]);
        }
    } else {
        //jeśli jeszcze nie podano danych
        //wyświetl formularz logowania
        $twig->display('login.html.twig');
    }
},  'post');
  
    

Route::run('/loginform');

?>