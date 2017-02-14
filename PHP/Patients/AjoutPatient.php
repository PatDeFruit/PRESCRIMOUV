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

        <!-------------------------- Container --------------------------------->
		
        <div id="conteneurPrincipale">
		<div id="conteneurTotal">
				<fieldset id="conteneurInterieur">
					<?php echo'<center><legend> Ajouter un patient </center></legend>'; ?>
					
					</br>
					<center>
			<div id="infoPatient" >
			<div id="afficherInfosPatient">
			<div class="row">
			<div class="tab-content">
			<div id="infoPatient" >
								<form class="form-horizontal" method="post" action="TraitementAjout.php" >
								<fieldset>
								<input type="hidden" name="idFormulaire" value="form-info">		
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="numSS">Numéro SS</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="numSS" name="numSS" value="" class="form-control input-md"   type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="firstname">Nom</label>  
								  <div class="col-md-5">
								  <?php
									echo '<input id="firstname" name="firstname" value="" class="form-control input-md" required=""   type="text">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="lastname">Prénom</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="lastname" name="lastname" value="" class="form-control input-md"   required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="birthdate">Date de naissance</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="birthdate" name="birthdate" value="" class="form-control input-md"   required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="sexe">Sexe</label>  
								  <div class="col-md-4">
								  <select name="idSexe" id="idSexe" class="form-control">
											<?php
											 echo'<option value="1">Femme</option>';
											 echo'<option value="0">Homme</option>';
										 
										  ?>
										</select>		
										
								</div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="street">Adresse</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="street" name="street" value="" class="form-control input-md"   type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="city">Code postal</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="city" name="city" value="" class="form-control input-md"   type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
		
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="state">Ville</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="state" name="state" value="" class="form-control input-md"   type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="phone">Téléphone</label>  
								  <div class="col-md-5">
								 <?php
								  echo' <input id="phone" name="phone" value="" class="form-control input-md"   type="tel">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
							
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="email">Email</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="email" name="email" value="" class="form-control input-md"   required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="situFamil">Situation familiale</label>  
								  <div class="col-md-2">
								  <select name="idSitu" id="idSitu" class="form-control">
											<?php
											 echo'<option value="0">Célibataire</option>';
											 echo'<option value="1">En couple</option>';
											  echo'<option value="2">Marié(e)</option>';
											 echo'<option value="3">Divorcé(e)</option>';
											  echo'<option value="4">Veuf(ve)</option>';
										 
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
								  <label class="col-md-2 control-label" for="nbEnfant">Nombre d'enfants</label>  
								  <div class="col-md-2">
								  <?php
								  echo'<input id="nbEnfant" name="nbEnfant" value="" class="form-control input-md"   type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="profession">Profession</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="profession" name="profession" value="" class="form-control input-md"  type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">			
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="med">Médecin prescripteur</span></a></label>  
								  <div class="col-md-5">
										 <select name="idMed" id="idMed" class="form-control">
										
										  <?php 
										  $query=$bdd->prepare('SELECT nom_medecin, id_medecin FROM medecins');
										$query->execute();
										while($data = $query->fetch()){
											 echo'<option value="'.$data['id_medecin'].'">'.$data['nom_medecin'].'</option>';
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
								  <label class="col-md-2 control-label" for="datePre">Date de prescription</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="datePre" name="datePre" value="" class="form-control input-md"   required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="mut">Mutuelle</span></a></label>  
								  <div class="col-md-5">
										 <select name="idMut" id="idMut" class="form-control">
										
										  <?php 
										  $query=$bdd->prepare('SELECT id_mutuelle, nom_mutuelle FROM mutuelles');
										$query->execute();
										while($data = $query->fetch()){
											 echo'<option value="'.$data['id_mutuelle'].'">'.$data['nom_mutuelle'].'</option>';
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
								  <label class="col-md-2 control-label" for="numAffiliation">Numéro Affiliation</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="numAffiliation" name="numAffiliation" value="" class="form-control input-md"   type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								</tr>
						
								</table>
								</fieldset>
								<?php
								echo'<input type="submit" value="Ajouter" name="valid-info" class=\'btn btn-success btn-xs\' ">';
								?>
								</br>
								</br>
								</form>

							   </div>
							   </div>
							   </div>
							   </div>
							   </div>
				   </div>
				   </div>
		</div>
		
        <!-------------------------- /Container --------------------------------->
	
    <?php include("../footer.php"); ?> 
    </div>
    <!-- /content -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
