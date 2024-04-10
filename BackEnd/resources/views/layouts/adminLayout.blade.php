<html>
<head>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
<div class="bg-gray-800 h-screen w-64 fixed shadow-lg">
    <div class="text-white text-lg font-semibold p-4">Admin Panel</div>
    <ul class="text-gray-300">
        <a href=""><li class="p-4 hover:bg-gray-700">Dashboard</li></a>
        <a href="/trang_quan_ly_danh_muc_san_pham"><li class="p-4 hover:bg-gray-700">Danh mục sản phẩm</li></a>
        <a href="/trang_quan_ly_san_pham"><li class="p-4 hover:bg-gray-700">Sản phẩm</li></a>
        <a href=""><li class="p-4 hover:bg-gray-700">Người dùng</li></a>
    </ul>
</div>
<!-- Content -->
<div class="ml-64 mt-16 p-4">
    <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <p>Welcome to your admin panel!</p>
    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
