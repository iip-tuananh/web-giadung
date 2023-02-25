<div class="side-nav-categories margin-bottom-10">
    <div class="block-title">
       <h2>Danh mục tin</h2>
    </div>
    <div class="box-content box-category">
       <ul id="magicat">
          @foreach ($blogCate as $item)
          <li class="level0- level0">
             <a href="{{route('listCateBlog',['slug'=>$item->slug])}}" title="{{languageName($item->name)}}"><span>{{languageName($item->name)}}</span></a>
          </li>
          @endforeach
       </ul>
    </div>
 </div>
 <div class="blog-mini">
    <h2 class="title">
       <a href="tin-tuc" title="Bài viết khác">
       Bài viết khác
       </a>
    </h2>
    <div class="content latest-blog">
       <div class="list clearfix">
          @foreach ($hotBlogs as $item)
          <div class="item clearfix">
             <div class="blog-thumb">
                <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$item->image}}" alt="{{languageName($item->title)}}">
                </a>
             </div>
             <div class="blog-content">
                <h3><a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a> </h3>
             </div>
          </div>
          @endforeach
       </div>
    </div>
 </div>