<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Thêm loại sản phẩm mới')</title>
</head>
<body>
@extends('layouts.adminLayout')
@section('content')
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)_
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form class="w-full max-w-lg" method="post" action="/trang_quan_ly_danh_muc_san_pham" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Tên loại sản phẩm
                </label>
                <input type="text" name="category_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                    Upload hình ảnh
                </label>
                <input type="file" name="category_thumbnail" accept="image/*" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Thêm loại mới
                </span>
            </button>
        </div>
    </form>
@stop
</body>
</html>
