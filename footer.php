<br>
<div align="center" class="container-fluid mb-5" style="background-repeat:no-repeat;background-position:center center;background-size:cover;">
		<div class="row">
			<div align="center" class="col-sm-12 p-3 bg-danger">
				&copy Copyright <?php echo date("Y"); ?> All Rights Reserved 
			</div>
		</div>
</div>	
<ul align="center" class="men nav nav-tabs w-100 d-flex justify-content-between">
							<li class="nav-item w-20"> 
							<a href="#tabb1" data-toggle="tab" class="nav-link text-warning">
								<span class="fas fa-star"></span><br>History
							</a>
						</li>
						<li class="nav-item w-20"> 
							<a href="#tabb2" data-toggle="tab" class="nav-link active text-warning">
								<span class="fas fa-star"></span><br>Profile
							</a>
						</li>
						<li class="nav-item w-20"> 
							<a href="#tabb5" data-toggle="tab" class="nav-link text-warning">
								<span class="fas fa-star"></span><br>Affiliates
							</a>
						</li>
						<li class="nav-item w-20"> 
							<a href="#tabb3" data-toggle="tab" class="nav-link text-warning">
								<span class="fas fa-star"></span><br>Updates
							</a>
						</li>
						<li class="nav-item w-20"> 
							<a href="#tabb4" data-toggle="tab" class="nav-link text-warning">
								<span class="fas fa-star"></span><br>Request
							</a>
						</li>
						
					</ul>
<script src="js/owl.carousel.min.js"></script>
		<script>
			$('.owl-carousel').owlCarousel({
				loop:true,
				lazyLoad: true,
				margin: 5,
				autoplay: true,
				animateIn: 'flipIn',
				animateOut: 'zoom',
				responsive: {
					0: {
						items: 2,
					},
					450: {
						items: 3,
					},
					650: {
						items: 7,
					},
				},
			});
		</script>
