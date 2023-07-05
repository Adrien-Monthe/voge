@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('admins.show-admins-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('admins.show-admins-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('admins.show-admins-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('admins.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('admins.create-admin-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('admins.show-admins-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('admins.table-preview')</th>
                                <th scope="col">@lang('admins.table-name')</th>
                                <th scope="col">@lang('admins.table-email')</th>
                                <th scope="col">@lang('admins.table-access-type')</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($admins as $admin)
                                <tr>
                                    <th scope="row"><a href="#">{{ $admin->id }}</a></th>
                                    <th scope="row"><a href="#"><img src="{{ asset($admin->image_path)}}"
                                                                     alt="{{ $admin->id }}" width="75"></a></th>
                                    <td><a href="#" class="text-primary">{{ $admin->last_name }}</a></td>
                                    <td>{{ $admin->user->email }}</td>
                                    {{--                                    <td>{{ floor(abs(date("Y-m-d H:i:s") - strtotime($admin->birthdate))/ (365*60*60*24)) }}</td>--}}
                                    <td>{{ $admin->access_type }}</td>

                                    <td>
                                        <form action="{{ route('admins.destroy',[app()->getLocale() ,$admin->id]) }}"
                                              method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('admins.show',[app()->getLocale() ,$admin->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('admins.edit',[app()->getLocale() ,$admin->id]) }}"><i
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
