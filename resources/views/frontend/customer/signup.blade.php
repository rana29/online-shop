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
	       
	        <div class="container">
	            <div id="login-row" class="row justify-content-center align-items-center">
	                <div id="login-column" class="col-md-6">
	                    <div id="login-box" class="col-md-12">
	                        <form id="login" class="form" action="{{route('customer.store')}}" method="post">
	                        	@csrf
	                            <h3 class="text-center text-info">Customer Registration</h3>

	                            <div class="form-group">
	                                <label for="username" class="text-info">Name</label><br>
	                                <input type="text" name="name" id="username" class="form-control">
	                            </div>

	                            <div class="form-group">
	                                <label for="username" class="text-info">Mobile No</label><br>
	                                <input type="text" name="mobile" id="username" class="form-control">
	                            </div>

	                            <div class="form-group">
	                                <label for="username" class="text-info">Email</label><br>
	                                <input type="email" name="email" id="username" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password" class="text-info">Password:</label><br>
	                                <input type="password" name="pass" id="password" class="form-control">
	                            </div>
	                           
	                               
	                                <input type="submit" name="login" class="btn btn-info btn-md " value="Register">
	                                <a href="{{route('customer.login')}}" class="text-info  text-right">Login here</a>
	                            </div>
	                           
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>	



		<script type="text/javascript">
		$(document).ready(Function(){


		$(#login).vaildate{
			rules:  {
				name: {
					required: true,

				},

				email: {
					required: true,
					email:true

				},

	                pass: {
					required: true,
					minlength:3,

				},

				   cpass: {
					required: true,
					equalTo:#cpass,

				},


			},

			message:{
				name: {
					required:"Enter name",
				},

				pass: {
					required:"Enter pass",
				},
			},

			errorElement:"span",
			errorplacement: function(error, element){
				error.addClass('invalid-feedback');
			},
				highlight: function(element, errorClass, validClass){
					$(element).addCladd('is-invalid');


			},

			unhighlight: function(element, errorClass, validClass){
					$(element).removeCladd('is-invalid');


			},
		});

			

		</script>


	@endsection