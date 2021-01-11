@extends('frontend.master')


@section('content')

	<!-- Banner Section -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About us
		</h2>
	</section>	

	<!-- About us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 11%;">About Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
			</div>
		</div>
	</section>
@endsection