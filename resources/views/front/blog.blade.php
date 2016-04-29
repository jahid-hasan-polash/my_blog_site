@extends('front.layout.master')
@section('content')
<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Blog</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="{!! route('front.blog') !!}">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs end-->





<!--container start-->
<div class="container">
    <div class="row">
        <!--blog start-->
        <div class="col-lg-9 ">


     @if(!empty($blog->count()))
            <!--Start of Blog Item -->
            @foreach($blog as $new_blog)

                <div class="blog-item">
                <div class="row">

                    <div class="col-lg-2 col-sm-2">
                        <div class="date-wrap">
                            <span class="date">{!! \App\Blog::customDay($new_blog->id)!!}</span>
                            <span class="month">{!! \App\Blog::customMonth($new_blog->id)!!}</span>
                        </div>

                        <div class="comnt-wrap">
                                <span class="comnt-ico">
                                     <i class="fa fa-comments" aria-hidden="true"></i>
                                </span>
                            <span class="value">15</span>
                        </div>

                    </div>


                    <div class="col-lg-10 col-sm-10">
                        <div class="blog-img">
                            <img src="{!! $new_blog->image !!}" alt=""/>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-2 col-sm-2 text-right">

                        <div class="author">
                            By <a href="#">{!! App\User::findOrfail($new_blog->user_id)->pluck('name') !!}</a>
                        </div>

                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><em>{!! $new_blog->tag !!}</em></a></li>
                        </ul>


                        <div class="shate-view">
                            <ul class="list-unstyled">
                                <li><a href="javascript:;">{!! $new_blog->views !!} Views</a></li>
                                {{--<li><a href="javascript:;">{!! $new_blog->share !!} Share</a></li>--}}
                                <li><a href="javascript:;">{!! $new_blog->like !!} Recommend</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-10 col-sm-10">
                        <h1><a href="{!! route('front.blog_details',$new_blog->meta_data) !!}">{!! $new_blog->title !!}</a></h1>
                        <p>{!! \Str::limit($new_blog->details,300) !!}</p>
                        <a href="{!! route('front.blog_details',$new_blog->meta_data) !!}" class="btn btn-danger">Continue Reading</a>
                    </div>

                </div>
            </div>
            @endforeach

       <!-- End of Blog Item -->
      @else

                    <div class="blog-item">
                        <div class="row">

                            <div class="col-lg-10 col-sm-10">
                                <div class="blog-img">

                                    <h1>Whoops, No Blog Post Found With this Tag or Keyword!!</h1>
                                    <h5>Some Bing Results For You....</h5>
                                    <br>
                                    <iframe src="http://www.bing.com/search?q={!! $bing !!}" width="800" height="800"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>


        @endif




            <!--paginate -->
           <div class="text-center">
                <ul class="pagination">
                    {!!$blog->render()!!}
                </ul>
            </div>
            <!--end of paginate -->



        </div>

        <!-- Right side bar -->
        <div class="col-lg-3">
            <div class="blog-side-item">
                <div class="search-row">
                    {!! Form::open(array('route' => 'search.action',  'files' => true) ) !!}
                    {!!Form::text('search_value','',array('class' => 'form-control','placeholder' => 'Search here' ))!!}
                    {!! Form::close() !!}
                </div>

                <!-- category -->
             <!--   <div class="category">
                    <h3>Categories</h3>
                    <ul class="list-unstyled">
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Animals</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Landscape</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Portait</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Wild Life</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> Video</a></li>
                    </ul>
                </div> -->
                <!--end of category -->



                <!-- tags list -->
                <div class="tags">
                    <h3>Tags</h3>
                    <ul class="list-unstyled tag">
                        @foreach($tag as $new_tag)
                        <li><a href="{!! route('blog.tag',$new_tag->name) !!}">{!! $new_tag->name !!}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- tags list end-->



                <!-- Latest Post -->
                <div class="blog-post">
                   <b> <h3>Latest Blog Post</h3></b>
                    @foreach($recent as $new)
                    <div class="media">
                        <a class="pull-left" href="javascript:;">
                            <img class=" " src="{!! $new->img_thumbnail !!}" alt="">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"><a href="{!! route('front.blog_details',$new->meta_data) !!}">{!! \App\Blog::fullDate($new->id) !!} </a></h5>
                            <p>
                                {!! $new->title !!}
                            </p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- End of Latest Post -->



                <!-- Archive -->
                {{--<div class="archive">--}}
                    {{--<h3>Archive</h3>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--@foreach ($links as  $posts)--}}

                            {{--<li><a href="javascript:;"><i class="  fa fa-angle-right"></i>{{ $posts->year }}</a></li>--}}

                        {{--@endforeach--}}

                    {{--</ul>--}}
                {{--</div>--}}
                <!-- Archive End -->

            </div>
        </div>
        <!-- end of Right side bar -->

        <!--blog end-->
    </div>

</div>
<!--container end-->
@stop