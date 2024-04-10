<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Giỏ hàng')</title>
    <style>
        @layer utilities {
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        }
    </style>
</head>
<body>
@extends('layouts.userLayout')

@section('content')
    <?php
    $totalPrice = 0;
    $cart = session('cart');
    if (session('cart') !== null)
    {
        foreach ($cart as $key => $value)
        {
            $subTotal = $value['product_price'] * $value['quantity'];
            $totalPrice += $subTotal;
        }
    }
    ?>
    <div class="h-screen pt-20">
        <h1 class="mb-10 text-center text-2xl font-bold">Sản phẩm trong giỏ hàng</h1>
        <div class="mx-auto max-w-5xl justify-center px-6 md:flex md:space-x-6 xl:px-0">
            <div class="rounded-lg md:w-2/3">
                @if( session('cart') !== null)
                    @foreach(session('cart') as $key => $value)
                        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
                            <img src="/images/{{$value['product_image']}}" alt="product-image" class="w-full rounded-lg sm:w-40" />
                            <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
                                <div class="mt-5 sm:mt-0">
                                    <h2 class="text-lg font-bold text-gray-900">{{$value['product_name']}} </h2>
                                    <p class="mt-1 text-xs text-gray-700">{{number_format($value['product_price'])}}</p>
                                </div>
                                <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
{{--                                    <div class="flex items-center border-gray-100">--}}
{{--                                        <span id="subs" class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>--}}
{{--                                        <input id="quantityInput" class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number" value="{{$value['quantity']}}" min="1" data-price="{{$value['product_price']}}" />--}}
{{--                                        <span id="add" class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>--}}
{{--                                    </div>--}}
                                    <div class="flex items-center border-gray-100">
                                        <span id="subs" class="cursor-pointer rounded-l bg-gray-100 py-1 px-3.5 duration-100 hover:bg-blue-500 hover:text-blue-50"> - </span>
                                        <input id="quantityInput" class="h-8 w-8 border bg-white text-center text-xs outline-none" type="number" value="{{$value['quantity']}}" min="1" data-price="{{$value['product_price']}}" />
                                        <span id="add" class="cursor-pointer rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50"> + </span>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <p class="text-sm">{{number_format($value['quantity'] * $value['product_price'])}}</p>
                                        <form action="/xoa_cart/{{$key}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif(session('cart') == null)
                    <div>
                        Giỏ hàng trống.
                    </div>
                @endif

            </div>
            <!-- Sub total -->

            @if(session('cart'))
                <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 md:w-1/3">
                    <div class="mb-2 flex justify-between">
                        <p class="text-gray-700">Giá tiền</p>
                        <p class="text-gray-700">{{number_format($totalPrice)}}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-gray-700">Phí vận chuyển</p>
                        <p class="text-gray-700">0</p>
                    </div>
                    <hr class="my-4" />
                    <div class="flex justify-between">
                        <p class="text-lg font-bold">Tổng tiền</p>
                        <div class="">
                            <p class="mb-1 text-lg font-bold">{{number_format($totalPrice)}}</p>
                        </div>
                    </div>
                    <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
                </div>
            @endif
        </div>
    </div>
    <form id="clear-cart-form" action="/clear_cart" method="get">
        @csrf
        <button type="submit" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" ">Xóa giỏ hàng</button>
    </form>
@stop

<script>
    document.getElementById('add').addEventListener('click', function() {
        var quantityInput = document.getElementById('quantityInput');
        var currentQuantity = parseInt(quantityInput.value);
        var newQuantity = currentQuantity + 1;
        quantityInput.value = newQuantity;
    });

    document.getElementById('subs').addEventListener('click', function() {
        var quantityInput = document.getElementById('quantityInput');
        var currentQuantity = parseInt(quantityInput.value);
        var newQuantity = currentQuantity - 1;
        if (newQuantity >= 1) {
            quantityInput.value = newQuantity;
        }
    });
</script>
</body>
</html>
