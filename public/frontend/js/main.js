window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};


$('.button-menu').click(function(){
	$('.menu_mobile').slideToggle();
});

$('.ul_collections li > .fa').click(function(){
	$(this).parent().toggleClass('current');
	$(this).toggleClass('fa-angle-down fa-angle-up');
	$(this).next('ul').slideToggle("fast");
	$(this).next('div').slideToggle("fast");
});



$(document).ready(function(){
	$('.magik-slideshow').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		fade: false,
		cssEase:'linear',
		dots: false,
		arrows: true,
		infinite: true
	});


	$(".banner_slider").slick({
		autoplay: false,
		autoplaySpeed: 6000,
		dots: false,
		arrows: true,
		infinite: false,
		speed: 600,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	})
	$('.close-pop, .opacitycart').click(function() {
		$('#popup-cart').removeClass('opencart');
		$('body').removeClass('opacitycart');
		$('.opacitycart').removeClass('openf');

	});


	$('.btn--view-more').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('#product_tabs_description').find('.product-well').toggleClass('expanded');
		return false;
	});

	var placeholderText = ['Bạn cần tìm gì...','Nồi cơm điện','Máy xay sinh tố','Bếp từ'];
	$('.change_pl').placeholderTypewriter({text: placeholderText});

});



/*# SHOW POPUP
********************************************************/
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;

/********************************************************
# HIDE POPUP
********************************************************/
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;

function awe_lazyloadImage() {
	var ll = new LazyLoad({
		elements_selector: ".lazyload",
		load_delay: 200,
		threshold: 0,
		callback_error: (el)=>{el.setAttribute('src', '//bizweb.dktcdn.net/100/384/470/themes/761495/assets/no_image.jpg?1664337458202' )}
	});
} window.awe_lazyloadImage=awe_lazyloadImage;
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
awe.hidePopup = function (selector) {
	$(selector).removeClass('active');
}
$(document).on('click','.overlay, .close-window, .btn-continue, .fancybox-close', function() {   
	awe.hidePopup('.awe-popup'); 
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
});
$(document).ready(function ($) {
	"use strict";
	if(navigator.userAgent.indexOf("Speed Insights") == -1) {
		awe_lazyloadImage();
	}

});



jQuery(document).ready(function() {
	"use strict";
	/*  Phone Menu  */

	jQuery(".slider_sec_product_1").slick({
		autoplay: false,
		autoplaySpeed: 6000,
		dots: false,
		arrows: true,
		infinite: false,
		speed: 600,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	});

	jQuery(".slider_sec_product_2").slick({
		autoplay: false,
		autoplaySpeed: 6000,
		dots: false,
		arrows: true,
		infinite: false,
		speed: 600,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	});

	jQuery("ul.accordion li.parent, ul.accordion li.parents, ul#magicat li.open,ul#magicat2 li.open").each(function(){
		jQuery(this).append('<em class="open-close"><i class="fas fa-chevron-down"></i></em>');
	});
	jQuery('ul.accordion, ul#magicat, ul#magicat2').accordionNew();
	jQuery("ul.accordion li.active, ul#magicat li.active,ul#magicat2 li.active").each(function(){
		jQuery(this).children().next("div").css('display','block');
	});

	jQuery('.slick_ajax_tab').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});
	
	jQuery('.slick_blog_index').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 2,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	
	jQuery('.slick_brand').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 6,
					slidesToScroll: 6
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});
	
});

function deleteCartInCheckoutPage(){ 	
	$(".checkout-cart-index a.btn-remove2,.checkout-cart-index a.btn-remove").click(function(event) {
		event.preventDefault();
		if(!confirm(confirm_content)){
			return false;
		}	
	});	
	return false;
}
function slideEffectAjax() {
	$('.top-cart-contain').mouseenter(function() {
		$(this).find(".top-cart-content").stop(true, true).slideDown(40);
	});

	$('.top-cart-contain').mouseleave(function() {
		$(this).find(".top-cart-content").stop(true, true).slideUp(40);
	});
}
function deleteCartInSidebar() {
	if(is_checkout_page>0) return false;
	$('#cart-sidebar a.btn-remove, #mini_cart_block a.btn-remove').each(function(){});
}  

$(document).ready(function(){
	slideEffectAjax();
});

if ($(window).width() > 1100){
	
	
	var menu_limit = "8";
	if (isNaN(menu_limit)){
		menu_limit = 10;
	} else {
		menu_limit = 7;
	}
}else{
	
	
	var menu_limit = "6";
	if (isNaN(menu_limit)){
		menu_limit = 8;
	} else {
		menu_limit = 5;
	}
}
var sidebar_length = $('.menu-item-count').length;
if (sidebar_length > (menu_limit + 1) ){
	$('.nav-cate:not(.site-nav-mobile) > ul').each(function(){
		$('.menu-item-count',this).eq(menu_limit).nextAll().hide().addClass('toggleable');
		$(this).append('<li class="more"><a class="nd-categories-a" title="Xem thêm"<label><i class="fas fa-chevron-right hidden-sm hidden-xs"></i> Xem thêm ... </label></a></li>');
	});
	$('.nav-cate > ul').on('click','.more', function(){
		if($(this).hasClass('less')){
			$(this).html('<a class="nd-categories-a" title="Xem thêm"><label><i class="fas fa-chevron-right hidden-sm hidden-xs"></i> Xem thêm ...</label></a>').removeClass('less');
		} else {
			$(this).html('<a class="nd-categories-a" title="Thu gọn"><label><i class="fas fa-chevron-right hidden-sm hidden-xs"></i> Thu gọn ... </label></a>').addClass('less');;
		}
		$(this).siblings('li.toggleable').slideToggle({
			complete: function () {
				var divHeight = $('#menu2017').height(); 
				$('.subcate.gd-menu').css('min-height', divHeight+'px');
			}
		});
	});
}

$(document).ready(function(){
	var wDW = $(window).width();
	/*Footer*/
	if(wDW > 767){
		$('.toggle-mn').show();
	}else {
		$('.footer-click > .cliked').click(function(){
			$(this).toggleClass('open_');
			$(this).next('ul').slideToggle("fast");
			$(this).next('div').slideToggle("fast");
		});
	}
});

/* Sidebar Dropdown */

(function(jQuery){
	jQuery.fn.extend({
		accordionNew: function() {       
			return this.each(function() {	
				var jQueryul			= jQuery(this),
					elementDataKey			= 'accordiated',
					activeClassName			= 'active',
					activationEffect 		= 'slideToggle',
					panelSelector			= 'ul, div',
					activationEffectSpeed 	= 'fast',
					itemSelector			= 'li';	
				if(jQueryul.data(elementDataKey))
					return false;							
				jQuery.each(jQueryul.find('ul, li>div'), function(){
					jQuery(this).data(elementDataKey, true);
					jQuery(this).hide();
				});	
				jQuery.each(jQueryul.find('em.open-close'), function(){
					jQuery(this).click(function(e){
						activate(this, activationEffect);
						return void(0);
					});	
					jQuery(this).bind('activate-node', function(){
						jQueryul.find( panelSelector ).not(jQuery(this).parents()).not(jQuery(this).siblings()).slideUp( activationEffectSpeed );
						activate(this,'slideDown');
					});
				});	
				var active = (location.hash)?jQueryul.find('a[href=' + location.hash + ']')[0]:jQueryul.find('li.current a')[0];	
				if(active){
					activate(active, false);
				}	
				function activate(el,effect){	
					jQuery(el).parent( itemSelector ).siblings().removeClass(activeClassName).children( panelSelector ).slideUp( activationEffectSpeed );	
					jQuery(el).siblings( panelSelector )[(effect || activationEffect)](((effect == "show")?activationEffectSpeed:false),function(){	
						if(jQuery(el).siblings( panelSelector ).is(':visible')){
							jQuery(el).parents( itemSelector ).not(jQueryul.parents()).addClass(activeClassName);
						} else {
							jQuery(el).parent( itemSelector ).removeClass(activeClassName);
						}	
						if(effect == 'show'){
							jQuery(el).parents( itemSelector ).not(jQueryul.parents()).addClass(activeClassName);
						}	
						jQuery(el).parents().show();	
					});	
				}	
			});
		}
	}); 
})(jQuery);


$(".not-dqtab").each( function(e){
	var $this1 = $(this);
	var datasection = $this1.closest('.not-dqtab').attr('data-section');
	$this1.find('.tabs-title li:first-child').addClass('current');
	var view = $this1.closest('.not-dqtab').attr('data-view');
	$this1.find('.tab-content').first().addClass('current');

	var _this = $(this).find('.content .button_show_tab');
	var droptab = $(this).find('.tab-desktop');

	$(_this).click(function(){ 
		if ($(droptab).hasClass('evo-open')) {
			$(droptab).addClass('evo-close').removeClass('evo-open');
		}else {
			$(droptab).addClass('evo-open').removeClass('evo-close');
		}
	});
	$this1.find('.tabs-title.ajax li').click(function(){
		$(droptab).addClass('evo-close').removeClass('evo-open');
		var $this2 = $(this),
			tab_id = $this2.attr('data-tab'),
			url = $this2.attr('data-url');
		var etabs = $this2.closest('.e-tabs');
		etabs.find('.tab-viewall').attr('href',url);
		etabs.find('.tabs-title li').removeClass('current');
		etabs.find('.tab-content').removeClass('current');
		$this2.addClass('current');
		etabs.find("."+tab_id).addClass('current');
		if(!$this2.hasClass('has-content')){
			$this2.addClass('has-content');		
			getContentTab(url,"."+ datasection+" ."+tab_id,view);
		}
	});
});
$('.not-dqtab .next').click(function(e){
	var count = 0
	$(this).parents('.content').find('.tab-content').each(function(e){
		count +=1;
	})
	var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
		res = str.replace("tab-", ""),
		datasection = $(this).closest('.not-dqtab').attr('data-section');
	res = Number(res);
	if(res < count){
		var current = res + 1;
	}else{
		var current = 1;
	}
	action(current,datasection);
})
$('.not-dqtab .prev').click(function(e){
	var count = 0
	$(this).parents('.content').find('.tab-content').each(function(e){
		count +=1;
	})
	var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
		res = str.replace("tab-", ""),
		datasection = $(this).closest('.not-dqtab').attr('data-section'),
		res = Number(res);	
	if(res > 1){
		var current = res - 1;
	}else{
		var current = count;
	}
	action(current,datasection);
})
function action(current,datasection,view){
	$('.'+datasection+' .tab-titlexs').attr('data-tab','tab-'+current);
	var text = '',
		url = '',
		tab_id='';
	$('.'+datasection+' ul.tabs.tabs-title.hidden-xs li').each(function(e){
		if($(this).attr('data-tab') == 'tab-'+current){
			var $this3 = $(this);
			title = $this3.find('span').text();
			url = $this3.attr('data-url');
			tab_id = $this3.attr('data-tab');
			if(!$this3.hasClass('has-content')){
				$this3.addClass('has-content');	
				getContentTab(url,"."+ datasection+" ."+tab_id,view);				
			}
		}
	})
	$("."+ datasection+" .tab-titlexs span").text(title);
	$("."+ datasection+" .tab-content").removeClass('current');
	$("."+ datasection+" .tab-"+current).addClass('current');
}
function getContentTab(url,selector,view){
	if(view == 'grid_4'){
		url = url+"?view=ajaxload4";
	}else{
		url = url+"?view=ajaxload";
	}
	var dataLgg = $(selector).parent().find('.tab-1 .owl-carousel').attr('data-lgg-items');
	var loadding = '<div class="loading"><div class="chasing-dots"><div></div><div></div><div></div></div></div>';
	$.ajax({
		type: 'GET',
		url: url,
		beforeSend: function() {
			$(selector).html(loadding);
		},
		success: function(data) {
			var content = $(data);
			$(selector).html(content.html());
			awe_lazyloadImage();
			ajaxCarousel(selector);	
			$('.slick_ajax_tab .add_to_cart').bind( 'click', addToCart );
			if(window.BPR)
				return window.BPR.initDomEls(), window.BPR.loadBadges();
		},
		dataType: "html"
	});
}
function ajaxCarousel(selector){
	$(selector+' .slick_ajax_tab').each( function(){
		$(this).slick({
			dots: false,
			infinite: false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 4,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 4
					}
				},
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2,
						dots: true
					}
				}
			]
		});
	})
}

$(".has-mega .menu-sub-cate[data-parent-id='cate_0']").addClass("active");
$(".has-mega .menu-banner[data-parent-id='cate_0']").addClass("active")

$(".has-mega .menu-cate").mouseover(function() {
	$(".has-mega .menu-cate").removeClass("active");
	$(".has-mega .menu-sub-cate").removeClass("active");
	$(".has-mega .menu-banner").removeClass("active");
	var n = $(this).attr("data-id");
	$(this).addClass("active");
	$(".has-mega .menu-sub-cate[data-parent-id='" + n + "']").addClass("active");
	$(".has-mega .menu-banner[data-parent-id='" + n + "']").addClass("active")
});
var setTimeoutMenu;
$(".has-mega .mega-content").mouseout(function() {
	setTimeoutMenu = setTimeout(function() {
		$(".has-mega .menu-cate").removeClass("active");
		$(".has-mega .menu-sub-cate").removeClass("active");
		$(".has-mega .menu-banner").removeClass("active");
		$(".has-mega .menu-sub-cate[data-parent-id='cate_0']").addClass("active");
		$(".has-mega .menu-banner[data-parent-id='cate_0']").addClass("active")
	}, 0)
});
$(".has-mega .mega-content").mouseover(function() {
	window.clearTimeout(setTimeoutMenu)
});