<?php

class user
{
    public $id;
    private $login;

    function __construct()
    {
    }


    private function connectdb()
    {
        return new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
    }

    public function register($login, $password)
    {
        $db = $this->connectdb();

        $msg = '';
        $login = htmlspecialchars(trim($login));
        $password = htmlspecialchars(trim($password));
        $cryptedpass = password_hash($password, PASSWORD_BCRYPT);
        $sth = $db->prepare("SELECT id FROM utilisateurs WHERE login = :login");
        $sth->bindParam(":login", $login, PDO::PARAM_STR, 255);
        $sth->execute();
        $checklogin = $sth->rowCount();
        if ($checklogin == 0) {
            if (strlen($login) > 4) {
                $sth->execute();
                if (strlen($password) > 5) {
                    $sth = $db->prepare("INSERT INTO utilisateurs (login, password) VALUES ('$login', '$cryptedpass')");
                    $sth->execute();
                    $this->login = $login;
                    $this->password = $password;
                    $msg = "";
                    // return $msg;
                } else {
                    $msg = "le mot de pass doit contenir 6 caractères";
                    // return $msg;
                }
            } else {
                $msg = " le login doit contenir 5 caractères";
                // return $msg;
            }
        } else {
            $msg = "login non disponible";
            // return $msg;
        }

        return $msg;
    }

    public function connect($login, $password)
    {
        $db = $this->connectdb();
        $msg = '';
        $login = htmlspecialchars(trim($login));
        $password = htmlspecialchars(trim($password));

        $query = $db->prepare("SELECT id FROM utilisateurs WHERE login = '$login'");
        $query->execute();
        $checklogin = $query->rowCount();
        if ($checklogin) {
            $query = $db->prepare("SELECT password FROM utilisateurs WHERE login = '$login'");
            $query->execute();
            $results = $query->fetch(PDO::FETCH_OBJ);
            $hashedpassword = $results->password;
            if (password_verify($password, $hashedpassword)) {
                $query = $db->prepare("SELECT id, login FROM utilisateurs WHERE login = '$login'");
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);
                $this->id = (int)$result->id;
                $this->login = $result->login;
                return $msg;
            } else {
                $msg = 'mot de passe incorrect';
                return $msg;
            }
        } else {
            $msg = 'login incorrect';
            return $msg;
        }
    }
    public function update($login, $password)
    {
        $db = $this->connectdb();
        // 1 je recupere le user concerné
        $msg = '';
        $login = htmlspecialchars(trim($login));
        $password = htmlspecialchars(trim($password));
        $cryptedpass = password_hash($password, PASSWORD_BCRYPT);
        // on vérifie que le nouveau login est disponible
        $sth = $db->prepare("SELECT id FROM utilisateurs WHERE login = :login");
        $sth->bindParam(":login", $login, PDO::PARAM_STR, 255);
        $sth->execute();
        $checklogin = $sth->rowCount();
        // si il est libre
        if ($checklogin == 0) {
            if (strlen($login) > 4) {
                $sth->execute();
                if (strlen($password) > 5) {
                    $id = $_SESSION['user']['id'];

                    $sth = $db->prepare("UPDATE utilisateurs set login = :login, password = :password where id = :id");
                    $sth->bindParam(":login", $login, PDO::PARAM_STR, 255);
                    $sth->bindParam(":password", $password, PDO::PARAM_STR, 255);
                    $sth->bindParam(":id", $id, PDO::PARAM_INT);
                    $sth->execute();
                    $this->login = $login;
                    $this->password = $password;
                    $msg = "";
                } else {
                    $msg = "le mot de pass doit contenir 6 caractères";
                    // return $msg;
                }
            } else {
                $msg = " le login doit contenir 5 caractères";
                // return $msg;
            }
        } else {
            $msg = "login non disponible";
            // return $msg;
        }

        return $msg;
    }


    public function getLogin()
    {
        return $this->login;
    }

    public function getId()
    {
        return $this->id;
    }
}
