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
        <section class="page-header page-header-modern page-header-background page-header-background-lg overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/frontend/img/page-header/page-header-background-transparent.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1>Extra <strong>Scroll to Content</strong></h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Features</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-header-extra-button text-center">
                <a href="#main" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary btn-rounded-icon"><i class="fas fa-arrow-down"></i></a>
            </div>
        </section>
    </div>
@endsection
