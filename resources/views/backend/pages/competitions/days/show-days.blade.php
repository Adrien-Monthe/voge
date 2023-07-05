@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('days.show-days-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('days.show-days-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('days.show-days-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">

            <div class="col-lg-12">
                <a href="{{ route('days.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('days.create-day-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('days.show-days-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('days.table-edition')</th>
                                <th scope="col">@lang('days.table-number')</th>
                                <th scope="col">@lang('days.table-day-date')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($days as $day)
                                <tr>
                                    <th scope="row"><a href="#">{{ $day->id }}</a></th>

                                    <td><a href="#" class="text-primary">{{ $day->edition->competition->name }}
                                            - {{ $day->edition->name }}</a></td>
                                    <td>{{ $day->day_number }}</td>
                                    <td>{{ $day->day_date }}</td>
                                    <td>
                                        <form
                                            action="{{ route('days.destroy',[app()->getLocale() ,$day->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('days.show',[app()->getLocale() ,$day->id]) }}">@lang('general.btn-view')</a>

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

        </div>
    </section>
@endsection
