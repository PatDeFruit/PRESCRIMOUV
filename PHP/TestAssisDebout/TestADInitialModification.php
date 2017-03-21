<h4>Test Assis Debout</h4>
								<table class="table">
								<tr>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="NbRepet1">Nombre de répétitions <span style="color: red">*</span></label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="NbRepet1" name="NbRepet1" value="'.$nbRepet.'" class="form-control input-md"   required="" type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FreqCard1">Fréquence Cardiaque Fin</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FreqCard1" name="FreqCard1" value="'.$FCfinAD.'" class="form-control input-md"    type="number">';
									  ?>
									  </div>
									</div>
									</td>
									<td>
									<!-- Text input-->
									<div class="form-group">
									  <label class="col-md-4 control-label" for="FreqCard2">Fréquence Cardiaque 2 min</label>  
									  <div class="col-md-4">
									  <?php
									  echo'<input id="FreqCard2" name="FreqCard2" value="'.$FC2minAD.'" class="form-control input-md"    type="number">';
									  ?>
									  </div>
									</div>
									</td>
								</tr>
								</table>
								</br>