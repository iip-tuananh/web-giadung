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
             $('.count_item_pr').html(data.html5)

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
