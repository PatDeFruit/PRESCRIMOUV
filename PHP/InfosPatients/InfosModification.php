<div id="infoPatient" class="tab-pane fade">
								<h3>Informations Patient </h3> 
								<form class="form-horizontal" method="post" action="TraitementPatient.php" >
								<fieldset>
								<input type="hidden" name="idFormulaire" value="form-info">		
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md hidden"  type="text">';
									?>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="numSS">Numéro SS</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="numSS" name="numSS" value="'.$numSecu.'" class="form-control input-md"   type="number">';
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
									echo '<input id="firstname" name="firstname" value="'.$nomPatient.'" class="form-control input-md" required=""   type="text">';
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
								  echo'<input id="lastname" name="lastname" value="'.$prenomPatient.'" class="form-control input-md"   required="" type="text">';
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
								  echo'<input id="birthdate" name="birthdate" value="'.$dateNPatient.'" class="form-control input-md"   required="" type="date">';
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
											 echo'<option value="1" ';
											 if($sexePatient == 1){
												 echo 'selected = "selected"';
											 }
											 echo'>Femme</option>';
											 echo'<option value="0" ';
											 if($sexePatient == 0){
												 echo 'selected = "selected"';
											 }
											 echo'>Homme</option>';
										 
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
								  echo'<input id="street" name="street" value="'.$adressePatient.'" class="form-control input-md"   type="text">';
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
								  echo'<input id="city" name="city" value="'.$cpPatient.'" class="form-control input-md"   type="number">';
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
								  echo'<input id="state" name="state" value="'.$villePatient.'" class="form-control input-md"   type="text">';
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
								  echo' <input id="phone" name="phone" value="'.$telPatient.'" class="form-control input-md"   type="tel">';
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
								  echo'<input id="email" name="email" value="'.$mailPatient.'" class="form-control input-md"   required="" type="email">';
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
											 echo'<option value="0" ';
											 if($situationPatient == 0){
												 echo 'selected = "selected"';
											 }
											 echo'>Célibataire</option>';
											 echo'<option value="1" ';
											 if($situationPatient == 1){
												 echo 'selected = "selected"';
											 }
											 echo'>En couple</option>';
											  echo'<option value="2" ';
											 if($situationPatient == 2){
												 echo 'selected = "selected"';
											 }
											 echo'>Marié(e)</option>';
											 echo'<option value="3" ';
											 if($situationPatient == 3){
												 echo 'selected = "selected"';
											 }
											 echo'>Divorcé(e)</option>';
											  echo'<option value="4" ';
											 if($situationPatient == 4){
												 echo 'selected = "selected"';
											 }
											 echo'>Veuf(ve)</option>';
										 
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
								  echo'<input id="nbEnfant" name="nbEnfant" value="'.$enfantPatient.'" class="form-control input-md"   type="number">';
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
								  echo'<input id="profession" name="profession" value="'.$profPatient.'" class="form-control input-md"  type="text">';
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
								  <label class="col-md-2 control-label" for="med">Médecin prescripteur   <a href="#"><span class="glyphicon glyphicon-eye-open"></span></a></label>  
								  <div class="col-md-5">
										 <select name="idMed" id="idMed" class="form-control">
										
										  <?php 
										  $query=$bdd->prepare('SELECT nom_medecin, id_medecin FROM medecins');
										$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
										$query->execute();
										while($data = $query->fetch()){
											 echo'<option value="'.$data['id_medecin'].'" ';
											 if($data['id_medecin'] == $idMedecin){
												 echo 'selected = "selected"';
											 }
											 echo'>'.$data['nom_medecin'].'</option>';
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
								  echo'<input id="datePre" name="datePre" value="'.$datePrescription.'" class="form-control input-md"   required="" type="date">';
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
											 echo'<option value="'.$data['id_mutuelle'].'" ';
											 if($data['id_mutuelle'] == $idMutuelle){
												 echo 'selected = "selected"';
											 }
											 echo'>'.$data['nom_mutuelle'].'</option>';
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
								  echo'<input id="numAffiliation" name="numAffiliation" value="'.$numAffiliation.'" class="form-control input-md"  type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								</tr>
								
						
								</table>
								</fieldset>
								<?php
								echo'<input type="submit" value="Enregistrer les changements" name="valid-info" class=\'btn btn-success btn-xs\' ">';
								?>
								</br>
								</br>
								</form>

							   </div>