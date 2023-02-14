@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/product_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <p class="title_page">{{languageName($product->name)}}</p>
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
                     <li>
                        <a class="changeurl"  href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}"><span >{{languageName($product->cate->name)}}</span></a>						
                        <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                     </li>
                     <li><strong><span>{{languageName($product->name)}}</span></strong>
                     <li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="product details-main" itemscope itemtype="https://schema.org/Product">
      <div class="container">
         <div class="bg_product clearfix">
            <div class="section wrap-padding-15 wp_product_main clearfix">
               <div class="details-product section">
                  <div class="row ">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                           <div class="col-xl-9 col-lg-9 col-12 order-xs-last order-sm-last order-md-last">
                              <div class="row">
                                 <div class="product-detail-left product-images col-xs-12 col-sm-12 col-md-12 col-lg-5 col-lg-5-pro">
                                    <div class="wrapbb">
                                       <div class="slider-big-video clearfix margin-bottom-20">
                                          <div class="slider slider-for">
                                             @foreach ($imgs as $img)
                                                <a class="img_bigg" href="{{$img}}" title="Click để xem">
                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" class="lazyload img-responsive mx-auto d-block">
                                                </a>
                                             @endforeach
                                          </div>
                                       </div>
                                       <div class="slider-has-video clearfix">
                                          <div class="slider slider-nav">
                                             @foreach ($imgs as $img)
                                                <div class="fixs">
                                                   <a class="a_img">
                                                   <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" />
                                                   </a>
                                                </div>
                                             @endforeach
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-lg-7-pro details-pro">
                                       <div class="fw w_100">
                                          <div class="title_p clearfix">
                                             <h1 class="title-product">{{languageName($product->name)}}</h1>
                                          </div>
                                          <div class="reviews_details_product ">
                                             <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail" data-id="19534276"></div>
                                          </div>
                                          @if ($product->price > 0 && $product->discount > 0)
                                             <div class="price-box clearfix">
                                                <span class="special-price">
                                                   <span class="price product-price">{{number_format($priceDiscount)}}₫</span>
                                                </span>
                                                <!-- Giá Khuyến mại -->
                                                <span class="old-price" >
                                                   <del class="price product-price-old">
                                                   {{number_format($product->price)}}₫
                                                   </del>
                                                </span>
                                                <!-- Giá gốc -->
                                             </div>
                                          @elseif($product->price > 0 && $product->discount == 0)
                                             <div class="price-box clearfix">
                                                <span class="special-price">
                                                   <span class="price product-price">{{number_format($product->price)}}₫</span>
                                                </span>
                                                <!-- Giá gốc -->
                                             </div>
                                          @else
                                             <div class="price-box clearfix">
                                                <span class="special-price">
                                                   <a href="tel:{{$setting->phone1}}"><span class="price product-price">Liên hệ</span></a>
                                                </span>
                                                <!-- Giá gốc -->
                                             </div>
                                          @endif
                                       </div>
                                       <div class="form-product">
                                          @if (json_decode($product->preserve)[0]->detail != null)
                                          <div class="select-swatch">
                                             <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                                                <div class="header">Màu sắc</div>
                                                <div class="select-swap">
                                                   @foreach (json_decode($product->preserve) as $key=>$item)
                                                      <div data-value="" class="n-sd swatch-element color ">
                                                         <input data-value="{{$item->detail}}" class="variant-0" id="swatch-{{$key}}" type="radio" name="option1" value="{{$item->detail}}" />
                                                         <label class=" has-thumb" for="swatch-{{$key}}">
                                                         <span>{{$item->detail}}</span>
                                                         </label>
                                                      </div>
                                                   @endforeach
                                                </div>
                                             </div>
                                          </div>
                                          @endif
                                          <div class="clearfix form-group ">
                                             <div class="custom custom-btn-number show">
                                                <label class="sl section">Số lượng</label>
                                                <div class="custom input_number_product custom-btn-number form-control">									
                                                   <button class="btn_num num_1 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;" type="button"><i class="fas fa-minus"></i></button>
                                                   <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                                   <button class="btn_num num_2 button button_qty" onClick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><i class="fas fa-plus"></i></button>
                                                </div>
                                             </div>
                                             <div class="btn-mua button_actions clearfix">
                                                <button type="submit" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart" data-url="{{route('addToCart')}}" data-id="{{$product->id}}">
                                                <span class="txt-main text_1">Thêm vào giỏ hàng</span>
                                                </button>
                                                <button type="submit" class="btn fast btn_base btn_add_cart btn-cart buy-now" data-url="{{route('addToCart')}}" data-id="{{$product->id}}" data-redirect="{{route('listCart')}}">
                                                <span class="txt-main text_1">Mua ngay</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="contact">Gọi đặt mua: <i class="fab fa-whatsapp"></i> <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a> (8:00 - 22:00)</div>
                                 </div>
                              </div>
                              <div class="tab_h">
                                 <div class="section bg_white">
                                    <div class="product-tab e-tabs not-dqtab">
                                       <ul class="tabs tabs-title clearfix">
                                          <li class="tab-link active" data-tab="#tab-1">
                                             <h3>Mô tả sản phẩm</h3>
                                          </li>
                                       </ul>
                                       <div class="tab-float">
                                          <div id="tab-1" class="tab-content active content_extab">
                                             <div class="rte product_getcontent">
                                                <div id="content">
                                                   {!!languageName($product->content)!!}
                                                </div>
                                                <div class="read-more">
                                                   <span>Xem thêm <i class="fa fa-angle-down"></i></span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Sản phẩm yêu thích -->
                              @if (count($productlq) > 1)
                              <div class="section_like clearfix margin-bottom-30">
                                 <h2 class="clearfix">
                                    <a href="san-pham-noi-bat" title="Sản phẩm yêu thích">Sản phẩm liên quan</a>
                                 </h2>
                                 <div class="clearfix">
                                    <div class="slick_product slick-like">
                                       @foreach ($productlq as $pro)
                                          @if ($pro->id != $product->id)
                                             <div class="item">
                                                @include('layouts.product.detail-product-big', ['product'=>$pro])
                                             </div>
                                          @endif
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                              @endif
                              <!-- End sản phẩm yêu thích-->
                           </div>
                           <div class="col-xl-3 col-lg-3 col-12 order-sm-last order-fix">
                              <div class="aside-policy clearfix d-sm-none d-md-none d-block d-lg-block d-xl-block">
                                 <div class="item_poli clearfix">
                                    <div class="icon_left">
                                       <i class="fas fa-paper-plane"></i>
                                    </div>
                                    <div class="content_poli">
                                       <p>Chúng tôi cam kết sẽ gửi sản phẩm trong 2 ngày</p>
                                    </div>
                                 </div>
                                 <div class="item_poli clearfix">
                                    <div class="icon_left">
                                       <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content_poli">
                                       <p>Gọi cho chúng tôi ngay để biết thêm về sản phẩm</p>
                                    </div>
                                 </div>
                                 <div class="item_poli clearfix">
                                    <div class="icon_left">
                                       <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content_poli">
                                       <p>Trả lại các mặt hàng đã mua và nhận lại tiền</p>
                                    </div>
                                 </div>
                                 <div class="item_poli clearfix">
                                    <div class="icon_left">
                                       <i class="fas fa-tags"></i>
                                    </div>
                                    <div class="content_poli">
                                       <p>Mua sản phẩm và nhận
                                          được mã giảm giá đặc biệt
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="aside-item aside_product_love aside_relate margin-bottom-10">
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
      function activeTab(obj){
         $('.product-tab ul li').removeClass('active');
         $(obj).addClass('active');
         var id = $(obj).attr('data-tab');
         $('.tab-content').removeClass('active');
         $(id).addClass('active');
      }
      $(".tab-content .rte").each( function(e){
         if($('.tab-content .rte #content').height()>=300){
            $('.tab-content').find('.read-more').removeClass('hidden').addClass('more');
         }
         else{
            $('.tab-content').find('.read-more').addClass('hidden');
         }
      });
      
      jQuery('.read-more').on('click', function(event) { 
         if ($('.read-more').hasClass('more')) {
            $(this).removeClass('more').addClass('less');
            $(this).html('<span>Thu gọn <i class="fa fa-angle-up"></i></span>');
         }else {
            $(this).removeClass('less').addClass('more');
            $(this).html('<span>Xem thêm <i class="fa fa-angle-down"></i></span>');
            $('html, body').animate({
               scrollTop: $('#content').offset().top
            }, 200);
         }
      
         jQuery(".tab-content .rte").toggleClass("expand");
      });
      $('.product-tab ul li').click(function(){
         activeTab(this);
         return false;
      });
      
      $('.slider-nav').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         asNavFor: '.slider-for',
         dots: false,
         centerMode: false,
         infinite: false,
         focusOnSelect: true,
         responsive: [
            {
               breakpoint: 1025,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
               }
            },
            {
               breakpoint: 991,
               settings: {
                  slidesToShow: 5
               }
            },
            {
               breakpoint: 480,
               settings: {
                  slidesToShow: 4
               }
            }
         ]
      });
      $('.slider-for').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         lazyLoad: 'ondemand',
         fade: true,
         infinite: false,
         asNavFor: '.slider-nav',
         adaptiveHeight: false,
         responsive: [
            {
               breakpoint: 480,
               settings:{
                  dots: true
               }
            }
         ]
      });
      
      $('.slick-like').slick({
         autoplay: false,
         autoplaySpeed: 6000,
         dots: false,
         arrows: true,
         infinite: false,
         speed: 300,
         slidesToShow: 3,
         slidesToScroll: 3,
         responsive: [
            {
               breakpoint: 1200,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
               }
            },
            {
               breakpoint: 1024,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
               }
            },
            {
               breakpoint: 991,
               settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
               }
            },
            {
               breakpoint: 767,
               settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
               }
            }
         ]
      })
      
      
   </script>
   {{-- <link href="//bizweb.dktcdn.net/100/408/532/themes/853298/assets/bpr-products-module.css?1646300280270" rel="stylesheet" type="text/css" /> --}}
   <div class="sapo-product-reviews-module"></div>
@endsection