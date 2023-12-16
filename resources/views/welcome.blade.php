@extends('layouts.defaultPage')
@section('content')
    <section>
        <div class="h-[90.2vh] bg-[#00296B]">
            <div class="text-white flex items-center justify-center mx-auto h-full flex-wrap">
                <div class="shrink-0">
                    <p class="text-3xl tracking-wide">Bem-vindo à Editora Adorando, uma das <br> maiores administradoras de obras <br> musicais cristãs da América Latina.</p>
                    <button id="saibaMaisBtn" class="text-sm bg-[#7DA5D2] px-8 py-4 rounded-full mt-4 font-semibold transition duration-500 hover:bg-white hover:text-[#00296B]">SAIBA MAIS</button> 
                </div>
                <img src="/images/mocaHero.svg" alt="" class="self-end">
            </div>
        </div>

        <div class="bg-[#7DA5D2] h-[87.6vh]" id="parte2">
            <div class="flex py-30 justify-between max-w-[1100px] mx-auto items-center h-full ">
                <img src="/images/aLanding.svg" alt="" class="w-[30vw]">
                <div class="text-end">
                    <h1 class="text-6xl text-white">Entre em contato <br>conosco!</h1>
                    <div class="mt-6">
                        <img src="/images/locate.svg" alt="" class="inline">
                        <p class="inline text-gray-600">Alameda do Ingá, 38 - Vila da Serra <span class="font-semibold">Nova Lima/MG</span></p>
                    </div>
                    <div>
                        <img src="/images/mail.svg" alt="" class="inline">
                        <p class="inline text-gray-600">atendimento@adorando.com.br</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Adicionando um listener de clique ao botão "SAIBA MAIS"
        document.getElementById('saibaMaisBtn').addEventListener('click', function() {
            // Scroll suave para a seção com ID 'pag2'
            document.getElementById('parte2').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
@endsection
