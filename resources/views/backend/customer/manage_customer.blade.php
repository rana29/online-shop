@extends('backend.layouts.master')

@section('content')

                              <!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Customer</a></li>
            <li><a href="javascript:avoid(0)">Manage-customer</a></li>
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
                    <h4 class="text-success">Manage customer</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('customer.add')}}">Add customer</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>image</th>
                                <th>Status</th>
                                
                               



                            </tr>
                        </thead>
                        <tbody>

                            @foreach($customer as $key=> $row)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->mobile}}</td>
                                <td><img src="{{asset('profile/'.$row->image)}}" style="width:50px"></td>

                                <td>{{$row->status== 1 ? 'Active':'Inactive'}}</td>
                              
                                <td>
                                  

                                  
                                    
                              


                                                   <!--  <a href="" data-tog="modal" class="btn btn-success btn-xs">
                                                       <i class="fa fa-trash"> </i></a> --> 
                                 <!--  <a href="#rana{{$row->id}}" data-toggle="modal" class="btn btn-success btn-xs "><i class="fa fa-pencil"></i></a> -->


                                   


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

      </div>


      <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
      @endsection