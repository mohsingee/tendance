<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TENDANCE OPTIC - L'opticien des grandes marques</title>
    <meta name="description" content="L'opticien des grandes marques en Martinique et Guadeloupe">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/'.favicon()->front_favicon) }}" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" href="img/logo/favicon.png"> -->

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link class="js-stylesheet" href="{{ asset('sweetalert/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <style>
        #overlay {
        background:rgba(0,0,0,0.8);
        color: #fff;
        position: fixed;
        height: 100%;
        width: 100%;
        z-index: 5000;
        top: 0;
        left: 0;
        float: left;
        text-align: center;
        padding-top: 20%;
        filter: blur(1px);
    }
    </style>
</head>
