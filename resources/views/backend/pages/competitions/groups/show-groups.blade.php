@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('groups.show-groups-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('groups.show-groups-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('groups.show-groups-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('groups.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('groups.create-group-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('groups.show-groups-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('groups.table-name')</th>
                                <th scope="col">@lang('groups.table-edition')</th>
                                <th scope="col">@lang('groups.table-letter')</th>


                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($groups as $group)
                                <tr>
                                    <th scope="row"><a href="#">{{ $group->id }}</a></th>

                                    <td><a href="#" class="text-primary">{{ $group->name }}</a></td>
                                    <td>{{ $group->edition_id }}</td>
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
