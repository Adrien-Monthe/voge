<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="#">
                                <img alt="Porto" style="max-height: 100px"  data-sticky-height="90" data-sticky-top="25" src="/frontend/img/logo.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link ps-0" href="{{ route('about', app()->getLocale()) }}"><i class="fas fa-angle-right"></i> A propos</a>
                                </li>
                                <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                    <a class="nav-link" href="{{ route('contact', app()->getLocale()) }}"><i class="fas fa-angle-right"></i> Contactez Nous</a>
                                </li>
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-md-show">
                                    <span class="ws-nowrap"><i class="fas fa-phone"></i> (+237) 691180397</span>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle {{ str_contains(Route::currentRouteName(), "home") ? 'active': ''  }}" href="{{ route('home', app()->getLocale()) }}">
                                                Accueil
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle {{ str_contains(Route::currentRouteName(), "blog") ? 'active': ''  }}" href="{{ route('blog', app()->getLocale()) }}">
                                               Actualitées
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle {{ str_contains(Route::currentRouteName(), "about") ? 'active': ''  }}" href="{{ route('about', app()->getLocale()) }}">
                                                A Propos
                                            </a>

                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ str_contains(Route::currentRouteName(), "academy") ? 'active': ''  }}" href="#">
                                                Academy
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="">
                                                    <a class="dropdown-item" href="{{ route('managing_team', app()->getLocale()) }}">Staff</a>
                                                </li>
                                                <li class="">
                                                    <a class="dropdown-item" href="{{ route('contact', app()->getLocale()) }}">Contact</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ str_contains(Route::currentRouteName(), "more") ? 'active': ''  }}" href="#">
                                                Plus
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="">
                                                    <a class="dropdown-item" href="#">Gallerie</a>
                                                </li>
                                                <li class="">
                                                    <a class="dropdown-item" href="#">Code Éthique</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="">
                                            <a class="dropdown-item dropdown-toggle {{ str_contains(Route::currentRouteName(), "sign") ? 'active': ''  }}" href="#">
                                                S'inscrire
                                            </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/vogeFootballAc" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
