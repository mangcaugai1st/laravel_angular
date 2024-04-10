<html>
<head>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/55db8c74ad.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="flex flex-col h-screen">
    @section('sidebar')
    @include('layouts.header')
    @show
    <div class="mb-auto">
        <div class="container mx-auto">
            @yield('content')
        </div>
    </div>
    @section('footer')
    @include('layouts.footer')
    @show
</div>
</body>
</html>
