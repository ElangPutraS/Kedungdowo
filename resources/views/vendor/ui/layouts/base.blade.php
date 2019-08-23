<!DOCTYPE html>
<html>
<head>
    <title>@yield('site.title', "Kedungdowo Official Web") </title>

    <meta charset="UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @stack('meta')

    <link rel="stylesheet" type="text/css" href="{{ mix('semantic/semantic.min.css', 'laravolt') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css', 'laravolt') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>
    <style>

        .full-width {
            width: 100% !important;
        }

        * {
            font-family: 'Source Sans Pro', sans-serif;
        }

        .clap-header {
            background-color: #f5f6fa !important;
        }

        .p-20 {
            padding: 0px;
        }

        .middle-align {
            vertical-align: middle;
        }

        .float-right {
            float: right !important;
        }

        .no-border {
            background: none !important;
            padding: 0px !important;
            border: none !important;
        }

        .ui.blue.button, .ui.red.buttons .button {
            background-color: #ff6565;
            font-family: 'Source Sans Pro', sans-serif !important;
        }

        .ui.blue.button:hover, .ui.red.buttons .button:hover {
            background-color: #ff6565;
            font-family: 'Source Sans Pro', sans-serif !important;
        }

        .ui.blue.button, .ui.blue.buttons .button {
            background-color: #3b86ff;
            font-family: 'Source Sans Pro', sans-serif !important;
        }

        .ui.blue.button:hover, .ui.blue.buttons .button:hover {
            background-color: #1062e5;
            font-family: 'Source Sans Pro', sans-serif !important;
        }
    </style>
    @stack('style')
    @stack('head')
    {!! Assets::group('laravolt')->css() !!}
    {!! Assets::css() !!}
</head>

<body data-theme="{{ config('laravolt.ui.sidebar_theme') }}" class="{{ $bodyClass ?? '' }}">

@yield('body')

<script type="text/javascript" src="{{ mix('js/all.js', 'laravolt') }}"></script>
{!! Assets::group('laravolt')->js() !!}
{!! Assets::js() !!}
@stack('script')
@stack('body')
</body>
</html>
