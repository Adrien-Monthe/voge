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
                        <h1 class="text-dark font-weight-bold text-8">Grid Left Sidebar</h1>
                        <span class="sub-title text-dark">Check out our Latest News!</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class=" py-4" style="margin-right: 5%; margin-left: 5%">

            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar">

                        <h5 class="font-weight-semi-bold pt-4">Categories</h5>
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Photos (4)</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
                        </ul>
                        <div class="tabs tabs-dark mb-4 pb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
                                <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="popularPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="#">
                                                        <img src="/frontend/img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">Nullam Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2022
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="#">
                                                        <img src="/frontend/img/blog/square/blog-24.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2022
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="#">
                                                        <img src="/frontend/img/blog/square/blog-42.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">Odiosters Nullam Vitae</a>
                                                <div class="post-meta">
                                                    Nov 10, 2022
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="recentPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="#">
                                                        <img src="/frontend/img/blog/square/blog-24.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2022
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="#">
                                                        <img src="/frontend/img/blog/square/blog-42.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">Odiosters Nullam Vitae</a>
                                                <div class="post-meta">
                                                    Nov 10, 2022
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="#">
                                                        <img src="/frontend/img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="#">Nullam Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2022
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-weight-semi-bold pt-4">About Us</h5>
                        <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="blog-posts">

                        <div class="row px-3">

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">Amazing Mountain</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-2.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">Creative Business</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-3.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">Unlimited Ways</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-4.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">Developer Life</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Jessica Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-5.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">The Blue Sky</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-6.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">Night Life</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-7.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">Another World Perspective</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="#">
                                            <img src="/frontend/img/blog/medium/blog-8.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">The Creative Team</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="#" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <ul class="pagination float-end">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
