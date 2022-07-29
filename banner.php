<!DOCTYPE html>
<html lang="en">
<head>
  <title> MX Pickup </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
  
  <style>
	.men {
  display: block;
  position: fixed;
  bottom: 0px;
  right: 0px;
  width: 100%;
  height: 60px;
  //border-radius: 50%;
  background: red;
  color: #fff;
  text-align: center;
  font-size: 16x;
  z-index:20;
}
	.men_desk {
			display:none;
		}
	.naty input[type="radio"] {
		visibility: hidden;
		
	}
	.naty input[type="radio"] + label {
		cursor: pointer;
		color:white;
		
	}
	.naty input[type="radio"]:checked + label{
		
		color: red;
	}
	.formy {
		width:47%;
		padding:9px;
		float:left;
	}
	@media screen AND (min-width: 550px) {
		.formy {
			width:31%;
			padding:9px;
		}
		.wr {
			border-right: 2px groove white;
		}
		.men {
			display:none;
		}
		.men_desk {
			display:block;
		}
	}
  </style>
  <script>
    new WOW().init();
  </script>
	<script>
		$('document').ready(function() {
			$('.search-form').hide();
			$('.logy').show();
			$('.regy').hide();
			$('.pshow').show();
			$('.pupd').hide();
			$('.serv_5').hide();
			$('.serv_6').hide();
			$('.serv_7').hide();
			$('.sec_2').hide();
			
			$('.search-icon').click(function() {
				$('.search-form').toggle();
			})
			$('.regg').click(function() {
				$('.logy').toggle();
				$('.regy').toggle();
			})
			
			$('.logg').click(function() {
				$('.logy').toggle();
				$('.regy').toggle();
			})
			$('.pup').click(function() {
				$('.pshow').toggle();
				$('.pupd').toggle();
			})
			$('.psh').click(function() {
				$('.pshow').toggle();
				$('.pupd').toggle();
			})
			
		});
	</script>
  </head>
<body class="bg-light">


<section class="bg-danger">
	
	
	<nav class="navbar navbar-expand-sm d-flex justify-content-between text-white navbar-light bg-danger">
	<div class="navbar-brand ml-5">
		<a href="index.php" style="text-decoration:none;">	
			<h1 class="text-white animated fadeInLeft"> MX PICKUP </h1>
		</a>
	</div>
	
	<?php
		if(isset($_SESSION['user'])) {
			echo '<a href="logout.php"><button class="btn btn-primary border border-danger"> Logout </button></a>';
		}
	?>
</nav>

<ul align="center" class="men_desk nav nav-tabs w-100 d-flex justify-content-between">
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
		
</section>
			