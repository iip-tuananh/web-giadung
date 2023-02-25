<div class="title-popup-cart">
   <span class="your_product">
   <i class="fas fa-check"></i> Bạn đã thêm <span class="cart-popup-name"><a href="" title="{{languageName($cartItemName)}}">{{languageName($cartItemName)}}</a> </span> vào giỏ hàng </span>
</div>
<a title="Đóng" class="quickview-close close-pop"><i class="fas fa-times"></i></a>
<div class="wrap_popup">
   <div class="title-quantity-popup">
      <span class="cart_status" onclick="window.location.href='{{route('listCart')}}';">Giỏ hàng của bạn có <span class="cart-popup-count">{{count($cartcontent)}}</span> sản phẩm </span>
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
                  <a class="button checkout_ btn-proceed-checkout" title="Tiến hành đặt hàng" href="{{route('checkout')}}"><span>Tiến hành đặt hàng</span></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
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
         $('.count_item_pr').html(data.html5)
           
        }
    });
   });
</script>
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
         $('.cart-mobile').html(data.html2);
     
      

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
         $('.cart-mobile').html(data.html2);
       

        }
    })
   }
</script>
<script>
     $('.close-pop').click(function (e) { 
         console.log(123);
         $('#popup-cart').removeClass('opencart');
         $('.opacitycart').removeClass('openf');
         
      });
</script>