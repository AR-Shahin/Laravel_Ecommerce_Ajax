<div class="sidebar-menu">
                <div class="sidebar-menu-inner">
                    <header class="logo-env">
                        <!-- logo -->
                        <div class="logo">
                            <a href="dashboard/main/index.html"> <img src="{{asset('backend')}}/assets/images/logo%402x.png" width="120" alt="" /> </a>
                        </div>
                        <!-- logo collapse icon -->
                        <div class="sidebar-collapse">
                            <a href="#" class="sidebar-collapse-icon">
                                <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                                <i class="entypo-menu"></i>
                            </a>
                        </div>
                        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                        <div class="sidebar-mobile-menu visible-xs">
                            <a href="#" class="with-animation">
                                <!-- add class "with-animation" to support animation -->
                                <i class="entypo-menu"></i>
                            </a>
                        </div>
                    </header>
                    <ul id="main-menu" class="main-menu">
                        <li class="">
                            <a href=""><i class="entypo-gauge"></i><span class="title">Dashboard</span></a>
                        </li>
                        <li class="has-sub">
                            <a href="layouts/layout-api/index.html"><i class="entypo-layout"></i><span class="title">Products</span></a>
                            <ul>
                                <li>
                                    <a href="layouts/layout-api/index.html"><span class="title">Category</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('color.index') }}"><span class="title">Color</span></a>
                                </li>
                                <li>
                                    <a href="{{route('size.index')}}"><span class="title">Size</span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a href="index.html#"><i class="entypo-flow-tree"></i><span class="title">Menu Levels</span></a>
                            <ul>
                                <li>
                                    <a href="index.html#"><i class="entypo-flow-line"></i><span class="title">Menu Level 1.1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
