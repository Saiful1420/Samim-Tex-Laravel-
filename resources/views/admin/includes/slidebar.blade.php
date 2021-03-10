 <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">

                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{url('/admin-dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">FEATURES</li>
                    <li>
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-product-hunt"></i>
                                <span class="nav-label">Product Setup</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li><a class="" href="{{url('/products')}}">Product List</a></li>



                            </ul>
                        </li>

                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-id-badge"></i>
                            <span class="nav-label">Carerrs Setup</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            {{-- <li><a class="" href="{{url('/department')}}">Department List</a></li> --}}
                            <li><a class="" href="{{url('/careers')}}">Careers List</a></li>



                        </ul>
                    </li>


                    <li>
                            <a href="javascript:;"><i class="sidebar-item-icon fa fa-user-circle"></i>
                                <span class="nav-label">Customer Setup</span><i class="fa fa-angle-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li><a class="" href="{{url('/customers')}}">Customer List</a></li>



                            </ul>
                        </li>








                </ul>
            </div>
        </nav>
