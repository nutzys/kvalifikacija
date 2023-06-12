@extends('layout')

@section('content')
<div class="w-full h-full bg-cover bg-center overflow-hidden" style="background-image: url('/img/picture3.jpg');">
    <div class="w-full h-full backdrop-blur-sm backdrop-brightness-50">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full">
                <div class="w-fit h-full flex flex-col justify-center pl-6">
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-400 underline">Haltūra</span></a>
                </div>
            </nav>
        </div>
        <div class="w-full h-3/4 flex justify-center p-8">
            <div class="h-full w-4/5 flex bg-white">
                <div class="w-1/5 h-full flex flex-col bg-yellow-500">
                    <div class="flex flex-col space-y-10 items-center w-full h-full text-lg">
                        <a href="/profile/{{ auth()->user()->id }}" class="hover:underline">Profils</a>
                        <a href="/applied" class="hover:underline">Pieteikumi</a>
                        <a href="/myapplied/{{ auth()->user()->id }}" class="hover:underline">Mani pieteikumi</a>
                        <a href="/settings" class="hover:underline">Iestatījumi</a>
                        <a href="/posts" class="hover:underline">Atpakaļ</a>
                    </div>
                </div>
                <div>
                    @foreach ($posts as $post)
                    <div class="m-4 border-black">
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </div>
                    @endforeach
                </div>    
            </div>
        </div>
    </div>
</div> 
@endsection
