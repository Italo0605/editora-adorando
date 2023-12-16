@extends('layouts.defaultPage')
@section('content')
<section>
    <div class="bg-[#00296B]">

        <div class="container flex justify-center items-center mx-auto pt-4">
            <img src="/images/girlForms.svg" alt="" class="self-end">
            <div class="flex flex-col self-start items-center">
                <div  class="group cursor-pointer w-80 h-80 bg-[#7DA5D2] rounded-full flex justify-center items-center relative right-[80px] border-8 border-[#7DA5D2] hover:bg-white hover:border-8 hover:border-[#7DA5D2] transition-colors duration-500">
                    <p class="text-white text-3xl transition-colors group-hover:text-black transition-colors duration-500">JÁ DECIDI QUE<br>VOU GRAVAR</p>
                </div>
                <div class="group cursor-pointer flex justify-center items-center w-48 h-48 bg-white border-8 border-white rounded-full relative -right-[50px] -top-[90px] hover:bg-[#00296B] hover:border-8 hover:border-[##00266B] transition-colors duration-500">
                    <p class="text-[#00296B] text-2xl group-hover:text-white transition-colors duration-500">E AGORA?</p>
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