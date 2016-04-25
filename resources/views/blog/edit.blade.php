@extends('layouts.default')
@section('content')



    <div class="wraper container-fluid">

        @include('includes.alert')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h3 class="panel-title">{!!$title!!}</h3>

                    <span class="pull-right">

                    </span>
                    </div>




                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel-body">

                                    {!!Form::model($blog,['route' => ['blog.update',$blog->id], 'method' => 'put' ])!!}

                                    <div class="form-group">
                                        {!! Form::label('title', 'Title :', array('class' => 'col-md-2 control-label')) !!}
                                        {!!Form::text('title', null,array('class' => 'form-control','placeholder' => 'Input Title'))!!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('meta_data', 'Url(unique) :', array('class' => 'col-md-2 control-label')) !!}
                                        {!!Form::text('meta_data',null,array('class' => 'form-control','placeholder' => 'www.xyz.com/meta-data' ))!!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('tag', 'Select Tag :', array('class' => 'col-md-2 control-label')) !!}
                                        {!!Form::select('tag', $tag, $tag_type ,array('class' => 'form-control', 'id' => 'select', 'autofocus'))!!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('details', 'Details :', array('class' => 'col-md-2 control-label')) !!}
                                        {!!Form::textarea('details',null,array('class' => 'form-control','placeholder' => 'Enter details of blog' ))!!}
                                    </div><br>




                                    <div class="form-group">
                                        {!! Form::submit('Update Blog', array('class' => 'btn btn-primary')) !!}
                                    </div>



                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>





@stop

@section('style')

    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css') !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css') !!}



@stop


@section('script')



    <script type="text/javascript">
        $('select').select2();

    </script>

@stop










