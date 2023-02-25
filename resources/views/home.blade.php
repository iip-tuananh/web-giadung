@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@if (session()->has('success'))
<script>
   $.notify("Gửi đơn hàng thành công!", "success");
</script>
@endif
@endsection
@section('content')
<section class="awe-section-1">
   <div id="magik-slideshow" class="magik-slideshow">
      @foreach ($banners as $banner)
      <div class="items">
         <a href="javascripts:;">
            <picture>
               <source 
                  media="(min-width: 1200px)"
                  srcset="{{$banner->image}}">
               <source 
                  media="(min-width: 992px)"
                  srcset="{{$banner->image}}">
               <source 
                  media="(min-width: 569px)"
                  srcset="{{$banner->image}}">
               <source 
                  media="(min-width: 480px)"
                  srcset="{{$banner->image}}">
               <img src="{{$banner->image}}" alt="{{$setting->company}}"/>
            </picture>
         </a>
      </div>
      @endforeach
   </div>
</section>
<section class="awe-section-4">
   <div class="section_tab_san_pham">
   <div class="container">
      <div class="bg">
         <div class="new_title">
            <h2>Sản phẩm nổi bật</h2>
         </div>
         <div class="e-tabs not-dqtab ajax-tab-2" data-section="ajax-tab-2" data-view="grid_4">
            <div class="content">
               <span class="hidden-md hidden-lg button_show_tab">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </span>
               <div class="tab-1 tab-content">
                  <div class="slick_ajax_tab products-view-grid">
                     @foreach ($hotProduct as $pro)
                     <div class="item">
                        @include('layouts.product.itempro',['product'=>$pro])
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="awe-section-3">
   <section class="section_hotdeal">
      <div class="container">
         <br>
         <br>
         <br>
         <br>
         <br>
         <br>
         <h2 class="section_title">
            <a href="san-pham-khuyen-mai" title="Giá sốc cuối tuần">
            Giá sốc cuối tuần
            </a>
            <span class="sub_title block">
            <span class="sub1">Giảm giá mặt hàng đồ gia dụng lên đến 70%</span>
            </span>
            <span class="timer-view block">
            <span class="clock"></span>
            </span>
            <span class="view-more block">
            </span>
         </h2>
      </div>
   </section>
   <script type="text/javascript">
      $(document).ready(function() {
         var today = new Date();
         today = today.getTime()/1000;
         var finalDate = new Date();
         finalDate.setFullYear(2022);
         finalDate.setMonth(12 - 1);
         finalDate.setDate(14);
         finalDate.setHours(21);
         finalDate.setMinutes(30);
         finalDate.setSeconds(30);
         var finalDate  = finalDate.getTime()/1000;
         var diff  = finalDate - today;
         if(diff>0){
            $('.clock').FlipClock(diff, {
                  clockFace: 'DailyCounter',
                  countdown: true
            }); 
         }else{
            $('.timer-view').addClass('d-none');
         }
      });
   </script>
</section>
@foreach ($categoryhome as $cate)
@if(count($cate->product)>0)
<section class="awe-section-6">
   <section class="section_product section_product_1">
      <div class="container">
         <div class="bg">
            <div class="section_title clearfix">
               <h2>
                  <a href="bep" class="url-title" title="Bếp">
                  {{languageName($cate->name)}}
                  </a>
               </h2>
               <div class="nav-right">
                  @foreach ($cate->typeCate as $type)
                  <a href="{{route('allListProType',['cate'=>$cate->slug,'typecate'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                  @endforeach
               </div>
            </div>
            <div class="section_content">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-right">
                     <div class="inner clearfix">
                        @foreach ($cate->product as $product)
                        <div class="col-md-20 col-sm-3 col-xs-6 item">
                           @include('layouts.product.itempro')
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
<br>
@endif
@endforeach
<section class="awe-section-9">
   <section class="section_blogs">
      <div class="container">
         <div class="bg">
            <div class="section_content">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 big">
                     <h2 class="section_title">
                        <a href="tin-tuc" title="Tin tức">
                        Tin tức
                        </a>
                     </h2>
                     <div class="slick_blog_index">
                        @foreach ($homeBlog as $blog)
                        <div class="item item-blog-index">
                           <div class="blog-img">
                              <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                              <img  class="lazyload" 
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                                 data-src="{{$blog->image}}" 
                                 alt="{{languageName($blog->title)}}">
                              </a>
                           </div>
                           <div class="blog-content">
                              <h3><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a> </h3>
                              <div class="justify des limit-text-3">
                                 {{languageName($blog->description)}}
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div class="blog-img">
                           <a href="/hoc-cach-lam-tom-nuong-pho-mai-vua-thom-vua-ngay" title="Học cách làm tôm nướng phô mai vừa thơm vừa ngậy">
                           <img  class="lazyload" 
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                              data-src="//bizweb.dktcdn.net/thumb/large/100/384/470/articles/t7.jpg?v=1587694720203" 
                              alt="Học cách làm tôm nướng phô mai vừa thơm vừa ngậy">
                           </a>
                        </div>
                        <div class="blog-content">
                           <h3><a href="/hoc-cach-lam-tom-nuong-pho-mai-vua-thom-vua-ngay" title="Học cách làm tôm nướng phô mai vừa thơm vừa ngậy">Học cách làm tôm nướng phô mai vừa thơm vừa ngậy</a> </h3>
                           <div class="justify des">Tôm là thực phẩm có chứa hàm lượng&nbsp;canxi, dinh dưỡng cao, vì thế đây là thực phẩm được nhiều người dùng để chế biến thành nhiều món ăn khác nhau. Đặc biệt là&nbsp;tôm nướng phô mai&nbsp;được rất nhiều người yêu thích bởi hương vị đậm đà, “lôi cuốn” của món...</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mini">
                     <h2 class="section_title">
                        <a href="tin-tuc">
                        Tin tức nổi bật
                        </a>
                     </h2>
                     @foreach ($hotBlogs as $blog)
                     <div class="item item-blog-index">
                        <div class="blog-img">
                           <a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{$blog->name}}">
                           <img  class="lazyload" 
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                              data-src="{{$blog->image}}" 
                              alt="{{$blog->name}}">
                           </a>
                        </div>
                        <div class="blog-content">
                           <h3><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{$blog->name}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a> </h3>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>
<br>
<br>
@endsection