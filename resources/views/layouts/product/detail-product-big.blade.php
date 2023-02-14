
@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
<div class="item_product_main">
   <div class="product-thumbnail">
      <a class="image_thumb scale_hover" href="{{route('detailProduct' ,['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
      <img class="lazyload" src="{{$img[0]}}"  data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
      </a>
      @if ($product->discount > 0)
         <span class="smart"></span>
      @endif
      <div class="action1">
         <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng" data-url="{{route('addToCart')}}" data-id="{{$product->id}}">
         Thêm vào giỏ hàng
         </button>
      </div>
   </div>
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
