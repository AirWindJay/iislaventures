<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Journey Of An Impact Angel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        nav
        {
            background-image: linear-gradient(#77FF3C, #CDCDCD);
        }
        footer 
        {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-image: linear-gradient(#CDCDCD, #01DFA5);
            color: white;
            text-align: center;
        }
    </style>
    @yield('styles')
</head>
<body style="padding-bottom: 60px">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
<footer>
    <p>IISLAVENTURES</p>
    {{-- <p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p> --}}
  </footer>
</html>
