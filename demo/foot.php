<br><div class="container-fluid bg-dark" style="color:white;">
	<br><div class="row">
		<div class="col-sm-4">
			<h3 align="center" style="color:gold;">
				Gallery
			</h3>
			
			<img src="images/meal1.jpg" height="200px" width="100%" class="rounded menty">
			<img src="images/meal2.jpg" height="200px" width="100%" class="rounded menty">
			<img src="images/meal3.jpg" height="200px" width="100%" class="rounded menty">
			<img src="images/meal4.jpg" height="200px" width="100%" class="rounded menty">
			<img src="images/meal5.jpg" height="200px" width="100%" class="rounded menty">
			<img src="images/meal6.jpg" height="200px" width="100%" class="rounded menty">
			<script>
				var slideInde = 0;
				showDiv();
				
				function showDiv() {
					var i;
					var x = document.getElementsByClassName("menty");
					
					
					for(i=0; i<x.length; i++) {
						x[i].style.display = "none";
						}
					slideInde++;
					if(slideInde > x.length) {slideInde = 1}
					x[slideInde-1].style.display = "block";
					setTimeout(showDiv, 7000);
				}
			</script>
		</div>
		<div align="center" class="col-sm-4">
			<h3 align="center" style="color:gold;">
				Important Links
			</h3>
			<div class="row">
				<div class="col-sm-6">
					<ul class="navbar-nav">
						<li class="nav-item"> <a href="index.php" class="nav-link"> Home </a> </li>
						<li class="nav-item"> <a href="about.php" class="nav-link"> About Us </a> </li>
						<li class="nav-item"> <a href="services.php" class="nav-link"> Services </a> </li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul class="navbar-nav">
						<li class="nav-item"> <a href="request.php" class="nav-link"> Request Quote </a> </li>
						<li class="nav-item"> <a href="gallery.php?id=1" class="nav-link"> Gallery </a> </li>
						<li class="nav-item"> <a href="contact.php" class="nav-link"> Contact Us </a> </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<h3 align="center" style="color:gold;">
				Contact Us
			</h3>
			<address align="justify">
				No. 4, High Flyers Estate, <br>
				Minna, <br>
				Niger State, <br>
				Nigeria.<br>
			</address>
			<span class="fas fa-envelope"></span> info@ral.com <br><br>
			<span class="fas fa-phone"></span> +234 803 590 5339 <br><br>
			<span class="fab fa-facebook rounded-circle" style="font-size:35px;"></span>
			<span class="fab fa-facebook rounded-circle" style="font-size:35px;"></span>
			<span class="fab fa-facebook rounded-circle" style="font-size:35px;"></span>
			<span class="fab fa-facebook rounded-circle" style="font-size:35px;"></span>
		</div>
	</div>
	<div class="row">
		<div align="center" class="col-sm-8 offset-2">
			<label>
				Powered by: Divine Creations <br>
				&copy copyright <?php echo date("Y"); ?>
			</label>
		</div>
	</div>
</div>
		