@extends('backend.layouts.master')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">product</a></li>
                            <li><a href="javascript:avoid(0)">Update-update</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

                <div class="row animated fadeInUp">
                    
                    <div class="row"> 

                        <div class="col-sm-12 col-md-8 col-md-offset-2">
                             @include('backend.error_message')
                            <div class="panel b-primary bt-md">
                                <div class="panel-content">
                                    <div class="row">
                                        <div class="col-xs-6"><h4 class="text-success">Update product</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('product.manage')}}">Manage product</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('product.update',$product->id)}}">
                                                @csrf


                                               <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Catagory Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" id="select" name="catagory_id">
                                                            <option value="" >Select catagory</option>
                                                            @foreach($catagory as $catagory)
                                                            <option value="{{$catagory->id}}" {{$catagory->id==$product->catagory_id? "selected":""}}>{{$catagory->catagory_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Brand Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" id="select2" name="brand_id">
                                                            <option value="" >Select brand</option>
                                                            @foreach($brand as $brand)
                                                            <option value="{{$brand->id}}" {{($brand->id==$product->brand_id)? "selected":""}}>{{$brand->Brand_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                

                                                <div class="form-group" >
                                                    <label for="email2" class="col-sm-3 control-label">product name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$product->product_name}}" name="product_name" id="email2" placeholder="Add product">
                                                    </div>
                                                </div>


                                               


                                                <div class="form-group" >
                                                    <label for="email2" class="col-sm-3 control-label">price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$product->product_price}}" name="product_price" id="email2" >
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Product size</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" id="select" name="brand_id">
                                                            <option value="" >Select product_size</option>
                                                            @foreach($size as $size)
                                                            <option value="{{$size->id}}" {{($size->id==$product->size_id)? "selected":""}}>{{$size->size_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Color Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" id="select" name="brand_id">
                                                            <option value="" >Select color</option>
                                                            @foreach($color as $color)
                                                            <option value="{{$brand->id}}" {{($color->id==$product->color_id)? "selected":""}}>{{$color->color_name}}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="form-group" >
                                                    <label for="email2" class="col-sm-3 control-label">Long_description</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{$product->long_desc}}" name="long_desc" id="email2" placeholder="Add product">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="image" name="image[]" multiple value="">
                                                    </div>
                                                </div>

                                                @php($image=json_decode($product->image))
                                                @foreach($image as $image)
                                                    <div class="col-md-2 form-group">
                                                       <img src="{{ asset('product/'.$image)}}" id="show" style="width:80px; height: 80px; border:2px solid gray">
                                                </div>          
                                 
                                                @endforeach

                                               


                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary " id="">Update</button>
                                                       <!--  <a href="{{route('product.update',$product->id)}}" data-toggle="modal" class="btn btn-success">Update product</a> -->
                                                    </div>
                                                </div>


                                                <!---------------- data modal for edit -------------------------->

                                            </form>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>

                    </div>
                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection