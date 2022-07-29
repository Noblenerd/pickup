<?php
	include('banner.php');
?>
<br>

<div class="container">
	<div class="row">

		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-6">
			<ul class="list-group">
				<li class="list-group-item bg-danger">
					<h3 align="center" class="text-white">
						Upload New Meal
					</h3>
				</li>
				<li class="list-group-item">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							Name:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="name" class="form-control">
								
							</div>
						</div>
						
						<div class="form-group">
							Price:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="price" class="form-control">
								
							</div>
						</div>
						
						
						
						<div class="form-group">
							Images (4):
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="file" name="image" class="form-control">
								
							</div>
						</div>
						
						<div class="form-group">
							Description:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<textarea rows="5" name="description" class="form-control"></textarea>
								
							</div>
						</div>
						
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Upload <span class="fas fa-cart"></span></button></p>
						
					</form>
					
					<?php
						include('connect.php');
						
						function check($data) {
							$data = trim($data);
							$data = htmlspecialchars($data);
						return $data;
						}
						
						$name = check($_POST['name']);
						$price = check($_POST['price']);
						$description = check($_POST['description']);
						
						if(isset($_POST['submit'])) {
							if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['description'])) {
								echo 'You have to fill all entries!';
							}
							else {
								$loc = "images/meals/";
                    			$path = $loc . basename($_FILES['image']['name']);
                    			
                    			if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
                    			    
                    			    mysql_query("INSERT INTO posts
									VALUES('','$name','$path','$description','$price',NOW())") or die(mysql_error());    
									
									echo 'Added Successfully';
                                }
							}
						}
					?>
				</li>
				<li class="list-group-item bg-light text-default">
					Already have an account? <a href="login.php" class="text-danger"> Login Here </a>
				</li>
			</ul><br>
			
			
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>