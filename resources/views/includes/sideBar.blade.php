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

    @role('admin')
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                    <!-- Dashboard -->
                    <li class="{!! Menu::isActiveRoute('dashboard') !!}">
                        <a href="{!!  URL::route( 'dashboard') !!}"><i class="ion-stats-bars"></i>Dash</a>
                    </li>

                     <li class="{!! Menu::areActiveRoutes(['tag.index', 'tag.create']) !!}"><a href="#"><i class="ion-flask"></i> <span class="nav-label">Tag</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveRoute('tag.index') !!}">
                                <a href="{!!  URL::route( 'tag.index') !!}">All Tag</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('tag.create') !!}">
                                <a href="{!!  URL::to( 'tag.create') !!}">Create Tag</a>
                            </li>
                        </ul>
                    </li>


                    <li class="{!! Menu::areActiveRoutes(['blog.index', 'blog.create','blog.own']) !!}"><a href="#"><i
                                    class="ion-compose"></i> <span class="nav-label">Blog</span></a>
                        <ul class="list-unstyled">


                            <li class="{!! Menu::isActiveRoute('blog.index') !!}">
                                <a href="{!!  URL::route( 'blog.index') !!}">All Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('blog.create') !!}">
                                <a href="{!!  URL::route('blog.create') !!}">Create Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('blog.own') !!}">
                                <a href="{!!  URL::route( 'blog.own') !!}">My Blog</a>
                            </li>


                        </ul>
                    </li>
                    @endrole

                    @role('user')
                    <li class="{!! Menu::areActiveRoutes(['blog.create','blog.own']) !!}"><a href="#"><i
                                    class="ion-compose"></i> <span class="nav-label">Blog</span></a>
                        <ul class="list-unstyled">


                            <li class="{!! Menu::isActiveRoute('blog.create') !!}">
                                <a href="{!!  URL::route('blog.create') !!}">Create Blog</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('blog.own') !!}">
                                <a href="{!!  URL::route( 'blog.own') !!}">My Blog</a>
                            </li>


                        </ul>
                    </li>
                    @endrole


                </ul>
            </nav>
</aside>
        <!-- Aside Ends-->



