<div class="tab-content">
							   <div id="ficheResume" class="tab-pane fade active in">
								<h3>Fiche Résumé    
								</h3> 
								<form class="form-horizontal" method="POST" action="TraitementConsultation.php">
								<fieldset>
								<?php
									echo '<input id="idPat" name="idPat" value="'.$idPatient.'" class="form-control input-md"  type="hidden">';
									?>
									<input name="idFormulaire" type="hidden" value="form-resume">
								<table class="table">
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="firstname">Nom</label>  
								  <div class="col-md-5">
								  <?php
									echo '<input id="firstname" name="firstname" value="'.$nomPatient.'" class="form-control input-md" required="" disabled="disabled" type="text">';
									?>
									
								  </div>
								</div>
								</td>

								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="lastname">Prénom</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="lastname" name="lastname" value="'.$prenomPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="phone">Téléphone</label>  
								  <div class="col-md-5">
								 <?php
								  echo' <input id="phone" name="phone" value="'.$telPatient.'" class="form-control input-md" disabled="disabled" type="tel">';
								  ?>
									
								  </div>
								</div>
								</td>
						
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="email">Email</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="email" name="email" value="'.$mailPatient.'" class="form-control input-md" disabled="disabled" required="" type="email">';
								  ?>
									
								  </div>
								</div>
								</td>
								</tr>
								<tr>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="med">Médecin prescripteur</a></label>  
								  <?php echo'<a href="#" class="btn btn-info btn-xs" onClick="ouvre_popup(\'../Modal/viewMedecinPopUp.php?idMedecin='.$idMedecin.'\')"><span class="glyphicon glyphicon-eye-open"></span></a>';?>
								  <div class="col-md-5">
								  <?php
								  echo'<input id="med" name="med" value="'.$nomMedecin.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  
									
								  </div>
								</div>
								</td>
								<td>
								<!-- Text input-->
								<div class="form-group">
								  <label class="col-md-4 control-label" for="datePre">Date de prescription</label>  
								  <div class="col-md-5">
								  <?php
								  echo'<input id="datePre" name="datePre" value="'.$datePrescription.'" class="form-control input-md" disabled="disabled" required="" type="date">';
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
								  <label class="col-md-4 control-label" for="dateEnt1">Date de l'entretien initial</label>  
								  <div class="col-md-6">
								  <?php
								  echo'<input id="dateEnt1" name="dateEnt1" value="'.$dateEntretien1.'" class="form-control input-md" disabled="disabled" required="" type="date">';
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
								  echo'<input id="dateEnt2" name="dateEnt2" value="'.$dateEntretien2.'" class="form-control input-md" disabled="disabled" required="" type="date">';
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
								  echo'<input id="dateEnt3" name="dateEnt3" value="'.$dateEntretien3.'" class="form-control input-md" disabled="disabled" required="" type="date">';
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
								  <label class="col-md-2 control-label" for="dim">Dimension bioclinique</a></label>  
								  <div class="col-md-6">
								  <?php
								  $query=$bdd->prepare('SELECT id_patient, pathologie, id_pathologie FROM patients JOIN est_diagnostique USING(id_patient) JOIN pathologies USING(id_pathologie) WHERE id_patient = :idPatient');
								$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
								$query->execute();
								
								while($data = $query->fetch()){									
									echo'<ul class="nav nav-list">
									  <li class="list-group-item">'.$data['pathologie'].'</li>
									</ul>';
								}
								
								$query->CloseCursor();
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								<h3>Les activités pratiquées </h3>
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
									$query = $bdd->prepare('SELECT id_patient, id_activite, activite FROM doit_pratiquer JOIN activites USING(id_activite) WHERE id_patient =:idPatient');
									$query->bindValue(':idPatient',$idPatient, PDO::PARAM_STR);
									$query->execute();
									while($data = $query->fetch()){
										echo '
											<tr>
												<td class="text-center">
													'.$data['activite'].'
												</td>
												<td class="text-center">
													<a href="#" class="btn btn-success btn-xs" onClick="ouvre_popup(\'../Modal/viewDetailsActivitePopUp.php?idAct='.$data['id_activite'].'&idPatient='.$idPatient.'\')"><span class="glyphicon glyphicon-zoom-in"></span>Plus de détails</a>
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
								  echo'<input id="histo" name="histo" value="'.$histoPatient.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="appLoco" name="appLoco" value="'.$appLocomoteur.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="sysCardio" name="sysCardio" value="'.$sysCardio.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="sysResp" name="sysResp" value="'.$sysRespi.'" class="form-control input-md" disabled="disabled" required="" type="text">';
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
								  echo'<input id="other" name="other" value="'.$autreReco.'" class="form-control input-md" disabled="disabled" required="" type="text">';
								  ?>
								  </div>
								</div>
								</td>
								</tr>
								</table>
								
								<?php
								if($statutPatient == "Actif - Entretien initial"){
								echo'<input type="submit" value="Passer à l\'entretien intermédiaire" class=\'btn btn-success btn-xs\' ">';
								
								} else if($statutPatient == "Actif - Entretien intermédiaire"){
								echo'<input type="submit"  value="Passer à l\'entretien final" class=\'btn btn-success btn-xs\' ">';
								} else if($statutPatient == "Actif - Entretien final"){
								echo'<input type="submit"  value="Terminer le programme" class=\'btn btn-success btn-xs\' ">';
								}
								?> 
								<br/><br/>
								</fieldset>
								</form>
</div>
