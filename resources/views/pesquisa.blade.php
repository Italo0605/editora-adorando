@extends('layouts.default')
@section('content')
    <section class="my-10 h-full">
        <div id="hero" class="container flex flex-col mx-auto text-center gap-7 max-w-screen-md m text-white">
            <div class="flex flex-col gap-2 ">
                <h1 class="text-7xl">Pesquisa Autoral</h1>
                <p class="text-xl">Pesquise e proteja direitos autorais de músicas conosco. Garanta que sua música respeite a autoria e a lei. Estamos aqui para ajudar.</p>
            </div>
            <div id="search-bar" class="flex justify-center rounded-full w-fit mx-auto w-full px-2 py-1 bg-white">
                <input type="text" name="search-button" class="w-full">
                <svg width="30" height="30" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Union">
                        <path id="Union_2" fill-rule="evenodd" clip-rule="evenodd" d="M23.9434 5.58308C29.4238 10.2426 30.0891 18.4627 25.4296 23.943C20.77 29.4234 12.55 30.0888 7.06965 25.4292C1.5893 20.7696 0.923908 12.5496 5.58346 7.06927C10.243 1.58891 18.463 0.923523 23.9434 5.58308ZM25.2392 27.5806L32.0602 33.3801C32.7561 33.9718 33.7999 33.8873 34.3916 33.1913L35.9987 31.3012C36.5904 30.6053 36.5059 29.5615 35.8099 28.9698L28.989 23.1704C32.6073 16.8219 31.3211 8.59938 25.5504 3.69297C19.0262 -1.85412 9.24045 -1.06199 3.69336 5.46225C-1.85373 11.9865 -1.0616 21.7722 5.46263 27.3193C11.2332 32.2256 19.5553 32.1727 25.2392 27.5806Z" fill="black"/>
                    </g>
                </svg>
            </div>
        </div>

        <div id="card-list" class="flex flex-col items-center mt-5">
            @foreach ($musics as $music)
            <div id="card" class="bg-white border rounded-lg flex content-center max-w-screen-md w-full mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" class= "my-auto mx-2" width="40" height="40" viewBox="0 0 54 60" fill="none">
                    <g filter="url(#filter0_d_248_252)">
                    <path d="M3 7.22368C3 2.23537 8.4 -0.882309 12.72 1.61184L47.28 21.5651C51.6 24.0592 51.6 30.2946 47.28 32.7888L12.72 52.742C8.39999 55.2361 3 52.1185 3 47.1301L3 7.22368Z" fill="#4977AB"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_248_252" x="0.12" y="0.734375" width="53.2795" height="58.6457" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="2.88"/>
                    <feGaussianBlur stdDeviation="1.44"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_248_252"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_248_252" result="shape"/>
                    </filter>
                <div class="my-1">
                    <h1 class="text-2xl">{{$music->name}}</h1>
                    <p class="text-sm">{{$music->singers}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection