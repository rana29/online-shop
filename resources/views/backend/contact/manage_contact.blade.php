

@extends('backend.layouts.master')

@section('content')

<!-- content HEADER -->
<!-- ========================================================= -->
<div class="content-header">
    <!-- leftside content header -->
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('home')}}">Dashboard</a></li>
            <li><a href="javascript:avoid(0)">contact</a></li>
            <li><a href="javascript:avoid(0)">Manage-contact</a></li>
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
                    <h4 class="text-success">Manage contact</h4>
                </div>
                @if($count<1)
                <div class="col-xs-6 text-right">
                   <a class="btn btn-primary " href="{{route('contact.create')}}">Add contact</a> 

               </div>
               @endif
           </div>
           <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="basic-table" class="data-table table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                                <th>Si No</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Youtube</th>
                                <td>Action</td>
                                
                                </tr>
                        </thead>
                        <tbody>

                            @foreach($contact as $key=>$row)
                           
                            <tr>
                                 <td>{{$row->id}}</td>
                                <td>{{$row->address}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->mobile}}</td>
                                <td>{{$row->facebook}}</td>
                                <td>{{$row->twitter}}</td>
                                <td>{{$row->youtube}}</td>
                               

                                <td>              
                                    <a href="{{route('contact.edit',$row->id)}}"  class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>


                                                   
                                   

                                   
                                      <a href="{{route('contact.delete',$row->id)}}" id="delete" class="btn btn-success btn-xs "><i class="fa fa-trash"></i></a>

                                     
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

     

