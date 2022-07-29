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
		
		<div class="col-sm-4">
			<h3 align="center" style="color:gold;">
				About Us
			</h3>
			<p align="justify">
				The truth is that we fight everyday for what we believe in, for what we desire even for what we want/need. It just doesn't come easy or on a platter of gold. And sometimes we lose people; family, friends, allies.... We lose memories, joyful moments, irreplaceable treasures and sometimes we even lose ourselves in the process, which sets us of course. <br><br>
			</p>	
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
		