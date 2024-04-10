<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Trang chủ')</title>
    </head>
    <body>
    @extends('layouts.userLayout')
    @section('content')
    <div class="flex md:flex-row gap-5">
        <div class="w-2/3">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">

                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <div class="" >
                        <img src="/images/beginnerdslr2020-2048px-9793.webp" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div>
                <img src="/images/bannersonyt32024.webp" class="block w-full " alt="...">
            </div>
            <div class="md:mt-6">
                <img src="/images/gioi-thieu-a7c-ii.webp" class="block w-full " alt="...">
                <img src="/images/banner-web-zv-e1.webp" class="block w-full " alt="...">
            </div>
        </div>
    </div>

    <div class="container mx-auto md:mt-20">
        <h2 class="text-2xl md:text-4xl font-bold text-center bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium text-transparent bg-clip-text">Danh mục sản phẩm</h2>
        <div class="flex flex-col md:flex-row justify-center gap-5 md:mt-20">
            @foreach($categories as $i)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/danh_muc_san_pham/{{$i->id}}">
                        <img class="rounded-t-lg w-96 h-72" src="images/{{$i->category_thumbnail}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">{{$i->category_name}}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container mx-auto md:mt-20">
            <h2 class="text-2xl md:text-4xl font-bold text-center bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium text-transparent bg-clip-text">Những sản phẩm đang kinh doanh</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:mt-20">
                @foreach($products as $i)
                    <a href="/san_pham/{{$i->id}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/images/{{$i->product_image}}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$i->product_name}}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{number_format($i->product_price)}} đ</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @stop
    </body>
</html>
