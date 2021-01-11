 <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <!-- ========================================================= -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Admin-Dashbord</div>
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
                                <li class="{{request()->is('dashbord')? 'active-item':''}}"><a href=""><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>


                                 <li class="has-child-item close-item {{request()->is('brand/*')?'open-item':''}}">
                                    <a><i class="fa fa-cubes" aria-hidden="true"></i><span>Brand</span></a>
                                    <ul class="nav child-nav level-1">
                                        <li class="{{request()->is('Brand/add-brand')? 'active-item':''}}"><a href="">Add Brand</a></li>
                                        <li class="{{request()->is('Brand/manage-brand')? 'active-item':''}}"><a href="">Manage Brand</a></li>
                                    </ul>
                                </li>


                              



                              

                              
                                

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>