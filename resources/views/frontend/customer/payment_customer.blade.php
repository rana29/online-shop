@extends('frontend.master')


@section('content')




<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('/')}}assets/frontend/images/bg-01.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Payment method
    </h2>
</section>  

<!-- Shoping Cart -->

<!-- Shoping Cart -->
<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 30px;">
                <div class="wrap-table-shopping-cart">
                    <table class="table-shopping-cart table table-bordered table-striped table-dark">
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
                        <tr>
                          <td colspan="6">Grand Total</td>
                          <td colspan="2">{{$total}} TK</td>
                      </tr>

                  </table>
              </div>
          </div>


      </div>
  </div>
</div>


<h3 class="text-center mb-4">Payment method information</h3>


<div class="container">
    <h4 class="mb-3">Select payment method</h4>



    <form action="{{route('customer.store')}}" method="post" >
        @csrf


        <input type="hidden" name="total" value={{$total}}>
        <select name="payment_method" id="payment" class="form-control col-md-6 mb-3" >
            <option value="">Select method</option>
            <option value="Bkash">Bkash</option>
            <option value="hand_cash">Cash on delivery</option>

        </select>

        <div class="show" style="display:none;">
           <span>Bkash no:01924855402</span>   
           <label for="name">Transtion Id</label>  
           <input type="text" class="form-control col-md-6" name="transtion_id" id="payment" placeholder="name" value="{{old('name')}}">
       </div>

       <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9 ">
            <button type="submit" class="btn btn-primary ">Save</button>
        </div>
    </div>

</form>



</div>

<button id="hide" type="">Button</button>

<!-- Map -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5983460988937!2d90.42140761445673!3d23.79731309290065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba919c9e8f%3A0x74c8c1dc2d04bd18!2sNatun%20Bazar%20Foot%20Over%20Bridge%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1575619103631!5m2!1sen!2sbd" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div><br/>



@endsection


