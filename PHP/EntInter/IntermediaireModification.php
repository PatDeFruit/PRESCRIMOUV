
								<h3>Entretien intermédiaire </h3> 
								<form class="form-horizontal" method="POST" action="TraitementPatient.php">
								<fieldset>
								<!-- Text input-->
								<?php 
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-entIntermediaire">
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt2">Date de l'entretien intermédiaire <span style="color: red">*</span></label>  
								  <div class="col-md-3">
								  <?php
								  echo'<input id="dateEnt2" name="dateEnt2" value="'.$dateEntretien2.'" class="form-control input-md"   required="" type="date">';
								  ?>
								  </div>
								</div>
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAP3mois">Niveau d'AP actuel <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAP3mois" id="nivAP3mois" min="0" max="10" value="'.$nivAP2.'"   required=""   class="form-control input-md" onchange="rangePrimary5.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary5">'.$nivAP2.'</output>';
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
								  echo'<input id="comm" name="comm" value="'.$commentaire.'" class="form-control input-md" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS3mois">Comportements sédentaires <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS3mois" id="nivCS3mois" min="0" max="10" value="'.$nivCS2.'"   required=""   class="form-control input-md" onchange="rangePrimary4.value=value">';
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
								  <label class="col-md-4 control-label" for="freinsInit">Rappel des freins initiaux </label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_obstacle, obstacle, id_entretien FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1 OR id_entretien = :id_entretien2');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
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
								  <label class="col-md-4 control-label" for="freins3mois">Etat des freins à 3 mois <span style="color: red">*</span></label>  
								  <div class="col-md-8">
								<?php
								
								$query=$bdd->prepare('SELECT obstacle, id_obstacle FROM obstacles WHERE id_obstacle NOT IN (SELECT id_obstacle FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1 OR id_entretien = :id_entretien2)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['obstacle'].'</button>
									<input type="checkbox" name="checkFrein2[]" id="checkFrein2[]" value="'.$data['id_obstacle'].'" class="hidden"   />
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
								  <label class="col-md-4 control-label" for="solu">Solutions</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="solu" name="solu" value="'.$solutions.'" class="form-control input-md"   type="text">';
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
								  echo'<input id="positif" name="positif" value="'.$positif.'" class="form-control input-md"    type="text">';
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
								  echo'<input id="negatif" name="negatif" value="'.$negatif.'" class="form-control input-md"    type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="goalInit">Rappel des objectifs </label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1 OR id_entretien = :id_entretien2');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
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
								  <label class="col-md-4 control-label" for="goal3mois">Objectifs pour les 3 prochains mois <span style="color: red">*</span></label>  
								  <div class="col-md-8">
								<?php
								$query=$bdd->prepare('SELECT id_motivation, motivation FROM motivations WHERE id_motivation NOT IN (SELECT id_motivation FROM motivations JOIN a_pour_motivation USING(id_motivation) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1 OR id_entretien =:id_entretien2)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->bindValue(':id_entretien2',$id_entretien2, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['motivation'].'</button>
									<input type="checkbox" name="checkMotiv2[]" id="checkMotiv2[]" value="'.$data['id_motivation'].'" class="hidden"   />
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
								  <label class="col-md-4 control-label" for="APapresProg">AP envisagée après le programme</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="APapresProg" name="APapresProg" value="'.$APenvisagee.'" class="form-control input-md"  type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>

								</table>
								
								<?php
								echo'<input type="submit" value="Enregistrer" name="valid-entInitial" class=\'btn btn-success btn-xs\' ">';
								
								?> 
								</br>
								</br>
								</fieldset>
								</form>
							   </div>