<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicacion')</title>
</head>
<body>
    <div id="app">
        <x-header />
        <main>
            @yield('content')
        </main>
        
        <x-footer />
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    
</body>
</html>