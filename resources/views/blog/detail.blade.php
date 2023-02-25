@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <ul class="breadcrumb">
               <li class="home">
                  <a href="{{route('home')}}" ><span title="Trang chủ">Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li >
                  <a href="{{route('allListBlog')}}" title="Tin tức"><span>Tin tức</span></a>	
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
			   <li >
				<a href="{{route('listCateBlog',['slug'=>$blog_detail->cate->slug])}}" title="{{languageName($blog_detail->cate->name)}}"><span>{{languageName($blog_detail->cate->name)}}</span></a>	
				<span class="mr_lr">&nbsp;/&nbsp;</span>
			 </li>
               <li><strong><span>{{languageName($blog_detail->title)}}</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="section_category_index clearfix margin-bottom-20">
   <div class="container">
      @include('menuheader')
   </div>
</section>
<section class="col2-right-layout" itemscope  itemtype="http://schema.org/Article">
   <div class="main container main-article margin-bottom-30">
      <div class="row">
         <div class="col-main col-md-9">
            <div role="main" id="content">
               <article class="blog_entry clearfix">
                  <header class="blog_entry-header clearfix">
                     <h1 class="blog_entry-title">{{languageName($blog_detail->title)}}</h1>
                     <div class="entry-content justify">
                        {!!languageName($blog_detail->content)!!}
                     </div>
                  </header>
               </article>
            </div>
         </div>
         <aside class="col-right sidebar col-md-3 col-xs-12 wow bounceInRight animated">
            @include('layouts.blog.rightbar')
         </aside>
      </div>
   </div>
</section>
<script>
   $(document).ready(function () {
   	$('#article_comments').addClass('comment-form');
   });
</script>
@endsection