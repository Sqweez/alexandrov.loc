@extends('layouts.main')
@section('header')
	@include('main.header')
@endsection
@section('content')
	<section class="c_info">
		<div class="wrap">
			<div class="c_info__container">
				<div class="c_info__left">
					<img src="images/m_info/desc_cart.png" alt="">
				</div>
				<div class="c_info__right">
					<h2>Получайте выгодные скидки от 3 до 25% на тысячи товаров и услуг дисконтного клуба</h2>
					<p class="_h3">используйте единую карту дисконтного клуба «Мой Александров» всего за 350 рублей</p>
					<div class="btns">
						<a href="#" class="m_btn">Точки продаж<svg class="m_btn__icon" width="28" height="28" viewBox="0 0 32 32"><path fill="#fff" d="M18.88 16.46l-4.06 3.97a.66.66 0 0 1-.93 0 .63.63 0 0 1 0-.92L17.48 16l-3.59-3.51a.63.63 0 0 1 0-.92.67.67 0 0 1 .93 0l4.06 3.97c.13.13.2.3.2.46 0 .16-.07.33-.2.46z"/></svg></a>
						<a href="#" class="_btn">условия пользования<svg class="_btn__icon" width="28" height="28" viewBox="0 0 32 32"><path fill="#ffc900" d="M18.88 16.46l-4.06 3.97a.66.66 0 0 1-.93 0 .63.63 0 0 1 0-.92L17.48 16l-3.59-3.51a.63.63 0 0 1 0-.92.67.67 0 0 1 .93 0l4.06 3.97c.13.13.2.3.2.46 0 .16-.07.33-.2.46z"/></svg></a>
					</div>
				</div>
			</div>
			<div class="c_info__container">
				<div class="c_info__content">
					<h2>Как это работает</h2>
					<p><span>Мы добавляем в каталог нашего <br>дисконтного клуба самые известные и проверенные компании нашего города, которые готовы предложить покупателям реальные скидки и акции. </span></p>
					<p>Все они распределяются по тематическим категориям, чтобы вы легко и быстро нашли необходимую услугу или товар.</p>
					<p>Став участником дисконтной программы «Мой Александров», вы сможете делать покупки или заказывать услуги в любимых местах, но теперь гораздо дешевле. Система приносит пользу всем – покупатели экономят деньги, а компании-партнеры обеспечивают рост своего бизнеса.</p>
				</div>
				<div class="c_info__right">
					<iframe class="c_info__right_video" width="586" height="365" src="https://www.youtube.com/embed/IFNrvdjClu8" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="c_info__content">
				<h2>В чем выгода</h2>
				<p><span>Заказав карту «Мой Александров», вы активируете мощный инструмент для получения скидок и бонусов, а также участия в акциях тех компаний, чьи товары и услуги вы регулярно покупаете.</span></p>
				<p>Теперь вам не придется носить с собой множество дисконтных карт «на всякий случай», ведь наша программа объединяет в себе более 250 компаний из различных отраслей бизнеса.</p>
			</div>
			<div class="c_info__content">
				<h2>Где купить</h2>
				<p><span>Приобрести карту дисконтного клуба «Мой Александров» можно несколькими способами:</span></p>
				<div class="txt"><span class="_point"></span><p>В наших фирменных точках продаж (они расположены в разных районах города)</p></div>
				<div class="txt"><span class="_point"></span><p>У компаний-партнеров (можете купить карту непосредственно в магазине, салоне или офисе одной из фирм, <br>участвующих в нашей программе)</p></div>
				<div class="txt"><span class="_point"></span><p>Через социальные сети (сделайте заказ на карту в нашей группе Вконтакте и мы доставим ее вам абсолютно бесплатно)</p></div>
			</div>
		</div>
	</section>
	<section class="c_desc">
		<div class="c_desc__bord">
			<h2><img src="images/m_desc/card__bord.png" alt="">Более 100 патнеров</h2>
		</div>
		<div class="wrap">
			<div class="card">
				<div class="card__body">
					<a class="c_desc__item" href="#">
						<div class="_rate">5%</div>
						<span class="c_desc__item_img"><img src="images/m_desc/desc_1.jpg" alt=""></span>
						<h4>"ShopTrackerWatch ShopTrackerWatch"</h4>
						<p> детские часы Smart baby wSmart baby wSmart baby watch</p>
					</a>
					<a class="c_desc__item " href="#">
						<div class="_rate">7%</div>
						<span class="c_desc__item_img"><img src="images/m_desc/desc_2.jpg" alt=""></span>
						<h4>"ShopTrackerWatch"</h4>
						<p> детские часы Smart baby watch</p>
					</a>
					<a class="c_desc__item " href="#">
						<div class="_rate">10%</div>
						<span class="c_desc__item_img"><img src="images/m_desc/desc_3.jpg" alt=""></span>
						<h4>"ShopTrackerWatch"</h4>
						<p> детские часы Smart baby watch</p>
					</a>
					<a class="c_desc__item " href="#">
						<div class="_rate">15%</div>
						<span class="c_desc__item_img"><img src="images/m_desc/desc_4.jpg" alt=""></span>
						<h4>"ShopTrackerWatch"</h4>
						<p> детские часы Smart baby watch</p>
					</a>
					<a class="c_desc__item" href="#">
						<div class="_rate">5%</div>
						<span class="c_desc__item_img"><img src="images/m_desc/desc_5.jpg" alt=""></span>
						<h4>"ShopTrackerWatch"</h4>
						<p> детские часы Smart baby watch</p>
					</a>
					<a class="c_desc__item" href="#">
						<div class="_rate">7%</div>
						<span class="c_desc__item_img"><img src="images/m_desc/desc_6.jpg" alt=""></span>
						<h4>"ShopTrackerWatch"</h4>
						<p> детские часы Smart baby watch</p>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="s_banner-2">
		<div class="s_banner-2__left">
			<div class="b_container">
				<div class="txt">
					<h3>Экономия до</h3>
					<h2>100 000</h2>
					<h3>руб. в год</h3>
				</div>
				<img src="images/s_banner/s_banner__pig.png" alt="">
			</div>
		</div>
		<div class="s_banner-2__right" style="background-image: url('images/s_banner/s_banner-2__mob.png');">
			<div class="b_container">
				<div class="txt">
					<h4>мой александров</h4>
					<h3>Все скидки и <br>партнеры в кармане</h3>
					<a href="#" class="icon_app" href=""><img src="images/slider/download-on-the-app-store-apple.jpg" alt=""></a>
					<a href="#" class="icon_app" href=""><img src="images/slider/en-badge-web-generic.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</section>
	<section class="c_new _grey">
		<div class="wrap">
			<div class="c_new__head">
				<div class="card__top">
					<h2>Новости</h2>
				</div>
			</div>
			<div class="c_new__container">
				<div class="c_new__item">
					<div class="_img" style="background-image: url('http://lorempixel.com/175/250');"></div>
					<div class="g_txt">
						<div class="data">23/04/2017</div>
						<a href="#"><h2>Теперь вам не придется носить с собой множество</h2></a>
						<h3>Пользоваться программой нашего дисконтного клуба очень просто – получив карту, ищите скидки и акции на необходимые вам товары или услуги. Сделать это можно по-разному: через каталог на сайте, скачав электронный оффлайн-каталог или же установив наше мобильное приложение</h3>
						<a href="#" class="_btn"><h5>подробнее</h5><svg class="_btn__icon" width="28" height="28" viewBox="0 0 32 32"><path fill="#ffc900" d="M18.88 16.46l-4.06 3.97a.66.66 0 0 1-.93 0 .63.63 0 0 1 0-.92L17.48 16l-3.59-3.51a.63.63 0 0 1 0-.92.67.67 0 0 1 .93 0l4.06 3.97c.13.13.2.3.2.46 0 .16-.07.33-.2.46z"/></svg></a>
					</div>
				</div>
				<div class="c_new__item">
					<div class="_img" style="background-image: url('http://lorempixel.com/175/250');"></div>
					<div class="g_txt">
						<div class="data">23/04/2017</div>
						<a href="#"><h2>Теперь вам не придется носить с собой множество</h2></a>
						<h3>Пользоваться программой нашего дисконтного клуба очень просто – получив карту, ищите скидки и акции на необходимые вам товары или услуги. Сделать это можно по-разному: через каталог на сайте, скачав электронный оффлайн-каталог или же установив наше мобильное приложение</h3>
						<a href="#" class="_btn"><h5>подробнее</h5><svg class="_btn__icon" width="28" height="28" viewBox="0 0 32 32"><path fill="#ffc900" d="M18.88 16.46l-4.06 3.97a.66.66 0 0 1-.93 0 .63.63 0 0 1 0-.92L17.48 16l-3.59-3.51a.63.63 0 0 1 0-.92.67.67 0 0 1 .93 0l4.06 3.97c.13.13.2.3.2.46 0 .16-.07.33-.2.46z"/></svg></a>
					</div>
				</div>
				<div class="c_new__item">
					<div class="_img" style="background-image: url('http://lorempixel.com/175/250');"></div>
					<div class="g_txt">
						<div class="data">23/04/2017</div>
						<a href="#"><h2>Теперь вам не придется носить с собой множество</h2></a>
						<h3>Пользоваться программой нашего дисконтного клуба очень просто – получив карту, ищите скидки и акции на необходимые вам товары или услуги. Сделать это можно по-разному: через каталог на сайте, скачав электронный оффлайн-каталог или же установив наше мобильное приложение</h3>
						<a href="#" class="_btn"><h5>подробнее</h5><svg class="_btn__icon" width="28" height="28" viewBox="0 0 32 32"><path fill="#ffc900" d="M18.88 16.46l-4.06 3.97a.66.66 0 0 1-.93 0 .63.63 0 0 1 0-.92L17.48 16l-3.59-3.51a.63.63 0 0 1 0-.92.67.67 0 0 1 .93 0l4.06 3.97c.13.13.2.3.2.46 0 .16-.07.33-.2.46z"/></svg></a>
					</div>
				</div>
				<div class="c_new__item">
					<div class="_img" style="background-image: url('http://lorempixel.com/175/250');"></div>
					<div class="g_txt">
						<div class="data">23/04/2017</div>
						<a href="#"><h2>Теперь вам не придется носить с собой множество</h2></a>
						<h3>Пользоваться программой нашего дисконтного клуба очень просто – получив карту, ищите скидки и акции на необходимые вам товары или услуги. Сделать это можно по-разному: через каталог на сайте, скачав электронный оффлайн-каталог или же установив наше мобильное приложение</h3>
						<a href="#" class="_btn"><h5>подробнее</h5><svg class="_btn__icon" width="28" height="28" viewBox="0 0 32 32"><path fill="#ffc900" d="M18.88 16.46l-4.06 3.97a.66.66 0 0 1-.93 0 .63.63 0 0 1 0-.92L17.48 16l-3.59-3.51a.63.63 0 0 1 0-.92.67.67 0 0 1 .93 0l4.06 3.97c.13.13.2.3.2.46 0 .16-.07.33-.2.46z"/></svg></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('footer')
	@include('main.footer')
@endsection
