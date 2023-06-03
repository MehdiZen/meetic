<?php
require('bdd.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/inscrip.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <title>Internenet</title>
</head>

<body>
    <header>
        <h1 id="titel">L'internenet...</h1>
    </header>
    <main>
        <div class="connexion">
            <p>Par les beaufs, pour les beaufs...</p>
            <div class="co" id="co">
                <h3>Déjà inscrit?<br>Connectez-vous</h3>
                <form action="" method="post">
                    <label for="mail"> ID(mail) : </label>
                    <div>
                        <input id="mail" type="text" name="mail" placeholder="Entrez votre mail" required></input>
                    </div>
                    <div>
                        <label for="pass"> Mot de passe : </label>
                    </div>
                    <div>
                        <input type="password" id="pass" name="password" minlength="8" placeholder="8 characteres minimum" required>
                    </div>
                    <input type="submit" id="ok" name="validation" value="Se connecter" />
                </form>
                <a href="inscrip.php" id="connexion">Je n'ai pas de compte</a>
            </div>
        </div>
    </main>
</body>
<script src="../javascript/script.js"></script>

</html>
<?php
if (isset($_POST["mail"])) {
    $mail = $_POST['mail'];
    $_SESSION["mail"]=$mail;
    $mdp = $_POST['password'];
    $franky = new MyDatabase;
    $franky->test($mail, $mdp);
}
?>