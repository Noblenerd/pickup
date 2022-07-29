<?php
	require('check.php');
	include('banner.php');
?>
<br>

<div class="container">
	<div class="row">

		<div class="col-sm-2">
		
		</div>
		<div class="col-sm-8 mx-0 px-0">
			<ul class="list-group">
				
		<div class="tab-content">
			<div class="tab-pane container" id="tabb1"> 
				<br>
				
						<?php
						
						$result = mysql_query("SELECT * FROM orders WHERE Username='$user' ORDER BY ID DESC") or die(mysql_error());
						while($row = mysql_fetch_array($result)) {
							echo '<li class="list-group-item bg-danger text-white d-flex justify-content-between">
							<h5 class="text-warning">' .$row['Subject'] .'</h5>';
							if($row['Status'] == 'Pending') {
								echo $row['Code'];
							}
							echo '<b class="text-info">' .$row['Status'] .'</b>
						</li><br>';
						}
						$rew = mysql_num_rows($result);
						if($rew<1) {
								echo '<li class="list-group-item bg-danger text-white d-flex justify-content-between">
							<h4 class="text-white"> No Order has been placed yet </h4>
							
						</li><br>';
						}
						?>
						
				
				</div>
				
			<div class="tab-pane container active" id="tabb2"> 
				
				<li class="list-group-item bg-white">
					<?php
					
						$result = mysql_query("SELECT * FROM members WHERE Username='$user'") or die(mysql_error());
						$row = mysql_fetch_array($result);
						echo '<div class="pshow"><div class="d-flex justify-content-between">
						<h3><br><br>
							' .$row['Username'] .'
						</h3>
						<div>
							<img src="' .$row['Image'] .'" height="110px" width="120px" class="rounded-circle border border-danger"><br><br>
							<a href="javascript:void" class="pup"><button class="btn btn-danger"> Update Profile </button></a>
						</div>
					</div>
					<ul class="list-group">
						Full Name
						<li class="list-group-item bg-danger text-white">
							' .$row['Name'] .'
						</li><br>
						E-mail Address
						<li class="list-group-item bg-danger text-white">
							' .$row['Email'] .'
						</li><br>
						Phone Number
						<li class="list-group-item bg-danger text-white">
							' .$row['Phone'] .'
						</li><br>
						Address
						<li class="list-group-item bg-danger text-white">
							' .$row['Address'] .'
						</li><br>
					</ul>
					</div>
					
					
					<div class="pupd"><div class="d-flex justify-content-between">
						<h3><br><br>
							' .$row['Username'] .'
						</h3>
						<div>
							<img src="' .$row['Image'] .'" height="110px" width="120px" class="rounded-circle border border-danger"><br><br>
							<a href="javascript:void" class="psh"><button class="btn btn-danger"> Cancel Update </button></a>
						</div>
					</div>
					
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							Full Name:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="name" value="' .$row['Name'] .'" readonly class="form-control border border-danger bg-danger text-white p-3">
								
							</div>
						</div>
						
						<div class="form-group">
							E-mail Address:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-envelope-open"></span>
								</div>
								<input type="email" name="email" value="' .$row['Email'] .'" class="form-control border border-danger bg-danger text-white p-3">
								
							</div>
						</div>
						
						<div class="form-group">
							Active Phone Number:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-phone"></span>
								</div>
								<input type="tel" name="phonee" value="' .$row['Phone'] .'" class="form-control border border-danger bg-danger text-white p-3">
								
							</div>
						</div>
						
						<div class="form-group">
							Active Address:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-map"></span>
								</div>
								<input type="text" name="address" value="' .$row['Address'] .'" class="form-control border border-danger bg-danger text-white p-3">
								
							</div>
						</div>
						
						<div class="form-group">
							Picture of yourself:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-camera"></span>
								</div>
								<input type="file" name="image" class="form-control border border-danger bg-danger text-white">
								
							</div>
						</div>
						
						<div class="form-group">
							Username:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="username" value="' .$row['Username'] .'" readonly class="form-control border border-danger bg-danger text-white p-3">
								
							</div>
						</div>
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit_upd"> Update <span class="fas fa-cart"></span></button></p>
					</div>';
					
							function check($data) {
								$data = trim($data);
								$data = htmlspecialchars($data);
							return $data;
							}
							
							
							
							if(isset($_POST['submit_upd'])) {
								$name = check($_POST['name']);
							$email = check($_POST['email']);
							$phone = check($_POST['phonee']);
							$address = check($_POST['address']);
							$username = check($_POST['username']);
							//$password = check($_POST['password']);
							
								if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phonee']) || empty($_POST['address']) || empty($_POST['username'])) {
									echo 'You have to fill all entries!';
								}
								
								if(empty($_FILES["image"]["tmp_name"])) {
									mysql_query("UPDATE members SET Phone='$phone',Address='$address' WHERE Username='$user'") or die(mysql_error());    
										
										echo 'Profile Updated!';
										echo '<meta http-equiv="refresh" content="5">';
								}
								else {
									$loc = "images/members/";
									$path = $loc . basename($_FILES['image']['name']);
									
									if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
										
										mysql_query("UPDATE members SET Phone='$phone',Address='$address',Image='$path' WHERE Username='$user'") or die(mysql_error());    
										
										echo 'Profile Updated!';
										echo '<meta http-equiv="refresh" content="5">';
									}
								}
							}
				
				?>
				</li>
			</div>
				
				<div class="tab-pane container" id="tabb3"> 
					<h3 align="center"> Latest Updates </h3><br>
							<?php
							
						$result = mysql_query("SELECT * FROM updates ORDER BY ID DESC") or die(mysql_error());
						while($row = mysql_fetch_array($result)) {
							include('datee.php');
							echo '<li class="list-group-item bg-danger text-white">
								<h3 class="text-warning">' .$row['Title'] .'</h3>';
								if($row['Image']) {
									$filetype = pathinfo($row['Image'], PATHINFO_EXTENSION);
					
									if($filetype == 'mp4') {
										echo '<p align="center"><video src="' .$row['Image'] .'" height="200px" width="80%" controls></video></p>';
									}
									else {
										echo '<p align="center"><img src="' .$row['Image'] .'" height="120px" width="80%"></p>';
									}
									
								}
								echo $row['Content'] .'<br><p align="right"> ' .$d .' ' .$dc .', ' .$dy .' ' .$dh .':' .$di .' </p>
							</li><br>';
						}
						$rew = mysql_num_rows($result);
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
				</div>
				<?php
							
							
							
							
							
							if(isset($_POST['submit_hum'])) {
								$subject = check($_POST['subject']);
								$source = check($_POST['source']);
								$phone = check($_POST['phone']);
								$destination = check($_POST['destination']);
								$weight = check($_POST['weight']);
								$comment = check($_POST['comment']);
								$date = check($_POST['date']);
								$time = check($_POST['time']);
								$daate = $date .' ' .$time;
								$sta = 'Pending';
								$code = uniqid('Mxpick_', FALSE);
							
								if(empty($_POST['subject']) || empty($_POST['source']) || empty($_POST['phone']) || empty($_POST['destination']) || empty($_POST['weight']) || empty($_POST['comment']) || empty($_POST['date']) || empty($_POST['time'])) {
									echo 'You have to fill all entries!';
								}
								else {
									$loc = "images/orders/";
									$path = $loc . basename($_FILES['image']['name']);
									
									$ext = getimagesize($_FILES['image']['tmp_name']);
									if($ext == false) {
										die("Invalid Image. You can only upload an Image!");
									}
									
									else {
										$allowed = array('jpg','png','jpeg');
										if(in_array(strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION)), $allowed)) {
															
											if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
												
												mysql_query("INSERT INTO orders
												VALUES('','$subject','$source','$destination','$phone','$weight','$comment','$daate','$path','$user','$sta','$code',NOW())") or die(mysql_error());    
												
												echo 'Order Received!';
											}
										}
										else {
											echo 'The file you uploaded is not valid. You can only upload png, jpg and jpeg files.';
										}
									}
								}
							}
						?>
				
				
				
		</div>
			
		
				</div>
				<div class="tab-pane container" id="tabb5"> 
					<h3 align="center"> Our Affiliates </h3><br>
							<?php
							
						$result = mysql_query("SELECT * FROM updates ORDER BY ID DESC") or die(mysql_error());
						while($row = mysql_fetch_array($result)) {
							include('datee.php');
							echo '<li class="list-group-item bg-danger text-white" style="width:47%;float:left;">
								<h3 class="text-warning">My biz </h3>';
								if($row['Image']) {
									$filetype = pathinfo($row['Image'], PATHINFO_EXTENSION);
					
									if($filetype == 'mp4') {
										echo '<p align="center"><video src="' .$row['Image'] .'" height="200px" width="80%" controls></video></p>';
									}
									else {
										echo '<p align="center"><img src="' .$row['Image'] .'" height="120px" width="80%"></p>';
									}
									
								}
								echo 'Get cakes and Pasteries <br><p align="center"><button class="btn btn-primary"> Shop Now </button> </p>
							</li>';
						}
						$rew = mysql_num_rows($result);
						if($rew<1) {
								echo '<li class="list-group-item bg-danger text-white d-flex justify-content-between">
							<h4 class="text-white"> No Update yet </h4>
							
						</li><br>';
						}
						?>
							
						
				
				</div>
				
		</div>
			
		</ul>
		
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>