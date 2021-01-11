

@extends('backend.layouts.master')
@section('content')


                <!-- content HEADER -->
                <!-- ========================================================= -->

                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                            <li><a href="javascript:avoid(0)">contact</a></li>
                            <li><a href="javascript:avoid(0)">Update-contact</a></li>
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
                                        <div class="col-xs-6"><h4 class="text-success">contact update Form</h4></div>
                                        <div class="col-xs-6 text-right">
                                           <a class="btn btn-primary " href="{{route('contact.manage')}}">Manage contact</a> 

                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <form class="form-horizontal" method="post" action="{{route('contact.update',$edit->id)}}" enctype="multipart/form-data">
                                                @csrf

                                                

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="address" id="email2" placeholder="Address" value="{{$edit->address}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="email" id="email2" placeholder="Email" value="{{$edit->email}}">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label"> Mobile</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="mobile" id="email2" placeholder="Mobile" value="{{$edit->mobile}}">
                                                    </div>
                                                </div>

                                                 <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Facebook</label>
                                                    <div class="col-sm-9">
                                                        <input type="url" class="form-control" name="facebook" id="email2" placeholder="Facebook" value="{{$edit->facebook}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Twitter</label>
                                                    <div class="col-sm-9">
                                                        <input type="url" class="form-control" name="twitter" id="email2" placeholder="Twitter" value="{{$edit->twitter}}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email2" class="col-sm-3 control-label">Youtube</label>
                                                    <div class="col-sm-9">
                                                        <input type="url" class="form-control" name="youtube" id="email2" placeholder="Youtube" value="{{$edit->youtube}}">
                                                    </div>
                                                </div>


                                               

                                                 
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-offset-3 col-sm-9 ">
                                                        <button type="submit" class="btn btn-primary ">Update</button>
                                                    </div>
                                                </div>


                                                      <!---------------- data modal for delete -------------------------->




                                              
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
@endsection


