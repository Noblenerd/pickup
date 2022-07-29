<?php
	include('banner.php');
?>
<br>

<div class="container">
	<div class="row">

		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-6">
			<?php
		include('connect.php');
			
			$result = mysql_query("SELECT * FROM orders ORDER BY ID DESC") or die(mysql_error());
			$row = mysql_fetch_array($result);
		echo '
			<ul class="list-group">
				<li class="list-group-item bg-danger d-flex justify-content-between">
					<span class="fas fa-arrow-left text-white" style="font-size:25px;"></span>
					<h3 align="center" class="text-white">
						FULL ORDER OF ' .$row['Name'] .'
					</h3>
				</li>
				<li class="list-group-item">
					
						<div class="form-group">
							<b> Name: </b><br>
							' .$row['Name'] .'
							
						</div>
						<div class="form-group">
							<b> E-mail: </b><br>
							' .$row['Email'] .'
							
						</div>
						<div class="form-group">
							<b> Phone Number: </b><br>
							' .$row['Phone'] .'
							
						</div>
						<div class="form-group">
							<b> Delivery Address: </b><br>
							' .$row['Address'] .'
							
						</div>
						<div class="form-group">
							<b> Additional Comment: </b><br>
							' .$row['Comment'] .'
							
						</div>
						<div class="form-group">
							<b> Payment Method: </b><br>
							' .$row['Payment'] .'
							
						</div>
						<div class="form-group">
							<b> Product: </b><br>
							' .$row['Product'] .'
							
						</div>
						<div class="form-group">
							<b> Price: </b><br>
							' .$row['Price'] .'
							
						</div>
						<div class="form-group">
							<b> Delivery Date: </b><br>
							' .$row['Delivery_date'] .'
							
						</div>';
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