@extends('backend.layouts.app')

@section('page-title', __('admins.create-admin-title'))

@section('content')
    <div class="pagetitle">
        <h1>@lang('admins.create-admin-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>

                <li class="breadcrumb-item active">@lang('admins.create-admin-title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('admins.create-admin-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ route('admins.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-6">
                                <label for="first_name" class="form-label">@lang('admins.table-first-name')</label>
                                <input type="text" class="form-control" name="first_name" id="first_name">
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">@lang('admins.table-last-name')</label>
                                <input type="text" class="form-control" name="last_name" id="last_name">
                            </div>

                            <div class="col-md-12">
                                <label for="email" class="form-label">@lang('admins.table-email')</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>

                            <div class="col-md-4">
                                <label for="access_blog"
                                       class="form-label">@lang('admins.table-access-blog')</label>
                                <select class="form-select" name="access_blog" aria-label="Default select example">
                                    <option value="1">Oui</option>
                                    <option value="0">NOn</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="access_shop"
                                       class="form-label">@lang('admins.table-access-shop')</label>
                                <select class="form-select" name="access_shop" aria-label="Default select example">
                                    <option value="1">Oui</option>
                                    <option value="0">NOn</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="access_football"
                                       class="form-label">@lang('admins.table-access-football')</label>
                                <select class="form-select" name="access_football" aria-label="Default select example">
                                    <option value="1">Oui</option>
                                    <option value="0">NOn</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="access_user"
                                       class="form-label">@lang('admins.table-access-user')</label>
                                <select class="form-select" name="access_user" aria-label="Default select example">
                                    <option value="1">Oui</option>
                                    <option value="0">NOn</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="access_portfolio"
                                       class="form-label">@lang('admins.table-access-portfolio')</label>
                                <select class="form-select" name="access_portfolio" aria-label="Default select example">
                                    <option value="1">Oui</option>
                                    <option value="0">NOn</option>
                                </select>
                            </div>


                            <div class="col-md-12">
                                <label for="access_type"
                                       class="form-label">@lang('admins.table-access-type')</label>
                                <select class="form-select" name="access_type" aria-label="Default select example">
                                    <option value="Administrateur">Admin</option>
                                    <option value="Editeur Blog">Gestion Actu</option>
                                    <option value="Gestion Site">Gestion Site</option>
                                    <option value="Gestion Joueur">Gestion Joueur</option>

                                </select>
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


            </div>

        </div>
    </section>
@endsection
