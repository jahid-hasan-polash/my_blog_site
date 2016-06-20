<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h1>contact info</h1>
                <address>
                    <p>SUST CSE Developer Network,</p>
                    <p>Department of Computer Science and Engineering,</p>
                    <p>Shahjalal University of Science and Technology,</p>
                    <p>Sylhet, Bangladesh</p>
                    {{--<p>Email : <a href="javascript:;">talhaqc@gmail.com</a></p>--}}
                </address>
            </div>
            <div class="col-lg-5 col-sm-5">
                <h1>Moment's Quote</h1>
                <div class="tweet-box">

                    <blockquote id="qod-quote">
                        ... loading ...
                    </blockquote>
                    {{-- using api for quote--}}
                    <script src="http://quotesondesign.com/api/3.0/api-3.0.js"
                            type="text/javascript" charset="utf-8"></script>
                    <!-- end of use api -->
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                <h1>stay connected</h1>
                <ul class="social-link-footer list-unstyled">
                    <li><a href="https://www.facebook.com/scdnlab/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- js placed at the end of the document so the pages load faster -->

{!! Html::script('front/js/jquery.js') !!}
{!! Html::script('front/js/bootstrap.min.js') !!}
{!! Html::script('front/js/hover-dropdown.js') !!}
{!! Html::script('front/assets/bxslider/jquery.bxslider.js') !!}
{!! Html::script('front/js/jquery.flexslider.js') !!}

{!! Html::script('front/js/jquery.easing.min.js') !!}
{!! Html::script('front/js/link-hover.js') !!}



 <!--common script for all pages-->
 {!! Html::script('front/js/common-scripts.js') !!}







