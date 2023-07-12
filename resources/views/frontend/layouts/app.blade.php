<!DOCTYPE html>
<html>

<!-- Mirrored from www.okler.net/previews/porto/9.8.0/index-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 23:06:25 GMT -->
@include('frontend.layouts.head')

<style>
    p{
        text-align: justify;
    }
</style>

<body data-plugin-page-transition>
<div class="body">

    @include('frontend.layouts.header-2')

    @yield('content')

    @include('frontend.layouts.footer')

</div>


<!-- Vendor -->
<script src="/frontend/vendor/plugins/js/plugins.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/frontend/js/theme.js"></script>

<!-- Circle Flip Slideshow Script -->
<script src="/frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<!-- Current Page Views -->
<script src="/frontend/js/views/view.home.js"></script>

<!-- Theme Initialization Files -->
<script src="/frontend/js/theme.init.js"></script>

</body>

<!-- Mirrored from www.okler.net/previews/porto/9.8.0/index-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 23:06:32 GMT -->
</html>
