@extends('backend.layouts.app')

@section('page-title', __('points.create-point-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('points.create-point-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('points.create-point-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('points.create-point-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('points.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-12">
                                <label for="edition_id" class="form-label">Edition</label>
                                <select class="form-select" name="edition_id" aria-label="Default select example">
                                    <option value="">Choisissez une Edition</option>
                                    @foreach ($editions as $edition)
                                        <option value="{{$edition->id}}"> {{ $edition->competition->name }}
                                            - {{$edition->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="day_id" class="form-label">Journée</label>
                                <select class="form-select" name="day_id" aria-label="Default select example">
                                    <option value="">Choisissez une Journée</option>
                                    @foreach ($days as $day)
                                        <option value="{{$day->id}}">{{ $day->edition->competition->name }}
                                            - {{ $day->edition->name }} - {{ $day->day_number }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="group_id" class="form-label">Groupe</label>
                                <select class="form-select" name="group_id" aria-label="Default select example">
                                    <option value="">Choisissez un Groupe</option>
                                    @foreach ($groups as $group)
                                        <option value="{{$group->id}}"> {{ $group->edition->competition->name }}
                                            - {{ $group->edition->name }} - {{ $group->letter }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="team_id" class="form-label">@lang('games.table-team')</label>
                                <select class="form-select" name="team_id" aria-label="Default select example">
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
                                <label for="l" class="form-label">Match Perdues</label>
                                <input type="number" class="form-control" name="l" id="l">
                            </div>

                            <div class="col-md-4">
                                <label for="d" class="form-label">D</label>
                                <input type="number" class="form-control" name="d" id="d">
                            </div>

                            <div class="col-md-4">
                                <label for="gd" class="form-label">GD</label>
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


            <div class="col-lg-6">


            </div>

        </div>
    </section>
@endsection
