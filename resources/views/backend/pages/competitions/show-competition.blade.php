@extends('backend.layouts.app')

@section('page-title', __('competitions.show-competition-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('competitions.show-competition-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('competitions.show-competition-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('competitions.show-competition-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3"
                              enctype="multipart/form-data">


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
                                <label for="showion"
                                       class="form-label">@lang('competitions.table-showion')</label>
                                <input type="text" class="form-control" name="showion" id="showion"
                                       value="{{ $competition->showion }}">
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


                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>

            </div>


        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('editions.show-editions-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('editions.table-preview')</th>
                                <th scope="col">@lang('editions.table-name')</th>
                                <th scope="col">@lang('editions.table-year')</th>
                                <th scope="col">@lang('editions.table-start-date')</th>
                                <th scope="col">@lang('editions.table-end-date')</th>

                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($editions as $edition)
                                <tr>
                                    <th scope="row"><a href="#">{{ $edition->id }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($edition->image_path)}}"
                                                                     alt="{{ $edition->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $edition->name }}</a></td>
                                    <td>{{ $edition->year }}</td>
                                    <td>{{ $edition->start_date }}</td>
                                    {{--                                    <td>{{ floor(abs(date("Y-m-d H:i:s") - strtotime($edition->birthdate))/ (365*60*60*24)) }}</td>--}}
                                    <td>{{ $edition->end_date }}</td>
                                    <td>
                                        <form
                                            action="{{ route('editions.destroy',[app()->getLocale() ,$edition->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('editions.show',[app()->getLocale() ,$edition->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('editions.edit',[app()->getLocale() ,$edition->id]) }}"><i
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
