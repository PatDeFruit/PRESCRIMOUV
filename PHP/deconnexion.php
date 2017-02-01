<?php
	session_start();
	session_destroy();

	include("../BDD/variableSession.php");
	
						echo '<p> id de connexion : '.$id.' </p>';
						echo '<p> mail de connexion : '.$email_coordinateur.' </p>';
		
	
	if ($id==0) erreur(ERR_IS_CO);
	else{
		echo '<p>Vous êtes à présent déconnecté <br />
		Cliquez <a href="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'">ici</a> 
		pour revenir à la page précédente.<br />';
		}
?>
