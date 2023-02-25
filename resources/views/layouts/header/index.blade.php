<header class="header">
   <div class="mid-header clearfix">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-5 col-menu hidden-xs hidden-sm">
               <div class="wrap_main hidden-xs hidden-sm">
                  <div class="bg-header-nav hidden-xs hidden-sm">
                     <div class= "row-noGutter-2">
                        <nav class="header-nav">
                           <ul class="item_big">
                              <li class="home nav-item active ">				
                                 <a class="a-img" href="{{route('home')}}" title="Trang chủ">
                                 <i class="fa fa-home" aria-hidden="true"></i>
                                 <span>Trang chủ</span>
                                 <span class="label_">
                                 <i class="label "></i>
                                 </span>
                                 </a>
                              </li>
                              <li class=" nav-item ">				
                                 <a class="a-img" href="{{route('aboutUs')}}" title="Giới thiệu">
                                 <span>Giới thiệu</span>
                                 <span class="label_">
                                 <i class="label "></i>
                                 </span>
                                 </a>
                              </li>
                              <li class="nav-item  has-mega">
                                 <a class="a-img" href="{{route('allProduct')}}" title="Sản phẩm">
                                 <span>Sản phẩm</span>
                                 <i class="fa fa-caret-down"></i>
                                 <span class="label_">
                                 <i class="label "></i>
                                 </span>
                                 </a>
                                 <div class="mega-content">
                                    <div class="container">
                                       <div class="level0-wrapper2">
                                          <div class="nav-block nav-block-center">
                                             <ul class="level0 col-lg-3 col-md-3 list-mega-cate">
                                                <li class="title">Danh mục sản phẩm <i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                                @foreach ($categoryhome as $cate)
                                                <li class="level1 parent item menu-cate" data-id='{{$cate->id}}'> 
                                                   <a href="{{route('allListProCate',['cate'=>$cate->slug])}}">
                                                   <span>{{languageName($cate->name)}}</span>
                                                   </a>
                                                </li>
                                                @endforeach
                                             </ul>
                                             <ul class="level1 col-lg-4 col-md-4 list-mega-cate">
                                                @foreach ($categoryhome as $cate)
                                                <li class="menu-sub-cate" data-parent-id='{{$cate->id}}'>
                                                   @foreach ($cate->typeCate as $type)
                                                   <a href="{{route('allListProType',['cate'=>$cate->slug,'typecate'=>$type->slug])}}" ><span>{{languageName($type->name)}}</span></a>
                                                   @endforeach
                                                </li>
                                                @endforeach
                                             </ul>
                                             <div class="col-lg-5 col-md-5 banner-mega list-mega-cate">
                                                @foreach ($categoryhome as $cate)
                                                <div class="menu-banner" data-parent-id='{{$cate->id}}'>
                                                   <a class="thumb" href="{{route('allListProCate',['cate'=>$cate->slug])}}"  rel="nofollow">
                                                   <img class="img-responsive lazyload" 
                                                      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                                                      data-src="{{$cate->avatar}}" 
                                                      alt="Nồi">
                                                   </a>
                                                </div>
                                                @endforeach
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="nav-item ">
                                 <a class="a-img" href="{{route('allListBlog')}}" title="Tin tức">
                                 <span>Tin tức</span>
                                 <i class="fa fa-caret-down"></i>
                                 <span class="label_">
                                 <i class="label "></i>
                                 </span>
                                 </a>
                                 <ul class="item_small">
                                    @foreach ($blogCate as $blogc)
                                    <li>
                                       <a href="{{route('listCateBlog',['slug'=>$blogc->slug])}}" title="{{languageName($blogc->name)}}">{{languageName($blogc->name)}} </a>
                                    </li>
                                    @endforeach
                                 </ul>
                              </li>
                              <li class=" nav-item ">				
                                 <a class="a-img" href="{{route('aboutUs')}}" title="Liên hệ">
                                 <span>Liên hệ</span>
                                 <span class="label_">
                                 <i class="label "></i>
                                 </span>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-2 col-md-2 col-xs-12 col-sm-12 logo">
               <a href="{{route('home')}}" title="Logo">
               <img src="{{url($setting->logo)}}" alt="{{$setting->company}}"/>
               </a>
            </div>
            <div class="col-lg-5 col-md-5 hidden-xs hidden-sm topbar-login">
               <div class="search-box">
                  <a>
                  <img style="width: 15px;" src="{{url('frontend/images/icon-search.png')}}" alt="Tìm kiếm"/>
                  Tìm kiếm
                  </a>
                  <div class="header_search search_form">
                     <form class="input-group search-bar search_form" action="{{route('search_result')}}" method="post" role="search">		
                        @csrf
                        <input type="search" name="keyword" value="" placeholder="" class="change_pl input-group-field st-default-search-input search-text" autocomplete="off" required>
                        <span class="input-group-btn">
                        <button class="btn icon-fallback-text">
                        </button>
                        </span>
                     </form>
                  </div>
               </div>
               <div class="add hidden">
                  <a href="he-thong" title="Đại lý">
                  Đại lý
                  </a>
               </div>
               <div class="top-cart-contain">
                  <div class="mini-cart text-xs-center">
                     <div class="heading-cart">
                        <a href="{{route('listCart')}}" title="Giỏ hàng">
                        <img src="{{url('frontend/images/icon-cart.png')}}" alt="cart"/>
                        <span class="cartCount count_item_pr" id="cart-total2">{{count($cartcontent)}}</span>
                        </a>
                     </div>
                   
                  </div>
               </div>
            </div>
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12 search-box">
               <div  class="menu-bar button-menu hidden-md hidden-lg f-left">
                  <a href="javascript:;" >
                  <i class="fa fa-align-justify"></i>
                  </a>
               </div>
               <div class="header_search search_form">
                  <form class="input-group search-bar search_form" action="{{route('search_result')}}" method="post" role="search">		
                     @csrf
                     <input type="search" name="keyword" value="" placeholder="" class="change_pl input-group-field st-default-search-input search-text" autocomplete="off" required>
                     <span class="input-group-btn">
                     <button class="btn icon-fallback-text">
                     </button>
                     </span>
                  </form>
               </div>
               <div class="top-cart-contain hidden-lg hidden-md">
                  <div class="mini-cart text-xs-center">
                     <div class="heading-cart">
                        <a href="{{route('listCart')}}" title="Giỏ hàng">
                        <img src="{{url('frontend/images/icon-cart.png')}}" alt="cart"/>
                        <span class="cartCount count_item_pr" id="cart-total">{{count($cartcontent)}}</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- Menu mobile -->
<div class="menu_mobile max_991 hidden-md hidden-lg clearfix" style="display: none;">
   <ul class="ul_collections">
      <li class="special">
         <a href="javascipts:;">Tất cả danh mục</a>
      </li>
      <li class="level0 level-top parent">
         <a href="{{route('home')}}">Trang chủ</a>
      </li>
      <li class="level0 level-top parent">
         <a href="{{route('aboutUs')}}">Giới thiệu</a>
      </li>
      <li class="level0 level-top parent">
         <a href="{{route('allProduct')}}">Sản phẩm</a>
         <i class="fa fa-angle-down"></i>
         <ul class="level0" style="display:none;">
            @foreach ($categoryhome as $cate)
            <li class="level1 ">
               <a href="{{route('allListProCate',['cate'=>$cate->slug])}}"> <span>{{languageName($cate->name)}}</span> </a>
               <i class="fa fa-angle-down"></i>
               <ul class="level1" style="display:none;">
                  @foreach ($cate->typeCate as $type)
                  <li class="level2 ">
                     <a href="{{route('allListProType',['cate'=>$cate->slug,'typecate'=>$type->slug])}}"><span>{{languageName($type->name)}}</span></a>
                  </li>
                  @endforeach
               </ul>
            </li>
            @endforeach
         </ul>
      </li>
      <li class="level0 level-top parent">
         <a href="{{route('allListBlog')}}">Tin tức</a>
         <i class="fa fa-angle-down"></i>
         <ul class="level0" style="display:none;">
            @foreach ($blogCate as $item)
            <li class="level1  active "> 
               <a href="{{route('listCateBlog',['slug'=>$item->slug])}}"> <span>{{languageName($item->name)}}</span> </a>
            </li>
            @endforeach
         </ul>
      </li>
      <li class="level0 level-top parent">
         <a href="{{route('aboutUs')}}">Liên hệ</a>
      </li>
      \
   </ul>
</div>
<!-- End -->