<!doctype html>
<html class="" lang="fr">
@include('frontend.layouts.head')
<body>
<!-- Wrapper -->
<div id="wrapper" class="wrapper">
    @include('frontend.layouts.header')
    @yield('main-content')
    @include('frontend.layouts.footer')
</div>
<!-- Wrapper -->
@include('frontend.layouts.footer_scripts')
</body>
</html>
