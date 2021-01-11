	@extends('frontend.master')


	@section('content')

		<!-- Banner Section -->
		<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
			<h2 class="ltext-105 cl0 txt-center">
				About us
			</h2>
		</section>
		<body id=log>
	    <div id="login">
	        <h3 class="text-center text-white pt-5">Login form</h3>
	        <div class="container">
	            <div id="login-row" class="row justify-content-center align-items-center">
	                <div id="login-column" class="col-md-6">
	                    <div id="login-box" class="col-md-12">
	                        <form id="login-form" class="form" action="{{route('login')}}" method="post">
	                        	@csrf
	                            <h3 class="text-center text-info">Customer Login</h3>
	                            <div class="form-group">
	                                <label for="username" class="text-info">Email</label><br>
	                                <input type="email" name="email" id="username" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password" class="text-info">Password:</label><br>
	                                <input type="text" name="password" id="password" class="form-control">
	                            </div>
	                            <div class="form-group">
	                               
	                                <input type="submit" name="login" class="btn btn-info btn-md " value="Login">
	                                <a href="{{route('customer.signup')}}" class="text-info  text-right">Signup</a>
	                            </div>
	                           
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>	


	@endsection