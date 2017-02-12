<div id="entInter" class="tab-pane fade">
								<h3>Entretien intermédiaire </h3> 
								<form class="form-horizontal" method="POST" action="TraitementConsultation.php">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-entIntermediaire">
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt2">Date de l'entretien intermédiaire</label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt2" name="dateEnt2" value="'.$dateEntretien2.'" class="form-control input-md" disabled="disabled" required="" type="date">';
								  ?>
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAP3mois">Niveau d'AP actuel</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAP3mois" id="nivAP3mois" min="0" max="10" value="'.$nivAP2.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary3.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary3">'.$nivAP2.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="comm">Commentaires</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="comm" name="comm" value="'.$commentaire.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS3mois">Comportements sédentaires</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS3mois" id="nivCS3mois" min="0" max="10" value="'.$nivCS2.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary4.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary4">'.$nivCS2.'</output>';
									  ?>
									  </div>
									</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="freinsInit">Rappel des freins initiaux</label>  
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
								  <label class="col-md-4 control-label" for="freins3mois">Etat des freins à 3 mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_obstacle, obstacle, id_entretien FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien2 OR id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
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
								  <label class="col-md-4 control-label" for="solu">Solutions</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="solu" name="solu" value="'.$solutions.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  <label class="col-md-4 control-label" for="positif">Positifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="positif" name="positif" value="'.$positif.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="negatif">Negatifs</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="negatif" name="negatif" value="'.$negatif.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goalInit">Rappel des objectifs</label>  
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
								  <label class="col-md-4 control-label" for="goal3mois">Objectifs pour les 3 prochains mois</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretien USING(id_entretien) WHERE id_entretien = :id_entretien2 OR id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
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
								  <label class="col-md-4 control-label" for="APapresProg">AP envisagée après le programme</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="APapresProg" name="APapresProg" value="'.$APenvisagee.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<?php
								if($statutPatient == "Actif - Entretien intermédiaire"){
								echo'<input type="submit" name="valid-inter" value="Passer à l\'entretien final" class=\'btn btn-success btn-xs\' ">';
								}
								?> 
								</br>
								</br>
								</fieldset>
								</form>
							   </div>