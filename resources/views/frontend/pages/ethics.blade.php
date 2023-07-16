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
    <style>
        li{
            margin-bottom: 10px;
            text-align: justify;
        }
        p{
            text-align: justify;
        }
    </style>

    <div role="main" class="main">
        <section class="page-header page-header-modern page-header-background page-header-background-lg overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(/frontend/img/slides/5.jpeg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1><strong>Notre code éthique</strong></h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb breadcrumb-light d-block text-center">
                            <li><a href="#">Accueil</a></li>
                            <li class="active">Ethique</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-header-extra-button text-center">
                <a href="#main" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary btn-rounded-icon"><i class="fas fa-arrow-down"></i></a>
            </div>
        </section>

        <div class="container" id="main">

            <div class="row">
                <div class="col">
                    <p  class="drop-caps" style="font-size: 18px">Toute personne faisant partie de l’académie VOGE FOOTBALL ACADEMY en abrégée « V.F.A » est tenue de se conformer aux prescriptions ci-dessous qui complètent le règlement intérieur.</p>
                    <p style="font-size: 18px">Ces mesures visent à établir un climat saint et harmonieux au sein de l’académie afin que les conditions soient réunies pour que nous puissions réaliser des performances qui marquent l’histoire de notre sport et plus précisément du football camerounais.</p>
                    <img class="float-start img-fluid" style="max-width: 200px; object-fit: cover; margin-right: 20px" src="/frontend/img/slides/_MG_5700.jpg" alt="Device">
                    <p style="font-size: 18px">Elles mettent également en évidence le fait que notre académie veille non seulement à :</p>
                    <ul>
                        <li style="font-size: 18px">Promouvoir sa bonne organisation,</li>
                        <li style="font-size: 18px">Mettre en valeur et en lumière les talents de ses joueurs,</li>
                        <li style="font-size: 18px">Mais également à inculquer à ces derniers des valeurs qui leurs permettront d’avoir de très fortes chances de réussir dans la vie active peu importe le métier qu’ils auront choisi d’exercer.</li>
                    </ul>
                    <br>
                    <p style="font-size: 18px" >Elles se déclinent en articles que nous vous invitons à prendre connaissances dans les lignes qui suivent :</p>
                    <ul>
                        <li style="font-size: 18px"><strong>Article 01</strong>: la consommation d’alcool et le tabac est strictement proscrite</li>
                        <li style="font-size: 18px"><strong>Article 02</strong>: la fréquentation des boites de nuit et débits de boissons est interdite</li>
                        <li style="font-size: 18px"><strong>Article 03</strong>: Aucune coiffure autre que le crâne rasée est autorisée.</li>
                        <li style="font-size: 18px"><strong>Article 04</strong>: l’acte de vol n’est ni admis ni toléré quel que soit la nature et la valeur de l’objet volé</li>
                        <li style="font-size: 18px"><strong>Article 05</strong>: Les bagarres pendant les entrainements et les matchs sont strictement interdites</li>
                        <li style="font-size: 18px"><strong>Article 06</strong>: Les injures sont interdites</li>
                        <li style="font-size: 18px"><strong>Article 07</strong>: Les écarts de comportement envers les membres du staff technique et de l’équipe dirigeante sont strictement interdits</li>
                        <li style="font-size: 18px"><strong>Article 08</strong>: Les écarts de comportement envers les parents et/ou tuteurs sont strictement interdits</li>
                        <li style="font-size: 18px"><strong>Article 09</strong>: L’homosexualité est rigoureusement proscrite</li>
                        <li style="font-size: 18px"><strong>Article 10</strong>: Aucun joueur n’est autorisé à avoir plus d’une copine</li>
                        <li style="font-size: 18px"><strong>Article 11</strong>: les joueurs doivent toujours être en tenue correcte et responsable.</li>
                        <li style="font-size: 18px"><strong>Article 12</strong>: les joueurs sont tenus de se conformer aux exigences de politesse et de respect</li>
                        <li style="font-size: 18px"><strong>Article 13</strong>: le retard toléré aux entrainements et aux matchs est de quinze (15) minutes</li>
                        <li style="font-size: 18px"><strong>Article 14</strong>: la propreté est obligatoire pour tous sans exception aucune</li>
                        <li style="font-size: 18px"><strong>Article 15</strong>: la confidentialité et la promotion de l’image de l’académie est une prescription non négociable pour tout membre de notre académie.</li>
                    </ul>
                    <p style="font-size: 18px">Veillez noter que le non-respect d’une de ces mesures entraine purement et simplement le licenciement de l’académie.
                        <br>
                        Aucune exception n’est ni permise ni envisageable.</p>

                </div>
            </div>

        </div>
    </div>
@endsection
