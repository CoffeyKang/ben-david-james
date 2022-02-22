<nav>
	<ul class="nav container d-flxt justify-content-between  w-100">
		<li class="nav-item">
			<a class="nav-link active" href="/">HOME</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">SCHEDULE</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/exhibitors">EXHIBITORS </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/presenters">JNTO MEMBERS</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="/contact">CONTACT</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id='register' data-toggle="modal" data-target="#exampleModal">REGISTER</a>
		</li>
		</ul>
</nav>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="w-100">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
			<div class="modal-header">
				
			</div>
      <div class="modal-body">
        <div class="my-form text-center">
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
							<script>
								$('#register').click();
							</script>
						@endif
						
						@if(isset($registration))
<script>
	$('#register').click();
	console.log('registration');
</script>


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
								<a class="btn btn-outline-danger col-3" href="/">
									LEARN MORE
								</a>
								
							</div>
						</div>
					</form>
					
				</div>
      </div>
      
    </div>
  </div>
</div>
