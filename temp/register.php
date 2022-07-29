<?php
	include('ban.php');
?>

<div class="container-fluid bg-light">
	<div class="row">
		<div class="col-sm-12 m-3">
			<h3 align="left">
				Register
			</h3>
		</div>
	</div>
</div><br><br>

<div class="container bg-white">
	<div class="row">
		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-6">
			<ul class="list-group">
				<li class="list-group-item bg-light">
					<div>
						Create your own Account
					</div>
				</li>
				<li class="list-group-item">
					<form method="post" action="reg.php">
						<div class="form-group">
							Name:
							<div class="input-group">
								
								<input type="text" name="name" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							Username:
							<div class="input-group">
								
								<input type="text" name="username" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							Email:
							<div class="input-group">
								
								<input type="email" name="email" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							Password:
							<div class="input-group">
								
								<input type="password" name="password" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-key"></span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							Confirm Password:
							<div class="input-group">
								
								<input type="password" name="cpassword" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-key"></span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							Account Type:<br><br>
							
								<input type="radio" name="account" value="Individual" class=""> Individual
								<input type="radio" name="account" value="Property Owner" class=""> Property Owner <br><br>
								
								<input type="radio" name="account" value="Estate Agent" class=""> Estate Agent
								<input type="radio" name="account" value="Property Developer" class=""> Property Developer
							
						</div>
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Register <span class="fas fa-download"></span></button></p>
						By registering you accept our Terms of Use and Privacy and agree that we and our selected partners may contact you with relevant offers and services.
					</form>
					
				</li>
				<li class="list-group-item bg-light text-default">
					Already have an account? <a href="login.php" class="text-danger"> Login Here </a>
				</li>
			</ul><br>
			
			<ul class="list-group">
				<li class="list-group-item bg-info">
					<div align="center">
						Need Help? Contact Us <br>
						
						<span class="fab fa-whatsapp"></span> Whatsapp: +234807854223 <br>
						<span class="fas fa-envelope"></span> Email: info@properties.com <br>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div><br>
			
<?php
	include('footer.php');
?>

