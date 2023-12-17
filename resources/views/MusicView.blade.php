@extends('layouts.default')
@section('content')
    <section>
        <div id="musicDetails" class="container flex flex-col mx-auto gap-7 max-w-[800px] py-4 px-10 bg-white rounded-lg my-10 min-h-[700px]">
            <div id="header" class="flex justify-between space-x-4 w-full items-center">
                {{-- PLAYIcon --}}
                <img src="/images/playIcon.svg" alt="play" width="40" height="50">
                <div>
                    <h1 class="text-3xl capitalize">{{Str::lower($music->name)}}</h1>
                    <p class="text-[#7C7C7C]">{{$music->singers}}</p>
                    <p>Versão: {{$music->version}}</p>
                </div>
                <a class="flex items-center px-4 py-2 border rounded-lg gap-2 min-w-[180px] justify-center" href="{{ route('music.download', ['id' => $music->id]) }}">
                    <img src="/images/downloadIcon.svg" alt="downloadIco">
                    <h2 class="text-lg font-semibold ">Baixar Letra</h2>
                </a>
            </div>
            <div id="content">
                <div class="flex justify-between items-center">
                    <h1 class="text-3xl mb-3">Letra</h1>
                    <ul id="buttons" class=" flex w-20 gap-1 border-2 rounded-md">
            
                        <li id="brasilEnabled" class="visible"><img src="/images/bandeiraBrasil.svg" alt=""></li>
                        <li id="brasilDisabled" class="hidden"><img src="/images/bandeiraBrasilDisabled.svg" alt=""></li>
            
                        <li id="EuaEnabled" class="hidden"><img src="/images/bandeiraEua.svg" alt=""></li>
                        <li id="EuaDisabled" class="visible"><img src="/images/bandeiraEuaDisabled.svg" alt=""></li>
            
                    </ul>
                </div>
                <div id="brasilVer" class="whitespace-pre-line text-start visible">
                    {{$music->lyrics}}
                </div>
                <div id='englishVer' class="whitespace-pre-line text-start hidden">
                    {{$music->englishVer}}
                </div>
                <p class="mt-10 text-center">Copyright © 2021 and this translation © 2021 From The Void (SESAC) /
                    FairTrade Tunes (SESAC) / Integrity's Praise! Music (BMI) / A Wong Made
                    Write Publishing (BMI) / Fun Attic Music (ASCAP) / Pure Psalms Music (BMI).
                    All rights reserved. Used by permission.
                    Editora Adorando (Translation)
                    edvania.veloso@onimusic.com.br</p>
            </div>
        </div>
    </section>
    <script>
        eua = document.querySelector('#EuaDisabled');
        eua.addEventListener('click', function(){
            document.querySelector('#EuaEnabled').classList.replace('hidden', 'visible');
            document.querySelector('#EuaDisabled').classList.replace('visible', 'hidden');
            document.querySelector('#brasilEnabled').classList.replace('visible', 'hidden');
            document.querySelector('#brasilDisabled').classList.replace('hidden', 'visible');
            document.querySelector('#brasilVer').classList.replace('visible', 'hidden');
            document.querySelector('#englishVer').classList.replace('hidden', 'visible');
        });
        brasil = document.querySelector('#brasilDisabled');
        brasil.addEventListener('click', function(){
            document.querySelector('#brasilDisabled').classList.replace('visible', 'hidden');
            document.querySelector('#brasilEnabled').classList.replace('hidden', 'visible');
            document.querySelector('#EuaEnabled').classList.replace('visible', 'hidden');
            document.querySelector('#EuaDisabled').classList.replace('hidden', 'visible');
            document.querySelector('#englishVer').classList.replace('visible', 'hidden');
            document.querySelector('#brasilVer').classList.replace('hidden', 'visible');
        });
    </script>
@endsection