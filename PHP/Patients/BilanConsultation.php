<div id="bilan" class="tab-pane fade">
								<h3>Bilan</h3> 
								<p>Evolution</p>
								<form class="form-horizontal">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-bilan">
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="Deltataille">&#916 Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="Deltataille" name="Deltataille" value="'.$deltaTaille.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaPoids">&#916 Poids</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaPoids" name="DeltaPoids" value="'.$deltaPoids.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaIMC">&#916 IMC</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaIMC" name="DeltaIMC" value="'.$deltaIMC.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaMH">&#916 %Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="DeltaMH" name="DeltaMH" value="'.$deltaMH.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaMG">&#916 %Masse grasse</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaMG" name="DeltaMG" value="'.$deltaMG.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaMM">&#916 %Masse musculaire</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaMM" name="DeltaMM" value="'.$deltaMM.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaFC">&#916 FC Repos</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="DeltaFC" name="DeltaFC" value="'.$deltaFC.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaSP">&#916 Saturation O2 Repos</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaSP" name="DeltaSP" value="'.$deltaSP.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								</td>
								</tr>
								
								</table>
								</br>
								<h4>Niveau d'activité physique</h4> 
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaAP">&#916 Niveau d'Activité Physique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaAP" name="deltaAP" value="'.$deltaAP.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaCS">&#916 Comportements sédentaires</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaCS" name="deltaCS" value="'.$deltaCS.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								
								<h4>Evaluation Ricci & Gagnon </h4> 
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="DeltaRG">&#916 Score Ricci & Gagnon</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="DeltaRG" name="DeltaRG" value="'.$deltaRG.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								<h4>Test de marche</h4> 
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaDistRelleTM">&#916 Distance Réelle</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaDistRelleTM" name="DeltaDistRelleTM" value="'.$deltaTDMDist.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPourcTheoTM">&#916 Pourcentage Théorique</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPourcTheoTM" name="DeltaPourcTheoTM" value="'.$deltaTDMPour.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>									
								</tr>
								</table>
								</br>
								
								
								<h4>Test d'équilibre</h4>
								<p>Pied droit - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedDYO">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedDYO" name="DeltaPiedDYO" value="'.$deltaPDYO.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied droit - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedDYF">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedDYF" name="DeltaPiedDYF" value="'.$deltaPDYF.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								<p>Pied gauche - Yeux Ouverts</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedGYO">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedGYO" name="DeltaPiedGYO" value="'.$deltaPGYO.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								
								<p>Pied gauche - Yeux Fermés</p>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaPiedGYF">&#916 Temps</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaPiedGYF" name="DeltaPiedGYF" value="'.$deltaPGYF.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								
								<h4>Test Assis Debout</h4>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="DeltaNbRepet">&#916 Nombre de répétitions</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="DeltaNbRepet" name="DeltaNbRepet" value="'.$deltaADrepet.'" class="form-control input-md" disabled="disabled" required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>
								<table class="table">
								<h4>Evaluation WHOQOL </h4> 
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaQDV">&#916 Score Qualité de Vie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaQDV" name="deltaQDV" value="'.$deltaQDV.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaSP">&#916 Score Santé Physique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaSP" name="deltaSP" value="'.$deltaPhy.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaSPsy">&#916 Score Santé Psychologique</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaSPsy" name="deltaSPsy" value="'.$deltaPsy.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaR">&#916 Score Relation</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaR" name="deltaR" value="'.$deltaRel.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="deltaEnv">&#916 Score Environnement</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="deltaEnv" name="deltaEnv" value="'.$deltaEnvi.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								</table>
								</br>
								
								</br>
								</br>
								</fieldset>
								</form>