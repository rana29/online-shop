 @php
 $prefix=Request::route()->getPrefix();
 $route=Route::current()->getName();
 @endphp


 <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title text-danger">Admin-Dashbord</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>
                <!-- NAVIGATION -->
                <!-- ========================================================= -->
                <div id="left-nav" class="nano">
                    <div class="nano-content">
                        <nav>
                            <ul class="nav nav-left-lines" id="main-nav">
                                <!--HOME-->
                                <li class="{{request()->is('dashbord')? 'active-item':''}}"><a href=""><i class="fa fa-home" aria-hidden="true"></i><span class="rana">Dashboard</span></a></li>

                                      <!-- catagory -->

                                 <li class="has-child-item close-item {{($prefix=='/catagory')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Catagory</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('catagory.create')}}" class="{{($route=='catagory.create')? 'active-item':''}}">Create Catagory</a></li>

                                        <li class=""><a href="{{route('catagory.manage')}}" class="{{($route=='catagory.manage')? 'active-item':''}}">Manage Catagory</a></li>
                                    </ul>
                                </li>

                                                         <!--  logo -->

                                <li class="has-child-item close-item {{($prefix=='/logo')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Logo</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('logo.create')}}" class="{{($route=='logo.create')? 'active-item':''}}">Create Logo</a></li>

                                        <li class=""><a href="{{route('logo.manage')}}" class="{{($route=='logo.manage')? 'active-item':''}}">Manage Logo</a></li>
                                    </ul>
                                </li>


                                                         <!--  slider -->

                                <li class="has-child-item close-item {{($prefix=='/slider')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Slider</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li><a href="{{route('slider.create')}}" class="{{($route=='slider.create')? 'active-item':''}}">Create slider</a></li>

                                        <li class=""><a href="{{route('slider.manage')}}" class="{{($route=='slider.manage')? 'active-item':''}}">Manage slider</a></li>
                                    </ul>
                                </li>


                                                            <!--  brand -->

                              <li class="has-child-item close-item {{($prefix=='/brand')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Brand</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class=""><a href="{{route('brand.create')}}" class="{{($route=='brand.create')? 'active-item':''}}">Create Brand</a></li>

                                        <li class=""><a href="{{route('brand.manage')}}" class="{{($route=='brand.manage')? 'active-item':''}}">Manage Brand</a></li>
                                    </ul>
                                </li>

                                           <!--  size -->

                              <li class="has-child-item close-item {{($prefix=='/size')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Size</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class=""><a href="{{route('size.create')}}" class="{{($route=='size.create')? 'active-item':''}}">Create size</a></li>

                                        <li class=""><a href="{{route('size.manage')}}" class="{{($route=='size.manage')? 'active-item':''}}">Manage size</a></li>
                                    </ul>
                                </li>


                                           <!--  color -->

                              <li class="has-child-item close-item {{($prefix=='/color')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Color</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class=""><a href="{{route('color.create')}}" class="{{($route=='color.create')? 'active-item':''}}">Create color</a></li>

                                        <li class=""><a href="{{route('color.manage')}}" class="{{($route=='color.manage')? 'active-item':''}}">Manage color</a></li>
                                    </ul>
                                </li>
                                                             <!--  product -->

                                 <li class="has-child-item close-item {{($prefix=='/product')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Product</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class=""><a href="{{route('product.create')}}" class="{{($route=='product.create')? 'active-item':''}}">Create product</a></li>

                                        <li class=""><a href="{{route('product.manage')}}" class="{{($route=='color.manage')? 'active-item':''}}">Manage product</a></li>
                                    </ul>
                                </li>
                                                        <!--  contact -->


                                  <li class="has-child-item close-item {{($prefix=='/contact')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Contact</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class=""><a href="{{route('contact.create')}}" class="{{($route=='product.create')? 'active-item':''}}">Create contact</a></li>

                                        <li class=""><a href="{{route('contact.manage')}}" class="{{($route=='contact.manage')? 'active-item':''}}">Manage contact</a></li>
                                    </ul>
                                </li>


                                                             <!--   custiomer -->



                                  <li class="has-child-item close-item {{($prefix=='/customer')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Customer</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class=""><a href="{{route('customer.manage')}}" class="{{($route=='customer.manage')? 'active-item':''}}">Manage customer</a></li>

                                        <li class=""><a href="{{route('customer.add')}}" class="{{($route=='customer.add')? 'active-item':''}}">Add customer</a></li>
                                    </ul>
                                </li>






                                <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a href="{{route('change.password')}}"><i class="fa fa-cubes" aria-hidden="true"></i><span>Change password</span></a>
                                    
                                </li>


                              



                              

                              
                                

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>