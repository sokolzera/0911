<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>

<body>
    <?php 
        if(isset($_REQUEST['login']) && isset($_REQUEST['password']) &&
            isset($_REQUEST['firstName']) && isset($_REQUEST['lastName'])) {
            $db = new mysqli('localhost', 'root', '', 'loginForm');
            require('./../class/User.class.php');
            $user = new User($_REQUEST['login'], $_REQUEST['password']);
            $user->register();
           
        }
    ?>
    <style>
        #loginForm {
            width: 50vw;
            margin: 10vh 25vw;
            
        }
        #loginForm > form > *{
            display: block;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
    <div id="loginForm">
        <form action="" method="post">
            <label for="loginID">Nazwa użytkownika:</label><br>
            <input type="text" name="login" id="loginID"><br>
            <label for="passwordID">Hasło:</label><br>
            <input type="password" name="password" id="passwordID"><br>
            <label for="firstNameID">Imię:</label><br>
            <input type="password" name="firstName" id="firstNameID"><br>
            <label for="lastNameID">Nazwisko:</label><br>
            <input type="lastName" name="lastName" id="lastNameID"><br>
            <input type="submit" value="Zarejestruj">
        </form>
    </div>
    
</body>

</html>