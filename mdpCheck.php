<?php require 'sessionConfirmation.php';?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <?= "Votre mot de Passe est: ". "<b>".$_SESSION["mdp"]."</b>"  ; ?>
    <br>
    <br>
    <a href="http://localhost/TD_PHP_PDO/acceuil.php" class="btn btn-primary btn-lg">retour à l'acceuil</a>
    
    <a href="http://localhost/TD_PHP_PDO/deconexion.php" class="btn btn-danger btn-lg">Deconnexion</a>
</div>
