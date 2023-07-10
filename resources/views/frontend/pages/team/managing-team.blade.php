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
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/frontend/img/page-header/page-header-background-transparent-2.jpg);">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-12 font-weight-semibold">Rencontrez notre équipe dirigeante</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Accueil</a></li>
                            <li class="active">Equipe</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Jules Berlin NDJEUGA</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Promoteur et Président</p>
                    </div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Jules Berlin NDJEUGA, véritable passionné de football, est un banquier de formation (en Italie) et de profession (directeur dans une banque de la place).</p>
                    <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-modern btn-dark mt-3">Contactez Nous</a>
{{--                            <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>--}}
                        </div>
                        <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                            <strong class="text-uppercase text-1 me-3 text-dark">Suivez moi</strong>
                            <ul class="social-icons float-lg-end">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img src="/frontend/img/team/team-2.jpeg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
                    <img src="/frontend/img/team/team-1.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Pâtes linguines</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Responsable juridique</p>
                    </div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Chargé d'assurer la conformité aux réglementations sportives, aux exigences fédérales, étatiques et locales, ainsi qu'aux règles des ligues et des associations sportives. Cela peut inclure la gestion des licences, des certifications, des permis et des enregistrements nécessaires pour l'académie.</p>
                    <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-modern btn-dark mt-3">Contactez Nous</a>

                        </div>
                        <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                            <strong class="text-uppercase text-1 me-3 text-dark">suivez moi</strong>
                            <ul class="social-icons float-lg-end">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 order-2">
                    <div class="overflow-hidden">
                        <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">BIADOU Darling épouse MELINGUI</h2>
                    </div>
                    <div class="overflow-hidden mb-3">
                        <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Chargé de communication</p>
                    </div>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Élaborer une stratégie de communication globale en alignement avec les objectifs et les valeurs de l'organisation. Identifier les publics cibles et définir les messages clés à transmettre.</p>
                    <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-modern btn-dark mt-3">Contactez Nous</a>
                        </div>
                        <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                            <strong class="text-uppercase text-1 me-3 text-dark">Suivez Moi</strong>
                            <ul class="social-icons float-lg-end">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                    <img src="/frontend/img/team/team-3.jpeg" class="img-fluid" alt="">
                </div>
            </div>

        </div>

        <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-normal text-6 mb-0"><strong class="font-weight-extra-bold">VOGE FOOTBALL ACADEMY</strong> vous ouvre ses portes. Les inscriptions sont ouvertes pour la nouvelle année 2023. Venez réaliser votre rêve avec nous.</h2>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Inscrivez-vous</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
