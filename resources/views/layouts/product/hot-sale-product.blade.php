
<div class="content_module">
    <div class="wrap_content contentfill">
        <div class="row">
            @foreach ($products as $product)
            <div class="item col-md-3">
                @include('layouts.product.detail-product-big', ['product'=>$product])
            </div>
            @endforeach
        </div>
        <div class="a-center d-sm-none d-lg-none d-xl-none d-md-none d-xs-block">
        <a class="btn btn-primary-xt" href="{{route('allListProCate', ['cate'=>$category->slug])}}" title="Xem thêm sản phẩm">Xem thêm</a>
        </div>
    </div>
</div>
