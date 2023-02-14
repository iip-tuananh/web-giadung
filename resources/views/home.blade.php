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
   <div class="items">
      <a href="#">
         <picture>
               <source 
               media="(min-width: 1200px)"
               srcset="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/slide-img1.jpg?1666237501587">
               <source 
               media="(min-width: 992px)"
               srcset="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/slide-img1.jpg?1666237501587">
               <source 
               media="(min-width: 569px)"
               srcset="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/slide-img1.jpg?1666237501587">
               <source 
               media="(min-width: 480px)"
               srcset="//bizweb.dktcdn.net/thumb/large/100/384/470/themes/761495/assets/slide-img1.jpg?1666237501587">
               <img src="//bizweb.dktcdn.net/thumb/large/100/384/470/themes/761495/assets/slide-img1.jpg?1666237501587" alt="ND Kitchen"/>
         </picture>
      </a>
   </div>
   <div class="items">
      <a href="#">
         <picture>
               <source 
               media="(min-width: 1200px)"
               srcset="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/slide-img2.jpg?1666237501587">
               <source 
               media="(min-width: 992px)"
               srcset="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/slide-img2.jpg?1666237501587">
               <source 
               media="(min-width: 569px)"
               srcset="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/slide-img2.jpg?1666237501587">
               <source 
               media="(min-width: 480px)"
               srcset="//bizweb.dktcdn.net/thumb/large/100/384/470/themes/761495/assets/slide-img2.jpg?1666237501587">
               <img src="//bizweb.dktcdn.net/thumb/large/100/384/470/themes/761495/assets/slide-img2.jpg?1666237501587" alt="ND Kitchen"/>
         </picture>
      </a>
   </div>
   </div>
</section>
<section class="awe-section-2">
   <section class="section_banner">
   <div class="container">
      <div class="banner_slider slider-items slick_margin">
         <div class="item">
               <a class="image_effect" href="#" title="ND Kitchen">
               <img class="img-responsive lazyload" 
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
               data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_banner_1.jpg?1666237501587" 
               alt="ND Kitchen">
               </a>
         </div>
         <div class="item">
               <a class="image_effect" href="#" title="ND Kitchen">
               <img class="img-responsive lazyload" 
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
               data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_banner_2.jpg?1666237501587" 
               alt="ND Kitchen">
               </a>
         </div>
         <div class="item">
               <a class="image_effect" href="#" title="ND Kitchen">
               <img class="img-responsive lazyload" 
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
               data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_banner_3.jpg?1666237501587" 
               alt="ND Kitchen">
               </a>
         </div>
      </div>
   </div>
   </section>
</section>
<section class="awe-section-3">
   <section class="section_hotdeal">
   <div class="container">
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
         <a href="san-pham-khuyen-mai" title="Chi tiết sản phẩm">
         Chi tiết sản phẩm
         </a>
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
<section class="awe-section-4">
   <div class="section_tab_san_pham">
   <div class="container">
      <div class="bg">
         <div class="new_title">
               <h2>Nổi bật trong tuần</h2>
         </div>
         <div class="e-tabs not-dqtab ajax-tab-2" data-section="ajax-tab-2" data-view="grid_4">
               <div class="content">
               <span class="hidden-md hidden-lg button_show_tab">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </span>
               <ul class="tabs tabs-title tab-desktop ajax clearfix evo-close">
                  <li class="tab-link has-content" data-tab="tab-1" data-url="/noi">
                     <span title="Nồi">
                     <img class="lazyload" 
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                           data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/icon_tab_ajax_1.png?1666237501587" 
                           alt="Nồi">
                     Nồi
                     </span>
                  </li>
                  <li class="tab-link " data-tab="tab-2" data-url="/chao-chong-dinh">
                     <span title="Chảo chống dính">
                     <img class="lazyload" 
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                           data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/icon_tab_ajax_2.png?1666237501587" 
                           alt="Chảo chống dính">
                     Chảo chống dính
                     </span>
                  </li>
                  <li class="tab-link " data-tab="tab-3" data-url="/hop-dung-thuc-pham">
                     <span title="Hộp đựng thực phẩm">
                     <img class="lazyload" 
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                           data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/icon_tab_ajax_3.png?1666237501587" 
                           alt="Hộp đựng thực phẩm">
                     Hộp đựng thực phẩm
                     </span>
                  </li>
               </ul>
               <div class="tab-1 tab-content">
                  <div class="slick_ajax_tab products-view-grid">
                     <div class="item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              50% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/noi-inox-5-day-shg24226" class="thumb"  title="Nồi inox 5 đáy SHG24226">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2-424ad2be-ff93-41ba-a910-461608d53dd3.png?v=1587653606633" alt="Nồi inox 5 đáy SHG24226">
                              </a>
                              <div class="icon-sale sale-soc">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-soc.png?1666237501587" alt="Sale sốc"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-inox-5-day-shg24226" title="Nồi inox 5 đáy SHG24226">Nồi inox 5 đáy SHG24226 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       599.000₫
                                       </span>
                                       <span class="old-price"> 
                                       1.200.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17722940" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-inox-5-day-shg24226'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283493" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              56% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/noi-inox-5-day-mama-shg2524msd" class="thumb"  title="Nồi Inox 5 đáy MAMA SHG2524MSD">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1-7b634aa0-b108-4025-bff1-e7efa1decf09.jpg?v=1587653120670" alt="Nồi Inox 5 đáy MAMA SHG2524MSD">
                              </a>
                              <div class="icon-sale sale304">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-30-4.png?1666237501587" alt="Sale Ngày Lễ"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-inox-5-day-mama-shg2524msd" title="Nồi Inox 5 đáy MAMA SHG2524MSD">Nồi Inox 5 đáy MAMA SHG2524MSD </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       699.000₫
                                       </span>
                                       <span class="old-price"> 
                                       1.599.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17722869" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-inox-5-day-mama-shg2524msd'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283366" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-anod-sunhouse-sp38126" class="thumb"  title="Nồi Anod SUNHOUSE SP38126">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2.png?v=1587652622730" alt="Nồi Anod SUNHOUSE SP38126">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-anod-sunhouse-sp38126" title="Nồi Anod SUNHOUSE SP38126">Nồi Anod SUNHOUSE SP38126 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17722792" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-anod-sunhouse-sp38126'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-le-anod-sh8833-20ebn" class="thumb"  title="Nồi lẻ anod SH8833-20EBN">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1.png?v=1587651901373" alt="Nồi lẻ anod SH8833-20EBN">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-le-anod-sh8833-20ebn" title="Nồi lẻ anod SH8833-20EBN">Nồi lẻ anod SH8833-20EBN </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17722718" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-le-anod-sh8833-20ebn'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                  </div>
               </div>
               <div class="tab-2 tab-content">
               </div>
               <div class="tab-3 tab-content">
               </div>
               </div>
         </div>
      </div>
   </div>
   </div>
</section>
<section class="awe-section-5">
   <section class="section_banner">
   <div class="container">
      <div class="item">
         <a class="image_effect" href="#" title="ND Kitchen">
         <img class="img-responsive lazyload" 
               src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
               data-src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/img_banner2_1.jpg?1666237501587" 
               alt="ND Kitchen">
         </a>
      </div>
   </div>
   </section>
</section>
<section class="awe-section-6">
   <section class="section_product section_product_1">
   <div class="container">
      <div class="bg">
         <div class="section_title clearfix">
               <h2>
               <a href="bep" class="url-title" title="Bếp">
               Bếp
               </a>
               </h2>
               <div class="nav-right">
               <a href="/noi" title="Nồi">Nồi</a>
               <a href="/chao-chong-dinh" title="Chảo chống dính">Chảo chống dính</a>
               <a href="/hop-dung-thuc-pham" title="Hộp đựng thực phẩm">Hộp đựng thực phẩm</a>
               <a href="/chen-bat" title="Chén Bát">Chén Bát</a>
               <a href="/muong-dua" title="Muỗng, đũa">Muỗng, đũa</a>
               <a href="/va-san" title="Vá, sạn">Vá, sạn</a>
               </div>
         </div>
         <div class="section_content">
               <div class="row">
               <div class="col-lg-12 col-md-12 col-right">
                  <div class="inner clearfix">
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-mama-shd6872" class="thumb"  title="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6872">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/5.jpg?v=1589166733653" alt="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6872">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-mama-shd6872" title="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6872">BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6872 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899455" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-mama-shd6872'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-mama-shd6875" class="thumb"  title="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6875">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/4.jpg?v=1589166703610" alt="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6875">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-mama-shd6875" title="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6875">BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6875 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899452" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-mama-shd6875'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-mama-shd6859" class="thumb"  title="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6859">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/3.jpg?v=1589166657430" alt="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6859">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-mama-shd6859" title="BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6859">BẾP ĐIỆN TỪ CẢM ỨNG MAMA SHD6859 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899427" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-mama-shd6859'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/be-p-dien-tu-ca-m-u-ng-shd6806" class="thumb"  title="Bếp điện từ cảm ứng SHD6806">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2.jpg?v=1589166617337" alt="Bếp điện từ cảm ứng SHD6806">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/be-p-dien-tu-ca-m-u-ng-shd6806" title="Bếp điện từ cảm ứng SHD6806">Bếp điện từ cảm ứng SHD6806 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899402" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/be-p-dien-tu-ca-m-u-ng-shd6806'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-co-shd6156da" class="thumb"  title="BẾP ĐIỆN TỪ CƠ SHD6156DA">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1.jpg?v=1589166585990" alt="BẾP ĐIỆN TỪ CƠ SHD6156DA">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-co-shd6156da" title="BẾP ĐIỆN TỪ CƠ SHD6156DA">BẾP ĐIỆN TỪ CƠ SHD6156DA </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899400" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-co-shd6156da'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-sunhouse-shd6861" class="thumb"  title="Bếp điện từ cảm ứng SUNHOUSE SHD6861">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/5.png?v=1587658412830" alt="Bếp điện từ cảm ứng SUNHOUSE SHD6861">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-sunhouse-shd6861" title="Bếp điện từ cảm ứng SUNHOUSE SHD6861">Bếp điện từ cảm ứng SUNHOUSE SHD6861 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723335" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-sunhouse-shd6861'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-sunhouse-shd6863" class="thumb"  title="Bếp điện từ cảm ứng SUNHOUSE SHD6863">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/4-98050754-022e-461f-854a-41a0e726adbe.png?v=1587658073987" alt="Bếp điện từ cảm ứng SUNHOUSE SHD6863">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-sunhouse-shd6863" title="Bếp điện từ cảm ứng SUNHOUSE SHD6863">Bếp điện từ cảm ứng SUNHOUSE SHD6863 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723280" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-sunhouse-shd6863'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-sunhouse-shd6870" class="thumb"  title="Bếp điện từ cảm ứng SUNHOUSE SHD6870">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/3-44e477bb-b0f7-44dc-b20c-dfc94f1e8588.png?v=1587657826877" alt="Bếp điện từ cảm ứng SUNHOUSE SHD6870">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-sunhouse-shd6870" title="Bếp điện từ cảm ứng SUNHOUSE SHD6870">Bếp điện từ cảm ứng SUNHOUSE SHD6870 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723271" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-sunhouse-shd6870'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-sunhouse-mama-shd6858" class="thumb"  title="Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6858">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2-549f3463-894d-4689-bdb0-db0916ee9820.png?v=1587657617277" alt="Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6858">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-sunhouse-mama-shd6858" title="Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6858">Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6858 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723262" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-sunhouse-mama-shd6858'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/bep-dien-tu-cam-ung-sunhouse-mama-shd6868" class="thumb"  title="Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6868">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1-2d724390-6671-43ac-9263-ef3de8590ac3.png?v=1587657405113" alt="Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6868">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/bep-dien-tu-cam-ung-sunhouse-mama-shd6868" title="Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6868">Bếp điện từ cảm ứng SUNHOUSE MAMA SHD6868 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723252" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/bep-dien-tu-cam-ung-sunhouse-mama-shd6868'" >
                                 Chi tiết
                                 </button>
                              </form>
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
</section>
<section class="awe-section-7">
   <section class="section_product section_product_2">
   <div class="container">
      <div class="bg">
         <div class="section_title clearfix">
               <h2>
               <a href="noi-com-dien" class="url-title" title="Nồi cơm điện">
               Nồi cơm điện
               </a>
               </h2>
               <div class="nav-right">
               <a href="/noi" title="Nồi">Nồi</a>
               <a href="/chao-chong-dinh" title="Chảo chống dính">Chảo chống dính</a>
               <a href="/hop-dung-thuc-pham" title="Hộp đựng thực phẩm">Hộp đựng thực phẩm</a>
               <a href="/chen-bat" title="Chén Bát">Chén Bát</a>
               <a href="/muong-dua" title="Muỗng, đũa">Muỗng, đũa</a>
               <a href="/va-san" title="Vá, sạn">Vá, sạn</a>
               </div>
         </div>
         <div class="section_content">
               <div class="row">
               <div class="col-lg-12 col-md-12 col-right">
                  <div class="inner clearfix">
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1-2l-happy-time-htd8522g" class="thumb"  title="Nồi cơm điện 1.2L HAPPY TIME HTD8522G">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/5-95ce762f-5bf5-429d-8b2d-2bb1c08abdd4.png?v=1589167320960" alt="Nồi cơm điện 1.2L HAPPY TIME HTD8522G">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1-2l-happy-time-htd8522g" title="Nồi cơm điện 1.2L HAPPY TIME HTD8522G">Nồi cơm điện 1.2L HAPPY TIME HTD8522G </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899500" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1-2l-happy-time-htd8522g'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1l-mama-shd8220wo-trang-cam" class="thumb"  title="Nồi cơm điện 1L MAMA SHD8220WO trắng cam">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/4-e24bb9c8-f402-4e24-8b48-65cb89c356ab.png?v=1589167276507" alt="Nồi cơm điện 1L MAMA SHD8220WO trắng cam">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1l-mama-shd8220wo-trang-cam" title="Nồi cơm điện 1L MAMA SHD8220WO trắng cam">Nồi cơm điện 1L MAMA SHD8220WO trắng cam </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899494" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1l-mama-shd8220wo-trang-cam'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1-8l-shd8614" class="thumb"  title="Nồi cơm điện 1.8L SHD8614">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/3-1a4b1850-0cf3-4bfb-a4e6-fb690e713dd9.jpg?v=1589167221017" alt="Nồi cơm điện 1.8L SHD8614">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1-8l-shd8614" title="Nồi cơm điện 1.8L SHD8614">Nồi cơm điện 1.8L SHD8614 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899487" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1-8l-shd8614'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-tu-1-8l-mama-shd8903" class="thumb"  title="NỒI CƠM ĐIỆN TỬ 1.8L MAMA SHD8903">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2-d1e3e264-c14b-4c1d-b2e4-bbaccd41f84c.jpg?v=1589167137427" alt="NỒI CƠM ĐIỆN TỬ 1.8L MAMA SHD8903">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-tu-1-8l-mama-shd8903" title="NỒI CƠM ĐIỆN TỬ 1.8L MAMA SHD8903">NỒI CƠM ĐIỆN TỬ 1.8L MAMA SHD8903 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899480" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-tu-1-8l-mama-shd8903'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1-8l-mama-shd8661-xanh-trang" class="thumb"  title="Nồi cơm điện 1.8l MAMA SHD8661 xanh trắng">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1-54a3a4fc-539a-4727-b603-78064648b25c.png?v=1589167103997" alt="Nồi cơm điện 1.8l MAMA SHD8661 xanh trắng">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1-8l-mama-shd8661-xanh-trang" title="Nồi cơm điện 1.8l MAMA SHD8661 xanh trắng">Nồi cơm điện 1.8l MAMA SHD8661 xanh trắng </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899479" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1-8l-mama-shd8661-xanh-trang'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-tu-1-8l-sunhouse-shd8909" class="thumb"  title="NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8909">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/5-7bcb4be8-ce1e-407b-95ca-fb4792bf1472.jpg?v=1587656718147" alt="NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8909">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-tu-1-8l-sunhouse-shd8909" title="NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8909">NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8909 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723228" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-tu-1-8l-sunhouse-shd8909'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              67% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1-8l-sunhouse-mama-shd8658g" class="thumb"  title="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658G">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/4-13793932-9f37-470f-9b1c-7874d6292aa2.jpg?v=1587656380717" alt="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658G">
                              </a>
                              <div class="icon-sale sale-soc">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-soc.png?1666237501587" alt="Sale sốc"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1-8l-sunhouse-mama-shd8658g" title="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658G">NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658G </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       499.000₫
                                       </span>
                                       <span class="old-price"> 
                                       1.499.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723201" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1-8l-sunhouse-mama-shd8658g'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283870" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              60% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1-8l-sunhouse-mama-shd8658p" class="thumb"  title="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658P">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/3-b4035d92-9924-4ad5-93cb-41da6f78ecae.jpg?v=1587656260853" alt="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658P">
                              </a>
                              <div class="icon-sale sale-soc">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-soc.png?1666237501587" alt="Sale sốc"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1-8l-sunhouse-mama-shd8658p" title="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658P">NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8658P </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       599.000₫
                                       </span>
                                       <span class="old-price"> 
                                       1.499.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723194" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1-8l-sunhouse-mama-shd8658p'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283862" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/noi-com-dien-tu-1-8l-sunhouse-shd8910" class="thumb"  title="NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8910">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2-184e5d9a-1915-4366-a6a1-aeed5e977a01.jpg?v=1587655971753" alt="NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8910">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-tu-1-8l-sunhouse-shd8910" title="NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8910">NỒI CƠM ĐIỆN TỬ 1.8L SUNHOUSE SHD8910 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723158" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-tu-1-8l-sunhouse-shd8910'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              65% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/noi-com-dien-1-8l-sunhouse-mama-shd8652-do" class="thumb"  title="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8652 ĐỎ">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1-da62cc51-13ba-48b8-a983-6f02b1b611af.jpg?v=1587655776737" alt="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8652 ĐỎ">
                              </a>
                              <div class="icon-sale sale304">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-30-4.png?1666237501587" alt="Sale Ngày Lễ"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/noi-com-dien-1-8l-sunhouse-mama-shd8652-do" title="NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8652 ĐỎ">NỒI CƠM ĐIỆN 1.8L SUNHOUSE MAMA SHD8652 ĐỎ </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       699.000₫
                                       </span>
                                       <span class="old-price"> 
                                       1.990.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723149" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/noi-com-dien-1-8l-sunhouse-mama-shd8652-do'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283799" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
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
</section>
<section class="awe-section-8">
   <section class="section_product section_product_3">
   <div class="container">
      <div class="bg">
         <div class="section_title clearfix">
               <h2>
               <a href="noi-inox" class="url-title" title="Chảo chống dính">
               Chảo chống dính
               </a>
               </h2>
               <div class="nav-right">
               <a href="/chao-duoi-20-cm" title="Chảo dưới 20 cm">Chảo dưới 20 cm</a>
               <a href="/chao-20-25-cm" title="Chảo 20 - 25 cm">Chảo 20 - 25 cm</a>
               <a href="/chao-25-30-cm" title="Chảo 25 - 30 cm">Chảo 25 - 30 cm</a>
               <a href="/chao-tren-30-cm" title="Chảo trên 30 cm">Chảo trên 30 cm</a>
               </div>
         </div>
         <div class="section_content">
               <div class="row">
               <div class="col-lg-12 col-md-12 col-right">
                  <div class="inner clearfix">
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-sau-chong-dinh-shg1226ga" class="thumb"  title="Chảo sâu chống dính SHG1226GA">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2-2e30b6fc-9116-46c4-ab41-802b77ae0aca.jpg?v=1589167918240" alt="Chảo sâu chống dính SHG1226GA">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-sau-chong-dinh-shg1226ga" title="Chảo sâu chống dính SHG1226GA">Chảo sâu chống dính SHG1226GA </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price">199.000₫</span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899556" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-sau-chong-dinh-shg1226ga'" >
                                 Chi tiết
                                 </button>
                                 <button class="button btn-cart" title="Tùy chọn" type="button" onclick="window.location.href='/chao-sau-chong-dinh-shg1226ga'" >
                                 Tùy chọn
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-sau-sieu-ben-da-day-tu-shg1228mma" class="thumb"  title="CHẢO SÂU SIÊU BỀN ĐÁ ĐÁY TỪ SHG1228MMA">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1-81f5f473-38d9-4339-975f-a7a6436964ce.jpg?v=1589167883087" alt="CHẢO SÂU SIÊU BỀN ĐÁ ĐÁY TỪ SHG1228MMA">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-sau-sieu-ben-da-day-tu-shg1228mma" title="CHẢO SÂU SIÊU BỀN ĐÁ ĐÁY TỪ SHG1228MMA">CHẢO SÂU SIÊU BỀN ĐÁ ĐÁY TỪ SHG1228MMA </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899553" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-sau-sieu-ben-da-day-tu-shg1228mma'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-sau-day-tu-vung-kinh-shg1228mob" class="thumb"  title="Chảo sâu đáy từ vung kính SHG1228MOB">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/4-313df4db-29cd-44be-9fea-01b9cec73cc9.png?v=1589167847673" alt="Chảo sâu đáy từ vung kính SHG1228MOB">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-sau-day-tu-vung-kinh-shg1228mob" title="Chảo sâu đáy từ vung kính SHG1228MOB">Chảo sâu đáy từ vung kính SHG1228MOB </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899550" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-sau-day-tu-vung-kinh-shg1228mob'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-chong-dinh-da-nang-day-tu-swp30ma" class="thumb"  title="Chảo chống dính đa năng đáy từ SWP30MA">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/3-b652221c-c259-4cc5-8f6f-26d89f976646.png?v=1589167812330" alt="Chảo chống dính đa năng đáy từ SWP30MA">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-chong-dinh-da-nang-day-tu-swp30ma" title="Chảo chống dính đa năng đáy từ SWP30MA">Chảo chống dính đa năng đáy từ SWP30MA </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899547" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-chong-dinh-da-nang-day-tu-swp30ma'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-sau-day-tu-shg1228mcc" class="thumb"  title="Chảo sâu đáy từ SHG1228MCC">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/5-e537df93-c346-45b7-b3fc-a3d312fab05b.png?v=1589167780103" alt="Chảo sâu đáy từ SHG1228MCC">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-sau-day-tu-shg1228mcc" title="Chảo sâu đáy từ SHG1228MCC">Chảo sâu đáy từ SHG1228MCC </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17899540" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-sau-day-tu-shg1228mcc'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-diamond-day-tu-sunhouse-csmd30n" class="thumb"  title="Chảo Diamond đáy từ SUNHOUSE CSMD30N">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/5-1.jpg?v=1587655357803" alt="Chảo Diamond đáy từ SUNHOUSE CSMD30N">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-diamond-day-tu-sunhouse-csmd30n" title="Chảo Diamond đáy từ SUNHOUSE CSMD30N">Chảo Diamond đáy từ SUNHOUSE CSMD30N </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723080" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-diamond-day-tu-sunhouse-csmd30n'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              63% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/chao-diamond-sunhouse-csbk28" class="thumb"  title="Chảo Diamond SUNHOUSE CSBK28">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/4.png?v=1587655096337" alt="Chảo Diamond SUNHOUSE CSBK28">
                              </a>
                              <div class="icon-sale sale-soc">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-soc.png?1666237501587" alt="Sale sốc"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-diamond-sunhouse-csbk28" title="Chảo Diamond SUNHOUSE CSBK28">Chảo Diamond SUNHOUSE CSBK28 </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       299.000₫
                                       </span>
                                       <span class="old-price"> 
                                       799.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723066" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-diamond-sunhouse-csbk28'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283695" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-chong-dinh-da-nang-day-tu-sunhouse-swp30ma" class="thumb"  title="Chảo chống dính đa năng đáy từ SUNHOUSE SWP30MA">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/3.png?v=1587654855183" alt="Chảo chống dính đa năng đáy từ SUNHOUSE SWP30MA">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-chong-dinh-da-nang-day-tu-sunhouse-swp30ma" title="Chảo chống dính đa năng đáy từ SUNHOUSE SWP30MA">Chảo chống dính đa năng đáy từ SUNHOUSE SWP30MA </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723053" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-chong-dinh-da-nang-day-tu-sunhouse-swp30ma'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="product-thumb">
                              <a href="/chao-sau-vung-kinh-khong-tu-sunhouse-shg1228bb" class="thumb"  title="Chảo sâu vung kính không từ SUNHOUSE SHG1228BB">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/2-fcf56d67-7f8b-4cb8-a46e-903de03a2e79.png?v=1587654469173" alt="Chảo sâu vung kính không từ SUNHOUSE SHG1228BB">
                              </a>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-sau-vung-kinh-khong-tu-sunhouse-shg1228bb" title="Chảo sâu vung kính không từ SUNHOUSE SHG1228BB">Chảo sâu vung kính không từ SUNHOUSE SHG1228BB </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       Liên hệ
                                       </span> 
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17723003" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-sau-vung-kinh-khong-tu-sunhouse-shg1228bb'" >
                                 Chi tiết
                                 </button>
                              </form>
                           </div>
                           </div>
                     </div>
                     <div class="col-md-20 col-sm-3 col-xs-6 item">
                           <div class="col-item">
                           <div class="sale-label sale-top-right"><span>- 
                              60% 
                              </span>
                           </div>
                           <div class="product-thumb">
                              <a href="/chao-sau-chong-dinh-sunhouse-shg1226oa" class="thumb"  title="Chảo sâu chống dính SUNHOUSE SHG1226OA">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="https://bizweb.dktcdn.net/100/384/470/products/1-8772e604-18ab-4e7b-8448-9ee9461fe8ea.jpg?v=1587654151350" alt="Chảo sâu chống dính SUNHOUSE SHG1226OA">
                              </a>
                              <div class="icon-sale sale304">
                                 <img src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/sale-30-4.png?1666237501587" alt="Sale Ngày Lễ"/>
                              </div>
                           </div>
                           <div class="product-info">
                              <h3 class="title"> <a href="/chao-sau-chong-dinh-sunhouse-shg1226oa" title="Chảo sâu chống dính SUNHOUSE SHG1226OA">Chảo sâu chống dính SUNHOUSE SHG1226OA </a> </h3>
                              <div class="content">
                                 <div class="item-price">
                                       <div class="price-box"> 
                                       <span class="special-price"> 
                                       199.000₫
                                       </span>
                                       <span class="old-price"> 
                                       499.000₫
                                       </span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="actions hidden-xs hidden-sm">
                              <form action="/cart/add" method="post" class="variants" data-id="product-actions-17722979" enctype="multipart/form-data">
                                 <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='/chao-sau-chong-dinh-sunhouse-shg1226oa'" >
                                 Chi tiết
                                 </button>
                                 <input type="hidden" name="variantId" value="32283552" />
                                 <button class="button btn-cart add_to_cart" title="Mua hàng">
                                 Mua hàng
                                 </button>
                              </form>
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
</section>
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
                     <div class="item item-blog-index">
                           <div class="blog-img">
                           <a href="/cach-nau-che-dau-den-nhanh-nhu-nhat-cho-mua-he-nong-nuc" title="Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực">
                           <img  class="lazyload" 
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                              data-src="//bizweb.dktcdn.net/thumb/large/100/384/470/articles/t9.jpg?v=1587694826407" 
                              alt="Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực">
                           </a>
                           </div>
                           <div class="blog-content">
                           <h3><a href="/cach-nau-che-dau-den-nhanh-nhu-nhat-cho-mua-he-nong-nuc" title="Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực">Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực</a> </h3>
                           <div class="justify des">Nguyên liệu áp dụng cách nấu chè đậu đen nhanh nhừ nhất:
                              - Đậu đen (450g)
                              - Đường (150g)
                              - Muối
                              - 1 ống nhỏ vani
                              - Bột năng (hoặc bột sắn dây)
                              Cách nấu chè đậu đen nhanh nhừ nhất
                              Bước 1: Sơ chế đậu đen
                              - Rửa đậu đen, vớt bỏ những hạt nổi ở phía...
                           </div>
                           </div>
                     </div>
                     <div class="item item-blog-index">
                           <div class="blog-img">
                           <a href="/cach-chinh-nhiet-do-lo-nuong-phu-hop-voi-tung-loai-thuc-pham" title="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm">
                           <img  class="lazyload" 
                              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                              data-src="//bizweb.dktcdn.net/thumb/large/100/384/470/articles/untitled-1.jpg?v=1590543479743" 
                              alt="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm">
                           </a>
                           </div>
                           <div class="blog-content">
                           <h3><a href="/cach-chinh-nhiet-do-lo-nuong-phu-hop-voi-tung-loai-thuc-pham" title="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm">Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm</a> </h3>
                           <div class="justify des">
                              Sườn, thịt theo (miếng)
                              Thịt sườn có đặc điểm mềm, ngọt nên được lựa chọn là món nướng yêu thích của nhiều người. Trái với suy nghĩ của nhiều người là sườn lâu chín, cần nướng lâu với nhiệt độ thấp để chín từ từ, thực tế, sườn cần nướng trong...
                           </div>
                           </div>
                     </div>
                     <div class="item item-blog-index">
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
               </div>
               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mini">
                  <h2 class="section_title">
                     <a href="tin-tuc" title="Câu hỏi thường gặp">
                     Câu hỏi thường gặp
                     </a>
                  </h2>
                  <div class="item item-blog-index">
                     <div class="blog-img">
                           <a href="/cach-nau-che-dau-den-nhanh-nhu-nhat-cho-mua-he-nong-nuc" title="Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực">
                           <img  class="lazyload" 
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                           data-src="//bizweb.dktcdn.net/thumb/large/100/384/470/articles/t9.jpg?v=1587694826407" 
                           alt="Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực">
                           </a>
                     </div>
                     <div class="blog-content">
                           <h3><a href="/cach-nau-che-dau-den-nhanh-nhu-nhat-cho-mua-he-nong-nuc" title="Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực">Cách nấu chè đậu đen nhanh nhừ nhất cho mùa hè nóng nực</a> </h3>
                     </div>
                  </div>
                  <div class="item item-blog-index">
                     <div class="blog-img">
                           <a href="/cach-chinh-nhiet-do-lo-nuong-phu-hop-voi-tung-loai-thuc-pham" title="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm">
                           <img  class="lazyload" 
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                           data-src="//bizweb.dktcdn.net/thumb/large/100/384/470/articles/untitled-1.jpg?v=1590543479743" 
                           alt="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm">
                           </a>
                     </div>
                     <div class="blog-content">
                           <h3><a href="/cach-chinh-nhiet-do-lo-nuong-phu-hop-voi-tung-loai-thuc-pham" title="Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm">Cách chỉnh nhiệt độ lò nướng phù hợp với từng loại thực phẩm</a> </h3>
                     </div>
                  </div>
                  <div class="item item-blog-index">
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
                     </div>
                  </div>
                  <div class="item item-blog-index">
                     <div class="blog-img">
                           <a href="/hoc-cach-lam-nuoc-gao-rang-han-quoc-voi-3-buoc-don-gian" title="Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản">
                           <img  class="lazyload" 
                           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                           data-src="//bizweb.dktcdn.net/thumb/large/100/384/470/articles/t6.jpg?v=1587694669833" 
                           alt="Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản">
                           </a>
                     </div>
                     <div class="blog-content">
                           <h3><a href="/hoc-cach-lam-nuoc-gao-rang-han-quoc-voi-3-buoc-don-gian" title="Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản">Học cách làm nước gạo rang Hàn Quốc với 3 bước đơn giản</a> </h3>
                     </div>
                  </div>
               </div>
               </div>
         </div>
      </div>
   </div>
   </section>
</section>
@endsection