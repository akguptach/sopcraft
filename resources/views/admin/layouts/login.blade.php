<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} - {{ $title ?? '' }}</title>

    <link rel="icon" href="{{ asset('images/sop-craft-icon.png')}}" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="administrator/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="administrator/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="administrator/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    {{ $slot }}
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="administrator/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="administrator/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="administrator/dist/js/adminlte.min.js"></script>
</body>

</html>
