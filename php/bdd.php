<?php
session_start();
class MyDatabase
{
    private $pdo;
    public $queryStr;
    public $exist;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=internenet', 'mzenati', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function checkEmailExistence($mail)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$mail]);
        $user = $stmt->fetch();
        return ($user) ? true : false;
    }

    public function add_user_to_db($prenom, $nom, $naissance, $genre, $ville, $mail, $mdp)
    {
        if (!$this->checkEmailExistence($mail)) {
            $this->queryStr = "insert into users (lastname, firstname, dob, genre, ville, email, password) values ('$nom', '$prenom', '$naissance', '$genre', '$ville', '$mail', SHA2('$mdp', 256));";
            $queryStr = $this->queryStr;
            $sql = $this->getPDO()->prepare($queryStr);
            $sql->execute();
        } else {
            echo "<script> ShowMessage(); </script>";
        }
    }

    public function do_user_exists($mail, $mdp)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email='$mail' AND password=SHA2('$mdp', 256)");
        $stmt->execute();
        $exist = $stmt->fetch();
        return ($exist) ? true : false;
    }
    public function hoplarecup($mail)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email='$mail'");
        $stmt->execute();
        $this->exist = $stmt->fetch();
    }
    public function test($mail, $mdp)
    {
        if ($this->do_user_exists($mail, $mdp) == true) {
            echo "<script> ShowMessagex(); </script>";
        } elseif ($this->do_user_exists($mail, $mdp) == false) {
            echo "<script> ShowMessagey(); </script>";
        }
    }
    public function update($prenom, $nom, $naissance, $genre, $ville, $mail, $mdp, $id){
        $stmt = $this->pdo->prepare("UPDATE users
        SET lastname='$nom', firstname='$prenom', dob='$naissance', genre='$genre', ville='$ville', email='$mail', password=SHA2('$mdp', 256)
        WHERE id = '$id';");
        $stmt->execute();
    }
    
}
