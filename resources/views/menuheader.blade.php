@foreach ($categoryhome as $cate)
<a class="cate-item" href="{{route('allListProCate',['cate'=>$cate->slug])}}" title="{{languageName($cate->name)}}">
   <img class="responsive-img lazyload" 
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
      data-src="{{$cate->avatar}}" 
      alt="{{languageName($cate->name)}}">
   <h3 class="cate-title">
      {{languageName($cate->name)}}
   </h3>
</a>
@endforeach