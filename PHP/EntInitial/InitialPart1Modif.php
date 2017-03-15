<div id="entInitial" class="tab-pane fade">
								<h3>Entretien initial </h3> 
								<form class="form-horizontal" method="POST" action="TraitementPatient.php">
								<input type="hidden" name="idFormulaire" value="form-entInitial">		
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md hidden"  type="text">';
									?>
								<fieldset>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt1">Date de l'entretien initial</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt1" name="dateEnt1" value="'.$dateEntretien1.'" class="form-control input-md"   required="" type="date">';
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
									echo '<input id="taille1" name="taille1" value="'.$taille1.'" class="form-control input-md" required=""   type="number">';
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
								  echo'<input id="poids1" name="poids1" value="'.$poids1.'" class="form-control input-md"   required="" type="number">';
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
								  <label class="col-md-4 control-label" for="massH1">%Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="massH1" name="massH1" value="'.$mhydrique1.'" class="form-control input-md"  type="number">';
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
								  echo'<input id="massG1" name="massG1" value="'.$mgrasse1.'" class="form-control input-md"   type="number">';
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
								  echo'<input id="massM1" name="massM1" value="'.$mmuscu1.'" class="form-control input-md"  type="number">';
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
									echo '<input id="FCrepos1" name="FCrepos1" value="'.$FC_repos1.'" class="form-control input-md" required=""   type="number">';
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
								  echo'<input id="satuRepos1" name="satuRepos1" value="'.$SPO2_repos1.'" class="form-control input-md"   required="" type="number">';
								  ?>
									
								  </div>
								</div>
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
									  <label class="col-md-4 control-label" for="dernier_palier">Dernier palier d'aérobie</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="dernier_palier" id="dernier_palier" min="1" max="20" value="'.$dernier_palier.'"  class="form-control input-md"   onchange="rangePrimaryPalier.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryPalier">'.$dernier_palier.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="temps_palier_suiv">Temps au palier suivant</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="temps_palier_suiv" name="temps_palier_suiv" value="'.$temps_palier_suiv.'" class="form-control input-md" type="time">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="cote_difficulte">Côte de difficulté</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="cote_difficulte" id="cote_difficulte" min="0" max="10" step="0.5" value="'.$cote_difficulte.'"  class="form-control input-md"   onchange="rangePrimaryCote.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryCote">'.$cote_difficulte.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="capacite_aero">Capacité aérobie</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="capacite_aero" id="capacite_aero" min="1" max="25" step="0.5" value="'.$capacite_aerobie.'"  class="form-control input-md"   onchange="rangePrimaryCap.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryCap">'.$capacite_aerobie.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="pourc_mets">% de METs-Santé</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="pourc_mets" name="pourc_mets" value="'.$pourc_mets.'" class="form-control input-md" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="percentile">Percentile</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="percentile" name="percentile" value="'.$percentile.'" class="form-control input-md" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="mets_sante">METs-Santé</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="mets_sante" id="mets_sante" min="1" max="25" step="0.1" value="'.$mets_sante.'"  class="form-control input-md"   onchange="rangePrimaryMETs.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryMETs">'.$mets_sante.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="borg_fin_test">METs-Santé</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="borg_fin_test" id="borg_fin_test" min="1" max="20" value="'.$borg_fin_test.'"  class="form-control input-md"   onchange="rangePrimaryBorg.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryBorg">'.$borg_fin_test.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="motif_fin_test">Motif de fin de test</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="motif_fin_test" name="motif_fin_test" value="'.$motif_fin_test.'" class="form-control input-md"   type="text">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>