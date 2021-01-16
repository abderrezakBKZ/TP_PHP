<?php require 'sessionConfirmation.php' ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">




<div class="container">
    <?php
    // $_SESSION['connect'] = false;
    echo'Bonjour '. $_SESSION['user'];
    ?>
   
    <br>
    <?php require 'retour.php'; ?>
    <br>


    <?php if (isset($_GET['message'])) : ?>
        <div class="alert alert-success" role="alert">
        ajoute d'un categorie reussi
      </div>
   <?php endif ?>
   <i class="bi bi-download"></i>
</div>






