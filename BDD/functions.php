<?php
function erreur($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="../index.php">ici</a> pour revenir à la page d\'accueil</p>');
}

function erreur2($err='')
{
   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
   exit('<p>'.$mess.'</p>
   <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p>');
}

function msg_connexion_ERROR($msg='')
{
   $mess=($msg!='')? $msg: '';
   exit('<center><div class="alert alert-danger" role="alert"'.$mess.'
			<p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></center>');
}

function msg_connexion_WARNING($msg='')
{
   $mess=($msg!='')? $msg: '';
   exit('<center><div class="alert alert-warning" role="alert"> '.$mess.'
						<p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></center>');
}

function msg_connexion_INFO($msg='')
{
   $mess=($msg!='')? $msg: '';
   exit('<center><div class="alert alert-success" role="alert">'.$mess.'
						<p>Cliquez <a href="PHP/Accueil.php">ici</a> pour aller à la page suivante</p></div></center>');
}
?>