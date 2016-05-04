<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Talha">
    <meta name="keyword" content="Tech Blog">

    {!! Html::favicon('favicon.ico') !!}

    <title>{!! $title !!}</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('front/css/bootstrap.min.css') !!}
    {!! Html::style('front/css/theme.css') !!}
    {!! Html::style('front/css/bootstrap-reset.css') !!}
    {!! Html::style('front/assets/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('front/css/flexslider.css') !!}
    {!! Html::style('front/assets/bxslider/jquery.bxslider.css') !!}

     <!-- Custom styles for this template -->
    {!! Html::style('front/css/style.css') !!}
    {!! Html::style('front/css/style-responsive.css') !!}

{{--
    {!! Html::script('front/js/html5shiv.js') !!}
    {!! Html::script('front/js/respond.min.js') !!}
--}}


   <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
                d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
                _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?3tDg903i1sbwDdGDzhY1q8jAwB4NWka6";z.t=+new Date;$.
                    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->


</head>
