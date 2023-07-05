<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('dash-sidebar.nav-dashboard')</span>
            </a>
        </li><!-- End Dashboard Nav -->




            <li class="nav-heading">@lang('dash-sidebar.nav-blog')</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>@lang('dash-sidebar.nav-blog')</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="blog-nav"
                    class="nav-content collapse {{  str_contains(Route::currentRouteName(), "bcategories")|| str_contains(Route::currentRouteName(), "btags")||str_contains(Route::currentRouteName(), "blogs")||str_contains(Route::currentRouteName(), "bcomments") ||str_contains(Route::currentRouteName(), "events") ? 'show' : '' }} "
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('bcategories.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "bcategories") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcategories')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('btags.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "btags") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-btags')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "blogs") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-posts')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('bcomments.index', app()->getLocale())  }}"
                           class="{{ str_contains(Route::currentRouteName(), "bcomments") ? 'active': ''  }}">
                            <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcomments')</span>
                        </a>
                    </li>

                </ul>
            </li> <!-- End Tables Nav -->


        <li class="nav-heading">Gestion du Site</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('contacts.index', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('dash-sidebar.nav-contacts')</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('heros.index', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('dash-sidebar.nav-heros')</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('faqs.index', app()->getLocale()) }}">
                <i class="bi bi-question-circle"></i>
                <span>FAQS</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('sponsors.index', app()->getLocale()) }}">
                <i class="bi bi-diagram-3"></i>
                <span>Sponsors</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('testimonials.index', app()->getLocale()) }}">
                <i class="bi bi-chat-left-text"></i>
                <span>Temoignage</span>
            </a>
        </li><!-- End Dashboard Nav -->


    </ul>

</aside><!-- End Sidebar-->
