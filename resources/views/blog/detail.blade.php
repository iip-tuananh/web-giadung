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
<div class="bodywrap">
	<div class="breadcrumb_background">
	<div class="title_full">
		<div class="container a-center">
			<p class="title_page">{{languageName($blog_detail->title)}}</p>
		</div>
	</div>
	<section class="bread-crumb">
		<span class="crumb-border"></span>
		<div class="container">
			<div class="rows">
				<div class="col-xs-12 a-left">
				<ul class="breadcrumb" >
					<li class="home">
						<a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
						<span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
					</li>
					<li >
						<a  href="{{route('allListBlog')}}"><span >Tin tức</span></a>	
						<span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
					</li>
					<li><strong><span >{{languageName($blog_detail->title)}}</span></strong></li>
				</ul>
				</div>
			</div>
		</div>
	</section>
	</div>
	<section class="blogpage">
	<div class="container article-wraper" itemscope itemtype="https://schema.org/Article">
		<div class="bg_blog">
			<div class="wrap_background_aside padding-top-0 margin-bottom-30">
				<article class="article-main">
				<div class="row">
					<div class="right-content col-xl-9 col-lg-9 col-md-12 margin-top-0 margin-bottom-0  order-xs-last order-sm-last order-md-last">
						<div class="article-details clearfix">
							<h1 class="article-title">{{languageName($blog_detail->title)}}</h1>
							<div class="rte">
							{!!languageName($blog_detail->content)!!}
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-12  tags-list">
							</div>
							<div class="col-xs-12 col-md-6 a-right share_social">
							<div class="social-media" data-permalink="{{{route('detailBlog',['slug'=>$blog_detail->slug])}}}">
								<label><i class="fa fa-share-alt"></i> Chia sẻ bài viết: </label>
								<a target="_blank" href="//twitter.com/share?text=&amp;url={{route('detailBlog',['slug'=>$blog_detail->slug])}}" class="share-twitter" title="Chia sẻ lên Twitter">
								<i class="fab fa-twitter"></i>
								</a>
								<a target="_blank" href="//www.facebook.com/sharer.php?u={{route('detailBlog',['slug'=>$blog_detail->slug])}}" class="share-facebook" title="Chia sẻ lên Facebook">
								<i class="fab fa-facebook-f"></i>
								</a>
								<a target="_blank" href="//plus.google.com/share?url={{route('detailBlog',['slug'=>$blog_detail->slug])}}" class="share-google" title="+1">
								<i class="fab fa-google-plus-g"></i>
								</a>
							</div>
							</div>
						</div>
						<div class="w-100 clear-fix">
							<div class="w-100 clear-fix">
								
							</div>
						</div>
					</div>
					@include('layouts.main.rightnav-page')
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-12">
								<div class="heading a-center">
								<h2><a href="/tin-tuc" title="Bài viết liên quan">Bài viết liên quan</a></h2>
								<p class="title_small hidden-xs">
								</p>
								</div>
						</div>
						</div>
						<div class="content-blog-index slickblogaa clearfix row blogs-mobile">
						@foreach ($blogs as $blog)
							<div class="col-xl-4 col-lg-4 col-md-4 col-9">
									<div class="itemblog_big">
									<div class="thumb">
									<a class="image-blog scale_hover" href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
									<img class="imageload lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blog->image}}"  alt="{{languageName($blog->title)}}">
									</a>
									</div>
									<div class="content-blog">
									<h3>
										<a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
									</h3>
									<div class="posts">
										<p>
											<div class="des">
												{{languageName($blog->description)}}
											</div>
											<a href="{{route('detailBlog',['slug'=>$blog->slug])}}" class="doctiep text-danger" title="Đọc tiếp">[Đọc tiếp]</a>
										</p>
									</div>
									</div>
									</div>
							</div>
						@endforeach
						</div>
						<style>
						.posts .des {
							overflow: hidden;
							text-overflow: ellipsis;
							display: -webkit-box;
							-webkit-line-clamp: 3; /* number of lines to show */
									line-clamp: 3; 
							-webkit-box-orient: vertical;
						}
						</style>
				</div>
				</article>
			</div>
		</div>
	</div>
	</section>
@endsection