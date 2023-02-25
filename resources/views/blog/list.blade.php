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
               </li>
               <span class="mr_lr">&nbsp;/&nbsp;</span>
               <li >
                  <a href="javascript:;" title="Tin tức"><span>{{$title_page}}</span></a>	
               </li>
            
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
               @foreach ($blogs as $item)
               <div class="row" style="padding-bottom: 10px">
                  <div class="col-md-12">
                     <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                     <img src="{{$item->image}}" alt="" srcset="" style="height: 90px; width:90px">
                    
                        {{languageName($item->title)}}
                     </a>
                  </div>
               </div>
               @endforeach
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