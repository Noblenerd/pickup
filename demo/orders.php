<?php
	require('check.php');
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
						Pending Orders
					</h3>
				</li>
				<li class="list-group-item">
					<ul class="list-group">
						<?php
							$sta = 'Pending';
							$result = mysqli_query($con, "SELECT * FROM orders WHERE Status='$sta' ORDER BY ID DESC") or die(mysqli_error($con));
							while($row = mysqli_fetch_array($result)) {
								$uy = $row['Username'];
								echo '<li class="list-group-item bg-danger text-white d-flex justify-content-between">
										<h5 class="text-white">' .$row['Subject'] .'</h5>
										<button class="btn btn-primary" data-toggle="collapse" data-target="#self' .$row['ID'] .'"> Expand </button>
										 <form method="post" action="">
										 <input type="hidden" name="title" value="' .$row['Subject'] .'">
										 <button class="btn btn-primary" type="submit" name="finalize"> Finalize </button></form>
								</li>';
								if(isset($_POST['finalize'])) {
									$stu = 'Completed';
									$title = $_POST['title'];
									mysqli_query($con, "UPDATE orders SET Status='$stu' WHERE Subject='$title'") or die(mysqli_error($con));
									echo 'Updated';
								}
								
								echo '<li class="list-group-item bg-white collapse" id="self' .$row['ID'] .'">
										<ul class="list-group">
											Subject
											<li class="list-group-item bg-danger text-white">
												' .$row['Subject'] .'
											</li><br>
											Source
											<li class="list-group-item bg-danger text-white">
												' .$row['Source'] .'
											</li><br>
											Destination
											<li class="list-group-item bg-danger text-white">
												' .$row['Destination'] .'
											</li><br>
											Phone Number
											<li class="list-group-item bg-danger text-white">
												' .$row['Phone'] .'
											</li><br>
											Weight/Number of Persons
											<li class="list-group-item bg-danger text-white">
												' .$row['Weight'] .'
											</li><br>
											Delivery Time
											<li class="list-group-item bg-danger text-white">
												' .$row['Delivery'] .'
											</li><br>
											Snapshot of Package
											<li class="list-group-item bg-danger text-white">
												<p align="center"><img src="' .$row['Image'] .'" height="100px" width="150px"></p>
											</li><br>
											Comment
											<li class="list-group-item bg-danger text-white">
												' .$row['Comment'] .'
											</li><br>';
											$rt = mysqli_query($con, "SELECT * FROM members WHERE Username='$uy'");
											$rot = mysqli_fetch_array($rt);
											$nut = $rot['Phone'];
											echo 'Client
											<li class="list-group-item bg-danger text-white">
												' .$row['Username'] .' - ' .$nut .'
											</li><br>
											Confirmation Code
											<li class="list-group-item bg-danger text-white">
												' .$row['Code'] .'
											</li><br>
										</ul>
													
								</li><br>';
							}
							$rew = mysqli_num_rows($result);
							if($rew<1) {
									echo '<li class="list-group-item bg-danger text-white d-flex justify-content-between">
								<h4 class="text-white"> No Pending Order at the moment </h4>
								
							</li><br>';
							}
						?>
						
					</ul>
					
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