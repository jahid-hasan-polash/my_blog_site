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
                            By <a href="#">Admin</a>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="javascript:;"><em>{!! $blog->tag !!}</em></a></li>
                        </ul>
                        <div class="shate-view">
                            <ul class="list-unstyled">
                                <li><a href="javascript:;">{!! $blog->views !!} Views</a></li>
                                <li><a href="javascript:;">{!! $blog->share !!} Share</a></li>
                                <li><a href="javascript:;">{!! $blog->like !!} Likes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-10">
                        <h1>{!! $blog->title !!}</h1>
                        <p>{!! $blog->details !!}</p>



                  <!--      <div class="media">
                            <h3>Comments</h3>
                            <hr>
                            <a class="pull-left" href="javascript:;">
                                <img class="media-object" src="front/img/avatar1.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Anjelina Joli <span>|</span>
                                    <span>12 July 2013, 10:20 </span>
                                </h4>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                </p>
                                <a href="javascript:;">Reply</a>
                                <hr>
                                <!-- Nested media object -->
                               <!-- <div class="media">
                                    <a class="pull-left" href="javascript:;">
                                        <img class="media-object" src="front/img/avatar2.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            Tom Cruse <span>|</span>
                                            <span>12 July 2013, 10:30 </span>
                                        </h4>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                        </p>
                                        <a href="javascript:;">Reply</a>
                                    </div>
                                </div>
                                <!--end media-->
                           <!--     <hr>
                                <div class="media">
                                    <a class="pull-left" href="javascript:;">
                                        <img class="media-object" src="front/img/avatar1.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            Nicol Kidman <span>|</span>
                                            <span>12 July 2013, 10:40 </span>
                                        </h4>
                                        <p>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                        </p>
                                        <a href="javascript:;">Reply</a>
                                    </div>
                                </div>
                                <hr>
                                <!--end media-->
                         <!--   </div>
                        </div> -->

<!--
                        <div class="media">
                            <a class="pull-left" href="javascript:;">
                                <img class="media-object" src="front/img/avatar2.jpg" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Tom Cruse <span>|</span>
                                    <span>12 July 2013, 11:10 </span>
                                </h4>
                                <p>
                                    Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                                </p>
                                <a href="javascript:;">Reply</a>
                            </div>
                        </div>
-->

                    <!--    <div class="post-comment">
                            <h3 class="skills">Post Comments</h3>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Name" class="col-lg-12 form-control">
                                    </div>

                                    <div class="col-lg-4">
                                        <input type="text" placeholder="Email" class="col-lg-12 form-control">
                                    </div>

                                    <div class="col-lg-4">
                                        <input type="text" placeholder="2*five=? *" class="col-lg-12 form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message" rows="8" class=" form-control"></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-danger pull-right">Post Comment</button>
                                </p>
                            </form>
                        </div> -->



                    </div>
                </div>

            </div>

        </div>



        <!-- Right side bar -->
        <div class="col-lg-3">
            <div class="blog-side-item">
                <div class="search-row">
                    <input type="text" class="form-control" placeholder="Search here">
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
                            <li><a href="#">{!! $new_tag->name !!}</a></li>
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
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> May 2013</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> April 2013</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> March 2013</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> February 2013</a></li>
                        <li><a href="javascript:;"><i class="  fa fa-angle-right"></i> January 2013</a></li>
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