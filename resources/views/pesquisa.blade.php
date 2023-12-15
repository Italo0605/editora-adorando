@extends('layouts.default')
@section('content')
    {{-- <section class="my-10 h-full">
        <div id="hero" class="container flex flex-col mx-auto text-center gap-7 max-w-screen-md m text-white">
            <div class="flex flex-col gap-2 ">
                <h1 class="text-7xl">Pesquisa Autoral</h1>
                <p class="text-xl">Pesquise e proteja direitos autorais de músicas conosco. Garanta que sua música respeite a autoria e a lei. Estamos aqui para ajudar.</p>
            </div>

            <form id="search-bar" class="flex justify-center rounded-full w-fit mx-auto w-full px-2 py-2 bg-white" method="GEt">
                <input type="text" name="search-button" id="search-button" class="w-full ml-2 focus:outline-none text-black">
                <img src="/images/lupa.svg" alt="">
            </form>
        </div>

        <div id="card-list" class="flex flex-col items-center mt-5">
            @foreach ($musics as $music)
            <a id="card" class="bg-white border rounded-lg flex content-center max-w-screen-md w-full mt-3" href="{{route("music", ['id' => $music->id])}}">
                <img src="/images/playIcon.svg" alt="play" width="30" class= "my-auto mx-2">
                <div class="my-1">
                    <h1 class="text-2xl">{{$music->name}}</h1>
                    <p class="text-sm">{{$music->singers}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section> --}}
    @livewire('search-bar')
@endsection