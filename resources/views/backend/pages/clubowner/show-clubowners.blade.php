@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('clubowners.show-clubowners-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('clubowners.show-clubowners-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('clubowners.show-clubowners-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('clubowners.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('clubowners.create-clubowner-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('clubowners.show-clubowners-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('clubowners.table-preview')</th>
                                <th scope="col">@lang('clubowners.table-name')</th>

                                <th scope="col">@lang('clubowners.table-current-country')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clubowners as $clubowner)
                                <tr>
                                    <th scope="row"><a href="#">{{ $clubowner->id }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($clubowner->image_path)}}"
                                                                     alt="{{ $clubowner->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $clubowner->last_name }}</a></td>

                                    <td>{{ $clubowner->current_country }}</td>
                                    <td>
                                        <form
                                            action="{{ route('clubowners.destroy',[app()->getLocale() ,$clubowner->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('clubowners.show',[app()->getLocale() ,$clubowner->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('clubowners.edit',[app()->getLocale() ,$clubowner->id]) }}"><i
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
