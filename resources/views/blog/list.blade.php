@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <p class="title_page">Tin tức</p>
         </div>
      </div>
      <section class="bread-crumb">
         <span class="crumb-border"></span>
         <div class="container">
            <div class="rows">
               <div class="col-xs-12 a-left">
                  <ul class="breadcrumb" >
                     <li class="home">
                        <a  href="/" ><span >Trang chủ</span></a>						
                        <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                     </li>
                     <li><strong ><span>{{$title_page}}</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <div class="blog_wrapper" itemscope itemtype="https://schema.org/Blog">
      <div class="container">
         <div class="row">
            <div class="right-content col-xl-9 col-lg-9 col-md-12 margin-top-0 margin-bottom-30 order-xs-last order-sm-last order-md-last">
               <h1 class="hidden">Tin tức</h1>
               <div class="content_blog_new list-blogs blog-main">
                  <div class="row row_blog_responsive">
                     @foreach ($blogs as $blog)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="itembb_full">
                              <div class="blogwp bloglr">
                                 <a class="image-blog" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                                 <img class="imageload lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}"  alt="{{languageName($blog->title)}}">
                                 </a>
                                 <div class="contentright">
                                    <h3>
                                       <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                                    </h3>
                                    <div class="des">
                                       {{languageName($blog->description)}}
                                    </div>
                                    <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="doctiep btn btn-primary" title="Đọc tiếp">Đọc tiếp</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                  </div>
                  <style>
                     .contentright .des {
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-line-clamp: 3; /* number of lines to show */
                              line-clamp: 3; 
                        -webkit-box-orient: vertical;
                     }
                  </style>
                  <div class="col-xs-12 text-center">
                     {{$blogs->links()}}
                  </div>
               </div>
            </div>
            @include('layouts.main.rightnav-page')
         </div>
      </div>
   </div>
   <div class="ab-module-article-mostview"></div>
@endsection