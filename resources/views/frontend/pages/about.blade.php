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
                        <p>Nous aspirons à former des joueurs de football complets. Nous mettons l'accent sur le développement des compétences techniques, tactiques, physiques et mentales afin de produire des joueurs polyvalents, intelligents et créatifs sur le terrain.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">Pourquoi VOGE FA</h3>
                        <p>Voge FA est engagée à offrir une formation de haute qualité aux jeunes joueurs. Nos entraîneurs expérimentés et passionnés mettent l'accent sur le développement complet des joueurs, en se concentrant sur les aspects techniques, tactiques, physiques et mentaux du jeu.</p>
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
                        <label class="text-4 mt-1 text-color-light">Joueurs</label>
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
                    <h2 class="text-color-dark font-weight-normal text-6 mb-2">Qui <strong class="font-weight-extra-bold">sommes nous</strong></h2>
                    <p class="lead">VOGE FOOTBALL ACADEMY en abrégé VFA a été créé le 04 novembre 2022 sous forme associative pour une durée illimitée.</p>
                    <p class="pe-5 me-5">Son promoteur en la personne de Jules Berlin NDJEUGA, véritable passionné de football, est un banquier de formation (en Italie) et de profession (directeur dans une banque de la place).</p>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;">
                    <img src="/frontend/img/slides/_MG_5591.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
                    <img src="/frontend/img/slides/_MG_5639.jpg" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
                    <img src="/frontend/img/slides/_MG_5649.jpg" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
                </div>
            </div>
        </div>
    </section>

    <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
        <div class="row pt-5 pb-4 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
                <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-1.jpeg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Pates Linguines</h3>
                        <p class="text-2 mb-0">Responsable Juridique</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-2.jpeg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jules Berlin NDJEUGA</h3>
                        <p class="text-2 mb-0">Promoteur et Président</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="/frontend/img/team/team-3.jpeg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">BIADOU Darling épouse MELINGUI</h3>
                        <p class="text-2 mb-0">Chargé de communication</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Notre <strong class="font-weight-extra-bold">Equipe Dirigeante</strong></h2>
                <p class="lead">"Rêver Grand c'est permis, mais le travail acharné et la discipline constituent la clé du succès."</p>
            </div>
        </div>
    </div>

    @include('frontend.layouts.recent-blogs-section')

@endsection
