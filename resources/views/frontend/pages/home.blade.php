@php use Carbon\Carbon; @endphp
@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('frontend/images/Logo/ln_logo_3.png')}}"/>
    <meta property="og:description"
          content="Luvnation est une agence de Gestion de carrière footballistique et organisateur d'évènements sportifs"/>
    <meta property="og:keywords"
          content="Évènement sportif, Football, sport, Joueurs, Internationales, Famille, Douala, club de sport, 2 0, santé, Foot"/>

    <meta property="og:url" content="{{ route('home', app()->getLocale() ) }}"/>

    <meta property="og:title" content="Luvnation Football Agency"/>

@endsection

@section('page-title', __('home.page-title'))

@section('content')

    <div role="main" class="main">
        <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['670px','670px','670px','550px','500px']" style="height: 670px;">
            <div class="owl-stage-outer">
                <div class="owl-stage">

                    <!-- Carousel Slide 1 -->
                    <div class="owl-item position-relative" style="background-image: url(/frontend/img/slides/_MG_5625.jpg); background-color: #2E3136; background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-1 h-100">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
											<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
												<img src="/frontend/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
											</span>
                                    RÊVER <span class="position-relative">GRAND <span class="position-absolute left-50pct transform3dx-n50 top-0 mt-4"><img src="/frontend/img/slides/slide-blue-line.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" /></span></span>
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
												<img src="/frontend/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
											</span>
                                </h3>
                                <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">VOGE FOOTBALL ACADEMY</h1>
                                <p class="text-4 text-color-light font-weight-light opacity-7 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0}"></p>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 2 -->
                    <div class="owl-item position-relative overlay overlay-show overlay-op-8 lazyload" data-bg-src="/frontend/img/slides/_MG_5714.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="/frontend/img/lazy.png" data-src="/frontend/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
                                            PLUS QU'UNE EQUIPE, UNE FAMILLE
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="/frontend/img/lazy.png" data-src="/frontend/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
                                        </h3>
                                        <h1 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">VOGE FC</h1>
                                        <p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Rêver Grand c'est permis, mais le Travail acharné et la Discipline constituent la clé du succès.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Slide 3 -->
                    <div class="owl-item position-relative overlay overlay-color-primary overlay-show overlay-op-8 lazyload" data-bg-src="/frontend/img/slides/_MG_5639.jpg" style="background-size: cover; background-position: center;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column align-items-center">
                                        <h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorter" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="/frontend/img/lazy.png" data-src="/frontend/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
                                            WE CREATE DESIGNS, WE ARE
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="/frontend/img/lazy.png" data-src="/frontend/img/slides/slide-title-border.png" class="w-auto appear-animation lazyload" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'imgFluid': false, 'minWindowWidth': 0}" alt="" />
													</span>
                                        </h3>
                                        <h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 300, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">VOGE FC</h2>
                                        <p class="text-4 text-color-light font-weight-light text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">BIENVENU CHEZ VOGE FOOTBALL ACADEMY</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"></button>
                <button type="button" role="presentation" class="owl-next"></button>
            </div>
            <div class="owl-dots mb-5">
                <button role="button" class="owl-dot active"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>

        <div class="home-intro bg-primary" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>
                            Découvrez le club de football qui nourrit vos rêves et fait grandir votre <span class="highlighted-word">Passion</span>
                            <span>Rejoignez nous et devenez les champions de demain !</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Contactez Nous</a>
                            <div class="learn-more">or <a href="#">En savoir Plus.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="row text-center pt-3">
                <div class="col-md-10 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        <span>BIENVENU CHEZ VOGE FOOTBALL ACADEMY </span>
                    </h1>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        VOGE FOOTBALL ACADEMY en abrégé VOGE a été créé le 04 novembre 2022 sous forme associative pour une durée illimitée.
                    </p>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        VOGE FOOTBALL ACADEMY, école de football alliant « passion et formation », permet à des jeunes footballeurs passionnés de construire un projet de vie avec insertion dans des clubs de football professionnels, amateurs, au Cameroun, en Afrique ou en Europe.
                    </p>
                </div>
            </div>

        </div>

        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
            <div class="home-concept mt-5">
                <div class="container">

                    <div class="row text-center">
                        <span class="sun"></span>
                        <span class="cloud"></span>
                        <div class="col-lg-2 ms-lg-auto">
                            <div class="process-image">
                                <img src="/frontend/img/home/1.jpg" alt="" />
                                <strong>Respect</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image process-image-on-middle">
                                <img src="/frontend/img/home/2.jpg" alt="" />
                                <strong>Tolérance</strong>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="process-image">
                                <img src="/frontend/img/home/3.jpg" alt="" />
                                <strong>Solidarité</strong>
                            </div>
                        </div>
                        <div class="col-lg-4 ms-lg-auto">
                            <div class="project-image">
                                <div id="fcSlideshow" class="fc-slideshow">
                                    <ul class="fc-slides">
                                        <li><a href="#"><img class="img-fluid" src="/frontend/img/home/6.jpg" alt="" /></a></li>
                                        <li><a href="#"><img class="img-fluid" src="/frontend/img/home/5.jpg" alt="" /></a></li>
                                        <li><a href="#"><img class="img-fluid" src="/frontend/img/home/4.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                                <strong class="our-work">Engagement</strong>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="section  border-0 m-0 pb-3">
            <h1 class="word-rotator text-center slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                <span style="color: #2B378B">ACTUALITÉS SUR VFA </span>
            </h1>
            <div class="container container-xl-custom">
                <div class="row pb-1">
                    @foreach($recent_blogs as $blog)
                        <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                            <a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">
                                <article>
                                    <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                        <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                            <img src="{{ asset($blog->image_path) }}" style="height: 250px; object-fit: cover" class="img-fluid" alt="">
                                            <div class="thumb-info-title bg-transparent p-4">
                                                <div class="thumb-info-type bg-color-primary px-2 mb-1">{{ $blog->category->name }}</div>
                                                <div class="thumb-info-inner mt-1">
                                                    <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">{{ $blog->title }}</h2>
                                                </div>
                                                <div class="thumb-info-show-more-content">
                                                    <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">{{ $blog->short_description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

    </div>
@endsection
