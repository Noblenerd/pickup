<!DOCTYPE html>
<html lang="en">
<head>
  <title> ADMINISTRATIVE PANEL </title>
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
	}
  </style>
  <script>
    new WOW().init();
  </script>
	<script>
		$('document').ready(function() {
			$('.search-form').hide();
			$('.serv_1').show();
			$('.serv_2').hide();
			$('.serv_3').hide();
			$('.serv_4').hide();
			$('.serv_5').hide();
			$('.serv_6').hide();
			$('.serv_7').hide();
			$('.sec_2').hide();
			
			$('.search-icon').click(function() {
				$('.search-form').toggle();
			})
			$('.sec_0').hover(function() {
				$('.sec_1').hide();
				$('.sec_2').show();
			})
			$('.ser_1').click(function() {
				$('.serv_1').show();
				$('.serv_2').hide();
				$('.serv_3').hide();
				$('.serv_4').hide();
				$('.serv_5').hide();
				$('.serv_6').hide();
				$('.serv_7').hide();
			})
			$('.ser_2').click(function() {
				$('.serv_2').show();
				$('.serv_1').hide();
				$('.serv_3').hide();
				$('.serv_4').hide();
				$('.serv_5').hide();
				$('.serv_6').hide();
				$('.serv_7').hide();
			})
			$('.ser_3').click(function() {
				$('.serv_3').show();
				$('.serv_2').hide();
				$('.serv_1').hide();
				$('.serv_4').hide();
				$('.serv_5').hide();
				$('.serv_6').hide();
				$('.serv_7').hide();
			})
			$('.ser_4').click(function() {
				$('.serv_4').show();
				$('.serv_2').hide();
				$('.serv_3').hide();
				$('.serv_1').hide();
				$('.serv_5').hide();
				$('.serv_6').hide();
				$('.serv_7').hide();
			})
			$('.ser_5').click(function() {
				$('.serv_5').show();
				$('.serv_2').hide();
				$('.serv_3').hide();
				$('.serv_4').hide();
				$('.serv_1').hide();
				$('.serv_6').hide();
				$('.serv_7').hide();
			})
			$('.ser_6').click(function() {
				$('.serv_6').show();
				$('.serv_2').hide();
				$('.serv_3').hide();
				$('.serv_4').hide();
				$('.serv_1').hide();
				$('.serv_5').hide();
				$('.serv_7').hide();
			})
			$('.ser_7').click(function() {
				$('.serv_7').show();
				$('.serv_2').hide();
				$('.serv_3').hide();
				$('.serv_4').hide();
				$('.serv_1').hide();
				$('.serv_6').hide();
				$('.serv_5').hide();
			})
		});
	</script>
  </head>
<body style="color:color:rgb(19, 54, 91);">


<section>
	
	
	<nav class="navbar navbar-expand-sm text-white sticky-top bg-danger">
	<div class="navbar-brand ml-5">
		<a href="index.php">	
			<img src="images/logo.png" height="30px" width="150px" class="">
		</a>
	</div>
	
	
</nav>

<div align="center" class="container-fluid" style="background-image:url('images/55.jpg');background-repeat:no-repeat;background-position:center center;background-size:cover;">
	<div class="row">
		<div class="col-sm-3">
		</div>
		
		<div align="left" class="col-sm-6 animated fadeInRight">
			<br><br><br><br><br>
			
			<ul class="list-group">
				<li class="list-group-item bg-light">
					<div>
						Login to your Account
					</div>
				</li>
				<li class="list-group-item">
					<form method="post" action="dashboard.php">
						
						<div class="form-group">
							Username:
							<div class="input-group">
								
								<input type="text" name="username" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							Password:
							<div class="input-group">
								
								<input type="password" name="password" class="form-control">
								<div class="input-group-text">
									<span class="fas fa-key"></span>
								</div>
							</div>
						</div>
						
						<p align="right"><button class="btn btn-danger btn-lg" type="submit" name="submit"> Login <span class="fas fa-download"></span></button></p>
					</form>
					
				</li>
				
			</ul><br><br><br><br><br>
		</div><br><br>
	</div>
</div>
		
</section>
				