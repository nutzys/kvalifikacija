@extends('layout')

@section('content')
<div class="h-full flex">
    <div class="h-full w-1/5 bg-gray-600 p-4">
        <div class="flex items-center mb-10">
            <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-400 underline">Haltūra</span></a>
        </div>
        <div class="flex flex-col space-y-4">
            <a href="/admin/reports" class="hover:underline flex space-x-2 items-center"><span>Sūdzības</span><svg fill="none" class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0012.016 15a4.486 4.486 0 00-3.198 1.318M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"></path>
              </svg></a>
            <a href="/admin/newposts" class="hover:underline flex space-x-2 items-center"><span>Jauni ieraksti</span><svg fill="none" class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5"></path>
              </svg></a>
            <a href="/posts">Atpakaļ</a>
        </div>  
    </div>
    <div class="p-5">
        @foreach ($posts as $post)
        <div class="w-72 p-4 m-4 border-black border-[2px]">
            <div>
                <h1>Nosaukums: {{ $post->title }}</h1>
            </div>
            <div>
                <h1>Apraksts: {{ $post->description }}</h1>
            </div>
            <div class="flex items-center justify-evenly pt-4">
                <form action="/admin/newpost/{{ $post->id }}" method="POST">
                    @csrf
                    <button>Apstiprināt</button>
                </form>
                <form action="/admin/newpost/delete/{{ $post->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button>Dzēst</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection