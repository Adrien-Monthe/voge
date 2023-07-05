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
@endsection
