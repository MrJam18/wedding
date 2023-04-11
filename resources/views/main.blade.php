<html lang="ru" class=" js "><head>
    <!-- Head / CSS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:url" content="https://wedinvent.ru">
    <meta property="og:image" content="https://wedinvent.ru/img/og-image.jpg">
    <link rel="shortcut icon" href="/img/main-2/favicons/favicon-42.png">
    <link rel="stylesheet" href="{{asset('css/libraries/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/libraries/blueimp.css')}}">
    <link rel="stylesheet" href="{{asset('css/libraries/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/libraries/jquery.css')}}">
    <link rel="stylesheet" href="{{asset('css/libraries/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/libraries/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=6d154263-0e5c-4413-a3db-121579c2a4c4"></script>
{{--    <script src="https://api-maps.yandex.ru/2.1/?apikey=963f829f-a8c8-4005-891c-8a919627e2e2"></script>--}}
{{--    <link rel="icon" href="/img/main-2/favicons/favicon.ico">--}}
{{--    <link rel="icon" href="/img/main-2/favicons/favicon-32.png" sizes="32x32">--}}
{{--    <link rel="icon" href="/img/main-2/favicons/favicon-192.png" sizes="192x192">--}}
{{--    <link rel="apple-touch-icon" href="/img/main-2/favicons/touch-icon-iphone.png">--}}
{{--    <link rel="apple-touch-icon" sizes="152x152" href="/img/main-2/favicons/touch-icon-ipad.png">--}}
{{--    <link rel="apple-touch-icon" sizes="180x180" href="/img/main-2/favicons/touch-icon-iphone-retina.png">--}}
{{--    <link rel="apple-touch-icon" sizes="167x167" href="/img/main-2/favicons/touch-icon-ipad-retina.png">--}}

    <title>Иулиания и Александр — наша свадьба</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->


    <!-- CSS -->
</head>
<body class="lang-ru modal-open" style="">

<!-- Секции -->
<div class="section section_noborder" id="section-first">
    <div class="section__first">
        <div class="section__first-overlay-top" id="overlay-top"></div>

        <div class="section__first-overlay-bottom" id="overlay-bottom"></div>

        <div class="section__first-overlay" id="overlay"></div>

        <div class="section__first-menu scroll" id="menu">
            <ul class="fadeIn" data-wow-delay="1.5s" data-wow-duration="1s">
                <li class="smooth-scroll">
                    <a href="#section-guest">Приглашение</a>
                </li>
                <li class="smooth-scroll">
                    <a href="#section-invite">О нас</a>
                </li>
                <li class="smooth-scroll">
                    <a href="#section-faq">F.A.Q.</a>
                </li>
                <li class="smooth-scroll">
                    <a href="#section-pool">Опрос</a>
                </li>
                <li class="smooth-scroll">
                    <a href="#section-story">Love story</a>
                </li>
                <li class="smooth-scroll">
                    <a href="#section-program">Программа дня</a>
                </li>
                <li class="smooth-scroll">
                    <a href="#section-rest">Свадебный ужин</a>
                </li>
                <li class="smooth-scroll" style="cursor: pointer">
                    <a id="registration-button">Регистрация</a>
                </li>
            </ul>
        </div>

        <div class="section__first-couple fadeIn" data-wow-delay="0.5s" data-wow-duration="0.5s" id="couple">
            <h1>
                Иулиания				<span>и</span>
                Александр			</h1>

            <h2>
                11.08.2023			</h2>
        </div>

        <div class="section__first-countdown" id="simple-countdown">
            <div class="simple-countdown fadeIn" data-wow-delay="1s" data-wow-duration="0.5s">
                <div class="simple-countdown-value oopacity-0">
                    <span class="simple-countdown-days">168</span>
                    Дней				</div>
                <div class="simple-countdown-value oopacity-0">
                    <span class="simple-countdown-hours">12</span>
                    Часов				</div>
                <div class="simple-countdown-value oopacity-0">
                    <span class="simple-countdown-minutes">56</span>
                    Минут				</div>
                <div class="simple-countdown-value oopacity-0">
                    <span class="simple-countdown-seconds">36</span>
                    Секунд				</div>
            </div>
        </div>
    </div>
</div>
<div class="section section_padding section_center" id="section-guest">
    <div class="section-body">
        <div class="section__guest">
            <h2>
				<span>
					Дорогие друзья!				</span>
            </h2>

            <p class="text js-emoji-included">
                Приглашаем вас на нашу свадьбу!<br>
                Мы будем очень рады, если вы проведете вместе с нами этот особенный день.			</p>

            <p class="accept-note">Пожалуйста, подтвердите или отклоните участие.</p>
            <div class="btn-wrapper">
                <button class="btn btn-default btn-modal" id="decline-invite-button">
                    Отклонить	</button>

                <span></span>
                <button class="btn btn-primary btn-modal" id="accept-invite-button">
                    Подтвердить	</button>
            </div>
        </div>
    </div>
</div>
<div class="section section_center section_padding" id="section-invite">
    <div class="section-body">
        <div class="section__invite">
            <!-- Имена -->
            <h2>
				<span>
					Дорогие друзья!		</span>
            </h2>

            <!-- Текст -->
            <div class="section__invite-text js-emoji-included">
                <p>
                    <br>
                    Жить, любить, чувствовать. Однажды мы поняли, что нет ничего важнее этого. И что идти дальше мы хотим только вместе. А теперь мечтаем, чтобы день нашей свадьбы стал красивым и ярким событием на этом увлекательном пути. <br>
                    <br>
                    Мы будем очень рады, если вы разделите этот счастливый день с нами. <br>
                    <br>
                    Увидимся на нашей свадьбе!</p>
            </div>

            <!-- Видео-обращение -->

            <!-- Жених и невеста -->
            <div class="section__invite-newlyweds">
                <div class="item">
                    <img src="{{asset('img/woman-round-cutted.png')}}">

                    <h3>Иулиания</h3>
                </div>

                <div class="item">
                    <img src="{{asset('img/man-round-cutted.png')}}">

                    <h3>Александр</h3>
                </div>
            </div>

            <!-- Жених и невеста -->
            <div class="section__invite-brand"></div>
        </div>
    </div>
</div>
<div class="section section_padding section_center" id="section-faq">
    <div class="section-body">
        <h2>
			<span>
				Отвечаем на ваши вопросы			</span>
        </h2>
        <ul>
            <li>
                <h3>Есть ли у нас свадебный хештег?</h3>
                <p class="js-emoji-included">Да, при публикациях в социальных сетях, используйте этот тег #alexuli</p>
            </li>
            <li>
                <h3>Будет ли дресс-код?</h3>
                <p class="js-emoji-included">Мы будем рады, если девушки выберут вечерние или коктейльные платья в пастельных тонах, а мужчины — костюм.</p>
                <p class="file"><img alte="palette" src="{{asset('img/palette.png')}}"></p>	</li>
            <li>
                <h3>Нужно ли дарить цветы?</h3>
                <p class="js-emoji-included">Мы с удовольствием насладимся вашими знаками внимания</p>
            </li>
            <li>
                <h3>Какие подарки предпочтительны?</h3>
                <p >Нам будут приятны и полезны любые ваши подарки. Будем рады и сюрпризам в конвертах <span>&#128522;</span></p>
            </li>
            <li>
                <h3>Возможно ли приехать на своем автомобиле?</h3>
                <p class="js-emoji-included">Да, на территории отеля имеется парковка.</p>

            </li>
        </ul>
    </div>
</div>
<div class="section section_padding section_center" id="section-pool">
    <div class="section-body">
        <h2>
			<span>
				Для нас важно знать			</span>
        </h2>
        <form id="questionnaire">
            <ul>
                <li id="pool-2">
                    <h3>Будет ли вам необходим трансфер?</h3>
                    <div class="variants">
                        <label class="radio">
                            <input type="radio" name="question-1" value="1"> Да
                        </label>
                        <label class="radio">
                            <input type="radio" name="question-1" value="2" checked="checked"> Нет
                        </label>				</div>
                </li>
                <li id="pool-1652">
                    <h3>Будете ли вы с детьми?</h3>
                    <div class="variants">
                        <label class="radio">
                            <input type="radio" name="question-2" value="1"> Да
                        </label>
                        <label class="radio">
                            <input type="radio" name="question-2" value="2"> Нет
                        </label>				</div>
                </li>
                <li id="pool-1653">
                    <h3>Предпочтения по алкоголю</h3>
                    <div class="variants">
                        <label class="checkbox">
                            <input type="checkbox" name="question-3" value="3"> Игристое
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="question-3" value="4"> Вино
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="question-3" value="5"> Крепкий алкоголь
                        </label>				</div>
                </li>
                <li id="pool-1653">
                    <h3>Будете ли вы участвовать в конкурсах?</h3>
                    <div class="variants">
                        <label class="radio">
                            <input type="radio" name="question-4" value="1"> Да
                        </label>
                        <label class="radio">
                            <input type="radio" name="question-4" value="2"> Нет
                        </label>
                        <label class="radio">
                            <input type="radio" name="question-4" value="6"> Зависит от крепости напитков
                        </label>
                    </div>
                </li>
                <li id="pool-1653">
                    <h3>Будете ли вы фотографироваться с молодожёнами?</h3>
                    <div class="variants">
                        <label class="radio">
                            <input checked type="radio" name="question-5" value="1"> Да
                        </label>
                    </div>
                </li>
                <div class="pools-comment">
                    <div class="form-group">
                        <h3>Ваш комментарий <span>(не&nbsp;обязательно)</span></h3>
                        <textarea class="form-control" name="comment" id="pools-comment" rows="5" placeholder="Если у вас есть дополнительный комментарий, просим указать его здесь."></textarea>
                    </div>
                </div>
            </ul>
            <div class="answers__button btn-wrapper">
                <button class="btn btn-primary" type="submit" data-btn-title="Отправить" data-btn-loading="Отправка..." data-btn-done="Отправлено" data-btn-error="Возникла ошибка, попробуйте позже">
                    Отправить		</button>
            </div>
        </form>
    </div>
</div>
<div class="section section_padding section_center" id="section-story">
    <div class="section-body section-body_extended">
        <h2>
			<span>
				Love story			</span>
        </h2>

        <div class="gallery">
            <ul id="gallery-story">
                <li class="slideInUp" data-wow-delay="0s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-1.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-1.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="0.2s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-2.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-2.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="0.4s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-3.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-3.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="0.6s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-4.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-4.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="0.8s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-5.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-5.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="1s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-6.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-6.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="1.2s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-7.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-7.png')}}" alt=""></a></li>
                <li class="slideInUp" data-wow-delay="1.4s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-8.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-8.png')}}" alt=""></a></li>
                <li class="slideInUp " data-wow-delay="1.6s" data-wow-duration="0.5s"><a href="{{asset('img/love-story/full/love-story-9.jpg')}}"><img class="gallery__img-cutted" src="{{asset('img/love-story/cutted/love-story-9.png')}}" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section section_center section_padding" id="section-program">
    <div class="section-body">
        <h2>
			<span>
				Программа свадебного дня			</span>
        </h2>
        <div id="timeline">
            <ul id="timelist">
                <li class="current-day">
                    <h3>{{WEDDING_DATE_STRING}}</h3>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="section-maps">
    <div class="section section_noborder section_padding section_center" id="section-rest">
        <div class="section-body">
            <h3>
                Ресторан		</h3>

            <p>
                Ленинградская область, Ломоносовский район, территория троицкая гора, д. 33 (Петергоф-Лофт)
            </p>
        </div>

        <div class="section-body section-body_fullwidth">
            <div class="map-wrapper" id="map-rest" style=""></div>
        </div>
    </div>
</div>
<div class="section section_noborder section_padding section_center" id="section-totop">
    <div class="section-body">
        <span class="arrow"></span>
    </div>
</div>
<div class="section section_noborder section_center" id="section-footer">
    <div class="section-body">
        <footer class="section__footer">
            <div class="section__footer-description">
                <p class="names">
                    Иулиания и Александр</p>
                <p>
                    Сайт-приглашение на свадьбу	</p>
                <p class="created">created by DreamITeam</p>
            </div>

            <div class="section__footer-logo">
                <span></span>
            </div>
        </footer>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="program-map" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Событие на карте</h2>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="program-map-coords">
                    <div class="form-group">
                        <label for="program-map-event-id" class="control-label">Выберите событие</label>
                        <select class="form-control" id="program-map-event-id">
                            <option value="">Показать все события</option>
                            <option value="4" data-id="4" data-coords="37.641787898146625,55.752023135323235" data-time-when="09:00" data-date-when="21 сентября 2023 г." data-name="Утро невесты" data-desc="Фотосессия в отеле Radisson Collection Hotel" data-addr="Россия, Москва, Певческий переулок, 4с1">
                                09:00 (21 сентября 2023 г.) - Утро невесты, Россия, Москва, Певческий переулок, 4с1								</option>
                            <option value="15" data-id="15" data-coords="37.644351,55.75554" data-time-when="09:30" data-date-when="21 сентября 2023 г." data-name="Сборы жениха" data-desc="Фотосессия в отеле Radisson Collection Hotel" data-addr="Москва, Большой Трёхсвятительский переулок, 1-3с1">
                                09:30 (21 сентября 2023 г.) - Сборы жениха, Москва, Большой Трёхсвятительский переулок, 1-3с1								</option>
                            <option value="7" data-id="7" data-coords="37.59975876190115,55.727311502849886" data-time-when="11:30" data-date-when="21 сентября 2023 г." data-name="Свадебная прогулка" data-desc="" data-addr="">
                                11:30 (21 сентября 2023 г.) - Свадебная прогулка, 								</option>
                            <option value="6" data-id="6" data-coords="37.476178,55.778649" data-time-when="14:00" data-date-when="21 сентября 2023 г." data-name="Регистрация в ЗАГСе" data-desc="Присутствие по желанию" data-addr="Россия, Москва, улица Народного Ополчения, 23к2">
                                14:00 (21 сентября 2023 г.) - Регистрация в ЗАГСе, Россия, Москва, улица Народного Ополчения, 23к2								</option>
                            <option value="8" data-id="8" data-coords="37.6653,55.740036" data-time-when="16:00" data-date-when="21 сентября 2023 г." data-name="Сбор гостей в ресторане, праздничный фуршет" data-desc="" data-addr="Россия, Москва, Таганская улица, 25">
                                16:00 (21 сентября 2023 г.) - Сбор гостей в ресторане, праздничный фуршет, Россия, Москва, Таганская улица, 25								</option>
                            <option value="9" data-id="9" data-coords="37.6653,55.740036" data-time-when="17:00" data-date-when="21 сентября 2023 г." data-name="Свадебная церемония" data-desc="" data-addr="Россия, Москва, Таганская улица, 25">
                                17:00 (21 сентября 2023 г.) - Свадебная церемония, Россия, Москва, Таганская улица, 25								</option>
                            <option value="10" data-id="10" data-coords="37.6653,55.740036" data-time-when="18:00" data-date-when="21 сентября 2023 г." data-name="Свадебный ужин" data-desc="" data-addr="Россия, Москва, Таганская улица, 25">
                                18:00 (21 сентября 2023 г.) - Свадебный ужин, Россия, Москва, Таганская улица, 25								</option>
                            <option value="62625" data-id="62625" data-coords="37.6653,55.740036" data-time-when="23:00" data-date-when="21 сентября 2023 г." data-name="Окончание вечера, праздничный фейерверк" data-desc="" data-addr="Россия, Москва, Таганская улица, 25">
                                23:00 (21 сентября 2023 г.) - Окончание вечера, праздничный фейерверк, Россия, Москва, Таганская улица, 25								</option>
                        </select>
                    </div>
                </form>
                <div id="program-map-wrapper" class="program-map-wrapper"></div>
            </div>
            <div class="modal-footer">
                <div class="btn-wrapper-float clearfix">
                    <button type="button" class="btn btn-small btn-default modal-close" data-dismiss="modal">
                        Закрыть</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-guest-accept" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="form-guest-accept">
            <input type="hidden" name="is_accepted" value="1">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Я принимаю приглашение</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="input-label" for="">Подтвердите количество персон
                            <select class="form-control" name="number_of_persons">
                                <option value="1">1</option>
                                <option value="2" selected="">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="input-label" for="">
                                С кем вы будете?
                                <input class="form-control" placeholder="Пару слов о спутниках"  name="satellites_message">
                            </label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="input-label" for="">
                                Сообщение молодоженам
                            <textarea class="form-control" name="message" rows="3" placeholder="Молодожены получат ваше сообщение"></textarea>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="btn-wrapper-float clearfix">
                        <button type="button" class="btn btn-small btn-default modal-close" data-dismiss="modal">
                            Закрыть</button>
                        <button type="submit" class="btn btn-small btn-primary" data-title="Отправить" data-loading="Отправка..." data-done="Отправлено" data-error="Возникла ошибка, попробуйте позже">
                            Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="modal-guest-decline" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form id="form-guest-decline">
            <input type="hidden" name="is_accepted" value="0">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Я не смогу быть</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">
                                Сообщение молодоженам	</label>
                            <textarea class="form-control" name="message" rows="3" placeholder="Молодожены получат ваше сообщение"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-wrapper-float clearfix">
                        <button type="button" class="btn btn-small btn-default modal-close" data-dismiss="modal">
                            Закрыть</button>
                        <button type="submit" class="btn btn-small btn-primary" data-title="Отправить" data-loading="Отправка..." data-done="Отправлено" data-error="Возникла ошибка, попробуйте позже">
                            Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade modal__persons" style="display: none" aria-modal="true" id="modal-create-person" tabindex="-1" role="dialog">
    <div class="modal-dialog registration__content-box" role="document">
        <form id="form-create-person">
            <div class="modal-content">
                <div class="modal-header registration__header">
                    <h2>Регистрация гостей</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12 registration__input-group">
                            <label for="" class="registration__input-label">
                                Фамилия
                            <input required type="text" class="form-control registration__input" name="surname" placeholder="" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12 registration__input-group">
                            <label for="" class="registration__input-label">
                                Имя
                                <input required type="text" class="form-control registration__input" name="name" placeholder="" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12 registration__input-group">
                            <label for="" class="registration__input-label">
                                Отчество
                                <input required type="text" class="form-control" name="patronymic" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12 registration__input-group">
                            <label for="" class="registration__input-label">
                                Номер телефона
                                <input required type="tel" class="form-control registration__input" name="phone" value="">
                            </label>
                        </div>
                        <div class="form-group col-md-12 registration__input-group">
                            <label for="" class="registration__input-label">
                                Email (необязательно)
                                <input type="email" class="form-control registration__input" name="email" value="">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <div class="btn-wrapper-float clearfix">
                        <button type="button" class="btn btn-small btn-default modal-close" data-dismiss="modal">
                            Закрыть</button>
                        <button  id="registration__button" type="submit" class="btn btn-small btn-primary registration__button" data-title="Сохранить" data-loading="Сохранение..." data-done="Сохранено" data-error="Возникла ошибка, попробуйте позже">
                            Сохранить</button>
                    </div>
                    <div id="registration__error" class="error"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- JS -->
<!-- Partials -->
<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;">
    <div class="slides" style="width: 12294px;"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div><input type="hidden" id="visit-uid" name="visit_uid" value="a6cc81dd3351e15fd11b04ff43fb01d7">
<input type="hidden" id="template-alias" name="template_alias" value="time_to_travel_001">
<input type="hidden" id="template-scheme" name="template_scheme" value="">

<!-- JS -->
<script src="{{asset('js/libraries/jquery.min.js')}}"></script>
<script src="{{asset('js/libraries/bootstrap.min.js')}}"></script>
<script src="{{asset('js/libraries/yandex.js')}}"></script>
<script src="{{asset('js/libraries/vertical-timeline.js')}}"></script>
<script src="{{asset('js/libraries/toastr.js')}}"></script>
<script src="{{asset('js/libraries/wow.js')}}"></script>
<script src="{{asset('js/libraries/jquery-emoji.js')}}"></script>
<script src="{{asset('js/libraries/jquery-knob.js')}}"></script>
<script src="{{asset('js/libraries/jquery-trottle.js')}}"></script>
<script src="{{asset('js/libraries/jquery-countdown.js')}}"></script>
<script src="{{asset('js/libraries/jquery-blueimp.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('js/libraries/other.js')}}"></script>

<!-- Scripts -->
<script>
    function initGallery(galleryId){
        document.getElementById(galleryId).onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {startSlideshow: false, slideshowInterval: 2000, index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    }
    $(document).ready(function(){
        if($('#gallery-story').length)
            initGallery('gallery-story');
        if($('#gallery-photos').length)
            initGallery('gallery-photos');
        if($('#gallery-instagram').length)
            initGallery('gallery-instagram');
    });
</script>
<script>
    $(document).ready(function(){
        var date_when = '2023-09-21';
        var date_when_a = date_when.split('-');
        var d = new Date(date_when_a[0], date_when_a[1] - 1, date_when_a[2]);

        $('#countdown').ClassyCountdown({
            theme: 'time_to_travel_001', // theme
            end: $.now() + Math.floor((d.getTime() - Date.now())/1000), // end time
            now: $.now(),
            labelsOptions: {
                lang: {
                    days: 'Дней',
                    hours: 'Часов',
                    minutes: 'Минут',
                    seconds: 'Секунд',
                }
            },
        });
    });
</script>

<script>
    $(document).ready(function () {
        const $simpleCountdown = $('#simple-countdown');
        let countDownTargetDate = new Date('{{WEDDING_DATE_ISO}}');
        let countDownInterval = null;

        printTime();
        runInterval();
        showTimer();

        function runInterval() {
            countDownInterval = setInterval(printTime, 1000);
        }

        function printTime() {
            const now = new Date().getTime();
            const distance = countDownTargetDate - now;
            const inMilliseconds = {
                day: 1000 * 60 * 60 * 24,
                hour: 1000 * 60 * 60,
                minute: 1000 * 60,
                second: 1000,
            }

            const days = addLeadingZero(Math.floor(distance / inMilliseconds.day));
            const hours = addLeadingZero(Math.floor((distance % inMilliseconds.day) / inMilliseconds.hour));
            const minutes = addLeadingZero(Math.floor((distance % inMilliseconds.hour) / inMilliseconds.minute));
            const seconds = addLeadingZero(Math.floor((distance % inMilliseconds.minute) / inMilliseconds.second));

            const result = `${days} : ${hours} : ${minutes} : ${seconds}`;

            if (distance < 0) {
                clearInterval(countDownInterval);

                $simpleCountdown.hide();
            } else {
                $simpleCountdown.find('.simple-countdown-days').text(days);
                $simpleCountdown.find('.simple-countdown-hours').text(hours);
                $simpleCountdown.find('.simple-countdown-minutes').text(minutes);
                $simpleCountdown.find('.simple-countdown-seconds').text(seconds);
            }
        }

        function showTimer() {
            setTimeout(() => {
                $simpleCountdown.find('.simple-countdown-value').removeClass('opacity-0');
            }, 400);
        }

        function addLeadingZero(value) {
            if (value < 10) {
                return `0${value}`;
            }

            return String(value);
        }
    });
</script>
{{--<script>--}}
{{--    main();--}}

{{--    async function main() {--}}
{{--        // Промис `ymaps3.ready` будет зарезолвлен, когда--}}
{{--        // загрузятся все компоненты API.--}}
{{--        await ymaps3.ready;--}}
{{--        // Создание карты.--}}
{{--        const map = new ymaps3.YMap(document.getElementById('program-map-wrapper'), {--}}
{{--            location: {--}}
{{--                // Координаты центра карты.--}}
{{--                // Порядок по умолчанию: «долгота, широта».--}}
{{--                center: [37.64, 55.76],--}}

{{--                // Уровень масштабирования. Допустимые значения:--}}
{{--                // от 0 (весь мир) до 19.--}}
{{--                zoom: 7--}}
{{--            },--}}
{{--    //         [--}}
{{--    //             // Добавляем слой для отображения схематической карты Яндекса.--}}
{{--    //             new ymaps3.YMapDefaultSchemeLayer()--}}
{{--    })--}}
{{--    }--}}

{{--    console.log(map);--}}
{{--</script>--}}
<script>
    ymaps.ready(initRest);

    function initRest() {
        if (document.getElementById('map-rest')) {
            // Центр карты
            const center = [59.867710, 29.836527];
            var map_rest_addr = 'территория Троицкая Гора, Петергоф, Санкт-Петербург';
            // Создаем карту
            mapRest = new ymaps.Map('map-rest', {
                center: center,
                zoom: 16,
                controls: ['smallMapDefaultSet']
            });

            // Создаем метку
            placemarkRest = new ymaps.Placemark (center, {
                balloonContentBody: map_rest_addr,
            }, {
                preset: 'twirl#redStretchyIcon',
            });

            // Добавление метки на карту
            mapRest.geoObjects.add(placemarkRest);

            // Поведение карты
            mapRest.behaviors.disable('scrollZoom');
        }
    }
</script>
<script type="module" src="{{asset('js/main.js')}}"></script>


</body></html>
