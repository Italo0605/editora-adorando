@extends('layouts.default')
@section('content')
    <section>
        <div id="musicDetails" class="container flex flex-col mx-auto gap-7 max-w-[650px] py-4 px-10 bg-white rounded-lg my-5 min-h-[700px]">
            <div id="header" class="flex justify-between space-x-4 w-full items-center">
                {{-- PLAYIcon --}}
                <img src="/images/playIcon.svg" alt="play" width="40" height="50">
                <div>
                    <h1 class="text-3xl">{{$music->name}}</h1>
                    <p>{{$music->singers}}</p>
                </div>
                <button class="flex items-center px-4 py-2 border rounded-lg gap-2 min-w-[180px] justify-center">
                    <img src="/images/downloadIcon.svg" alt="downloadIco">
                    <h2 class="text-lg font-semibold ">Baixar Letra</h2>
                </button>
            </div>
            <div id="content">
                <h1 class="text-3xl mb-3">Letra</h1>
                <div class="whitespace-pre-line text-start">
                    {{$music->lyrics}}
                </div>
            </div>
        </div>
    </section>
@endsection