<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Trang quản lý')</title>
</head>
<body>
@extends('layouts.adminLayout')

@section('content')

@stop
</body>
</html>
