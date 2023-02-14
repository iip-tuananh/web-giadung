@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="bodywrap">
    <div class="breadcrumb_background">
    <div class="title_full">
        <div class="container a-center">
            <h1 class="title_page">{{$title_page}}</h1>
        </div>
    </div>
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="rows">
                <div class="col-xs-12 a-left">
                <ul class="breadcrumb" >
                    <li class="home">
                        <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                        <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                    </li>
                    <li><strong ><span>{{$title_page}}</span></strong></li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div class="section wrap_background">
    <div class="container ">
        <div class="bg_collection section">
            <div class="row">
                <aside class="dqdt-sidebar sidebar left-content col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="wrap_background_aside asidecollection">
                    <aside class="aside-item sidebar-category collection-category">
                        <div class="aside-title">
                            <h2 class="title-head margin-top-0 cate"><span>Danh mục sản phẩm</span></h2>
                        </div>
                        <div class="aside-content">
                            <nav class="nav-category navbar-toggleable-md">
                            <ul class="nav navbar-pills">
                                <li class="nav-item"><a class="nav-link" href="/">Trang chủ</a></li>
                                <li class="nav-item"><a class="nav-link" href="/gioi-thieu">Giới thiệu</a></li>
                                <li class="nav-item">
                                    <a href="/collections/all" class="nav-link">Sản phẩm</a>
                                    <i class="fa fa-caret-down"></i>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                        <a class="nav-link" href="/dung-cu-may-lam-banh">Dụng cụ & Máy làm bánh</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/do-dung-nha-bep">Đồ dùng nhà bếp</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/dung-cu-nha-bep">Dụng cụ nhà bếp</a>
                                        </li>
                                        <li class="dropdown-submenu nav-item">
                                        <a class="nav-link" href="/gia-dung-nha-bep">Gia dụng nhà bếp</a>
                                        <i class="fa fa-caret-down"></i>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item lv3">
                                                <a class="nav-link" href="/bep-noi">Bếp/Nồi</a>
                                            </li>
                                            <li class="nav-item lv3">
                                                <a class="nav-link" href="/may-ep-xay">Máy ép/xay</a>
                                            </li>
                                            <li class="nav-item lv3">
                                                <a class="nav-link" href="/do-gia-dung-khac">Đồ gia dụng khác</a>
                                            </li>
                                        </ul>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/thiet-bi-gia-dinh">Thiết bị gia đình</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/dung-cu-ve-sinh-nha-bep">Dụng cụ vệ sinh nhà bếp</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="/do-gia-dung-nha-bep-khac">Đồ gia dụng nhà bếp khác</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/tin-tuc">Tin tức</a></li>
                                <li class="nav-item"><a class="nav-link" href="/lien-he">Liên hệ</a></li>
                            </ul>
                            </nav>
                        </div>
                    </aside>
                    <div class="filter-content aside-filter">
                        <div class="filter-container">
                            <div class="filter-container__selected-filter" style="display: none;">
                            <div class="filter-container__selected-filter-header clearfix">
                                <span class="filter-container__selected-filter-header-title"><i class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                <a href="javascript:void(0)" onclick="clearAllFiltered()" class="filter-container__clear-all">Bỏ hết <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="filter-container__selected-filter-list">
                                <ul></ul>
                            </div>
                            </div>
                            <!-- Lọc giá -->
                            <link href="//bizweb.dktcdn.net/100/408/532/themes/853298/assets/jquery-ui.min.css?1646300280270" rel="stylesheet" type="text/css" />
                            <script src="//bizweb.dktcdn.net/100/408/532/themes/853298/assets/jquery-ui-min.js?1646300280270" type="text/javascript"></script>	
                            <aside class="aside-item filter-price f-left">
                            <div class="aside-title aside-title-fillter">
                                <div class="title_module border_bottom_10">
                                    <h2><span>Giá sản phẩm</span></h2>
                                </div>
                            </div>
                            <div class="aside-content filter-groupi filter-ui-slider">
                                <div id='slider'></div>
                                <span class="price_val"></span>
                                <div id='start'><input value="0"></div>
                                <div id='stop'><input value="100.000.000₫"></div>
                                <a id="old-value" href="javascript:;"></a>
                                <a id="filter-value" class="btn btn-primary" href="javascript:;" onclick="_toggleFilterdqdt(this);"  data-value="(>-1 AND <100000001)" >Lọc</a>
                            </div>
                            </aside>
                            <!-- End Lọc giá -->
                            <!-- Lọc Thương hiệu -->
                            <aside class="aside-item filter-vendor f-left">
                            <div class="aside-title">
                                <h2 class="title-head margin-top-0"><span>Thương hiệu</span></h2>
                            </div>
                            <div class="aside-content filter-group">
                                <ul>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-cuckoo">
                                        <input type="checkbox" id="filter-cuckoo" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Cuckoo" value="(Cuckoo)" data-operator="OR">
                                        <i class="fa"></i>
                                        Cuckoo
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-danger">
                                        <input type="checkbox" id="filter-danger" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Danger" value="(Danger)" data-operator="OR">
                                        <i class="fa"></i>
                                        Danger
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-fushen">
                                        <input type="checkbox" id="filter-fushen" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Fushen" value="(Fushen)" data-operator="OR">
                                        <i class="fa"></i>
                                        Fushen
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-justin">
                                        <input type="checkbox" id="filter-justin" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Justin" value="(Justin)" data-operator="OR">
                                        <i class="fa"></i>
                                        Justin
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-lg">
                                        <input type="checkbox" id="filter-lg" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="LG" value="(LG)" data-operator="OR">
                                        <i class="fa"></i>
                                        LG
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-lock-lock">
                                        <input type="checkbox" id="filter-lock-lock" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Lock&Lock" value="(Lock&Lock)" data-operator="OR">
                                        <i class="fa"></i>
                                        Lock&Lock
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-samsung">
                                        <input type="checkbox" id="filter-samsung" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Samsung" value="(Samsung)" data-operator="OR">
                                        <i class="fa"></i>
                                        Samsung
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-smeg">
                                        <input type="checkbox" id="filter-smeg" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="SMEG" value="(SMEG)" data-operator="OR">
                                        <i class="fa"></i>
                                        SMEG
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-sunhouse">
                                        <input type="checkbox" id="filter-sunhouse" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Sunhouse" value="(Sunhouse)" data-operator="OR">
                                        <i class="fa"></i>
                                        Sunhouse
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-toshiba">
                                        <input type="checkbox" id="filter-toshiba" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="Toshiba" value="(Toshiba)" data-operator="OR">
                                        <i class="fa"></i>
                                        Toshiba
                                        </label>
                                        </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                        <span>
                                        <label for="filter-us">
                                        <input type="checkbox" id="filter-us" onchange="toggleFilter(this)"  data-group="Hãng" data-field="vendor" data-text="US" value="(US)" data-operator="OR">
                                        <i class="fa"></i>
                                        US
                                        </label>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            </aside>
                            <!-- End Lọc Thương hiệu -->
                        </div>
                    </div>
                    <div class="aside-item aside_product_love f-left w-100">
                        <div class="aside-title">
                            <h2 class="title-head">
                            <a href="/san-pham-noi-bat" title="Sản phẩm yêu thích">Sản phẩm yêu thích</a>
                            </h2>
                        </div>
                        <div class="slick_vertical_love">
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19534276" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-ep-cham-sunhouse-shd5210" title="Máy ép chậm Sunhouse SHD5210">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/9.jpg?v=1603782942753" alt="Máy ép chậm Sunhouse SHD5210">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-ep-cham-sunhouse-shd5210" title="Máy ép chậm Sunhouse SHD5210">Máy ép chậm Sunhouse SHD5210</a></h3>
                                            <div class="price-box">
                                                <span class="price">6.000.000₫</span>
                                                <span class="compare-price">6.500.000₫</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528603" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-xay-ca-phe-hang-hieu" title="Máy xay cà phê hàng hiệu">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/43.png?v=1603767058993" alt="Máy xay cà phê hàng hiệu">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-xay-ca-phe-hang-hieu" title="Máy xay cà phê hàng hiệu">Máy xay cà phê hàng hiệu</a></h3>
                                            <div class="price-box">
                                                300.000₫
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528602" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-danh-trung-smeg" title="Máy đánh trứng SMEG">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/34.png?v=1603767058150" alt="Máy đánh trứng SMEG">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-danh-trung-smeg" title="Máy đánh trứng SMEG">Máy đánh trứng SMEG</a></h3>
                                            <div class="price-box">
                                                4.000.000₫
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528601" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-danh-trung-do" title="Máy đánh trứng đỏ">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/32.png?v=1603767056937" alt="Máy đánh trứng đỏ">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-danh-trung-do" title="Máy đánh trứng đỏ">Máy đánh trứng đỏ</a></h3>
                                            <div class="price-box">
                                                <span class="price">300.000₫</span>
                                                <span class="compare-price">320.000₫</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528600" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-pha-che-thong-minh-lg" title="Máy pha chế thông minh LG">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/31.png?v=1603767056117" alt="Máy pha chế thông minh LG">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-pha-che-thong-minh-lg" title="Máy pha chế thông minh LG">Máy pha chế thông minh LG</a></h3>
                                            <div class="price-box">
                                                1.200.000₫
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528599" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-xay-sinh-to-justin" title="Máy xay sinh tố Justin">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/30.png?v=1603767055137" alt="Máy xay sinh tố Justin">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-xay-sinh-to-justin" title="Máy xay sinh tố Justin">Máy xay sinh tố Justin</a></h3>
                                            <div class="price-box">
                                                2.300.000₫
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528598" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/am-dun-sieu-toc-do-nau" title="Ấm đun siêu tốc đỏ nâu">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/131964d3b4f1c54ec2bf9c0263e6a4.png?v=1603767054333" alt="Ấm đun siêu tốc đỏ nâu">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/am-dun-sieu-toc-do-nau" title="Ấm đun siêu tốc đỏ nâu">Ấm đun siêu tốc đỏ nâu</a></h3>
                                            <div class="price-box">
                                                280.000₫
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="products itemss big-item-product item-border">
                            <div class="item_product_main item_product_small">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528597" enctype="multipart/form-data">
                                    <div class="product_big news-item-products">
                                        <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-lam-banh-lock-lock" title="Máy làm bánh Lock&Lock">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/22.png?v=1603767053210" alt="Máy làm bánh Lock&Lock">
                                        </a>
                                        </div>
                                        <div class="product-right-content">
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="/may-lam-banh-lock-lock" title="Máy làm bánh Lock&Lock">Máy làm bánh Lock&Lock</a></h3>
                                            <div class="price-box">
                                                490.000₫
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </aside>
                <div class="main_container collection col-xl-9 col-lg-9 col-md-12 col-sm-12">
                <div class="category-products products">
                    <div class="section">
                        <div class="sortPagiBar">
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="bg-white sort-cate clearfix">
                                    <div id="sort-by">
                                        <label class="left">Sắp xếp: </label>
                                        <ul class="ul_col">
                                        <li>
                                            <span>Thứ tự</span>
                                            <ul class="content_ul">
                                                <li><a href="javascript:;" onclick="sortby('default')">Mặc định</a></li>
                                                <li><a href="javascript:;" onclick="sortby('alpha-asc')">A &rarr; Z</a></li>
                                                <li><a href="javascript:;" onclick="sortby('alpha-desc')">Z &rarr; A</a></li>
                                                <li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                                <li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                                <li><a href="javascript:;" onclick="sortby('created-desc')">Hàng mới nhất</a></li>
                                                <li><a href="javascript:;" onclick="sortby('created-asc')">Hàng cũ nhất</a></li>
                                            </ul>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <section class="products-view products-view-grid collection_reponsive list_hover_pro">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19534276" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-ep-cham-sunhouse-shd5210" title="Máy ép chậm Sunhouse SHD5210">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/9.jpg?v=1603782942753" alt="Máy ép chậm Sunhouse SHD5210">
                                        </a>
                                        <span class="smart"></span>
                                        <div class="action1">
                                        <input class="hidden" type="hidden" name="variantId" value="37615260" />
                                        <button class="hidden-xs btn btn-cart btn btn-views left-to" title="Tuỳ chọn" type="button" onclick="window.location.href='/may-ep-cham-sunhouse-shd5210'" >
                                        Tuỳ chọn
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-ep-cham-sunhouse-shd5210">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-ep-cham-sunhouse-shd5210" data-handle="may-ep-cham-sunhouse-shd5210" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-ep-cham-sunhouse-shd5210" title="Máy ép chậm Sunhouse SHD5210">Máy ép chậm Sunhouse SHD5210</a></h3>
                                        <div class="price-box">
                                        6.000.000₫
                                        <span class="compare-price">6.500.000₫</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19534262" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/lo-nuong-chan-khong-magic-a72" title="Lò nướng chân không Magic A72">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/8.jpg?v=1603782891330" alt="Lò nướng chân không Magic A72">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37615205" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="lo-nuong-chan-khong-magic-a72">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/lo-nuong-chan-khong-magic-a72" data-handle="lo-nuong-chan-khong-magic-a72" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/lo-nuong-chan-khong-magic-a72" title="Lò nướng chân không Magic A72">Lò nướng chân không Magic A72</a></h3>
                                        <div class="price-box">
                                        4.000.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19534235" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-xay-thit-philips-hr2505-1l" title="Máy xay thịt Philips HR2505 1l">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/7.jpg?v=1603783021723" alt="Máy xay thịt Philips HR2505 1l">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37615118" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-xay-thit-philips-hr2505-1l">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-xay-thit-philips-hr2505-1l" data-handle="may-xay-thit-philips-hr2505-1l" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-xay-thit-philips-hr2505-1l" title="Máy xay thịt Philips HR2505 1l">Máy xay thịt Philips HR2505 1l</a></h3>
                                        <div class="price-box">
                                        2.300.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19534199" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-ep-cham-sunhouse-400w-duc" title="Máy ép chậm Sunhouse 400w - Đức">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/6.jpg?v=1603782712580" alt="Máy ép chậm Sunhouse 400w - Đức">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37614910" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-ep-cham-sunhouse-400w-duc">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-ep-cham-sunhouse-400w-duc" data-handle="may-ep-cham-sunhouse-400w-duc" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-ep-cham-sunhouse-400w-duc" title="Máy ép chậm Sunhouse 400w - Đức">Máy ép chậm Sunhouse 400w - Đức</a></h3>
                                        <div class="price-box">
                                        5.000.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19534147" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-xay-sinh-to-da-nang-sunhouse-shd540" title="Máy xay sinh tố đa năng Sunhouse SHD540">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/5.jpg?v=1603782307830" alt="Máy xay sinh tố đa năng Sunhouse SHD540">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37614354" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-xay-sinh-to-da-nang-sunhouse-shd540">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-xay-sinh-to-da-nang-sunhouse-shd540" data-handle="may-xay-sinh-to-da-nang-sunhouse-shd540" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-xay-sinh-to-da-nang-sunhouse-shd540" title="Máy xay sinh tố đa năng Sunhouse SHD540">Máy xay sinh tố đa năng Sunhouse SHD540</a></h3>
                                        <div class="price-box">
                                        3.500.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19533998" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/am-dien-thuy-tinh-sieu-toc-lock-lock" title="Ấm điện thuỷ tinh siêu tốc Lock&Lock">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/4.jpg?v=1603781804760" alt="Ấm điện thuỷ tinh siêu tốc Lock&Lock">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37613552" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="am-dien-thuy-tinh-sieu-toc-lock-lock">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/am-dien-thuy-tinh-sieu-toc-lock-lock" data-handle="am-dien-thuy-tinh-sieu-toc-lock-lock" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/am-dien-thuy-tinh-sieu-toc-lock-lock" title="Ấm điện thuỷ tinh siêu tốc Lock&Lock">Ấm điện thuỷ tinh siêu tốc Lock&Lock</a></h3>
                                        <div class="price-box">
                                        3.600.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19533889" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/noi-com-dien-cuckoo-crp-lhtr0610" title="Nồi cơm điện Cuckoo CRP-LHTR0610">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/3.jpg?v=1603781340300" alt="Nồi cơm điện Cuckoo CRP-LHTR0610">
                                        </a>
                                        <span class="smart"></span>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37612401" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="noi-com-dien-cuckoo-crp-lhtr0610">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/noi-com-dien-cuckoo-crp-lhtr0610" data-handle="noi-com-dien-cuckoo-crp-lhtr0610" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/noi-com-dien-cuckoo-crp-lhtr0610" title="Nồi cơm điện Cuckoo CRP-LHTR0610">Nồi cơm điện Cuckoo CRP-LHTR0610</a></h3>
                                        <div class="price-box">
                                        1.500.000₫
                                        <span class="compare-price">2.000.000₫</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19531031" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/bo-noi-phu-su-cao-cap-elmich-royal" title="Bộ nồi phủ sứ cao cấp Elmich Royal">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/2.jpg?v=1603774707060" alt="Bộ nồi phủ sứ cao cấp Elmich Royal">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37593484" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="bo-noi-phu-su-cao-cap-elmich-royal">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/bo-noi-phu-su-cao-cap-elmich-royal" data-handle="bo-noi-phu-su-cao-cap-elmich-royal" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/bo-noi-phu-su-cao-cap-elmich-royal" title="Bộ nồi phủ sứ cao cấp Elmich Royal">Bộ nồi phủ sứ cao cấp Elmich Royal</a></h3>
                                        <div class="price-box">
                                        800.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19530891" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/chao-chong-dinh-sunhouse" title="Chảo chống dính Sunhouse">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/untitled-1.jpg?v=1603782582123" alt="Chảo chống dính Sunhouse">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37593259" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="chao-chong-dinh-sunhouse">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/chao-chong-dinh-sunhouse" data-handle="chao-chong-dinh-sunhouse" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/chao-chong-dinh-sunhouse" title="Chảo chống dính Sunhouse">Chảo chống dính Sunhouse</a></h3>
                                        <div class="price-box">
                                        500.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528603" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-xay-ca-phe-hang-hieu" title="Máy xay cà phê hàng hiệu">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/43.png?v=1603767058993" alt="Máy xay cà phê hàng hiệu">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37543470" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-xay-ca-phe-hang-hieu">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-xay-ca-phe-hang-hieu" data-handle="may-xay-ca-phe-hang-hieu" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-xay-ca-phe-hang-hieu" title="Máy xay cà phê hàng hiệu">Máy xay cà phê hàng hiệu</a></h3>
                                        <div class="price-box">
                                        300.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528602" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-danh-trung-smeg" title="Máy đánh trứng SMEG">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/34.png?v=1603767058150" alt="Máy đánh trứng SMEG">
                                        </a>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37543469" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-danh-trung-smeg">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-danh-trung-smeg" data-handle="may-danh-trung-smeg" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-danh-trung-smeg" title="Máy đánh trứng SMEG">Máy đánh trứng SMEG</a></h3>
                                        <div class="price-box">
                                        4.000.000₫
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 product-col">
                            <div class="item_product_main item_option margin-bottom-15">
                                <form action="/cart/add" method="post" class="variants product-action" data-id="product-actions-19528601" enctype="multipart/form-data">
                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="/may-danh-trung-do" title="Máy đánh trứng đỏ">
                                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="//bizweb.dktcdn.net/thumb/large/100/408/532/products/32.png?v=1603767056937" alt="Máy đánh trứng đỏ">
                                        </a>
                                        <span class="smart"></span>
                                        <div class="action1">
                                        <input type="hidden" name="variantId" value="37543467" />
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active " title="Thêm vào giỏ hàng">
                                        Thêm vào giỏ hàng
                                        </button>
                                        </div>
                                        <div class="action">
                                        <a class="btn ajax_addtocart btn-views js-btn-wishlist btn_view btn-wishlist" href="javascript:void(0)" title="Thêm vào yêu thích" data-handle="may-danh-trung-do">
                                        <i class="far fa-heart"></i>
                                        </a>
                                        <a title="Xem nhanh" href="/may-danh-trung-do" data-handle="may-danh-trung-do" class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                        <i class="fas fa-search"></i>
                                        </a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="/may-danh-trung-do" title="Máy đánh trứng đỏ">Máy đánh trứng đỏ</a></h3>
                                        <div class="price-box">
                                        300.000₫
                                        <span class="compare-price">320.000₫</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="section pagenav a-center">
                            <nav class="clearfix relative nav_pagi">
                            <ul class="pagination clearfix">
                                <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="active page-item disabled"><a class="page-link" href="javascript:;">1</a></li>
                                <li class="page-item"><a class="page-link" onclick="doSearch(2)" href="javascript:;">2</a></li>
                                <li class="page-item"><a class="page-link" onclick="doSearch(3)" href="javascript:;">3</a></li>
                                <li class="page-item hidden-xs"><a class="page-link" onclick="doSearch(2)" href="javascript:;"><i class="fas fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                            </nav>
                            <script>
                            var cuPage = 1
                                
                            </script>
                        </div>
                    </section>
                </div>
                <div id="open-filters" class="open-filters d-lg-none d-xl-none">
                    <i class="fa fa-align-right"></i>
                    <span>Lọc</span>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var colName = "Tất cả sản phẩm";
        
        var colId = 0;
        
        
        var selectedViewData = "data";
    </script>
    </div>
</div>
@endsection