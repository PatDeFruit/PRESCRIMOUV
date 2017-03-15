<div id="entFinal" class="tab-pane fade">
								<h3>Entretien final</h3> 
								<form class="form-horizontal" method="POST" action="TraitementConsultation.php">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-entFinal">
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt3">Date de l'entretien final</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt3" name="dateEnt3" value="'.$dateEntretien3.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAP6mois">Niveau d'AP actuel</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAP6mois" id="nivAP6mois" min="0" max="10" value="'.$nivAP3.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary5.value=value">';
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
								  echo'<input id="comm2" name="comm2" value="'.$commentaire3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS6mois">Comportements sédentaires</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS6mois" id="nivCS6mois" min="0" max="10" value="'.$nivCS3.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary6.value=value">';
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
								  <label class="col-md-4 control-label" for="freinsInit2">Rappel des freins initiaux</label>  
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
								  <label class="col-md-4 control-label" for="freins6mois">Etat des freins à 6 mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_obstacle, obstacle, id_entretien FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien3');
								$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
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
								  <label class="col-md-4 control-label" for="solu2">Solutions</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="solu2" name="solu2" value="'.$solutions3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="positif2" name="positif2" value="'.$positif3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="negatif2" name="negatif2" value="'.$negatif3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goalInit2">Rappel des objectifs</label>  
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
								  <label class="col-md-4 control-label" for="goal6mois">Objectifs pour les 3 prochains mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien3');
								$query->bindValue(':id_entretien3',$id_entretien3, PDO::PARAM_STR);
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
								  <label class="col-md-4 control-label" for="APapresProg2">AP envisagée après le programme</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="APapresProg2" name="APapresProg2" value="'.$APenvisagee3.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  <label class="col-md-4 control-label" for="taille2">Taille</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="taille2" name="taille2" value="'.$taille3.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="poids2">Poids</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="poids2" name="poids2" value="'.$poids3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="IMC2">IMC</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="IMC2" name="IMC2" value="'.$imc3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="massH2">%Masse hydrique</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="massH2" name="massH2" value="'.$mhydrique3.'" class="form-control input-md" required="" disabled="disabled" type="number">';
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
								  echo'<input id="massG2" name="massG2" value="'.$mgrasse3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="massM2" name="massM2" value="'.$mmuscu3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="FCrepos2">FC Repos</label>  
								  <div class="col-md-4">
								  <?php
									echo '<input id="FCrepos2" name="FCrepos2" value="'.$FC_repos3.'" class="form-control input-md" required="" disabled="disabled" type="number">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="satuRepos2">Saturation O2 Repos</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="satuRepos2" name="satuRepos2" value="'.$SPO2_repos3.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  echo'<input id="dernier_palier1" name="dernier_palier1" value="'.$dernier_palier2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="temps_palier1">Temps au palier suivant</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="temps_palier1" name="temps_palier1" value="'.$temps_palier_suiv2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="cote_diff1">Côte de difficulté</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="cote_diff1" name="cote_diff1" value="'.$cote_difficulte2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="capa_aero1">Capacité d'aérobie</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="capa_aero1" name="capa_aero1" value="'.$capacite_aerobie2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="pourc_mets1">% de METs-Santé</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="pourc_mets1" name="pourc_mets1" value="'.$pourc_mets2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="percentile1">Percentile</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="percentile1" name="percentile1" value="'.$percentile2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="borg_fin_test1">Borg en fin de test</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="borg_fin_test1" name="borg_fin_test1" value="'.$borg_fin_test2.'" class="form-control input-md" disabled="disabled" required="" type="number">';
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
								  <label class="col-md-4 control-label" for="motif_sante1">Motif de fin de test</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="motif_sante1" name="motif_sante1" value="'.$motif_fin_test2.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								</table>