
							   <div id="entInitial" class="tab-pane fade">
							   <h3>Entretien initial </h3> 
								<form class="form-horizontal" method="POST" action="TraitementConsultation.php">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-entInitial">
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt1">Date de l'entretien initial</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt1" name="dateEnt1" value="'.$dateEntretien1.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
									
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="taille1">Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="taille1" name="taille1" value="'.$taille1.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="poids1">Poids</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="poids1" name="poids1" value="'.$poids1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="IMC1">IMC</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="IMC1" name="IMC1" value="'.$imc1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massH1">%Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="massH1" name="massH1" value="'.$mhydrique1.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massG1">%Masse grasse</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massG1" name="massG1" value="'.$mgrasse1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massM1">%Masse musculaire</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massM1" name="massM1" value="'.$mmuscu1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="FCrepos1">FC Repos</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="FCrepos1" name="FCrepos1" value="'.$FC_repos1.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="satuRepos1">Saturation O2 Repos</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="satuRepos1" name="satuRepos1" value="'.$SPO2_repos1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								</td>
								</tr>
								