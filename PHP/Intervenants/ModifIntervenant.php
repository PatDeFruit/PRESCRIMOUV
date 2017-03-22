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
					
					<?php echo'<center><legend><a href="#" onClick="confirmFunction()" style="color: white; margin-right: 50px;"><span class="glyphicon glyphicon-arrow-left"></span></a> Intervenant  n°'.$idIntervenant.' </center></legend>'; ?>
					<script>
						function confirmFunction() {
							var txt;
							var r = confirm("Êtes-vous sûr ?");
							if (r == true) {
								txt = "OK!";
								window.location.assign("ListeIntervenant.php");
							} else {
								txt = "Annuler!";
							}
							document.getElementById("demo").innerHTML = txt;
						}

						</script>
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

							

					<div id="afficherInfosPatient">
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
											<label class="col-md-4 control-label" for="nom">Nom <span style="color: red">*</span></label>  
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
											<label class="col-md-4 control-label" for="prenom">Prenom <span style="color: red">*</span></label>  
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
											<label class="col-md-4 control-label" for="email">Email <span style="color: red">*</span></label>  
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
											<label class="col-md-4 control-label" for="tel">Telephone <span style="color: red">*</span></label>  
											<div class="col-md-5">
												<?php
													echo '<input id="tel" name="tel" value="'.$telIntervenant.'" class="form-control input-md"  required=" " type="text" maxlength="10">';
												?>
									
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
										<div class="form-group">
											<label class="col-md-4 control-label" for="diplome2">Diplôme<span style="color: red">*</span></label>  
											<div class="col-md-5">
												<select name="diplome2" id="diplome2" class="form-control"  required="" >
												<?php
													$query=$bdd->prepare('SELECT id_intervenant, id_diplome, nom_diplome FROM diplomes JOIN intervenants USING(id_intervenant) WHERE id_intervenant = "'.$idIntervenant.'"');
													$query->execute();
													$data = $query->fetch();
													$idDiplome = $data['id_diplome'];
													$query->CloseCursor();
													 
													$query=$bdd->prepare('SELECT id_diplome, nom_diplome FROM diplomes');
													$query->execute();
													while($data = $query->fetch()){
													 echo'<option value="'.$data['id_diplome'].'" ';
													 if($data['id_diplome'] == $idDiplome){
														 echo 'selected = "selected"';
													 }
													 echo'>'.$data['nom_diplome'].'</option>';
													}
													$query->CloseCursor();
												 
												  ?>
											</select>	
									
											</div>
										</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="cartePro">Carte professionnelle <span style="color: red">*</span></label>  
								  <div class="col-md-6">
								  <select name="cartePro" id="cartePro" class="form-control">
								  <?php
													$query=$bdd->prepare('SELECT id_intervenant, cartePro FROM intervenants WHERE id_intervenant = "'.$idIntervenant.'"');
													$query->execute();
													$data = $query->fetch();
													$cartePro = $data['cartePro'];
													$query->CloseCursor();
													
												?>
											<?php
											 echo'<option value="1" ';
											 if($cartePro == 1){
												 echo 'selected = "selected"';
											 }
											 echo' >Oui</option>';
											 echo'<option value="0" ';
											 if($cartePro == 0){
												 echo 'selected = "selected"';
											 }
											 echo'>Non</option>';
										 
										  ?>
									</select>		
										
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
