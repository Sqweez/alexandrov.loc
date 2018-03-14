@extends('layouts.main')
@section('header')
	@include('main.header')
@endsection
@section('content')
	<section class="s_banner-3">
		<div class="wrap">
			<div class="s_banner-3__container">
				<div class="s_banner-3__left" style="background-image: url({{asset('images/m_desc/' .$discount->discount_image)}});"></div>
				<div class="s_banner-3__right">
					<div class="s_banner-3__right_column">
						<img class="logo" width="117px" src="{{asset('images/shops/'. $discount->shop->shop_logo)}}" alt="">
						<div class="txt">
							<h2>{{$discount->shop->shop_name}}</h2>
						</div>
					</div>
					<div class="s_banner-3__right_column">
						<div class="txt">
							<p>{{$discount->discount_short_desc}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="c_content">
		<div class="wrap">
			<div class="c_content__container">
				<div class="c_content__left">
					<div class="tab">
						<a href="#scrol_d" class="tab_item">Условия</a>
						<a href="#scrol_a" class="tab_item">описание</a>
						<a href="#scrol_b" class="tab_item">Контакты</a>
						<a href="#scrol_c" class="tab_item">комментарии</a>
					</div>
					<div id="scrol_d" class="c_content__block">
						<h2>Условия</h2>
						<div class="txt"><svg width="15" height="13" viewBox="0 0 15 13"><path fill="#ffc900" d="M.18 7.59a.67.67 0 0 1-.17-.43c0-.12.05-.3.17-.41l.8-.85a.54.54 0 0 1 .82 0l.05.07L5.02 9.5c.12.12.29.12.4 0l7.72-8.36h.06a.55.55 0 0 1 .81 0l.8.85a.6.6 0 0 1 0 .84L5.6 12.82a.52.52 0 0 1-.4.17.51.51 0 0 1-.4-.17L.3 7.77z"/></svg>
							<p>{{$discount->discount_condition}}</p>
						</div>
					</div>
					<div id="scrol_a" class="c_content__block">
						<h2>Описание скидки</h2>
						<p>{{$discount->discount_description}}</p>
					</div>
					<div id="scrol_c" class="c_content__comments">
						<h2>Комментарии</h2>
						@if($comments->isEmpty())
						<h3>Комментариев пока нет, будьте первым, кто оставит его!</h3>
						@else
						@foreach($comments as $k => $comment)
							@if($k)
							@break
							@endif
								<div class="g_coments">
									<div class="g_coments__body wrp">
										@include('main.comment', ['items' => $comment])
									</div>
								</div>
						@endforeach
						@endif
						@if(Auth::check())
							@if (count($errors) > 0)
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
						<div id="respond" class="comment-respond">
							<div id="comment_add">Добавить комментарий</div>{{-- для <a href="#comment-4">Светлана Калиева</a> --}}{{--<small><a rel="nofollow" id="cancel-comment-reply-link" href="/discounts/detskie-chasy-smart-baby-watch-3/#respond">Отменить ответ</a></small>--}}
							{{ Form::open (['url' => route('comments.store'), 'class' => 'comment-form', 'method' => 'post', 'id' => 'commentForm'])}}
							{{ Form::textarea('text', '', ['class' => 'form-comment', 'placeholder' => 'Ваш комментарий', 'aria-required' => 'true']) }}
							{{ Form::button('Отправить', ['type' => 'submit', 'class' => 'button-comment', 'id' => 'submit'])}}
							{{ Form::hidden('content_id', $discount->id, ['id' => 'content_id']) }}
							{{ Form::hidden('user_id', Auth::id(), ['id' => 'user_id']) }}
							{{ Form::hidden('parent_id','', ['id' => 'parent_id']) }}
							{{ Form::close() }}
						</div>
						@else
						<p class="must-log-in">Чтобы оставить комментарий необходимо <a href="{{route('login')}}">авторизоваться</a></p>
						@endif
					</div>
					<script type="text/javascript">
						$(document).ready(function () {
							$('.answer').on('click', function (event) {
								event.preventDefault();
								var name = $(this).text();
								var id = $(this).attr('id');
								console.log(id);
								var content = 'Добавить ответ для <a href=' + id + '>' + name + '</a><br><small><a rel="nofollow" class="cancel-answer" id="cancel-comment-reply-link" href="#	">Отменить ответ</a></small>';
								$('#comment_add').html(content);
								$('input[name="parent_id"]').val(id);
                                $('.cancel-answer').on('click', function (event) {
                                    event.preventDefault();
                                    $('#comment_add').html('Добавить комментарий');
                                    $('input[name="parent_id"]').val('');
                                });
                            });

                        })
					</script>
				</div>
				<div class="c_content__right">
					<div class="slider">
						<div class="swiper-container gallery-top s1">
							<div class="swiper-wrapper">
								<div class="swiper-slide" style="background-image: url(/*'http://lorempixel.com/455/280'*/);"></div>
								<div class="swiper-slide" style="background-image: url({{--'http://lorempixel.com/455/280'--}});"></div>
								<div class="swiper-slide" style="background-image: url({{--'http://lorempixel.com/455/280'--}});"></div>
								<div class="swiper-slide" style="background-image: url({{--'http://lorempixel.com/455/280'--}});"></div>
							</div>
						</div>
						<div class="swiper-container gallery-thumbs p1">
							<div class="swiper-wrapper">
							</div>
						</div>
					</div>
					<div id="scrol_b" class="c_content__block s_slider__banner">
						<h2>Контакты</h2>
						<div class="c_content__block_col">
							<h3>{{$discount->shop->shop_name}}</h3>
							<div class="item">
								<h3>Адрес</h3>
								<a href="#" class="s_contacts__adress">{{$discount->shop->shop_address}}</a>
							</div>
							<div class="item">
								<h3>Телефон</h3>
								<a href="tel:{{$discount->shop->shop_phone}}">{{$discount->shop->shop_phone}}</a>
							</div>
							<div class="item">
								<h3>Почта</h3>
								<a href="{{$discount->shop->shop_phone}}">{{$discount->shop->shop_mail}}</a>
							</div>
							<div class="item">
								<h3>Адрес</h3>
								<a href="{{$discount->shop->shop_web}}">{{$discount->shop->shop_web}}</a>
							</div>
							<div class="item">
								<h3>Соц. сети</h3>
								<div class="s_icons">
									<a class="s_icons__icon" href="{{$discount->shop->shop_vk_url}}"><svg width="24.5" height="18" viewBox="0 0 548.4 548.4"><path d="M545.5 400.3c-0.7-1.4-1.3-2.6-1.9-3.6 -9.5-17.1-27.7-38.2-54.5-63.1l-0.6-0.6 -0.3-0.3 -0.3-0.3h-0.3c-12.2-11.6-19.9-19.4-23.1-23.4 -5.9-7.6-7.2-15.3-4-23.1 2.3-5.9 10.9-18.4 25.7-37.4 7.8-10.1 14-18.2 18.6-24.3 32.9-43.8 47.2-71.8 42.8-83.9l-1.7-2.8c-1.1-1.7-4.1-3.3-8.8-4.7 -4.8-1.4-10.9-1.7-18.3-0.7l-82.2 0.6c-1.3-0.5-3.2-0.4-5.7 0.1 -2.5 0.6-3.7 0.9-3.7 0.9l-1.4 0.7 -1.1 0.9c-1 0.6-2 1.6-3.1 3 -1.1 1.4-2.1 3.1-2.8 5 -9 23-19.1 44.4-30.6 64.2 -7 11.8-13.5 22-19.4 30.7 -5.9 8.7-10.8 15-14.8 19.1 -4 4.1-7.6 7.4-10.9 9.8 -3.2 2.5-5.7 3.5-7.4 3.1 -1.7-0.4-3.3-0.8-4.9-1.1 -2.7-1.7-4.8-4-6.4-7 -1.6-2.9-2.7-6.7-3.3-11.1 -0.6-4.5-0.9-8.3-1-11.6 -0.1-3.2 0-7.8 0.1-13.7 0.2-5.9 0.3-9.9 0.3-12 0-7.2 0.1-15.1 0.4-23.6 0.3-8.5 0.5-15.2 0.7-20.1 0.2-4.9 0.3-10.2 0.3-15.7s-0.3-9.8-1-13c-0.7-3.1-1.7-6.2-3-9.1 -1.3-2.9-3.3-5.2-5.9-6.9 -2.6-1.6-5.8-2.9-9.6-3.9 -10.1-2.3-22.9-3.5-38.5-3.7 -35.4-0.4-58.1 1.9-68.2 6.9 -4 2.1-7.6 4.9-10.8 8.6 -3.4 4.2-3.9 6.5-1.4 6.9 11.4 1.7 19.5 5.8 24.3 12.3l1.7 3.4c1.3 2.5 2.7 6.9 4 13.1 1.3 6.3 2.2 13.2 2.6 20.8 1 13.9 1 25.8 0 35.7 -1 9.9-1.9 17.6-2.7 23.1 -0.9 5.5-2.1 10-3.9 13.4 -1.7 3.4-2.9 5.5-3.4 6.3 -0.6 0.8-1 1.2-1.4 1.4 -2.5 0.9-5 1.4-7.7 1.4 -2.7 0-5.9-1.3-9.7-4 -3.8-2.7-7.8-6.3-11.8-11 -4.1-4.7-8.7-11.2-13.8-19.6 -5.1-8.4-10.5-18.3-16-29.7l-4.6-8.3c-2.9-5.3-6.8-13.1-11.7-23.3 -5-10.2-9.3-20-13.1-29.6 -1.5-4-3.8-7-6.9-9.1l-1.4-0.9c-0.9-0.8-2.5-1.6-4.6-2.4 -2.1-0.9-4.3-1.5-6.6-1.9l-78.2 0.6c-8 0-13.4 1.8-16.3 5.4l-1.1 1.7C0.3 140.1 0 141.7 0 143.8c0 2.1 0.6 4.7 1.7 7.7 11.4 26.8 23.8 52.7 37.3 77.7 13.4 24.9 25.1 45 35 60.2 9.9 15.2 20 29.6 30.3 43.1 10.3 13.5 17.1 22.2 20.4 26 3.3 3.8 6 6.7 7.9 8.6l7.1 6.9c4.6 4.6 11.3 10 20.1 16.4 8.9 6.4 18.7 12.7 29.4 18.9 10.8 6.2 23.3 11.2 37.5 15.1 14.3 3.9 28.2 5.5 41.7 4.7h32.8c6.7-0.6 11.7-2.7 15.1-6.3l1.1-1.4c0.8-1.1 1.5-2.9 2.1-5.3 0.7-2.4 1-5 1-7.9 -0.2-8.2 0.4-15.6 1.9-22.1 1.4-6.6 3-11.5 4.9-14.8 1.8-3.3 3.9-6.1 6.1-8.4 2.3-2.3 3.9-3.7 4.9-4.1 0.9-0.5 1.7-0.8 2.3-1 4.6-1.5 9.9 0 16.1 4.4 6.2 4.5 12 10 17.4 16.6 5.4 6.6 11.9 13.9 19.6 22.1 7.6 8.2 14.3 14.3 20 18.3l5.7 3.4c3.8 2.3 8.8 4.4 14.9 6.3 6.1 1.9 11.4 2.4 16 1.4l73.1-1.1c7.2 0 12.9-1.2 16.8-3.6 4-2.4 6.4-5 7.1-7.9 0.8-2.9 0.8-6.1 0.1-9.7C546.8 404.3 546.1 401.7 545.5 400.3z" fill="#d8d8d8"/></svg></a>
									<a href="{{$discount->shop->shop_fb_url}}" class="s_icons__icon"><svg width="15" height="24.5" viewBox="0 0 96.1 96.1"><path d="M72.1 0L59.6 0C45.6 0 36.6 9.3 36.6 23.7v10.9H24c-1.1 0-2 0.9-2 2v15.8c0 1.1 0.9 2 2 2h12.5v39.9c0 1.1 0.9 2 2 2h16.4c1.1 0 2-0.9 2-2V54.3h14.7c1.1 0 2-0.9 2-2l0-15.8c0-0.5-0.2-1-0.6-1.4 -0.4-0.4-0.9-0.6-1.4-0.6H56.8v-9.2c0-4.4 1.1-6.7 6.8-6.7l8.4 0c1.1 0 2-0.9 2-2V2C74 0.9 73.2 0 72.1 0z" fill="#d8d8d8"/></svg></a>
									<a href="{{$discount->shop->shop_ok_url}}" class="s_icons__icon"><svg width="15" height="27" viewBox="0 0 95.5 95.5"><style>.a{fill:#d8d8d8;}</style><path d="M43 67.3c-7.4-0.8-14.1-2.6-19.8-7.1 -0.7-0.6-1.4-1.1-2.1-1.7 -2.5-2.4-2.8-5.2-0.8-8 1.7-2.4 4.5-3.1 7.5-1.7 0.6 0.3 1.1 0.6 1.6 1 10.6 7.3 25.3 7.5 36 0.3 1.1-0.8 2.2-1.5 3.5-1.8 2.6-0.7 4.9 0.3 6.3 2.5 1.6 2.5 1.5 5-0.4 7 -3 3-6.5 5.2-10.5 6.8 -3.7 1.4-7.8 2.2-11.9 2.7 0.6 0.7 0.9 1 1.3 1.4 5.5 5.5 11 11 16.5 16.6 1.9 1.9 2.3 4.2 1.2 6.4 -1.1 2.4-3.6 4-6.1 3.8 -1.6-0.1-2.8-0.9-3.9-2 -4.1-4.2-8.4-8.3-12.4-12.5 -1.2-1.2-1.8-1-2.8 0.1 -4.2 4.3-8.4 8.5-12.7 12.7 -1.9 1.9-4.2 2.2-6.4 1.2 -2.4-1.1-3.9-3.6-3.7-6 0.1-1.6 0.9-2.9 2-4 5.4-5.4 10.9-10.9 16.3-16.3C42.2 68.2 42.5 67.8 43 67.3z" class="a"/><path d="M47.6 48.3c-13.2 0-24-11-24-24.2C23.7 10.7 34.5 0 47.8 0c13.4 0 24.1 11 24 24.5C71.8 37.7 60.9 48.4 47.6 48.3zM59.6 24.1c0-6.6-5.3-11.8-11.8-11.8 -6.6 0-11.9 5.3-11.8 11.9 0 6.5 5.3 11.7 11.9 11.7C54.4 36 59.6 30.7 59.6 24.1z" class="a"/></svg></a>
								</div>
							</div>
							<div class="item">
								<h3>Рейтинг</h3>
								<div class="rating">
									<span class="shop_rating" id="{{$discount->shop->shop_rating}}">{{$discount->shop->shop_rating}}/5</span>
									<svg id="star_1" {{--class="_active"--}} width="16" height="15" viewBox="0 0 16 15"><path fill="#d8d8d8" d="M8.3.3l2 4.67 5.12.44c.35.03.5.47.23.7l-3.89 3.32 1.17 4.94c.08.34-.3.61-.6.43l-4.4-2.62-4.4 2.62c-.31.18-.69-.09-.6-.43l1.16-4.94L.2 6.11a.4.4 0 0 1 .24-.7l5.11-.44L7.56.3c.13-.33.6-.33.74 0z"/></svg>
									<svg id="star_2" {{--class="_active"--}} width="16" height="15" viewBox="0 0 16 15"><path fill="#d8d8d8" d="M8.3.3l2 4.67 5.12.44c.35.03.5.47.23.7l-3.89 3.32 1.17 4.94c.08.34-.3.61-.6.43l-4.4-2.62-4.4 2.62c-.31.18-.69-.09-.6-.43l1.16-4.94L.2 6.11a.4.4 0 0 1 .24-.7l5.11-.44L7.56.3c.13-.33.6-.33.74 0z"/></svg>
									<svg id="star_3" {{--class="_active"--}} width="16" height="15" viewBox="0 0 16 15"><path fill="#d8d8d8" d="M8.3.3l2 4.67 5.12.44c.35.03.5.47.23.7l-3.89 3.32 1.17 4.94c.08.34-.3.61-.6.43l-4.4-2.62-4.4 2.62c-.31.18-.69-.09-.6-.43l1.16-4.94L.2 6.11a.4.4 0 0 1 .24-.7l5.11-.44L7.56.3c.13-.33.6-.33.74 0z"/></svg>
									<svg id="star_4" width="16" height="15" viewBox="0 0 16 15"><path fill="#d8d8d8" d="M8.3.3l2 4.67 5.12.44c.35.03.5.47.23.7l-3.89 3.32 1.17 4.94c.08.34-.3.61-.6.43l-4.4-2.62-4.4 2.62c-.31.18-.69-.09-.6-.43l1.16-4.94L.2 6.11a.4.4 0 0 1 .24-.7l5.11-.44L7.56.3c.13-.33.6-.33.74 0z"/></svg>
									<svg id="star_5" width="16" height="15" viewBox="0 0 16 15"><path fill="#d8d8d8" d="M8.3.3l2 4.67 5.12.44c.35.03.5.47.23.7l-3.89 3.32 1.17 4.94c.08.34-.3.61-.6.43l-4.4-2.62-4.4 2.62c-.31.18-.69-.09-.6-.43l1.16-4.94L.2 6.11a.4.4 0 0 1 .24-.7l5.11-.44L7.56.3c.13-.33.6-.33.74 0z"/></svg>
								</div>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        var id = $('.shop_rating').prop('id');
                                        $.ajax({
                                            success: function () {
                                                for (var i = 1; i <= id; i++){
                                                    $('#star_' + i + '').addClass('_active');
                                                }
                                            }
                                    })
                                    })
                                </script>
							</div>
						</div>
						<div id="s_map_1" class="s_contacts__map"></div>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection
@section('footer')
	@include('main.footer')
@endsection
