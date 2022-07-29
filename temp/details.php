<?php
	include('banner.php');
?>
<br>
<div class="row">
		<div align="center" class="col-sm-12">
			<h3 align="left">
				Favourite Dishes
			</h3>
			
		</div>
	</div><br>
<div class="owl-carousel owl-theme">
		
		<div class="item">
			<div class="card">
				<img data-src="images/meal5.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal6.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal7.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal1.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal2.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal3.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal4.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal5.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
		<div class="item">
			<div class="card">
				<img data-src="images/meal7.jpg" class="card-img-top owl-lazy" height="190px">
				
			</div>
		</div>
	</div>
		
		
<div class="container">
	<div class="row">
		<div align="center" class="col-sm-12">
			<?php
			include('connect.php');
			$id = $_GET['id'];
			$result = mysql_query("SELECT * FROM posts WHERE ID='$id'") or die(mysql_error());
			$row = mysql_fetch_array($result);
				echo '<ul class="list-group">
			<li class="list-group-item bg-danger">
					<h3 align="center" class="text-white">
						' .$row['Name'] .'
					</h3>
				</li>
			</ul>
			
		</div>
	</div><br>
	<div align="center" class="row">
		<div align="center" align="justify" class="col-sm-6 animated fadeInLeft">
			<img src="' .$row['Image'] .'" height="200px" width="100%"><br><br>
			<img src="' .$row['Image'] .'" height="100px" width="24%">
			<img src="' .$row['Image'] .'" height="100px" width="24%">
			<img src="' .$row['Image'] .'" height="100px" width="24%">
			<img src="' .$row['Image'] .'" height="100px" width="24%">
		</div>
		
		<div align="center" align="justify" class="col-sm-6 animated fadeInRight"> 
					<h3 class="text-danger p-3"> Description </h3>		
					
					<p align="justify" class="text-default">
					' .nl2br($row['Description']) .'
					</p>
					<h4 class="text-danger p-3">₦' .$row['Price'] .'.00</h4> <br>
				
					<div class="btn-group">
						<a href="checkout.php?id=' .$row['ID'] .'"><button class="btn btn-success btn-lg"> Continue </button></a>
						
					</div><br><br>';
					
					?>
					
					
				
				
			
		</div>
		
		
	</div>
</div><br>
		

	
	
	<div class="container-fluid bg-danger">
		<div class="row">
			<div class="col-md-12" align="center">
				<h2 align="center" class="text-white m-3">
					Are you an Agent or Developer? List your properties for Free.
					<button class="btn btn-outline-primary"> Register Now </button>
				</h2>
			</div>
		</div>
	</div>
	
	
		<?php
		include('footer.php');
	?>