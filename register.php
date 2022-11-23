
    <?php 
        if(isset($_REQUEST['login']) && isset($_REQUEST['password']) &&
            isset($_REQUEST['firstName']) && isset($_REQUEST['lastName'])) {
            $db = new mysqli('localhost', 'root', '', 'loginForm');
            require('./../class/User.class.php');
            $user = new User($_REQUEST['login'], $_REQUEST['password']);
            $user->register();
           
        }
    ?>
    