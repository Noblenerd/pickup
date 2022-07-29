<?php
	session_start();
	if(isset($_SESSION['user'])) {
		header("location:dashboard.php");
	}
	include('banner.php');
?>
<br>

<div class="container">
	<div class="row">

		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-6">
			<br><br><ul class="list-group logy">
				<li class="list-group-item bg-danger animated fadeInLeft">
					<h3 align="center" class="text-white">
						Login
					</h3>
				</li>
				<li class="list-group-item">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							Username:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="username" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Password:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-key"></span>
								</div>
								<input type="password" name="password" class="form-control border border-danger">
								
							</div>
						</div>
						
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit_log"> Login <span class="fas fa-cart"></span></button></p>
						<?php
							session_start();
							include('connect.php');
							
							$user = $_POST['username'];
							//$user = mysqli_real_escape_string($user);
							$pass = $_POST['password'];
							//$pass = mysqli_real_escape_string($pass);
							if(isset($_POST['submit_log'])) {
								if(empty($_POST['username']) || empty($_POST['password'])) {
									echo 'You have to fill all entries!';
								}
								else {
							
									$result = mysqli_query($con, "SELECT * FROM members WHERE Username='$user'AND Password='$pass'") or die(mysqli_error($con));
									$rew = mysqli_num_rows($result);
									if($rew<1){
										echo "Invalid username or password. Please try again.";
									}
									else{
										$_SESSION['user'] = $user;
										header("location:dashboard.php");
									}
								}
							}
							
							
						
						?>
					</form>
					
					
				</li>
				<li class="list-group-item bg-light text-default">
					Don't have an account? <a href="javascript:void" class="text-danger regg"> Register Now </a>
				</li>
			</ul><br>
			
			<ul class="list-group regy">
				<li class="list-group-item bg-danger animated fadeInLeft">
					<h3 align="center" class="text-white">
						Register
					</h3>
				</li>
				<li class="list-group-item">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							Full Name:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="name" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							E-mail Address:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-envelope-open"></span>
								</div>
								<input type="email" name="email" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Active Phone Number:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-phone"></span>
								</div>
								<input type="tel" name="phone" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Active Address:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-map"></span>
								</div>
								<input type="text" name="address" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Picture of yourself:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-camera"></span>
								</div>
								<input type="file" name="image" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Username:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="username" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Password:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-key"></span>
								</div>
								<input type="password" name="password" class="form-control border border-danger">
								
							</div>
						</div>
						
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit_reg"> Register <span class="fas fa-cart"></span></button></p>
						<?php
							include('connect.php');
							
							function check($data) {
								$data = trim($data);
								$data = htmlspecialchars($data);
							return $data;
							}
							
							$name = check($_POST['name']);
							$email = check($_POST['email']);
							$phone = check($_POST['phone']);
							$address = check($_POST['address']);
							$username = check($_POST['username']);
							$password = check($_POST['password']);
							
							
							if(isset($_POST['submit_reg'])) {
								if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['username']) || empty($_POST['password'])) {
									echo 'You have to fill all entries!';
								}
								else {
									$loc = "images/members/";
									$path = $loc . basename($_FILES['image']['name']);
									
									if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
										
										mysqli_query($con, "INSERT INTO members
										VALUES('','$name','$email','$phone','$address','$path','$username','$password',NOW())") or die(mysqli_error($con));    
										
										echo 'Congratulations! Registration Successful. Now Login';
									}
								}
							}
						?>
					</form>
					
					
				</li>
				<li class="list-group-item bg-light text-default">
					Already have an account? <a href="javascript:void" class="text-danger logg"> Login </a>
				</li>
			</ul><br>
			
			
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>