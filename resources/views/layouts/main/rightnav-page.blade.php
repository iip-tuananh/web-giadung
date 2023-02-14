<div class="blog_left_base col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
   <aside class="aside-item sidebar-category collection-category">
      <div class="aside-title">
         <h2 class="title-head margin-top-0 cate"><span>Danh mục tin tức</span></h2>
      </div>
      <div class="aside-content">
         <nav class="nav-category navbar-toggleable-md">
            <ul class="nav navbar-pills">
               <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Trang chủ</a></li>
               <li class="nav-item"><a class="nav-link" href="{{route('aboutUs')}}">Giới thiệu</a></li>
               <li class="nav-item">
                  <a href="{{route('allProduct')}}" class="nav-link">Sản phẩm</a>
                  <i class="fa fa-caret-down"></i>
                  <ul class="dropdown-menu">
                     @foreach ($categoryhome as $cate)
                     <li class="dropdown-submenu nav-item">
                        <a class="nav-link" href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                        @if (count($cate->typeCate) > 0)
                        <i class="fa fa-caret-down"></i>
                        <ul class="dropdown-menu">
                           @foreach ($cate->typeCate as $type)
                              <li class="nav-item lv3">
                                 <a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'typecate'=>$type->slug])}}">{{languageName($type->name)}}</a>
                              </li>
                           @endforeach
                        </ul>
                        @endif
                     </li>
                     @endforeach
                  </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="{{route('allListBlog')}}">Tin tức</a>
                  @if (isset($blogCate))
                  <i class="fa fa-caret-down"></i>
                  <ul class="dropdown-menu">
                     @foreach ($blogCate as $cate)
                        <li class="dropdown-submenu nav-item">
                           <a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                        </li>
                     @endforeach
                  </ul>
                  @endif
               </li>
               <li class="nav-item"><a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a></li>
            </ul>
         </nav>
      </div>
   </aside>
   <div class="sidebar-right blog_noibat clearfix">
      <div class="section_title_base aside-item">
         <div class="aside-title">
            <h2 class="title-head">
               <a href="#" title="Tin tức gần đây">Tin tức gần đây</a>
            </h2>
         </div>
      </div>
      <div class="blog_content slick_blog slick_margin">
         @foreach ($news as $new)
            <div class="item clearfix">
               <div class="post-thumb">
                  <a class="image-blog scale_hover" href="{{route('detailBlog', ['slug'=>$new->slug])}}" title="{{languageName($new->title)}}">
                  <img class="img_blog lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$new->image}}"  alt="{{languageName($new->title)}}">
                  </a>
               </div>
               <div class="contentright">
                  <h3><a title="{{languageName($new->title)}}" href="{{route('detailBlog', ['slug'=>$new->slug])}}">{{languageName($new->title)}}</a></h3>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</div>