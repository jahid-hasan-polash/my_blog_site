@extends('front.layout.master')
@section('content')
        <!--breadcrumbs start-->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <h1>Blog Archive</h1>
            </div>
            <div class="col-lg-8 col-sm-8">
                <ol class="breadcrumb pull-right">
                    <li><a href="{!! route('front.blog') !!}">Home</a></li>
                    <li class="active">Archive</li>
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

     <div class="blog-item">
         <div class="row">

             <div class="col-lg-10 col-sm-10">
                 <div class="blog-img">
                     @foreach ($blog as $date => $posts)
                         <h1>{{ $date }}</h1>
                         @foreach ($posts as $post)

                           <h4>  <li><a href="{!! route('front.blog_details',$post->meta_data) !!} "><i class="fa fa-angle-right"></i>{{ $post->title }}</a></li></h4>
                         @endforeach
                     @endforeach
                 </div>
             </div>

         </div>
     </div>
 @else
                <div class="blog-item">
                    <div class="row">

                        <div class="col-lg-10 col-sm-10">
                            <div class="blog-img">
                                <h1>Whoops, No Blog Post Found !!</h1>
                            </div>
                        </div>

                    </div>
                </div>

 @endif






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





</div>
</div>
<!-- end of Right side bar -->

<!--blog end-->
</div>

</div>
<!--container end-->
@stop