@extends('layouts.userLayout')
@section('title', 'Bản tin')
@section('content')
<div class="d-flex flex md:flex-row">
    <div class="w-1/4">
        <p class="text-2xl text-red-500">Danh mục tin tức</p>
        <ul class="list-disc">
            @foreach($data as $j)
                <a href="/loai_ban_tin/{{$j->newsCategory_id}}"><li>{{$j->newsCategory_name}}</li></a>
            @endforeach
        </ul>
    </div>
    <div class="w-3/4">
        @foreach($data as $i)
            <a href="/ban_tin/{{$i->news_id}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
{{--                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="" alt="">--}}
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$i->news_title}}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$i->newsCategory_name}}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection

