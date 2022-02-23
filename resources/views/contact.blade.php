<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>JNTO</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/contact.css">
		<link rel="stylesheet" href="css/base.css">
	</head>
	<body class="container-fuild">
		<header>
			<div class="container text-right">
				<div class="pt-5 d-flex justify-content-between">
					<div>
						<img src="/images/headerlogo.png" alt="">
					</div>
					<div class='text-right'>
						<h1>JAPAN</h1>
						<h2>3D VIRTURAL<br>
							TRAVEL expo</h2>
						<button class="myBtn mt-3">
							March 16, 2022 <br>
							11AP - 7PM EST
						</button>
					</div>
					
				</div>
			</div>
		</header>
		@include('nav')
			<div class="container main-content">
				<h3 class='mt-5 mb-3'>For enquiry about the Japan 3D Virtual Travel Expo, please email to Info@japantravelexpo.ca </h3>
				
			</div>

		

			
		
		<footer>
			<div class="container text-center">
				<div>
					Copyright © Shockwave Media & Consulting Inc. All Rights Reserved
				</div>
			</div>
		</footer>
	</body>
	<script>
		var height = $(window).height() - 685;
		var h = height + "px";
		$('.main-content').css('min-height', h);
	</script>
</html>
