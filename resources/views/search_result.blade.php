@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
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
               <li><strong><span>Tìm kiếm</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="section_category_index clearfix margin-bottom-20">
  <div class="container">
	#@include('menuheader')
  </div>
</section>
<section class="signup search-main margin-bottom-20">
   <div class="container">
      <div class="bg clearfix">
         <div class="page-title">
            <h1>Có {{$countproduct}} kết quả tìm kiếm phù hợp</h1>
         </div>
         <div class="products-view-grid products cls_search clearfix">
            <div class="row">
				@foreach ($resultPro as $item)
					<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-col">
					<div class="item_product_main">
						@include('layouts.product.itempro',['product'=>$item])
					</div>
					</div>
				@endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endsection