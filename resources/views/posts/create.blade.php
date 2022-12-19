@extends('layout')

@section('content')
<div class="w-screen h-full bg-cover bg-no-repeat overflow-hidden" style="background-image: url('/img/index-img.jpg');">
    <div class="w-full h-full backdrop-blur-sm backdrop-brightness-50">
        <div class="w-full h-20 bg-gradient-to-b from-black">
            <nav class="w-full h-full">
                <div class="w-fit h-full flex items-center pl-6">
                    <a href="/" class="text-white text-4xl font-extrabold">Tava<span class="text-yellow-700 underline">Haltūra</span></a>
                </div>
            </nav>
        </div>
        <div class="w-full h-full flex justify-center items-center">
            
            <div class="h-fit w-2/4 p-6 bg-white">
                <div class="w-full h-5 flex justify-center">
                    <h1 class="text-2xl font-bold">Izveidot Jaunu</h1>
                </div>
                <form action="/posts/{post}" method="post" class="space-y-5">
                    @csrf
                    <div class="space-y-2">
                        <h1 class="text-lg font-semibold">Nosaukums</h1>
                        <input type="text" name="title" class="h-8 w-full border-b-[1px] text-black border-black border-l-8 border-l-yellow-700 focus:outline-0">
                        <p></p>
                    </div>
                    <div class="space-y-2">
                        <h1 class="text-lg font-semibold">Teksts</h1>
                        <textarea name="description" cols="30" rows="5" class="w-full border-[1px] border-black resize-none"></textarea>
                        <p></p>
                    </div>
                    <div class="w-full flex justify-evenly">
                        <select name="location_id" class="border-[1px] border-black p-1">
                            <option value="" selected disabled hidden>Vieta</option>
                            @foreach ($location as $loc)
                                <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                            @endforeach
                        </select>
                        <select name="type_id" class="border-[1px] border-black p-1">
                            <option value="" selected disabled hidden>Tips</option>
                            @foreach ($type as $typ)
                                <option value="{{ $typ->id }}">{{ $typ->name }}</option>
                            @endforeach
                        </select>
                        <input type="text" name="price" placeholder="Cena" class="h-8 w-1/3 border-b-[1px] text-black border-black border-l-8 border-l-yellow-700 focus:outline-0">
                    </div>
                    <div class="w-full flex justify-evenly">
                        <button class="flex items-center space-x-2 text-black text-base font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg><span>Izveidot</span></button>
                        <a href="/posts" class="flex items-center space-x-2 text-black text-base font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0019 16V8a1 1 0 00-1.6-.8l-5.333 4zM4.066 11.2a1 1 0 000 1.6l5.334 4A1 1 0 0011 16V8a1 1 0 00-1.6-.8l-5.334 4z"></path></svg><span>Atpakaļ</span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection