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
                <h2>Одна карта дисконтного клуба <span><b>«</b>{{$globals->company_name}}<b>»</b></span></h2>
                <h3>Сотни реальных скидок и выгодных акций у вас в кармане!</h3>
                <div class="txt"><span class="_point"><span class="_point_app"></span></span><p>Дисконтная карта сразу же начнет экономить ваши деньги и окупится максимум за месяц</p></div>
                <div class="txt"><span class="_point"><span class="_point_app"></span></span><p>Более 250 лучших компаний-партнеров в разных городах и сферах бизнеса</p></div>
                <div class="txt"><span class="_point"><span class="_point_app"></span></span><p>Быстро и бесплатно доставим карту вам домой или в офис</p></div>
            </div>
        </div>
    </div>
</section>
<section class="s_slider">
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
<section class="c_desc">
    <div class="wrap">
        <div class="card">
            <div class="card__top">
                <h2>Скидки по карте</h2>
                <a class="_more" href="#"><h5>Посмотреть все акции</h5><svg width="46" height="46" viewBox="0 0 48 48"><path fill="#ffc900" d="M27.75 24.6l-5.28 5.15a.88.88 0 0 1-1.22 0 .84.84 0 0 1 0-1.19L25.92 24l-4.67-4.57a.84.84 0 0 1 0-1.19.88.88 0 0 1 1.22 0l5.28 5.16c.17.17.25.38.25.6 0 .21-.08.43-.25.6z"/></svg></a>
            </div>
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
                <a class="c_desc__item" href="#">
                    <div class="_rate">5%</div>
                    <span class="c_desc__item_img"><img src="images/m_desc/desc_1.jpg" alt=""></span>
                    <h4>"ShopTrackerWatch"</h4>
                    <p> детские часы Smart baby watch</p>
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
                <a class="c_desc__item" href="#">
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
<section class="c_part">
    <div class="wrap">
        <div class="c_part__container">
            <h2>{{$globals->company_name}} это:</h2>
            <div class="c_part__body">
                <div class="c_part__body_item">
                    <h2>10 000</h2>
                    <p>Сколько карт купили</p>
                    <div class="_line"></div>
                </div>
                <div class="c_part__body_item">
                    <h2>10 000</h2>
                    <p>Сколько партнеров в системе</p>
                    <div class="_line"></div>
                </div>
                <div class="c_part__body_item">
                    <h2>10 000</h2>
                    <p>Сколько денег сэкономлено</p>
                    <div class="_line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="c_stock">
    <div class="wrap">
        <div class="card">
            <div class="card__top">
                <h2>Акции по карте</h2>
                <a class="_more"><h5>Посмотреть все акции</h5><svg width="46" height="46" viewBox="0 0 48 48"><path fill="#ffc900" d="M27.75 24.6l-5.28 5.15a.88.88 0 0 1-1.22 0 .84.84 0 0 1 0-1.19L25.92 24l-4.67-4.57a.84.84 0 0 1 0-1.19.88.88 0 0 1 1.22 0l5.28 5.16c.17.17.25.38.25.6 0 .21-.08.43-.25.6z"/></svg></a>
            </div>
            <div class="card__body">
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
            </div>
        </div>
    </div>
</section>
<section class="s_banner">
    <div class="s_banner__left">
        <div class="b_container">
            <img class="_icon" src="images/s_banner/s_banner_icon.png" alt="">
            <h2>Почему</h2>
            <h3>стоит купить карту</h3>
            <div class="txt"><svg width="15" height="15" viewBox="0 0 15 13"><path fill="#494949" d="M.18 7.59a.69.69 0 0 1-.17-.43c0-.12.05-.29.17-.42l.8-.84a.54.54 0 0 1 .82 0l.05.06 3.17 3.55c.12.12.29.12.4 0l7.72-8.36h.06a.56.56 0 0 1 .81 0l.8.85a.6.6 0 0 1 0 .84L5.6 12.82a.5.5 0 0 1-.4.17.5.5 0 0 1-.4-.17L.3 7.77z"/></svg><p>Множество категорий товаров и услуг, <br>полный их список доступен в каталоге</p></div>
            <div class="txt"><svg width="15" height="15" viewBox="0 0 15 13"><path fill="#494949" d="M.18 7.59a.69.69 0 0 1-.17-.43c0-.12.05-.29.17-.42l.8-.84a.54.54 0 0 1 .82 0l.05.06 3.17 3.55c.12.12.29.12.4 0l7.72-8.36h.06a.56.56 0 0 1 .81 0l.8.85a.6.6 0 0 1 0 .84L5.6 12.82a.5.5 0 0 1-.4.17.5.5 0 0 1-.4-.17L.3 7.77z"/></svg><p>Заменит собой десятки других дисконтных карт</p></div>
            <div class="txt"><svg width="15" height="15" viewBox="0 0 15 13"><path fill="#494949" d="M.18 7.59a.69.69 0 0 1-.17-.43c0-.12.05-.29.17-.42l.8-.84a.54.54 0 0 1 .82 0l.05.06 3.17 3.55c.12.12.29.12.4 0l7.72-8.36h.06a.56.56 0 0 1 .81 0l.8.85a.6.6 0 0 1 0 .84L5.6 12.82a.5.5 0 0 1-.4.17.5.5 0 0 1-.4-.17L.3 7.77z"/></svg><p>Можете свободно делиться картой со своими друзьями и близкими</p></div>
            <a href="#" class="_btn" href="">Подробнее<svg class="_btn__icon" width="46" height="46" viewBox="0 0 48 48"><path fill="#fff" d="M27.75 24.6l-5.28 5.15a.88.88 0 0 1-1.22 0 .84.84 0 0 1 0-1.19L25.92 24l-4.67-4.57a.84.84 0 0 1 0-1.19.88.88 0 0 1 1.22 0l5.28 5.16c.17.17.25.38.25.6 0 .21-.08.43-.25.6z"/></svg></a>
        </div>
    </div>
    <div class="s_banner__right">
        <form action="/" class="b_container _validate">
            <img class="_icon" src="images/s_banner/s_banner_icon2.png">
            <h2>Оформите рассылку</h2>
            <div class="txt">
                <div class="_line"></div>
                <p>чтобы быть в курсе новостей</p>
            </div>
            <input class="m_input" type="email" name="mail" placeholder="Ваш email">
            <button type="submit"><div class="m_btn">Оформить<svg class="m_btn__icon" width="30" height="30" viewBox="0 0 32 32"><path fill="#fff" d="M18.34 16.37l-3.3 3.23c-.21.2-.55.2-.76 0a.53.53 0 0 1 0-.75L17.2 16l-2.92-2.85a.53.53 0 0 1 0-.75c.21-.2.55-.2.76 0l3.3 3.23c.11.1.16.23.16.37a.5.5 0 0 1-.16.37z"/></svg></div></button>
        </form>
    </div>
    <img class="s_banner__img" src="images/s_banner/chica.png">
</section>
<section class="s_slider">
    <div class="wrap">
        <div class="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('images/slider/slider_2.jpg');">
                    <div class="s_slider__top">
                        <h2>Скачайте <br>приложение</h2>
                        <div class="txt">
                            <div class="_line"></div>
                            <p>и получите скидки</p>
                        </div>
                        <a class="" href=""><img src="images/slider/download-on-the-app-store-apple.jpg" alt=""></a>
                        <a href=""><img src="images/slider/en-badge-web-generic.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('images/slider/slider_2.jpg');">
                    <div class="s_slider__top">
                        <h2>Скачайте <br>приложение</h2>
                        <div class="txt">
                            <div class="_line"></div>
                            <p>и получите скидки</p>
                        </div>
                        <a href="#"><img src="images/slider/download-on-the-app-store-apple.jpg" alt=""></a>
                        <a href="#"><img src="images/slider/en-badge-web-generic.jpg" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('images/slider/slider_2.jpg');">
                    <div class="s_slider__top">
                        <h2>Скачайте <br>приложение</h2>
                        <div class="txt">
                            <div class="_line"></div>
                            <p>и получите скидки</p>
                        </div>
                        <a href="#" class="icon_app" href=""><img src="images/slider/download-on-the-app-store-apple.jpg" alt=""></a>
                        <a href="#" class="icon_app" href=""><img src="images/slider/en-badge-web-generic.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <svg class="swiper-button-next2" width="36" height="36" viewBox="0 0 38 38"><path fill="#ffc900" d="M22.09 20.48l-4.36 4.25a.72.72 0 0 1-1 0 .68.68 0 0 1 0-.98l3.85-3.76-3.85-3.77a.68.68 0 0 1 0-.97.72.72 0 0 1 1 0l4.36 4.25a.68.68 0 0 1 0 .98z"/></svg>
        <svg class="swiper-button-prev2" width="36" height="36" viewBox="0 0 38 38"><path fill="#ffc900" d="M15.91 17.52l4.36-4.25a.72.72 0 0 1 1 0c.28.27.28.71 0 .98l-3.85 3.76 3.85 3.76c.28.27.28.71 0 .98a.72.72 0 0 1-1 0L15.9 18.5a.68.68 0 0 1 0-.98z" transform="translate(0 1)"/></svg>
    </div>
</section>
@endsection
@section('footer')
    @include('main.footer')
@endsection