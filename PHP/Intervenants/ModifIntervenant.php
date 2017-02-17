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

    <div class="container">
	<?php 
		$idIntervenant = $_GET['idIntervenant']; 
	?>

        <!-------------------------- Container --------------------------------->
		

		
		
        <div id="conteneurPrincipale">
			<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<?php echo'<center><legend> Intervenant  n°'.$idIntervenant.' </center></legend>'; ?>
					
					</br>
					<center>
					<?php
								// REQUETE INTERVENANT
								$query=$bdd->prepare('SELECT id_intervenant, nom_intervenant, prenom_intervenant, email_intervenant, tel_intervenant FROM intervenants');
								$query->bindValue(':idIntervenant',$idIntervenant, PDO::PARAM_STR);
								$query->execute();
								$data = $query->fetch();
								
								$nomIntervenant = $data['nom_intervenant'];
								$prenomIntervenant = $data['prenom_intervenant'];
								$mailIntervenant = $data['email_intervenant'];
								$telIntervenant = $data['tel_intervenant'];
								
								$query->CloseCursor();
								
					?>		
					</br>
					<center>

							

					
					<div class="tab-content">
						<div id="ficheResume" class="tab-pane fade active in">				
							<h3>Modifier Intervenant </h3> 
							
							<form method="POST" action="ModifierInt.php" class="form-horizontal">
							
							<?php
						
								echo '<input class="hidden" id="idIntervenant" name="idIntervenant" value="'.$idIntervenant.'" placeholder="" class="form-control input-md" type="text">';
							?>
								<fieldset>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="nom">Nom*</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="nom" name="nom" value="'.$nomIntervenant.'" class="form-control input-md" required=" " type="text">';
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
											<label class="col-md-4 control-label" for="prenom">Prenom*</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="prenom" name="prenom" value="'.$prenomIntervenant.'" class="form-control input-md"  required=" " type="text">';
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
											<label class="col-md-4 control-label" for="email">Email*</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="email" name="email" value="'.$mailIntervenant.'" class="form-control input-md"  required=" " type="text">';
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
											<label class="col-md-4 control-label" for="tel">Telephone*</label>  
											<div class="col-md-5">
												<?php
													echo '<input id="tel" name="tel" value="'.$telIntervenant.'" class="form-control input-md"  required=" " type="text">';
												?>
									
											</div>
										</div>
									</td>
								</tr>
								</table>
								
								<input type="submit" value="Enregistrer"  name="valid-entInitial" class="btn btn-success btn-xs">'
								<br/><br/>
							</form>	
					</center>			
				</fieldset>
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