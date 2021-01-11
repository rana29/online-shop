	@extends('frontend.master')



	@section('content')


	<!-- Banner Section -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">

		</h2>
	</section>	

	<!-- About us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="list-group">
						<li class="list-group-item ">Your Dashbord</li>


						<a href=""><li class="list-group-item list-group-item-primary">Your profile</li></a>
						<a href=""><li class="list-group-item list-group-item-primary">Your orders</li></a>
						<a href=""><li class="list-group-item list-group-item-primary">change password</li></a>

					</ul>
				</div>
				<div class="col-md-9">
					<div class="card" style="width:300px;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"></h5>
							<p class="card-text">{{$profile->name}}.</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Cras justo odio</li>
							<li class="list-group-item">Dapibus ac facilisis in</li>
							<li class="list-group-item">Vestibulum at eros</li>
						</ul>
						<div class="card-body">
							<a href="{{route('customer.edit')}}" class="card-link btn btn-primary" >Edit profile</a>

						</div>	

					</div>
				</div>



			</div>


		</section>
		@endsection