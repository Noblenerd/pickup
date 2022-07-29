<?php
	include('ban.php');
?>

<div class="container-fluid bg-light">
	<div class="row">
		<div class="col-sm-12 m-3">
			<h3 align="left">
				Contact Us
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
						Drop us a Message
					</div>
				</li>
				<li class="list-group-item">
					<form method="post" action="">
						
						<div class="col-md-6">
							<div class="form-group">
								Name:
								<div class="input-group">
									
									<input type="text" name="name" class="form-control">
									<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
								E-mail:
								<div class="input-group">
									
									<input type="email" name="email" class="form-control">
									<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								Message:
								<div class="input-group">
									
									<textarea rows="6" name="message" class="form-control">	
											
										</textarea>
								</div>
							</div>
						</div>
						
						<p align="left"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Send message <span class="fas fa-envelope"></span></button></p>
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

