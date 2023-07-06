@extends('frontend.layouts.app')

@section('additional_meta')

    <meta property="og:image" content="{{ asset('frontend/images/Logo/ln_logo_3.png')}}"/>
    <meta property="og:description"
          content="Luvnation est une agence de Gestion de carrière footballistique et organisateur d'évènements sportifs"/>
    <meta property="og:keywords"
          content="Évènement sportif, Football, sport, Joueurs, Internationales, Famille, Douala, club de sport, 2 0, santé, Foot"/>

    <meta property="og:url" content="{{ route('home', app()->getLocale() ) }}"/>

    <meta property="og:title" content="Luvnation Football Agency"/>

@endsection

@section('page-title', __('home.page-title'))

@section('content')
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-dark font-weight-bold text-8">Post Left Sidebar</h1>
                        <span class="sub-title text-dark">Check out our Latest News!</span>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <form action="https://www.okler.net/previews/porto/9.9.3/page-search-results.html" method="get">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                            </div>
                        </form>
                        <h5 class="font-weight-semi-bold pt-4">Categories</h5>
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Photos (4)</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
                        </ul>
                        <div class="tabs tabs-dark mb-4 pb-2">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
                                <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="popularPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="blog-post.html">
                                                        <img src="/frontend/img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2023
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="blog-post.html">
                                                        <img src="/frontend/img/blog/square/blog-24.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2023
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="blog-post.html">
                                                        <img src="/frontend/img/blog/square/blog-42.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                                <div class="post-meta">
                                                    Nov 10, 2023
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="recentPosts">
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="blog-post.html">
                                                        <img src="/frontend/img/blog/square/blog-24.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2023
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="blog-post.html">
                                                        <img src="/frontend/img/blog/square/blog-42.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                                <div class="post-meta">
                                                    Nov 10, 2023
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="blog-post.html">
                                                        <img src="/frontend/img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                                <div class="post-meta">
                                                    Nov 10, 2023
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h5 class="font-weight-semi-bold pt-4">About Us</h5>
                        <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                        <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>
                        <div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div>
                        <h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>
                        <div class="mb-3 pb-1">
                            <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">design</span></a>
                            <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">brands</span></a>
                            <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">video</span></a>
                            <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">business</span></a>
                            <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">travel</span></a>
                        </div>
                        <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
                        <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote></div>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <a href="blog-post.html">
                                    <img src="/frontend/img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>

                            <div class="post-date ms-0">
                                <span class="day">10</span>
                                <span class="month">Jan</span>
                            </div>

                            <div class="post-content ms-0">

                                <h2 class="font-weight-semi-bold"><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                    <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
                                <p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                <p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
                                <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
                                <p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>

                                <div class="post-block mt-5 post-share">
                                    <h4 class="mb-3">Share this Post</h4>

                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_inline_share_toolbox"></div>
                                    <script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>

                                </div>

                                <div class="post-block mt-4 pt-2 post-author">
                                    <h4 class="mb-3">Author</h4>
                                    <div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
                                        <a href="blog-post.html">
                                            <img src="/frontend/img/avatars/avatar.jpg" alt="">
                                        </a>
                                    </div>
                                    <p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                                </div>
                                <div id="comments" class="post-block mt-5 post-comments">
                                    <h4 class="mb-3">Comments (3)</h4>

                                    <ul class="comments">
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt="" src="/frontend/img/avatars/avatar-2.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                                                    <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                </div>
                                            </div>

                                            <ul class="comments reply">
                                                <li>
                                                    <div class="comment">
                                                        <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                            <img class="avatar" alt="" src="/frontend/img/avatars/avatar-3.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-end">
																			<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                            <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comment">
                                                        <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                            <img class="avatar" alt="" src="/frontend/img/avatars/avatar-4.jpg">
                                                        </div>
                                                        <div class="comment-block">
                                                            <div class="comment-arrow"></div>
                                                            <span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-end">
																			<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                            <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt="" src="/frontend/img/avatars/avatar.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                    <img class="avatar" alt="" src="/frontend/img/avatars/avatar.jpg">
                                                </div>
                                                <div class="comment-block">
                                                    <div class="comment-arrow"></div>
                                                    <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																</span>
															</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    <span class="date float-end">January 12, 2023 at 1:38 pm</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <div class="post-block mt-5 post-leave-comment">
                                    <h4 class="mb-3">Leave a comment</h4>

                                    <form class="contact-form p-4 rounded bg-color-grey" action="https://www.okler.net/previews/porto/9.9.3/php/contact-form.php" method="POST">
                                        <div class="p-2">
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Full Name</label>
                                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="form-label required font-weight-bold text-dark">Email Address</label>
                                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="form-label required font-weight-bold text-dark">Comment</label>
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col mb-0">
                                                    <input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </article>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
