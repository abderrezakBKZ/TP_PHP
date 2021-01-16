<?php require 'sessionConfirmation.php';?>
<?php require 'dataBase.php'; ?>


<?php 

$categorie = $_GET['categorie'] ;
$nombre = $pdo->query('SELECT COUNT(id_categorie) AS nombre_total FROM categorie '); //requete SQL
$ligne_total = $nombre->fetch() ; //lecture de la requette
$nombre_total = $ligne_total ['nombre_total'] + 1;
$nombre->closeCursor();

echo $categorie . '    ' .$nombre_total ; 

$ajout=  $pdo->prepare('INSERT INTO categorie(id_categorie, nom) VALUES(:id_categorie, :nom)');
$ajout->execute(array(
	'id_categorie' => $nombre_total,
	'nom' => $categorie
	));

// $Ajout = $pdo->query('INSERT INTO categorie VALUES ($nombre_total [\'nombre_total\'],$categorie)');





header("Location: acceuil.php?message=1");
    exit();