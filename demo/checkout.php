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
						Checkout
					</h3>
				</li>
				<li class="list-group-item">
					<form method="post" action="">
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
							E-mail:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="email" name="email" class="form-control">
								
							</div>
						</div>
						
						<div class="form-group">
							Phone Number:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="tel" name="phone" class="form-control">
								
							</div>
						</div>
						
						<div class="form-group">
							Delivery Address:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<input type="text" name="address" class="form-control">
								
							</div>
						</div>
						
						<div class="form-group">
								<label> Date of Delivery: </label><br>
								<div class="input-group">
									
									<div class="input-group-prepend">
										<span class="input-group-text fas fa-calendar"></span>
									</div>
									<input type="date" class="form-control" name="date" placeholder="Enter date of Delivery">
								
									<div class="input-group-prepend">
										<span class="input-group-text fas fa-clock"></span>
									</div>
									<input type="time" class="form-control" name="time" placeholder="Enter Time of Delivery">
								</div>
							</div>
						
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
						
						<div class="form-group">
							Additional Comment:
							<div class="input-group">
								<div class="input-group-text bg-danger text-white">
									<span class="fas fa-user"></span>
								</div>
								<textarea rows="5" name="comment" class="form-control"></textarea>
								
							</div>
						</div>
						
						
						
						<div class="form-group">
							Payment Type:<br><br>
							
								
								<input type="radio" name="payment" value="Online" class=""> Online Payment <br><br>
								<input type="radio" name="payment" value="Pay on Delivery" class=""> Pay on Delivery
								
						</div>
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Checkout <span class="fas fa-cart"></span></button></p>
						
					</form>
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
						$comment = check($_POST['comment']);
						$payment = check($_POST['payment']);
						$date = check($_POST['date']);
						$time = check($_POST['time']);
						$id = check($_POST['id']);
						$daate = $date .' ' .$time;
						if(isset($_POST['submit'])) {
							if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['comment']) || empty($_POST['payment'])) {
								echo 'You have to fill all entries!';
							}
							else {
								$result = mysql_query("SELECT * FROM posts WHERE ID='$id'") or die(mysql_error());
								$row = mysql_fetch_array($result);
								$product = $row['Name'];
								$price = $row['Price'];
								
                    			    mysql_query("INSERT INTO orders
									VALUES('','$name','$email','$phone','$address','$comment','$payment','$product','$price','$daate',NOW())") or die(mysql_error());    
									
									echo 'Order Received! We will contact you Shortly!';
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