<?php

//Attribution des variables de session
$nom=(isset($_SESSION['nom_coordinateur']))?(int) $_SESSION['nom_coordinateur']:'';
$prenom=(isset($_SESSION['prenom_coordinateur']))?(int) $_SESSION['prenom_coordinateur']:'';
$email_coordinateur=(isset($_SESSION['email_coordinateur']))?$_SESSION['email_coordinateur']:'';

//On inclue les 2 pages restantes
include("functions.php");
include("constants.php");
?>