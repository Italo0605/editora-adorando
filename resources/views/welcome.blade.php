@extends('layouts.defaultPage')
@section('content')
    <section>
        <div class="bg-[#00296B]">
            <div class="text-white flex items-center justify-center pt-7 max-w-[1100px] mx-auto ">
                <div>
                    <p class="text-2xl tracking-wide">Bem-vindo à Editora Adorando, uma das <br> maiores administradoras de obras <br> musicais cristãs da América Latina.</p>
                    <button class="text-sm bg-[#7DA5D2] px-8 py-4 rounded-full mt-4 font-semibold">SAIBA MAIS</button> 
                </div>
                <img src="/images/mocaHero.svg" alt="" class="w-[30vw] self-end pt-[10vh]">
            </div>
        </div>

        <div class="bg-[#7DA5D2]">
            <div class="flex py-30 justify-between max-w-[1100px] mx-auto items-center h-[80vh]">
                <img src="/images/aLanding.svg" alt="" class="w-96">
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
@endsection
