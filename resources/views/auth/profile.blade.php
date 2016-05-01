@extends('layouts.default')
@section('content')

        <!-- Page Content Start -->
<!-- ================== -->

<div class="wraper container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-picture" style="background-image:url('img/bg_6.jpg')">
                <span class="bg-picture-overlay"></span><!-- overlay -->
                <!-- meta -->
                <div class="box-layout meta bottom">

                    <div class="col-sm-6 clearfix">
                        <span class="img-wrapper pull-left m-r-15"><img src="img/avatar-2.jpg" alt="" style="width:64px" class="br-radius"></span>
                        <div class="media-body">
                            <h3 class="text-white mb-2 m-t-10 ellipsis">{{$user->name}}</h3>
                            <h5 class="text-white"> </h5>
                        </div>
                    </div>



                    {{--<div class="col-sm-6">--}}
                        {{--<div class="pull-right">--}}
                            {{--<div class="dropdown">--}}
                                {{--<a data-toggle="dropdown" class="dropdown-toggle btn btn-primary" href="#"> Following <span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu dropdown-menu-right" role="menu">--}}
                                    {{--<li><a href="#">Poke</a></li>--}}
                                    {{--<li><a href="#">Private message</a></li>--}}
                                    {{--<li class="divider"></li>--}}
                                    {{--<li><a href="#">Unfollow</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                </div>
                <!--/ meta -->
            </div>
        </div>
    </div>

    <div class="row m-t-30">
        <div class="col-sm-12">
            <div class="panel panel-default p-0">
                <div class="panel-body p-0">
                    <ul class="nav nav-tabs profile-tabs">
                        <li class="active"><a data-toggle="tab" href="#aboutme">About Me</a></li>
                        <li class=""><a data-toggle="tab" href="#edit-profile">Settings</a></li>
                        <li class=""><a data-toggle="tab" href="#projects">Projects</a></li>
                    </ul>

                    <div class="tab-content m-0">

                        <div id="aboutme" class="tab-pane active">
                            <div class="profile-desk">
                                <h1>{{$user->name}}</h1>
                                <span class="designation">{!! $user->platform !!} Developer</span>
                                <p>
                                   {!! $user->about_me !!}
                                </p>


                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th colspan="3"><h3>Contact Information</h3></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td><b>Email</b></td>
                                        <td>
                                            <a href="#" class="ng-binding">
                                                {{$user->email}}
                                            </a></td>
                                    </tr>
                                    <tr>
                                        <td><b>Phone</b></td>
                                        <td class="ng-binding">{{$user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Facebook</b></td>
                                        <td>
                                            <a href="#" class="ng-binding">
                                                {{$user->fb_user}}
                                            </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end profile-desk -->
                        </div> <!-- about-me -->






                                               <!-- settings -->
                   <div id="edit-profile" class="tab-pane">
                            <div class="user-profile-content">

                                {!! Form::open(array('route' => 'profile.update', 'method' => 'put','files'=>true, 'class' => 'form-signin')) !!}


                                <div class="form-group ">
                                    {!! Form::label('phone', 'Phone :', array('class' => 'col-md-4 control-label')) !!}<br/>
                                    {!! Form::text('phone','', array('class' => 'form-control', 'placeholder' => 'Your phone Number...','id' => 'status')) !!}
                                </div><br>

                                <div class="form-group ">
                                    {!! Form::label('platform', 'Working Platform :', array('class' => 'col-md-4 control-label')) !!}<br/>
                                    {!! Form::text('platform','', array('class' => 'form-control', 'placeholder' => 'Your working platform...','id' => 'status')) !!}
                                </div><br>

                                <div class="form-group ">
                                    {!! Form::label('position', 'Working Status :', array('class' => 'col-md-4 control-label')) !!}<br/>
                                    {!! Form::text('position', '', array('class' => 'form-control', 'placeholder' => 'Student/job...')) !!}
                                </div><br>


                                <div class="form-group ">
                                    {!! Form::label('organization', 'Organization/Institute :', array('class' => 'col-md-4 control-label')) !!}
                                    {!! Form::text('organization', '', array('class' => 'form-control', 'placeholder' => 'Input organization/institute...')) !!}
                                </div><br>

                                <div class="form-group ">
                                    {!! Form::label('fb_user', 'Facebook Profile :', array('class' => 'col-md-4 control-label')) !!}
                                    {!! Form::text('fb_user', '', array('class' => 'form-control', 'placeholder' => 'Input your facebook profile...')) !!}
                                </div><br>

                                <div class="form-group ">
                                    {!! Form::label('about_me', 'About Yourself :', array('class' => 'col-md-4 control-label')) !!}
                                    {!! Form::textarea('about_me', '', array('class' => 'form-control', 'placeholder' => 'Write About Yourself...')) !!}
                                </div><br>

                                <div class="form-group">
                                    {!! Form::label('image', 'Upload Profile Photo') !!}
                                    {!! Form::file('image') !!}
                                </div> <br>




                                <div class="form-group text-right">
                                    {!! Form::submit('Update', array('class' => 'btn btn-lg btn-login btn-block btn-purple ', 'type'=>'submit')) !!}
                                </div>




                            </div>
                        </div>




                        <!-- profile -->
                  <div id="projects" class="tab-pane">
                            <div class="row m-t-10">
                                <div class="col-md-12">
                                    <div class="portlet">
                                        <div id="portlet2" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered" id="datatable">
                                                        <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Title</th>
                                                            <th>Tag</th>
                                                            <th>Image</th>
                                                            <th>Meta Data/ Url</th>
                                                            <th>Created at</th>
                                                            <th>Details</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach ($blog as $blogs)
                                                            <tr>
                                                                <td>{!! $blogs->id !!}</td>
                                                                <td>{!! $blogs->title !!}</td>
                                                                <td>{!! $blogs->tag !!}</td>
                                                                <td> <img class="" src="{!! $blogs->img_thumbnail !!}" alt=""></td>
                                                                <td>{!! $blogs->meta_data !!}</td>
                                                                <td>{!! $blogs->created_at->format('Y-m-d') !!}</td>
                                                                <td> <a><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal_{{$blogs->id}}" >Details</button></a></td>
                                                                <td><a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('blog.edit',$blogs->id)!!}"  style="margin-right: 3px;">Edit</a></td>
                                                                <td><a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $blogs->id!!}">Delete</a></td>
                                                            </tr>

                                                            <!-- Modal -->
                                                            <div id="myModal_{{$blogs->id}}" class="modal fade" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content" >
                                                                        <center>
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title"><img class="img-circle" src="{!! $blogs->img_thumbnail !!}" alt="" align="left">{{ $blogs->title}}</h4>
                                                                            </div>
                                                                            <div class="modal-body" >
                                                                                <p><b>Id: </b>{{ $blogs->id}}</p>
                                                                                <p><b>Meta/Url: </b>{{ $blogs->meta_data}}</p>
                                                                                <p><b>Tag: </b>{{ $blogs->tag}}</p>
                                                                                <p><b>Details: </b>{{ $blogs->details}}</p>
                                                                            </div>
                                                                        </center>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--modal -->

                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End profile -->

                    </div>

                </div>
            </div>
        </div>
    </div>






</div>




@stop

@section('script')
    {!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}

    //for Datatable
    <script type="text/javascript">

        $(document).ready(function() {
            $('#datatable').dataTable();
        });
    </script>

@stop
