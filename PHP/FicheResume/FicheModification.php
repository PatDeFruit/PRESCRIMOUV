<div class="tab-content">
							   <div id="ficheResume" class="tab-pane fade active in">
								<h3>Fiche Résumé     </h3> 
								<form class="form-horizontal" method="POST" action="TraitementPatient.php" novalidate>
								<fieldset>
								<table class="table">
								<tr>
								<td>
								  <?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-resume">
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="firstname">Nom <span style="color: red">*</span></label>  
								  <div class="col-md-5">
								  <?php
									echo '<input id="firstname" name="firstname" value="'.$nomPatient.'" class="form-control input-md" required=""  type="text">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="lastname">Prénom <span style="color: red">*</span></label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="lastname" name="lastname" value="'.$prenomPatient.'" class="form-control input-md"   required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="med">Médecin prescripteur <span style="color: red">*</span></a> </label>  
								  <?php echo'<a href="#" class="btn btn-info btn-xs" onClick="ouvre_popup(\'../Modal/viewMedecinPopUp.php?idMedecin='.$idMedecin.'\')"><span class="glyphicon glyphicon-eye-open"></span></a>';?>
								  <a href="#" class="btn btn-success btn-xs" onClick="ouvre_popup('../Modal/addMedecinPopUp.php')"><span class="glyphicon glyphicon-plus"></span></a>
								  <div class="col-md-5">
										<select name="idMed" id="idMed" class="form-control" required="" >
										
										  <?php 
										  $query=$bdd->prepare('SELECT nom_medecin, id_medecin FROM medecins');
										$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
										$query->execute();
										while($data = $query->fetch()){
											 echo'<option value="'.$data['id_medecin'].'" ';
											 if($data['id_medecin'] == $idMedecin){
												 echo 'selected = "selected"';
											 }
											 echo'>'.$data['nom_medecin'].'</option>';
										}
										$query->CloseCursor();
										 
										  ?>
										</select>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="datePre">Date de prescription <span style="color: red">*</span></label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="datePre" name="datePre" value="'.$datePrescription.'" class="form-control input-md"   required="" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<table>
								
								<table class="table">
								<tr>
								<td>			
								<div class="form-group">
								  <label class="col-md-2 control-label" >Dimension bioclinique <span style="color: red">*</span></label>  
								<div class="col-md-8">
								<select multiple size="5" name="check[]"  >
								<?php
								$query=$bdd->prepare('SELECT pathologie, id_pathologie FROM pathologies WHERE id_pathologie IN (SELECT id_pathologie FROM patients JOIN est_diagnostique USING(id_patient) JOIN pathologies USING(id_pathologie) WHERE id_patient = :idPatient)');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){
									  echo'<option value="'.$data['id_pathologie'].'" selected="selected">'.$data['pathologie'].'</option>';
								}
								$query->CloseCursor();
								
								$query=$bdd->prepare('SELECT pathologie, id_pathologie FROM pathologies WHERE id_pathologie NOT IN (SELECT id_pathologie FROM patients JOIN est_diagnostique USING(id_patient) JOIN pathologies USING(id_pathologie) WHERE id_patient = :idPatient)');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								while($data = $query->fetch()){
									  echo'<option value="'.$data['id_pathologie'].'">'.$data['pathologie'].'</option>';
								}
									$query->CloseCursor();
									?>
							</select>
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
								  <label class="col-md-4 control-label" for="dateEnt1">Date de l'entretien initial</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt1" name="dateEnt1" value="'.$dateEntretien1.'" class="form-control input-md"   disabled="disabled" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt2">Date de l'entretien intermédiaire</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt2" name="dateEnt2" value="'.$dateEntretien2.'" class="form-control input-md"  disabled="disabled"  type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="dateEnt3">Date de l'entretien final</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt3" name="dateEnt3" value="'.$dateEntretien3.'" class="form-control input-md"  disabled="disabled" type="date">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								</table>
								
								<?php echo'<h3>Les activités pratiquées <a href="#" class="btn btn-success btn-xs" onClick="ouvre_popup(\'../Modal/addProgrammePopUp.php?idPatient='.$idPatient.'\')"><span class="glyphicon glyphicon-plus"></span></a> </h3>';?>
								<!-- PROGRAMME -->
								<table  class="table-hover" width="50%">
											<tr>
												<th class="text-center">
													Activité
												</th>
												<th>
												
												</th>
											</tr>
								<?php
									$query = $bdd->prepare('SELECT id_patient, id_activite, activite, nb_seances_effect, nb_seances_prevues FROM doit_pratiquer JOIN activites USING(id_activite)WHERE id_patient =:idPatient');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									while($data = $query->fetch()){
										echo '
											<tr>
												<td class="text-center">
													'.$data['activite'].'
												</td>
												<td class="text-center">
												<a href="#" class="btn btn-info btn-xs" onClick="ouvre_popup(\'../Modal/viewDetailsActivitePopUp.php?idAct='.$data['id_activite'].'&idPatient='.$idPatient.'\')"><span class="glyphicon glyphicon-zoom-in"></span> Plus de détails</a>';
												if($data['nb_seances_effect'] != $data['nb_seances_prevues']){
														echo'<a href="#" class="btn btn-success btn-xs" onClick="ouvre_popup(\'../Modal/updateDetailsActivitePopUp.php?idAct='.$data['id_activite'].'&idPatient='.$idPatient.'&nbSeanceDejaEffect='.$data['nb_seances_effect'].'&nbSeancePrevues='.$data['nb_seances_prevues'].'\')"><span class="glyphicon glyphicon-refresh"></span> Mettre à jour les séances</a>';
												}
												echo'
												<a href="#" class="btn btn-warning btn-xs" onClick="ouvre_popup(\'../Modal/viewCreneaux.php?idAct='.$data['id_activite'].'\')"><span class="glyphicon glyphicon-calendar"></span> Voir les créneaux</a>
												</td>
											</tr>
										';
									}
									$query->CloseCursor();
								?> 
								</table>
								<br /><br />
								
								
								
								
								
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="histo">Informations complémentaires</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="histo" name="histo" value="'.$histoPatient.'" class="form-control input-md"    type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="appLoco">Appareil locomoteur et ostéo-articulaire</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="appLoco" name="appLoco" value="'.$appLocomoteur.'" class="form-control input-md"   type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="sysCardio">Système cardio-respiratoire et endocrinien</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="sysCardio" name="sysCardio" value="'.$sysCardio.'" class="form-control input-md"   type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="sysResp">Système nerveux et cognitif</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="sysResp" name="sysResp" value="'.$sysRespi.'" class="form-control input-md"   type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-2 control-label" for="other">Autres recommandations</a></label>  
								  <div class="col-md-9">
								  <?php
								  echo'<input id="other" name="other" value="'.$autreReco.'" class="form-control input-md"   type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								
								
								</fieldset>
								<?php
								echo'<input type="submit" value="Enregistrer les modifications" class=\'btn btn-success btn-xs\' ">';

								?> 
								</br>
								</br>
								</form>



								
							   </div>