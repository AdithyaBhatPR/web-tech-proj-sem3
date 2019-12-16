<?php

session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--fav icon linked -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			background: url('./img/bg4.png') no-repeat center center fixed;
			background-size: cover;
		}

		.flip-card {
			background-color: transparent;
			width: 300px;
			height: 300px;
			perspective: 1000px;
			float: left;
			margin: 2vh;
			margin-left: 15vh;
			margin-top: 5vh;
		}


		.flip-card-inner {
			position: relative;
			width: 100%;
			height: 100%;
			text-align: center;
			transition: transform 0.6s;
			transform-style: preserve-3d;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}

		.flip-card:hover .flip-card-inner {
			transform: rotateY(180deg);
		}

		.flip-card-front,
		.flip-card-back {
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
		}

		.flip-card-front {
			background-color: #bbb;
			color: black;
		}

		.flip-card-back {
			background-color: #2980b9;
			color: white;
			transform: rotateY(180deg);
		}
		 #navbarNav a:hover {
			color: green;
			/* border-bottom: 1px solid yellow;*/
			font-weight:bold;
		}
		#navbarNav a{
			font-weight:bold;
		}
	</style>
</head>

<body>
	<nav class=" navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<i class="fab fa-asymmetrik fa-3x mx-3" style="color: beige;"></i>
		<p
			style="text-align:left; margin-top:10px; margin-left: 10px; font-weight: bold; font-size: 25px; color: white; ">
			ASM
			Services</p>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class=" collapse navbar-collapse" id="navbarNav">
			<div class="mr-auto"></div>
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="faq.php">FAQ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact_page.php">Contact Us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo "Welcome"." ".$_SESSION['username']?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color:grey;">
						<a class="dropdown-item" href="resetpwd.php">Reset Password</a>
						<a class="dropdown-item" href="logout.php">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<h1 style="text-align: center;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;margin: 15vh;">
		Choose
		from the below options</h1>

	<div class="flip-card">
		<div class="flip-card-inner">
			<div class="flip-card-front">
				<img src="./img/Car_Checkup-512.png" alt="Avatar" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
				<br><br>
				<h2>CAR SERVICES</h2>
				<button style="border: 2px solid rgb(213, 213, 228);width: 100px;height:50px;font-weight: bold;font-size:20px;color: white;background-color: rgb(19, 21, 99);">
					<a style="text-decoration:none;" href="servicepg.php">GO</a></button>
			</div>
		</div>
	</div>
	<div class="flip-card">
		<div class="flip-card-inner">
			<div class="flip-card-front">
				<img src="./img/Car_Modification-512.png" alt="Avatar" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
				<br><br>
				<h2>CAR MODIFICATIONS</h2>
				<button style="border: 2px solid rgb(213, 213, 228);width: 100px;height:50px;font-weight: bold;font-size:20px;color: white;background-color: rgb(19, 21, 99);">
					<a style="text-decoration:none;" href="modification.php">GO</a></button>
			</div>
		</div>
	</div>
	<div class="flip-card" style="margin-bottom:10vh">
		<div class="flip-card-inner">
			<div class="flip-card-front">
				<img src="./img/auto_insurance_policy-256.png" alt="Avatar" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
				<br><br>
				<h2>CAR INSURANCE</h2>
				<button style="border: 2px solid rgb(213, 213, 228);width: 100px;height:50px;font-weight: bold;font-size:20px;color: white;background-color: rgb(19, 21, 99);">
					<a style="text-decoration:none;" href="servicepg.php">GO</a></button>
			</div>
		</div>
	</div>

	<!-- js linked -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

</body>

</html>