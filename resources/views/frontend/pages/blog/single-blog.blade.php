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

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-dark font-weight-bold text-8">{{ $blog->title }}</h1>
                        <span class="sub-title text-dark">Les Dernières Nouvelles sur VOGE FA !</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="#">Accueil</a></li>
                            <li class="active">{{ $blog->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar">

                        <h5 class="font-weight-semi-bold pt-4">Categories</h5>
                        <ul class="nav nav-list flex-column mb-5">
                            @foreach($categories as $category)
                                <li class="nav-item"><a class="nav-link" href="#">{{ $category->name }} ({{ sizeof($category->blogs) }})</a></li>
                            @endforeach

                        </ul>
                        <div class="tabs tabs-dark mb-4 pb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Populaires</a></li>
                                <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Récents</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="popularPosts">
                                    <ul class="simple-post-list">
                                        @foreach($popular_blogs as $blog)
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                        <a href="#">
                                                            <img src="{{ asset($blog->image_path) }}" width="50" height="50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="#">{{ $blog->title }}</a>
                                                    <div class="post-meta">
                                                        Nov 10, 2022
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="tab-pane" id="recentPosts">
                                    <ul class="simple-post-list">
                                        @foreach($recent_blogs as $blog)
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                        <a href="#">
                                                            <img src="{{ asset($blog->image_path) }}" width="50" height="50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="#">{{ $blog->title }}</a>
                                                    <div class="post-meta">
                                                        Nov 10, 2022
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-weight-semi-bold pt-4">Nos valeurs</h5>
                        <p>VFA prône des valeurs morales et éthiques. Les joueurs, les dirigeants et le personnel administratif et sportif s’engagent à s’y conformer, qu’ils soient hommes ou femmes. </p>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <a href="#">
                                    <img src="{{ asset($blog->image_path) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>

                            <div class="post-date ms-0">
                                <span class="day">{{ Carbon::parse($blog->created_at)->day }}</span>
                                <span class="month">{{ Carbon::parse($blog->created_at)->format('M') }}</span>
                            </div>

                            <div class="post-content ms-0">

                                <h2 class="font-weight-semi-bold"><a href="">{{ $blog->title }}</a></h2>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> Par <a href="#">{{ $blog->author }}</a> </span>
                                    <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>

                                <p>{{ $blog->short_description }}</p>
                                {!! $blog->description !!}



                                <div class="post-block mt-4 pt-2 post-author">
                                    <h4 class="mb-3">Auteur</h4>
                                    <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                        <a href="#">
                                            <img src="/frontend/img/avatars/avatar.jpg" alt="">
                                        </a>
                                    </div>
                                    <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">{{ $blog->author }}</a></strong></p>
                                    <p> </p>
                                </div>
                                {{--<div id="comments" class="post-block mt-5 post-comments">
                                    <h4 class="mb-3">Comments (3)</h4>

                                    <ul class="comments">
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt="" src="/frontend/img/avatars/avatar.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt="" src="/frontend/img/avatars/avatar.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <div class="post-block mt-5 post-leave-comment">
                                    <h4 class="mb-3">Laissez un commentaire</h4>

                                    <form class="contact-form p-4 rounded bg-color-grey" action="https://www.okler.net/previews/porto/9.9.3/php/contact-form.php" method="POST">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Full Name</label>
                                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Email Address</label>
                                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="form-label required font-weight-bold text-dark">Comment</label>
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col mb-0">
                                                    <input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}

                            </div>
                        </article>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
