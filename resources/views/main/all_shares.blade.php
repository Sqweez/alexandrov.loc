
	@extends('layouts.main')
	@section('header')
		@include('main.header')
	@endsection
	@section('content')
	<section class="g_breadcrumbs">
		<div class="wrap">
			<a href="#">Скидки и купоны</a>
			<small><svg width="4" height="9" viewBox="0 0 4 9"><path fill="#aeaeae" d="M3.86 5.38L.84 8.81c-.2.22-.5.22-.7 0a.61.61 0 0 1 0-.78l2.67-3.04L.14 1.95a.61.61 0 0 1 0-.79c.2-.22.5-.22.7 0L3.86 4.6c.1.11.14.26.14.4a.6.6 0 0 1-.14.4z"/></svg></small>
			<span>Кораблик</span>
		</div>
	</section>
	<section class="s_slider _filter">
		<div class="wrap">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="s_slider__left">
							<h2>Распродажа!</h2>
							<p>Скидка предоставляется на весь товар, не участвующий в акциях, при сумме покупки более <b>500 р.</b></p>
							<a class="m_btn" href="#">Подробнее<svg class="m_btn__icon" width="28" height="28" viewBox="0 0 30 31"><path fill="#fff" d="M17.34 16.37l-3.3 3.23c-.2.2-.55.2-.76 0a.52.52 0 0 1 0-.75L16.2 16l-2.92-2.85a.52.52 0 0 1 0-.75c.21-.2.55-.2.76 0l3.3 3.23a.52.52 0 0 1 0 .74z"/></svg></a>
						</div>
						<div class="s_slider__right" style="background-image: url('images/slider/slider_1.jpg')"></div>
					</div>
					<div class="swiper-slide">
						<div class="s_slider__left">
							<h2>Распродажа!</h2>
							<p>Скидка предоставляется на весь товар, не участвующий в акциях, при сумме покупки более <b>500 р.</b></p>
							<a class="m_btn" href="#">Подробнее<svg class="m_btn__icon" width="28" height="28" viewBox="0 0 30 31"><path fill="#fff" d="M17.34 16.37l-3.3 3.23c-.2.2-.55.2-.76 0a.52.52 0 0 1 0-.75L16.2 16l-2.92-2.85a.52.52 0 0 1 0-.75c.21-.2.55-.2.76 0l3.3 3.23a.52.52 0 0 1 0 .74z"/></svg></a>
						</div>
						<div class="s_slider__right" style="background-image: url('images/slider/slider_1.jpg')"></div>
					</div>
				</div>
			</div>
			<svg class="swiper-button-next" width="36" height="36" viewBox="0 0 38 38"><path fill="#ffc900" d="M22.09 20.48l-4.36 4.25a.72.72 0 0 1-1 0 .68.68 0 0 1 0-.98l3.85-3.76-3.85-3.77a.68.68 0 0 1 0-.97.72.72 0 0 1 1 0l4.36 4.25a.68.68 0 0 1 0 .98z" /></svg>
			<svg class="swiper-button-prev" width="36" height="36" viewBox="0 0 38 38"><path fill="#ffc900" d="M15.91 17.52l4.36-4.25a.72.72 0 0 1 1 0c.28.27.28.71 0 .98l-3.85 3.76 3.85 3.76c.28.27.28.71 0 .98a.72.72 0 0 1-1 0L15.9 18.5a.68.68 0 0 1 0-.98z" transform="translate(0 1)"/></svg>
		</div>
	</section>
	<section class="c_filter">
		<div class="wrap">
			<svg class="mob_aside_open" viewBox="0 0 512 512" width="40" height="40"><path d="m191.8 480.6v-174.3l-177.3-263.5c-7.2-8.3-4.1-31.1 16.9-31.8h449.2c12.2 0 27.7 14.4 16.9 31.8l-177.3 263.5v108.2c0 6.4-3 12.4-8.1 16.3l-87.6 66.1c-5 5.6-30.1 9.3-32.7-16.3zm-122-428.8l159.4 236.9c2.3 3.4 3.5 7.3 3.5 11.4v139.6l46.8-35.3v-104.3c0-4.1 1.2-8 3.5-11.4l159.2-236.9h-372.4z" fill="#ffc900"/></svg>
			<aside class="c_filter__left">
				<div class="mob_aside_close">&times;</div>
				<div class="c_filter__left_articles">
					<div class="g_select">
						<div class="g_select__head">
							<input type="hidden" name="city">
							<span>Ваш город</span>
							<svg width="10" height="5" viewBox="0 0 10 5"><path fill="#e3e3e3" d="M5.04 4.82L1.18 1.05a.6.6 0 0 1 0-.87.64.64 0 0 1 .89 0l3.42 3.34L8.9.18a.64.64 0 0 1 .89 0 .6.6 0 0 1 0 .87L5.93 4.82A.63.63 0 0 1 5.5 5a.63.63 0 0 1-.45-.18z"/></svg>
						</div>
						<div class="g_select__body">
							<a href="#"><span>Город</span></a>
							<a href="#"><span>Город43</span></a>
							<a href="#"><span>Город53</span></a>
							<a href="#"><span>Город314</span></a>
							<a href="#"><span>Город 33</span></a>
							<a href="#"><span>Город 2</span></a>
							<a href="#"><span>Город 2</span></a>
							<a href="#"><span>Город 2</span></a>
						</div>
					</div>
					<form class="search" action="/">
						<input class="_input" type="text" placeholder="Поиск" required>
						<button type="submit" class="search_icon"><svg width="19" height="19" viewBox="0 0 18 19"><path fill="#fff" d="M12.9 12.34a7.1 7.1 0 0 0 1.61-4.52A6.95 6.95 0 0 0 7.64.8 6.96 6.96 0 0 0 .76 7.82a6.96 6.96 0 0 0 6.88 7.03 6.7 6.7 0 0 0 3.94-1.28l4.08 4.34a.88.88 0 0 0 1.27.03.92.92 0 0 0 .02-1.3zm-.18-4.52a5.14 5.14 0 0 1-5.08 5.2 5.14 5.14 0 0 1-5.08-5.2 5.14 5.14 0 0 1 5.08-5.19c2.8 0 5.08 2.33 5.08 5.2z"/></svg></button>
					</form>
					<h2>Категории</h2>
					<ul class="menu">
						<li>
							<a class="menu_item" href="#"><span>Все</span></a>
						</li>
						<li>
							<div class="menu_item"><span>Новые</span></div>
							{{--<ul class="menu_item__ul">
                                <li>
                                    <a href="#" class="menu_item__li">Подпункт 3</a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item__li">Подпункт 3</a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item__li">Подпункт 3</a>
                                </li>
                                <li>
                                    <a href="#" class="menu_item__li">Подпункт 3</a>
                                </li>
                            </ul>--}}
						</li>
						@foreach($categories as $category)
							<li>
								<div class="menu_item"><span>{{$category->name}}</span></div>
								<ul class="menu_item__ul">
									@foreach($category->sub as $sub_category)
										<li>
											<a href="#" class="menu_item__li">{{$sub_category->subcategory_name}}</a>
										</li>
									@endforeach
									{{--<li>
                                        <a href="#" class="menu_item__li">Бассейны</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu_item__li">Караоке</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu_item__li">Развлечения для детей</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu_item__li">Парки развлечений</a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu_item__li">Квесты, игровые клубы</a>
                                    </li>--}}
								</ul>
							</li>
						@endforeach
						{{--<li>
                            <a class="menu_item" href="#"><span>Красота и здоровье </span></a>
                        </li>
                        <li>
                            <a class="menu_item" href="#"><span>Товары</span></a>
                        </li>
                        <li>
                            <a class="menu_item" href="#"><span>Услуги</span></a>
                        </li>
                        <li>
                            <a class="menu_item" href="#"><span>Туризм, отели</span></a>
                        </li>--}}
					</ul>
				</div>
			</aside>
			<div class="card">
				<div class="card__top">
					<h2>Акции по карте</h2>
				</div>
				<div class="card__body c_stock">
					<a href="#" class="c_stock__item">
						<div class="_data">17.05</div>
						<span class="c_stock__item_img" style="background-image: url('images/m_stoke/m_stock2.jpg')"></span>
						<h4>"ShopTrackerWatch" детские часы Smart baby watch</h4>
						<span class="cesh">
							<span>9 000</span>
							<h3>6 000</h3>
						</span>
						<p>рублей</p>
					</a>
					<a href="#" class="c_stock__item">
						<div class="_data">17.05</div>
						<span class="c_stock__item_img" style="background-image: url('images/m_stoke/m_stock.jpg')"></span>
						<h4>"ShopTrackerWatch" детские часы Smart baby watch</h4>
						<span class="cesh">
							<h3>9 000</h3>
						</span>
						<p>рублей</p>
					</a>
					<a href="#" class="c_stock__item">
						<div class="_data">17.05</div>
						<span class="c_stock__item_img" style="background-image: url('images/m_stoke/m_stock.jpg')"></span>
						<h4>"ShopTrackerWatch" детские часы Smart baby watch</h4>
						<span class="cesh">
							<span>9 000</span>
							<h3>6 000</h3>
						</span>
						<p>рублей</p>
					</a>
					<a href="#" class="c_stock__item">
						<div class="_data">17.05</div>
						<span class="c_stock__item_img" style="background-image: url('images/m_stoke/m_stock.jpg')"></span>
						<h4>"ShopTrackerWatch" детские часы Smart baby watch</h4>
						<span class="cesh">
							<h3>9 000</h3>
						</span>
						<p>рублей</p>
					</a>
					<a href="#" class="c_stock__item">
						<div class="_data">17.05</div>
						<span class="c_stock__item_img" style="background-image: url('images/m_stoke/m_stock2.jpg')"></span>
						<h4>"ShopTrackerWatch" детские часы Smart baby watch</h4>
						<span class="cesh">
							<span>9 000</span>
							<h3>6 000</h3>
						</span>
						<p>рублей</p>
					</a>
					<a href="#" class="c_stock__item">
						<div class="_data">17.05</div>
						<span class="c_stock__item_img" style="background-image: url('images/m_stoke/m_stock.jpg')"></span>
						<h4>"ShopTrackerWatch" детские часы Smart baby watch</h4>
						<span class="cesh">
							<span>9 000</span>
							<h3>6 000</h3>
						</span>
						<p>рублей</p>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="c_map">
		<div class="wrap">
			<h2>Акции на карте</h2>
			<div id="map" data-center="48.3,71.0" data-points="52.0,71.475487[<span>ТЦ Стиль</span><small>ул. Грозовая 112 <b>(график работы с 7 до 22)</b></small>;54.2,75.2[<span>ТЦ Топ</span><small>ул. Грозовая 17 <b>(график работы с 7 до 17)</b></small>;47.2,66.0[<span>ТЦ Топ Стиль</span><small>ул. Грозовая 10 <b>(график работы с 7 до 22)</b></small>;52.3,79.7[<span>ТЦ Топ Стиль</span><small>ул. Суворова 2 <b>(график работы с 7 до 22)</b></small>;52.0,60.0[<span>ТЦ Топ Стиль</span><small>ул. Грос 14 <b>(график работы с 7 до 22)</b></small>;47.7,55.2[<span>ТЦ Топ Стиль 3</span><small>ул. Грозовая 17 <b>(график работы с 7 до 20)</b></small>;47.7,64.4[<span>ТЦ Топ Стиль</span><small>ул. Грозовая 1 <b>(график работы с 7 до 20)</b></small>"></div>
		</div>
	</section>
	@endsection
	@section('footer')
		@include('main.footer')
	@endsection
