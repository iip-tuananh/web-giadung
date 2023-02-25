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
                <a class="product-image a-left" title="{{languageName($item['name'])}}" href="/noi-inox-5-day-mama-shg2524msd">
                <img width="75" height="auto" alt="{{languageName($item['name'])}}" src="{{$item['image']}}">
                </a>
             </div>
             <div style="width: 28%" class="a-left contentcart">
                <h3 class="product-name"> <a class="text2line" href="/noi-inox-5-day-mama-shg2524msd" title="{{languageName($item['name'])}}">{{languageName($item['name'])}}</a> </h3>
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
Hiện tậi không có sản phẩm nào trong giỏ hàng
@endif
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
          $('.count_item_pr').html(data.html5)

            
         }
     });
    });
 </script>