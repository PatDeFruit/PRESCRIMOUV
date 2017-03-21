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
								  <label class="col-md-4 control-label" for="numSS">Numéro SS <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="numSS" name="numSS" value="'.$numSecu.'" class="form-control input-md"  required=""   type="number" maxlength="15">';
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
								  <label class="col-md-4 control-label" for="firstname">Nom <span style="color: red">*</span></label>  
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
								  <label class="col-md-4 control-label" for="lastname">Prénom <span style="color: red">*</span></label>  
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
								  <label class="col-md-4 control-label" for="birthdate">Date de naissance <span style="color: red">*</span></label>  
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
								  <label class="col-md-4 control-label" for="sexe">Sexe <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <select name="idSexe" id="idSexe" class="form-control"  required="" >
											<?php
											 echo'<option value="1" ';
											 if($sexePatient == 1){
												 echo 'selected = "selected"';
											 }
											 echo' >Femme</option>';
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
								  <label class="col-md-2 control-label" for="street">Adresse <span style="color: red">*</span></label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="street" name="street" value="'.$adressePatient.'" class="form-control input-md"  required=""   type="text">';
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
								  <label class="col-md-4 control-label" for="city">Code postal <span style="color: red">*</span></label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="city" name="city" value="'.$cpPatient.'" class="form-control input-md"  required=""   type="number" maxlength="5">';
								  ?>
									
								  </div>
								</div>
								</td>
		
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="state">Ville <span style="color: red">*</span></label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="state" name="state" value="'.$villePatient.'" class="form-control input-md"  required=""   type="text">';
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
								  echo' <input id="phone" name="phone" value="'.$telPatient.'" class="form-control input-md"   type="tel" maxlength="10">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
							
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="email">Email <span style="color: red">*</span></label>  
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
								  <label class="col-md-2 control-label" for="med">Médecin prescripteur  <span style="color: red">*</span></label>  
								  <a data-toggle="modal" data-target="#squarespaceModal2" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
								  <a href="#" class="btn btn-success btn-xs" onClick="ouvre_popup('../Modal/addMedecinPopUp.php')"><span class="glyphicon glyphicon-plus"></span></a>
								  <div class="col-md-5">
										 <select name="idMed" id="idMed" class="form-control"  required="" >
										
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
								  <label class="col-md-2 control-label" for="datePre">Date de prescription <span style="color: red">*</span></label>  
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
								  <a data-toggle="modal" data-target="#squarespaceModalMut" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
								  <a href="#" class="btn btn-success btn-xs" onClick="ouvre_popup('../Modal/addMutuellePopUp.php')"><span class="glyphicon glyphicon-plus"></span></a>
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
							   <!-- line modal -->
<div class="modal fade" id="squarespaceModal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
			<h3 class="modal-title" id="lineModalLabel">Votre médecin</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<?php
				$query=$bdd->prepare('SELECT * FROM medecins WHERE id_medecin = "'.$idMedecin.'"');
				$query->execute();
				$data = $query->fetch();
			?>
			<form>
              <div class="form-group">
                <label for="nameMed">Nom du médecin</label>
                <?php echo'<input type="text" class="form-control" id="nameMed" disabled="disabled" value="'.$data['nom_medecin'].'">'; ?>
              </div>
              <div class="form-group">
                <label for="firstnameMed">Prénom du médecin</label>
                <?php echo'<input type="text" class="form-control" id="firstnameMed" disabled="disabled" value="'.$data['prenom_medecin'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="numAdeli">Numéro Adeli</label>
                <?php echo'<input type="number" class="form-control" id="numAdeli" disabled="disabled" value="'.$data['num_adeli'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="telMed">Téléphone</label>
                <?php echo'<input type="tel" class="form-control" id="telMed" disabled="disabled" value="'.$data['tel_medecin'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="emailMed">Email</label>
                <?php echo'<input type="email" class="form-control" id="emailMed" disabled="disabled" value="'.$data['email_medecin'].'">'; ?>
              </div>
            </form>
			<?php 
			$query->CloseCursor();
			?>
		</div>
		
	</div>
  </div>
</div>
<!-- line modal -->
<div class="modal fade" id="squarespaceModalMut" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Fermer</span></button>
			<h3 class="modal-title" id="lineModalLabel">Votre mutuelle</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<?php
				$query=$bdd->prepare('SELECT * FROM mutuelles WHERE id_mutuelle = "'.$idMutuelle.'"');
				$query->execute();
				$data = $query->fetch();
			?>
			<form>
              <div class="form-group">
                <label for="nameMut">Votre mutuelle</label>
                <?php echo'<input type="text" class="form-control" id="nameMut" disabled="disabled" value="'.$data['nom_mutuelle'].'">'; ?>
              </div>
              <div class="form-group">
                <label for="adressMut">Adresse</label>
                <?php echo'<input type="text" class="form-control" id="adressMut" disabled="disabled" value="'.$data['adresse_mutuelle'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="cpMut">Code Postal</label>
                <?php echo'<input type="number" class="form-control" id="cpMut" disabled="disabled" value="'.$data['CP_mutuelle'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="villeMut">Ville</label>
                <?php echo'<input type="text" class="form-control" id="villeMut" disabled="disabled" value="'.$data['ville_mutuelle'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="telMut">Téléphone</label>
                <?php echo'<input type="tel" class="form-control" id="telMut" disabled="disabled" value="'.$data['tel_mutuelle'].'">'; ?>
              </div>
			  <div class="form-group">
                <label for="emailMut">Email</label>
                <?php echo'<input type="email" class="form-control" id="emailMut" disabled="disabled" value="'.$data['email_mutuelle'].'">'; ?>
              </div>
            </form>
			<?php 
			$query->CloseCursor();
			?>
		</div>
		
	</div>
  </div>
</div>