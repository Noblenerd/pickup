<?php
	//require('check.php');
	include('banner.php');
	
?>
<br>

<div class="container-fluid">
	<div class="row">

		<div class="col-sm-1">
		
		</div>
		<div class="col-sm-10 mx-0 px-0">
			
				
			
		<div class="tab-content">
			<div class="tab-pane container" id="tabb1"> 
			
				<li class="list-group-item bg-white">
					<ul class="list-group">
						<h4 align="center"> About Mx Pickup </h4>
						
						<p align="justify">
						Welcome to Mx Pickup! We offer pickup services around the city of Minna. One job is simple: Pickup required package and deliver to the designated location. <br><br>
Our services cover two major categories:<br>
<li>	Item Pickup </li><br>
<li>	Human Pickup </li><br>
The Item Pickup deals with transporting inanimate items from goods to documents to food items to parcels and so on. In this category, you get to specify the estimated weight of the item. <br><br>
The human Pickup entails moving person(s) from one location of choice to another within Minna. Here, you get to specify the number of person(s) to be transported. <br><br>
For each order, you will be required to provide a contact person’s phone number i.e. someone we can connect to at the source address to relay the package to us. <br><br>
Furthermore, a confirmation code will be required from the contact person – the code will be given after successfully placing an order with us. <br><br>
The whole process is made possible using our user friendly Web Application. So from the comfort of your mobile phone or internet-enabled gadgets, you can initiate our services from anywhere around the world and we would deliver as expected. Measures are in place to ensure that your package(s) are secured and would be delivered to appropriate destinations. <br><br>
With our team of competent individuals, timely delivery is guaranteed plus a top notch service meeting all your requirements.<br><br>
Our primary aim is to bridge the gap between inhabitants of the city; both individuals and entrepreneurs alike and means of transportation.

						</p>
					</ul>
					
				</li>
			
				</div>
				
			
				
				<div class="tab-pane container active" id="tabb3"> 
					<br>
						
							<?php
							
						$result = mysqli_query($con, "SELECT * FROM updates ORDER BY ID DESC") or die(mysqli_error($con));
						while($row = mysqli_fetch_array($result)) {
							include('datee.php');
							echo '<div class="bg-danger text-white p-2 rounded">
								<h3 class="text-warning">' .$row['Title'] .'</h3>';
								if($row['Image']) {
									$filetype = pathinfo($row['Image'], PATHINFO_EXTENSION);
					
									if($filetype == 'mp4') {
										echo '<p align="center"><video src="' .$row['Image'] .'" height="300px" width="95%" controls></video></p>';
									}
									else {
										echo '<p align="center"><img src="' .$row['Image'] .'" height="120px" width="80%"></p>';
									}
									
								}
								echo $row['Content'] .'<br><br><p align="right" style="color:gold;"> ' .$d .' ' .$dc .', ' .$dy .' ' .$dh .':' .$di .' </p>
							</div><br>';
						}
						$rew = mysqli_num_rows($result);
						if($rew<1) {
								echo '<li class="list-group-item bg-danger text-white d-flex justify-content-between">
							<h4 class="text-white"> No Update yet </h4>
							
						</li><br>';
						}
						?>
							
						
						
					
				
				</div>
				
				<div class="tab-pane container" id="tabb4"> 
					
						<br><br>
				<ul class="list-group mx-0 px-0">
				<li align="center" class="list-group-item bg-danger mx-0 px-0">
					
					<ul class="nav nav-tabs w-100">
						<li class="nav-item w-50"> 
							<a href="#tabbb1" data-toggle="tab" class="nav-link active text-warning">
								Items
							</a>
						</li>
						<li class="nav-item w-50"> 
							<a href="#tabbb2" data-toggle="tab" class="nav-link text-warning">
								Humans
							</a>
						</li>
						
						
					</ul>
					
				</li>
			</ul>
		<div class="tab-content">
			<div class="tab-pane container active mx-0 px-0" id="tabbb1"> 
			
				<div class="list-group-item bg-white mx-0 px-2">
					<ul class="list-group">
						<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							Request Title:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-marker"></span>
								</div>
								<input type="text" name="subject" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Location (Source):
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-map"></span>
								</div>
								<input type="text" name="source" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Location (Destination):
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-map"></span>
								</div>
								<input type="text" name="destination" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Contact person's Number:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-phone"></span>
								</div>
								<input type="tel" name="phone" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Package weight:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-key"></span>
								</div>
								<select size="1" name="weight" class="form-control border border-danger">
									<option class="bg-danger text-white"> 0 - 20kg </option>
									<option class="bg-danger text-white"> 21 - 50kg </option>
									<option class="bg-danger text-white"> Above 50kg </option>
								</select>
								
							</div>
						</div>
						
						<div class="form-group">
							Snapshot of Package:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-camera"></span>
								</div>
								<input type="file" name="image" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
								<label> Date/Time to Initiate Delivery: </label><br>
								<div class="input-group">
									
									<div class="input-group-prepend">
										<span class="input-group-text fas fa-calendar bg-danger text-white"></span>
									</div>
									<input type="date" class="form-control border border-danger" name="date" placeholder="Enter date of Delivery">
								
									<div class="input-group-prepend">
										<span class="input-group-text fas fa-clock bg-danger text-white"></span>
									</div>
									<input type="time" class="form-control border border-danger" name="time" placeholder="Enter Time of Delivery">
								</div>
							</div>
							
						<div class="form-group">
							Comment:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-comment"></span>
								</div>
								<textarea rows="3" name="comment" class="form-control border border-danger"></textarea>
								
							</div>
						</div>
						
						
						<p align="right"><button class="btn btn-danger btn-lg" type="button" name="submit_hum" onclick='coming()'> Request <span class="fas fa-send"></span></button></p>
						
					</form><br>
					</ul>
					
				</div>
			
				</div>
				
				<div class="tab-pane container mx-0 px-0" id="tabbb2"> 
				
					<div class="list-group-item bg-white mx-0 px-2">
						<ul class="list-group">
							<form method="post" action="" enctype="multipart/form-data">
								<div class="form-group">
									Request Title:
									<div class="input-group">
										<div class="input-group-text bg-danger text-white">
											<span class="fas fa-marker"></span>
										</div>
										<input type="text" name="subject" class="form-control border border-danger">
										
									</div>
								</div>
								
								<div class="form-group">
									Location (Source):
									<div class="input-group">
										<div class="input-group-text bg-danger text-white">
											<span class="fas fa-map"></span>
										</div>
										<input type="text" name="source" class="form-control border border-danger">
										
									</div>
								</div>
							
							<div class="form-group">
								Location (Destination):
								<div class="input-group">
									<div class="input-group-text bg-danger text-white">
										<span class="fas fa-map"></span>
									</div>
									<input type="text" name="destination" class="form-control border border-danger">
									
								</div>
							</div>
							
							<div class="form-group">
								Contact person's Number:
								<div class="input-group">
									<div class="input-group-text bg-danger text-white">
										<span class="fas fa-phone"></span>
									</div>
									<input type="tel" name="phone" class="form-control border border-danger">
									
								</div>
							</div>
							
							<div class="form-group">
								Number of Persons:
								<div class="input-group">
									<div class="input-group-text bg-danger text-white">
										<span class="fas fa-key"></span>
									</div>
									<select size="1" name="weight" class="form-control border border-danger">
										<option class="bg-danger text-white"> 1 </option>
										<option class="bg-danger text-white"> 2 </option>
										<option class="bg-danger text-white"> 3 </option>
										<option class="bg-danger text-white"> 4 </option>
										<option class="bg-danger text-white"> 5 </option>
										<option class="bg-danger text-white"> 6 </option>
										<option class="bg-danger text-white"> 7 </option>
										<option class="bg-danger text-white"> Above 7 </option>
									</select>
									
								</div>
							</div>
							
							<div class="form-group">
							Snapshot of Package:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-camera"></span>
								</div>
								<input type="file" name="image" class="form-control border border-danger">
								
							</div>
						</div>
						
							<div class="form-group">
									<label> Date/Time to Initiate Delivery: </label><br>
									<div class="input-group">
										
										<div class="input-group-prepend">
											<span class="input-group-text fas fa-calendar bg-danger text-white"></span>
										</div>
										<input type="date" class="form-control border border-danger" name="date" placeholder="Enter date of Delivery">
									
										<div class="input-group-prepend">
											<span class="input-group-text fas fa-clock bg-danger text-white"></span>
										</div>
										<input type="time" class="form-control border border-danger" name="time" placeholder="Enter Time of Delivery">
									</div>
								</div>
								-
							<div class="form-group">
								Comment:
								<div class="input-group">
									<div class="input-group-text bg-danger text-white">
										<span class="fas fa-comment"></span>
									</div>
									<textarea rows="3" name="comment" class="form-control border border-danger"></textarea>
									
								</div>
							</div>
							
							
							<p align="right"><button class="btn btn-danger btn-lg" type="button" name="submit_hum" onclick='coming()'> Request <span class="fas fa-send"></span></button></p>
							
						</form><br>
						</ul>
						
					</div>
						<script>
							function coming() {
								alert('Coming soon! Read the About us Tab.');
							}
						
						</script>
			
				</div>
				
				
				
		</div>
			
		</ul>
					</li>
				</div>
				
		</div>
			
		</ul>
		
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>