<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:#f0f0f0">
    <div id="app">
      <div class="fixed" style="position:sticky;top:0;left:0;right:0;z-index: 100"> @include('inc.navbar')</div>
        <main class="py-4">
        @include('inc.message')
            @yield('content')
        </main>
        </div>
  
     {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
         <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script> --}}
</body>
</html>
