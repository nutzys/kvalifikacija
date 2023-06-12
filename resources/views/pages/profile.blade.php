@extends('layout')

@section('content')
<div class="w-full h-screen bg-cover bg-center overflow-hidden" style="background-image: url('/img/picture3.jpg');">
    <div class="w-full h-full backdrop-blur-sm backdrop-brightness-50">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full">
                <div class="w-fit h-full flex flex-col justify-center pl-6">
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-400 underline">Haltūra</span></a>
                </div>
            </nav>
        </div>
        <div class="w-full h-3/4 flex justify-center p-8">
            <div class="h-full w-4/5 flex">
                <div class="w-1/5 h-full flex flex-col bg-yellow-500">
                    <div class="flex flex-col space-y-10 items-center w-full h-full text-lg">
                        <a href="/profile/{{ auth()->user()->id }}" class="hover:underline">Profils</a>
                        <a href="/applied" class="hover:underline">Pieteikumi</a>
                        <a href="/myapplied/{{ auth()->user()->id }}" class="hover:underline">Mani pieteikumi</a>
                        <a href="/settings" class="hover:underline">Iestatījumi</a>
                        <a href="/posts" class="hover:underline">Atpakaļ</a>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col bg-white">
                    <div class="w-full h-1/2 flex">
                        <div class="h-full w-2/6">
                            <h1 class="text-5xl">{{ $user->name }}</h1>
                        </div>
                        <div class="h-1/2 w-2/6 flex flex-col justify-evenly">
                            <p class="flex items-center text-gray-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                              </svg>{{ $user->phone }}</p>
                            <p class="flex  items-center text-gray-500"><svg fill="none" class="w-5 h-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25"></path>
                              </svg>{{ $user->email }}</p>
                        </div>
                        <div class="h-full w-2/6 flex flex-col flex-wrap">
                            <p class="text-2xl">Par mani:</p>
                            <div class="w-full break-words">
                                <p class="w-full text-gray-500">{{ $user->bio }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-1/2 flex justify-evenly">
                        <div class="w-1/4 h-4/5 border-2 border-black flex flex-col rounded-md">
                            <h1 class="text-center text-2xl">Haltūras kopā</h1>
                            <div class="flex justify-center items-center w-full h-full">
                                <h1 class="text-7xl text-center">{{ $user->post_count }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
