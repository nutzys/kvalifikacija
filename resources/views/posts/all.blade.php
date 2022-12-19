@extends('layout')

@section('content')
<div class="w-full h-3/4 bg-cover bg-center bg-fixed" style="background-image: url('/img/index-img.jpg');">
    <div class="w-full h-full backdrop-blur-sm flex flex-col">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full flex justify-between p-6">
                <div class="w-fit h-full flex items-center">=~
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-700 underline">Haltūra</span></a>
                </div>
                <!-- Buttons -->
                <div class="flex space-x-6 items-center">
                    @auth
                    <h1 class="text-white text-2xl underline">Sveiki, {{ auth()->user()->name }}!</h1>
                    <a href="/posts/create" class="flex space-x-2 items-center text-white text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg><span>Izveidot</span></a>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="flex space-x-2 items-center justify-center text-white text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg><span>Iziet</span></button>
                    </form>
                    <a href="/profile/{{ auth()->user()->id }}" class="flex space-x-2 items-center text-white text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200""><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg><span>Profils</span></a>
                    @else
                    <a href="/" class="flex space-x-2 items-center text-white text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg><span>Ienākt</span></a>
                    @endauth
                </div>
            </nav>
        </div>
        <div class="w-full h-full flex justify-center items-center">
            <h1 class="text-5xl text-white font-bold">- Piesakies haltūrai jau šodien, tagad! -</h1>
        </div>
    </div>
</div>
<!-- POST CONTAINER -->
<div class="w-full h-fit flex justify-center">
    <div class="h-full sm:w-2/4">
        <div class="w-full h-fit p-6 flex justify-center">
            <h1 class="text-3xl">Izvēlies savu!</h1>
        </div>
        <!-- Foreach divs -->
        @foreach ($posts as $post)

        <div class="w-full h-52 border-[1px] border-black p-4 flex my-4">
            <!-- title, desc, location, views -->
            <div class="w-3/4 h-full p-2">
                <div class="w-full h-1/4 flex items-center">
                    <h1 class="text-xl">{{ $post->title }}</h1>
                </div>
                <div class="w-full h-1/2 ">
                    <h1 class="text-gray-500 text-sm truncate">{{ $post->description }}</h1>
                </div>
                <div class="w-full h-1/4 flex justify-evenly">
                    <h1 class="flex space-x-2 items-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><span class="text-gray-500">{{ $post->location->name }}</span></h1>
                    <h1 class="flex space-x-2 items-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg><span class="text-gray-500">246</span></h1>
                    <h1 class="flex space-x-2 items-center"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg><span class="text-gray-500">{{ $post->type->name }}</span></h1>
                </div>
            </div>
            
            <!-- type, price, button -->
            <div class="w-1/4 h-full">
                <div class="flex w-full h-full items-center justify-center">
                    <a href="/posts/{{ $post->id }}" class="flex space-x-2 items-center text-black text-sm font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg><span>Apskatīt</span></a>
                </div>
            </div>
        </div>            
        @endforeach
    </div>
</div>
