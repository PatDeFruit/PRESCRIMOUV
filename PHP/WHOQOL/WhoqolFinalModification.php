<h4>Evaluation WHOQOL </h4> 
								<table class="table">
								<tr>
								<td>
								<div class="form-group">
								  <label class="col-md-4 control-label" >Comment évaluez-vous votre qualité de vie ?</label>  
								<div class="col-md-8">
									
									<?php 
								if($eval_qualite_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="1" selected> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="2" selected> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="3" selected> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="4" selected> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="5"> Très bonne </label>';
								} else if($eval_qualite_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="5" selected> Très bonne </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="1"> Très faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="2"> Faible </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="3"> Ni faible ni bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="4"> Bonne </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV1-2" name="QDV1-2"  value="5"> Très bonne </label>';
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
								if($satisfaction_sante2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="5"> Très satisfait(e) </label>';
								} else if($satisfaction_sante2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="QDV2-2" name="QDV2-2"  value="5"> Très satisfait(e) </label>';
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
								if($douleur_physique2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="5"> Extrêmement </label>';
								} else if($douleur_physique2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="5"> Extrêmement </label>';
								} else if($douleur_physique2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="5"> Extrêmement </label>';
								} else if($douleur_physique2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="5"> Extrêmement </label>';
								} else if($douleur_physique2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy1-2" name="SPhy1-2"  value="5"> Extrêmement </label>';
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
								if($traitement_quotidien2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="5"> Extrêmement </label>';
								} else if($traitement_quotidien2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy2-2" name="SPhy2-2"  value="5"> Extrêmement </label>';
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
								if($aimer_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="5"> Extrêmement </label>';
								} else if($aimer_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="5"> Extrêmement </label>';
								} else if($aimer_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="5"> Extrêmement </label>';
								} else if($aimer_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="5"> Extrêmement </label>';
								} else if($aimer_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy1-2" name="SPsy1-2"  value="5"> Extrêmement </label>';
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
								if($sens_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="5"> Extrêmement </label>';
								} else if($sens_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="5"> Extrêmement </label>';
								} else if($sens_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="5"> Extrêmement </label>';
								} else if($sens_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="5"> Extrêmement </label>';
								} else if($sens_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy2-2" name="SPsy2-2"  value="5"> Extrêmement </label>';
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
								if($concentration2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="5"> Extrêmement </label>';
								} else if($concentration2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="5"> Extrêmement </label>';
								} else if($concentration2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="5"> Extrêmement </label>';
								} else if($concentration2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="5"> Extrêmement </label>';
								} else if($concentration2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy3-2" name="SPsy3-2"  value="5"> Extrêmement </label>';
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
								if($securite_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="5"> Extrêmement </label>';
								} else if($securite_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="5"> Extrêmement </label>';
								} else if($securite_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="5"> Extrêmement </label>';
								} else if($securite_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="5"> Extrêmement </label>';
								} else if($securite_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv1-2" name="SEnv1-2"  value="5"> Extrêmement </label>';
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
									<?php 
								if($environnement_sain2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="5"> Extrêmement </label>';
								} else if($environnement_sain2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv2-2" name="SEnv2-2"  value="5"> Extrêmement </label>';
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
								if($energie_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="5"> Extrêmement </label>';
								} else if($energie_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="5"> Extrêmement </label>';
								} else if($energie_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="5"> Extrêmement </label>';
								} else if($energie_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="5"> Extrêmement </label>';
								} else if($energie_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy3-2" name="SPhy3-2"  value="5"> Extrêmement </label>';
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
								if($apparence2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="5"> Extrêmement </label>';
								} else if($apparence2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="5"> Extrêmement </label>';
								} else if($apparence2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="5"> Extrêmement </label>';
								} else if($apparence2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="5"> Extrêmement </label>';
								} else if($apparence2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy4-2" name="SPsy4-2"  value="5"> Extrêmement </label>';
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
								if($argent2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="5"> Extrêmement </label>';
								} else if($argent2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="5"> Extrêmement </label>';
								} else if($argent2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="5"> Extrêmement </label>';
								} else if($argent2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="5"> Extrêmement </label>';
								} else if($argent2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv3-2" name="SEnv3-2"  value="5"> Extrêmement </label>';
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
								if($acces_info_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="5"> Extrêmement </label>';
								} else if($acces_info_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv4-2" name="SEnv4-2"  value="5"> Extrêmement </label>';
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
								if($pratique_loisir2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="1" selected> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="2" selected> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="3" selected> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="4" selected> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="5"> Extrêmement </label>';
								} else if($pratique_loisir2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="5" selected> Extrêmement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="1"> Pas du tout </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="2"> Un peu </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="3"> Modérément </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="4"> Beaucoup </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv5-2" name="SEnv5-2"  value="5"> Extrêmement </label>';
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
								if($deplacement2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="1" selected> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="5"> Très facilement </label>';
								} else if($deplacement2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="2" selected> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="5"> Très facilement </label>';
								} else if($deplacement2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="3" selected> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="5"> Très facilement </label>';
								} else if($deplacement2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="4" selected> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="5"> Très facilement </label>';
								} else if($deplacement2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="5" selected> Très facilement </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="1"> Très difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="2"> Difficilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="3"> Assez facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="4"> Facilement </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy4-2" name="SPhy4-2"  value="5"> Très facilement </label>';
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
								if($sommeil2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($sommeil2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy5-2" name="SPhy5-2"  value="5"> Très satisfait(e) </label>';
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
								if($taches_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="5"> Très satisfait(e) </label>';
								} else if($taches_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy6-2" name="SPhy6-2"  value="5"> Très satisfait(e) </label>';
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
								if($act_pro2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="5"> Très satisfait(e) </label>';
								} else if($act_pro2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPhy7-2" name="SPhy7-2"  value="5"> Très satisfait(e) </label>';
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
								if($vous2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($vous2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($vous2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($vous2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="5"> Très satisfait(e) </label>';
								} else if($vous2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy5-2" name="SPsy5-2"  value="5"> Très satisfait(e) </label>';
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
								if($relation2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="5"> Très satisfait(e) </label>';
								} else if($relation2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="5"> Très satisfait(e) </label>';
								} else if($relation2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="5"> Très satisfait(e) </label>';
								} else if($relation2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="5"> Très satisfait(e) </label>';
								} else if($relation2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel1-2" name="SRel1-2"  value="5"> Très satisfait(e) </label>';
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
								if($vie_sexuelle2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="5"> Très satisfait(e) </label>';
								} else if($vie_sexuelle2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel2-2" name="SRel2-2"  value="5"> Très satisfait(e) </label>';
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
								if($amis_soutien2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="5"> Très satisfait(e) </label>';
								} else if($amis_soutien2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SRel3-2" name="SRel3-2"  value="5"> Très satisfait(e) </label>';
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
								if($lieu_vie2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="5"> Très satisfait(e) </label>';
								} else if($lieu_vie2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv6-2" name="SEnv6-2"  value="5"> Très satisfait(e) </label>';
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
								if($acces_service2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="5"> Très satisfait(e) </label>';
								} else if($acces_service2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv7-2" name="SEnv7-2"  value="5"> Très satisfait(e) </label>';
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
									<?php 
								if($moyen_transport2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="1" selected> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="2" selected> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="3" selected> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="4" selected> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="5"> Très satisfait(e) </label>';
								} else if($moyen_transport2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="5" selected> Très satisfait(e) </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="1"> Très insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="2"> Insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="3"> Ni satisfait(e) ni insatisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="4"> Satisfait(e) </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SEnv8-2" name="SEnv8-2"  value="5"> Très satisfait(e) </label>';
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
								if($sentiment_negatif2 == 1){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="1" selected> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif2 == 2){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="2" selected> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif2 == 3){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="3" selected> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif2 == 4){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="4" selected> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="5"> Tout le temps </label>';
								} else if($sentiment_negatif2 == 5){
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="5" selected> Tout le temps </label>';
								} else {
									echo'<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="1"> Jamais </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="2"> Parfois </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="3"> Assez souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="4"> Très souvent </label>
									<label for="default" class="btn btn-default"><input type="radio" id="SPsy6-2" name="SPsy6-2"  value="5"> Tout le temps </label>';
								}
									?>
								</div>
								</div>
								
								</td>
								</tr>
								</table>
								</br>
								