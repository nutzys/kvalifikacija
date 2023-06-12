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
    <div class="p-10 flex m-4">
        @foreach ($reports as $report)
        <div class="border-black border-[2px] w-72 h-fit p-3">
            <h1>Nosaukums: <a href="/posts/{{ $report->id }}">{{ $report->title }}</a></h1>
            <h1>Ielika: {{$report->user->name}}</h1>
            <div class="m-4 flex items-center w-full">
                <form action="/admin/delete/{{ $report->id }}" method="POST">
                    @method('delete')
                    @csrf
                    <button class="flex space-x-2 items-center"><span>Dzēst</span><svg fill="none" class="h-5 w-5" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                      </svg></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection