<br>
<div align="center" class="container-fluid" style="background-repeat:no-repeat;background-position:center center;background-size:cover;">
		<div class="row">
			<div align="center" class="col-sm-12 p-3 bg-danger">
				&copy Copyright <?php echo date("Y"); ?> All Rights Reserved 
			</div>
		</div>
</div>	
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
