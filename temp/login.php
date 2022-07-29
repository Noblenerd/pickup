<?php
	include('ban.php');
?>

<div class="container-fluid bg-light">
	<div class="row">
		<div class="col-sm-12 m-3">
			<h3 align="left">
				Log In
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
						Login to your Account
					</div>
				</li>
				<li class="list-group-item">
					<form method="post" action="">
						
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
							Password:
							<div class="input-group">
								
								<input type="password" name="password" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-key"></span>
								</div>
							</div>
						</div>
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Login <span class="fas fa-download"></span></button></p>
					</form>
					
				</li>
				<li class="list-group-item bg-light text-default">
					Don't have an account? <a href="register.php" class="text-danger"> Register Here </a>
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

