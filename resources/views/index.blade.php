<!DOCTYPE html>
<html class="page" lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Негабаритные перевозки по России</title>
    <link rel="preload" href="{{ asset('./fonts/Inter-Medium.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('./fonts/Inter-Regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('./fonts/Inter-SemiBold.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="icon" href="{{ asset('./favicon.ico')}}"><!-- 32×32 -->
    <link rel="icon" href="{{ asset('./img/favicons/icon.svg')}}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('./img/favicons/apple-icon-180x180.png')}}"><!-- 180×180 -->
    <link rel="manifest" href="{{ asset('./manifest.webmanifest')}}">
    <link rel="stylesheet" href="{{ asset('./css/style.min.css') }}">
</head>

<body class="page__body"><svg style="display: none;" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <symbol id="mail--inline" viewBox="0 0 32 32">
            <g fill="none">
                <path
                    d="M16.0013 29.3332C23.3651 29.3332 29.3346 23.3636 29.3346 15.9998C29.3346 8.63605 23.3651 2.6665 16.0013 2.6665C8.63752 2.6665 2.66797 8.63605 2.66797 15.9998C2.66797 23.3636 8.63752 29.3332 16.0013 29.3332Z"
                    fill="white" />
                <rect x="9" y="10" width="14" height="12" fill="#291F1F" />
                <path d="M8 12L14.2 16.4286C15.2667 17.1905 16.7333 17.1905 17.8 16.4286L24 12" stroke="white"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M21.9661 10.2104H10.2995C9.379 10.2104 8.63281 10.9566 8.63281 11.8771V20.2104C8.63281 21.1309 9.379 21.8771 10.2995 21.8771H21.9661C22.8866 21.8771 23.6328 21.1309 23.6328 20.2104V11.8771C23.6328 10.9566 22.8866 10.2104 21.9661 10.2104Z"
                    stroke="white" stroke-width="1.5" stroke-linecap="round" />
            </g>
        </symbol>
        <symbol id="phone--inline" viewBox="0 0 24 24">
            <g fill="none">
                <path
                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47716 17.5228 2 12 2C6.47716 2 2 6.47716 2 12C2 17.5228 6.47716 22 12 22Z"
                    fill="white" />
                <path
                    d="M15.1458 18C10.5089 18 6.75 14.2411 6.75 9.60417C6.75 9.39496 6.75765 9.18755 6.77269 8.98219C6.78995 8.7465 6.79858 8.62866 6.86034 8.52139C6.91149 8.43255 7.00215 8.34829 7.09449 8.30376C7.20598 8.25 7.33602 8.25 7.59609 8.25H9.12213C9.34084 8.25 9.45019 8.25 9.54393 8.28599C9.62673 8.31779 9.70046 8.36943 9.75864 8.43639C9.82451 8.51218 9.86188 8.61495 9.93662 8.82049L10.5683 10.5575C10.6552 10.7967 10.6987 10.9162 10.6913 11.0297C10.6848 11.1297 10.6507 11.226 10.5927 11.3077C10.527 11.4005 10.4179 11.4659 10.1997 11.5969L9.45833 12.0417C10.1094 13.4765 11.273 14.6416 12.7083 15.2917L13.1532 14.5503C13.2841 14.3321 13.3495 14.223 13.4422 14.1573C13.524 14.0993 13.6203 14.0652 13.7203 14.0587C13.8338 14.0513 13.9534 14.0948 14.1925 14.1817L15.9295 14.8134C16.135 14.8881 16.2378 14.9255 16.3136 14.9914C16.3806 15.0495 16.4322 15.1233 16.464 15.2061C16.5 15.2998 16.5 15.4092 16.5 15.6279V17.1539C16.5 17.414 16.5 17.544 16.4462 17.6555C16.4017 17.7479 16.3175 17.8385 16.2286 17.8897C16.1213 17.9514 16.0035 17.96 15.7678 17.9773C15.5624 17.9924 15.355 18 15.1458 18Z"
                    fill="#222222" />
                <path d="M16.25 10.0833V8.25M16.25 8.25H14.4167M16.25 8.25L13.5 11" stroke="#222222" stroke-width="0.75"
                    stroke-linecap="round" stroke-linejoin="round" />
            </g>
        </symbol>
        <symbol id="tg--inline" viewBox="0 0 32 32">
            <g fill="none">
                <path
                    d="M16.0013 29.3332C23.3651 29.3332 29.3346 23.3636 29.3346 15.9998C29.3346 8.63605 23.3651 2.6665 16.0013 2.6665C8.63752 2.6665 2.66797 8.63605 2.66797 15.9998C2.66797 23.3636 8.63752 29.3332 16.0013 29.3332Z"
                    fill="white" />
                <path
                    d="M8.2171 15.8842C8.2171 15.8842 14.8838 13.1482 17.1959 12.1848C18.0822 11.7995 21.088 10.5663 21.088 10.5663C21.088 10.5663 22.4753 10.0269 22.3597 11.337C22.3211 11.8766 22.0128 13.7648 21.7046 15.8072C21.2421 18.6974 20.7412 21.8573 20.7412 21.8573C20.7412 21.8573 20.6641 22.7436 20.009 22.8977C19.3539 23.0519 18.2749 22.3583 18.0822 22.2041C17.928 22.0885 15.192 20.3544 14.1901 19.5066C13.9204 19.2754 13.6121 18.813 14.2286 18.2735C15.6159 17.0018 17.2729 15.4218 18.2749 14.4199C18.7373 13.9575 19.1997 12.8785 17.2729 14.1887C14.5369 16.0769 11.8394 17.8496 11.8394 17.8496C11.8394 17.8496 11.2229 18.2349 10.0668 17.8881C8.9107 17.5413 7.56196 17.0789 7.56196 17.0789C7.56196 17.0789 6.63715 16.5008 8.2171 15.8842Z"
                    fill="#222222" />
            </g>
        </symbol>
        <symbol id="wa--inline" viewBox="0 0 32 32">
            <g fill="none">
                <rect x="8" y="9.33325" width="16" height="14.6667" fill="#222222" />
                <path
                    d="M2.67332 29.3332L4.47599 22.7092C3.28817 20.673 2.66411 18.3572 2.66799 15.9998C2.66799 8.63584 8.63732 2.6665 16.0013 2.6665C23.3653 2.6665 29.3347 8.63584 29.3347 15.9998C29.3347 23.3638 23.3653 29.3332 16.0013 29.3332C13.645 29.337 11.3302 28.7134 9.29465 27.5265L2.67332 29.3332ZM11.1893 9.74384C11.0171 9.75453 10.8489 9.79988 10.6947 9.87717C10.55 9.95908 10.418 10.0615 10.3027 10.1812C10.1427 10.3318 10.052 10.4625 9.95465 10.5892C9.46187 11.2305 9.1968 12.0177 9.20132 12.8265C9.20399 13.4798 9.37465 14.1158 9.64132 14.7105C10.1867 15.9132 11.084 17.1865 12.2693 18.3665C12.5547 18.6505 12.8333 18.9358 13.1333 19.2012C14.6045 20.4965 16.3577 21.4306 18.2533 21.9292L19.012 22.0452C19.2587 22.0585 19.5053 22.0398 19.7533 22.0278C20.1416 22.0078 20.5208 21.9026 20.864 21.7198C21.0853 21.6025 21.1893 21.5438 21.3747 21.4265C21.3747 21.4265 21.432 21.3892 21.5413 21.3065C21.7213 21.1732 21.832 21.0785 21.9813 20.9225C22.092 20.8078 22.188 20.6732 22.2613 20.5198C22.3653 20.3025 22.4693 19.8878 22.512 19.5425C22.544 19.2785 22.5347 19.1345 22.5307 19.0452C22.5253 18.9025 22.4067 18.7545 22.2773 18.6918L21.5013 18.3438C21.5013 18.3438 20.3413 17.8385 19.6333 17.5158C19.5587 17.4833 19.4787 17.4648 19.3973 17.4612C19.3061 17.4518 19.2139 17.4621 19.127 17.4913C19.0401 17.5205 18.9604 17.568 18.8933 17.6305V17.6278C18.8867 17.6278 18.7973 17.7038 17.8333 18.8718C17.778 18.9462 17.7018 19.0024 17.6144 19.0332C17.527 19.0641 17.4324 19.0683 17.3427 19.0452C17.2558 19.0219 17.1707 18.9925 17.088 18.9572C16.9227 18.8878 16.8653 18.8612 16.752 18.8118L16.7453 18.8092C15.9825 18.4761 15.2763 18.0263 14.652 17.4758C14.484 17.3292 14.328 17.1692 14.168 17.0145C13.6434 16.5122 13.1863 15.9439 12.808 15.3238L12.7293 15.1972C12.6728 15.1121 12.6271 15.0202 12.5933 14.9238C12.5427 14.7278 12.6747 14.5705 12.6747 14.5705C12.6747 14.5705 12.9987 14.2158 13.1493 14.0238C13.2748 13.8643 13.3918 13.6983 13.5 13.5265C13.6573 13.2732 13.7067 13.0132 13.624 12.8118C13.2507 11.8998 12.864 10.9918 12.4667 10.0905C12.388 9.91184 12.1547 9.78384 11.9427 9.7585C11.8707 9.7505 11.7987 9.7425 11.7267 9.73717C11.5476 9.72827 11.3682 9.73139 11.1893 9.74384Z"
                    fill="white" />
            </g>
        </symbol>
    </svg>
    <div class="page__container">
        <header class="header page__header">
            <div class="header__wrapper"><a href="./index.html" class="header__logo">
                    <picture>
                        <source media="(min-width: 1440px)" srcset="./img/desktop-logo.svg"><img
                            class="header__logo-img" src="./img/mobile-logo.svg" alt="Логотип" width="56"
                            height="28">
                    </picture>
                </a>
                <nav class="nav nav--closed">
                    <div class="nav__list">
                        <div class="nav__item"><a href="./services.html" class="nav__link">Услуги</a></div>
                        <div class="nav__item"><a href="./carpark.html" class="nav__link">Автопарк</a></div>
                        <div class="nav__item"><a href="./about.html" class="nav__link">О нас</a></div>
                        <div class="nav__item"><a href="./projects.html" class="nav__link">Проекты</a></div>
                        <div class="nav__item"><a href="./contacts.html" class="nav__link">Контакты</a></div>
                    </div><button class="btn nav__toggle"><span class="visually-hidden">Открыть меню</span></button>
                </nav>
                <div class="header__contacts"><a href="tel:+79778731886" class="header__phone">+7 (977) 873-18-86</a>
                    <a href="tel:+79778731886" class="header__phone">+7 (977) 873-18-86</a>
                    <div class="social header__icons">
                        <ul class="social__list clear-list">
                            <li class="social__item"><a href="#" class="social__link"><svg
                                        class="social__svg">
                                        <use xlink:href="#phone--inline"></use>
                                    </svg></a></li>
                            <li class="social__item"><a href="#" class="social__link"><svg
                                        class="social__svg">
                                        <use xlink:href="#tg--inline"></use>
                                    </svg></a></li>
                            <li class="social__item"><a href="#" class="social__link"><svg
                                        class="social__svg">
                                        <use xlink:href="#wa--inline"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div><button type="button" class="btn header__btn btn--dark">Заказать звонок</button>
            </div>
        </header>
        <main class="page__main">
            <section class="services">
                <div class="services__banner">
                    <h1 class="services__title">Негабаритные<br>перевозки<br>по России</h1><button type="button"
                        class="btn services__btn btn--orange services__btn--request">Оставить заявку</button>
                    <p class="services__description">Перевозим нестандартные грузы</p>
                </div>
                <div class="services__carousel">
                    <div class="services__carousel-list">
                        <div class="services__carousel-item">
                            <p class="services__carousel-title">Перевозка экскаваторов</p>
                        </div>
                        <div class="services__carousel-item">
                            <p class="services__carousel-title">Перевозка промышленных бульдозеров</p>
                        </div>
                        <div class="services__carousel-item">
                            <p class="services__carousel-title">Перевозка экскаваторов</p>
                        </div>
                        <div class="services__carousel-item">
                            <p class="services__carousel-title">Перевозка промышленных бульдозеров</p>
                        </div>
                    </div>
                </div><a href="./services.html" class="btn services__btn btn--blue services__btn--all">Все услуги</a>
            </section>
            <section class="calculator">
                <h2 class="calculator__header">Узнать стоимость перевозок</h2>
                <form class="calculator__form" action="#" method="post">
                    <div class="range calculator__range">
                        <div class="range__wrapper">
                            <p class="range__value">Ширина в метрах</p><input class="range__input range__input--width"
                                type="range" name="width" min="0" max="10" step="0.1"
                                value="0"><output class="range__bubble"></output>
                        </div>
                        <div class="range__wrapper">
                            <p class="range__value">Высота в метрах</p><input
                                class="range__input range__input--height" type="range" name="height"
                                min="0" max="10" step="0.1" value="0"><output
                                class="range__bubble"></output>
                        </div>
                        <div class="range__wrapper">
                            <p class="range__value">Длина в метрах</p><input class="range__input range__input--length"
                                type="range" name="length" min="0" max="50" step="0.1"
                                value="0"><output class="range__bubble"></output>
                        </div>
                        <div class="range__wrapper">
                            <p class="range__value">Вес в тоннах</p><input class="range__input range__input--weight"
                                type="range" name="weight" min="0" max="200" step="1"
                                value="0"><output class="range__bubble"></output>
                        </div>
                    </div>
                    <div class="calculator__fieldsbox">
                        <div class="fieldset calculator__fieldset">
                            <ul class="fieldset__list clear-list">
                                <li class="fieldset__item"><label class="visually-hidden"
                                        for="loading_address"></label> <input class="fieldset__input" type="text"
                                        name="loading_address" id="loading_address" placeholder="Адрес загрузки">
                                </li>
                                <li class="fieldset__item"><label class="visually-hidden" for="full_name"></label>
                                    <input class="fieldset__input" type="text" name="full_name" id="full_name"
                                        placeholder="ФИО или организация">
                                </li>
                                <li class="fieldset__item"><label class="visually-hidden"
                                        for="unloading_address"></label> <input class="fieldset__input"
                                        type="text" name="unloading_address" id="unloading_address"
                                        placeholder="Адрес разгрузки"></li>
                                <li class="fieldset__item"><label class="visually-hidden" for="cargo_name"></label>
                                    <input class="fieldset__input" type="text" name="cargo_name" id="cargo_name"
                                        placeholder="Наименование груза">
                                </li>
                                <li class="fieldset__item"><label class="visually-hidden" for="cargo_info"></label>
                                    <input class="fieldset__input" type="text" name="cargo_info" id="cargo_info"
                                        placeholder="Информация о грузе">
                                </li>
                            </ul>
                        </div>
                        <div class="calculator__send">
                            <div class="policy calculator__policy"><input class="policy__input visually-hidden"
                                    type="checkbox" name="policy_calc" id="policy_calc" value="agree"
                                    checked="checked"> <label class="policy__label" for="policy_calc">Соглашаюсь с
                                    <span class="policy__span">Правилами обработки<br>персональных
                                        данных</span></label></div><button class="btn calculator__submit btn--orange"
                                type="submit">Оставить заявку</button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="features">
                <h2 class="visually-hidden">Преимущества</h2>
                <div class="features__list">
                    <div class="features__item">
                        <div class="features__wrapper features__wrapper--route">
                            <p class="features__text">Подбор оптимального маршрута</p>
                        </div>
                    </div>
                    <div class="features__item">
                        <div class="features__wrapper features__wrapper--insurance">
                            <p class="features__text">Полное страхование грузов</p>
                        </div>
                    </div>
                    <div class="features__item">
                        <div class="features__wrapper features__wrapper--permit">
                            <p class="features__text">Получение разрешения на негабарит за 1 день</p>
                        </div>
                    </div>
                    <div class="features__item">
                        <div class="features__wrapper features__wrapper--payment">
                            <p class="features__text">Любая форма оплаты: c НДС, без НДС, нал./безнал.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="car">
                <h2 class="car__title">Наш автопарк</h2>
                <div class="car__slider">
                    <div class="car__item">
                        <div class="car__wrapper">
                            <div class="car__image">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1440px)"
                                        srcset="./img/index/transport-desktop@1x.webp, ./img/index/transport-desktop@2x.webp 2x">
                                    <source type="image/webp" media="(min-width: 375px)"
                                        srcset="./img/index/transport-desktop@1x.webp, ./img/index/transport-desktop@2x.webp 2x">
                                    <source media="(min-width: 375px)"
                                        srcset="./img/index/transport-desktop@1x.png, ./img/index/transport-desktop@2x.png 2x">
                                    <img class="car__img" src="./img/index/transport-desktop@1x.png"
                                        srcset="./img/index/transport-desktop@2x.png 2x" alt="Faymonville">
                                </picture>
                            </div>
                            <div class="car__info">
                                <p class="car__description">Марка FAYMONVILLE<br>Год выпуска 2010<br>Кол-во осей:
                                    8<br>Собственный вес 37 т<br>Полный вес 159 250 кг<br>Грузоподъёмность 112 750
                                    кг<br>Длина 22,35 м<br>Ширина 2,85 м<br>Высота 5,00 м</p><button type="button"
                                    class="btn car__btn btn--orange">Оставить заявку</button>
                            </div>
                        </div>
                    </div>
                    <div class="car__item">
                        <div class="car__wrapper">
                            <div class="car__image">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1440px)"
                                        srcset="./img/index/transport-desktop@1x.webp, ./img/index/transport-desktop@2x.webp 2x">
                                    <source type="image/webp" media="(min-width: 375px)"
                                        srcset="./img/index/transport-desktop@1x.webp, ./img/index/transport-desktop@2x.webp 2x">
                                    <source media="(min-width: 375px)"
                                        srcset="./img/index/transport-desktop@1x.png, ./img/index/transport-desktop@2x.png 2x">
                                    <img class="car__img" src="./img/index/transport-desktop@1x.png"
                                        srcset="./img/index/transport-desktop@2x.png 2x" alt="Faymonville">
                                </picture>
                            </div>
                            <div class="car__info">
                                <p class="car__description">Марка FAYMONVILLE<br>Год выпуска 2010<br>Кол-во осей:
                                    8<br>Собственный вес 37 т<br>Полный вес 159 250 кг<br>Грузоподъёмность 112 750
                                    кг<br>Длина 22,35 м<br>Ширина 2,85 м<br>Высота 5,00 м</p><button type="button"
                                    class="btn car__btn btn--orange">Оставить заявку</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="price">
                <h2 class="price__title">Стоимость перевозок</h2>
                <div class="price__wrapper">
                    <div class="price__item">
                        <div class="price__item-body">
                            <h3 class="price__item-header">До 20 тонн</h3>
                            <h4 class="price__item-location">Москва</h4>
                            <div class="price__item-info">
                                <p class="price__item-value">От 23 ооо руб</p>
                                <p class="price__item-value">От 23 ооо руб</p>
                                <p class="price__item-value">От 23 ооо руб</p>
                            </div>
                        </div>
                    </div>
                    <div class="price__item">
                        <div class="price__item-body">
                            <h3 class="price__item-header">До 20 тонн</h3>
                            <h4 class="price__item-location">Ростов-на-Дону</h4>
                            <div class="price__item-info">
                                <p class="price__item-value">От 23 ооо руб</p>
                                <p class="price__item-value">От 23 ооо руб</p>
                                <p class="price__item-value">От 23 ооо руб</p>
                            </div>
                        </div>
                    </div>
                    <div class="price__item">
                        <div class="price__item-body">
                            <h3 class="price__item-header">До 20 тонн</h3>
                            <h4 class="price__item-location">Регионы РФ</h4>
                            <div class="price__item-info">
                                <p class="price__item-value">От 23 ооо руб</p>
                                <p class="price__item-value">От 23 ооо руб</p>
                                <p class="price__item-value">От 23 ооо руб</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="oversized">
                <div class="oversized__info">
                    <h2 class="oversized__title">Негабаритные перевозки</h2>
                    <p class="oversized__text">Негабаритный груз – это груз, чьи габариты и размеры выше допустимых
                        норм ПДД, поэтому перевозки обычным транспортом этих позиций невозможны. Для транспортировки
                        подобных грузов применяют негабаритные перевозки автомобильным транспортом.</p>
                    <h3 class="oversized__subtitle">Организация перевозки</h3>
                    <p class="oversized__text">В нашем автопарке представлены необходимые для таких перевозок
                        автомобили, среди которых тягачи с различной грузоподъемностью, например, седельный тягач Scania
                        с грузоподъемностью от 40 тыс. кг до 150 тыс. кг и др. Мы предлагаем выполнить перевозки
                        негабаритного груза автомобильным транспортом в Мурманск, Удачный, Магадан</p>
                    <h3 class="oversized__subtitle">Подзаголовок</h3>
                    <p class="oversized__text">В нашем автопарке представлены необходимые для таких перевозок
                        автомобили, среди которых тягачи с различной грузоподъемностью, например, седельный тягач Scania
                        с грузоподъемностью от 40 тыс. кг до 150 тыс. кг и др. Мы предлагаем выполнить перевозки
                        негабаритного груза автомобильным транспортом в Мурманск, Удачный, Магадан и т. д.</p>
                </div>
                <div class="oversized__image">
                    <picture>
                        <source type="image/webp" media="(min-width: 1440px)"
                            srcset="./img/index/oversized-desktop@1x.webp, ./img/index/oversized-desktop@2x.webp 2x">
                        <source type="image/webp" media="(min-width: 375px)"
                            srcset="./img/index/oversized-desktop@1x.webp, ./img/index/oversized-desktop@2x.webp 2x">
                        <source media="(min-width: 375px)"
                            srcset="./img/index/oversized-desktop@1x.png, ./img/index/oversized-desktop@2x.png 2x"><img
                            class="oversized__img" src="./img/index/oversized-desktop@1x.png"
                            srcset="./img/index/oversized-desktop@2x.png 2x" alt="Faymonville">
                    </picture>
                </div>
            </section>
            <section class="consultation">
                <h2 class="consultation__title">Нужна консультация специалиста?</h2>
                <form class="consultation__wrapper" action="#" method="post">
                    <div class="consultation__form"><label class="visually-hidden" for="phone_consult"></label>
                        <input class="consultation__input" type="tel" name="phone_consult" id="phone_consult"
                            placeholder="Телефон*"> <button class="btn consultation__submit btn--orange"
                            type="submit">Заказать консультацию</button>
                    </div>
                    <div class="policy consultation__policy"><input class="policy__input visually-hidden"
                            type="checkbox" name="policy_consult" id="policy_consult" value="agree"> <label
                            class="policy__label" for="policy_consult">Соглашаюсь с <span
                                class="policy__span">Правилами обработки персональных данных</span></label></div>
                </form>
            </section>
            <section class="work">
                <h2 class="work__title work__title--head">Как мы работаем</h2>
                <div class="work__wrapper">
                    <div class="work__line"></div>
                    <div class="work__carousel">
                        <div class="work__item">
                            <div class="work__slide">
                                <div class="work__bubble"><span class="work__span">1</span></div>
                                <div class="work__box">
                                    <h3 class="work__title">Шаг 1</h3>
                                    <p class="work__text">Предварительная консультация, расчет стоимости перевозки</p>
                                </div>
                            </div>
                        </div>
                        <div class="work__item">
                            <div class="work__slide">
                                <div class="work__bubble"><span class="work__span">2</span></div>
                                <div class="work__box">
                                    <h3 class="work__title">Шаг 2</h3>
                                    <p class="work__text">Заключение официального договора, направление счета для
                                        внесения предоплаты</p>
                                </div>
                            </div>
                        </div>
                        <div class="work__item">
                            <div class="work__slide">
                                <div class="work__bubble"><span class="work__span">3</span></div>
                                <div class="work__box">
                                    <h3 class="work__title">Шаг 3</h3>
                                    <p class="work__text">Получение разрешения на транспортировку негабарита,
                                        согласование маршрута движения с ГИБДД</p>
                                </div>
                            </div>
                        </div>
                        <div class="work__item">
                            <div class="work__slide">
                                <div class="work__bubble"><span class="work__span">4</span></div>
                                <div class="work__box">
                                    <h3 class="work__title">Шаг 4</h3>
                                    <p class="work__text">Подача транспорта под погрузку</p>
                                </div>
                            </div>
                        </div>
                        <div class="work__item">
                            <div class="work__slide">
                                <div class="work__bubble"><span class="work__span">5</span></div>
                                <div class="work__box">
                                    <h3 class="work__title">Шаг 5</h3>
                                    <p class="work__text">Доставка груза в оговоренные сроки</p>
                                </div>
                            </div>
                        </div>
                        <div class="work__item">
                            <div class="work__slide">
                                <div class="work__bubble"><span class="work__span">6</span></div>
                                <div class="work__box">
                                    <h3 class="work__title">Шаг 6</h3>
                                    <p class="work__text">Направление полного пакета сканов оригиналов закрывающих
                                        документов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="faq">
                <h2 class="faq__title">Частые вопросы</h2>
                <div class="faq__wrapper">
                    <div class="faq__item"><button class="btn faq__button">Что представляет собой перевозка
                            негабарита?</button>
                        <p class="faq__content visually-hidden"></p>
                    </div>
                    <div class="faq__item"><button class="btn faq__button">Доставка груза в оговоренные сроки</button>
                        <p class="faq__content visually-hidden"></p>
                    </div>
                    <div class="faq__item"><button class="btn faq__button">Подача транспорта под погрузку</button>
                        <p class="faq__content visually-hidden">Получение разрешения на транспортировку негабарита,
                            согласование маршрута движения с ГИБДД. Направление полного пакета сканов оригиналов
                            закрывающих документов</p>
                    </div>
                </div>
            </section>
            <section class="partners">
                <h2 class="partners__title">Наши партнеры</h2>
                <ul class="partners__list clear-list">
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/garpix.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/hp.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/idzor.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/garpix.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/garpix.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/hp.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/idzor.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                    <li class="partners__item"><a href="#" class="partners__link"><img
                                src="./img/index/garpix.png" class="partners__img" width="" height=""
                                alt=""></a></li>
                </ul>
            </section>
            <section class="discuss">
                <div class="discuss__wrapper">
                    <h2 class="discuss__title">Остались вопросы?<br>Давайте обсудим!</h2>
                    <form class="discuss__form" action="#" method="post">
                        <div class="discuss__fields"><label class="visually-hidden" for="phone_discuss"></label>
                            <input class="discuss__input" type="tel" name="phone_discuss" id="phone_discuss"
                                placeholder="Телефон*"> <label class="visually-hidden" for="name"></label> <input
                                class="discuss__input" type="text" name="name" id="name"
                                placeholder="Имя"> <button class="btn discuss__submit btn--orange"
                                type="submit">Заказать консультацию</button>
                        </div>
                        <div class="policy discuss__policy"><input class="policy__input visually-hidden"
                                type="checkbox" name="policy_discuss" id="policy_discuss" value="agree"> <label
                                class="policy__label" for="policy_discuss">Соглашаюсь с <span
                                    class="policy__span">Правилами обработки персональных данных</span></label></div>
                    </form>
                </div>
                <div class="discuss__social">
                    <p class="discuss__action">Напишите нам в соц.сетях</p>
                    <div class="social discuss__icons">
                        <ul class="social__list clear-list">
                            <li class="social__item"><a href="#" class="social__link"><svg
                                        class="social__svg">
                                        <use xlink:href="#tg--inline"></use>
                                    </svg></a></li>
                            <li class="social__item"><a href="#" class="social__link"><svg
                                        class="social__svg">
                                        <use xlink:href="#wa--inline"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <footer class="footer page__footer">
        <div class="footer__container">
            <div class="footer__wrapper">
                <div class="footer__nav">
                    <div class="footer__menu">
                        <h2 class="footer__title">Меню</h2>
                        <ul class="footer__list clear-list">
                            <li class="footer__item"><a href="./services.html" class="footer__link">Услуги</a></li>
                            <li class="footer__item"><a href="./carpark.html" class="footer__link">Автопарк</a></li>
                            <li class="footer__item"><a href="./about.html" class="footer__link">О нас</a></li>
                            <li class="footer__item"><a href="./projects.html" class="footer__link">Проекты</a></li>
                            <li class="footer__item"><a href="./contacts.html" class="footer__link">Контакты</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu">
                        <h2 class="footer__title">Услуги</h2>
                        <ul class="footer__list clear-list">
                            <li class="footer__item"><a href="" class="footer__link">Перевозка негабаритных
                                    грузов</a></li>
                            <li class="footer__item"><a href="" class="footer__link">Перевозка
                                    экскаваторов</a></li>
                            <li class="footer__item"><a href="" class="footer__link">Перевозка негабаритных
                                    грузов</a></li>
                            <li class="footer__item"><a href="" class="footer__link">Перевозка сборных грузов
                                    грузов</a></li>
                            <li class="footer__item"><a href="" class="footer__link">Перевозка негабаритных
                                    грузов</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__contacts">
                    <div class="footer__col"><a href="tel:+79778731886" class="footer__link footer__link--phone">+7
                            (977) 873-18-86</a> <a href="tel:+79778731886" class="footer__link footer__link--phone">+7
                            (977) 873-18-86</a> <button type="button" class="btn footer__btn btn--dark">Заказать
                            звонок</button>
                        <div class="footer__mail"><a class="footer__link" href="mailto:infoinfo@gmail.com"><svg
                                    class="footer__mail-svg">
                                    <use xlink:href="#mail--inline"></use>
                                </svg> </a><span class="footer__mail-span">infoinfo@gmail.com</span></div>
                    </div>
                    <div class="footer__col">
                        <div class="footer__office">
                            <p class="footer__text">Главный офис</p>
                            <p class="footer__text">Россия, Московская обл., г. Королев, ул. Пионерская, д.14А</p>
                        </div>
                        <div class="footer__social">
                            <p class="footer__text">Наши соцсети</p>
                            <div class="social footer__icons"><a href="#" class="social__link"><svg
                                        class="social__svg">
                                        <use xlink:href="#tg--inline"></use>
                                    </svg> </a><a href="#" class="social__link"><svg class="social__svg">
                                        <use xlink:href="#wa--inline"></use>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="footer__rights">2024. Все права защищены</p><a class="footer__back-btn"></a>
        </div>
    </footer>
    <script src="{{ asset('./js/jquery.min.js') }}"></script>
    <script src="{{ asset('./js/slick.min.js') }}"></script>
    <script src="{{ asset('./js/index.min.js') }}" type="module"></script>
</body>

</html>
