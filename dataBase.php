<?php 
try
{
	// On se connecte à MySQL
	$pdo = new PDO('mysql:host=localhost;dbname=bdo;charset=utf8;port=3307', 'root', 'root');
}
catch(Exception $e)
{
	
        die('Erreur : '.$e->getMessage());
}

?>


