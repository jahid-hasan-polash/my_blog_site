 <!-- Aside Start-->
<aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="#" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span href="{!!route('dashboard')!!}" class="nav-label">{!! Config::get('customConfig.names.siteName')!!}</span>

                </a>
            </div>
            <!-- / brand -->


            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                    <!-- Dashboard -->
                    <li class="{!! Menu::isActiveRoute('dashboard') !!}">
                        <a href="{!!  URL::route( 'dashboard') !!}"><i class="ion-stats-bars"></i>Dash</a>
                    </li>

                     <li class="{!! Menu::areActiveURLs(['tag.index', 'tag.create']) !!}"><a href="#"><i class="ion-flask"></i> <span class="nav-label">Tag</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveRoute('tag.index') !!}">
                                <a href="{!!  URL::route( 'tag.index') !!}">All Tag</a>
                            </li>

                            <li class="{!! Menu::isActiveURL('tag.create') !!}">
                                <a href="{!!  URL::to( 'tag.create') !!}">Create Tag</a>
                            </li>
                        </ul>
                    </li>



                    <li class="{!! Menu::areActiveURLs(['blog.index', 'blog.create']) !!}"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Blog</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveRoute('blog.index') !!}">
                                <a href="{!!  URL::route( 'blog.index') !!}">All Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveURL('blog.create') !!}">
                                <a href="{!!  URL::route('blog.create') !!}">Create Blog</a>
                            </li>
                        </ul>
                    </li>

<!--
                    <li class="has-submenu"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Forms</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">General Elements</a></li>
                            <li><a href="#">Form Validation</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Data Tables</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Basic Tables</a></li>
                            <li><a href="#">Data Table</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">Charts</span><span class="badge bg-purple">1</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">chart</a></li>
                            <li><a href="#">Morris</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-email"></i> <span class="nav-label">Mail</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Compose Mail</a></li>
                            <li><a href="#">View Mail</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                        <ul class="list-unstyled">
                            <li><a href="gmap.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li>

  -->
                </ul>
            </nav>



</aside>
        <!-- Aside Ends-->



