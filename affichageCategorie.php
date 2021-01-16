<?php require 'sessionConfirmation.php';?>
<?php require 'dataBase.php'; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class="container">
<?php  $reponse = $pdo->query('SELECT * FROM categorie ');
       
 
 while ($donnees = $reponse->fetch())
{
    
?>
<b>categorie N°  </b> <?= $donnees['id_categorie']. ' : ' ?> <?= $donnees['nom'] ?>
  
 <a href="http://localhost/TD_PHP_PDO/supprimerCategorie.php?id=<?= $donnees['id_categorie']?>" class="btn btn-primary btn-sm">supprimer</a>

<br>
<?php } 

$reponse->closeCursor(); // Termine le traitement de la requête


$nombre = $pdo->query('SELECT COUNT(id_categorie) AS nombre_total FROM categorie '); //requete SQL
$nombre_total = $nombre->fetch() ; //lecture de la requette
echo "Nombre de categorie total est :". $nombre_total['nombre_total']  ;//Affichage de la requette

$nombre->closeCursor () ; // Terminer le traitement de la requette

?>
<br>
<?php require 'retour.php' ; ?>
