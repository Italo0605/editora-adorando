@extends('layouts.defaultPage')
@section('content')
<section>
    <div class="bg-[#00296B]">
        <div class="content flex mx-auto justify-center pt-8">
            <div class="group relative bg-[#7DA5D2] flex justify-center items-center min-w-64 w-64 h-64 rounded-full text-white text-center left-[12rem] top-[6rem] border-8 border-[#7DA5D2] hover:bg-white hover:border-8 hover:border-[#7DA5D2] transition-colors duration-500">
                <a href="" class="text-2xl transition-colors group-hover:text-black transition-colors duration-500">NÃO ENCONTREI <br> O QUE ESTAVA<br> PROCURANDO</a>
            </div>
            <img src="/images/manMail.svg" alt="" class="">
            <div class="group relative bg-white flex justify-center items-center min-w-48 w-48 h-48 rounded-full p-7 text-center border-8 border-white right-[13rem] top-[6rem] hover:bg-[#00296B] transition-colors duration-500">
                <a href="" class="text-[#00296B] text-4xl transition-colors group-hover:text-white transition-colors duration-500">O QUE <br> FAZER?</a>
            </div>
        </div>
    </div>

    <div class="bg-[url('/images/backgroundA.svg')] bg-no-repeat bg-cover">
        <div class="content flex mx-auto justify-center items-center">
            <img src="/images/mailHands.svg" alt="">
            <div class="text-justify flex flex-col items-center text-white">
                <h1 class="text-8xl">Mande um</h1>
                <h1 class="text-8xl ">e-mail para</h1>
                <p class="text-4xl my-10">atendimento@adorando.com.br</p>
                <h1 class="text-7xl">e receba mais</h1>
                <h1 class="text-8xl">informações</h1>
            </div>
        </div>
    </div>
</section>
@endsection