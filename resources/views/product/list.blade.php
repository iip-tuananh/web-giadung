@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/collection_style.scss.css')}}">
@endsection
@section('content')
<section class="bread-crumb">
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <ul class="breadcrumb">
               <li class="home">
                  <a href="{{route('home')}}" ><span title="Trang chủ">Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li class="home">
                  <a href="{{route('allProduct')}}" ><span title="Trang chủ">Sản phẩm</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li><strong ><span> Nồi</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="container main-collection margin-bottom-20">
   <div class="bg clearfix">
     
      <section class="section_category_index clearfix margin-bottom-20">
       <div class="container">
         @include('menuheader')
       </div>
      </section>
      <div class="dqdt-sidebar">
         <script src="//bizweb.dktcdn.net/100/384/470/themes/761495/assets/search_filter.js?1666237501587" type="text/javascript"></script>
         <div class="aside-filter clearfix">
       
            <div class="aside-title">
               <h2 class="title-head margin-top-0"><span>Bộ lọc sản phẩm</span></h2>
            </div>
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
               <div class="content-item">
                  <aside class="aside-item filter-price clearfix">
                     <div class="module-title">
                        <h2 class="title-head margin-top-0"><span>Lọc giá</span></h2>
                     </div>
                     <div class="aside-content filter-group">
                        <ul>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-duoi-100-000d">
                              <input type="checkbox" id="filter-duoi-100-000d" onchange="toggleFilter(this);" data-group="Khoảng giá" data-field="price_min" data-text="Dưới 100.000đ" value="(<100000)" data-operator="OR">
                              <i class="fa"></i>
                              Giá dưới 100.000đ
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-100-000d-200-000d">
                              <input type="checkbox" id="filter-100-000d-200-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="100.000đ - 200.000đ" value="(>=100000 AND <=200000)" data-operator="OR">
                              <i class="fa"></i>
                              100.000đ - 200.000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-200-000d-500-000d">
                              <input type="checkbox" id="filter-200-000d-500-000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="200.000đ - 500.000đ" value="(>=200000 AND <=500000)" data-operator="OR">
                              <i class="fa"></i>
                              200.000đ - 500.000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-500-000d-1000000d">
                              <input type="checkbox" id="filter-500-000d-1000000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="500.000đ - 1000000đ" value="(>=500000 AND <=1000000)" data-operator="OR">
                              <i class="fa"></i>
                              500.000đ - 1000000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-1000000d-2000000d">
                              <input type="checkbox" id="filter-1000000d-2000000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="1000000đ - 2000000đ" value="(>1000000 AND <2000000)" data-operator="OR">
                              <i class="fa"></i>
                              1000000đ - 2000000đ							
                              </label>
                              </span>
                           </li>
                           <li class="filter-item filter-item--check-box filter-item--green">
                              <span>
                              <label for="filter-tren2000000d">
                              <input type="checkbox" id="filter-tren2000000d" onchange="toggleFilter(this)" data-group="Khoảng giá" data-field="price_min" data-text="Trên 2000000đ" value="(>2000000)" data-operator="OR">
                              <i class="fa"></i>
                              Giá trên 2000000đ
                              </label>
                              </span>
                           </li>
                        </ul>
                     </div>
                  </aside>
         
               </div>
            </div>
         </div>
         <script>
            var selectedSortby;
            var tt = 'Thứ tự';
            var selectedViewData = "data";
            var filter = new Bizweb.SearchFilter()
            
            filter.addValue("collection", "collections", "2214743", "AND");
            				
            				function toggleFilter(e) {
            	_toggleFilter(e);
            	renderFilterdItems();
            	doSearch(1);
            }
            function _toggleFilterdqdt(e) {
            	var $element = $(e);
            	var group = 'Khoảng giá';
            	var field = 'price_min';
            	var operator = 'OR';	 
            	var value = $element.attr("data-value");	
            	filter.deleteValuedqdt(group, field, value, operator);
            	filter.addValue(group, field, value, operator);
            	renderFilterdItems();
            	doSearch(1);
            }
            function _toggleFilter(e) {
            	var $element = $(e);
            	var group = $element.attr("data-group");
            	var field = $element.attr("data-field");
            	var text = $element.attr("data-text");
            	var value = $element.attr("value");
            	var operator = $element.attr("data-operator");
            	var filterItemId = $element.attr("id");
            
            	if (!$element.is(':checked')) {
            		filter.deleteValue(group, field, value, operator);
            	}
            	else{
            		filter.addValue(group, field, value, operator);
            	}
            
            	$(".catalog_filters li[data-handle='" + filterItemId + "']").toggleClass("active");
            }
            function renderFilterdItems() {
            	var $container = $(".filter-container__selected-filter-list ul");
            	$container.html("");
            
            	$(".filter-container input[type=checkbox]").each(function(index) {
            		if ($(this).is(':checked')) {
            			var id = $(this).attr("id");
            			var name = $(this).closest("label").text();
            			addFilteredItem(name, id);
            		}
            	});
            
            	if($(".aside-content input[type=checkbox]:checked").length > 0)
            		$(".filter-container__selected-filter").show();
            	else
            		$(".filter-container__selected-filter").hide();
            }
            function addFilteredItem(name, id) {
            	var filteredItemTemplate = "<li class='filter-container__selected-filter-item' for='{3}'><a href='javascript:void(0)' onclick=\"{0}\"><i class='fas fa-times'></i> {1}</a></li>";
            	filteredItemTemplate = filteredItemTemplate.replace("{0}", "removeFilteredItem('" + id + "')");
            	filteredItemTemplate = filteredItemTemplate.replace("{1}", name);
            	filteredItemTemplate = filteredItemTemplate.replace("{3}", id);
            	var $container = $(".filter-container__selected-filter-list ul");
            	$container.append(filteredItemTemplate);
            }
            function removeFilteredItem(id) {
            	$(".filter-container #" + id).trigger("click");
            }
            function filterItemInList(object) {
            	q = object.val().toLowerCase();
            	object.parent().next().find('li').show();
            	if (q.length > 0) {
            		object.parent().next().find('li').each(function() {
            			if ($(this).find('label').attr("data-filter").indexOf(q) == -1)
            				$(this).hide();
            		})
            	}
            }
            
         
        
        
           
        
            function toggleCheckbox(id) {
            	$(id).click();
            }
         
       
            function switchView(view) {			  
            	switch(view) {
            		case "list":
            			selectedViewData = "data_list";					   
            			break;
            		default:
            			selectedViewData = "data";
            			break;
            	}			   
            	var url = window.location.href;
            	var page = getParameter(url, "page");
            	if(page != '' && page != null){
            		doSearch(page);
            	}else{
            		doSearch(1);
            	}
            }
            function selectFilterByCurrentQuery() {
            	awe_lazyloadImage();
            	var isFilter = false;
            	var url = window.location.href;
            	var queryString = decodeURI(window.location.search);
            	var filters = queryString.match(/\(.*?\)/g);
            	var page = 0;
            	if(queryString) {
            		isFilter = true;
            		$.urlParam = function(name){
            			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            			return results[1] || 0;
            		}
            		page = $.urlParam('page');
            	}
            	if(filters && filters.length > 0) {
            		filters.forEach(function(item) {
            			item = item.replace(/\(\(/g, "(");
            			var element = $(".aside-content input[value='" + item + "']");
            			element.attr("checked", "checked");
            			_toggleFilter(element);
            		});
            
            		isFilter = true;
            	}
            	var sortOrder = getParameter(url, "sortby");
            	if(sortOrder) {
            		_selectSortby(sortOrder);
            	}
            	if(isFilter) {
            		doSearch(page);
            		renderFilterdItems();
            	}
            }
            function getParameter(url, name) {
            	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            		results = regex.exec(url);
            	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
            }
            
            $( document ).ready(function() {
            	$(window).on('popstate', function() {
            		location.reload(true);
            	});
            	selectFilterByCurrentQuery();
            	$('.filter-group .filter-group-title').click(function(e){
            		$(this).parent().toggleClass('active');
            	});
            
            	$('.filter-mobile').click(function(e){
            		$('.aside.aside-mini-products-list.filter').toggleClass('active');
            	});
            
            	$('#show-admin-bar').click(function(e){
            		$('.aside.aside-mini-products-list.filter').toggleClass('active');
            	});
            
            	$('.filter-container__selected-filter-header-title').click(function(e){
            		$('.aside.aside-mini-products-list.filter').toggleClass('active');
            	});
            
            	if($(window).width() > 992){
            		$(".aside-item .module-title").click(function() {
            			$(".aside-item .module-title").not(this).next().hide();
            			$(this).next().slideToggle(200);
            			event.preventDefault();
            		});
            		$(".filter-item--check-box label").click(function() {
            			$(".aside-item .filter-group").fadeOut();
            		});
            	}
            
            	$('.open-filters').click(function(e){
            		e.stopPropagation();
            		$(this).toggleClass('openf');
            		$('.opacity_filter').toggleClass('opacity_filter_true');
            		$('.dqdt-sidebar').toggleClass('openf');
            	});
            
            	$(".filter-group li.filter-item label").click(function(){
            		$('.dqdt-sidebar').removeClass('openf');
            		$('.open-filters').removeClass('openf');
            		$('.opacity_filter').removeClass('opacity_filter_true');
            	});
            	$('.opacity_filter').click(function(e){
            		$('.dqdt-sidebar').removeClass('openf');
            		$('.open-filters').removeClass('openf');
            		$('.opacity_filter').removeClass('opacity_filter_true');
            	});
            
            
            });
         </script>	
      </div>
      <section class="main_container collection">
         <div class="category-products products">
            <div class="sortPagiBar clearfix hidden-xs">
               <div class="sort-cate-left">
                  <h3>Xếp theo:</h3>
                  <ul>
                    
                     <li class="btn-quick-sort alpha-asc">
                        <a href="javascript:;" onclick="sortby('alpha-asc')" title="Tên A-Z"><i></i>Tên A-Z</a>
                     </li>
                     <li class="btn-quick-sort alpha-desc">
                        <a href="javascript:;" onclick="sortby('alpha-desc')" title="Tên Z-A"><i></i>Tên Z-A</a>
                     </li>
                    
                     <li class="btn-quick-sort price-asc">
                        <a href="javascript:;" onclick="sortby('price-asc')" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                     </li>
                     <li class="btn-quick-sort price-desc">
                        <a href="javascript:;" onclick="sortby('price-desc')" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                     </li>
                  </ul>
               </div>
            </div>
            <section class="products-view-grid collection_reponsive">
               <div class="row">
                  @if(count($list) > 0)
                  @foreach ($list as $pro)
            
                     <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 product-col">
                        <div class="item_product_main ">
                          @include('layouts.product.itempro',['product'=>$pro])
                        </div>
                     </div>
                 
                  @endforeach
                  @else
                  <div class="alert alert-warning alert-dismissible fade in" role="alert">
                     Không có sản phẩm nào trong danh mục này.
                    
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     
                  </div>
                  @endif
               </div>
            </section>
            <script>
               $('#sortBy').val('default');
               				 $('#sortBy').bind('change', function() {		
               	var url      = window.location.href;
               	url = replaceUrlParam(url, 'sortby', $(this).val());		
               	window.location.href = url;		 
               });
               $('.switch-view').bind('click',function(){
               	var url      = window.location.href;
               	url = replaceUrlParam(url, 'view', $(this).data('view'));
               	window.location.href = url;
               });
               function replaceUrlParam(url, paramName, paramValue) {
               	var pattern = new RegExp('('+paramName+'=).*?(&|$)'),
               		newUrl = url.replace(pattern,'$1' + paramValue + '$2');
               	if ( newUrl == url ) {
               		newUrl = newUrl + (newUrl.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
               	}
               	return newUrl;
               }
               
            </script>
         </div>
      </section>
   </div>
   <div id="open-filters" class="open-filters hidden-lg hidden-md">
      <span class="fter">
      <i class="fa fa-filter"></i>
      <span>Lọc</span>
      </span>
   </div>
</div>

@endsection