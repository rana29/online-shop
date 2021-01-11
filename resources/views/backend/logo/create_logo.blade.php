@extends('backend.layouts.master')

@section('content')

                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">User</a></li>
                            <li><a href="javascript:avoid(0)">Create-user</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-success">Logo add Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('logo.manage')}}">Manage logo</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('logo.store')}}" enctype="multipart/form-data">
                                                @csrf

                                                

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="logo_name" id="email2" placeholder="Name" value="{{old('brand')}}">
                                                    </div>
                                                </div>

                                                   <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="logo" id="image" >
                                                    </div>
                                                 </div>

                                         
                                               
                                                    <div class="col-md-2 form-group">
                                                       <img src="" id="imageshow" style="width:80px; height: 80px; border:2px solid gray">
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
                            </div>
                        </div>

                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection


