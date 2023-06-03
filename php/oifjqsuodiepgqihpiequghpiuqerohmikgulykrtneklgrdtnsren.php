<?php
require('bdd.php');
$mail = $_SESSION['mail'];
$frankyte = new MyDatabase;
$frankyte->hoplarecup($mail);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/chti.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <?php 
    // if(isset($frankyte->exist['lastname']) == false){
    //     echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    // }
     ?>
    <title>Internenet</title>
</head>

<body>
    <header>
        
        <h1 id="titel">L'Internenet...</h1><img src=<?php if($frankyte->exist['genre'] == "Homme"){
            echo "../assets/3_200x.webp";} else{echo "'../assets/BQMWVGuCQAEW_0k.jpg' width='250px' height='150px'";}?>>
        <ul class=horizontal>
            <li><a href="http://localhost:3000/Delivery/W-PHP-501-PAR-1-1-mymeetic-mehdi1.zenati/php/modif.php" class="active">Modifiar las informaçiones</a></li>

        </ul>
        <p><?php echo $frankyte->exist['lastname'];
        echo "     ".$frankyte->exist['firstname'];?></p>
    </header>
    <main>
        <div class=axtrix>
            <h2>benvnu a to dan ton espoce privai</h2>
            <div class="tonprofile"> voici avec qui t'as dla ptite compatibilité lo ;) allez champion</div>
            <div></div>
            <div class="image"><img src=<?php if($frankyte->exist['genre'] == "Homme"){
            echo "'../assets/BQMWVGuCQAEW_0k.jpg' width='500px' height='400px'";} else{echo "'../assets/3_200x.webp' width='500px' height='400px'";}?>>
                <p>nom prenom a xx ans et aime : </p><a href="" class="oui" id="oui">Beau comme un camion</a>
              <a href="" class="non" id="non">J'préfère ma bagnole</a>
            </div>
        </div>
    </main>
</body>
<script src="../javascript/script.js"></script>
</html>

<?php 

?>