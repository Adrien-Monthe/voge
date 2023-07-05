@extends('backend.layouts.app')

@section('page-title', __('days.edit-day-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('days.edit-day-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('days.edit-day-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('days.edit-day-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('days.update', [app()->getLocale(),$day->id])  }}"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <label for="edition_id" class="form-label">Edition</label>
                                <select class="form-select" name="edition_id" aria-label="Default select example">
                                    <option value="">Choisissez une Edition</option>
                                    @foreach ($editions as $edition)
                                        <option
                                            {{ $day->edition && $day->edition->id == $edition->id ? "selected" : "" }} value="{{$edition->id}}"> {{ $edition->competition->name }}
                                            - {{$edition->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <br>
                            <br>

                            <hr>

                            <div class="col-md-12">
                                <label for="day_number" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="day_number" id="day_number"
                                       value="{{ $day->day_number }}">
                            </div>

                            <div class="col-md-12">
                                <label for="day_date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="day_date" id="day_date"
                                       value="{{ $day->day_date }}">
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('points.create-point-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('points.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="edition_id" value="{{$day->edition->id}}">

                            <input type="hidden" name="day_id" value="{{$day->id}}">

                            <div class="col-md-12">
                                <label for="group_id" class="form-label">Groupe</label>
                                <select class="form-select" name="group_id" aria-label="Default select example">
                                    <option value="">Choisissez un Groupe</option>
                                    @foreach ($groups as $group)
                                        <option value="{{$group->id}}"> {{ $group->edition->competition->name }}
                                            - {{ $group->edition->name }} - {{ $group->letter }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-12">
                                <label for="team_id" class="form-label">@lang('games.table-team')</label>
                                <select class="form-select" name="team_id" aria-label="Default select example" required>
                                    <option value="">Choisissez un Club</option>
                                    @foreach ($clubs as $club)
                                        <option value="{{$club->id}}">{{$club->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <hr>

                            <div class="col-md-4">
                                <label for="p" class="form-label">Match Jouées</label>
                                <input type="number" class="form-control" name="p" id="p">
                            </div>

                            <div class="col-md-4">
                                <label for="w" class="form-label">Match Gagnées</label>
                                <input type="number" class="form-control" name="w" id="w">
                            </div>

                            <div class="col-md-4">
                                <label for="d" class="form-label">Match Nul</label>
                                <input type="number" class="form-control" name="d" id="d">
                            </div>

                            <div class="col-md-4">
                                <label for="l" class="form-label">Match Perdues</label>
                                <input type="number" class="form-control" name="l" id="l">
                            </div>

                            <div class="col-md-4">
                                <label for="gd" class="form-label">Différence de But</label>
                                <input type="number" class="form-control" name="gd" id="gd">
                            </div>

                            <div class="col-md-4">
                                <label for="pts" class="form-label">Points</label>
                                <input type="number" class="form-control" name="pts" id="pts">
                            </div>


                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('points.show-points-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>

                                <th scope="col">Journée</th>
                                <th scope="col">Groupe</th>
                                <th scope="col">Club</th>
                                <th scope="col">Match Joué</th>
                                <th scope="col">Match Gagné</th>
                                <th scope="col">Match Perdu</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($points as $point)
                                <tr>
                                    <th scope="row"><a href="#">{{ $point->day->edition->name }}
                                            - {{ $point->day->day_number }}</a></th>
                                    <th scope="row"><a
                                            href="#">{{ $point->group ? $point->group->edition->competition->name : '' }}
                                            - {{ $point->group ? $point->group->name : '' }}</a></th>

                                    {{-- <td><a href="#" class="text-primary">{{ $point->edition->competition->name }}
                                            - {{ $point->edition->name }}</a></td> --}}
                                    <td>{{ $point->club ? $point->club->name : "" }}</td>
                                    <td>{{ $point->p }}</td>
                                    <td>{{ $point->w }}</td>
                                    <td>{{ $point->l }}</td>
                                    <td>
                                        <form
                                            action="{{ route('points.destroy',[app()->getLocale() ,$point->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('points.show',[app()->getLocale() ,$point->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('points.edit',[app()->getLocale() ,$point->id]) }}"><i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('games.create-game-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('games.store', app()->getLocale())  }}">

                            @csrf


                            <div class="col-md-6">
                                <label for="team1_id" class="form-label">@lang('games.table-team-1')</label>
                                <select class="form-select" name="team1_id" aria-label="Default select example">
                                    @foreach ($clubs as $club)
                                        <option value="{{$club->id}}">{{$club->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="team1_score" class="form-label">Score Equipe 1</label>
                                <input type="number" class="form-control" name="team1_score" id="team1_score">
                            </div>


                            <br>
                            <hr>


                            <div class="col-md-6">
                                <label for="team2_id" class="form-label">@lang('games.table-team-2')</label>
                                <select class="form-select" name="team2_id" aria-label="Default select example">
                                    <option value="">Choisissez un Club</option>
                                    @foreach ($clubs as $club)
                                        <option value="{{$club->id}}">{{$club->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="team2_score" class="form-label">Score Equipe 2</label>
                                <input type="number" class="form-control" name="team2_score" id="team2_score">
                            </div>


                            <br>
                            <hr>


                            <input type="hidden" name="competition_id" value="{{$day->edition->competition->id}}">


                            <br>
                            <hr>


                            <div class="col-md-6">
                                <label for="stadium" class="form-label">Stade</label>
                                <input type="text" class="form-control" name="stadium" id="stadium">
                            </div>

                            <div class="col-md-3">
                                <label for="game_date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="game_date" id="game_date">
                            </div>

                            <div class="col-md-3">
                                <label for="game_time" class="form-label">Heure</label>
                                <input type="time" class="form-control" name="game_time" id="game_time">
                            </div>

                            <input type="hidden" name="day_id" value="{{$day->id}}">

                            <div class="col-md-12">
                                <label for="group_id" class="form-label">Groupe</label>
                                <select class="form-select" name="group_id" aria-label="Default select example">
                                    <option value="">Choisissez un Groupe</option>
                                    @foreach ($groups as $group)
                                        <option value="{{$group->id}}">{{ $group->letter }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <br>
                            <br>


                            <div class="text-center">
                                <button type="submit"
                                        class="btn btn-primary btn-primary-custom">@lang('general.btn-submit')</button>
                                <button type="reset" class="btn btn-secondary">@lang('general.btn-reset')</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('games.show-games-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('games.table-team-1')</th>
                                <th scope="col">@lang('games.table-team-2')</th>
                                <th scope="col">@lang('games.table-competition')</th>
                                <th scope="col">@lang('games.table-stadium')</th>
                                <th scope="col">@lang('games.table-game-date')</th>

                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($games as $game)
                                <tr>
                                    <th scope="row"><a href="#">{{ $game->id }}</a></th>

                                    <td>{{ $game->team1_id ? $game->team1->name : $game->team1_name   }}</td>
                                    <td>{{ $game->team2_id ? $game->team2->name : $game->team2_name  }}</td>
                                    <td>{{ $game->competition_name }}</td>
                                    <td>{{ $game->stadium }}</td>
                                    <td>{{ $game->game_date }}</td>
                                    <td>
                                        <form action="{{ route('games.destroy',[app()->getLocale() ,$game->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('games.show',[app()->getLocale() ,$game->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('games.edit',[app()->getLocale() ,$game->id]) }}"><i
                                                    class="bi bi-pencil-square"></i> </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                    disabled><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
