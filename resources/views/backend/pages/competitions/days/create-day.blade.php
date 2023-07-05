@extends('backend.layouts.app')

@section('page-title', __('days.create-day-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('days.create-day-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('days.create-day-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('days.create-day-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('days.store', app()->getLocale())  }}"
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

                            <br>
                            <br>

                            <hr>

                            <div class="col-md-8">
                                <label for="day_number" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="day_number" id="day_number">
                            </div>

                            <div class="col-md-8">
                                <label for="day_date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="day_date" id="day_date">
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
