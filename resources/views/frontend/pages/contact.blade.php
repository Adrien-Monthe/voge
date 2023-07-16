@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('frontend/images/Logo/ln_logo_3.png')}}"/>
    <meta property="og:description"
          content="Luvnation est une agence de Gestion de carrière footballistique et organisateur d'évènements sportifs"/>
    <meta property="og:keywords"
          content="Évènement sportif, Football, sport, Joueurs, Internationales, Famille, Douala, club de sport, 2 0, santé, Foot"/>

    <meta property="og:url" content="{{ route('contact', app()->getLocale() ) }}"/>

    <meta property="og:title" content="Luvnation Football Agency"/>

@endsection

@section('page-title', __('contact.page-title'))


@section('content')

    <div role="main" class="main">

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0">Contactez Nous</h2>
                    <p class="mb-4">Réveillez le champion qui sommeille en vous.</p>

                    <form class="contact-form" action="" method="POST">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Votre message a été transmis
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> Nous n'avons pas pu envoyer votre message
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Votre noms</label>
                                <input type="text" value="" data-msg-required="Entrez votre noms." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Courriel</label>
                                <input type="email" value="" data-msg-required="Votre adresse Email." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Objet</label>
                                <input type="text" value="" data-msg-required="L'objet de votre message" maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Votre message" rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Envoyez" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Nos <strong>Locaux</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Adress:</strong> Douala, Complexe Multisport de Kotto</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (+237) 691 180 397</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:contact@vogefootballacademy.com">contact@vogefootballacademy.com</a></li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5"><strong>Horraires</strong> D'ouverture</h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Lundi - Vendredi - 8:00 à 20:00</li>
                            <li><i class="far fa-clock top-6"></i> Samedi - 9:00 à 14:00</li>
                            <li><i class="far fa-clock top-6"></i> Dimanche - Fermé</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Visitez <strong>L'academie</strong></h4>
                    <p class="lead mb-0 text-4">Une team unique et complémentaire, liée par la passion du football porte ce projet, qui au-delà, s’engage sur la formation professionnelle et humaine des jeunes, en leur proposant également une ouverture sur le monde. </p>

                </div>

            </div>

        </div>

    </div>

    {{--<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
                    <div class="call-to-action-content">
                        <h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
                        <p class="mb-0">The Best HTML Site Template on ThemeForest</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="call-to-action-btn">
                        <a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class=" border-0 m-0" id="start">
        <div class="container py-5 mb-3">
            <div class="row">
                <div class="col text-center">

                    <div class="divider divider-small divider-small-lg mt-0 text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <hr class="bg-primary border-radius m-auto">
                    </div>
                    <div class="overflow-hidden mb-1">
                        <h3 class="font-weight-semi-bold text-color-grey text-uppercase positive-ls-3 text-4 line-height-2 line-height-sm-7 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Rejoignez Nous</h3>
                    </div>
                    <h2 class="text-color-dark font-weight-bold text-8 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Vous voulez vivre votre passion du Football ?</h2>

                </div>
            </div>
            <div class="row pt-4 pb-4">
                <div class="col-lg-6 pt-5 mb-5 pt-lg-0 mt-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <p class="font-weight-medium text-4-5 line-height-5">VOGE FOOTBALL ACADEMY vous ouvre ses portes. Les inscriptions sont ouvertes pour la nouvelle année 2023. Venez réaliser votre rêve avec nous.</p>


                        <ul class="list list-icons list-icons-style-2 list-icons-lg">
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Intégrez une equipe de joueurs talentueux
                            </li>
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Faites vous former par les meilleurs
                            </li>
                            <li class="line-height-9 text-3-5 mb-1">
                                <i class="fas fa-check border-width-2 text-3"></i>Donnez le meilleur de vous même
                            </li>
                        </ul>
                    </div>

                    <div class="d-block pt-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        <a href="#" class="btn btn-modern btn-primary btn-arrow-effect-1 text-capitalize text-2-5 px-5 py-3 anim-hover-translate-top-5px transition-2ms">Constituez votre dossier d'inscription <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center p-relative ">


                    <div class="appear-animation custom-element-wrapper custom-element-11 p-relative " data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <img class="img-fluid" src="/frontend/img/home/7.jpeg" alt="">
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
