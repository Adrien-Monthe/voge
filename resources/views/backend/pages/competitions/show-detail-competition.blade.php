@extends('backend.layouts.app')

@section('page-title', $competition->name)

@section('content')
    <div class="pagetitle">
        <h1>@lang('competitions.show-competition-title')</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{ route('dashboard', app()->getLocale())  }}">@lang('dash-sidebar.nav-dashboard')</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">@lang('competitions.show-competition-title')</a></li>

            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Products Card -->
                    <div class="col-xxl-12 col-md-12">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">{{ $competition->name }} <span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ sizeof($competition->editions) }} Editions</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->


                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">


                            <div class="card-body">
                                <h5 class="card-title">Éditions <span></span></h5>

                                <a href="{{ route('editions.create', app()->getLocale())  }}"
                                   class="btn btn-primary btn-primary-custom"><i
                                        class="bi bi-bag-plus me-1"></i> @lang('editions.create-edition-title')</a>
                                <br>
                                <br>

                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">@lang('editions.table-preview')</th>
                                        <th scope="col">@lang('editions.table-name')</th>
                                        <th scope="col">@lang('editions.table-year')</th>
                                        <th scope="col">actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($editions as $edition)
                                        <tr>
                                            <th scope="row"><a href="#">{{ $edition->id }}</a></th>
                                            <th scope="row"><a href="#"><img src="{{ asset($edition->image_path)}}"
                                                                             alt="{{ $edition->id }}" width="75"></a>
                                            </th>
                                            <td><a href="#" class="text-primary">{{ $edition->name }}</a></td>
                                            <td>{{ $edition->year }}</td>

                                            <td>
                                                <form
                                                    action="{{ route('editions.destroy',[app()->getLocale() ,$edition->id]) }}"
                                                    method="Post">
                                                    <a class="btn btn-info"
                                                       href="{{ route('editions.show',[app()->getLocale() ,$edition->id]) }}">@lang('general.btn-view')</a>

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
                    </div><!-- End Recent Sales -->


                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@lang('editions.create-edition-title')</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST"
                              action="{{ route('editions.store', app()->getLocale())  }}"
                              enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" class="form-control" name="competition_id" id="competition_id"
                                   value="{{ $competition->id }}">


                            <div class="col-md-12">
                                <label for="name" class="form-label">Noms</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>

                            <div class="col-md-12">
                                <label for="year" class="form-label">Année</label>
                                <input type="number" class="form-control" name="year" id="year" min="2000"
                                       max="{{ date("Y")+1 }}">
                            </div>


                            <div class="col-md-12">
                                <label for="start_date"
                                       class="form-label">@lang('editions.table-start-date') </label>
                                <input type="date" class="form-control" name="start_date" id="start_date">
                            </div>

                            <div class="col-md-12">
                                <label for="end_date"
                                       class="form-label">@lang('editions.table-end-date') </label>
                                <input type="date" class="form-control" name="end_date" id="end_date">
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
                </div><!-- End Recent Activity -->

                <!-- Recent Activity -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Voluptatem blanditiis blanditiis eveniet
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Voluptates corrupti molestias voluptatem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
                                    tempore
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Est sit eum reiciendis exercitationem
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Activity -->


            </div><!-- End Right side columns -->

        </div>
    </section>

@endsection

