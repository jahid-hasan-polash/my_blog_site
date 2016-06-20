<!--header start-->
<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">


            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! route('front.blog') !!}">SCDN <span> Blog</span></a>
                {!!   Html::image('http://www.prohad.com/images/beta.png', 'a picture', array('class' => 'thumb','width' => 90 , 'height' => 90))!!}
            </div>


            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="{!! route('front.blog') !!}">Blog</a></li>
                    {{--<li><a href="{!! route('front.about') !!}">About</a></li>--}}
                    <li><a href="{!! route('front.archive') !!}">Archive</a></li>
                    <li><a href="{!! route('front.contact') !!}">Contact</a></li>

                    @if(\Auth::check() == 1)

                        <li><a href="{!! route('dashboard') !!}">Dashboard</a></li>
                    @else
                        <li><a href="{!! route('user.create') !!}">Apply</a></li>
                        <li><a href="{!! route('login') !!}">Login</a></li>
                    @endif

                </ul>
            </div>

        </div>
    </div>
</header>
<!--header end-->