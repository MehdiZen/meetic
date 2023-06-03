<?php require('bdd.php');
@$mail = $_SESSION['mail'];
$frankyte = new MyDatabase;
$frankyte->hoplarecup($mail);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="../style/inscrip.css" rel="stylesheet" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <title>Internenet</title>
</head>

<body>
    <header>
    </header>
    <main>
        <div>
            <form action="" method="post">
                <label for="firstname"> Prenom : </label>
        </div>
        <div>
            <input id="firstname" name="firstname" type="text" value="<?php echo $frankyte->exist['firstname']; ?>"></input>
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>
        <div>
            <form action="" method="post">
                <label for="lastname"> Nom : </label>
        </div>
        <div>
            <input id="lastname" name="lastname" type="text" value="<?php echo $frankyte->exist['lastname']; ?>"></input>
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>
        <div>
            <form action="" method="post">
                <label for="bd"> Date de naissance : </label>
        </div>
        <div>
            <input id="bd" type="date" name="dob" max="2005-01-31" value="<?php echo $frankyte->exist['dob']; ?>" />
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>

        <div>
            <form action="" method="post">
                <label for="genre"> Genre : </label>
        </div>
        <div>
            <select id="genre" name="genre" type="" value="<?php echo $frankyte->exist['genre']; ?>">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>
        <div>
            <form action="" method="post">
                <label for="city"> Ville : </label>
        </div>
        <div>
            <input type="text" list="cities" name="city" id="city" value="<?php echo $frankyte->exist['ville']; ?>" />
            <datalist id="cities">
                <option value="Paris">
                <option value="Marseille">
                <option value="Lille">
                <option value="Rennes">
                <option value="Lyon">
            </datalist>
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>
        <div>
            <form action="" method="post">
                <label for="mail"> Adresse mail : </label>
        </div>
        <div>
            <input id="mail" type="mail" name="mail" value="<?php echo $frankyte->exist['email']; ?>"></input>
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>
        <div>
            <form action="" method="post">
                <label for="pass">Nouveau ou ancien password (obligatoire):</label>
        </div>
        <div>
            <input type="password" id="pass" name="password" minlength="8" value="*********" required>
            <input type="submit" id="" name="modifier" value="Modifier" />

        </div>
        </form>
    </main>
</body>
<?php 
    @$id = $frankyte->exist['id'];
    @$prenom = $_POST['firstname'];
    @$nom = $_POST['lastname'];
    @$naissance = $_POST['dob'];
    @$genre = $_POST['genre'];
    @$ville = $_POST['city'];
    @$mail = $_POST['mail'];
    @$mdp = $_POST['password'];
    @$frank = new MyDatabase;
    @$frank->update($prenom, $nom, $naissance, $genre, $ville, $mail, $mdp, $id);
    ?>