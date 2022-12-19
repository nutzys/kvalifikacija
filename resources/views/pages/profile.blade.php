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
                        <a href="/stats" class="hover:underline">Statistika</a>
                        <a href="/applied" class="hover:underline">Pieteikumi</a>
                        <a href="/myapplied/{{ auth()->user()->id }}" class="hover:underline">Mani pieteikumi</a>
                        <a href="/settings" class="hover:underline">Iestatījumi</a>
                        <a href="/posts" class="hover:underline">Atpakaļ</a>
                    </div>
                </div>
                <div class="w-full h-fullp-5">
                    <div class="w-full h-14 text-center">
                        <h1 class="text-4xl font-semibold">Profila pārskats</h1>
                    </div>
                    <div class="w-full h-full flex text-2xl font-semibold">
                        <div class="h-full w-1/3 flex flex-col">
                            <div class="pt-10">
                                <div class="text-center">
                                    <h1 class="text-3xl">Par Mani</h1>
                                </div>
                                <div class="p-3">
                                    <p class="text-xl font-thin">{{ $user->bio }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-1/3 flex justify-center items-center">
                            <svg class="w-1/2 h-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <div class="h-full w-1/3 flex flex-col space-y-7">
                            <div class="text-center pt-10">
                                <h1 class="text-3xl">Sīkāk</h1>
                            </div>
                            <div>
                                <h1 class="text-lg">Vārds</h1>
                                <p class="text-xl font-thin">{{ $user->name }}</p>
                            </div>
                            <div>
                                <h1 class="text-lg">E-Pasts</h1>
                                <p class="text-xl font-thin">{{ $user->email }}</p>
                            </div>
                            <div>
                                <h1 class="text-lg">Telefons</h1>
                                <p class="text-xl font-thin">{{ $user->phone }}</p>
                            </div>
                            <div>
                                <h1 class="text-lg">Atrodos</h1>
                                <p class="text-xl font-thin">Valmiera</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
