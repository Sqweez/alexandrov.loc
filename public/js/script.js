$(document).ready(function(){


	var flag = Cookies.get('banner');
	if(flag!=null){
		$('.banner_app').remove();
		Cookies.set('banner','hidden');
	}else{
		$('.banner_app').removeClass('_hide');
	}
	//slider
	var swiper = new Swiper('.swiper-container', {
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 15,
		loop: true
	});
	var swiper2 = new Swiper('.swiper-container2', {
		paginationClickable: true,
		nextButton: '.swiper-button-next2',
		prevButton: '.swiper-button-prev2',
		spaceBetween: 15,
		loop: true
	});
	var swiper3 = new Swiper('.swiper-container3', {
		paginationClickable: true,
		nextButton: '.swiper-button-next3',
		prevButton: '.swiper-button-prev3',
		spaceBetween: 15,
	});
	//slider gallery
	var galleryTop = new Swiper('.s1', {
		spaceBetween: 10,
		loop:true,
		loopedSlides: 5 //looped slides should be the same
	});
	var galleryThumbs = new Swiper('.p1', {
		spaceBetween: 10,
		slidesPerView: 4,
		touchRatio: 0.2,
		loop:true,
		loopedSlides: 5, //looped slides should be the same
		slideToClickedSlide: true
	});

	galleryTop.params.control = galleryThumbs;
	galleryThumbs.params.control = galleryTop;

	$(window).resize(function(){
		if(Modernizr.mq('only screen and (max-width: 919.5px) and (min-width:768.5px)')){
			$('.header__bottom .search').insertAfter('.header__top .app');
		}else{
			$('.header__top .search').insertAfter('.header__bottom .menu');
		}
	});
	if(Modernizr.mq('only screen and (max-width: 919.5px) and (min-width:768.5px)')){
		$('.header__bottom .search').insertAfter('.header__top .app');
	}

	//banner_app
	$('.banner_app ._close').click(function(){
		if(flag==null){
			$('.banner_app').addClass('_hide');
			Cookies.set('banner','hidden');
		}
	});
	//mob_header_menu
	$('.mob_btn').click(function(){
		$(this).toggleClass('_show');
		$('.header').toggleClass('_show');
		$('.mob_header').toggleClass('_show');
	});


	//aside menu
	var menu_flag = Cookies.get('menu'),
		 menu_index = "";
	if(menu_flag!=null && $('.c_filter__left .menu').length){
		var menu_li = $('.c_filter__left .menu>li'),
			 li_length = menu_flag.length;
		menu_index = menu_flag;
		for(var i = 0; i<li_length; i++){
			var n = parseInt(menu_flag[i]);
			menu_li.eq(n).find('.menu_item').addClass('_active');
		}
	}

	$('.menu_item').click(function(){
		var div = $(this),
			 li = div.parent(),
			 n = li.index(),
			 submenu = div.next('ul');
		if(submenu.length){
			div.toggleClass('_active');
			submenu.find('._active').removeClass('_active');
			if(div.hasClass('_active')){
				if(menu_index.indexOf(n)<0){
					menu_index+=n.toString();
				}
				Cookies.set('menu',menu_index);
			}else{
				if(menu_index.indexOf(n)>=0){
					menu_index = menu_index.replace(n.toString(),'');
				}
				Cookies.set('menu',menu_index);
			}
		}
	});

	//aside menu
	$('.mob_aside_open').click(function(){
		$('.c_filter__left').addClass('_open');
	});
	$('.mob_aside_close').click(function(){
		$('.c_filter__left').removeClass('_open');
	});

	//як
	$('.c_content__left .tab_item').on('click', function (e) {
		e.preventDefault();
		var target = $($(this).attr('href'));
		$('html, body').stop().animate({'scrollTop': target.offset().top}, 500);
	});

	//select
	$('.g_select__head').click(function(){
		var wrap = $(this).closest('.g_select');
		wrap.toggleClass('_active');
	});
	$('.g_select__body a').click(function(e){
		e.preventDefault();
		var el = $(this),
			txt = el.text(),
			wrap = el.closest('.g_select'),
			input = wrap.find('input'),
			head_span = wrap.find('.g_select__head span');
		el.addClass('_current').siblings().removeClass('_current');
		wrap.removeClass('_active');
		head_span.text(txt);
		input.val(txt);
	});

	//popup
	var popup = $('.popup'),
		popup_h = popup.outerHeight(),
		popup_w = popup.outerWidth() + 45,
		h = $(window).height(),
		px = window.pageYOffset + h/2 - popup_h/2;
	popup.css({
		'top': px+'px',
		'margin-left': '-'+ popup_w/2 +'px',
	});

	$('.g_txt table').wrap('<div class="g_txt__table"></div>');

	//popups
	$('._open_pop').click(function(e){
		e.preventDefault();
		var name = $(this).data('name'),
			popup = $('.popup_'+name),
			popup_h = popup.outerHeight(),
			popup_w = popup.outerWidth() + 45,
			h = $(window).height(),
			px = window.pageYOffset + h/2 - popup_h/2;
		popup.css({
			'top': px+'px',
			'margin-left': '-'+ popup_w/2 +'px',
		});
		txt = $(this).data('txt');
		popup.find('h2').html(txt);
		txt = txt.replace(/<\/?[^>]+(>|$)/g, "");
		popup.find('input[name="form"]').val(txt);
		$('.popup.popup_'+name+', .overlay').addClass('_visible');
	});
	$('.overlay, ._close_pop').click(function(e){
		e.preventDefault();
		$('.popup, .overlay').removeClass('_visible');
	});
	//mask
	$('input[name="phone"]').mask("+7 (999) 999-99-99");
	// validate
	$("._validate").each(function () {
		var it = $(this);
		it.validate({
			rules: {
				form: {required: true},
				phone: {required: true},
				mail: {required: true}
			},
			messages: {},
			errorPlacement: function (error, element) {},
			submitHandler: function (form) {
				var data = new FormData(it[0]);
				$.ajax({
					url: '../mail.php',
					type: 'POST',
					data: it.serialize(),
					cache: false,
					processData: false,
					contentType: false,
					success: function( respond, textStatus, jqXHR ){
						$('.popup').removeClass('_visible');
						var name = 'thnx'
						popup = $('.popup_'+name),
							popup_h = popup.outerHeight(),
							popup_w = popup.outerWidth(),
							h = $(window).height(),
							px = window.pageYOffset + h/2 - popup_h/2;
						popup.css({
							'top': px+'px',
							'margin-left': '-'+ popup_w/2 +'px',
						});
						$('.popup.popup_'+name+', .overlay').addClass('_visible');
						setTimeout(function () {
							if ($('.popup_thnx').hasClass('_visible')) {
								$('.popup_thnx, .overlay').removeClass('_visible');
							}
						}, 2000);
						$("form").trigger( 'reset' );
					},
					error: function( jqXHR, textStatus, errorThrown ){
						console.log('ОШИБКИ AJAX запроса: ' + textStatus );
					}
				});
			},
			success: function () {},
			highlight: function (element, errorClass) {
				$(element).addClass('_error');
			},
			unhighlight: function (element, errorClass, validClass) {
				$(element).removeClass('_error');
			}
		});
	});

	//gmap init
	if($('.c_map').length){
		mapInitialize('map');
	}
	if($('.s_slider__contact').length || $('.c_content__right')){
		$('.s_contacts__map').each(function(index){
			var id = $(this).attr('id');
			s_mapInitialize(id);
		});
	}
});

function s_mapInitialize(el_id) {
	var center = new google.maps.LatLng(55.405941, 47.459006),
		geocoder = new google.maps.Geocoder();
	var mapOptions = {
		zoom: 13,
		center: center,
		mapTypeControl: false,
		scrollwheel: false,
		navigationControl: false,
		scaleControl: false
	};
	var mapElement = document.getElementById(el_id),
		address = $('#'+el_id).closest('.s_slider__banner').find('.s_contacts__adress').text();
	var map = new google.maps.Map(mapElement, mapOptions);

	var ico_img = {
		path: 'M9.5 0L9.5 0C4.2 0 0 4.2 0 9.4 0 11.2 0.6 12.9 1.4 14.4L7.6 25C8 25.7 8.8 26 9.5 26 10.2 26 11 25.7 11.4 25L17.6 14.4C18.4 12.9 19 11.2 19 9.4 19 4.2 14.8 0 9.5 0L9.5 0ZM9.5 12.2C7.6 12.2 6 10.6 6 8.7 6 6.9 7.6 5.3 9.5 5.3 11.4 5.3 13 6.9 13 8.7 13 10.6 11.4 12.2 9.5 12.2L9.5 12.2Z',
		fillColor: 'rgb(255, 201, 0)',
		fillOpacity: 1,
		scale: 1.6,
		strokeWeight: 0
	};

	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map,
				icon: ico_img,
				title: "Мы находимся тут!",
				position: results[0].geometry.location
			});
		} else {
			alert('Geocode was not successful for the following reason: ' + status);
		}
	});
}


//gmap init
function mapInitialize(el_id) {
	var center = $('#'+el_id).data('center').split(',');
	var kz = new google.maps.LatLng(center[0],center[1]);
	var mapOptions = {
		zoom: 5,
		center: kz,
		mapTypeControl: false,
		scrollwheel: false,
		navigationControl: false,
		scaleControl: false
	};
	var mapElement = document.getElementById(el_id);
	var map = new google.maps.Map(mapElement, mapOptions);

	var ico_img = {
		path: 'M12.8 2.1C18.7 2.1 23.5 6.9 23.5 12.8 23.5 18.7 18.7 23.5 12.8 23.5 6.9 23.5 2.1 18.7 2.1 12.8 2.1 6.9 6.9 2.1 12.8 2.1Z',
		fillColor: 'rgb(34, 38, 99)',
		fillOpacity: 1,
		scale: .9,
		strokeWeight: 3,
		strokeColor: '#fff'
	};

	var points = $('#'+el_id).data('points').split(';');
	points.forEach(function(feature) {
		var ico = ico_img,
			dot_info = feature.split('['),
			dot = dot_info[0].split(','),
			content = dot_info[1];
		var marker = new google.maps.Marker({
			position: {
				lat: Number(dot[0]),
				lng: Number(dot[1])
			},
			icon: ico,
			map: map,
			title: "Мы находимся тут!",
			optimized: false
		});
		var infowindow = new google.maps.InfoWindow({
			content: content
		});
		marker.addListener('click', function () {
			infowindow.open(map, marker);
			$('.gm-style-iw').parent().addClass('c_map__info');
		});
	});
}
