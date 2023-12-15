@extends('layouts.defaultPage')
@section('content')
<section>
    <div class="bg-[#00296B]">

        <div class="container flex justify-center items-center mx-auto pt-4">
            <img src="/images/girlForms.svg" alt="" class="self-end">
            <div class=" flex flex-col justify-center items-center">
                <div class="relative flex flex-col text-center">
                    <div class="p-40 text-white rounded-full bg-[#7DA5D2] w-fit"></div>
                    <p class="text-white relative bottom-[12rem] right-1.5 text-3xl "">JÁ DECIDI QUE<br>VOU GRAVAR</p>
                </div>
                <div class="relative flex flex-col text-center bottom-[12rem]  left-[6rem]">
                    <div class="p-28 text-white rounded-full bg-white  w-fit relative"></div>
                    <p class=" relative text-2xl bottom-[8rem]">E AGORA?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[url('/images/backgroundA.svg')] bg-no-repeat bg-cover">
        <div class="container mx-auto flex flex-col justify-center items-center h-[70vh] ">
            <h1 class="text-5xl mb-4">É SIMPLES</h1>
            <p class="text-xl">BASTA PREENCHER ESTE FORMULÁRIO</p>
            <p class="text-xl">E AGUARDAR NOSSA EQUIPE ENTRAR EM CONTATO:</p>
            <div class="mt-6">
                <img src="images/menuIcon.svg" alt="" class="inline w-20">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe_A3ruKUWQEy9j96cwrOrdHVsWgHCEXP6lLMD5aIEaV7T7LQ/viewform" class="rounded-full px-32 py-4 bg-white border-8 border-[#00296B] font-dm-sans font-bold text-2xl">FORMULÁRIO</a>
            </div>
        </div>
    </div>
    
</section>
@endsection