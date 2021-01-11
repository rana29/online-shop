@extends('frontend.master')


@section('content')

<!-- Banner Section -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92 mb-4" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        About us
    </h2>
</section>  
<div class="container">
    <div class="row ">
        <div class="col-md-12 col-md-offset-">
            <form class="form-horizontal" method="post" action="{{route('customer.checkout.store')}}">
                @csrf

                <div class="form-group">
                    <label for="catagory" class=" control-label text-center text-primary">Customer shipping information</label>

                   
                    <div class="col-md-6 col-md-offset-3">
                        <label for="name">Name</label>  
                        <input type="text" class="form-control" name="name" id="catagory" placeholder="name" value="{{old('name')}}">
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <label for="name">Email</label>  
                        <input type="text" class="form-control" name="email" id="catagory" placeholder="email" value="{{old('name')}}">
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <label for="name">Mobile</label>  
                        <input type="text" class="form-control" name="mobile" id="catagory" placeholder="mobile" value="{{old('name')}}">
                    </div>

                    <div class="col-md-6 col-md-offset-3">
                        <label for="name">Address</label>  
                        <input type="text" class="form-control" name="address" id="catagory" placeholder="address" value="{{old('name')}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 ">
                        <button type="submit" class="btn btn-primary ">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection