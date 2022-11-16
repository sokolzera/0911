<?php
require('class/User.class.php');
$db = new mysqli('localhost', 'root', '', 'loginForm');
$user = new User("jkowalski", "tajneHasło");

?>