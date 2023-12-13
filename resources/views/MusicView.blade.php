@extends('layouts.default')
@section('content')
    <section>
        <div id="musicDetails" class="container flex flex-col mx-auto gap-7 max-w-[650px] py-4 px-10 bg-white rounded-lg my-5 min-h-[700px]">
            <div id="header" class="flex justify-between space-x-4 w-full items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" viewBox="0 0 54 60" fill="none">
                    <g filter="url(#filter0_d_182_776)">
                    <path d="M3 7.22368C3 2.23537 8.4 -0.882309 12.72 1.61184L47.28 21.5651C51.6 24.0592 51.6 30.2946 47.28 32.7888L12.72 52.742C8.39999 55.2361 3 52.1184 3 47.1301L3 7.22368Z" fill="#4977AB"/>
                    </g>
                    <defs>
                    <filter id="filter0_d_182_776" x="0.12" y="0.734375" width="53.2795" height="58.6457" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="2.88"/>
                    <feGaussianBlur stdDeviation="1.44"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_182_776"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_182_776" result="shape"/>
                    </filter>
                <div>
                    <h1 class="text-3xl">{{$music->name}}</h1>
                    <p>{{$music->singers}}</p>
                </div>
                <button class="flex items-center px-4 py-2 border rounded-lg gap-2 min-w-[180px] justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 22 23" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.53142 12.8385L9.82889 22.136C10.3994 22.7066 11.3245 22.7066 11.895 22.136L21.1925 12.8385C21.763 12.268 21.763 11.343 21.1925 10.7724C20.6219 10.2019 19.6969 10.2019 19.1264 10.7724L12.3229 17.5759L12.3229 2.36623C12.3229 1.55937 11.6688 0.905273 10.8619 0.905273C10.0551 0.905273 9.40099 1.55937 9.40099 2.36623L9.40099 17.5759L2.59753 10.7724C2.02699 10.2019 1.10196 10.2019 0.53142 10.7724C-0.0391192 11.343 -0.0391192 12.268 0.53142 12.8385Z" fill="#4977AB"/>
                    </svg>
                    <h2 class="text-lg font-semibold ">Baixar Letra</h2>
                </button>
            </div>
            <div id="content">
                <h1 class="text-3xl mb-3">Letra</h1>
                <div>
                    {{$music->lyrics}}
                </div>
            </div>
        </div>
    </section>
@endsection