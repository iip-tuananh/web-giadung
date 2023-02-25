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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="preload" href="{{asset('frontend/fonts/fa-brands-400.woff')}}" as="font" type="font/woff" crossorigin="anonymous">
   <link rel="preload" href="{{asset('frontend/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="{{asset('frontend/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous">
   <link href="{{asset('frontend/css/bootstrap_css.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{asset('frontend/css/index.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{asset('frontend/css/style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link href="{{asset('frontend/css/owlcarousel.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
   <link rel="stylesheet" href="{{asset('frontend/css/noindex.scss.css')}}">
   @yield('css')
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
      <div id="popup-cart" class="popcart ">
         <div id="popup-cart-desktop" class="clearfix">
          
            <a title="Đóng" class="quickview-close close-pop"><i class="fas fa-times"></i></a>
            <div class="wrap_popup">
               <div class="title-quantity-popup">
                  <span class="cart_status">Giỏ hàng của bạn có <span class="cart-popup-count">{{count($cartcontent)}}</span> sản phẩm </span>
               </div>
               <div class="content-popup-cart">
                  <div class="thead-popup">
                     <div style="width: 50%;" class="text-left">Sản phẩm</div>
                     <div style="width: 20%;" class="text-center">Đơn giá</div>
                     <div style="width: 15%;" class="text-center">Số lượng</div>
                     <div style="width: 15%;" class="text-center">Thành tiền</div>
                  </div>
                  <div class="tbody-popup scrollbar-dynamic">
                     @php
                     $tong =0;
                     @endphp
                     @foreach ($cartcontent as $item)
                     @php
                     $discountprice = $item['price']-$item['price']*$item['discount']/100;
                     $tong += $discountprice*$item['quantity'];
                     @endphp
                     <div class="item-popup productid-32283366">
                        <div style="width: 13%;" class="border height image_ text-left">
                           <div class="item-image">
                              <a class="product-image" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}" title="{{languageName($item['name'])}}">
                              <img alt="{{languageName($item['name'])}}" src="{{$item['image']}}" width="'+ '90' +'" \="">
                              </a>
                           </div>
                        </div>
                        <div style="width:35.8%;" class="height text-left fix_info">
                           <div class="item-info">
                              <p class="item-name">
                                 <a class="text2line textlinefix" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a>
                              </p>
                              <span class="variant-title-popup"></span>
                              <div class="remove_Cart" title="Xóa" data-id="{{$item['id']}}" data-url="{{route('removeCart')}}"  >
                                 <i class="fa-solid fa-trash-can"></i>
                              </div>
                           </div>
                        </div>
                        <div style="width: 19.9%;" class="border height text-center">
                           <div class="item-price">
                              <span class="price">{{number_format($discountprice,0,'','.')}}₫</span>
                           </div>
                        </div>
                        <div style="width: 17%;" class="border height text-center">
                           <div class="qty_h check_">
                              <button
                                 onclick="btnMinus('{{$item['id']}}','{{route('updateCart')}}')"
                                 class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down"
                                 type="button">–</button>
                              <input
                                 type="text"
                                 maxlength="12" min="1" disabled=""
                                 class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem27698914"
                                 id="qty{{$item['id']}}" name="Lines"
                                 size="4" value="{{$item['quantity']}}">
                              <button
                                 onclick="btnPlus('{{$item['id']}}','{{route('updateCart')}}')"
                                 class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up"
                                 type="button">+</button>
                           </div>
                        </div>
                        <div style="width: 16.2%;" class="border height text-center">
                           <span class="cart-price">
                           <span class="price">{{number_format($item['quantity']*$discountprice,0,'','.')}}₫</span>
                           </span>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <div class="tfoot-popup section">
                     <div class="section footer-popup">
                        <div class="inline-block f-left">
                           <span class="block">
                           Giao hàng trên toàn quốc
                           </span>
                           <a href="{{route('home')}}" class="f-left button buy_ btn-proceed-cl close-pop" title="tiếp tục mua hàng"><span>
                           Tiếp tục mua hàng</span></a>
                        </div>
                        <div class="tfoot-popup-1 f-right inline-block clearfix">
                           <span class="total-p popup-total block">Thành tiền: <span class="total-price">{{number_format($tong,0,'','.')}}₫</span></span>
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
      <div id="popupCartModal" class="modal fade " role="dialog">
         <div class="popup_overlay"></div>
         <div class="modal-dialog">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" data-backdrop="false" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>
               <div class="row row-noGutter">
                  <div class="modal-left col-sm-12 col-lg-12 col-md-12">
                     <h3 class="title"><i class="fa fa-check"></i> Sản phẩm vừa được thêm <span class="hidden-xs">vào giỏ hàng</span></h3>
                     @foreach ($cartcontent as $item)
                     @php
                         $giagiamnew = $item['price']-$item['price']*$item['discount']/100;
                      
                     @endphp
                         <div class="modal-body">
                         <div class="media">
                             <div class="media-left thumb_img">
                                 <div class="thumb-1x1"><img src="{{$item['image']}}" alt="{{languageName($item['name'])}}"></div>
                             </div>
                             <div class="media-body body_content">
                                 <div class="product-title">{{languageName($item['name'])}}</div>
                                 <div class="product-new-price"><span>{{$giagiamnew}}đ</span></div>
                                 <div class="variant_title"><span></span></div>
                             </div>
                         </div>
                         </div>
                     @endforeach
                  </div>
                  <div class="modal-right col-sm-12 col-lg-12 col-md-12">
                    <a href="{{route('checkout')}}" class="btn btn-primary checkout_button btn-full">Tiến hành thanh toán</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span></a>
   </div>
   <div class='jas-sale-pop flex pf middle-xs'></div>
   <script type='text/javascript'>
      //<![CDATA[ 
      function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("footer")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }loadCSS("https://use.fontawesome.com/releases/v5.7.2/css/all.css");
      //]]> 
   </script>
   <script>
      $('.add_to_cart_new').click(function (e) { 
         id = $(this).data('id');
         url = $(this).data('url');
         quantity = $('input[name=quantity]').val();
         $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "post",
            url: url,
            data: {'id': id, 'quantity': quantity},
            success: function(data){
               //  $('.top-cart-content').html(data.html1);
                $('.count_item_pr').html(data.html5);
               //  $('.backdrop__body-backdrop___1rvky').addClass('active');
                    $('.opacitycart').addClass('openf');
                if ($(window).width() > 768) {
                    $('#popup-cart-desktop').html(data.html4);
                    $('#popup-cart').addClass('opencart');
                } else {
                  $('#popupCartModal').html(data.html3);
                  $('#popupCartModal').addClass('show');
                    $('#popup-cart-desktop').removeClass('active');
                   }
            }
        })
        });
    

   </script>
   <script>
      $('.close').click(function (e) { 
         e.preventDefault();
         console.log(123);   
         $('#popupCartModal').removeClass('show');
         $('.opacitycart').removeClass('openf');
         
      });
      $('.opacitycart').click(function (e) { 
         e.preventDefault();
         $(this).removeClass('openf');
         $('#popupCartModal').removeClass('show');
         
      });
      $('.close-pop').click(function (e) { 
         console.log(123);
         $('#popup-cart').removeClass('opencart');
         $('.opacitycart').removeClass('openf');
         
      });
   </script>



</body>
</html>