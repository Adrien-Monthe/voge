@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('clubs.show-clubs-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('clubs.show-clubs-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('clubs.show-clubs-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('clubs.create', app()->getLocale())  }}" class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('clubs.create-club-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('clubs.show-clubs-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('clubs.table-preview')</th>
                                <th scope="col">@lang('clubs.table-name')</th>
                                <th scope="col">@lang('clubs.table-phonenumber')</th>
                                <th scope="col">@lang('clubs.table-category')</th>
                                <th scope="col">@lang('clubs.table-promoter-name')</th>
                                <th scope="col">@lang('clubs.table-town')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clubs as $club)
                                <tr>
                                    <th scope="row"><a href="#">{{ $club->id }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($club->image_path)}}"
                                                                     alt="{{ $club->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $club->name }}</a></td>
                                    <td>{{ $club->phonenumber }}</td>
                                    <td>{{ $club->category }}</td>
                                    {{--                                    <td>{{ floor(abs(date("Y-m-d H:i:s") - strtotime($club->birthdate))/ (365*60*60*24)) }}</td>--}}
                                    <td>{{ $club->promoter_name }}</td>
                                    <td>{{ $club->town }}</td>
                                    <td>
                                        <form action="{{ route('clubs.destroy',[app()->getLocale() ,$club->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('clubs.show',[app()->getLocale() ,$club->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('clubs.edit',[app()->getLocale() ,$club->id]) }}"><i
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
