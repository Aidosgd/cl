<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/css/ion.tabs.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">
    {{--<link href="/css/app.css" rel="stylesheet">--}}

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    @include('parts.header')

    <!-- PAGE MAIN -->
    <main class="page-main">
        <!-- section INTRO-->
        <section class="page-section page-section_intro _background-image-3 js-jarallax_type_1 _overlay-dark">
            <header class="page-section_intro__header">
                <h2 class="page-section_intro__heading-2">Welcome to cleaner Template</h2>
                <h1 class="page-section_intro__heading-1">Cleaner services</h1>
            </header>
            <div class="container">
                <div class="page-section_intro__content">
                    <div class="page-section_intro__wrapper-info">
                        <h3 class="page-section_intro__heading-3">Clean and unique psd for your website!</h3>
                        <p class="p p_regular">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                    </div>
                    <div class="page-section_intro__wrapper-buttons"><a class="button button_default button_large button_colored-2 button_margin-right" href="#">Buy now</a><a class="button button_default button_large" href="#">Contact us</a></div>
                </div>
            </div>
        </section>
        <!-- - section INTRO-->
        <!-- section ABOUT  -->
        <section class="page-section page-section_about">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">About</span><span class="subline__text">Us</span></div>
                            <h2 class="page-section__heading_multi">Who we are</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-section_about__wrapper-info">
                                <div class="page-section_about__wrapper-img"><img class="page-section_about__img" src="img/about/about1.jpg" alt=""></div>
                                <div class="page-section_about__info">
                                    <p class="p p_regular">Contrary to popular belief, Lorem Ipsum is not simply random text. Itt has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, passage.</p>
                                    <div class="page-section_about__wrapper-button"><a class="button button_default button_large button_colored-2" href="#">Read more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="page-section_about__skillbar">
                                <div class="skillbar skillbar_color-1 js-skillbar skillbar_color-1">
                                    <div class="skillbar__content"><span class="skillbar__label">Residental cleaning</span><span class="skillbar__percentage" data-skillbar-percent="60"></span></div>
                                    <div class="skillbar__progress-bar">
                                        <div class="skillbar__progress-bar-active"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-section_about__skillbar">
                                <div class="skillbar skillbar_color-1 js-skillbar skillbar_color-2">
                                    <div class="skillbar__content"><span class="skillbar__label">Office cleaning</span><span class="skillbar__percentage" data-skillbar-percent="80"></span></div>
                                    <div class="skillbar__progress-bar">
                                        <div class="skillbar__progress-bar-active"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-section_about__skillbar">
                                <div class="skillbar skillbar_color-1 js-skillbar skillbar_color-3">
                                    <div class="skillbar__content"><span class="skillbar__label">Commercial cleaning</span><span class="skillbar__percentage" data-skillbar-percent="75"></span></div>
                                    <div class="skillbar__progress-bar">
                                        <div class="skillbar__progress-bar-active"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-section_about__skillbar">
                                <div class="skillbar skillbar_color-1 js-skillbar skillbar_color-4">
                                    <div class="skillbar__content"><span class="skillbar__label">Construction cleaning</span><span class="skillbar__percentage" data-skillbar-percent="45"></span></div>
                                    <div class="skillbar__progress-bar">
                                        <div class="skillbar__progress-bar-active"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- - section ABOUT -->
        <!-- aside FACTS -->
        <aside class="page-aside page-aside_facts _background-image-4 _overlay-accent-2 js-jarallax_type_1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="page-aside_facts__counter-up">
                            <div class="counter-up"><span class="counter-up__number js-counterup">3700</span><span class="counter-up__label">Customer satisfied</span></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="page-aside_facts__counter-up">
                            <div class="counter-up"><span class="counter-up__number js-counterup">1100</span><span class="counter-up__label">Buildings cleaned</span></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="page-aside_facts__counter-up">
                            <div class="counter-up"><span class="counter-up__number js-counterup">2028</span><span class="counter-up__label">Clever employees</span></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="page-aside_facts__counter-up">
                            <div class="counter-up"><span class="counter-up__number js-counterup">32</span><span class="counter-up__label">Offices wordlwide</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- - aside FACTS -->
        <!-- section SLIDER SERVICES -->
        <section class="page-section page-section_slider-services _background-color-gray">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">We</span><span class="subline__text">Offer</span></div>
                            <h2 class="page-section__heading_multi">Our services</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section_slider-services__content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="swiper-container slider-services js-slider-services">
                                <div class="swiper-wrapper slider-services__wrapper">
                                    <div class="swiper-slide slider-services__slide"><img class="slider-services__img" src="img/projects/project1.jpg" alt=""></div>
                                    <div class="swiper-slide slider-services__slide"><img class="slider-services__img" src="img/projects/project2.jpg" alt=""></div>
                                    <div class="swiper-slide slider-services__slide"><img class="slider-services__img" src="img/projects/project3.jpg" alt=""></div>
                                    <div class="swiper-slide slider-services__slide"><img class="slider-services__img" src="img/projects/project4.jpg" alt=""></div>
                                    <div class="swiper-slide slider-services__slide"><img class="slider-services__img" src="img/projects/project5.jpg" alt=""></div>
                                    <div class="swiper-slide slider-services__slide"><img class="slider-services__img" src="img/projects/project6.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="swiper-container slider-services-controls js-slider-services-controls">
                                <div class="swiper-wrapper slider-services-controls__wrapper">
                                    <div class="swiper-slide slider-services-controls__slide">
                                        <h3 class="slider-services-controls__heading">Office cleaning</h3>
                                    </div>
                                    <div class="swiper-slide slider-services-controls__slide">
                                        <h3 class="slider-services-controls__heading">Commercial cleaning</h3>
                                    </div>
                                    <div class="swiper-slide slider-services-controls__slide">
                                        <h3 class="slider-services-controls__heading">Residental cleaning</h3>
                                    </div>
                                    <div class="swiper-slide slider-services-controls__slide">
                                        <h3 class="slider-services-controls__heading">Vehicle cleaning</h3>
                                    </div>
                                    <div class="swiper-slide slider-services-controls__slide">
                                        <h3 class="slider-services-controls__heading">Construction cleaning</h3>
                                    </div>
                                    <div class="swiper-slide slider-services-controls__slide">
                                        <h3 class="slider-services-controls__heading">Wall cleaning</h3>
                                    </div>
                                </div>
                                <div class="slider-services-controls__controls"><span class="slider-services-controls__prev"></span><span class="slider-services-controls__next"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-container"></div>
            </div>
        </section>
        <!-- - section SLIDER SERVICES -->
        <!-- section PROJECTS -->
        <section class="page-section page-section_projects page-section_projects-dark">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">Our</span><span class="subline__text">Projects</span></div>
                            <h2 class="page-section__heading_multi">Our projects</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section_projects-dark__content">
                <!-- isotope filter -->
                <div class="page-section_projects__filter">
                    <ul class="list-masonry-grid-works-filter list-masonry-grid-works-filter_inverse js-masonry-grid-works-filter">
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link list-masonry-grid-works-filter__link_active" href="#" data-filter="*">All</a></li>
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link" href="#" data-filter=".js-masonry-grid-works__item_commercial">Commercial</a></li>
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link" href="#" data-filter=".js-masonry-grid-works__item_construction">Construction</a></li>
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link" href="#" data-filter=".js-masonry-grid-works__item_residental">Residental</a></li>
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link" href="#" data-filter=".js-masonry-grid-works__item_office">Office</a></li>
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link" href="#" data-filter=".js-masonry-grid-works__item_vehicle">Vehicle</a></li>
                        <li class="list-masonry-grid-works-filter__item"><a class="list-masonry-grid-works-filter__link" href="#" data-filter=".js-masonry-grid-works__item_wall">Wall</a></li>
                    </ul>
                </div>
                <!-- - isotope filter -->
                <!-- masonry grid -->
                <div class="masonry-grid-works masonry-grid-works_fullwidth js-masonry-grid-works js-popup-gallery">
                    <div class="masonry-grid-works__sizer masonry-grid-works__sizer_w-25 js-masonry-grid-works__sizer"></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_commercial"><a class="project-link" href="img/projects/project1.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project1.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Commercial</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_construction"><a class="project-link" href="img/projects/project2.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project2.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Construction</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_residental"><a class="project-link" href="img/projects/project3.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project3.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Residental</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_office"><a class="project-link" href="img/projects/project4.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project4.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Office</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_vehicle"><a class="project-link" href="img/projects/project5.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project5.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Vehicle</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_wall"><a class="project-link" href="img/projects/project6.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project6.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Wall</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_commercial"><a class="project-link" href="img/projects/project7.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project7.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Commercial</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_commercial"><a class="project-link" href="img/projects/project8.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project8.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Commercial</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_construction"><a class="project-link" href="img/projects/project9.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project9.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Construction</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_office"><a class="project-link" href="img/projects/project10.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project10.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Office</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_vehicle"><a class="project-link" href="img/projects/project11.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project11.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Vehicle</h3>
                                </figcaption>
                            </figure></a></div>
                    <div class="masonry-grid-works__item masonry-grid-works__item_fullwidth masonry-grid-works__item_w-25 js-masonry-grid-works__item js-masonry-grid-works__item_wall"><a class="project-link" href="img/projects/project12.jpg">
                            <figure class="figure-project figure-project_dark"><img class="figure-project__img" src="img/projects/project12.jpg" alt=""><i class="figure-project__icon"></i>
                                <figcaption class="figure-project__descr">
                                    <h3 class="figure-project__heading">Wall</h3>
                                </figcaption>
                            </figure></a></div>
                    <!-- - masonry grid -->
                </div>
            </div>
        </section>
        <!-- - section PROJECTS -->
        <!-- section SLIDER TEAM -->
        <section class="page-section page-section_slider-team">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">Our</span><span class="subline__text">Team</span></div>
                            <h2 class="page-section__heading_multi">Our team</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section__content container">
                <div class="swiper-container js-slider-team slider-team">
                    <div class="swiper-wrapper slider-team__wrapper">
                        <!-- member 1 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member1.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">William Cooper</h3><span class="figure-team-member__position">Cleaner / CEO</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 1 -->
                        <!-- member 2 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member2.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Hermaan Miller</h3><span class="figure-team-member__position">Cleaner / CEO</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 2 -->
                        <!-- member 3 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member3.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Roge Tyler</h3><span class="figure-team-member__position">Cleaner</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 3 -->
                        <!-- member 4 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member4.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Ken Stephens</h3><span class="figure-team-member__position">Cleaner / Team leader</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 4 -->
                        <!-- member 5 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member5.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Ann Chovey</h3><span class="figure-team-member__position">Cleaner / CEO</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 5 -->
                        <!-- member 6 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member6.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Peg Legge</h3><span class="figure-team-member__position">Cleaner / CEO</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 6 -->
                        <!-- member 7 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member7.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Ray O'Sun</h3><span class="figure-team-member__position">Cleaner</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 7 -->
                        <!-- member 8 -->
                        <div class="swiper-slide slider-team__slide">
                            <figure class="figure-team-member js-team-member-equalheight">
                                <div class="figure-team-member__wrapper-img"><a class="figure-team-member__link" href="team-details.html"><img class="figure-team-member__img" src="img/team/member8.png" alt=""/></a></div>
                                <figcaption class="figure-team-member__wrapper-info">
                                    <div class="figure-team-member__social">
                                        <ul class="list-social list-social_large">
                                            <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                            <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <h3 class="figure-team-member__heading">Chris Anthemum</h3><span class="figure-team-member__position">Cleaner / Team leader</span>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- - member 8 -->
                    </div>
                </div><span class="slider-team__prev"></span><span class="slider-team__next"></span>
            </div>
        </section>
        <!-- - section SLIDER TEAM -->
        <!-- section TESTIMONIALS -->
        <section class="page-section page-section_testimonials page-section_testimonials-image _background-image-1 js-jarallax_type_1 _overlay-dark">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">Client</span><span class="subline__text">Say</span></div>
                            <h2 class="page-section__heading_multi _color-inverse">Our client say</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section__content">
                <div class="container">
                    <div class="swiper-container slider-testimonials-2 js-slider-testimonials-2">
                        <div class="swiper-wrapper slider-testimonials-2__wrapper">
                            <!-- testimonial 1 -->
                            <div class="swiper-slide slider-testimonials-2__slide">
                                <div class="testimonial-2">
                                    <div class="testimonial-2__content">
                                        <p class="p testimonial-2__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop Lorem Ipsum as their default model text, and a search.</p>
                                    </div>
                                    <header class="testimonial-2__header"><img class="testimonial-2__avatar" src="img/testimonials/testimonial4.jpg" alt="">
                                        <div class="testimonial-2__info">
                                            <h3 class="testimonial-2__author">Richard Johanson</h3><span class="testimonial-2__position">Developer</span>
                                            <ul class="list-social">
                                                <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                                <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                                <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                            </ul>
                                        </div>
                                    </header>
                                </div>
                            </div>
                            <!-- - testimonial 1 -->
                            <!-- testimonial 2 -->
                            <div class="swiper-slide slider-testimonials-2__slide">
                                <div class="testimonial-2">
                                    <div class="testimonial-2__content">
                                        <p class="p testimonial-2__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, passages.</p>
                                    </div>
                                    <header class="testimonial-2__header"><img class="testimonial-2__avatar" src="img/testimonials/testimonial5.jpg" alt="">
                                        <div class="testimonial-2__info">
                                            <h3 class="testimonial-2__author">Roger A. Tyler</h3><span class="testimonial-2__position">Developer</span>
                                            <ul class="list-social">
                                                <li class="list-social__item"><a class="list-social__link fa fa-facebook" href="#"></a></li>
                                                <li class="list-social__item"><a class="list-social__link fa fa-twitter" href="#"></a></li>
                                                <li class="list-social__item"><a class="list-social__link fa fa-google-plus" href="#"></a></li>
                                            </ul>
                                        </div>
                                    </header>
                                </div>
                            </div>
                            <!-- testimonial 2 -->
                        </div>
                        <div class="slider-testimonials-2__pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- - section TESTIMONIALS -->
        <!-- section PRICING -->
        <section class="page-section page-section_pricing">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">Our</span><span class="subline__text">Price</span></div>
                            <h2 class="page-section__heading_multi">Our price</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section__content">
                <div class="container">
                    <div class="row">
                        <!-- pricing table 1 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="page-section_pricing__pricing-table">
                                <div class="pricing-table">
                                    <header class="pricing-table__header">
                                        <h3 class="pricing-table__heading">Standard</h3><span class="pricing-table__price">$49.99</span><span class="pricing-table__subline">per month</span>
                                    </header>
                                    <div class="pricing-table__content">
                                        <ul class="list-pricing-features">
                                            <li class="list-pricing-features__item">Free feature one</li>
                                            <li class="list-pricing-features__item">Free feature Two</li>
                                            <li class="list-pricing-features__item">Free feature Three</li>
                                            <li class="list-pricing-features__item">Free feature Four</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__wrapper-button"><a class="button button_default button_large" href="#">Order now</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- - pricing table 1 -->
                        <!-- pricing table 2 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="page-section_pricing__pricing-table">
                                <div class="pricing-table pricing-table_featured">
                                    <header class="pricing-table__header">
                                        <h3 class="pricing-table__heading">Premium</h3><span class="pricing-table__price">$120.99</span><span class="pricing-table__subline">per month</span>
                                    </header>
                                    <div class="pricing-table__content">
                                        <ul class="list-pricing-features">
                                            <li class="list-pricing-features__item">Free feature one</li>
                                            <li class="list-pricing-features__item">Free feature Two</li>
                                            <li class="list-pricing-features__item">Free feature Three</li>
                                            <li class="list-pricing-features__item">Free feature Four</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__wrapper-button"><a class="button button_default button_large" href="#">Order now</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- - pricing table 2 -->
                        <!-- pricing table 3 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="page-section_pricing__pricing-table">
                                <div class="pricing-table">
                                    <header class="pricing-table__header">
                                        <h3 class="pricing-table__heading">Unlimited</h3><span class="pricing-table__price">$229.99</span><span class="pricing-table__subline">per month</span>
                                    </header>
                                    <div class="pricing-table__content">
                                        <ul class="list-pricing-features">
                                            <li class="list-pricing-features__item">Free feature one</li>
                                            <li class="list-pricing-features__item">Free feature Two</li>
                                            <li class="list-pricing-features__item">Free feature Three</li>
                                            <li class="list-pricing-features__item">Free feature Four</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__wrapper-button"><a class="button button_default button_large" href="#">Order now</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- - pricing table 3 -->
                    </div>
                </div>
            </div>
        </section>
        <!-- - section PRICING -->
        <!-- section NEWS 2 -->
        <section class="page-section page-section_news-2 _background-image-5 _overlay-light js-jarallax_type_1">
            <header class="page-section__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subline"><span class="subline__text">Latest</span><span class="subline__text">News</span></div>
                            <h2 class="page-section__heading_multi">Latest news</h2>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-section__content">
                <div class="container">
                    <!-- post 1 -->
                    <article class="blog-post blog-post_preview">
                        <div class="row">
                            <div class="col-md-8 blog-post__wrapper-media">
                                <div class="swiper-container slider-gallery js-slider-gallery">
                                    <div class="swiper-wrapper slider-gallery__wrapper">
                                        <!-- gallery image 1 -->
                                        <div class="swiper-slide slider-gallery__slide"><img class="slider-gallery__img" src="img/blog/fullwidth/fullwidth4.jpg" alt=""></div>
                                        <!-- - gallery image 1 -->
                                        <!-- gallery image 2 -->
                                        <div class="swiper-slide slider-gallery__slide"><img class="slider-gallery__img" src="img/blog/fullwidth/fullwidth3.jpg" alt=""></div>
                                        <!-- - gallery image 2 -->
                                        <!-- gallery image 3 -->
                                        <div class="swiper-slide slider-gallery__slide"><img class="slider-gallery__img" src="img/blog/fullwidth/fullwidth2.jpg" alt=""></div>
                                        <!-- - gallery image 3 -->
                                    </div><span class="slider-gallery__prev"></span><span class="slider-gallery__next"></span>
                                </div>
                            </div>
                            <div class="col-md-4 blog-post__wrapper-content">
                                <div class="blog-post__wrapper-info blog-post_preview__wrapper-info-no-margin">
                                    <ul class="list-post-tags">
                                        <li class="list-post-tags__item"><a class="list-post-tags__link" href="#">Kitchen</a></li>
                                        <li class="list-post-tags__item"><a class="list-post-tags__link" href="#">Wall</a></li>
                                        <li class="list-post-tags__item"><a class="list-post-tags__link" href="#">Cleaning</a></li>
                                    </ul><a class="blog-post__link" href="blog-singlepost.html">
                                        <time class="post-date-mini" datetime="2016-09-03">Sep 03 2016</time></a>
                                </div><a class="blog-post__link" href="blog-singlepost.html">
                                    <h4 class="blog-post__heading-4">Pellentesque hendrerit arcu in lacus scelerisque, at mattis nisi condimentum.</h4></a>
                                <p class="p">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and word in classical literature.</p>
                                <div class="blog-post__wrapper-button-more"><a class="button button_default button_large button_colored-2" href="blog-singlepost.html">Read more</a></div>
                            </div>
                        </div>
                    </article>
                    <!-- - post 1 -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- post 1 -->
                            <article class="blog-post blog-post_preview">
                                <div class="blog-post__wrapper-media"><a class="blog-post__link" href="blog-singlepost.html"><img class="blog-post__img" src="img/blog/preview2/preview1.jpg" alt=""></a></div>
                                <div class="blog-post__wrapper-content"><a class="blog-post__link" href="blog-singlepost.html">
                                        <h4 class="blog-post__heading-4">Pellentesque hendrerit arcu in lacus scelerisque, at mattis nisi condimentum.</h4></a></div>
                                <div class="blog-post__wrapper-info blog-post_preview__wrapper-info"><a class="blog-post__link" href="blog-singlepost.html">
                                        <time class="post-date-mini" datetime="2016-08-12">Aug 12 2016</time></a></div>
                            </article>
                            <!-- - post 1 -->
                        </div>
                        <div class="col-md-4">
                            <!-- post 2 -->
                            <article class="blog-post blog-post_preview">
                                <div class="blog-post__wrapper-media"><a class="blog-post__link" href="blog-singlepost.html"><img class="blog-post__img" src="img/blog/preview2/preview2.jpg" alt=""></a></div>
                                <div class="blog-post__wrapper-content"><a class="blog-post__link" href="blog-singlepost.html">
                                        <h4 class="blog-post__heading-4">There are many variations of passages of Lorem Ipsum available, slightly believable.</h4></a></div>
                                <div class="blog-post__wrapper-info blog-post_preview__wrapper-info"><a class="blog-post__link" href="blog-singlepost.html">
                                        <time class="post-date-mini" datetime="2016-08-08">Aug 08 2016</time></a></div>
                            </article>
                            <!-- - post 2 -->
                        </div>
                        <div class="col-md-4">
                            <!-- post 3 -->
                            <article class="blog-post blog-post_preview">
                                <div class="blog-post__wrapper-media"><a class="blog-post__link" href="blog-singlepost.html"><img class="blog-post__img" src="img/blog/preview2/preview3.jpg" alt=""></a></div>
                                <div class="blog-post__wrapper-content"><a class="blog-post__link" href="blog-singlepost.html">
                                        <h4 class="blog-post__heading-4">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</h4></a></div>
                                <div class="blog-post__wrapper-info blog-post_preview__wrapper-info"><a class="blog-post__link" href="blog-singlepost.html">
                                        <time class="post-date-mini" datetime="2016-07-11">July 11 2016</time></a></div>
                            </article>
                            <!-- - post 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- - section NEWS 2-->
        <!-- aside BANNERS -->
        <aside class="page-aside page-aside_banners"><a class="page-aside_banners__banner _background-image-8 _overlay-dark" href="services.html">
                <h2 class="banner-heading">20%</h2><span class="banner-subheading">discount on office cleaning</span></a><a class="page-aside_banners__banner _background-image-1 _overlay-dark" href="contacts.html">
                <div class="button button_banner">Contact us</div></a></aside>
        <!-- - aside BANNERS -->
        <!-- aside BRANDS -->
        <aside class="page-aside page-aside_brands _background-color-dark">
            <div class="container">
                <div class="page-aside_brands__content">
                    <!-- brand 1 -->
                    <div class="brand"><img class="brand__logo" src="img/logos/logo1.png" alt=""></div>
                    <!-- - brand 1 -->
                    <!-- brand 2 -->
                    <div class="brand"><img class="brand__logo" src="img/logos/logo2.png" alt=""></div>
                    <!-- - brand 2 -->
                    <!-- brand 3 -->
                    <div class="brand"><img class="brand__logo" src="img/logos/logo3.png" alt=""></div>
                    <!-- - brand 3 -->
                    <!-- brand 4 -->
                    <div class="brand"><img class="brand__logo" src="img/logos/logo4.png" alt=""></div>
                    <!-- - brand 4 -->
                    <!-- brand 5 -->
                    <div class="brand"><img class="brand__logo" src="img/logos/logo5.png" alt=""></div>
                    <!-- - brand 5 -->
                </div>
            </div>
        </aside>
        <!-- - aside BRANDS -->
        <!-- section CONTACTS -->
        <section class="page-section page-section_contacts _background-image-6 _overlay-dark js-jarallax_type_1">
            <div class="contacts-map" id="js-google-map-contacts"></div>
            <div class="page-section_contacts__content">
                <div class="container">
                    <div class="contact-info">
                        <div class="contact-info__content">
                            <div class="contact-info__logo"><a class="site-logo" href="home-02.html"><img class="site-logo__img" src="img/logo4.png" alt="Cleaner HTML Template"></a></div>
                            <p class="p _color-inverse">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.the release of.</p>
                        </div>
                        <div class="contact-info__form">
                            <header class="page-section_contacts__header">
                                <h2 class="page-section_contacts__heading">Contact us</h2>
                            </header>
                            <form class="form form_contact" action="home-02.html" method="GET">
                                <div class="form-control form_contact__control">
                                    <input class="form-control__input form_contact__control-input" type="text" placeholder="Name">
                                </div>
                                <div class="form-control form_contact__control">
                                    <input class="form-control__input form_contact__control-input" type="email" placeholder="Email">
                                </div>
                                <div class="form-control form_contact__control">
                                    <input class="form-control__input form_contact__control-input" type="text" placeholder="Subject">
                                </div>
                                <div class="form-control form_contact__control">
                                    <textarea class="form-control__input form_contact__control-input form_contact__control-textarea form-control__textarea" placeholder="Message"></textarea>
                                </div>
                                <div class="form__wrapper-submit form_contact__wrapper-submit"><a class="form__submit-button button button_default button_large button_inverse" href="#">Send Message</a></div>
                            </form>
                        </div>
                        <div class="contact-info__content">
                            <ul class="list-contacts-2">
                                <li class="list-contacts-2__item">
                                    <div class="contact">
                                        <div class="contact__wrapper-icon"><i class="contact__icon fa fa-map-marker"></i></div>
                                        <div class="contact__wrapper-content">
                                            <h3 class="contact__heading">Address</h3><span class="contact__label">795 Folsom Ave, San Francisco</span><span class="contact__label">NY 20001</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-contacts-2__item">
                                    <div class="contact">
                                        <div class="contact__wrapper-icon"><i class="contact__icon fa fa-phone"></i></div>
                                        <div class="contact__wrapper-content">
                                            <h3 class="contact__heading">Phone</h3><span class="contact__label">+(067) 123 456 789</span><span class="contact__label">+(067) 123 456 789</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-contacts-2__item">
                                    <div class="contact">
                                        <div class="contact__wrapper-icon"><i class="contact__icon fa fa-envelope"></i></div>
                                        <div class="contact__wrapper-content">
                                            <h3 class="contact__heading">Email</h3><span class="contact__label">info@cleaner.in</span><span class="contact__label">inquiry@cleaner.in</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- - section CONTACTS -->
    </main>
    <!-- - PAGE MAIN -->

    <a class="scroll-to-top" id="js-scroll-to-top" href="#"></a>

    @include('parts.footer')

    <!-- Scripts -->
    {{--<script src="/js/app.js"></script>--}}
    <script src="js/modernizr.custom.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/jquery.easeScroll.js"></script>
    <script src="js/jquery.equalheights.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/ion.tabs.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.accordion.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/maplace.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3gFKhVywUkygSxQEBdGVrI5-ZRrdjueA"></script>
    <script src="js/common.js"></script>
</body>
</html>
