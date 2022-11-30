<?php

use Steampixel\Route;

require_once ('config.php');
require_once('class/user.class.php');

Route::add('/' , function() {
    echo "Strona główna";
});

Route::add('/login' , function() {
    echo "Strona logowania";
});

Route::run('/loginform');

?>