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
                                            <form class="form-horizontal" method="post" action="{{route('customer.update')}}">
                                                @csrf

                                                <div class="form-group" >
                                                    <label for="email2" class="col-md-4 control-label">Name:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$profile->name}}" name="name" id="email2" placeholder="Add size">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset- col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Update profile</button>
                                                       
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    


			</div>


		</section>
		@endsection