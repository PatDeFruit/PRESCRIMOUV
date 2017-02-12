<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAPactu">Niveau d'activité physique actuel</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAPactu" id="nivAPactu" min="0" max="10" value="'.$nivAP1.'"  class="form-control input-md" disabled="disabled" onchange="rangePrimary.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary2">'.$nivAP1.'</output>';
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
								  <label class="col-md-4 control-label" for="activitePhys">Quelles activités/occupations</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="activitePhys" name="activitePhys" value="'.$apActuelle1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS">Niveau de comportements sédentaires</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS" id="nivCS" min="0" max="10" value="'.$nivCS1.'"  class="form-control input-md" disabled="disabled" onchange="rangePrimary3.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary2">'.$nivCS1.'</output>';
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
								  <label class="col-md-4 control-label" for="APante">Activité Physique Antérieure</label>  
								  <div class="col-md-4">
								  <?php
								  echo'<input id="APante" name="APante" value="'.$apAnterieure1.'" class="form-control input-md" disabled="disabled" required="" type="number">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAPenvisagee">Niveau d'AP envisagé à moyen terme</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAPenvisagee" id="nivAPenvisagee" min="0" max="10" value="'.$nivAPvoulue1.'"  disabled="disabled" class="form-control input-md" onchange="rangePrimary2.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary2">'.$nivAPvoulue1.'</output>';
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
								  <label class="col-md-4 control-label" for="freins">Freins</label>  
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
								  <label class="col-md-4 control-label" for="motiv">Attentes et motivations</label>  
								  <div class="col-md-4">
								  <?php
								  $query=$bdd->prepare('SELECT id_motivation, motivation, id_entretien FROM motivations JOIN a_pour_motivation USING(id_motivation) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['motivation'].'</li>
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
								  <label class="col-md-4 control-label" for="goal">Objectifs généraux</label>  
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
								</table>
								</br>