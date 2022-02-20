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
	</head>
	<body class="container-fuild">
		<header>
			<div class="container text-right">
				<div class="pt-5">
					<h1>JAPAN</h1>
					<h2>VIRTURAL<br>
						TRAVEL expo</h2>
					<button class="myBtn mt-3">
						March 16, 2022 <br>
						11AP - 7PM EST
					</button>
				</div>
			</div>
		</header>
		<div class='contant-page'>
			<div class="container">
				<div class="my-form text-center col-sm-12 col-lg-4">
					<div class='title'>JOIN US</div>
					<form class="text-center" method="post" action="/register">
						@csrf
						<div class="header">
							<h3>Registration for</h3>
							<h2>Japan Virtual Travel Expo</h2>
							<h3>March 16, 2022, 11AM – 7PM EST</h3>
						</div>
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								@foreach ($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
							</div>
						@endif
						<div class="form-group">
							<input type="text" class="form-control" id="first_name" name='first_name' placeholder="FIRST NAME">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="last_name" name="last_name"  placeholder="LAST NAME">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="agency" name="agency" placeholder="Travel agency / Corporation name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
						</div>
						<div class="row">
							<div class="form-group col-6">
								<input type="text" class="form-control" id="city" name="city" placeholder="City">
							</div>
							<div class="form-group col-6">
								<input type="text" class="form-control" id="province" name="province" placeholder="Province">
							</div>
						</div>
						<div class="form-check text-left">
							<input type="checkbox" class="form-check-input" id="check" name="check">
							<label class="form-check-label" for="check">I have read and agree to the 
								Prize Draw Rules and Regulations.</label>
						</div>
						<div class="text-left">
							<button type="submit" class="btn btn-danger">Register</button>
						</div>
						<div class="logos d-flex justify-content-around">
							<div class="logo-left">
							</div>
							<div class="logo-right">
							</div>
						</div>

						<div class="form-footer pt-5">
							<p class="text-left pr-3">Excellent opportunity for networking with the Japan tour suppliers.</p>
							<div class="row pr-0 pl-0">
								<p class="col-9 text-left">Great prizes of over $20,000 for the show visitors.
								</p>
								<button class="btn btn-outline-danger col-3">
									LEARN MORE
								</button>
								
							</div>
						</div>
					</form>
					
				</div>
				
			</div>
			

			

		</div>	

		

			
		
		<footer>
			<div class="container text-center">
				<div>
					Copyright © Shockwave Media & Consulting Inc. All Rights Reserved
				</div>
			</div>
		</footer>
	</body>
		
</html>
