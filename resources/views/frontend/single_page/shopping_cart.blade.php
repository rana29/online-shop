@extends('frontend.master')


@section('content')




	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Shopping Cart
		</h2>
	</section>	

	<!-- Shoping Cart -->
	
	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 30px;">
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tr class="table_head">
								<th class="column-1">Delete</th>
								<th class="column-1">Product Nmae</th>
								<th class="column-2">Image</th>
								<th class="column-3">Price</th>
								<th class="column-4">Quantity</th>
								<th class="column-5">Total</th>
								<th class="column-5">Action</th>
							</tr>

							@php
							$contents=Cart::content();
							$total=0;
							@endphp

							
							
							
							@foreach($contents as $content)

							<tr class="table_row">
								<td class="column-1">
									<a href="{{route('cart.delete',$content->rowId)}}"><i class="fa fa-times btn btn-primary"></i></a>
								</td>
								<td class="column-1">{{$content->name}}</td>
								<td class="column-2">
									<div class="how-itemcart1">
										
										<img src="{{asset('product/'.$content->options->image)}}" alt="IMG"> 
									</div>
								</td>
								
								<td class="column-3">{{$content->price}} TK</td>
								<td class="column-4">

									<form method="post" action="{{route('cart.update')}}">
										@csrf

									<div>
										

										<input class="mtext-104 cl3 txt-center num-produc form-control sss" id="qty" type="number" name="qty" value="{{$content->qty}}">
										<input type="hidden" name="rowId" value="{{$content->rowId}}">
										

										
									</div>
								</td>
								<td class="column-5">{{$content->subtotal}} TK</td>
								<td>
									<input class="stext-101 cl2 bg8 txt-center num-produc form-control s888 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 btn btn-primary "  type="submit"  value="Edit">
								</td>
										
									</form>
								
							</tr>
							@php

							$total +=$content->subtotal;

							@endphp

							@endforeach

							
						</table>
					</div>
				</div>

				<div class="col-md-12 col-lg-12 col-xl-12">
					<div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">
                                    <h5>What would you like to do next?</h5>
                                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                </th>
                            </tr>
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="total_area">
                                        <ul>
                                        <li>Cart Sub Total <span>0.00 Tk</span></li>
                                        <li>Eco Tax <span>0.00</span> Tk</li>
                                        <li>Shipping Cost <span>Free</span></li>
                                        <li>Total <span>{{$total}} Tk</span></li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <a href="{{route('product')}}" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Continue Shopping</a>
                            &nbsp;&nbsp;

                            @if(@Auth::user()->id !=null)

                            <a href="{{route('customer.checkout')}}" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Checkout</a>

                            @else
                                  <a href="{{route('customer.login')}}" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">Checkout</a>

                             @endif
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- Map -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5983460988937!2d90.42140761445673!3d23.79731309290065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba919c9e8f%3A0x74c8c1dc2d04bd18!2sNatun%20Bazar%20Foot%20Over%20Bridge%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1575619103631!5m2!1sen!2sbd" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div><br/>
@endsection