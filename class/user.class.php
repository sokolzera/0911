<?php
class User {
    private $db;
    private int $id;
    private string $login;
    private string $password;
    private string $firstName;
    private string $lastName;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password_hash = password_hash($password, PASSWORD_ARGON2I);
        global $db;
        $this->db = &$db;
    }
    
    public function isAuth() : bool {
        if(isset($this->id) && $this->id !=null)
            return true;
        else
            return false;

    }
    public function login() {
        $query = "SELECT * FROM user WHERE login = ?";
        $preparedQuery = $this->db->prepare($query);
    

    }
    public function logout() {
        global $db;
    }
    public function register() {
        global $db;
    }
}
?>