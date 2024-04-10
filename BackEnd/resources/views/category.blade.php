<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Danh mục sản phẩm')</title>
</head>
<body>
@extends('layouts.userLayout')

@section('content')
    <div class="flex flex-col md:flex-row justify-center gap-5 md:mt-32">
        @foreach($data as $i)
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
@stop
</body>
</html>
