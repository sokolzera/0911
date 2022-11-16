<?php
class User {
    private int $id;
    private string $login;
    private string $passwordHash;
    private string $firstName;
    private string $lastName;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password_hash = password_hash($password, PASSWORD_ARGON2I);
    }
    
    public function isAuth() : bool {

    }
    public function login() {
        global $db;

    }
    public function logout() {
        global $db;
    }
    public function register() {
        global $db;
    }
}
?>