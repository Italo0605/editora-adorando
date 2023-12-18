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
            
                        <li id="brasilEnabled" class="visible transition-opacity duration-500 ease-in-out"><img src="/images/bandeiraBrasil.svg" alt=""></li>
                        <li id="brasilDisabled" class="hidden transition-opacity duration-500 ease-in-out"><img src="/images/bandeiraBrasilDisabled.svg" alt=""></li>
            
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
                <p class="mt-10 text-center">
                    {{$music->copyright}}
                </p>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            
            $('#EuaDisabled').click(function() {
                toggleVisibility('#EuaEnabled', '#EuaDisabled');
                toggleVisibility('#brasilDisabled', '#brasilEnabled');
                toggleVisibility('#englishVer', '#brasilVer');
            });
            
            $('#brasilDisabled').click(function() {
                toggleVisibility('#brasilEnabled', '#brasilDisabled');
                toggleVisibility('#EuaDisabled', '#EuaEnabled');
                toggleVisibility('#brasilVer', '#englishVer');
            });
            
            function toggleVisibility(show, hide) {
                $(hide).fadeOut(400, function() {
                    $(show).fadeIn(400);
                });
            }
        });
    </script>
@endsection