@php use Carbon\Carbon; @endphp
@extends('backend.layouts.app')

@section('page-title', __('points.show-points-title'))

@section('content')

    <div class="pagetitle">
        <h1>@lang('points.show-points-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale()) }}">@lang('dash-sidebar.nav-dashboard')</a></li>

                <li class="breadcrumb-item active">@lang('points.show-points-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">

        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('points.create', app()->getLocale())  }}"
                   class="btn btn-primary btn-primary-custom"><i
                        class="bi bi-bag-plus me-1"></i> @lang('points.create-point-title')</a>
                <br>
                <br>
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">
                        <h5 class="card-title">@lang('points.show-points-title')</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                            <tr>

                                <th scope="col">Journée</th>
                                <th scope="col">Groupe</th>
                                <th scope="col">Club</th>
                                <th scope="col">Match Joué</th>
                                <th scope="col">Match Gagné</th>
                                <th scope="col">Match Perdu</th>
                                <th scope="col">actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($points as $point)
                                <tr>
                                    <th scope="row"><a href="#">{{ $point->day->edition->name }}
                                            - {{ $point->day->day_number }}</a></th>
                                    <th scope="row"><a
                                            href="#">{{ $point->group ? $point->group->edition->competition->name : '' }}
                                            - {{ $point->group ? $point->group->name : '' }}</a></th>

                                    {{-- <td><a href="#" class="text-primary">{{ $point->edition->competition->name }}
                                            - {{ $point->edition->name }}</a></td> --}}
                                    <td>{{ $point->club->name }}</td>
                                    <td>{{ $point->p }}</td>
                                    <td>{{ $point->w }}</td>
                                    <td>{{ $point->l }}</td>
                                    <td>
                                        <form
                                            action="{{ route('points.destroy',[app()->getLocale() ,$point->id]) }}"
                                            method="Post">
                                            <a class="btn btn-info"
                                               href="{{ route('points.show',[app()->getLocale() ,$point->id]) }}">@lang('general.btn-view')</a>

                                            <a class="btn btn-primary"
                                               href="{{ route('points.edit',[app()->getLocale() ,$point->id]) }}"><i
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
