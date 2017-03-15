
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
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dernier_palier1">Dernier palier aérobie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="dernier_palier1" name="dernier_palier1" value="'.$dernier_palier.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="temps_palier">Temps au palier suivant</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="temps_palier" name="temps_palier" value="'.$temps_palier_suiv.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="cote_diff">Côte de difficulté</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="cote_diff" name="cote_diff" value="'.$cote_difficulte.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="capa_aero">Capacité d'aérobie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="capa_aero" name="capa_aero" value="'.$capacite_aerobie.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="pourc_mets">% de METs-Santé</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="pourc_mets" name="pourc_mets" value="'.$pourc_mets.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="percentile">Percentile</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="percentile" name="percentile" value="'.$percentile.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="borg_fin_test">Borg en fin de test</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="borg_fin_test" name="borg_fin_test" value="'.$borg_fin_test.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								</td>
								<td>
								</td>
								</tr>
								</table>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="motif_sante">Motif de fin de test</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="motif_sante" name="motif_sante" value="'.$motif_fin_test.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								</table>
								
								