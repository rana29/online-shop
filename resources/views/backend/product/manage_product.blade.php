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
                    <h4 class="text-success">Manage product</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('product.create')}}">Add product</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>product Name</th>
                                <th>Catagory</th>
                                <th>Brand</th>
                                <th>price</th>
                                <th>color</th>
                                <th>Size</th>
                               
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($product as $key=>$row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->product_name}}</td>


                                <td>{{$row->catagory->catagory_name}}</td>


                                
                                <td>{{$row->brand->Brand_name}}</td>
                                <td>{{$row->product_price}}</td>
                              
                                <td>{{$row->color->color_name}}</td>
                                <td>{{$row->size->size_name}}</td>
                                
                                <td>{{$row->long_desc}}</td>

                                <td>
                                  @php($image=json_decode($row->image))
                                  @foreach($image as $image)
                                                            
                                 <img src="{{ asset('product/'.$image)}}" width="35px" height="30">
                                  <!-- <img src="{{ asset('product/'.$row->image)}}" width="50px" height=""> -->
                                  @endforeach
                                </td>

                                <td> <input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-size="small" data-onstyle="primary" data-offstyle="danger" 
                                  id="status" data-id="{{$row->id}}" {{($row->status==1)? 'checked':''}}> </td>

                                <td>              
                                    <a href="{{route('product.edit',$row->id)}}"  class="btn btn-success btn-xs"><i class="fa fa-pencil" title="Edit"></i></a>

                                     <a href="{{route('product.detil',$row->id)}}"  class="btn btn-success btn-xs"><i class="fa fa-eye" title="Detils"></i></a>

                                    <a href="{{route('product.delete',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash" title="Delete"></i></a>
                                </td>


                                </tr>

                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


           <!-- FULL CIRCLE LOADER  -->
    
    <div>
    
    <div>
    <div class="ml-loader  circle">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  </div>

      </div>


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection

