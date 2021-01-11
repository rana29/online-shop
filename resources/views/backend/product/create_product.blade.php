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
                            <li><a href="javascript:avoid(0)">Add-product</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-primary">product Add Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('product.manage')}}">Manage product</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
                                                @csrf
                                                
                                               <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Catagory Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control"  name="catagory_id" id="select" >
                                                          <option value="" >Select catagory</option>
                                                          @foreach($catagory as $row)
                                                        <option value="{{$row->id}}"> {{$row->catagory_name}}</option>

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
                                                            <option value="{{$brand->id}}">{{$brand->Brand_name}}</option>

                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>


                                               

                                               

                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">product_name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_name"  placeholder="product_name" value="{{old('product_name')}}">
                                                    </div>
                                                </div>

                                                  <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Color Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" id="select3" name="color_id"  >
                                                            <option value="" >Select color</option>
                                                            @foreach($color as $color)
                                                            <option value="{{$color->id}}">{{$color->color_name}}</option>

                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Size Name</label>
                                                    <div class="col-sm-9">
                                                        <select  class="form-control" id="select4" name="size_id"  >
                                                            <option value="" >Select size</option>
                                                            @foreach($size as $size)
                                                            <option value="{{$size->id}}">{{$size->size_name}}</option>

                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">product_price</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="product_price"  placeholder="product_price" value="{{old('product_price')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="product" class="col-sm-3 control-label">Long description</label>
                                                    <div class="col-sm-9">
                                                        <input type="textarea"   class="form-control" name="long_desc"  placeholder="Long description" value="{{old('long_desc')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="product"  class="col-sm-3 control-label" id="summernote">Short description</label>
                                                    <div class="col-sm-9">
                                                        <input type="textarea"  class="form-control" name="short_desc"  placeholder="Short description" value="{{old('short_desc')}}">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="image" name="image[]" multiple>
                                                    </div>
                                                </div>

                                               
                                                 <div class="col-md-2 form-group">
                                                       <img src="" id="show" style="width:80px; height: 80px; border:2px solid gray">
                                                </div>
                                               
                                              
                                               
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Save product</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                  
                    <button id="rana">Button</button>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection
