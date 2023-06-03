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
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <title>Internenet</title>
</head>

<body>
    <header>
        <h1 id="titel">L'internenet...<h1>
    </header>
    <main>
        <div id="oui"></div>
        <div id="non"></div>

        <div class="connexion">
            <p>Par les beaufs, pour les beaufs...</p>
            <div class="co" id="co">
                <h3>Pas encore de compte ? <br>Inscrivez-vous en deux minutes</h3>
                <form action="" method="post">
                    <div class="pimage" id="pimage"><button id=boutton>Telecharger votre photo</button></div>

                    <div>
                        <label for="firstname"> Prenom : </label>
                    </div>
                    <div>
                        <input id="firstname" name="firstname" type="text" placeholder="Entrez votre prenom" required></input>
                    </div>
                    <div>
                        <label for="lastname"> Nom : </label>
                    </div>
                    <div>
                        <input id="lastname" name="lastname" type="text" placeholder="Entrez votre nom" required></input>
                    </div>
                    <div>
                        <label for="bd"> Date de naissance : </label>
                    </div>
                    <div>
                        <input id="bd" type="date" name="dob" max="2005-01-31" required />
                    </div>

                    <div>
                        <label for="genre"> Genre : </label>
                    </div>
                    <div>
                        <select id="genre" name="genre" type="" placeholder="Selection" required>
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>
                    <div>
                        <label for="city"> Ville : </label>
                    </div>
                    <div>
                        <input type="text" list="cities" name="city" id="city" placeholder="Entrez votre ville" required />
                        <datalist id="cities">
                            <option value="Paris">
                            <option value="Marseille">
                            <option value="Lille">
                            <option value="Rennes">
                            <option value="Lyon">
                        </datalist>
                    </div>
                    <div>
                        <label for="mail"> Adresse mail : </label>
                    </div>
                    <div>
                        <input id="mail" type="mail" name="mail" placeholder="Entrez votre adresse mail" required></input>
                    </div>
                    <div>
                        <label for="pass">Password:</label>
                    </div>
                    <div>
                        <input type="password" id="pass" name="password" minlength="8" placeholder="8 characteres minimum" required>
                    </div>
                    <div>
                        <label for="hobbies">Vos hobbies</label>
                        <div class="hobbies">
                            <input type="checkbox" id="hobbies" name="car">
                            <label for="car">Bagnoles</label>
                            <input type="checkbox" id="hobbies" name="TV">
                            <label for="TV">Télé-realité</label>
                            <input type="checkbox" id="hobbies" name="tunning">
                            <label for="tunning">Tunning</label>
                            <input type="checkbox" id="hobbies" name="beer">
                            <label for="beer">Binouze</label>
                            <input type="checkbox" id="hobbies" name="race">
                            <label for="race">Courses</label>
                            <input type="checkbox" id="hobbies" name="tatoo">
                            <label for="tatoo">Tatoo</label>
                            <input type="checkbox" id="hobbies" name="workout">
                            <label for="workout">Curl biceps</label>
                        </div>
                        <input type="submit" id="ok" name="submit" value="S'inscrire" />
                </form>
                <div>
                    <a href="connex.php" id='connexion'>J'ai déjà un compte</a>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>

<script src="../javascript/script.js"></script>

</html>

<?php


if (isset($_POST["lastname"])) {
    $prenom = $_POST['firstname'];
    $nom = $_POST['lastname'];
    $naissance = $_POST['dob'];
    $genre = $_POST['genre'];
    $ville = $_POST['city'];
    $mail = $_POST['mail'];
    $mdp = $_POST['password'];
    // $hobbiecar = $_POST['car'];
    // $hobbieTV = $_POST['TV'];
    // $hobbietunning = $_POST['tunning'];
    // $hobbiebeer = $_POST['beer'];
    // $hobbierace = $_POST['race'];
    // $hobbietatoo = $_POST['tatoo'];
    // $hobbieworkout = $_POST['workout'];
    $frank = new MyDatabase;
    $frank->add_user_to_db($prenom, $nom, $naissance, $genre, $ville, $mail, $mdp);
}
?>