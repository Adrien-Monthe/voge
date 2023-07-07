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

    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/frontend/img/page-header/1.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">Apropos de VOGE FA</h1>
                    <span class="sub-title">Relevez le défi, devenez un joueur exceptionnel !</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Accueil</a></li>
                        <li class="active">A Propos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row pt-5">
            <div class="col">

                <div class="row text-center pb-5">
                    <div class="col-md-9 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                <span>VOGE FA, Nos Valeurs sont : </span>
                                <span class="word-rotator-words bg-primary">
												<b class="is-visible">Respect</b>
												<b>Tolérance</b>
												<b>Solidarité</b>
                                                <b>Plaisir</b>
                                                <b>Engagement</b>
											</span>
                                <span> </span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                VOGE FA prône des valeurs morales et éthiques. Les joueurs, les dirigeants et le personnel administratif et sportif s’engagent à s’y conformer, qu’ils soient hommes ou femmes.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">Notre Mission</h3>
                        <p>Nous offrons une formation de football de haute qualité dispensée par des entraîneurs expérimentés et passionnés. Nous mettons l'accent sur le développement des compétences techniques, tactiques, physiques et mentales nécessaires pour exceller sur le terrain.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <h3 class="font-weight-bold text-4 mb-2">Notre Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">Pourquoi VOGE FA</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante nulla hendrerit arcu.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
        <div class="container">
            <div class="row counters counters-sm pb-4 pt-3">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <i class="icons icon-user text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="45000" data-append="+">0</strong>
                        <label class="text-4 mt-1 text-color-light">Happy Clients</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <i class="icons icon-badge text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="15">0</strong>
                        <label class="text-4 mt-1 text-color-light">Years In Business</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <i class="icons icon-graph text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="178">0</strong>
                        <label class="text-4 mt-1 text-color-light">High Score</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <i class="icons icon-cup text-color-light"></i>
                        <strong class="text-color-light font-weight-extra-bold" data-to="352">0</strong>
                        <label class="text-4 mt-1 text-color-light">Cups of Coffee</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc. </p>
                    <p class="pe-5 me-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
                    <img src="/frontend/img/generic/generic-corporate-3-1.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="/frontend/img/generic/generic-corporate-3-2.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="/frontend/img/generic/generic-corporate-3-3.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
        <div class="row pt-5 pb-4 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
                <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-1.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                        <p class="text-2 mb-0">CEO</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-2.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                        <p class="text-2 mb-0">CEO</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-3.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                        <p class="text-2 mb-0">DEVELOPER</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-4.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                        <p class="text-2 mb-0">SEO ANALYST</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-5.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                        <p class="text-2 mb-0">DESIGNER</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
            </div>
        </div>
    </div>

    <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
        <div class="container pb-2">
            <div class="row">
                <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                    <div class="row justify-content-center my-5">
                        <div class="col-8 text-center col-md-4">
                            <img src="/frontend/img/logos/logo-1.png" class="img-fluid hover-effect-3" alt="" />
                        </div>
                        <div class="col-8 text-center col-md-4 my-3 my-md-0">
                            <img src="/frontend/img/logos/logo-2.png" class="img-fluid hover-effect-3" alt="" />
                        </div>
                        <div class="col-8 text-center col-md-4">
                            <img src="/frontend/img/logos/logo-3.png" class="img-fluid hover-effect-3" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                <div class="testimonial-author">
                                    <img src="/frontend/img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                <div class="testimonial-author">
                                    <img src="/frontend/img/clients/client-1.jpg" class="img-fluid rounded-circle mb-0" alt="">
                                </div>
                                <blockquote>
                                    <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.layouts.recent-blogs-section')

@endsection
