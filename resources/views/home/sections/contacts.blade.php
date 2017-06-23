<!-- section CONTACTS -->
<section id="contacts" class="page-section page-section_contacts _background-image-6 _overlay-dark js-jarallax_type_1">
    <div class="contacts-map" id="js-google-map-contacts"></div>
    <div class="page-section_contacts__content">
        <div class="container">
            <div class="contact-info">
                <div class="contact-info__content">
                    <div class="contact-info__logo"><a class="site-logo" href="home-02.html"><img class="site-logo__img" src="img/logo4.png" alt="Cleaner HTML Template"></a></div>
                    <p class="p _color-inverse">профессиональная уборка помещений и прилегающих территорий.</p>
                </div>
                <div class="contact-info__form">
                    <header class="page-section_contacts__header">
                        <h2 class="page-section_contacts__heading">Заказать обратный звонок</h2>
                    </header>
                    <form class="form form_contact" action="/mail" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-control form_contact__control">
                            <input class="form-control__input form_contact__control-input" type="text" name="name" placeholder="Имя">
                        </div>

                        <div class="form-control form_contact__control">
                            <input class="form-control__input form_contact__control-input" type="tel" name="phone" placeholder="Телефон">
                        </div>
                        <div class="form__wrapper-submit form_contact__wrapper-submit"><button class="form__submit-button button button_default button_large button_inverse" href="#">Отправить</button></div>
                    </form>
                </div>
                <div class="contact-info__content">
                    <ul class="list-contacts-2">
                        <li class="list-contacts-2__item">
                            <div class="contact">
                                <div class="contact__wrapper-icon"><i class="contact__icon fa fa-map-marker"></i></div>
                                <div class="contact__wrapper-content">
                                    <h3 class="contact__heading">Адрес</h3><span class="contact__label">Байзакова 280 бц almaty towers</span>
                                </div>
                            </div>
                        </li>
                        <li class="list-contacts-2__item">
                            <div class="contact">
                                <div class="contact__wrapper-icon"><i class="contact__icon fa fa-phone"></i></div>
                                <div class="contact__wrapper-content">
                                    <h3 class="contact__heading">Телефоны</h3><span class="contact__label">8 (708) 988 48 11</span><span class="contact__label">8 (707) 901 99 91</span>
                                </div>
                            </div>
                        </li>
                        {{--<li class="list-contacts-2__item">--}}
                            {{--<div class="contact">--}}
                                {{--<div class="contact__wrapper-icon"><i class="contact__icon fa fa-envelope"></i></div>--}}
                                {{--<div class="contact__wrapper-content">--}}
                                    {{--<h3 class="contact__heading">Email</h3><span class="contact__label">info@cleaner.in</span><span class="contact__label">inquiry@cleaner.in</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- - section CONTACTS -->