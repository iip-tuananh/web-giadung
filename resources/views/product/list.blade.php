@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
   <div class="title_full">
      <div class="container a-center">
         <h1 class="title_page">{{$title}}</h1>
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
                  <li><strong ><span>{{$title}}</span></strong></li>
               </ul>
               </div>
         </div>
      </div>
   </section>
   </div>
   <div class="section wrap_background">
   <div class="container ">
      <div class="bg_collection section">
         <div class="row">
               <aside class="dqdt-sidebar sidebar left-content col-xl-3 col-lg-3 col-md-12 col-sm-12">
               <div class="wrap_background_aside asidecollection">
                  <aside class="aside-item sidebar-category collection-category">
                     <div class="aside-title">
                        <h2 class="title-head margin-top-0 cate"><span>Danh mục sản phẩm</span></h2>
                     </div>
                     <div class="aside-content">
                        <nav class="nav-category navbar-toggleable-md">
                           <ul class="nav navbar-pills">
                              <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Trang chủ</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">Giới thiệu</a></li>
                              <li class="nav-item">
                                 <a href="{{route('allProduct')}}" class="nav-link">Sản phẩm</a>
                                 <i class="fa fa-caret-down"></i>
                                 <ul class="dropdown-menu">
                                    @foreach ($categoryhome as $cate)
                                    <li class="dropdown-submenu nav-item">
                                       <a class="nav-link" href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                                       @if (count($cate->typeCate) > 0)
                                       <i class="fa fa-caret-down"></i>
                                       <ul class="dropdown-menu">
                                          @foreach ($cate->typeCate as $type)
                                             <li class="nav-item lv3">
                                                <a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'typecate'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                             </li>
                                          @endforeach
                                       </ul>
                                       @endif
                                    </li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{route('allListBlog')}}">Tin tức</a>
                                 @if (isset($blogCate))
                                 <i class="fa fa-caret-down"></i>
                                 <ul class="dropdown-menu">
                                    @foreach ($blogCate as $cate)
                                       <li class="dropdown-submenu nav-item">
                                          <a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                                       </li>
                                    @endforeach
                                 </ul>
                                 @endif
                              </li>
                              <li class="nav-item"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a></li>
                           </ul>
                        </nav>
                     </div>
                  </aside>
                  <div class="aside-item aside_product_love f-left w-100">
                     <div class="aside-title">
                           <h2 class="title-head">
                           <a href="#" title="Sản phẩm giảm giá">Sản phẩm giảm giá</a>
                           </h2>
                     </div>
                     <div class="slick_vertical_love">
                        @foreach ($discountProductsHome as $product)
                        <div class="products itemss big-item-product item-border">
                           @include('layouts.product.detail-product-small', ['product'=>$product])
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               </aside>
               <div class="main_container collection col-xl-9 col-lg-9 col-md-12 col-sm-12">
               <div class="category-products products">
                  <div class="clearfix"></div>
                  <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                     <div class="row">
                        @foreach ($list as $product)
                           <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                              @include('layouts.product.detail-product-big', ['product'=>$product])
                           </div>
                        @endforeach
                     </div>
                     <div class="section pagenav a-center">
                           {{$list->links()}}
                     </div>
                  </section>
               </div>
               </div>
         </div>
      </div>
   </div>
   </div>
</div>
@endsection