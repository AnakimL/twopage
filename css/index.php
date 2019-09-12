<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Джугба</title>

    <meta property="og:title" content="Джугба">
    <meta property="og:description" content="Джугба">


<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <!--1st screen style-->
    <link href="css/font.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="js/mod.js"></script>
    <script src="js/lazy.js"></script>
</head>
<body>




<div class="wrapper">
<!--   <a href="#popup-participate" data-fancybox class="d-flex d-md-none mob-fixed-btn scrollto">Зарегистрироваться</a>-->

<!--    <button id="button-to-top" class="compensate-for-scrollbar">Наверх</button>-->

    
    <section class="header">
 	<header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="/">Отель САРГИС ~≈</a>
            <a class="nav-link lap-hide" href="tel:89298345702"> <span><img src="img/header/call-phone.svg" alt=""></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#priceNum">Цены на номера</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#priceBar">Цены в баре</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roadTrip">Как добраться</a>
                    </li>
                    <li class=" nav-item__tel">
                        <a class="nav-link " href="tel:89298345702"> <span><img src="img/header/call-phone.svg" alt=""></span> 8 929 834 57 02</a>
                        <a class="nav-call" data-fancybox href="#callback">Обратный звонок</a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="header__info">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mobile-order-2">
                        <div class="header__left">

                            <div class="header_form">
                                <form action="#" id="headerForm" method="post">
                                    <div class="form__heading">Бронируйте номер для вашего отдыха</div>


                                    <div class="form-data__compos">
                                        <div class="form-data__arrival">
                                            <label for="arrival">Прибытие</label>
                                            <input required placeholder="дд.мм.гггг" id="arrival" type='text' class='datepicker-here' name="arrival" />
                                        </div>
                                        <div class="form-data__dep">
                                            <label for="departure">Выезд</label>
                                            <input placeholder="дд.мм.гггг" id="departure " type='text' class='datepicker-here' name="departure" />

                                        </div>

                                    </div>
                                    <div class="form-data" >
                                        <div class="form-data__title">
                                            <label for="adults">Взрослые</label>

                                        </div>
                                        <div class="form-data__composition">
                                            <input type="range"  id="adults" name="adults" min="0" max="100" value="0" >
                                            <button  class="form-data__button form-data__adult--minus">
                                                <span class="form-data__mark"><img src="img/header/minus.svg" alt=""></span>
                                            </button>
                                            <span id="res">0</span>
                                            <button  class="form-data__button form-data__adult--plus" >
                                                <span class="form-data__mark"><img src="img/header/plus.svg" alt=""></span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-data" >
                                        <div class="form-data__title">
                                            <label for="adults">Дети</label>

                                        </div>
                                        <div class="form-data__composition">
                                            <input type="range"  id="children" name="group-children" min="0" max="100" value="0" >
                                            <button  class="form-data__button form-data__child--minus">
                                                <span class="form-data__mark"><img src="img/header/minus.svg" alt=""></span>
                                            </button>
                                            <span id="res_child">0</span>
                                            <button  class="form-data__button form-data__child--plus" >
                                                <span class="form-data__mark"><img src="img/header/plus.svg" alt=""></span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-data__submit" >
                                        <button type="submit" >Подобрать номер</button>
                                    </div>


                                </form>



                            </div>


                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="header-right">
                <h2>Добро пожаловать в Джугбу!</h2>
                        </div>
                        <div class="header-mobile__submit">
                            <a href="#">Подобрать номер</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



 		 
 	   </header>
 </section>
    <section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="about__top--wrapper">
                    <div class="about__title">
                        <h3>Отель САРГИС <span>~≈</span> рад вам!</h3>

                    </div>

                    <div class="about__share">
                        <div class="about__share--icon">
                            <a href="#share" data-fancybox><img src="img/about/share.svg" alt=""></a>
                        </div>
                        <div class="about__share--bookmark">
                            <img src="img/about/bookmark.svg" alt="">
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="about__img">
                    
    
    
    <picture class="pictureclass">
        <source srcset="img/about/about.webp" type="image/webp">
        <source srcset="img/about/about.png" type="image/png">
        <img class="lazy" src="img/about/about.png" alt="alt">
    </picture>

    



                </div>

            </div>
            <div class="col-12 col-md-5">
                <div class="about__text">
                    <p>Добро пожаловать в отель «Джубга» - уютный гостиный дом на берегу теплого и приветливого Черного моря. Он находится на второй линии, всего в 500 м от уютного и чистого пляжа.
                    </p>
                       <p> С расположенной над отелем смотровой площадки вы сможете насладиться великолепными пейзажами бескрайнего моря, величественных гор, скалистых берегов и красивого города. Гостиница располагает широким выбором номеров классов «эконом» и «люкс» на 2, 3 и 4 места, оборудованных всеми необходимыми удобствами (кондиционером, холодильником, спутниковым ТВ). Также к вашим услугам отличный сервис, включающий прачечную, уборку номеров, встречи на вокзале в день прибытия. А организуемые нами экскурсии помогут вам ознакомиться с местными природными и рукотворными достопримечательностями.</p>
                </div>
            </div>

        </div>
    </div>

</section>
    <section class="price" id="priceNum">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Цены на номера</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="price__info">
                    <p>Предоставляя услуги проживания в отеле САРГИС, мы стремимся сделать ваш отдых максимально насыщенным, удобным и полным самых приятных впечатлений. В нашем 3-этажном гостином доме можно заказать номера класса "Эконом" или "Люкс". Номера "Эконом" расположены на 1 этаже, рассчитаны на размещение 2, 3 или 4 человек, отличаются невысокой стоимостью и минимальным набором условий, в которые входят кондиционер, место для отдыха, полотенце, зубная паста, мыло, шампунь и щетка. Номера "Люкс" – более дорогие номера и находятся они на 2 и 3 этажах и имеют улучшенные условия, в том числе спутниковое телевидение, холодильник, а также расположенный здесь же санузел и душевую.  <a href="#">Читать далее</a></p>

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="price__tabs">
                <ul class="nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#econom" role="tab" aria-controls="home" aria-selected="true">Эконом <span>750 Р.</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lux" role="tab" aria-controls="profile" aria-selected="false">Люкс <span>900 Р.</span></a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="econom" role="tabpanel" aria-labelledby="home-tab">
                        <a href="#priceChange" data-fancybox class="price__shedule">График изменения цен</a>
                        <p>Номера на первом этаже нашей гостиницы. Доступные цены и комфортное размещение.</p>
                        <ul>
                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>

                        </ul>
                        <a href="#" class="price__shedule">Посмотреть планировку номеров</a>
                        <div class="price__reserve">
                            <a  href="#reserveForm" data-fancybox data-selectable="true" >Забронировать</a>
                        </div>

                    </div>





                    <div class="tab-pane fade" id="lux" role="tabpanel" aria-labelledby="profile-tab">
                        <a href="#priceChangeLux" data-fancybox class="price__shedule">График изменения цен</a>
                        <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником..</p>
                        <ul>
                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img src="img/price/fridge.svg" alt=""></span><span> Холодильник</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/shower.svg" alt=""></span><span> Душ и туалет в номере</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>

                        </ul>
                        <a href="#" class="price__shedule">Посмотреть планировку номеров</a>
                        <div class="price__reserve">
                            <a href="#reserveForm" data-fancybox>Забронировать</a>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</section>
    <div id="callback" style="display: none">
    <form action="#">
        <div class="form__heading">Заказ обратного звонка</div>

        <div class="form__name">
            <label for="name">Имя</label>
            <input type="text" id="name" placeholder="Имя" required>
        </div>

        <div class="form__tel">
            <label for="tel">Телефон</label>
            <input type="tel" id="tel" placeholder="+7 000 000 00 00" required>
        </div>
        <div class="form__submit">
            <button type="submit">Позвонить мне</button>

            <label class="form__privacy">
                <div class="form__privacy-checkbox">
                    <input id="iamagree" type="checkbox" name="personalDataAgree" checked="checked">
                    <div class="form__privacy-checkbox-icon"></div>
                </div>
                <div class="form__privacy-text">Нажимая кнопку "Перезвоните мне", я принимаю условия&nbsp;<a href="" class="privacy">Пользовательского соглашения</a></div>
            </label>
        </div>

    </form>
</div>

<div id="freeNums-wrapper" style="display: none;">
    <div class="block-close" style="cursor: pointer"><span><img class="lazy" src="./img/about/close.png" height="40" alt=""> Закрыть</span></div>
    <div id="freeNums" >
        <div class="filter-card__header-title">
            <h4>Доступны свободные номера</h4>
            <p><span>01.07.2019 — 14.07.2019</span><span>Взрослые 2</span><span>Дети 1</span></p>
        </div>

        <div class="filter-cards__wrapper">

            <a class="filter-card__link filter-card__header-link" href="#reserveForm" data-fancybox="freenumbers">
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>
            <a class="filter-card__link filter-card__header-link" data-fancybox="freenumbers" href="#reserveNum4">
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>
            <a class="filter-card__link filter-card__header-link" >
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>
            <a class="filter-card__link filter-card__header-link" >
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>
            <a class="filter-card__link filter-card__header-link" >
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>
            <a class="filter-card__link filter-card__header-link" >
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>
            <a class="filter-card__link filter-card__header-link" >
                <div class="filter-card">
                    <div class="filter__image"><img class="lazy" src="img/filter/nomero.png" alt=""></div>
                    <div class="filter__name">
                        <div class="filter__class">Люкс #201</div>
                        <div class="filter__price"><span>900 P.</span></div>
                    </div>
                    <div class="filter__info">
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                        <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                    </div>


                    <div class="filter__reserve">
                        <div class="filter-left">
                            <span>Подробнее</span>
                        </div>
                        <div class="filter-right" >
                            <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                        </div>
                    </div>
                </div>

            </a>

        </div>
    </div>
</div>


<div id="priceChange" class="price__change" style="display: none">
    <h4>График изменения цен</h4>
    <div class="price__change-type">Эконом</div>
    <table class="table">
        <tbody>
        <tr>
            <td>май - сентябрь</td>
            <td>800 - 1600 Р.</td>
        </tr>
        <tr>
            <td>октябрь - ноябрь</td>
            <td>800 - 1600 Р.</td>
        </tr>
        <tr>
            <td>декабрь - январь</td>
            <td>800 - 1600 Р.</td>
        </tr>
        <tr>
            <td>февраль - апрель</td>
            <td>800 - 1600 Р.</td>
        </tr>
        </tbody>
    </table>

</div>

<div id="priceChangeLux" class="price__change" style="display: none">
    <h4>График изменения цен</h4>
    <div class="price__change-type">Люкс</div>
    <table class="table">
        <tbody>
        <tr>
            <td>май - сентябрь</td>
            <td>800 - 1600 Р.</td>
        </tr>
        <tr>
            <td>октябрь - ноябрь</td>
            <td>800 - 1600 Р.</td>
        </tr>
        <tr>
            <td>декабрь - январь</td>
            <td>800 - 1600 Р.</td>
        </tr>
        <tr>
            <td>февраль - апрель</td>
            <td>800 - 1600 Р.</td>
        </tr>
        </tbody>
    </table>

</div>


<div id="reserveForm" class="reserve" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="reserve__title">Бронирование номера</div>
            </div>
        </div>
    </div>
    <form action="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="reserve__form-left">


                        <div class="form-data__line">
                            <div class="form-data__arrival">
                                <label for="arrival2">Прибытие</label>
                                <input required placeholder="дд.мм.гггг" id="arrival2" type='text' class='datepicker-here form-control' />
                            </div>
                            <div class="form-data__dep">
                                <label for="departure2">Выезд</label>
                                <input placeholder="дд.мм.гггг" id="departure2 " type='text' class='datepicker-here form-control' />

                            </div>

                        </div>

                    <div class="form-data__apart form-data__line">
                            <div class="form-data__category">
                                <label for="category">Категория</label>
                                <select id="category" >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-data__number">
                                <label for="number">Номер</label>
                                <select id="number" >
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-data form-data__line" >
                            <div class="form-data__title">
                                <label for="adults">Взрослые</label>

                            </div>
                            <div class="form-data__composition">
                                <input type="range"  id="adults" name="group-adults" min="1" max="30" value="1" >
                                <button  class="form-data__button">
                                    <span class="form-data__mark"><img class="lazy" src="img/header/minus.svg" alt=""></span>
                                </button>
                                <span >0</span>
                                <button  class="form-data__button " >
                                    <span class="form-data__mark"><img class="lazy" src="img/header/plus.svg" alt=""></span>
                                </button>
                            </div>
                        </div>

                        <div class="form-data form-data__line" >
                            <div class="form-data__title">
                                <label for="adults">Дети</label>

                            </div>
                            <div class="form-data__composition">
                                <input type="range"  id="children" name="group-children" min="1" max="30" value="1" >
                                <button  class="form-data__button">
                                    <span class="form-data__mark"><img class="lazy" src="img/header/minus.svg" alt=""></span>
                                </button>
                                <span >0</span>
                                <button  class="form-data__button" >
                                    <span class="form-data__mark"><img class="lazy" src="img/header/plus.svg" alt=""></span>
                                </button>
                            </div>
                        </div>


                    <div class="form-data__image">
                        <img class="lazy" src="img/main/rom.png" alt="">
                    </div>

                    <div class="form-data__info">
                        <ul>
                            <li><span><img class="lazy" src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img class="lazy" src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img class="lazy" src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img class="lazy" src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>

                        </ul>
                    </div>


                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="reserve__form-right">
                    <div class="form-data__line">
                        <div class="form-data__name">
                            <label for="name">Имя</label>
                            <input required type="text" id="name" placeholder="Имя">
                        </div>

                        <div class="form-data__surname">
                            <label for="surname">Фамилия</label>
                            <input type="text" id="surname" placeholder="Фамилия">
                        </div>

                    </div>

                    <div class="form-data__line">

                        <div class="form-data__tel">
                            <label for="tel">Телефон</label>
                            <input required type="tel" id="tel" placeholder="+7 000 000 00 00">
                        </div>

                        <div class="form-data__road">
                            <label for="road">На чем приезжаете</label>
                            <select id="road" class="form-control">
                                <option>Автомобиль</option>
                                <option>Самолет</option>
                                <option>Поезд</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-check line-center">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Требуется трансфер
                        </label>
                    </div>


                    <fieldset>
                        <legend>Интересуют экскурсии</legend>
                        <div class="form-data__excurs">
                            <div class="line-center">
                                <input type="checkbox" id="redPolyna" name="excursion[]" value="Красная поляна">
                                <label for="redPolyna">Красная поляна</label>
                            </div>

                            <div class="line-center">
                                <input type="checkbox" id="blueSea" name="excursion[]" value="Синее море">
                                <label for="blueSea">Синее море</label>
                            </div>
                            <div class="line-center">
                                <input type="checkbox" id="mountain" name="excursion[]" value="Горы">
                                <label for="mountain">Горы</label>
                            </div>

                            <div class="line-center">
                                <input type="checkbox" id="waterfall" name="excursion[]" value="Водопады">
                                <label for="waterfall">Водопады</label>
                            </div>

                            <div class="line-center">
                                <input type="checkbox" id="nightSochi" name="excursion[]" value="Ночной Сочи">
                                <label for="nightSochi">Ночной Сочи</label>
                            </div>
                        </div>


                    </fieldset>

                    <div class="form-group">
                        <label for="dopInfo">Дополнительная информация</label>
                        <textarea class="form-control" id="dopInfo" rows="3"></textarea>
                    </div>

                    <div class="form__submit">
                        <button type="submit" disabled>Забронировать</button>

                        <label class="form__privacy">
                            <div class="form__privacy-checkbox">
                                <input id="iamagree" type="checkbox" name="personalDataAgree" checked="checked">
                                <div class="form__privacy-checkbox-icon"></div>
                            </div>
                            <div class="form__privacy-text">Нажимая кнопку "Забронировать", я принимаю условия&nbsp;<a href="" class="privacy">Пользовательского соглашения</a></div>
                        </label>
                    </div>

                </div>

            </div>

        </div>
    </div>
    </form>
</div>

<div id="share" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="share__top">
                        Поделиться
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-12">
                <div class="share-block">
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/vk.png" alt=""></a></div>
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/face.png" alt=""></a></div>
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/tw.png" alt=""></a></div>
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/ok.png" alt=""></a></div>
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/gg.png" alt=""></a></div>
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/mail.png" alt=""></a></div>
                    <div class="share-item"><a href="#"><img class="lazy" src="img/about/link.png" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="foods" class="foods" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="foods__header">Водка с содой  <span>129 Р.</span></div>
                <div class="foods__title">Напитки</div>
                <div class="foods__image">
                    <img class="lazy" src="img/bar/big.jpg" alt="">
                </div>
                <div class="foods__nav">
                    <button data-fancybox-prev="" class="fancybox-button fancybox-button--arrow_left" title="Previous"><span><img class="lazy" src="img/suite/left.png" alt=""></span></button>
                    <button data-fancybox-next="" class="fancybox-button fancybox-button--arrow_right" title="Next"><span><img class="lazy" src="img/suite/right.png" alt=""></span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="foods4" class="foods" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="foods__header">Водка с содой  <span>129 Р.</span></div>
                <div class="foods__title">Напитки</div>
                <div class="foods__image">
                    <img class="lazy" src="img/bar/big.jpg" alt="">
                </div>
                <div class="foods__nav">
                    <button data-fancybox-prev="" class="fancybox-button fancybox-button--arrow_left" title="Previous"><span><img class="lazy" src="img/suite/left.png" alt=""></span></button>
                    <button data-fancybox-next="" class="fancybox-button fancybox-button--arrow_right" title="Next"><span><img class="lazy" src="img/suite/right.png" alt=""></span></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="filterNum" class="miniFilter" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="miniFilter__wrapper">
                    <div class="miniFilter__header">
                        <img class="lazy" src="img/common/filt.png" alt=""><span>Фильтры</span>
                    </div>

                    <div class="form-check line-center">
                        <input class="form-check-input" type="checkbox" value="" id="freeNum">
                        <label class="form-check-label" for="freeNum">
                           Показать свободные
                        </label>
                    </div>

                    <div class="form-data__line">
                        <div class="form-data__arrival">
                            <label for="arrival2">Прибытие</label>
                            <input placeholder="дд.мм.гггг" id="arrival2" type='text' class='datepicker-here form-control' />
                        </div>
                        <div class="form-data__dep">
                            <label for="departure2">Выезд</label>
                            <input placeholder="дд.мм.гггг" id="departure2 " type='text' class='datepicker-here form-control' />

                        </div>

                    </div>

                    <div class="miniFilter__option">
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="oneFloor">
                            <label class="form-check-label" for="oneFloor">
                                1-ый этаж
                            </label>
                        </div>

                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="twoFloor">
                            <label class="form-check-label" for="twoFloor">
                                2-ой этаж
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="threFloor">
                            <label class="form-check-label" for="threFloor">
                                3-ий этаж
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="airstat">
                            <label class="form-check-label" for="airstat">
                                Кондиционер
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="fridge">
                            <label class="form-check-label" for="fridge">
                                Холодильник
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="twoSeats">
                            <label class="form-check-label" for="twoSeats">
                                2 спальных места
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="threeSeats">
                            <label class="form-check-label" for="threeSeats">
                                3 спальных места
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="fourSeats">
                            <label class="form-check-label" for="fourSeats">
                                4 спальных места
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="wc">
                            <label class="form-check-label" for="wc">
                                Душ и туалет в номере
                            </label>
                        </div>
                        <div class="form-check line-center">
                            <input class="form-check-input" type="checkbox" value="" id="tv">
                            <label class="form-check-label" for="tv">
                                Телевизор
                            </label>
                        </div>

                    </div>

                    <div class="miniFilter__reset">
                        <button type="reset">Сбросить</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="manageForm" class="room" style="display: none;">
    <form action="">
    <div class="container">
        <div class="room__header">
            Управление номерами
        </div>
        <div class="room-container">
            <div class="room-row">
                <div class="room-row__left">
                    <div class="form-data__room">
                        <label for="room">Выбрать номер</label>
                        <select id="room" class="form-control">
                            <option>101</option>
                            <option>102</option>
                            <option>103</option>
                            <option>201</option>
                            <option>202</option>
                        </select>
                    </div>
                    <div class="room-manager">
                        <div class="room__change"><img class="lazy" src="../img/common/change.png" alt=""><span><a href="#">изменить</a></span></div>
                        <div class="room__delete"><img class="lazy" src="../img/common/trash2.png" alt=""><span><a href="#" style="color: #D42061;">удалить</a></span></div>
                    </div>
                </div>
                <div class="room-row__right"> <div class="room__add">
                        <a href="#"> <img class="lazy" src="../img/filter/circle-plus.png" alt=""> <span>Добавить новый номер</span></a>
                    </div></div>

            </div>
            <div class="room-row">
                <div class="room-row__left">
                    <div class="form-data__road">
                        <label for="room">Категория</label>
                        <select id="room" class="form-control">
                            <option>Эконом</option>
                            <option>Люкс</option>

                        </select>
                    </div>
                </div>
                <div class="room-row__right">
                    <div class="room__seats">
                        <div class="form-data__floor">
                            <label for="floor">Этаж</label>
                            <select id="floor" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>

                        <div class="form-data__seats">
                            <label for="seats">Мест</label>
                            <select id="seats" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="form-data__child">
                            <label for="child">Детских мест</label>
                            <select id="child" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>



                    </div>
                </div>
            </div>
            <div class="room-row">
                <div class="room-row__left">
                    <div class="room-options">

                        <fieldset>
                            <legend></legend>
                            <div class="room-options">
                                <div class=" room-option line-center">
                                    <input type="checkbox" id="roomTv" name="services[]" value="Телевизор">
                                    <label for="roomTv"><span><img class="lazy" src="img/filter/house.svg" alt=""></span>Телевизор</label>
                                </div>

                                <div class="line-center room-option">
                                    <input type="checkbox" id="roomAir" name="services[]"  value="Кондиционер">
                                    <label for="roomAir"><span><img class="lazy" src="img/filter/air.svg" alt=""></span>Кондиционер</label>
                                </div>
                                <div class="line-center room-option">
                                    <input type="checkbox" id="roomWc" name="services[]"  value="Душ и туалет в номере">
                                    <label for="roomWc"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span>Душ и туалет в номере</label>
                                </div>

                                <div class="line-center room-option">
                                    <input type="checkbox" id="roomFridge" name="services[]"  value="Холодильник">
                                    <label for="roomFridge"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span>Холодильник</label>
                                </div>

                                <div class="line-center room-option">
                                    <input type="checkbox" id="roomFi" name="services[]"  value="Wi-fi">
                                    <label for="roomFi"><span><img class="lazy" src="img/filter/wifi.svg" alt=""></span>Wi-fi</label>
                                </div>
                            </div>


                        </fieldset>

                    </div>
                </div>
                <div class="room-row__right">


                    <div class="room__info">
                        <div class="room__info-title">Описание номера</div>
                        <div class="room__info-text">
                        <textarea name="roomInfo" id="" cols="30" rows="5">Тут небольшое описание номера. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        </textarea>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
<div class="col-12">
    <div class="room__pics-title">Фотографии</div>
    <div class="room__pics">
        <div class="room__pic">
            <input type="checkbox" id="picOne" name="pics[]"  value="1">
            <label for="picOne">
                
    
    
    <picture class="pictureclass">
        <source srcset="mg/slider-room/slide1.webp" type="image/webp">
        <source srcset="mg/slider-room/slide1.png" type="image/png">
        <img class="lazy" src="mg/slider-room/slide1.png" alt="alt">
    </picture>

    


               </label>
        </div>

        <div class="room__pic">
            <input type="checkbox" id="picTwo" name="pics[]"  value="2">
            <label for="picTwo">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/slider-room/slide2.webp" type="image/webp">
        <source srcset="img/slider-room/slide2.png" type="image/png">
        <img class="lazy" src="img/slider-room/slide2.png" alt="alt">
    </picture>

    


               </label>
        </div>

        <div class="room__pic">
            <input type="checkbox" id="picThree" name="pics[]"  value="3">
            <label for="picThree">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/slider-room/slide3.webp" type="image/webp">
        <source srcset="img/slider-room/slide3.png" type="image/png">
        <img class="lazy" src="img/slider-room/slide3.png" alt="alt">
    </picture>

    


               </label>
        </div>

        <div class="room__pic">
            <input type="checkbox" id="picFour" name="pics[]"  value="4">
            <label for="picFour">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/slider-room/slide1.webp" type="image/webp">
        <source srcset="img/slider-room/slide1.png" type="image/png">
        <img class="lazy" src="img/slider-room/slide1.png" alt="alt">
    </picture>

    


               </label>
        </div>

        <div class="room__pic-add">

                    <label class="label">
                        <span class="title"><img class="lazy" src="../img/filter/plus.png" alt=""></span>
                        <input type="file">
                    </label>

           </div>


    </div>
    <div class="room__func">
        <div class="room__pic-titul">
            <input type="checkbox" id="picThree" name="pics[]"  value="3">
            <label for="picThree">титульная</label>
        </div>
        <div class="room__pic-delete"><a href="#"><img class="lazy" src="../img/common/trash.png" alt=""></a></div>
    </div>
<div class="room__submit">
    <a href="#" >Сохранить</a>
</div>

</div>
        </div>
    </div>
    </form>
</div>
    <section class="slider-room">
        <div class="row">
            <div class="col-12">
                <div class="slider-room__block">
                    <div class="slider-room__item">
                        <img src="img/slider-room/slide1.jpg" alt="">
                    </div>

                    <div class="slider-room__item">
                        <img src="img/slider-room/slide2.jpg" alt="">
                    </div>

                    <div class="slider-room__item">
                        <img src="img/slider-room/slide3.jpg" alt="">
                    </div>
                    <div class="slider-room__item">
                        <img src="img/slider-room/slide1.jpg" alt="">
                    </div>

                    <div class="slider-room__item">
                        <img src="img/slider-room/slide2.jpg" alt="">
                    </div>

                    <div class="slider-room__item">
                        <img src="img/slider-room/slide3.jpg" alt="">
                    </div>
                </div>

            </div>
        </div>
</section>
    <section class="filter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter__title">Выбор номера</div>
            </div>
            
            <div class="col-12">
                <div class="filter-mobile lap-hide">
                    <a href="#filterNum" data-fancybox>Фильтры и сортировка</a>
                </div>
                <div class="filter-option__wrapper">
                    <div class="filter-option">
                        <label for="numberClass">Класс номера</label>
                        <select class="form-control" id="numberClass">
                            <option>Все</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="filter-option">
                        <label for="numberClass">Сортировка</label>
                        <select class="form-control" id="numberClass">
                            <option>По умолчанию</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div class="filter-change" >
                        <span data-fancybox href="#filterNum"><img class="lazy" src="img/filter/options.png" alt=""></span>
                    </div>


                </div>

            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <div class="filter-cards__wrapper">

                    <a class="filter-card__link" data-fancybox="numbers" href="#reserveNum1">
                        <div class="filter-card">
                            <div class="filter__image"><img class="lazy" src="img/filter/nomero.jpg" alt=""></div>
                            <div class="filter__name">
                                <div class="filter__class">Люкс #201</div>
                                <div class="filter__price"><span>900 P.</span></div>
                            </div>
                            <div class="filter__info">
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                            </div>
                            <div class="filter__text">
                                <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником.</p>
                            </div>

                            <div class="filter__reserve">
                                <div class="filter-right" >
                                    <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="filter-card__link" data-fancybox="numbers" href="#reserveNum2">
                        <div class="filter-card">
                            <div class="filter__image"><img class="lazy" src="img/filter/nomero2.jpg" alt=""></div>
                            <div class="filter__name">
                                <div class="filter__class">Люкс #202</div>
                                <div class="filter__price"><span>900 P.</span></div>
                            </div>
                            <div class="filter__info">
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                            </div>
                            <div class="filter__text">
                                <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником.</p>
                            </div>

                            <div class="filter__reserve">
                                <div class="filter-right">
                                    <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="filter-card__link" >
                        <div class="filter-card">
                            <div class="filter__image"><img class="lazy" src="img/filter/nomero3.jpg" alt=""></div>
                            <div class="filter__name">
                                <div class="filter__class">Люкс #333</div>
                                <div class="filter__price"><span>900 P.</span></div>
                            </div>
                            <div class="filter__info">
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                            </div>
                            <div class="filter__text">
                                <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником.</p>
                            </div>

                            <div class="filter__reserve">
                                <div class="filter-right">
                                    <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="filter-card__link" >
                        <div class="filter-card">
                            <div class="filter__image"><img class="lazy" src="img/filter/nomero.jpg" alt=""></div>
                            <div class="filter__name">
                                <div class="filter__class">Люкс #201</div>
                                <div class="filter__price"><span>900 P.</span></div>
                            </div>
                            <div class="filter__info">
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                            </div>
                            <div class="filter__text">
                                <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником.</p>
                            </div>

                            <div class="filter__reserve">
                                <div class="filter-right" >
                                    <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="filter-card__link" >
                        <div class="filter-card">
                            <div class="filter__image"><img class="lazy" src="img/filter/nomero.jpg" alt=""></div>
                            <div class="filter__name">
                                <div class="filter__class">Люкс #201</div>
                                <div class="filter__price"><span>900 P.</span></div>
                            </div>
                            <div class="filter__info">
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                            </div>
                            <div class="filter__text">
                                <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником.</p>
                            </div>

                            <div class="filter__reserve">
                                <div class="filter-right" >
                                    <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </a>
                    <a class="filter-card__link" >
                        <div class="filter-card">
                            <div class="filter__image"><img class="lazy" src="img/filter/nomero.jpg" alt=""></div>
                            <div class="filter__name">
                                <div class="filter__class">Люкс #201</div>
                                <div class="filter__price"><span>900 P.</span></div>
                            </div>
                            <div class="filter__info">
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/house.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/bed.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/tv.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/fridge.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/shower.svg" alt=""></span></div>
                                <div class="filter__info--icon"><span><img class="lazy" src="img/filter/air.svg" alt=""></span></div>
                            </div>
                            <div class="filter__text">
                                <p>Номера на втором и третьем этажах нашего дома. Номера оборудованы всем необходимым: туалетом и дуем, телевизором, холодильником.</p>
                            </div>

                            <div class="filter__reserve">
                                <div class="filter-right" >
                                    <span>Забронировать</span> <span><img class="lazy" src="img/filter/cup.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                    </a>
                    <div id="filterMore" class="filter-card__more"><a href="#">Еще</a></div>
                </div>
            </div>


        </div>
    </div>
</section>
    <!--<div class="suite" id="reserveNum1" style="display: none;">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="suite__title">Люкс #201 <span>900 Р.</span></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-12 col-md-7">-->
<!--                <div class="suite__slider-wrapper">-->
<!--                    <div class="suite__slider-for">-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                    </div>-->
<!--                    <div class="suite__slider-nav">-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="suite__text">-->
<!--                    <p>Тут небольшое описание номера. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--            <div class="col-12 col-md-5">-->
<!--                <div class="suite__info">-->
<!--                    <div class="suite__header">Доступность</div>-->
<!--                    <div align=center>-->
<!--                        <div >-->
<!--                            <table id="calendar"  border="0" cellspacing="0" cellpadding="1">-->
<!--                                <thead>-->
<!--                                <tr><td><b>‹</b><td colspan="5"><td><b>›</b>-->
<!--                                <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс-->
<!--                                </thead>-->
<!--                                <tbody></tbody>-->
<!--                            </table>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="suite__icons">-->
<!--                        <ul>-->
<!--                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>-->
<!--                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>-->
<!--                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>-->
<!--                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>-->
<!--                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>-->
<!--                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>-->
<!---->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="suite__link"><a href="#">Посмотреть планировку номера</a></div>-->
<!--                    <div class="suite__reserve">-->
<!--                        <a href="#reserveForm2" data-fancybox>Забронировать</a>-->
<!--                    </div>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="suite" id="reserveNum1" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="suite__title">Люкс #201 <span>900 Р.</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="suite__slider-wrapper">
                    <div class="suite__slider-for">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                    <div class="suite__slider-nav">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                </div>
                <div class="suite__text">
                    <p>Тут небольшое описание номера. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>

            </div>
            <div class="col-12 col-md-5">
                <div class="suite__info">
                    <div class="suite__header">Доступность</div>
                    <div align=center>
                        <div >
                            <table id="calendar"  border="0" cellspacing="0" cellpadding="1">
                                <thead>
                                <tr><td><b>‹</b><td colspan="5"><td><b>›</b>
                                <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Вс
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="suite__icons">
                        <ul>
                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>

                        </ul>
                    </div>
                    <div class="suite__link"><a href="#">Посмотреть планировку номера</a></div>
                    <div class="suite__reserve">
                        <a href="#reserveForm2" data-fancybox>Забронировать</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="suite" id="reserveNum2" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="suite__title">Люкс #201 <span>900 Р.</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="suite__slider-wrapper">
                    <div class="suite__slider-for"  data-slick="{
                    "slidesToShow": 1,
                    "slidesToScroll": 1,
                    "arrows": false,
                    "fade": true,
                    "asNavFor": '.suite__slider-nav'
                    }">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                    <div class="suite__slider-nav" data-slick="{
         "slidesToShow": 3,
        "slidesToScroll": 1,
        "asNavFor": '.suite__slider-for',
        "dots": true,
        "centerMode": true,
        "focusOnSelect": true,
        "arrows": true

                }">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                </div>
                <div class="suite__text">
                    <p>Тут небольшое описание номера. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>

            </div>
            <div class="col-12 col-md-5">
                <div class="suite__info">
                    <div class="suite__header">Доступность</div>
                    <div align=center>
                        <div >
                            <table id="calendar" border="0" cellspacing="0" cellpadding="1">
                                <thead>
                                <tr><td><b>‹</b></td><td colspan="5" data-month="7" data-year="2019">Август 2019</td><td><b>›</b>
                                    </td></tr><tr><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td>Сб</td><td>Вс
                                    </td></tr></thead>
                                <tbody><tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td></tr><tr><td>5</td><td>6</td><td class="reserve">7</td><td class="reserve">8</td><td class="reserve">9</td><td class="reserve">10</td><td class="reserve">11</td></tr><tr><td class="reserve">12</td><td class="reserve">13</td><td class="reserve">14</td><td class="reserve">15</td><td>16</td><td>17</td><td>18</td></tr><tr><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr><tr><td>26</td><td class="today">27</td><td>28</td><td>29</td><td>30</td><td>31</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="suite__icons">
                        <ul>
                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>

                        </ul>
                    </div>
                    <div class="suite__link"><a href="#">Посмотреть планировку номера</a></div>
                    <div class="suite__reserve">
                        <a href="#reserveForm2" data-fancybox>Забронировать</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="suite" id="reserveNum3" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="suite__title">Люкс #201 <span>900 Р.</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="suite__slider-wrapper">
                    <div class="suite__slider-for">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                    <div class="suite__slider-nav">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                </div>
                <div class="suite__text">
                    <p>Тут небольшое описание номера. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>

            </div>
            <div class="col-12 col-md-5">
                <div class="suite__info">
                    <div class="suite__header">Доступность</div>
                    <div align=center>
                        <div >
                            <table id="calendar" border="0" cellspacing="0" cellpadding="1">
                                <thead>
                                <tr><td><b>‹</b></td><td colspan="5" data-month="7" data-year="2019">Август 2019</td><td><b>›</b>
                                    </td></tr><tr><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td>Сб</td><td>Вс
                                    </td></tr></thead>
                                <tbody><tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td></tr><tr><td>5</td><td>6</td><td class="reserve">7</td><td class="reserve">8</td><td class="reserve">9</td><td class="reserve">10</td><td class="reserve">11</td></tr><tr><td class="reserve">12</td><td class="reserve">13</td><td class="reserve">14</td><td class="reserve">15</td><td>16</td><td>17</td><td>18</td></tr><tr><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr><tr><td>26</td><td class="today">27</td><td>28</td><td>29</td><td>30</td><td>31</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="suite__icons">
                        <ul>
                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>

                        </ul>
                    </div>
                    <div class="suite__link"><a href="#">Посмотреть планировку номера</a></div>
                    <div class="suite__reserve">
                        <a href="#reserveForm2" data-fancybox>Забронировать</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="suite" id="reserveNum4" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="suite__title">Люкс #201 <span>900 Р.</span></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="suite__slider-wrapper">
                    <div class="suite__slider-for">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                    <div class="suite__slider-nav">
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                        <div class="suite__item"><img src="img/suite/room.png" alt=""></div>
                    </div>
                </div>
                <div class="suite__text">
                    <p>Тут небольшое описание номера. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>

            </div>
            <div class="col-12 col-md-5">
                <div class="suite__info">
                    <div class="suite__header">Доступность</div>
                    <div align=center>
                        <div >
                            <table id="calendar" border="0" cellspacing="0" cellpadding="1">
                                <thead>
                                <tr><td><b>‹</b></td><td colspan="5" data-month="7" data-year="2019">Август 2019</td><td><b>›</b>
                                    </td></tr><tr><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td>Сб</td><td>Вс
                                    </td></tr></thead>
                                <tbody><tr><td></td><td></td><td></td><td>1</td><td>2</td><td>3</td><td>4</td></tr><tr><td>5</td><td>6</td><td class="reserve">7</td><td class="reserve">8</td><td class="reserve">9</td><td class="reserve">10</td><td class="reserve">11</td></tr><tr><td class="reserve">12</td><td class="reserve">13</td><td class="reserve">14</td><td class="reserve">15</td><td>16</td><td>17</td><td>18</td></tr><tr><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr><tr><td>26</td><td class="today">27</td><td>28</td><td>29</td><td>30</td><td>31</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="suite__icons">
                        <ul>
                            <li><span><img src="img/price/house.svg" alt=""></span><span> 1 этаж</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>
                            <li><span><img src="img/price/air.svg" alt=""></span><span> Кондиционер</span></li>
                            <li><span><img src="img/price/bed.svg" alt=""></span><span> 3-4 спальных места</span></li>
                            <li><span><img src="img/price/tv.svg" alt=""></span><span> Телевизор</span></li>

                        </ul>
                    </div>
                    <div class="suite__link"><a href="#">Посмотреть планировку номера</a></div>
                    <div class="suite__reserve">
                        <a href="#reserveForm2" data-fancybox>Забронировать</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
    <section class="bar" id="priceBar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bar__header">Цены в баре</div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="bar__img">
                    
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/bar.webp" type="image/webp">
        <source srcset="img/bar/bar.png" type="image/png">
        <img class="lazy" src="img/bar/bar.png" alt="alt">
    </picture>

    



                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="bar__text">
                    <p>
                        Во время отдыха на Черном море после насыщенного делами дня иногда так хочется расслабиться одному или в приятной компании, ведь пляжи, наши увлекательные экскурсии по местным достопримечательностям и огромный спектр доступных развлечений иногда могут отнять все силы. Поэтому в гостевом доме «Джубга» предусмотрен небольшой, но очень уютный вечерний бар. Здесь имеется богатый ассортимент спиртных и безалкогольных напитков высочайшего качества. Кофе, чай, вина и пиво различных сортов, разнообразные коктейли, а также крепкий алкоголь – в этом месте вы сможете найти все, чтобы снять накопившееся напряжение и усталость. Тщательно проработанный, но ненавязчивый интерьер, а также идеально подобранное музыкальное сопровождение позволят вам сосредоточиться на беседе или собственных мыслях.
                        <span><a href="#">Читать далее</a></span> </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bar-slider__wrapper">
        <div class="bar-slider slick-carousel">
            <div class="bar-item">


                <div class="bar-item__info">
                    <span>Рыба</span>
                    <span>60 Р.</span>
                </div>
            </div>
            <div class="bar-item">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/mojito.webp" type="image/webp">
        <source srcset="img/bar/mojito.png" type="image/png">
        <img class="lazy" src="img/bar/mojito.png" alt="alt">
    </picture>

    



                <div class="bar-item__info">
                    <span>Мохито</span>
                    <span>60 Р.</span>
                </div></div>
            <div class="bar-item">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/burger.webp" type="image/webp">
        <source srcset="img/bar/burger.png" type="image/png">
        <img class="lazy" src="img/bar/burger.png" alt="alt">
    </picture>

    



                <div class="bar-item__info">
                    <span>Бургер</span>
                    <span>60 Р.</span>
                </div></div>
            <div class="bar-item">
                
    
    
    <picture class="pictureclass">
        <source srcset="iimg/bar/bak.webp" type="image/webp">
        <source srcset="iimg/bar/bak.png" type="image/png">
        <img class="lazy" src="iimg/bar/bak.png" alt="alt">
    </picture>

    



                <div class="bar-item__info">
                    <span>Баклажаны</span>
                    <span>60 Р.</span>
                </div></div>
            <div class="bar-item">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/zar.webp" type="image/webp">
        <source srcset="img/bar/zar.png" type="image/png">
        <img class="lazy" src="img/bar/zar.png" alt="alt">
    </picture>

    



                <div class="bar-item__info">
                    <span>Жаркое</span>
                    <span>60 Р.</span>
                </div></div>
            <div class="bar-item">
                
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/salad.webp" type="image/webp">
        <source srcset="img/bar/salad.png" type="image/png">
        <img class="lazy" src="img/bar/salad.png" alt="alt">
    </picture>

    



                <div class="bar-item__info">
                    <span>Салат</span>
                    <span>60 Р.</span>
                </div></div>
        </div>
        

    </div>

    <div class="bar-more">
        <a href="#food" data-fancybox>Смотерть все меню</a>
    </div>

</section>
    <div id="food" class="foodMenu" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="foodMenu__header">Ассортимент нашего бара</div>
            </div>
            <div class="col-12">
                <div class="foodMenu__title">Блюда на гриле</div>
                <div class="foodMenu__plate">
                    <div class="foodMenu-item">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/fish.webp" type="image/webp">
        <source srcset="img/bar/fish.png" type="image/png">
        <img class="lazy" src="img/bar/fish.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info" data-fancybox="foodgallery" href="#foods">
                            <span>Ребрышки</span>
                            <span>460 Р.</span>
                        </div></div>
                    <div class="foodMenu-item">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/burger.webp" type="image/webp">
        <source srcset="img/bar/burger.png" type="image/png">
        <img class="lazy" src="img/bar/burger.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info" data-fancybox="foodgallery" href="#foods1">
                            <span>Бургер</span>
                            <span>250 Р.</span>
                        </div></div>
                    <div class="foodMenu-item">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/zar.webp" type="image/webp">
        <source srcset="img/bar/zar.png" type="image/png">
        <img class="lazy" src="img/bar/zar.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info" data-fancybox="foodgallery" href="#foods2">
                            <span>Жаркое</span>
                            <span>160 Р.</span>
                        </div></div>
                    <div class="foodMenu-item">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/bak.webp" type="image/webp">
        <source srcset="img/bar/bak.png" type="image/png">
        <img class="lazy" src="img/bar/bak.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info" data-fancybox="foodgallery" href="#foods3">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                </div>
            </div>
            <div class="col-12">
                <div class="foodMenu__title">Напитки</div>
                <div class="foodMenu__plate">
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods4"><img src="../img/bar/mojito.png" alt="">
                        <div class="foodMenu-item__info">
                            <span>Ребрышки</span>
                            <span>460 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods5">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/vodka.webp" type="image/webp">
        <source srcset="img/bar/vodka.png" type="image/png">
        <img class="lazy" src="img/bar/vodka.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Бургер</span>
                            <span>250 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods6">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/orang.webp" type="image/webp">
        <source srcset="img/bar/orang.png" type="image/png">
        <img class="lazy" src="img/bar/orang.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Жаркое</span>
                            <span>160 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods7">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/bok.webp" type="image/webp">
        <source srcset="img/bar/bok.png" type="image/png">
        <img class="lazy" src="img/bar/bok.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods8">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/beer.webp" type="image/webp">
        <source srcset="img/bar/beer.png" type="image/png">
        <img class="lazy" src="img/bar/beer.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods9">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/rom.webp" type="image/webp">
        <source srcset="img/bar/rom.png" type="image/png">
        <img class="lazy" src="img/bar/rom.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods10">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/martini.webp" type="image/webp">
        <source srcset="img/bar/martini.png" type="image/png">
        <img class="lazy" src="img/bar/martini.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="drinkgallery" href="#foods11">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/shamp.webp" type="image/webp">
        <source srcset="img/bar/shamp.png" type="image/png">
        <img class="lazy" src="img/bar/shamp.png" alt="alt">
    </picture>

    


                        <div class="foodMenu-item__info">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                    <div class="foodMenu-item" data-fancybox="foodgallery" href="#foods12">
                        
    
    
    <picture class="pictureclass">
        <source srcset="img/bar/oreo.webp" type="image/webp">
        <source srcset="img/bar/oreo.png" type="image/png">
        <img class="lazy" src="img/bar/oreo.png" alt="alt">
    </picture>

    



                        <div class="foodMenu-item__info">
                            <span>Баклажаны</span>
                            <span>60 Р.</span>
                        </div></div>
                </div>
            </div>


        </div>
    </div>
</div>
    <section class="tour">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="tour__header">Организация экскурсий</div>
        </div>
            <div class="col-12 col-md-6">
                <div class="tour__text">
                <p>Черноморское побережье – это край с древней и богатой историей, а также роскошной и удивительно красивой природой. Поэтому, планируя отдых в Джубге, обязательно посетите организуемые нашим отелем интересные экскурсии по местным достопримечательностям.</p>
            </div></div>
            <div class="col-12 col-md-6">
            <div class="tour__text">    <p>Вы можете заказать у нас маршрут в любом направлении на полдня, целый день и даже сутки. Не знаете, что выбрать? Воспользуйтесь популярными среди клиентов поездками в Абхазию, Абрау-Дюрсо с его знаменитыми виноградниками, города-курорты Сочи и Геленджик. <span><a
                            href="#">Читать далее</a></span></p></div>
            </div>

        </div>
        



    </div>

    <div class="tour-slider__wrapper">
        <div class="tour-slider">

            <div class="tour__item">
                <img src="img/tour/i2.jpg" alt="">
                <div class="tour__name">Красная  <span class="tour__cost">700 Р.</span></div>

                <div class="tour__info">
                    <p>Короткое описание. Тезисное. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                </div>
            </div>

            <div class="tour__item">
                <img src="img/tour/i1.jpg" alt="">
                <div class="tour__name">Красная поляна  <span class="tour__cost">2000 Р.</span></div>

                <div class="tour__info">
                    <p>Короткое описание. Тезисное. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                </div>
            </div>

            <div class="tour__item">
                <img src="img/tour/i2.jpg" alt="">
                <div class="tour__name">Горные водопады  <span class="tour__cost">2000 Р.</span></div>

                <div class="tour__info">
                    <p>Короткое описание. Тезисное. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                </div>
            </div>

            <div class="tour__item">
                <img src="img/tour/i2.jpg" alt="">
                <div class="tour__name">Горные водопады  <span class="tour__cost">2000 Р.</span></div>

                <div class="tour__info">
                    <p>Короткое описание. Тезисное. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                </div>
            </div>

            <div class="tour__item">
                <img src="img/tour/i2.jpg" alt="">
                <div class="tour__name">Горные водопады  <span class="tour__cost">2000 Р.</span></div>

                <div class="tour__info">
                    <p>Короткое описание. Тезисное. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="tour__link">
        <a href="#reserveForm" data-fancybox>Забронировать с экскурсией</a>
    </div>
</section>
    <section class="road" id="roadTrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="road__header">
                    Как добраться
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="road__map" >
                    <p class="doroad" style="background: #0F83EE;
    box-shadow: 0px 4px 0px #064784;
    border-radius: 6px;
    border: none;
    font-family: Circe, sans-serif;
    font-size: 20px;
    line-height: 29px;
    text-align: center;
    color: #fff;
    padding: 10px 44px;
    width: 300px;
cursor: pointer;">Построить маршрут</p>

                </div>
            </div>
            <div class="col-12 col-md-5">

                <div class="road__tabs">
                    <ul class="nav nav-tabs" id="myTabRoad" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="auto-tab" data-toggle="tab" href="#autoTab" role="tab" aria-controls="auto" aria-selected="true"><span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 17H6V18.5C6 18.8978 5.84196 19.2794 5.56066 19.5607C5.27936 19.842 4.89782 20 4.5 20H3.5C3.10218 20 2.72064 19.842 2.43934 19.5607C2.15804 19.2794 2 18.8978 2 18.5V16.83C1.41493 16.623 0.908421 16.2397 0.55024 15.7329C0.192059 15.226 -0.000178928 14.6206 1.24966e-07 14V11C1.24966e-07 10.38 0.188 9.804 0.51 9.326L1.596 2.526C1.70878 1.82119 2.06916 1.17967 2.61242 0.716693C3.15568 0.253712 3.84622 -0.000399861 4.56 4.72298e-07H15.44C16.1532 0.000589451 16.8429 0.255273 17.3854 0.718371C17.9278 1.18147 18.2875 1.82268 18.4 2.527L19.483 9.317C19.809 9.797 19.999 10.377 19.999 11V14C19.9992 14.6206 19.8069 15.226 19.4488 15.7329C19.0906 16.2397 18.5841 16.623 17.999 16.83V18.5C17.999 18.8978 17.841 19.2794 17.5597 19.5607C17.2784 19.842 16.8968 20 16.499 20H15.499C15.1012 20 14.7196 19.842 14.4383 19.5607C14.157 19.2794 13.999 18.8978 13.999 18.5V17H14ZM3 15H17C17.2652 15 17.5196 14.8946 17.7071 14.7071C17.8946 14.5196 18 14.2652 18 14V11C18 10.7348 17.8946 10.4804 17.7071 10.2929C17.5196 10.1054 17.2652 10 17 10H3C2.73478 10 2.48043 10.1054 2.29289 10.2929C2.10536 10.4804 2 10.7348 2 11V14C2 14.2652 2.10536 14.5196 2.29289 14.7071C2.48043 14.8946 2.73478 15 3 15ZM17.25 8.01L16.426 2.842C16.3885 2.6074 16.2686 2.39383 16.088 2.23955C15.9073 2.08526 15.6776 2.00034 15.44 2H4.559C4.32107 1.99987 4.09089 2.08457 3.90981 2.2389C3.72872 2.39322 3.60859 2.60706 3.571 2.842L2.746 8.011C2.83048 8.00379 2.91522 8.00012 3 8H17C17.084 8 17.168 8.003 17.25 8.01ZM15.5 12C15.3674 12 15.2402 12.0527 15.1464 12.1464C15.0527 12.2402 15 12.3674 15 12.5C15 12.6326 15.0527 12.7598 15.1464 12.8536C15.2402 12.9473 15.3674 13 15.5 13C15.6326 13 15.7598 12.9473 15.8536 12.8536C15.9473 12.7598 16 12.6326 16 12.5C16 12.3674 15.9473 12.2402 15.8536 12.1464C15.7598 12.0527 15.6326 12 15.5 12ZM15.5 14C15.303 14 15.108 13.9612 14.926 13.8858C14.744 13.8104 14.5786 13.6999 14.4393 13.5607C14.3001 13.4214 14.1896 13.256 14.1142 13.074C14.0388 12.892 14 12.697 14 12.5C14 12.303 14.0388 12.108 14.1142 11.926C14.1896 11.744 14.3001 11.5786 14.4393 11.4393C14.5786 11.3001 14.744 11.1896 14.926 11.1142C15.108 11.0388 15.303 11 15.5 11C15.8978 11 16.2794 11.158 16.5607 11.4393C16.842 11.7206 17 12.1022 17 12.5C17 12.8978 16.842 13.2794 16.5607 13.5607C16.2794 13.842 15.8978 14 15.5 14ZM4.5 12C4.36739 12 4.24021 12.0527 4.14645 12.1464C4.05268 12.2402 4 12.3674 4 12.5C4 12.6326 4.05268 12.7598 4.14645 12.8536C4.24021 12.9473 4.36739 13 4.5 13C4.63261 13 4.75979 12.9473 4.85355 12.8536C4.94732 12.7598 5 12.6326 5 12.5C5 12.3674 4.94732 12.2402 4.85355 12.1464C4.75979 12.0527 4.63261 12 4.5 12ZM4.5 14C4.30302 14 4.10796 13.9612 3.92598 13.8858C3.74399 13.8104 3.57863 13.6999 3.43934 13.5607C3.30005 13.4214 3.18956 13.256 3.11418 13.074C3.0388 12.892 3 12.697 3 12.5C3 12.303 3.0388 12.108 3.11418 11.926C3.18956 11.744 3.30005 11.5786 3.43934 11.4393C3.57863 11.3001 3.74399 11.1896 3.92598 11.1142C4.10796 11.0388 4.30302 11 4.5 11C4.89782 11 5.27936 11.158 5.56066 11.4393C5.84196 11.7206 6 12.1022 6 12.5C6 12.8978 5.84196 13.2794 5.56066 13.5607C5.27936 13.842 4.89782 14 4.5 14ZM5.204 3.094C5.46922 3.094 5.72357 3.19936 5.91111 3.38689C6.09864 3.57443 6.204 3.82878 6.204 4.094V6.094C6.204 6.35922 6.09864 6.61357 5.91111 6.80111C5.72357 6.98864 5.46922 7.094 5.204 7.094C4.93878 7.094 4.68443 6.98864 4.49689 6.80111C4.30936 6.61357 4.204 6.35922 4.204 6.094V4.094C4.204 3.82878 4.30936 3.57443 4.49689 3.38689C4.68443 3.19936 4.93878 3.094 5.204 3.094Z"  fill-opacity="0.5"/>
</svg></span> автомобиль</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="train-tab" data-toggle="tab" href="#trainTab" role="tab" aria-controls="train" aria-selected="false"><span><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 15H12C12.5304 15 13.0391 14.7893 13.4142 14.4142C13.7893 14.0391 14 13.5304 14 13V11H2V13C2 13.5304 2.21071 14.0391 2.58579 14.4142C2.96086 14.7893 3.46957 15 4 15ZM12.813 16.917C13.0076 17.2191 13.1172 17.5681 13.1303 17.9272C13.1433 18.2864 13.0594 18.6424 12.8873 18.9579C12.7152 19.2733 12.4613 19.5366 12.1522 19.72C11.8431 19.9034 11.4904 20.0001 11.131 20H4.87C4.51063 20.0001 4.15787 19.9034 3.84881 19.72C3.53975 19.5366 3.28581 19.2733 3.1137 18.9579C2.94158 18.6424 2.85765 18.2864 2.87073 17.9272C2.8838 17.5681 2.9934 17.2191 3.188 16.917C2.28731 16.7301 1.47854 16.2385 0.897877 15.5251C0.317212 14.8116 0.000121582 13.9199 0 13L0 4C0 2.93913 0.421427 1.92172 1.17157 1.17157C1.92172 0.421427 2.93913 0 4 0L12 0C13.0609 0 14.0783 0.421427 14.8284 1.17157C15.5786 1.92172 16 2.93913 16 4V13C15.9999 13.9197 15.683 14.8114 15.1025 15.5248C14.522 16.2382 13.7135 16.7299 12.813 16.917ZM14 9V4C14 3.46957 13.7893 2.96086 13.4142 2.58579C13.0391 2.21071 12.5304 2 12 2H4C3.46957 2 2.96086 2.21071 2.58579 2.58579C2.21071 2.96086 2 3.46957 2 4V9H14ZM12 3C12.2652 3 12.5196 3.10536 12.7071 3.29289C12.8946 3.48043 13 3.73478 13 4V7C13 7.26522 12.8946 7.51957 12.7071 7.70711C12.5196 7.89464 12.2652 8 12 8C11.7348 8 11.4804 7.89464 11.2929 7.70711C11.1054 7.51957 11 7.26522 11 7V4C11 3.73478 11.1054 3.48043 11.2929 3.29289C11.4804 3.10536 11.7348 3 12 3ZM4 14C3.73478 14 3.48043 13.8946 3.29289 13.7071C3.10536 13.5196 3 13.2652 3 13C3 12.7348 3.10536 12.4804 3.29289 12.2929C3.48043 12.1054 3.73478 12 4 12C4.26522 12 4.51957 12.1054 4.70711 12.2929C4.89464 12.4804 5 12.7348 5 13C5 13.2652 4.89464 13.5196 4.70711 13.7071C4.51957 13.8946 4.26522 14 4 14ZM12 14C11.7348 14 11.4804 13.8946 11.2929 13.7071C11.1054 13.5196 11 13.2652 11 13C11 12.7348 11.1054 12.4804 11.2929 12.2929C11.4804 12.1054 11.7348 12 12 12C12.2652 12 12.5196 12.1054 12.7071 12.2929C12.8946 12.4804 13 12.7348 13 13C13 13.2652 12.8946 13.5196 12.7071 13.7071C12.5196 13.8946 12.2652 14 12 14ZM4.869 18H11.131L10.465 17H5.535L4.869 18Z" fill-opacity="0.5"/>
</svg>
</span> поезд</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="air-tab" data-toggle="tab" href="#airTab" role="tab" aria-controls="air" aria-selected="false"><span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.225 8.59419L5.71601 14.1042L3.84601 13.3272L3.67901 13.4962L6.05901 15.0832L7.64701 17.4632L7.81501 17.2952L7.03901 15.4252L12.548 9.91719L16.876 16.1692L17.086 15.9612L14.199 8.2652L18.599 3.86719C18.6859 3.78033 18.7548 3.6772 18.8018 3.5637C18.8488 3.4502 18.873 3.32855 18.873 3.20569C18.873 3.08284 18.8488 2.96119 18.8018 2.84769C18.7548 2.73419 18.6859 2.63106 18.599 2.54419C18.5121 2.45733 18.409 2.38842 18.2955 2.3414C18.182 2.29439 18.0604 2.27019 17.9375 2.27019C17.8147 2.27019 17.693 2.29439 17.5795 2.3414C17.466 2.38842 17.3629 2.45733 17.276 2.54419L12.876 6.94319L5.18201 4.05719L4.97201 4.26619L11.225 8.59419ZM16.615 19.0772L12.285 12.8242L9.24501 15.8642L10.022 17.7342L7.35601 20.3992L4.71101 16.4322L0.743011 13.7862L3.40901 11.1202L5.27801 11.8962L8.31801 8.85619L2.06501 4.52819L4.71101 1.88319L12.406 4.7682L15.953 1.22119C16.2124 0.95552 16.522 0.743972 16.8637 0.598809C17.2055 0.453646 17.5727 0.377757 17.944 0.375538C18.3153 0.37332 18.6833 0.444817 19.0268 0.585886C19.3702 0.726955 19.6823 0.93479 19.9449 1.19735C20.2074 1.4599 20.4153 1.77196 20.5563 2.11543C20.6974 2.4589 20.7689 2.82695 20.7667 3.19825C20.7645 3.56956 20.6886 3.93673 20.5434 4.27849C20.3982 4.62024 20.1867 4.92979 19.921 5.1892L16.374 8.73619L19.26 16.4322L16.614 19.0772H16.615Z" fill-opacity="0.5"/>
</svg>
</span> самолет</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabRoadContent">
                        <div class="tab-pane fade show active" id="autoTab" role="tabpanel" aria-labelledby="auto-tab">
                            <div class="road__text">
                                <p>Тут описание как добраться выбранным способом. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
                            </div>
                            <div class="road__slider-auto">
                                <img src="img/road/road.jpg" alt="">
                                <img src="img/road/road.jpg" alt="">
                                <img src="img/road/road.jpg" alt="">
                            </div>
                            </div>
                        <div class="tab-pane fade" id="trainTab" role="tabpanel" aria-labelledby="train-tab">
                            <div class="road__text">
                                <p>поезд  поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд поезд</p>
                            </div>
                            <div class="road__slider-train">
                                <img src="img/road/road.jpg" alt="">
                                <img src="img/road/road.jpg" alt="">
                                <img src="img/road/road.jpg" alt="">
                            </div>
                            </div>
                        <div class="tab-pane fade" id="airTab" role="tabpanel" aria-labelledby="air-tab">
                            <div class="road__text">
                                <p>Тут описание как добраться выбранным способом. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
                            </div>
                            <div class="road__slider-air">
                                <img src="img/road/road.jpg" alt="">
                                <img src="img/road/road.jpg" alt="">
                                <img src="img/road/road.jpg" alt="">
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="road__link">
                    <a href="#reserveForm" data-fancybox>Забронировать с экскурсией</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="insta">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="insta__header">Наш Instagramm</div>
            </div>
        </div>
        <!--        <div class="row no-gutters">-->
        <!--            <div class="insta-wrapper">-->
        <!--                <div class="insta-slider">-->
        <!--                    <div class="insta-item"><img src="img/insta/i1.png" alt=""></div>-->
        <!--                    <div class="insta-item"><img src="img/insta/i2.png" alt=""></div>-->
        <!--                    <div class="insta-item"><img src="img/insta/i3.png" alt=""></div>-->
        <!--                    <div class="insta-item"><img src="img/insta/i4.png" alt=""></div>-->
        <!--                    <div class="insta-item"><img src="img/insta/i1.png" alt=""></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </div>
    <div class="row no-gutters">
        <div class="insta-wrapper">
            <div class="insta-slider">
            </div>
        </div>
    </div>
</section>
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__social">
                    <span><a href=""><img src="img/footer/facebook.png" alt=""></a></span>
                    <span><a href=""><img src="img/footer/VK.png" alt=""></a></span>
                    <span><a href=""><img src="img/footer/Instagram.png" alt=""></a></span>
                    <span><a href=""><img src="img/footer/Telegram.png" alt=""></a></span>
                </div>
                <div class="footer__copyright"><p>Copyright 2019 © Отель "Саргис". Все права защищены.</p></div>
                <div class="footer__descr"><p>Все материалы, размещенные на сайте, в том числе фотографии, являются объектами авторского права и защищены законом. Использование, воспроизведение и распространение в любом объеме информации, размещенной на сайте, возможно только с письменного согласия.</p></div>
                <div class="footer__author"><p>made with <span>♥</span> by <a href="">Roman A. Proskurnin</a> </p></div>
            </div>
        </div>
    </div>
</footer>

   


</div><!-- wrapper -->

<div class="hidden">

    





</div><!-- d-none -->

<!--etc style-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css" rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" >
<noscript><link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" ></noscript>
<link href="css/style.min.css" rel="stylesheet">

<!--Библиотеки-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha256-etrwgFLGpqD4oNAFW08ZH9Bzif5ByXK2lXNHKy7LQGo=" crossorigin="anonymous"  rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js" defer ></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" integrity="sha256-q0wZgzQ6Ru67x+pIe9IAztrnlHNHyZui3BMwqUYDnpI=" crossorigin="anonymous" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js defer " integrity="sha256-0prQxFtdWQNa3vW5JDMbvbBp6ehKzf9UIWqFGZIWPPE=" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.css" integrity="sha256-x0YxbDRtAIaUla1aUzriI3mpIDGtu8IhYeY3QV+BkNU=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.js" integrity="sha256-YLvGa/6UrzsYa6pgPIwxuiXtsS854c/pImjL3kfK+sY=" crossorigin="anonymous" defer ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/locales/ru.js" integrity="sha256-eyaxfjgqJuQ/JYg5TTCDjag6unRgPguvL20yhGVUB6g=" crossorigin="anonymous" defer ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.js" integrity="sha256-K0KkaRh1fs/UYfKcnzBK9G/X7HgzuaeVI1hJPS8Sxs4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js" integrity="sha256-vb+6VObiUIaoRuSusdLRWtXs/ewuz62LgVXg2f1ZXGo=" crossorigin="anonymous" defer ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous" defer ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/localization/messages_ru.min.js" integrity="sha256-/zc0l5Lz9N5yjcmhOS9Tgg3STtUQTpZqTBdxqUGGheY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha256-2Pjr1OlpZMY6qesJM68t2v39t+lMLvxwpa8QlRjJroA=" crossorigin="anonymous" defer ></script>
<!--Скрипт-->
<link href="css/fontend.css" rel="stylesheet">
<script src="js/script.js"></script>
<script>
    /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
    /* This file is meant as a standalone workflow for
    - testing support for link[rel=preload]
    - enabling async CSS loading in browsers that do not support rel=preload
    - applying rel preload css once loaded, whether supported or not.
    */
    (function( w ){
        "use strict";
        // rel=preload support test
        if( !w.loadCSS ){
            w.loadCSS = function(){};
        }
        // define on the loadCSS obj
        var rp = loadCSS.relpreload = {};
        // rel=preload feature support test
        // runs once and returns a function for compat purposes
        rp.support = (function(){
            var ret;
            try {
                ret = w.document.createElement( "link" ).relList.supports( "preload" );
            } catch (e) {
                ret = false;
            }
            return function(){
                return ret;
            };
        })();

        // if preload isn't supported, get an asynchronous load by using a non-matching media attribute
        // then change that media back to its intended value on load
        rp.bindMediaToggle = function( link ){
            // remember existing media attr for ultimate state, or default to 'all'
            var finalMedia = link.media || "all";

            function enableStylesheet(){
                // unbind listeners
                if( link.addEventListener ){
                    link.removeEventListener( "load", enableStylesheet );
                } else if( link.attachEvent ){
                    link.detachEvent( "onload", enableStylesheet );
                }
                link.setAttribute( "onload", null );
                link.media = finalMedia;
            }

            // bind load handlers to enable media
            if( link.addEventListener ){
                link.addEventListener( "load", enableStylesheet );
            } else if( link.attachEvent ){
                link.attachEvent( "onload", enableStylesheet );
            }

            // Set rel and non-applicable media type to start an async request
            // note: timeout allows this to happen async to let rendering continue in IE
            setTimeout(function(){
                link.rel = "stylesheet";
                link.media = "only x";
            });
            // also enable media after 3 seconds,
            // which will catch very old browsers (android 2.x, old firefox) that don't support onload on link
            setTimeout( enableStylesheet, 3000 );
        };

        // loop through link elements in DOM
        rp.poly = function(){
            // double check this to prevent external calls from running
            if( rp.support() ){
                return;
            }
            var links = w.document.getElementsByTagName( "link" );
            for( var i = 0; i < links.length; i++ ){
                var link = links[ i ];
                // qualify links to those with rel=preload and as=style attrs
                if( link.rel === "preload" && link.getAttribute( "as" ) === "style" && !link.getAttribute( "data-loadcss" ) ){
                    // prevent rerunning on link
                    link.setAttribute( "data-loadcss", true );
                    // bind listeners to toggle media back
                    rp.bindMediaToggle( link );
                }
            }
        };

        // if unsupported, run the polyfill
        if( !rp.support() ){
            // run once at least
            rp.poly();

            // rerun poly on an interval until onload
            var run = w.setInterval( rp.poly, 500 );
            if( w.addEventListener ){
                w.addEventListener( "load", function(){
                    rp.poly();
                    w.clearInterval( run );
                } );
            } else if( w.attachEvent ){
                w.attachEvent( "onload", function(){
                    rp.poly();
                    w.clearInterval( run );
                } );
            }
        }


        // commonjs
        if( typeof exports !== "undefined" ){
            exports.loadCSS = loadCSS;
        }
        else {
            w.loadCSS = loadCSS;
        }
    }( typeof global !== "undefined" ? global : this ) );
</script>

</body>
</html>
