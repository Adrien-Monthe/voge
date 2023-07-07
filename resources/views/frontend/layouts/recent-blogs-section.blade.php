<section class="section  border-0 m-0 pb-3">
    <h1 class="word-rotator text-center slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
        <span style="color: #2B378B">ACTUALITÉS SUR VFA </span>
    </h1>
    <div class="container container-xl-custom">
        <div class="row pb-1">
            @foreach($recent_blogs as $blog)
                <div class="col-sm-6 col-lg-4 mb-4 pb-2">
                    <a href="{{ route('single_blog_page', [app()->getLocale(),$blog->codename ] ) }}">
                        <article>
                            <div class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                    <img src="{{ asset($blog->image_path) }}" style="height: 250px; object-fit: cover" class="img-fluid" alt="">
                                    <div class="thumb-info-title bg-transparent p-4">
                                        <div class="thumb-info-type bg-color-primary px-2 mb-1">{{ $blog->category->name }}</div>
                                        <div class="thumb-info-inner mt-1">
                                            <h2 class="text-color-light line-height-2 text-4 font-weight-bold mb-0">{{ $blog->title }}</h2>
                                        </div>
                                        <div class="thumb-info-show-more-content">
                                            <p class="mb-0 text-1 line-height-9 mb-1 mt-2 text-light opacity-5">{{ $blog->short_description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            @endforeach


        </div>
    </div>
</section>
