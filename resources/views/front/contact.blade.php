@extends('front.layout.master')
@section('content')

<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Contacts</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="{!! route('front.blog') !!}">Home</a></li>
                    <li class="active">Contacts</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->



<!--google map start-->
<div class="contact-map">
    <div id="map-canvas" style="width: 100%; height: 400px"></div>
</div>
<!--google map end-->





<!--container start-->
<div class="container">


    <div class="row">
        <div class="col-lg-5 col-sm-5 address">
            <h4>Sylhet, Bangladesh</h4>
            <p>
                Md. Abu Talha <br/>
                Computer Science and Engineering Department, <br/>
                Shahjalal University of Science and Technology, <br/>
                Sylhet - 3114.
            </p>
            <br>
            <br>
            <br>
            <p>
                Phone <br/>
                <span class="muted">(+88) 01967402131</span><br/>

                Email <br/>
                <span class="muted">talhaqc@gmail.com</span>
            </p>
        </div>

        <div class="col-lg-7 col-sm-7 address">
            <h4>Send a Message</h4>
            <div class="contact-form">
                {!! Form:: open(array('url' => 'contact')) !!}


                @include('includes.alert')


                <div class="form-group">
                    {!! Form:: label ('email', 'E-mail*')!!}
                    {!! Form:: email ('email', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'me@example.com')) !!}
                </div>
                <div class="form-group">
                    {!! Form:: label ('subject', 'Subject*') !!}
                    {!! Form:: text ('subject', '', array('class'=>'form-control', 'required'=>'required','placeholder' => 'Your subject'))!!}
                </div>
                <div class="form-group">
                    {!! Form:: label ('message', 'Message*' )!!}
                    {!! Form:: textarea ('message', '',array('class'=>'form-control', 'required'=>'required|min:25','placeholder' => 'Message must contain 25 alphabets'))!!}
                </div>

                <div class="form-group">
                    {!! Form::reset('Clear', array('class' => 'you css class for button')) !!}
                    {!! Form::submit('Send', array('class' => 'you css class for button')) !!}
                </div>
                {!! Form:: close() !!}
            </div>
        </div>


    </div>

</div>
<!--container end-->
@stop



@section('script')
{!! Html::script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;AMP;sensor=false') !!}
<script>

    //google map
    function initialize() {
        var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
        var mapOptions = {
            zoom: 15,
            scrollwheel: false,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);



</script>
@stop
