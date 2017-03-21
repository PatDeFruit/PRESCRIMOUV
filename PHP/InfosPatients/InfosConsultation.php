<div id="infoPatient" class="tab-pane fade">
								<h3>Informations Bénéficiaire </h3> 
								<form class="form-horizontal" method="post">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-infos">
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="firstname">Nom</label>  
								  <div class="col-md-5">
								  <?php
									echo '<input id="firstname" name="firstname" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="text">';
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
								  echo'<input id="lastname" name="lastname" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="birthdate" name="birthdate" value="'.$dateNPatient.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="sexe">Sexe</label>  
								  <div class="col-md-4">
								  
								  <?php
								  if($sexePatient == 1){
									  echo'<input id="sexe" name="sexe" value="Femme" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else {
									  echo'<input id="sexe" name="sexe" value="Homme" class="form-control input-md" disabled="disabled" required="" type="text">';
								  }
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
								  <label class="col-md-2 control-label" for="street">Adresse</label>  
								  <div class="col-md-8">
								  <?php
								  echo'<input id="street" name="street" value="'.$adressePatient.'" class="form-control input-md" disabled="disabled" type="text">';
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
								  echo'<input id="city" name="city" value="'.$cpPatient.'" class="form-control input-md" disabled="disabled" type="number">';
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
								  echo'<input id="state" name="state" value="'.$villePatient.'" class="form-control input-md" disabled="disabled" type="text">';
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
								  echo' <input id="phone" name="phone" value="'.$telPatient.'" class="form-control input-md" disabled="disabled" type="tel">';
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
								  echo'<input id="email" name="email" value="'.$mailPatient.'" class="form-control input-md" disabled="disabled" required="" type="email">';
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
								  <label class="col-md-4 control-label" for="situFamil">Situation familiale</label>  
								  <div class="col-md-3">
								  <?php
								  if($situationPatient == 0){
									  echo'<input id="situFamil" name="situFamil" value="Célibataire" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 1){
									  echo'<input id="situFamil" name="situFamil" value="En couple" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 2){
									  echo'<input id="situFamil" name="situFamil" value="Marié(e)"" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 3){
									  echo'<input id="situFamil" name="situFamil" value="Divorcé(e)" class="form-control input-md" disabled="disabled" required="" type="text">';
								  } else if($situationPatient == 4){
									  echo'<input id="situFamil" name="situFamil" value="Veuf(ve)" class="form-control input-md" disabled="disabled" required="" type="text">';
								  }
								  ?>
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="nbEnfant">Nombre d'enfants</label>  
								  <div class="col-md-2">
								  <?php
								  echo'<input id="nbEnfant" name="nbEnfant" value="'.$enfantPatient.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="profession" name="profession" value="'.$profPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  <label class="col-md-4 control-label" for="med">Médecin prescripteur  </label>  
								  <a data-toggle="modal" data-target="#squarespaceModal" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
								  <div class="col-md-5">
								  <?php
								  echo'<input id="med" name="med" value="'.$nomMedecin.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="datePre">Date de prescription</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="datePre" name="datePre" value="'.$datePrescription.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="mut">Mutuelle</span></a></label>  
								  <a data-toggle="modal" data-target="#squarespaceModalMut" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
								  <div class="col-md-5">
										 <?php

								  echo'<input id="mut" name="mut" value="'.$mutuelle.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>					  
								  </div>
								</div>
								</td>
				
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="numAffiliation">Numéro Affiliation</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="numAffiliation" name="numAffiliation" value="'.$numAffiliation.'" class="form-control input-md"  disabled="disabled" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								</tr>
								</table>
								<?php
								if($statutPatient == "Actif - Entretien initial"){
								echo'<input type="submit" name="valid-infos" value="Passer à l\'entretien intermédiaire" class=\'btn btn-success btn-xs\' ">';
								
								} else if($statutPatient == "Actif - Entretien intermédiaire"){
								echo'<input type="submit" name="valid-infos" value="Passer à l\'entretien final" class=\'btn btn-success btn-xs\' ">';
								} else if($statutPatient == "Actif - Entretien final"){
								echo'<input type="submit" name="valid-infos" value="Terminer le programme" class=\'btn btn-success btn-xs\' ">';
								}
								?>
								<br/><br/>
								</fieldset>
								</form>

							   </div>
							   <!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
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