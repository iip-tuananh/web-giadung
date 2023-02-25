@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{strip_tags(languageName($product->description))}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{asset('frontend/css/bpr-products-module.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/swatch_style.scss.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/product_style.scss.css')}}">
@endsection
@section('js')
@endsection
@section('content')
@php
$img = json_decode($product->images);
$giagiam = $product->price-($product->price*$product->discount/100)
@endphp
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
               <li>
                  <a href="{{route('allListProCate',['cate'=>$product->cate->slug])}}" title="{{languageName($product->cate->name)}}"><span>{{languageName($product->cate->name)}}</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li><strong><span>{{languageName($product->name)}}</span></strong>
               <li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="main-product margin-bottom-20">
   <div class="main container">
      <div class="col-main details-product">
         <div class="product-view form-product clearfix">
            <div class="row">
               <div class="product-essential">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="product-name">
                        <h1>{{languageName($product->name)}}</h1>
                     </div>
                  </div>
                  <div class="product-img-box col-sm-6 col-xs-12 col-md-5 col-lg-5">
                     <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                           @foreach ($img as $item)
                           <div class="swiper-slide">
                              <img src="{{$item}}" />
                           </div>
                           @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                     </div>
                     <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                           @foreach ($img as $item)
                           <div class="swiper-slide">
                              <img src="{{$item}}" />
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="product-shop col-sm-6 col-xs-12 col-md-4 col-lg-4 details-pro">
                     <div class="bg-zz">
                        @if($product->price >0 && $product->discount >0)
                        <div class="price-block">
                           <div class="price-box" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <span class="special-price">
                              <span class="price product-price" >{{number_format($giagiam,0,'','.')}}₫</span> 
                              </span>
                              <!-- Giá Khuyến mại -->
                              <span class="old-price">
                              <del class="price product-price-old sale" itemprop="priceSpecification">{{number_format($product->price,0,'','.')}}₫</del> 
                              </span>
                              <!-- Giá gốc -->
                              <link itemprop="availability" href="http://schema.org/InStock" />
                           </div>
                        </div>
                        @elseif($product->price > 0 && $product->discount == 0)
                        <div class="price-block">
                           <div class="price-box" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <span class="special-price">
                              <span class="price product-price" >{{number_format($product->price,0,'','.')}}₫</span> 
                              </span>
                              <!-- Giá Khuyến mại -->
                              <!-- Giá gốc -->
                              <link itemprop="availability" href="http://schema.org/InStock" />
                           </div>
                        </div>
                        @else
                        <div class="price-block">
                           <div class="price-box" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                              <span class="special-price">
                              <span class="price product-price" >
                              <a style="color:white   "href="tel:+{{$setting->phone1}}}}">Liên Hệ</a>
                              </span> 
                              </span>
                           </div>
                        </div>
                        @endif
                        <div class="tt">
                           @if($giagiam > 0)
                           <div class="add-to-box form-product ">
                              <div class="add-to-cart">
                     
                                    <div class="box-variant clearfix ">
                                       <input type="hidden" name="variantId" value="32283493" />
                                    </div>
                                    <div class="box_buy ">
                                       <label class="hqty hidden-xs fixprice box">Số lượng</label>
                                       <div class="hqty ct2 pull-left fixprice box">
                                          <div class="custom pull-left">
                                             <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="reduced items-count-s" type="button">-</button>	

                                             <input type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" />

                                             <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="increase items-count-s" type="button">+</button> 
                                          </div>
                                       </div>
                                       <div class="pull-left ct2 fixprice">
                                          
                                          <button class="button btn-cart add_to_cart_new" data-id="{{$product->id}}" data-url="{{route('addToCart')}}" title="Thêm vào giỏ hàng">
                                          <span>Thêm vào giỏ hàng</span>
                                          </button>
                                       </div>
                                    </div>
                              
                              </div>
                           </div>
                           @endif
                        </div>
                     </div>
                     <div class="product-summary product_description margin-top-15">
                        <div class="title">
                           Đặc điểm nổi bật
                        </div>
                        <div class="rte description">
                           {!!languageName($product->description)!!}
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3 hidden-xs hidden-sm">
                     <div class="policy-product">
                        <h3>
                           Chính sách cửa hàng
                        </h3>
                        <ul>
                           <li>
                              <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_poli_pro_1.png?1666237501587" alt="100% hàng chính hãng"/>
                              <span>100% hàng chính hãng</span>
                           </li>
                           <li>
                              <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_poli_pro_2.png?1666237501587" alt="Lỗi là đổi mới trong 12 tháng"/>
                              <span>Lỗi là đổi mới trong 12 tháng</span>
                           </li>
                           <li>
                              <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_poli_pro_3.png?1666237501587" alt="Bảo hành cực dễ chỉ cần số điện thoại"/>
                              <span>Bảo hành cực dễ chỉ cần số điện thoại</span>
                           </li>
                           <li>
                              <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_poli_pro_4.png?1666237501587" alt=" Bảo hành chính hãng 1 năm tại cửa hàng"/>
                              <span> Bảo hành chính hãng 1 năm tại cửa hàng</span>
                           </li>
                           <li>
                              <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_poli_pro_5.png?1666237501587" alt="Sửa chữa nhanh chóng, tiện lợi"/>
                              <span>Sửa chữa nhanh chóng, tiện lợi</span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="product-collateral margin-top-20 clearfix">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3" >
                  <div class="bg clearfix" style="padding: 10px">
                     <strong style="color: red; font-size:18px">
                     Thông tin chi tiết
                     </strong> 
                     <br>
                     <br>
                     {!!languageName($product->content)!!}
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9 sbar-product-middle">
                  <div class="bg clearfix">
                     <div class="toc-prouct">
                        <ul id="toc"></ul>
                     </div>
                     <div class="blogs_product">
                        <h2 class="section_title">
                           <a href="tin-tuc" title="Tin tức Mới">
                           Tin tức Mới
                           </a>
                        </h2>
                        <div class="section_content">
                           <div class="mini">
                              @foreach ($hotBlogs as $item)
                              <div class="item item-blog-index">
                                 <div class="blog-img">
                                    <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                                    <img  class="lazyload" 
                                       src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                                       data-src="{{$item->image}}" 
                                       alt="{{languageName($item->title)}}">
                                    </a>
                                 </div>
                                 <div class="blog-content">
                                    <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a> </h3>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @if(count($productlq)>1)
         <div class="margin-top-20 aside sock_to_day">
            <div class="product-sok section_product">
               <h2 class="section_title">
                  <a href="noi"  title="Sản phẩm cùng loại" class="url-title">
                  Sản phẩm cùng loại
                  </a>
                  <a class="view-more" href="bep" title="Xem thêm sản phẩm">
                  Xem thêm sản phẩm <i class="fas fa-caret-right"></i>
                  </a>
               </h2>
               <div class="section_content">
                  <div class="slider_sec_product_1 slider-items slick_margin">
                     @foreach ($productlq as $pro)
                     @if($pro->id != $product->id)
                     <div class="item">
                        @include('layouts.product.itempro',['product'=>$pro])
                     </div>
                     @endif
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         @endif
      </div>
   </div>
</section>
</div>
<style>
   .swiper {
   width: 100%;
   height: 100%;
   }
   .swiper-slide {
   text-align: center;
   font-size: 18px;
   background: #fff;
   display: flex;
   justify-content: center;
   align-items: center;
   }
   .swiper-slide img {
   display: block;
   width: 100%;
   height: 100%;
   object-fit: cover;
   }
   .swiper {
   width: 100%;
   height: 300px;
   margin-left: auto;
   margin-right: auto;
   }
   .swiper-slide {
   background-size: cover;
   background-position: center;
   }
   .mySwiper2 {
   height: 80%;
   width: 100%;
   }
   .mySwiper {
   height: 20%;
   box-sizing: border-box;
   padding: 10px 0;
   }
   .mySwiper .swiper-slide {
   width: 25%;
   height: 100%;
   opacity: 0.4;
   }
   .mySwiper .swiper-slide-thumb-active {
   opacity: 1;
   }
   .swiper-slide img {
   display: block;
   width: 100%;
   height: 100%;
   object-fit: cover;
   }
</style>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
   var swiper = new Swiper(".mySwiper", {
     spaceBetween: 10,
     slidesPerView: 4,
     freeMode: true,
     watchSlidesProgress: true,
   });
   var swiper2 = new Swiper(".mySwiper2", {
     spaceBetween: 10,
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
     thumbs: {
       swiper: swiper,
     },
   });
</script>
{{-- <script>
   $('.add_to_cart_new').click(function (e) { 
      id = $(this).data('id');
      url = $(this).data('url');
      quantity = $('input[name=quantity]').val();
      console.log(id,url,quantity);
      $.ajax({
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         type: "post",
         url: url,
         data: {'id': id, 'quantity': quantity},
         success: function(data){
            //  $('.top-cart-content').html(data.html1);
            //  $('.count_item_pr').html(data.html2);
            //  $('.backdrop__body-backdrop___1rvky').addClass('active');
                 $('.opacitycart').addClass('openf');
             if ($(window).width() > 768) {
                 $('#popup-cart-desktop').html(data.html4);
                 $('#popup-cart').addClass('opencart');
             } else {
                 $('#popup-cart-desktop').removeClass('active');
                }
         }
     })
     });
 

</script> --}}
</div>
@endsection