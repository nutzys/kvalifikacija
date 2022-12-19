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
        <!-- BIG CONTAINER -->
        <div class="w-full h-full flex justify-center items-center">
            <div class="h-fit w-96 bg-white p-6 rounded-sm">
                <div class="w-full h-5 text-center">
                    <h1 class="text-2xl font-semibold">Reģistrācija</h1>
                </div>
                <!-- Forms -->
                <div>
                    <form action="/register/{user}" method="post" class="space-y-2">
                        @csrf
                        <div class="space-y-2">
                            <h1 class="text-lg font-semibold">Vārds</h1>
                            <input type="text" name="name" value="{{ old('name') }}" class="h-8 w-full border-b-[1px] text-black border-black border-l-4 border-l-yellow-700 focus:outline-0">
                            <p class="text-red-700">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-lg font-semibold">E-Pasts</h1>
                            <input type="email" name="email" value="{{ old('email') }}" class="h-8 w-full border-b-[1px] text-black border-black border-l-4 border-l-yellow-700 focus:outline-0">
                            <p class="text-red-700">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-lg font-semibold">Parole</h1>
                            <input type="password" name="password" class="h-8 w-full border-b-[1px] text-black border-black border-l-4 border-l-yellow-700 focus:outline-0">
                            <p class="text-red-700">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-lg font-semibold">Atkārtota Parole</h1>
                            <input type="password" name="conf_password" class="h-8 w-full border-b-[1px] text-black border-black border-l-4 border-l-yellow-700 focus:outline-0">
                            <p class="text-red-700">
                                @error('conf_password')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="space-y-2">
                            <h1 class="text-lg font-semibold">Telefons</h1>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="h-8 w-full border-b-[1px] text-black border-black border-l-4 border-l-yellow-700 focus:outline-0">
                            <p class="text-red-700">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <div class="w-full flex justify-evenly pt-4">
                            <button class="text-black text-base font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200">Reģistēties</button>
                            <a href="/posts" class="text-black text-base font-normal border-2 border-yellow-700 rounded-full w-fit h-fit py-2 px-4 hover:bg-yellow-700 hover:text-black hover:transition ease-in duration-200">Atpakaļ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection