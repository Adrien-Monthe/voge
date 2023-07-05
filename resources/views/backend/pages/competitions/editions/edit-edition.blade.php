@extends('backend.layouts.app')

@section('page-title', __('editions.edit-edition-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('editions.edit-edition-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('editions.edit-edition-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('editions.edit-edition-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('editions.update', [app()->getLocale(), $edition->id])  }}"
                              enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <label for="competition_id" class="form-label">@lang('games.table-competition')</label>
                                <select class="form-select" name="competition_id" aria-label="Default select example">
                                    <option value="">Choisissez une Competition</option>
                                    @foreach ($competitions as $competition)
                                        <option
                                            {{ $edition->competition && $edition->competition->id == $competition->id ? "selected" : "" }} value="{{$competition->id}}">{{$competition->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <br>
                            <br>

                            <hr>


                            <div class="col-md-8">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ $edition->name }}">
                            </div>

                            <div class="col-md-4">
                                <label for="year" class="form-label">Année</label>
                                <input type="number" class="form-control" name="year" id="year" min="2000"
                                       value="{{ $edition->year }}"
                                       max="{{ date("Y")+1 }}">
                            </div>


                            <div class="col-md-6">
                                <label for="start_date"
                                       class="form-label">@lang('editions.table-start-date') </label>
                                <input type="date" class="form-control" name="start_date" id="start_date"
                                       value="{{ $edition->start_date }}">
                            </div>

                            <div class="col-md-6">
                                <label for="end_date"
                                       class="form-label">@lang('editions.table-end-date') </label>
                                <input type="date" class="form-control" name="end_date" id="end_date"
                                       value="{{ $edition->end_date }}">
                            </div>

                            <div class="col-12">
                                <label for="short_description_fr" class="form-label">Description Fr</label>
                                <textarea name="description_fr" class="form-control" id="short_description_fr"
                                          cols="30"
                                          rows="3">{{$edition->getTranslation('description', 'fr')}}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="short_description_en" class="form-label">Description En</label>
                                <textarea name="description_en" class="form-control" id="short_description_en"
                                          cols="30"
                                          rows="3">{{$edition->getTranslation('description', 'en')}}</textarea>
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

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('days.create-day-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('days.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="edition_id" value="{{$edition->id}}">


                            <div class="col-md-12">
                                <label for="day_number" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="day_number" id="day_number">
                            </div>

                            <div class="col-md-12">
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

                <br>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('groups.create-group-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('groups.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="edition_id" value="{{$edition->id}}">

                            <br>
                            <br>

                            <hr>

                            <div class="col-md-12">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="col-md-12">
                                <label for="letter" class="form-label">Lettre</label>
                                <input type="text" class="form-control" name="letter" id="letter">
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
            <div class="col-md-6">
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('days.show-days-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>


                                <th scope="col">@lang('days.table-number')</th>
                                <th scope="col">@lang('days.table-day-date')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($days as $day)
                                <tr>

                                    <td>{{ $day->day_number }}</td>
                                    <td>{{ $day->day_date }}</td>
                                    <td>
                                        <form
                                            action="{{ route('days.destroy',[app()->getLocale() ,$day->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('days.show',[app()->getLocale() ,$day->id]) }}"><i
                                                    class="bi bi-eye"></i></a>

                                            <a class="btn btn-primary"
                                               href="{{ route('days.edit',[app()->getLocale() ,$day->id]) }}"><i
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

            <div class="col-md-6">
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('groups.show-groups-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">@lang('groups.table-name')</th>
                                <th scope="col">@lang('groups.table-letter')</th>


                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($groups as $group)
                                <tr>


                                    <td><a href="#" class="text-primary">{{ $group->name }}</a></td>

                                    <td>{{ $group->letter }}</td>
                                    <td>
                                        <form
                                            action="{{ route('groups.destroy',[app()->getLocale() ,$group->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('groups.show',[app()->getLocale() ,$group->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('groups.edit',[app()->getLocale() ,$group->id]) }}"><i
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
