<!doctype html>
<html class="no-js" lang="">
@include('template.header')

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Container -->
<div class="container">
    @yield('content')
</div>

</body>

@include('template.footer')
</html>
