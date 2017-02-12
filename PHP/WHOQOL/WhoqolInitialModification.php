<h4>Evaluation WHOQOL </h4> 
								<table class="table">
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Comment évaluez-vous votre qualité de vie ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($eval_qualite_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="1" selected> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="2" selected> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="3" selected> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="4" selected> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="5" selected> Très bonne </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1" name="QDV1"  value="5"> Très bonne </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre santé ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($satisfaction_sante == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2" name="QDV2"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >La douleur physique vous empêche t'elle de faire ce dont vous avez envie ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($douleur_physique == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="5"> Extrêmement </label>';
								} else if($douleur_physique == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="5"> Extrêmement </label>';
								} else if($douleur_physique == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="5"> Extrêmement </label>';
								} else if($douleur_physique == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="5"> Extrêmement </label>';
								} else if($douleur_physique == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1" name="SPhy1"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Avez-vous besoin d'un traitement médical quotidiennement ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($traitement_quotidien == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2" name="SPhy2"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Aimez-vous votre vie ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($aimer_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="5"> Extrêmement </label>';
								} else if($aimer_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="5"> Extrêmement </label>';
								} else if($aimer_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="5"> Extrêmement </label>';
								} else if($aimer_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="5"> Extrêmement </label>';
								} else if($aimer_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1" name="SPsy1"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Estimez-vous que votre vie a du sens ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($sens_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="5"> Extrêmement </label>';
								} else if($sens_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="5"> Extrêmement </label>';
								} else if($sens_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="5"> Extrêmement </label>';
								} else if($sens_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="5"> Extrêmement </label>';
								} else if($sens_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2" name="SPsy2"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous capable de vous concentrer ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($concentration == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="5"> Extrêmement </label>';
								} else if($concentration == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="5"> Extrêmement </label>';
								} else if($concentration == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="5"> Extrêmement </label>';
								} else if($concentration == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="5"> Extrêmement </label>';
								} else if($concentration == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3" name="SPsy3"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Vous sentez-vous en sécurité dans votre vie quotidienne ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($securite_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="5"> Extrêmement </label>';
								} else if($securite_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="5"> Extrêmement </label>';
								} else if($securite_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="5"> Extrêmement </label>';
								} else if($securite_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="5"> Extrêmement </label>';
								} else if($securite_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1" name="SEnv1"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Viviez-vous dans un environnement sain ?</label>  
								<div class="col-md-8">
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5"> Extrêmement </label>
									<?php 
								if($environnement_sain == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2" name="SEnv2"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Avez-vous assez d'énergie dans votre vie quotidienne ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($energie_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="5"> Extrêmement </label>';
								} else if($energie_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="5"> Extrêmement </label>';
								} else if($energie_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="5"> Extrêmement </label>';
								} else if($energie_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="5"> Extrêmement </label>';
								} else if($energie_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3" name="SPhy3"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Acceptez-vous votre apparence physique ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($apparence == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="5"> Extrêmement </label>';
								} else if($apparence == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="5"> Extrêmement </label>';
								} else if($apparence == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="5"> Extrêmement </label>';
								} else if($apparence == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="5"> Extrêmement </label>';
								} else if($apparence == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4" name="SPsy4"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Avez-vous assez d'argent pour satisfaire vos besoins ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($argent == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="5"> Extrêmement </label>';
								} else if($argent == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="5"> Extrêmement </label>';
								} else if($argent == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="5"> Extrêmement </label>';
								} else if($argent == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="5"> Extrêmement </label>';
								} else if($argent == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3" name="SEnv3"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Avez-vous accès aux informations nécessaires pour votre vie quotidienne ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($acces_info_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4" name="SEnv4"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Avez-vous souvent l'occasion de pratiquer des loisirs ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($pratique_loisir == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5" name="SEnv5"  value="5"> Extrêmement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Comment arrivez-vous à vous déplacer ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($deplacement == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="1" selected> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="5"> Très facilement </label>';
								} else if($deplacement == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="2" selected> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="5"> Très facilement </label>';
								} else if($deplacement == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="3" selected> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="5"> Très facilement </label>';
								} else if($deplacement == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="4" selected> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="5"> Très facilement </label>';
								} else if($deplacement == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="5" selected> Très facilement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4" name="SPhy4"  value="5"> Très facilement </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre sommeil ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($sommeil == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5" name="SPhy5"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre capacité à effectuer les tâches de la vie quotidienne ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($taches_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6" name="SPhy6"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre capacité à effectuer votre activité professionnelle ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($act_pro == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7" name="SPhy7"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de vous ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($vous == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="5"> Très satisfait(e) </label>';
								} else if($vous == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="5"> Très satisfait(e) </label>';
								} else if($vous == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="5"> Très satisfait(e) </label>';
								} else if($vous == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="5"> Très satisfait(e) </label>';
								} else if($vous == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5" name="SPsy5"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de vos relations avec les autres ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($relation == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="5"> Très satisfait(e) </label>';
								} else if($relation == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="5"> Très satisfait(e) </label>';
								} else if($relation == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="5"> Très satisfait(e) </label>';
								} else if($relation == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="5"> Très satisfait(e) </label>';
								} else if($relation == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1" name="SRel1"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre vie sexuelle ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($vie_sexuelle == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2" name="SRel2"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) du soutien de vos amis ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($amis_soutien == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3" name="SRel3"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre lieu de vie ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($lieu_vie == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6" name="SEnv6"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre accès aux services de santé ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($acces_service == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7" name="SEnv7"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Êtes-vous satisfait(e) de votre moyen de transport ?</label>  
								<div class="col-md-8">
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5"> Très satisfait(e) </label>
									<?php 
								if($moyen_transport == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8" name="SEnv8"  value="5"> Très satisfait(e) </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Avez-vous souvent des sentiments négatifs tels que la mélancolie, le désespoir, l'anxiété ou la dépression ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($sentiment_negatif == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="1" selected> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="2" selected> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="3" selected> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="4" selected> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="5" selected> Tout le temps </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6" name="SPsy6"  value="5"> Tout le temps </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								</table>
								</br>
								