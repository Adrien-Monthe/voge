@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('competitions.show-competitions-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('competitions.show-competitions-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('competitions.show-competitions-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('competitions.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('competitions.create-competition-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('competitions.show-competitions-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('competitions.table-preview')</th>
                                <th scope="col">@lang('competitions.table-name')</th>
                                <th scope="col">@lang('competitions.table-edition')</th>
                                <th scope="col">@lang('competitions.table-start-date')</th>
                                <th scope="col">@lang('competitions.table-end-date')</th>

                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($competitions as $competition)
                                <tr>
                                    <th scope="row"><a href="#">{{ $competition->id }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($competition->image_path)}}"
                                                                     alt="{{ $competition->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $competition->name }}</a></td>
                                    <td>{{ $competition->edition }}</td>
                                    <td>{{ $competition->start_date }}</td>
                                    {{--                                    <td>{{ floor(abs(date("Y-m-d H:i:s") - strtotime($competition->birthdate))/ (365*60*60*24)) }}</td>--}}
                                    <td>{{ $competition->end_date }}</td>
                                    <td>
                                        <form
                                            action="{{ route('competitions.destroy',[app()->getLocale() ,$competition->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('competitions.show',[app()->getLocale() ,$competition->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('competitions.edit',[app()->getLocale() ,$competition->id]) }}"><i
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
