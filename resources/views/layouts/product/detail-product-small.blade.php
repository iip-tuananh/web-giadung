@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
<div class="item_product_main item_product_small">
   <div class="product_big news-item-products">
      <div class="product-thumbnail">
            <a class="image_thumb scale_hover" href="{{route('detailProduct' ,['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
            </a>
      </div>
      <div class="product-right-content">
            <div class="product-info">
            <h3 class="product-name"><a href="{{route('detailProduct' ,['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
            @if ($product->discount > 0 && $product->price > 0)
               <div class="price-box">
                  {{number_format($discountPrice)}}₫
                  <span class="compare-price">{{number_format($product->price)}}₫</span>
               </div>
            @elseif($product->discount == 0 && $product->price > 0)
               <div class="price-box">
                  {{number_format($discountPrice)}}₫
               </div>
            @else
               <div class="price-box">
                  <a href="tel:{{$setting->phone1}}">Liên Hệ</a>
               </div>
            @endif
            </div>
      </div>
      <div class="action">
            <input class="hidden" type="hidden" name="variantId" value="37615260" />
            <button class="hidden-xs btn btn-cart btn btn-views left-to add_to_cart" title="Tuỳ chọn" type="button"data-url="{{route('addToCart')}}" data-id="{{$product->id}}">
               <i class="fas fa-shopping-basket iconcart"></i>
            </button>
      </div>
   </div>
</div>