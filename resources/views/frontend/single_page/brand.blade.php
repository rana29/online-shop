@extends('frontend.master')


@section('content')

	<!-- Banner Section -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Brand wise product
		</h2>
	</section>	

	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<!-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button> -->
					<a href="{{route('product')}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1">All products</a>
					@foreach($catagory as $catagory)
					<a href="{{route('product.catagory',$catagory->catagory_id)}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1">{{$catagory->catagory->catagory_name}}</a>
                    @endforeach
					

				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full">
					<div class="wrap-filter flex-w w-full" style="background-color: #858585;">
				        <div>
				            <div style="padding: 20px; font-size: 25px; color: #fff">
				                Brands
				            </div>
				            <div style="padding: 0px 20px 20px 20px;">
				            	@foreach($brand as $brand)
				                <a class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" href="{{route('product.brand',$brand->brand_id)}}" class="filter-link stext-106 trans-04" style="color: #fff">
				                    {{$brand->brand->Brand_name}}
				                </a>
				                @endforeach
				               
				            </div>
				        </div>
				    </div>
				</div>
			</div>

			<div class="row isotope-grid">
				@foreach($products as $product)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							 @php($image=json_decode($product->image))
                             <!-- 1 tar beshe image show kortae holae foreach -->
							<img src="{{ asset('product/'.$image[0])}}" alt="IMG-PRODUCT">
                            
							<a href="{{route('product.detils',$product->slug)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Add to Card
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{$product->product_name}}
								</a>

								<span class="stext-105 cl3">
									{{$product->product_price}}TK
								</span>
							</div>

						</div>
					</div>
					
			    </div>
               @endforeach
				
			</div>
			</div>
		
	</section>
@endsection