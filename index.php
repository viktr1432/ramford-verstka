<?php
require_once('mail.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ramford</title>
    <!-- стили -->
    <link rel="icon" type="image/png" href="img/icon-kamin.png">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick-theme.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.min.css">
    <!-- скрипт определения города -->
    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"
        type="text/javascript"></script>
    <script type="text/javascript">
        window.onload = function () {
            $("#user-city,#user-city2").text(ymaps.geolocation.city);
            $('.re-unswer a').click(function () {
                $('.re-question').toggleClass('active');
            });
        }
    </script>
</head>

<body>
  <?php
  echo @$err;
  echo @$ok;
    ?>
    <!-- arthboard modal -->
    <div class="re-modal__arthboard" id="re-modal__arthboard">
        <button data-close-button class="close-button">&times;</button>
        <div class="re-modal-header">
            <div class="re-modal-title">
                <h2>
                    Уже уходите?
                </h2>
                <p>
                    Поможем подобрать правильный камин. <br> Всего 10 минут и Вы узнаете какой камин подойдет именно
                    Вам!
                </p>
            </div>
        </div>
        <div class="re-modal-body">
            <form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post" class="re-modal-form__arthboard">
                <div class="re-form-input__modal">
                    <input type="phone" placeholder="Телефон">
                    <div class="social">
                        <label><input type="radio" checked name="social">По телефону</label>
                        <label><input type="radio" name="social">В whats'ap, VIber и т.д.</label>
                    </div>
                    <input data-close-button type="submit" name="do" value="Отправить">
                </div>
                <div class="form-modal-description">
                    <p>
                        Нажимая кнопку, Вы соглашаетесь c условиями
                        <a href="#"> политики конфиденциальности.</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div id="re-overlay"></div>

    <!-- modal -->
    <div class="re-modal" id="re-modal">
        <div class="re-modal-header">
            <button data-close-button class="close-button">&times;</button>
            <div class="re-modal-title">
                <h2>
                    Перезвоним в течение 15 минут!
                </h2>
            </div>
        </div>
        <div class="re-modal-body">
            <form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" class="re-modal-form">
                <div class="re-form-input__modal">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="tel" name="phone" placeholder="Телефон">
                    <input data-close-button type="submit" name="do" value="Отправить">
                </div>
                <div class="form-modal-description">
                    <p>
                        Нажимая кнопку, Вы соглашаетесь c условиями
                        <a href="#"> политики конфиденциальности.</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div id="re-overlay"></div>

    <!-- header -->
    <header class="re-header">
        <div class="re-header-row">
            <div class="re-header-row__top">
                <div class="re-conteiner">
                    <div class="re-top-left">
                        <div class="re-payment">
                            <a href="#">
                                <p>Доставка и оплата</p>
                            </a>
                        </div>
                        <div class="re-credit">
                            <a href="#">
                                <p>Рассрочка и кредит</p>
                            </a>
                        </div>
                    </div>
                    <div class="re-top-right">
                        <div class="re-location">
                            <p id="user-city"></p>
                            <p class="re-question">
                                Ваш город
                                <span id="user-city2"></span>
                                ?
                                <span class="re-unswer">
                                    <a href="#">Да</a>
                                    <a href="#">Нет</a>
                                </span>
                            </p>
                        </div>
                        <div class="re-phone">
                            <a href="tel:8 800 505-61-36">
                                <p>8 800 505-61-36</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="re-header-row__down">
                <div class="re-conteiner">
                    <div class="re-logo">
                        <a href="#">
                            <img src="img/logo-header.png" alt="ramford-logo">
                        </a>
                    </div>
                    <nav class="re-header-menu">
                        <ul>
                            <li>
                                <a href="#">Главная</a>
                            </li>
                            <li>
                                <a href="#">Каталог</a>
                            </li>
                            <li>
                                <a href="#">О нас</a>
                            </li>
                            <li>
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger">
                        <span></span>
                    </div>
                    <nav class="re-mobile-menu">
                        <ul>
                            <a href="#">
                                <li>
                                    <div class="re-location__mobile">
                                        <p id="user-city"></p>
                                    </div>
                                </li>
                            </a>
                            <a href="tel:8 800 505-61-36">
                                <li>
                                    <div class="re-phone__mobile">
                                        <p>8 800 505-61-36</p>
                                    </div>
                                </li>
                            </a>
                            <a href="#">
                                <li>Главная</li>
                            </a>
                            <a href="#">
                                <li>Каталог</li>
                            </a>
                            <a href="#">
                                <li>О нас </li>
                            </a>
                            <a href="#">
                                <li>Контакты</li>
                            </a>
                            <div class="re-request-call__mobile">
                                <a href="#" data-modal-target="#re-modal" class="anim_btn effekt">Заказать звонок</a>
                            </div>
                        </ul>
                    </nav>
                    <div class="re-request-call">
                        <a href="#" data-modal-target="#re-modal" class="anim_btn effekt">Заказать звонок</a>
                    </div>
                    <div class="re-cart">
                        <a href="#">
                            <img src="img/shopping-cart.png" alt="ramford-cart">
                        </a>
                        <p><span>0</span></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- main content -->
    <main class="re-main">
        <!-- section info -->
        <section class="re-info-block">
            <div class="re-conteiner">
                <div class="re-info-left">
                    <div class="re-counter">
                        <div class="re-counter-title">
                            <h2>Только 3 дня!</h2>
                            <p>Бесплатная доставка по РФ</p>
                        </div>
                        <div id="countdown" class="re-counter-timer">
                            <div class="re-timer_day">
                                <span class="days">02</span>
                                <p>дней</p>
                            </div>
                            <div class="re-timer_hour">
                                <span class="hours">23</span>
                                <p>часов</p>
                            </div>
                            <div class="re-timer_minut">
                                <span class="minutes">59</span>
                                <p>минут</p>
                            </div>
                            <div class="re-timer_second">
                                <span class="seconds">59</span>
                                <p>секунд</span>
                            </div>
                        </div>
                        <div class="re-cunter-text">
                            <p>Возникли трудности<br> с выбором камина или печи?</p>
                        </div>
                        <form class="re-counter-form"action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" id="myForm">
                            <input type="number" name="phone" placeholder="Телефон">
                            <input type="hidden" name="do" value="">
                            <a href="#" class="anim_btn effekt" form="myForm">Получить консультацию</a>
                        </form>
                    </div>
                </div>
                <div class="re-info-right">
                    <div class="re-info-slider">
                        <div class="re-slider-item">
                            <img src="img/slider-Kamin.png" alt="img">
                        </div>
                        <div class="re-slider-item">
                            <img src="img/slider-Kamin.png" alt="img">
                        </div>
                        <div class="re-slider-item">
                            <img src="img/slider-Kamin.png" alt="img">
                        </div>
                        <div class="re-slider-item">
                            <img src="img/slider-Kamin.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section subMenu -->
        <section class="re-subMenu">
            <div class="re-conteiner">
                <nav class="re-subMenu-navigation">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-electro.png" alt="Электрокамины">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Электрокамины</p>
                                        <span>3D, каменные и др</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-kamin.png" alt="Камины">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Камины</p>
                                        <span>топки, облицовки</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-portal.png" alt="Порталы">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Порталы</p>
                                        <span>каталог порталов</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-ochagi.png" alt="Электроочаги">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Электроочаги</p>
                                        <span>каталог электроочагов</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-pechi.png" alt="Печи для дома">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Печи для дома</p>
                                        <span>отопительные и другие</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-heater.png" alt="Печи для бань">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Печи для бань</p>
                                        <span>для бань и саун</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-accesuary.png" alt="Аксессуары">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Аксессуары</p>
                                        <span>каминные наборы</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="re-navigation-item">
                                    <div class="item-img">
                                        <img src="img/icon-montag.png" alt="Монтаж">
                                    </div>
                                    <div class="re-item-description">
                                        <p>Монтаж</p>
                                        <span>отделка, демонтаж и пр</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- section currentOffers -->
        <section class="re-currentOffers">
            <div class="re-currentOffers-row re-conteiner">
                <div class="re-currentOffers-left">
                    <div class="re-currentOffers-left__title">
                        <h2>
                            Актуальные предложения
                        </h2>
                    </div>
                    <div class="re-currentOffers-slider">
                        <div class="re-slider-item">
                            <div class="re-item-img">
                                <img src="img/barselona_ao_FS33_ir_s.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Барселона + Firespace 33 LED</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-slider-item">
                            <div class="re-item-img">
                                <img src="img/Juneau.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Dimplex Очаг Opti-Myst Juneau</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-slider-item">
                            <div class="re-item-img">
                                <img src="img/Pierre_Luxe_shampan____panoramic_25.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Каминокомплект Pierre Luxe</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-slider-item">
                            <div class="re-item-img">
                                <img src="img/Dublin_arochnyy_skal_nyy_s_Cavendish.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Барселона + Firespace 33 LED</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-slider-item">
                            <div class="re-item-img">
                                <img src="img/Juneau.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Dimplex Очаг Opti-Myst Juneau</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-slider-item">
                            <div class="re-item-img">
                                <img src="img/Pierre_Luxe_shampan____panoramic_25.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Каминокомплект Pierre Luxe</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="re-currentOffers-right">
                    <div class="re-currentOffers-right__title">
                        <h2>
                            Камины под заказ
                        </h2>
                    </div>
                    <div class="re-currentOffers-right__description">
                        <h4>
                            Краткая инструкция
                        </h4>
                        <p>
                            Услуга «Электрокамины на заказ» позволит Вам собрать портал по деталям.
                        </p>
                        <ul>
                            <li>- Выбираете базовую форму</li>
                            <li>- Выбираете электроочаг</li>
                            <li>- Далее Вам будут предложены варианты исполнения портала</li>
                        </ul>
                    </div>
                    <div class="re-currentOffers-right__btn">
                        <a href="#" data-modal-target="#re-modal" class="anim_btn effekt">Обсудить проект</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section newProduct -->
        <section class="re-newProduct">
            <div class="re-newProduct-row re-conteiner">
                <div class="re-newProduct-content">
                    <div class="re-newProduct__title">
                        <h2>
                            Новинки на сайте
                        </h2>
                    </div>
                    <div class="re-newProduct-items">
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/barselona_ao_FS33_ir_s.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Барселона + Firespace 33 LED</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/Juneau.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Dimplex Очаг Opti-Myst Juneau</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/Pierre_Luxe_shampan____panoramic_25.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Каминокомплект Pierre Luxe</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/Dublin_arochnyy_skal_nyy_s_Cavendish.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Барселона + Firespace 33 LED</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/Juneau.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Dimplex Очаг Opti-Myst Juneau</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/barselona_ao_FS33_ir_s.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Барселона + Firespace 33 LED</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                        <div class="re-item">
                            <div class="re-item-img">
                                <img src="img/Juneau.png" alt="item">
                            </div>
                            <div class="re-item-description">
                                <p>Dimplex Очаг Opti-Myst Juneau</p>
                            </div>
                            <div class="re-item-action">
                                <div class="re-item-price">
                                    <p><span>58 500</span> ₽</p>
                                </div>
                                <div class="re-item-action__btn">
                                    <a href="#" class="anim_btn effekt">Купить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- section aboutUs -->
        <section class="re-aboutUs">
            <div class="re-aboutUs-row re-conteiner">
                <div class="re-aboutUs-items">
                    <div class="re-aboutUs-item">
                        <div class="re-aboutUs-description">
                            <h2>
                                Более 1000
                            </h2>
                            <p>товаров в магазине</p>
                        </div>
                    </div>
                    <div class="re-aboutUs-item">
                        <div class="re-aboutUs-description">
                            <h2>
                                С 2014 года
                            </h2>
                            <p>дарим тепло и уют</p>
                        </div>
                    </div>
                    <div class="re-aboutUs-item">
                        <div class="re-aboutUs-description">
                            <h2>
                                Гарантия
                            </h2>
                            <p>Официальная гарантия</p>
                        </div>
                    </div>
                    <div class="re-aboutUs-item">
                        <div class="re-aboutUs-description">
                            <h2>
                                Оплата
                            </h2>
                            <p>Любые способы</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section formApplication -->
        <section class="re-formApplication">
            <div class="re-formApplication-row re-conteiner">
                <div class="re-formApplication-content">
                    <div class="re-content-title">
                        <h2>Всегда рады помочь</h2>
                    </div>
                    <form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" id="myForm2" class="re-content-form">
                        <div class="re-form-input">
                            <input type="text" name="name" placeholder="Имя*">
                            <input type="number" name="phone" placeholder="Телефон*">
                            <input type="hidden" name="do" value="">
                        </div>
                        <div class="re-form-textarea">
                            <textarea name="textarea" placeholder="Вопрос"></textarea>
                        </div>
                        <div class="re-form-btn">
                            <a href="#" class="anim_btn effekt" form="myForm2">Получить консультацию</a>
                            <div class="re-social">
                                <p>Мы онлайн в месенджерах:</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            Whats'ap
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Viber
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Telegram
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="re-formApplication-right">
                    <img src="img/mobile.png" alt="mobile-form">
                </div>
            </div>
        </section>
        <!-- section news -->
        <section class="re-news">
            <div class="re-news-row re-conteiner">
                <div class="re-news-title">
                    <h2>Новости</h2>
                </div>
                <div class="re-news-items">
                    <a href="#">
                        <div class="re-news-item">
                            <div class="re-news-description">
                                <h2>
                                    Заголовок новости
                                </h2>
                                <p>29.12.2019</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="re-news-item">
                            <div class="re-news-description">
                                <h2>
                                    Заголовок новости
                                </h2>
                                <p>29.12.2019</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="re-news-item">
                            <div class="re-news-description">
                                <h2>
                                    Заголовок новости
                                </h2>
                                <p>29.12.2019</p>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="re-news-item">
                            <div class="re-news-description">
                                <h2>
                                    Заголовок новости
                                </h2>
                                <p>29.12.2019</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <footer class="re-footer">
        <div class="re-footer-row">
            <div class="re-conteiner">
                <div class="re-footer-row__top">
                    <div class="re-footer-logo">
                        <img src="./img/logo-header.png" alt="footer-logo">
                    </div>
                    <div class="re-top-right">
                        <div class="re-location">
                            <a href="#">
                                <p id="user-city"></p>
                            </a>
                        </div>
                        <div class="re-phone">
                            <a href="tel:8 800 505-61-36">
                                <p>8 800 505-61-36</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="re-footer-row__center">
                    <div class="re-footer-menu">
                        <nav class="re-menu-column">
                            <h3>Каталог</h3>
                            <ul>
                                <li>
                                    <a href="#">Электрокамины</a>
                                </li>
                                <li>
                                    <a href="#">Камины</a>
                                </li>
                                <li>
                                    <a href="#">Порталы</a>
                                </li>
                                <li>
                                    <a href="#">Электроочаги</a>
                                </li>
                                <li>
                                    <a href="#">Печи для дома</a>
                                </li>
                                <li>
                                    <a href="#">Печи для бань</a>
                                </li>
                                <li>
                                    <a href="#">Аксессуары</a>
                                </li>
                                <li>
                                    <a href="#">Монтаж</a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="re-menu-column">
                            <h3>Меню</h3>
                            <ul>
                                <li>
                                    <a href="#"> Главная</a>
                                </li>
                                <li>
                                    <a href="#">Каталог</a>
                                </li>
                                <li>
                                    <a href="#">О нас</a>
                                </li>
                                <li>
                                    <a href="#">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                        <nav class="re-menu-column">
                            <h3>Покупателям</h3>
                            <ul>
                                <li>
                                    <a href="#">Доставка и оплата</a>
                                </li>
                                <li>
                                    <a href="#">Рассрочка и кредит</a>
                                </li>
                                <li>
                                    <a href="#">Гарантии</a>
                                </li>
                                <li>
                                    <a href="#">Возврат</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="re-footer-map">
                            <div class="re-footer-mobile__location">
                                <div class="re-top-right">
                                    <div class="re-location">
                                        <a href="#">
                                            <p id="user-city"></p>
                                        </a>
                                    </div>
                                    <div class="re-phone">
                                        <a href="tel:8 800 505-61-36">
                                            <p>8 800 505-61-36</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <p class="re-adress">20050, Екатеринбург, ул. Расточная, 15/4-17 (с 9:00 - 21:00 МСК)</p>
                            <div class="re-google-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2180.1872172822946!2d60.50571731544358!3d56.877032912191936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c171d2669ab0a9%3A0x4a61dba8dc1b026f!2z0YPQuy4g0KDQsNGB0YLQvtGH0L3QsNGPLCAxNS80LCDQldC60LDRgtC10YDQuNC90LHRg9GA0LMsINCh0LLQtdGA0LTQu9C-0LLRgdC60LDRjyDQvtCx0LsuLCDQoNC-0YHRgdC40Y8sIDYyMDA1MA!5e0!3m2!1sru!2sua!4v1579179829322!5m2!1sru!2sua"
                                    width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="re-footer-row__down">
                    <div class="re-footer-signature">
                        <p>2014-2019 Компания РАМФОРД</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("a.anim_btn[form='myForm']").click(function(){
          document.getElementById("myForm").submit();
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("a.anim_btn[form='myForm2']").click(function(){
          document.getElementById("myForm2").submit();
        });
      });
    </script>
</body>

</html>
