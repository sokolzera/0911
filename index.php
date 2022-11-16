<?php
require('class/user.class.php');
$db = new mysqli('localhost', 'root', '', 'loginForm');
$user = new User("dowalski","taj3neHasło");
$user->login();
if($user->isAuth()) {
    echo "Użytkownik zalogowany poprawnie";
} else {
    echo "Błąd logowania";
}


?>