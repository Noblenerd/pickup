<?php
	include('banner.php');
?>
<br>

<div class="container">
	<div class="row">

		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-6">
			<br><br><ul class="list-group">
				<li class="list-group-item bg-danger animated fadeInLeft">
					<h3 align="center" class="text-white">
						Post Update
					</h3>
				</li>
				<li class="list-group-item">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							Title:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="title" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Image:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-camera"></span>
								</div>
								<input type="file" name="image" class="form-control border border-danger">
								
							</div>
						</div>
						
						<div class="form-group">
							Content:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-comment"></span>
								</div>
								<textarea rows="4" name="comment" class="form-control border border-danger"></textarea>
								
							</div>
						</div>
						
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Upload <span class="fas fa-cart"></span></button></p>
						<?php
							include('connect.php');
							
							function check($data) {
								$data = trim($data);
								$data = htmlspecialchars($data);
							return $data;
							}
							
							$title = check($_POST['title']);
							$comment = check($_POST['comment']);
							
							if(isset($_POST['submit'])) {
								if(empty($_POST['title']) || empty($_POST['comment'])) {
									echo 'You have to fill all entries!';
								}
								if(empty($_FILES["image"]["tmp_name"])) {
									mysqli_query($con, "INSERT INTO updates
										VALUES('','$title','','$comment',NOW())") or die(mysqli_error($con));    
										echo 'Update Successful!';
								}
								
								else {
									$loc = "images/members/";
									$path = $loc . basename($_FILES['image']['name']);
									
									if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {
										
										mysqli_query($con, "INSERT INTO updates
										VALUES('','$title','$path','$comment',NOW())") or die(mysqli_error($con));    
										
										echo 'Update Successful!';
									}
								}
							}
						?>
					</form>
					
					
				</li>
				
			</ul><br>
			
			
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>