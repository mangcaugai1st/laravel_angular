<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Trang quản lý danh mục sản phẩm')</title>
</head>
<body>
@extends('layouts.adminLayout')
@section('content')
    <div class="relative overflow-x-auto">
        <a href="/loai_san_pham/create"><button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Thêm loại sản phẩm mới</button></a>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    STT
                </th>
                <th scope="col" class="px-6 py-3">
                    Loại sản phẩm
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < sizeof($category); $i++)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i+1}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$category[$i]->category_name}}
                    </th>
                    <td class="px-6 py-4">
                        <a href="/loai_san_pham/edit/{{$category[$i]->id}}"><button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Sửa</button></a>
                        <form method="post" action="/xoa_loai_sp/{{$category[$i]->id}}">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Bạn chắc chắn muốn xóa loại sản phẩm này phải không?')"  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
@stop
</body>
</html>
