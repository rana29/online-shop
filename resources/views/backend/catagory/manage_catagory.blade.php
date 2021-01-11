

@extends('backend.layouts.master')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">Catagory</a></li>
            <li><a href="javascript:avoid(0)">Manage-catagory</a></li>
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
                <div class="col-xs-6">
                    <h4 class="text-success">Manage Catagory</h4>
                </div>
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('catagory.create')}}">Add catagory</a> 

               </div>
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Si No</th>
                                <th>catagory Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($catagory as $key=>$row)
                            @php
                            $count=App\product::where('catagory_id',$row->id)->count();

                            @endphp
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$row->catagory_name}}</td>
                                <td> <input type="checkbox"  data-toggle="toggle" data-on="Active" data-off="Inactive" data-size="small" data-onstyle="primary" data-offstyle="danger" 
                                  id="status" data-id="{{$row->id}}" {{$row->status==1? 'checked':''}}> </td>

                                <td>              
                                    <a href="{{route('catagory.edit',$row->id)}}"  class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>


                                                   
                                   

                                     @if($count<1)
                                      <a href="{{route('catagory.delete',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash"></i></a>

                                      @endif
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

     

