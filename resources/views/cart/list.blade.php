@extends('layouts.main.master')
@section('title')
Giỏ hàng của bạn
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/cart_style.scss.css')}}">
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
               <li><strong ><span>Giỏ hàng</span></strong></li>
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
<section class="main-cart-page main-container margin-bottom-30">
   <div class="container">
      <div class="bg">
         <div class="page-title">
            <h1>Giỏ hàng của bạn</h1>
         </div>
         <div class="main  hidden-xs hidden-sm">
         </div>
         <div class="col-main cart_desktop_page cart-page">
            @if(count($cart)>0)
            <div class="cart page_cart hidden-xs hidden-sm row">
               <div class="bg-scroll">
                  <div class="cart-thead">
                     <div style="width: 22%" class="a-left">Ảnh sản phẩm</div>
                     <div style="width: 28%" class="a-left">Tên sản phẩm</div>
                     <div style="width: 15%" class="a-left">Giá bán lẻ</div>
                     <div style="width: 15%" class="a-center">Số lượng</div>
                     <div style="width: 15%" class="a-center">Tạm tính</div>
                     <div style="width: 5%" class="a-center">Xóa</div>
                  </div>
                  <div class="cart-tbody">
                     @php
                     $tong = 0;
                     @endphp
                     @foreach ($cart as $item)
                     @php
                     $giagiam = $item['price'] - ($item['price']*$item['discount']/100);
                     $giatong = $giagiam*$item['quantity'];
                     $tong += $giatong;
                     @endphp
                     <div class="item-cart productid-32283366">
                        <div style="width: 22%" class="image">
                           <a class="product-image a-left" title="{{languageName($item['name'])}}" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}">
                           <img width="75" height="auto" alt="{{languageName($item['name'])}}" src="{{$item['image']}}">
                           </a>
                        </div>
                        <div style="width: 28%" class="a-left contentcart">
                           <h3 class="product-name"> <a class="text2line" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a> </h3>
                           <span class="variant-title"></span>
                        </div>
                        <div style="width: 15%" class="a-center">
                           <span class="cart-prices">
                           <span class="prices">{{number_format($giagiam,0,'','.')}}₫</span> 
                           </span>
                        </div>
                        <div style="width: 15%" class="a-center">
                           <div class="input_qty_pr">
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
                        <div style="width: 15%" class="a-center">
                           <span class="cart-price">
                           <span class="price">{{number_format($giatong,0,'','.')}}₫</span> 
                           </span>
                        </div>
                        <div class="remove_Cart" title="Xóa" data-id="{{$item['id']}}" data-url="{{route('removeCart')}}"  >
                           <i class="fa-solid fa-trash-can"></i>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <div class="f-left section continued">
                     <a href="{{route('home')}}" class="form-cart-continue">Tiếp tục mua hàng</a>
                  </div>
                  <div class="row">
                     <div class="col-lg-4 col-md-4 col-lg-offset-8 col-md-offset-8">
                        <div class="section bg_cart shopping-cart-table-total">
                           <div class="table-total">
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td class="total-text">Tổng tiền</td>
                                       <td class="txt-right totals_price price_end a-right">{{number_format($tong,0,'','.')}}₫</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <a href="{{route('checkout')}}" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @else
            Hiện tại Không có sản phẩm nào trong giỏ hàng
            @endif
         </div>
         <div class="cart-mobile hidden-md hidden-lg">
            <div class="title_cart_mobile">
            </div>
            <div class="header-cart-content" style="background:#fff;">
               <div class="cart_page_mobile content-product-list">
                  @php
                  $tongmobile = 0;
                  @endphp
                  @foreach ($cart as $item)
                  @php
                  $giagiammobile = $item['price'] - ($item['price']*$item['discount']/100);
                  $tongmobile += $giagiammobile*$item['quantity'];
                  @endphp
                  <div class="item-product item productid-32283366 ">
                     <div class="item-product-cart-mobile">
                        <a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}">	
                        </a><a class="product-images1" href="" title="{{languageName($item['name'])}}">
                        <img width="80" height="150" src="{{$item['image']}}" alt="{{languageName($item['name'])}}">
                        </a>
                     </div>
                     <div class="title-product-cart-mobile">
                        <h3>
                           <a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a>
                        </h3>
                        <p>
                           Giá: <span>{{number_format($giagiammobile)}}₫</span>
                        </p>
                     </div>
                     <div class="select-item-qty-mobile">
                        <div class="txt_center">
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
                        <a class="remove_Cart" href="javascript:;" data-id="{{$item['id']}}" data-url="{{route('removeCart')}}">Xoá</a>
                     </div>
                  </div>
                  @endforeach
               </div>
               @if(count($cart)>0)
               <div class="header-cart-price">
                  <div class="title-cart">
                     <h3 class="text-xs-left">Tổng tiền:</h3>
                     <a class="text-xs-right  totals_price_mobile">{{number_format($tongmobile)}}₫</a>
                  </div>
                  <div class="checkout">
                     <button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='{{route('checkout')}}'">
                     <span>Tiến hành thanh toán</span></button>
                     <button class="btn btn-whi{{route('home')}}e form-cart-continue" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='{{route('home')}}'">
                     <span>Tiếp tục mua hàng</span>
                     </button>
                  </div>
               </div>
               @else
               <div class="checkout">
                  <button class="btn btn-whi{{route('home')}}e form-cart-continue" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='{{route('home')}}'">
                  <span>Tiếp tục mua hàng</span>
                  </button>
               </div>
               @endif
            </div>
         </div>
      </div>
   </div>
   <script>
      function btnMinus(id,url) {
       var id = id;
       var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ) result.value--;
       var quantity = result.value;
       var url = url;
       $.ajax({
           type:'get',
           url:url,
           data: {id:id, quantity:quantity},
           success: function(data) {
            $('#popup-cart-desktop').html(data.html4);
            $('.cart_desktop_page').html(data.html1);
           }
       })
      }
      function btnPlus(id,url) {
       var id = id;
       var url = url;
       var result = document.getElementById('qty'+id); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;
       var quantity = result.value;
       console.log(id,quantity,url);
       $.ajax({
           type:'get',
           url:url,
           data: {id:id, quantity:quantity},
           success: function(data) {
            $('#popup-cart-desktop').html(data.html4);
            $('.cart_desktop_page').html(data.html1);
           }
       })
      }
   </script>
   <script>
      $('.remove_Cart').click(function (e) { 
         e.preventDefault();
         url = $(this).data('url');
         id = $(this).data('id');
         console.log(url);
         $.ajax({
            type: 'get',
           url:url,
           data: {id:id},
           success: function(data) {
            $('#popup-cart-desktop').html(data.html4);
            $('.cart_desktop_page').html(data.html1);
            $('.cart-mobile').html(data.html2);
            $('.count_item_pr').html(data.html5);
              
           }
       });
      });
   </script>
</section>
@endsection