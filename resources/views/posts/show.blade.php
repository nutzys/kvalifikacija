@extends('layout')

@section('content')
    <!-- Container bg -->
<div class="w-full h-full bg-cover bg-center overflow-hidden" style="background-image: url('/img/picture3.jpg');">
    <div class="w-full h-full backdrop-blur-sm backdrop-brightness-50">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full">
                <div class="w-fit h-full flex flex-col justify-center pl-6">
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-400 underline">Haltūra</span></a>
                </div>
            </nav>
        </div>
        <!-- POST FULL CONTAINER -->
        <div class="w-full h-full flex justify-center items-center">
            <div class="bg-white w-2/4 h-2/4 p-6 space-y-5 rounded-sm flex flex-col justify-evenly">
                <div class="flex justify-between border-b-2 border-black">
                    <h1 class="text-xl font-medium">{{ $post->title }}</h1>
                    <h1>Samaksa: <span class="font-bold text-lg">{{ $post->price }}$</span></h1>
                </div>
                <div class="w-full h-fit flex flex-col justify-between pt-3">
                    <p class="text-lg">{{ $post->description }}</p>
                    <div class="w-full h-14 flex flex-col pt-4">
                        <p class="text-gray-400 text-lg">Atrodas: {{ $post->location->name }}</p>
                        <p class="text-gray-400 text-lg">Ielika: {{ $user->name }}</p>
                        <p class="text-gray-400 text-lg">Ielikts: {{ $post->created_at }}</p>
                    </div>
                </div>
                
                <div class="w-full h-10 flex justify-evenly pt-4">
                    <a href="/posts" class="text-black flex items-center space-x-2 text-lg font-normal border-2 border-yellow-400 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-400 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z"></path></svg><span>Atpakaļ</span></a>
                    @auth
                    @if($user->id != auth()->user()->id)
                    <form action="/apply/{{ $post->id }}" method="post">
                        @csrf
                        <button class="text-black flex items-center space-x-2 text-lg font-normal border-2 border-yellow-400 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-400 hover:text-black hover:transition ease-in duration-200"><svg fill="none" class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"></path>
                          </svg><span>Pieteikties<span></button>
                    </form>
                    @endif
                    <form action="/posts/report/{{ $post->id }}" method="POST">
                        @csrf
                        <button class="text-black flex items-center space-x-2 text-lg font-normal border-2 border-yellow-400 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-400 hover:text-black hover:transition ease-in duration-200">Ziņot</button>
                    </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>

@endsection