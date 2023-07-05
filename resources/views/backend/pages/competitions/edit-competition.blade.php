@extends('backend.layouts.app')

@section('page-title', __('competitions.edit-competition-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('competitions.edit-competition-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('competitions.edit-competition-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('competitions.edit-competition-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('competitions.update', [app()->getLocale(),$competition->id])  }}"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-md-6">
                                <label for="name_en" class="form-label">Name En</label>
                                <input type="text" class="form-control" name="name_en" id="name_en"
                                       value="{{ $competition->getTranslation('name', 'en')}}">
                            </div>
                            <div class="col-md-6">
                                <label for="name_fr" class="form-label">Noms Fr</label>
                                <input type="text" class="form-control" name="name_fr" id="name_fr"
                                       value="{{ $competition->getTranslation('name', 'fr')}}">
                            </div>

                            <div class="col-md-6">
                                <label for="edition"
                                       class="form-label">@lang('competitions.table-edition')</label>
                                <input type="text" class="form-control" name="edition" id="edition"
                                       value="{{ $competition->edition }}">
                            </div>

                            <div class="col-md-6">
                                <label for="winning_team"
                                       class="form-label">@lang('competitions.table-winning-team') </label>
                                <input type="text" class="form-control" name="winning_team" id="winning_team"
                                       value="{{ $competition->winning_team }}">
                            </div>

                            <div class="col-md-6">
                                <label for="start_date"
                                       class="form-label">@lang('competitions.table-start-date') </label>
                                <input type="date" class="form-control" name="start_date" id="start_date"
                                       value="{{ $competition->start_date }}">
                            </div>

                            <div class="col-md-6">
                                <label for="end_date"
                                       class="form-label">@lang('competitions.table-end-date') </label>
                                <input type="date" class="form-control" name="end_date" id="end_date"
                                       value="{{ $competition->end_date }}">
                            </div>

                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Description Fr</label>
                                <textarea name="short_description_fr" class="form-control" id="short_description_fr"
                                          cols="30"
                                          rows="3"> {{ $competition->getTranslation('short_description', 'fr') }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Description En</label>
                                <textarea name="short_description_en" class="form-control" id="short_description_en"
                                          cols="30"
                                          rows="3"> {{ $competition->getTranslation('short_description', 'en') }}</textarea>
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
