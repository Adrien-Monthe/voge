@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('editions.show-editions-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('editions.show-editions-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('editions.show-editions-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('editions.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('editions.create-edition-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('editions.show-editions-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>


                                <th scope="col">@lang('editions.table-name')</th>

                                <th scope="col">@lang('editions.table-start-date')</th>
                                <th scope="col">@lang('editions.table-end-date')</th>

                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($editions as $edition)
                                <tr>


                                    <td><a href="#" class="text-primary">{{ $edition->competition->name }}
                                            -> {{ $edition->name }}</a></td>

                                    <td>{{ $edition->start_date }}</td>
                                    {{--                                    <td>{{ floor(abs(date("Y-m-d H:i:s") - strtotime($edition->birthdate))/ (365*60*60*24)) }}</td>--}}
                                    <td>{{ $edition->end_date }}</td>
                                    <td>
                                        <form
                                            action="{{ route('editions.destroy',[app()->getLocale() ,$edition->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('editions.show',[app()->getLocale() ,$edition->id]) }}"><i
                                                    class="bi bi-eye"></i></a>

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
