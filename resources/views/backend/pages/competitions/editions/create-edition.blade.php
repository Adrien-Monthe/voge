@extends('backend.layouts.app')

@section('page-title', __('editions.create-edition-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('editions.create-edition-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('editions.create-edition-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('editions.create-edition-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('editions.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-12">
                                <label for="competition_id" class="form-label">@lang('games.table-competition')</label>
                                <select class="form-select" name="competition_id" aria-label="Default select example">
                                    <option value="">Choisissez une Competition</option>
                                    @foreach ($competitions as $competition)
                                        <option value="{{$competition->id}}">{{$competition->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <br>
                            <br>

                            <hr>


                            <div class="col-md-8">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="col-md-4">
                                <label for="year" class="form-label">Année</label>
                                <input type="number" class="form-control" name="year" id="year" min="2000"
                                       max="{{ date("Y")+1 }}">
                            </div>


                            <div class="col-md-6">
                                <label for="start_date"
                                       class="form-label">@lang('editions.table-start-date') </label>
                                <input type="date" class="form-control" name="start_date" id="start_date">
                            </div>

                            <div class="col-md-6">
                                <label for="end_date"
                                       class="form-label">@lang('editions.table-end-date') </label>
                                <input type="date" class="form-control" name="end_date" id="end_date">
                            </div>

                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr"
                                          cols="30" rows="3"></textarea>
                            </div>

                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30" rows="3"></textarea>
                            </div>


                            <div class="col-md-12">
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
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
