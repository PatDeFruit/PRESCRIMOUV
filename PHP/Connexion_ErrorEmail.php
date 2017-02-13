<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRESCRIMOUV</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/portfolio-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	 <?php 
	
	
		//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../BDD/variableSession.php");
		include("../BDD/connexionBDD.php");
		include("./header_connexion.php"); 
	?> 

    <!-- Page Content -->
	<div class="container">

        <!-------------------------- Container --------------------------------->
			
			
						
			<?php
				if (!isset($_POST['email_coordinateur'])) //On est dans la page de formulaire
				{
					echo '
					<fieldset id="connexion">
						<center>
							<legend id="legendCo"> Connexion </legend>
							<form method="post" action="../index.php">
								<p>
									<label for="email_coordinateur"> Adresse mail :</label> &nbsp <input name="email_coordinateur" type="text" id="email_coordinateur" autofocus placeholder="Adresse mail" size="20" /><br />
								</p>
								</p>
									<label for="pswd"> Mot de passe :</label><input type="password" name="pswd" id="pswd" size="20" />
								</p>
								<input type="submit" value="Connexion" /></p>
							</form>
							<BR/>
							<font color ="red"> <b> Adresse mail ou mot de passe non renseigné ! </b> </font>
						</center>
					</fieldset>
					<p>
					';
				}
				else
				{
					$message='';
					if (empty($_POST['email_coordinateur']) || empty($_POST['pswd']) ) //Oublie d'un champ
					{
						header('Location: http://localhost/prescrimouv/PHP/Connexion_ErrorEmail.php');
					}
					else //On check le mot de passe
					{
						$query=$bdd->prepare('SELECT email_coordinateur, pswd, nom_coordinateur, prenom_coordinateur FROM coordinateur WHERE email_coordinateur = :email_coordinateur');
						$query->bindValue(':email_coordinateur',$_POST['email_coordinateur'], PDO::PARAM_STR);
						$query->execute();
						$data=$query->fetch();
			
						if ($data['pswd'] == $_POST['pswd']) // Acces OK !
						{
							$_SESSION['email_coordinateur'] = $data['email_coordinateur'];
							$_SESSION['nom_coordinateur'] = $data['nom_coordinateur'];
							$_SESSION['prenom_coordinateur'] = $data['prenom_coordinateur'];
							header('Location: http://localhost/prescrimouv/PHP/Accueil.php');
							
						}
						else // Acces pas OK !
						{
							header('Location: http://localhost/prescrimouv/PHP/Connexion_ErrorBDD.php');		
						}
						$query->CloseCursor();
					}

				echo $message;
					
				}
			?>
					
        
        <!-------------------------- /Container --------------------------------->

        
    <?php include("../PHP/footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
