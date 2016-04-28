@extends('front.layout.master')
@section('content')

<!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Blog Details</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="{!! route('front.blog') !!}">Blog</a></li>
                    <li class="active">Blog Details</li>
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
        <div class="col-lg-9">

      @if(!empty($blog->id))

            <div class="blog-item">
                <div class="row">
                    <div class="col-lg-2 col-sm-2">
                        <div class="date-wrap">
                            <span class="date">{!! \App\Blog::customDay($blog->id)!!}</span>
                            <span class="month">{!! \App\Blog::customMonth($blog->id)!!}</span>
                        </div>
                        <div class="comnt-wrap">
                                <span class="comnt-ico">
                                    <i class="fa fa-comments"></i>
                                </span>
                            <span class="value">15</span>
                            <span class="disqus-comment-count value" data-disqus-identifier="{{$blog->id}}"></span>
                        </div>
                    </div>

                    <div class="col-lg-10 col-sm-10">
                        <div class="blog-img">
                            <img src="{!! $blog->image !!}" alt=""/>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-2 col-sm-2 text-right">
                        <div class="author">
                            By <a href="#">{!! App\User::findOrfail($blog->user_id)->pluck('name') !!}</a>
                        </div>


                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><em>{!!$blog->tag !!}</em></a></li>
                        </ul>



                        <div class="shate-view">
                            <ul class="list-unstyled">
                                <li><a href="javascript:;">{!! $blog->views !!} Views</a></li>
                                {{--<li><a href="javascript:;">{!! $blog->share !!} Share</a></li>--}}
                                <li><a href="javascript:;">{!! $blog->like !!} Recommend</a></li>
                            </ul>
                        </div>


                    </div>


                    <div class="col-lg-10 col-sm-10">
                        <h1>{!! $blog->title !!}</h1>
                        <p>{!! $blog->details !!}</p>
                        {{--<hr>--}}
                        {{--<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Like(23)</a>--}}
                        {{--<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down"></span> Dislike(04)</a>--}}
                        {{--<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-share"></span> Share(123)</a>--}}
                        {{--<hr>--}}
                    </div>

                </div>

            </div>


                <!-- Start Comments Section-->
                <div id="disqus_thread"></div>
                <!-- End Comments Section-->

        </div>
        @else

            <div class="blog-item">
                <div class="row">

                    <div class="col-lg-10 col-sm-10">
                        <div class="blog-img">
                            <h1>Whoops, Blog Post not Found With This URL....</h1>
                        </div>
                    </div>

                </div>
            </div>
          </div>
        @endif


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
                            <li><a href="{!! route('blog.tag',$new_tag->tag) !!}">{!! $new_tag->name !!}</a></li>
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
                <div class="archive">
                    <h3>Archive</h3>
                    <ul class="list-unstyled">
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> May 2016</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> April 2016</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> March 2016</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> February 2016</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> January 2016</a></li>
                    </ul>
                </div>
                <!-- Archive End -->

            </div>
        </div>
        <!-- end of Right side bar -->



        <!--blog end-->
    </div>
</div>
<!--container end-->
@stop

@section('script')

@stop