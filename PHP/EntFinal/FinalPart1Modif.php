<div id="entFinal" class="tab-pane fade">
								<h3>Entretien final</h3> 
								<form class="form-horizontal" method="POST" action="TraitementPatient.php">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-entFinal">
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt3">Date de l'entretien final <span style="color: red">*</span></label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt3" name="dateEnt3" value="'.$dateEntretien3.'" class="form-control input-md"   required="" type="date">';
								  ?>
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAP6mois">Niveau d'AP actuel <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAP6mois" id="nivAP6mois" min="0" max="10" value="'.$nivAP3.'"     required="" class="form-control input-md" onchange="rangePrimary5.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary5">'.$nivAP3.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="comm2">Commentaires</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="comm2" name="comm2" value="'.$commentaire3.'" class="form-control input-md"    type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS6mois">Comportements sédentaires <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS6mois" id="nivCS6mois" min="0" max="10" value="'.$nivCS3.'"   required=""   class="form-control input-md" onchange="rangePrimary6.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary6">'.$nivCS3.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freinsInit2">Rappel des freins initiaux </label>  
								  <div class="col-md-4">
								  <?php
								   $query=$bdd->prepare('SELECT id_obstacle, obstacle, id_entretien FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['obstacle'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freins6mois">Etat des freins à 6 mois <span style="color: red">*</span></label>  
								  <div class="col-md-8">
								<?php				
							
								$query=$bdd->prepare('SELECT obstacle, id_obstacle FROM obstacles WHERE id_obstacle NOT IN (SELECT id_obstacle FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1 OR id_entretien = :id_entretien2 OR id_entretien = :id_entretien3)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
								$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['obstacle'].'</button>
									<input type="checkbox" name="checkFrein3[]" id="checkFrein3[]" value="'.$data['id_obstacle'].'" class="hidden" />
								</span>';
								}
								
								$query->CloseCursor();
								
								  ?>
								</div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="solu2">Solutions</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="solu2" name="solu2" value="'.$solutions3.'" class="form-control input-md"    type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<p>Ressenti général</p>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="positif2">Positifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="positif2" name="positif2" value="'.$positif3.'" class="form-control input-md"  type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="negatif2">Negatifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="negatif2" name="negatif2" value="'.$negatif3.'" class="form-control input-md"    type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goalInit2">Rappel des objectifs </label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['objectif'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goal6mois">Objectifs pour les 3 prochains mois <span style="color: red">*</span></label>  
								   <div class="col-md-8">
								<?php
								$query=$bdd->prepare('SELECT id_objectif, objectif FROM objectifs WHERE id_objectif NOT IN (SELECT id_objectif FROM a_pour_objectif WHERE id_entretien = :id_entretien1 OR id_entretien = :id_entretien2 OR id_entretien = :id_entretien3)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
								$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['objectif'].'</button>
									<input type="checkbox" name="checkMotiv3[]" id="checkMotiv3[]" value="'.$data['id_objectif'].'" class="hidden"  />
								</span>';
								}
								
								$query->CloseCursor();
								
								  ?>
								</div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="APapresProg2">AP envisagée après le programme</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="APapresProg2" name="APapresProg2" value="'.$APenvisagee3.'" class="form-control input-md"    type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="taille2">Taille <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="taille2" name="taille2" value="'.$taille3.'" class="form-control input-md" required=""   type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="poids2">Poids <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="poids2" name="poids2" value="'.$poids3.'" class="form-control input-md"   required="" type="number">';
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
								  <label class="col-md-4 control-label" for="massH2">%Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="massH2" name="massH2" value="'.$mhydrique3.'" class="form-control input-md"    type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massG2">%Masse grasse</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massG2" name="massG2" value="'.$mgrasse3.'" class="form-control input-md"   type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massM2">%Masse musculaire</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="massM2" name="massM2" value="'.$mmuscu3.'" class="form-control input-md"   type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="FCrepos2">FC Repos <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="FCrepos2" name="FCrepos2" value="'.$FC_repos3.'" class="form-control input-md" required=""   type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="satuRepos2">Saturation O2 Repos <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="satuRepos2" name="satuRepos2" value="'.$SPO2_repos3.'" class="form-control input-md"   required="" type="number">';
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
									  <label class="col-md-4 control-label" for="dernier_palier2">Dernier palier d'aérobie</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="dernier_palier2" id="dernier_palier2" min="1" max="20" value="'.$dernier_palier2.'"  class="form-control input-md"   onchange="rangePrimaryPalier2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryPalier2">'.$dernier_palier2.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="temps_palier_suiv2">Temps au palier suivant</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="temps_palier_suiv2" name="temps_palier_suiv2" value="'.$temps_palier_suiv2.'" class="form-control input-md" type="time">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="cote_difficulte2">Côte de difficulté</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="cote_difficulte2" id="cote_difficulte2" min="0" max="10" step="0.5" value="'.$cote_difficulte2.'"  class="form-control input-md"   onchange="rangePrimaryCote2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryCote2">'.$cote_difficulte2.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="capacite_aero2">Capacité aérobie <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="capacite_aero2" id="capacite_aero2" min="1" max="25" step="0.5" value="'.$capacite_aerobie2.'"   required="" class="form-control input-md"   onchange="rangePrimaryCap2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryCap2">'.$capacite_aerobie2.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="pourc_mets2">% de METs-Santé <span style="color: red">*</span></label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="pourc_mets2" name="pourc_mets2" value="'.$pourc_mets2.'" class="form-control input-md" type="number" required="" >';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="percentile2">Percentile</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="percentile2" name="percentile2" value="'.$percentile2.'" class="form-control input-md" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="mets_sante2">METs-Santé</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="mets_sante2" id="mets_sante2" min="1" max="25" step="0.1" value="'.$mets_sante2.'"  class="form-control input-md"   onchange="rangePrimaryMETs2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryMETs2">'.$mets_sante2.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="borg_fin_test2">BOrg en fin de test</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="borg_fin_test2" id="borg_fin_test2" min="1" max="20" value="'.$borg_fin_test2.'"  class="form-control input-md"   onchange="rangePrimaryBorg2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimaryBorg2">'.$borg_fin_test2.'</output>';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="motif_fin_test2">Motif de fin de test</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="motif_fin_test2" name="motif_fin_test2" value="'.$motif_fin_test2.'" class="form-control input-md"   type="text">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>

								</table>