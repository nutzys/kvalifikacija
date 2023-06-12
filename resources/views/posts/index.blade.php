@extends('layout')

@section('content')
<div class="w-full h-full bg-cover bg-center" style="background-image: url('/img/picture2.jpg');">
    <div class="w-full h-full backdrop-blur-sm backdrop-brightness-50">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full">
                <div class="w-fit h-full flex flex-col justify-center pl-6">
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-700 underline">Haltūra</span></a>
                </div>
            </nav>
        </div>
        <!-- Under nav div -->
        <div class="w-full h-full flex">
            <!-- Text side -->
            <div class="w-2/4 h-full flex justify-center">
                <div class="flex flex-col justify-center w-3/4 text-6xl font-bold text-center space-y-6">
                    <h1 class="text-white">Jo pelnīt var <span class="underline">tikai darot!</span></h1>
                    <p class="text-yellow-400 font-light text-2xl">Piesakies haltūrai jau tagad, vai ievieto pats!</p>
                    <div class="w-full flex justify-center space-x-6">
                        @if (!Auth::check())
                            <a href="/register" class="text-white flex items-center space-x-2 text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg><span>Reģistrēties</span></a>                            
                        @endif
                        <a href="/posts" class="text-white flex items-center space-x-2 text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg><span>Haltūras</span></a>

                    </div>
                </div>
            </div>
            <!-- Login side -->
            <div class="w-2/4 h-full flex justify-center items-center">
                <!-- LOGIN WHITE BOX -->
                @if(!Auth::check())
                <div class="w-2/4 h-fit bg-white p-6 rounded-lg">
                    <div class="w-full h-1/6 text-xl font-semibold">
                        <h1>Pieslēgties</h1>
                    </div>
                    <div class="w-full h-3/4">
                        <form action="/authenticate/{user}" method="post" class="space-y-2 p-2">
                            @csrf
                            <div class="space-y-3">
                                <h1>E-Pasts</h1>
                                <input type="email" name="email" value="{{ old('email') }}" class="h-8 w-full border-b-2 text-black border-black border-l-8 border-l-yellow-700 focus:outline-0">
                                <p class="text-red-900 text-sm">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="space-y-3">
                                <h1>Parole</h1>
                                <input type="password" name="password" class="h-8 w-full border-b-2 text-black border-black border-l-8 border-l-yellow-700 focus:outline-0">
                                <p class="text-red-900 text-sm">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </p>
                            </div>
                            <div class="w-full flex justify-center pb-4 items-center">
                                <button class="flex space-x-2 items-center text-black text-lg font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg><span>Ienākt</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="w-full h-screen bg-black p-20 snap-start">
    <div class="w-full h-fit flex justify-center">
        <div class="flex flex-col justify-end">
            <h1 class="font-thin text-7xl text-white">- Par Mums -</h1>
        </div>
    </div>
    <div class="w-full h-full flex">
        <!-- Picture side -->
        <div class="h-full w-2/4 flex flex-col justify-center">
            <div class="">
                <img src="/img/picture3.jpg" class="rounded-xl brightness-50">
            </div>
        </div>
        <!-- Text side -->
        <div class="w-2/4 h-full flex justify-start p-20">
            <div class="flex flex-col justify-center border-r-2 border-white border-b-2 pr-10">
                <div class="w-fit h-fit">
                    <ul class="space-y-6 text-white font-thin text-4xl pl-10">
                        <li>Iespēja nopelnīt ekstra kabatas naudu</li>
                        <li>Iespēja piedāvāt savus produktus</li>
                        <li>Iespēja iepazīties ar cilvēkiem</li>
                        <li>Mazāk laiks pavadīts telefonos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full h-screen bg-yellow-700 p-20 snap-start">
    <div class="w-full h-fit flex justify-center">
        <div class="flex flex-col justify-end">
            <h1 class="font-thin text-7xl text-black">- Kā to izdarīt ? -</h1>
        </div>
    </div>
    <div class="w-full h-full flex">
        <div class="w-2/4 h-full flex justify-start p-20">
            <div class="flex flex-col justify-center border-l-2 border-black border-b-2">
                <div class="w-fit h-fit pl-4">
                    <ul class="space-y-6 text-black font-thin text-4xl pl-10">
                        <li>Ievieto haltūru vai haltūras piedāvājumu</li>
                        <li>Gaidi piedāvājumus</li>
                        <li>Dodies un izdari</li>
                        <li>Saņem atalgojumu</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="h-full w-2/4 flex flex-col justify-center">
            <div class="">
                <img src="/img/index-img.jpg" class="rounded-xl brightness-50">
            </div>
        </div>        
    </div>
</div>
<div class="w-full h-screen bg-black p-20 snap-start">
    <div class="w-full h-fit flex justify-center">
        <div class="flex flex-col justify-end">
            <h1 class="font-thin text-7xl text-white">- Statistika -</h1>
        </div>
    </div>
    <div class="w-full h-3/4 flex justify-around p-12 text-white space-x-6">
        <!-- Users -->
        <div class="h-full w-1/3 text-center border-2 border-white p-5">
            <div class="w-full h-full text-4xl font-medium flex flex-col">
                <div class="flex justify-center h-fit">
                    <h1>Aktīvi Lietotāji</h1>
                </div>
                <div class="w-full h-full flex justify-center items-center space-x-3">
                    <h1 class="text-6xl font-extralight">{{ $user_count }}</h1>
                    <svg class="w-11 h-11" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
            </div>
        </div>
        <!-- Posts -->
        <div class="h-full w-1/3 text-center border-2 border-white p-6">
            <div class="w-full h-full text-4xl font-semibold flex flex-col">
                <div class="flex justify-center h-fit">
                    <h1>Haltūras Ieliktas</h1>
                </div>
                <div class="w-full h-full flex justify-center items-center space-x-3">
                    <h1 class="font-light text-6xl">{{ $post_count }}</h1>
                    <svg class="w-11 h-11" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-full h-16 flex justify-center bg-neutral-900">
    <div class="flex flex-col justify-center">
        <h1 class="text-white">TavaHaltūra TM - 2022</h1>
    </div>
</div>

@endsection