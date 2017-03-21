<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRESCRIMOUV</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/portfolio-item.css" rel="stylesheet">
	<link rel="stylesheet" href="../../CSS/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script type="text/javascript" src="../../js/functions.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	 <?php 
	
	
		//Cette fonction doit être appelée avant tout code html
		session_start();

		//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
		include("../../BDD/variableSession.php");
		include("../../BDD/connexionBDD.php");
		
		?>

</head>

<body>

    <?php include("../header.php"); ?> 

    <!-- Page Content -->
    <div class="container">
	<?php 
		$idCoordinateur = $_GET['idCoordinateur']; 
	?>

        <!-------------------------- Container --------------------------------->

        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					
					<?php echo'<center><legend> <a href="ListeCoordinateur.php" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a><a href="ModifCoordinateur.php?idCoordinateur='.$idCoordinateur.'" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-pencil"></span></a>Coordinateur n°'.$idCoordinateur.'</center></legend>'; ?>
					</br>
					<div id="afficherInfosPatient">
					<center>
					<?php
								// REQUETE COORDINATEUR
								$query=$bdd->prepare('SELECT id_coordinateur, nom_coordinateur, prenom_coordinateur, email_coordinateur, tel_coordinateur, pswd FROM coordinateur WHERE id_coordinateur = :idCoordinateur');
								$query->bindValue(':idCoordinateur',$idCoordinateur, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomCoordinateur = $data['nom_coordinateur'];
								$prenomCoordinateur = $data['prenom_coordinateur'];
								$mailCoordinateur = $data['email_coordinateur'];
								$telCoordinateur = $data['tel_coordinateur'];
								$pswd = $data['pswd'];
								
								$query->CloseCursor();
					?>
							  
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Informations Coordinateur </h3> 
							<form class="form-horizontal">
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="nom">Nom</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="nom" name="nom" value="'.$nomCoordinateur.'" class="form-control input-md" required="" disabled="disabled" type="text">';
												?>
											</div>
										</div>
									</td>
								</tr>
								<table class="table">
									<tr>
										<td>
											<div class="form-group">
												<label class="col-md-3 control-label" for="prenom">Prénom</label>  
												<div class="col-md-5">
													<?php
														echo'<input id="prenom" name="prenom" value="'.$prenomCoordinateur.'" class="form-control input-md" disabled="disabled" required="" type="text">';
													?>
												</div>
											</div>
										</td>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="email">Email</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="email" name="email" value="'.$mailCoordinateur.'" class="form-control input-md" required="" disabled="disabled" type="text">';
												?>
									
											</div>
										</div>
									</td>
								</tr>
								
								<table class="table">								
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="tel">Téléphone </label>  
											<div class="col-md-3">
												<?php
													echo'<input id="tel" name="tel" value="'.$telCoordinateur.'" class="form-control input-md" disabled="disabled" type="number">';
												?>
									
											</div>
										</div>
									</td>
								</tr>
								
								<table class="table">								
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="password">Mot de passe</label>  
											<div class="col-md-5">
												<?php
													echo' <input id="password" name="password" value="'.$pswd.'" class="form-control input-md" disabled="disabled" type="tel">';
												?>
									
											</div>
										</div>
									</td>
								</tr>
							</table>
					</center>
				</fieldset>
			</div>
		</div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); 
		?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
	<script src="../../js/functions.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
