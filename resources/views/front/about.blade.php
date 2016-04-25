@extends('front.layout.master')
@section('content')


<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>About us</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="{!! route('front.blog') !!}">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->



<!--container start-->
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="span5 about-carousel">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item">
                            <img src="front/img/about_1.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Data Science</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="front/img/about_2.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Create the world with others</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="front/img/about_3.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Get all resource with a click</p>
                            </div>
                        </div>


                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 about">
            <h3> Welcome To Tech Blog</h3>
            <p>
                This blog site is for those programmer or developer who want to learn about new technology, new framework.
            </p>
            <p>
                We create this blog for sharing our knowledge with other developers, and also lear from others.
            </p>

        </div>
    </div>


    <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="icon-wrap ico-bg round">
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="content">
                    <br>
                    <h3 class="title">Php Development</h3>
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="icon-wrap ico-bg round">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <br>
                    <h3 class="title">Android Development</h3>
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="icon-wrap ico-bg round">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <br>
                    <h3 class="title">Laravel Development</h3>
                    <br>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div class="icon-wrap ico-bg round">
                    <i class="fa fa-user"></i>
                </div>
                <div class="content">
                    <br>
                    <h3 class="title">Frontend Development</h3>
                    <br>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="gray-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <!--testimonial start-->
                <div class="about-testimonial boxed-style about-flexslider ">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides about-flex-slides">

                                <li>
                                    <div class="about-testimonial-image ">
                                        <img alt="" src="front/img/avatar1.jpg">
                                    </div>
                                    <a class="about-testimonial-author" href="#">Md. Abu Talha</a>
                                    <span class="about-testimonial-company">Web Developer</span>
                                    <div class="about-testimonial-content">
                                        <p class="about-testimonial-quote">
                                           3rd Year 2nd Semster Student,<br/>
                                           Department Of Computer Science and Engineering,<br/>
                                           Shahjalal University of Science and Technology, Sylhet.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div class="about-testimonial-image ">
                                        <img alt="" src="front/img/avatar2.jpg">
                                    </div>
                                    <a class="about-testimonial-author" href="#">Nishikanto Sharkar Shimul</a>
                                    <span class="about-testimonial-company">Android Developer</span>
                                    <div class="about-testimonial-content">
                                        <p class="about-testimonial-quote">
                                            3rd Year 2nd Semster Student,<br/>
                                            Department Of Computer Science and Engineering,<br/>
                                            Shahjalal University of Science and Technology, Sylhet.
                                        </p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </section>
                </div>
                <!--testimonial end-->
            </div>
            <div class="col-lg-7">
                <h3 class="skills">Our Crazy Skills</h3>
                <div class="about-skill-meter">
                    <div class="progress progress-xs">
                        <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger">
                            <span class="sr-only">Php/Java </span>
                        </div>
                    </div>
                </div>
                <div class="about-skill-meter">
                    <div class="progress progress-xs">
                        <div style="width: 80%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger">
                            <span class="sr-only">Html/CSS </span>
                        </div>
                    </div>
                </div>
                <div class="about-skill-meter">
                    <div class="progress progress-xs">
                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger">
                            <span class="sr-only">Laravel </span>
                        </div>
                    </div>
                </div>
                <div class="about-skill-meter">
                    <div class="progress progress-xs">
                        <div style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger">
                            <span class="sr-only">Android</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="container">
    <div class="row">
        <div class="text-center feature-head">
            <h1> Meet Our Team </h1>
            <p>We work with forward thinking clients to create beautiful, honest and amazing things that bring positive results.</p>
        </div>
        <div class="col-lg-4">
            <div class="person text-center">
                <img src="front/img/team/team_img1.jpg" alt="">
            </div>
            <div class="person-info text-center">
                <h4>
                    <a href="javascript:;">Ericson Reagan</a>
                </h4>
                <p class="text-muted"> Managing Director </p>
                <div class="team-social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <p>Redantium, totam rem aperiam, eaque ipsa qu ab illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo. Nemo enims sadips ipsums un.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="person text-center">
                <img src="front/img/team/team_img2.jpg" alt="">
            </div>
            <div class="person-info text-center">
                <h4>
                    <a href="javascript:;">Alicja Colon</a>
                </h4>
                <p class="text-muted"> Web Designer </p>
                <div class="team-social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <p>Redantium, totam rem aperiam, eaque ipsa qu ab illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo. Nemo enims sadips ipsums un.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="person text-center">
                <img src="front/img/team/team_img3.jpg" alt="">
            </div>
            <div class="person-info text-center">
                <h4>
                    <a href="javascript:;">Jonathan Smith</a>
                </h4>
                <p class="text-muted"> Web Developer </p>
                <div class="team-social-link">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <p>Redantium, totam rem aperiam, eaque ipsa qu ab illo inventore veritatis et quasi architectos beatae vitae dicta sunt explicabo. Nemo enims sadips ipsums un.</p>
            </div>
        </div>
    </div>
</div> -->
<!--container end-->

@stop


@section('script')

<script>
    $(window).load(function() {
        $('[data-zlname = reverse-effect]').mateHover({
            position: 'y-reverse',
            overlayStyle: 'rolling',
            overlayBg: '#fff',
            overlayOpacity: 0.7,
            overlayEasing: 'easeOutCirc',
            rollingPosition: 'top',
            popupEasing: 'easeOutBack',
            popup2Easing: 'easeOutBack'
        });
    });

    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });


</script>

@stop