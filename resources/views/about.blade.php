@extends('app')
@section('content')
		<div class="about" id='about'>
			<div class="container">
				<div class="row">
					<div class="col-5 about-img">

					</div>
					<div class="col-7 about-text d-flex flex-column justify-content-between">
						<h2 class="title">ABOUT</h2>
						
						<div>
							<p>
								The Japan 3D Virtual Travel Show is organized by Japan National Tourism Organization (JNTO) and sponsored by Tokyo 
								Tourism. This is an excellent networking opportunity for 
								Japan tour operators and show visitors to network in an interactive and fun environment, with over $20,000 in prizes 
								available to be won! Chances to win great prizes at a total 
								value of $20,000 by visiting the exhibitors.
							</p>
							<button class="btn btn-outline-danger col-4">
								LEARN MORE
							</button>
						</div>
						
				</div>
				
			</div>
			
			</div>
		</div>

		<div class='exhibitors' id='exhibitors'>
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="title">
						EXHIBITORS
					</div>
					
					<a class="btn btn-outline-danger" href='/exhibitors'>
						MORE
					</a>

				</div>
				<hr class='row'>
				<div class="exhibitor-images row">
					
				</div>
			</div>
			
		</div>

		<div class='presenters' id='presenter'>
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="title">
						PRESENTERS
					</div>
					
					<a class="btn btn-outline-danger" href="/presenters">
						MORE
					</a>

				</div>
				<hr class='row'>
				<div class="exhibitor-images row">
					
				</div>
			</div>
			
		</div>

		<div class="bottom container">

		</div>

@endsection