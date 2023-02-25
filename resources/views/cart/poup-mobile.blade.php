<div class="popup_overlay"></div>
<div class="modal-dialog">
   <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" data-backdrop="false" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>
      <div class="row row-noGutter">
         <div class="modal-left col-sm-12 col-lg-12 col-md-12">
            <h3 class="title"><i class="fa fa-check"></i> Sản phẩm vừa được thêm <span class="hidden-xs">vào giỏ hàng</span></h3>
            @foreach ($cart as $item)
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
                        <div class="variant_title"><span>Số lượng :{{$item['quantity']}}</span></div>
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
 </script>
