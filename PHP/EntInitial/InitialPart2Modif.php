<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAPactu">Niveau d'activité physique actuel <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAPactu" id="nivAPactu" min="0" max="10" value="'.$nivAP1.'"  class="form-control input-md"   required=""  onchange="rangePrimary.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary">'.$nivAP1.'</output>';
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
								  echo'<input id="activitePhys" name="activitePhys" value="'.$apActuelle1.'" class="form-control input-md"  type="text">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivCS">Niveau de comportements sédentaires <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivCS" id="nivCS" min="0" max="10" value="'.$nivCS1.'"  class="form-control input-md"  required=""   onchange="rangePrimary3.value=value">';
									  ?>
									  </div>
									  <div class="col-md-2">
									  <?php
									  echo'<output id="rangePrimary3">'.$nivCS1.'</output>';
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
								  echo'<input id="APante" name="APante" value="'.$apAnterieure1.'" class="form-control input-md"   type="text">';
								  ?>
									
								  </div>
								</div>			
								</td>
								</tr>
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="nivAPenvisagee">Niveau d'AP envisagé à moyen terme <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input type="range" name="nivAPenvisagee" id="nivAPenvisagee" min="0" max="10" value="'.$nivAPvoulue1.'"   required=""   class="form-control input-md" onchange="rangePrimary2.value=value">';
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
								  <label class="col-md-2 control-label" >Freins <span style="color: red">*</span></label>  
								<div class="col-md-8">
								<?php
								 $query=$bdd->prepare('SELECT id_obstacle, obstacle, id_entretien FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){										
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" disabled="disabled">'.$data['obstacle'].'</button>
									<input type="checkbox" value="'.$data['id_obstacle'].'" class="hidden" checked />
								</span>';
								}
								
								$query->CloseCursor();
								
								$query=$bdd->prepare('SELECT obstacle, id_obstacle FROM obstacles WHERE id_obstacle NOT IN (SELECT id_obstacle FROM obstacles JOIN a_pour_obstacle USING(id_obstacle) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['obstacle'].'</button>
									<input type="checkbox" name="checkFrein[]" id="checkFrein[]" value="'.$data['id_obstacle'].'" class="hidden"  />
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
								  <label class="col-md-2 control-label" >Attentes et motivations <span style="color: red">*</span></label>
								<div class="col-md-8">
								<?php
								 $query=$bdd->prepare('SELECT id_motivation, motivation, id_entretien FROM motivations JOIN a_pour_motivation USING(id_motivation) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){										
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" disabled="disabled">'.$data['motivation'].'</button>
									<input type="checkbox" value="'.$data['id_motivation'].'" class="hidden" checked />
								</span>';
								}
								
								$query->CloseCursor();
								
								$query=$bdd->prepare('SELECT id_motivation, motivation FROM motivations WHERE id_motivation NOT IN (SELECT id_motivation FROM motivations JOIN a_pour_motivation USING(id_motivation) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['motivation'].'</button>
									<input type="checkbox" name="checkMotiv[]" id="checkMotiv[]" value="'.$data['id_motivation'].'" class="hidden"  />
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
								  <label class="col-md-2 control-label" >Objectifs généraux <span style="color: red">*</span></label>
								<div class="col-md-8">
								<?php
								 $query=$bdd->prepare('SELECT id_objectif, objectif, id_entretien FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){										
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" disabled="disabled">'.$data['objectif'].'</button>
									<input type="checkbox" value="'.$data['id_objectif'].'" class="hidden" checked />
								</span>';
								}
								
								$query->CloseCursor();
								
								$query=$bdd->prepare('SELECT id_objectif, objectif FROM objectifs WHERE id_objectif NOT IN (SELECT id_objectif FROM objectifs JOIN a_pour_objectif USING(id_objectif) JOIN entretiens USING(id_entretien) WHERE id_entretien = :id_entretien1)');
								$query->bindValue(':id_entretien1',$id_entretien1, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<span class="button-checkbox">
									<button type="button" class="btn" data-color="primary" >'.$data['objectif'].'</button>
									<input type="checkbox" name="checkObj[]" id="checkObj[]" value="'.$data['id_objectif'].'" class="hidden"  />
								</span>';
								}
								
								$query->CloseCursor();
								
								  ?>
								</div>
								</div>							
								</td>
								</tr>
								</table>
								</br>