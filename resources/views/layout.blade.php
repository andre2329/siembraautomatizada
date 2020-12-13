<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','R&AGR')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="/js/app.js" defer></script>
    
</head>

<body id="page-top">
    @include('partials.nav')
    <div id="app">
        
        {{-- @include('partials.session-status') --}}
        @yield('content')
    </div>
    
</body>
<footer>
    <div class="footer-copyright text-center py-3">© 2020 Copyright  R&AGR
      </div>
</footer>

</html>