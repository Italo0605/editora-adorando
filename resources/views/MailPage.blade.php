@extends('layouts.defaultPage')
@section('content')
<section>
    <div class="bg-[#00296B] h-[90vh]">
        <div class="content flex mx-auto justify-center pt-8 h-full ">
            <div id="button1" class="group relative bg-[#7DA5D2] flex justify-center items-center shrink-0 cursor-pointer min-w-64 w-64 h-64 rounded-full text-white text-center left-[12rem] top-[6rem] border-8 border-[#7DA5D2] hover:bg-white hover:border-8 hover:border-[#7DA5D2] transition-colors duration-500">
                <a class="text-2xl transition-colors group-hover:text-black transition-colors duration-500">NÃO ENCONTREI <br> O QUE ESTAVA<br> PROCURANDO</a>
            </div>
            <img src="/images/manMail.svg" alt="" class="">
            <div id="button2" class="group relative bg-white flex justify-center items-center shrink-0 cursor-pointer min-w-48 w-48 h-48 rounded-full p-7 text-center border-8 border-white right-[13rem] top-[6rem] hover:bg-[#00296B] transition-colors duration-500">
                <a class="text-[#00296B] text-4xl  transition-colors group-hover:text-white transition-colors duration-500">O QUE <br> FAZER?</a>
            </div>
        </div>
    </div>

    <div id="formPart" class="bg-[url('/images/backgroundA.svg')] bg-no-repeat bg-cover">
        <div class="container mx-auto flex flex-col justify-center items-center h-[90vh] text-white">
            <h1 class="text-5xl mb-4">É SIMPLES</h1>
            <p class="text-xl">BASTA PREENCHER ESTE FORMULÁRIO</p>
            <p class="text-xl">E AGUARDAR NOSSA EQUIPE ENTRAR EM CONTATO:</p>
            <div class="mt-6 flex items-center">
                <img src="images/menuIcon.svg" alt="" class="inline w-20">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe_A3ruKUWQEy9j96cwrOrdHVsWgHCEXP6lLMD5aIEaV7T7LQ/viewform" class="rounded-full px-32 py-4 bg-white border-8 border-[#00296B] font-dm-sans font-bold text-2xl text-black">FORMULÁRIO</a>
            </div>
        </div>
    </div>
    
</section>
<script>
    // Adicionando um listener de clique ao botão "SAIBA MAIS"
    document.getElementById('button1').addEventListener('click', function() {
        document.getElementById('formPart').scrollIntoView({ behavior: 'smooth' });
    });
    document.getElementById('button2').addEventListener('click', function() {
        document.getElementById('formPart').scrollIntoView({ behavior: 'smooth' });
    });
</script>
@endsection