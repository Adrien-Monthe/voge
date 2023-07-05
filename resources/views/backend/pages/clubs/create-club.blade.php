@extends('backend.layouts.app')

@section('page-title', __('clubs.create-club-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('clubs.create-club-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('clubs.create-club-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('clubs.create-club-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('clubs.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-12">
                                <label for="reference" class="form-label">Reference [Unique par Club]</label>
                                <input type="text" class="form-control" name="reference" id="reference"
                                       value="{{ time() }}">
                            </div>

                            <div class="col-md-4">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="col-md-8">
                                <label for="agreement_number"
                                       class="form-label">@lang('clubs.table-agreement-number')</label>
                                <input type="text" class="form-control" name="agreement_number" id="agreement_number">
                            </div>

                            <div class="col-md-6">
                                <label for="creation_date"
                                       class="form-label">@lang('clubs.table-creation-date') </label>
                                <input type="date" class="form-control" name="creation_date" id="creation_date">
                            </div>

                            <div class="col-md-6">
                                <label for="promoter_name" class="form-label">@lang('clubs.table-promoter-name')</label>
                                <input type="text" class="form-control" name="promoter_name" id="promoter_name">
                            </div>

                            <div class="col-md-6">
                                <label for="phonenumber" class="form-label">@lang('clubs.table-phonenumber')</label>
                                <input type="tel" class="form-control" name="phonenumber" id="phonenumber">
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">@lang('clubs.table-email')</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>

                            <div class="col-md-6">
                                <label for="town" class="form-label">@lang('clubs.table-town')</label>
                                <input type="town" class="form-control" name="town" id="town">
                            </div>

                            <div class="col-md-6">
                                <label for="country" class="form-label">@lang('clubs.table-country')</label>
                                <select class="form-select" name="country" aria-label="Default select example">
                                    @include('backend.pages.players.all-countries-select')
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="division" class="form-label">@lang('clubs.table-division')</label>
                                <input type="division" class="form-control" name="division" id="division">
                            </div>

                            <div class="col-md-6">
                                <label for="category" class="form-label">@lang('clubs.table-category')</label>
                                <select class="form-select" name="category" aria-label="Default select example">
                                    <option value="U17">U17</option>
                                    <option value="U20">U20</option>
                                    <option value="U23">U23</option>
                                </select>
                            </div>


                            <div class="col-md-12">
                                <label for="image_path" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="file" id="image_path" name="image_path">
                                </div>
                            </div>

                            {{--<div class="col-md-12">
                                <label for="category_id" class="form-label">@lang('clubs.table-category')</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">

                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name }}</option>
                                    @endforeach
                                </select>

                            </div> --}}


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
