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
                        <h1 class="text-dark font-weight-bold text-8">Les Dernières Nouvelles sur VOGE FC : </h1>
                        <span class="sub-title text-dark">Suivez les Performances de Notre Équipe !</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="#">Accueil</a></li>
                            <li class="active">Actualitées</li>
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
                            @foreach($categories as $category)
                                <li class="nav-item"><a class="nav-link" href="#">{{ $category->name }} ({{ sizeof($category->blogs) }})</a></li>
                            @endforeach

                        </ul>
                        <div class="tabs tabs-dark mb-4 pb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
                                <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
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
                        <h5 class="font-weight-semi-bold pt-4">Un Projet Ambitieux</h5>
                        <p>Une team unique et complémentaire, liée par la passion du football porte ce projet, qui au-delà, s’engage sur la formation professionnelle et humaine des jeunes, en leur proposant également une ouverture sur le monde. </p>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="blog-posts">

                        @php
                            $counter = 0;
                        @endphp

                        @foreach($blogs as $blog)
                            @if ($counter % 3 === 0)
                                <div class="row px-3">
                                    @endif

                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <article class="post post-medium border-0 pb-0 mb-5">
                                            <div class="post-image">
                                                <a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">
                                                    <img src="{{ asset($blog->image_path) }}" style="width: 100%; height: 200px; object-fit: cover;" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $blog->title }}" />
                                                </a>
                                            </div>

                                            <div class="post-content">

                                                <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">{{ $blog->title }}</a></h2>
                                                <p>{{ $blog->short_description }}</p>

                                                <div class="post-meta">
                                                    <span><i class="far fa-user"></i> By <a href="#">{{ $blog->author }}</a> </span>
                                                    <span><i class="far fa-folder"></i> <a href="#">{{ $blog->category->name }}</a></span>
                                                    <span><i class="far fa-comments"></i> <a href="#">{{ sizeof($blog->comments) }} Commentaires</a></span>
                                                    <span class="d-block mt-2"><a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}" class="btn btn-xs btn-light text-1 text-uppercase">Plus</a></span>
                                                </div>

                                            </div>
                                        </article>
                                    </div>

                                    @if (($counter + 1) % 3 === 0 || $loop->last)
                                </div>
                            @endif

                            @php
                                $counter++;
                            @endphp
                        @endforeach


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
