<?php
// Sous WAMP (Windows)
 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=prescrimouv;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>