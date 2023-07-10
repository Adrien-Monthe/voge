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
        <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-5" style="background-image: url(img/page-header/page-header-background.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1>Our <strong>Team</strong></h1>
                        <span class="sub-title">We are proud to introduce you to our team.</span>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block text-md-end">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="team" data-option-key="filter">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
                <li class="nav-item" data-option-value=".leadership"><a class="nav-link text-2-5 text-uppercase" href="#">Leadership</a></li>
                <li class="nav-item" data-option-value=".marketing"><a class="nav-link text-2-5 text-uppercase" href="#">Marketing</a></li>
                <li class="nav-item" data-option-value=".development"><a class="nav-link text-2-5 text-uppercase" href="#">Development</a></li>
                <li class="nav-item" data-option-value=".design"><a class="nav-link text-2-5 text-uppercase" href="#">Design</a></li>
            </ul>

            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                <div class="row team-list sort-destination" data-sort-id="team">
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item leadership">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-1.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">John Doe</span>
												<span class="thumb-info-type">CEO</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-2.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Jessica Doe</span>
												<span class="thumb-info-type">Marketing</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a href="http://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-3.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Rick Edward Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item design">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-4.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Melinda Doe</span>
												<span class="thumb-info-type">Design</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-5.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Robert Doe</span>
												<span class="thumb-info-type">Design</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item marketing">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-6.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Melissa Doe</span>
												<span class="thumb-info-type">Marketing</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-7.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Janice Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item development">
								<span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
									<span class="thumb-info-wrapper">
										<a href="about-me.html">
											<img src="img/team/team-8.jpg" class="img-fluid" alt="">
											<span class="thumb-info-title">
												<span class="thumb-info-inner">Jerry Doe</span>
												<span class="thumb-info-type">Developer</span>
											</span>
										</a>
									</span>
									<span class="thumb-info-caption">
										<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
										<span class="thumb-info-social-icons mb-4">
											<a target="_blank" href="http://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
											<a href="http://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a>
											<a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
										</span>
									</span>
								</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
