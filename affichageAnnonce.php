<?php require 'sessionConfirmation.php';?>
<?php require 'dataBase.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">
<?php  $reponse = $pdo->query('SELECT * FROM annonce ');
       
 
 while ($donnees = $reponse->fetch())
{
?>
<b>Annonce N°  </b> <?= $donnees['id_annonce']. ' : ' ?> <?= $donnees['titre'] ?>
 <br> 
    
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête


$nombre = $pdo->query('SELECT COUNT(id_annonce) AS nombre_total FROM annonce '); //requete SQL
$nombre_total = $nombre->fetch() ; //lecture de la requette
echo "Nombre d'annonce total est :". $nombre_total['nombre_total']  ;//Affichage de la requette

$nombre->closeCursor () ; // Terminer le traitement de la requette

?>
<br>
<?php require 'retour.php' ; ?>

	