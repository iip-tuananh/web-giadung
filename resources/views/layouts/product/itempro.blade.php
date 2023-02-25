@php
$giagiampro = $product->price -($product->price*$product->discount/100);
$imgs = json_decode($product->images);
@endphp
<div class="col-item">
    <div class="sale-label sale-top-right"><span>- 
       {{$product->discount}}% 
       </span>
    </div>
 <div class="product-thumb">
    <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" class="thumb"  title="{{languageName($product->name)}}">
    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$imgs[0]}}" alt="{{languageName($product->name)}}">
    </a>
 </div>
 <div class="product-info">
    <h3 class="title"> <a href="{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}} </a> </h3>
    <div class="content">
       <div class="item-price">
             <div class="price-box"> 
             @if($product->discount > 0 && $product->price > 0)
             <div class="item-price">
                   <div class="price-box"> 
                   <span class="special-price" style="color: red"> 
                  {{number_format($giagiampro,0,'','.')}}₫
                   </span>
                   <span class="old-price"> 
                   {{number_format($product->price,0,'','.')}}₫
                   </span>
                </div>
             </div>
             @else
             <div class="item-price">
                <div class="price-box"> 
                <span class="special-price" > 
               <a  style="color: red" href="tel:+{{$setting->phone1}}">Liên hệ</a>
                </span>
              
             </div>
          </div>
          @endif
             </div>
       </div>
    </div>
 </div>
 <div class="actions hidden-xs hidden-sm">
    @if($product->discount > 0 && $product->price > 0)

       <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}'" >
       Chi tiết
       </button>
     
       <input type="hidden" name="quantity" value="1" />
       <button data-id ="{{$product->id}}" data-url ="{{route('addToCart')}}" class="button btn-cart add_to_cart_new" title="Mua hàng">
       Mua hàng
       </button>
 
    @else
    <form  class="variants"  >
        <button class="button btn-cart btn-more" title="Chi tiết sản phẩm" type="button" onclick="window.location.href='{{route('detailProduct',['cate'=>$product->cate_slug,'slug'=>$product->slug])}}'" >
        Chi tiết
        </button>
     </form>
    @endif

 </div>
 </div>