<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="{{url()->current()}}" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="gia-dung" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/bootstrap_css.scss.css')}}">
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/style.scss.css')}}">
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/owlcarousel.scss.css')}}">
   <link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/index.scss.css')}}">
   <link rel="preload" href="{{asset('frontend/fonts/fa-brands-400.woff')}}" as="font" type="font/woff" crossorigin="anonymous">
   <link rel="preload" href="{{asset('frontend/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="{{asset('frontend/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
   <link href="{{asset('frontend/css/bootstrap_css.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{asset('frontend/css/index.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{asset('frontend/css/style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{asset('frontend/css/owlcarousel.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <script src="{{asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
</head>
<body>
   <div class="opacitycart">
   </div>
   <div class="page-body">
      <div class="hidden-md hidden-lg opacity_menu"></div>
      <div class="opacity_filter"></div>
      <div class="body_opactiy"></div>
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
      <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
      <div id="popup-cart" class="popcart">
            <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
               <span class="your_product">
               <i class="fas fa-check"></i> Bạn đã thêm <span class="cart-popup-name"></span> vào giỏ hàng </span>
            </div>
            <a title="Đóng" class="quickview-close close-pop"><i class="fas fa-times"></i></a>
            <div class="wrap_popup">
               <div class="title-quantity-popup" >
                  <span class="cart_status" onclick="window.location.href='/cart';">Giỏ hàng của bạn có <span class="cart-popup-count"></span> sản phẩm </span>
               </div>
               <div class="content-popup-cart">
                  <div class="thead-popup">
                        <div style="width: 50%;" class="text-left">Sản phẩm</div>
                        <div style="width: 20%;" class="text-center">Đơn giá</div>
                        <div style="width: 15%;" class="text-center">Số lượng</div>
                        <div style="width: 15%;" class="text-center">Thành tiền</div>
                  </div>
                  <div class="tbody-popup scrollbar-dynamic">
                  </div>
                  <div class="tfoot-popup section">
                        <div class="section footer-popup">
                        <div class="inline-block f-left">
                           <span class="block">
                           Giao hàng trên toàn quốc
                           </span>
                           <a class="f-left button buy_ btn-proceed-cl close-pop" title="tiếp tục mua hàng" ><span>
                           Tiếp tục mua hàng</span></a>
                        </div>
                        <div class="tfoot-popup-1 f-right inline-block clearfix">
                           <span class="total-p popup-total block">Thành tiền: <span class="total-price"></span></span>
                           <div class="tfoot-popup-2 clearfix section">
                              <a class="button checkout_ btn-proceed-checkout" title="Tiến hành đặt hàng" href="/checkout"><span>Tiến hành đặt hàng</span></a>
                           </div>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
      </div>
      <div id="popupCartModal" class="modal fade" role="dialog">
      </div>
      <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span></a>
   </div>
   <div class='jas-sale-pop flex pf middle-xs'></div>
   <script type='text/javascript'>
      //<![CDATA[ 
      function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://use.fontawesome.com/releases/v5.7.2/css/all.css");
      //]]> 
   </script>
</body>
</html>