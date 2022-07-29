<?php
	include('ban.php');
?>

<div class="container-fluid bg-light">
	<div class="row">
		<div class="col-sm-12 m-3">
			<h3 align="left">
				Post Property Request
			</h3>
		</div>
	</div>
</div><br><br>

<div class="container bg-white">
	<div class="row">

		<div class="col-sm-12">
			<ul class="list-group">
				<li class="list-group-item bg-light">
					<div>
						Request Details
					</div>
				</li>
				<li class="list-group-item">
					<form method="post" action="req.php">
						<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								Category:
								<div class="input-group">
									
									<select name="category" size="1" class="form-control">	
											<option> For Rent </option>
											<option> For Sale </option>
											<option> Joint Venture </option>
											<option> Short Let </option>
										</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								Type:
								<div class="input-group">
									
									<select name="type" size="1" class="form-control">	
											<option> Flat </option>
											<option> Land </option>
											<option> House </option>
											<option> Commercial Property </option>
										</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								Subtype:
								<div class="input-group">
									
									<select name="subtype" size="1" class="form-control">	
											<option> Subtype </option>
											
										</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								State:
								<div class="input-group">
									
									<select name="location" size="1" class="form-control">	
											<option> Select a State </option>
											<option>ABUJA FCT</option>
<option>ABIA</option>
<option>ADAMAWA</option>
<option>AKWA IBOM</option>
<option>ANAMBRA</option>
<option>BAUCHI</option>
<option>BAYELSA</option>
<option>BENUE</option>
<option>BORNO</option>
<option>CROSS RIVER</option>
<option>DELTA</option>
<option>EBONYI</option>
<option>EDO</option>
<option>EKITI</option>
<option>ENUGU</option>
<option>GOMBE</option>
<option>IMO</option>
<option>JIGAWA</option>
<option>KADUNA</option>
<option>KANO</option>
<option>KATSINA</option>
<option>KEBBI</option>
<option>KOGI</option>
<option>KWARA</option>
<option>LAGOS</option>
<option>NASSARAWA</option>
<option>NIGER</option>
<option>OGUN</option>
<option>ONDO</option>
<option>OSUN</option>
<option>OYO</option>
<option>PLATEAU</option>
<option>RIVERS</option>
<option>SOKOTO</option>
<option>TARABA</option>
<option>YOBE</option>
<option>ZAMFARA</option>
										</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								Locality (Optional):
								<div class="input-group">
									
									<input type="text" name="locality" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								Area (Optional):
								<div class="input-group">
									
									<input type="text" name="area" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								Bedrooms:
								<div class="input-group">
									
									<select name="bedroom" size="1" class="form-control">	
											<option> 1 </option>
											<option> 2 </option>
											<option> 3 </option>
											<option> 4 </option>
											<option> 5 </option>
											<option> 6 </option>
											<option> 7 </option>
											<option> 8 </option>
										</select>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								Budget:
								<div class="input-group">
									<div class="input-group-text">
									<span>N</span>
								</div>
									<input type="text" name="budget" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							
						</div>
						<div class="col-md-12">
							<div class="form-group">
								Comments:
								<div class="input-group">
									
									<textarea rows="6" name="comment" class="form-control">	
											
										</textarea>
								</div>
							</div>
						</div> <hr>
						
						<div class="col-md-7">
							<div class="form-group">
								Name:
								<div class="input-group">
									
									<input type="text" name="name" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="col-md-5">
							<div class="form-group">
								I am a/an:
								<div class="input-group">
									
									<select name="account" size="1" class="form-control">	
											<option> Individual </option>
											<option> Agent </option>
											<option> Developer </option>
											
										</select>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								E-mail:
								<div class="input-group">
									
									<input type="email" name="email" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								Phone Number:
								<div class="input-group">
									
									<input type="tel" name="phone" class="form-control">
								</div>
							</div>
						</div>
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Post Request <span class="fas fa-download"></span></button></p>
						
					</form>
					
				</li>
				
			</ul><br>
			
			
		</div>
	</div>
</div><br>
			
<?php
	include('footer.php');
?>

