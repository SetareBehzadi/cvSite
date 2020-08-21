<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


     <link rel="stylesheet" href="admin/css/app/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="admin/css/base_css_admin/admin_base_css.css">
        <link rel="stylesheet" href="/admin/css/app/plugin/iCheck/custom.css">
    <style>
        .brand-image-preview{
            background-size: cover;
        }
    </style>
    @yield('styles')

    <title>
        {{config('app.name').' | '}}@yield('title')
    </title>
</head>
<body class="rtls">

<div id="wrapper">

    @include("include.admin.navbar")

    <div id="page-wrapper" class="gray-bg">
        {{--   @include("include.admin.topHeader")--}}

        @yield("contents")


        {{--@include("include.admin.footer")--}}

    </div>
</div>


<script src="/admin/js/base_js/base_admin_js.js"></script>
<script src="/admin/js/plugin/metisMenu/jquery.metisMenu.js"></script>
<script src="/admin/js/plugin/validate/jquery.validate.min.js"></script>
<script src="/admin/js/plugin/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/admin/js/main.js"></script>

<!-- iCheck -->
<script src="/admin/js/plugin/iCheck/icheck.min.js"></script>
<script src="/admin/js/plugin/toastr/toastr.min.js"></script>

<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        toastr.options = {
            "closeButton": true,
            "progressBar": true,

        };


        @if(session()->has('flash_message'))
        toastr.success("{{ @session('flash_message') }}");

        @endif
        @if(session()->has('flash_d_message'))
        toastr.warning("{{ @session('flash_d_message') }}");

        @endif

    });
</script>

@yield('scripts')

</body>
</html>
