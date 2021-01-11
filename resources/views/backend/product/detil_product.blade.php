@extends('backend.layouts.master')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Product</a></li>
            <li><a href="javascript:avoid(0)">Manage-product</a></li>
        </ul>
    </div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">


 <div class="row"> 

    <div class="col-sm-12 col-md-12 col-md-offset-">
     @include('backend.error_message')
     <div class="panel b-primary bt-md">
        <div class="panel-content">
            <div class="row">
                <div class="col-xs-6">
                    <h4 class="text-success">Product Detils</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('product.manage')}}"> <i class="fa fa-list"></i> product Manage</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
            <div class="card">
      <div class="container-fliud">
        <div class="wrapper row">
          <div class="preview col-md-6">
            
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1">

                @php($image=json_decode($product->image))
                
                                                            
                <img src="{{ asset('product/'.$image[0])}}" width="300px" height="300">
                                  
               
              </div>


              <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
            
            </div>

            <ul class="preview-thumbnail nav nav-tabs">
              @foreach($image as $img)
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('product/'.$img)}}" style=" width:100px; height:100px" /></a></li>
              @endforeach
             
            </ul>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title">men's shoes fashion</h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description">{{$product->long_desc}}</p>
            <h4 class="price">current price: <span>{{$product->product_price}}</span></h4>
            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
            <h5 class="sizes">sizes:
              <span class="size" data-toggle="tooltip" title="small">{{$product->size->size_name}}</span>
              
            </h5>
            <h5 class="colors">colors:
              <span class="color  not-available" data-toggle="tooltip" title="Not In store">{{$product->color->color_name}}</span>
             <!--  <span class="color green"></span>
             <span class="color blue"></span> -->
            </h5>
            <div class="action">
              <button class="add-to-cart btn btn-default" type="button">add to cart</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
              </div>
          </div>



      </div>


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
      @endsection

