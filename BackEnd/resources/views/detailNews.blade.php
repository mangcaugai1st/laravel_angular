@extends('layouts.userLayout')
@section('title', 'Bản tin')
@section('content')
    <div class="container mx-auto">
        <p class="text-4xl text-blue-600/100">{{$data->news_title}}</p>
        <div class="mt-6">
            <p class="text-2xl text-blue-600/100">{{$data->news_header1}}</p>
            <p>{{$data->news_text1}}</p>
            <p class="text-2xl text-blue-600/100">{{$data->news_header2}}</p>
            <p>{{$data->news_text2}}</p>
            <p class="text-2xl text-blue-600/100">{{$data->news_header3}}</p>
            <p>{{$data->news_text3}}</p>
        </div>
    </div>
@endsection
