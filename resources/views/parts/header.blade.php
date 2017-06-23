<!-- PAGE HEADER -->
<header class="page-header page-header_multi">
    <!-- topbar -->
    <div class="topbar-wrapper">
        <div class="container">
            <div class="topbar">
                <div class="topbar__section">
                    <ul class="list-contacts">
                        <li class="list-contacts__item"><span class="list-contacts__label"><i class="fa fa-map-marker"></i> Адрес: Байзакова 280 бц almaty towers <i style="padding-left: 10px" class="fa fa-phone"></i> Телефоны: <a
                                        href="tel:8 (708) 988 48 11">8 (708) 988 48 11</a>, <a href="tel:8 (707) 901 99 91">8 (707) 901 99 91</a></span></li>
                    </ul>
                </div>
                <div class="topbar__section"><a class="button button_default button_colored-2" id="js-toggle-estimate" href="#">Заказать звонок</a>
                    <div class="page-header_multi__form-estimate" id="js-form-estimate">
                        <form class="form form_estimate" action="/mail" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-control form_estimate__control">
                                <input class="form-control__input form_estimate__control-input" type="text" name="name" placeholder="Имя">
                            </div>

                            <div class="form-control form_estimate__control">
                                <input class="form-control__input form_estimate__control-input" type="tel" name="phone" placeholder="Телефон">
                            </div>

                            <div class="form__wrapper-submit form_estimate__wrapper-submit"><button class="form__submit-button button button_default button_large" href="#">Отправить</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- - topbar -->
    <!-- nav -->
    <div class="top-navigation-wrapper">
        <nav class="top-navigation">
            <div class="top-navigation__logo">
                <a class="site-logo" href="/" style="font-size: 30px;">
                    <img class="site-logo__img" src="/img/eclogo.png" alt="EXPERT CLEANING">
                </a>
            </div>
            {{--<div class="top-navigation__menu" style="display: none !important;">--}}
                {{--<div class="container">--}}
                    {{--<ul class="list-top-menu">--}}
                        {{--<li class="list-top-menu__item list-top-menu__item_has-submenu"><a class="list-top-menu__link" href="#">Home</a>--}}
                            {{--<ul class="list-submenu">--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="index.html">Home v1</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="home-02.html">Home v2</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="list-top-menu__item list-top-menu__item_has-submenu"><a class="list-top-menu__link" href="#">About us</a>--}}
                            {{--<ul class="list-submenu">--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="about.html">About Company</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="about-history.html">Our History</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="list-top-menu__item list-top-menu__item_has-submenu"><a class="list-top-menu__link" href="#">Services</a>--}}
                            {{--<ul class="list-submenu">--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="services.html">Our Services</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="service-details.html">Service Details</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="list-top-menu__item list-top-menu__item_has-submenu"><a class="list-top-menu__link" href="#">Gallery</a>--}}
                            {{--<ul class="list-submenu">--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="gallery-3col-box.html">Gallery 3 Columns Box</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="gallery-3col-fullwidth.html">Gallery 3 Columns Fullwidth</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="gallery-4col-box.html">Gallery 4 Columns Box</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="gallery-4col-fullwidth.html">Gallery 4 Columns Fullwidth</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="list-top-menu__item list-top-menu__item_has-submenu"><a class="list-top-menu__link" href="#">Team</a>--}}
                            {{--<ul class="list-submenu">--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="team.html">Our Team</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="team-details.html">Member Details</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="list-top-menu__item"><a class="list-top-menu__link" href="pricing.html">Pricing</a></li>--}}
                        {{--<li class="list-top-menu__item list-top-menu__item_has-submenu"><a class="list-top-menu__link" href="#">Blog</a>--}}
                            {{--<ul class="list-submenu">--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="blog.html">Blog List Posts</a></li>--}}
                                {{--<li class="list-submenu__item"><a class="list-submenu__link" href="blog-singlepost.html">Blog Singlepost</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="list-top-menu__item"><a class="list-top-menu__link" href="contacts.html">Contact</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a class="top-navigation__toggle-menu" id="js-toggle-menu" href="#"></a>--}}
        </nav>
    </div>
    <!-- - nav -->
</header>
<!-- - PAGE HEADER -->