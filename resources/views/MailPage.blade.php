@extends('layouts.defaultPage')
@section('content')
<section>
    <div class="bg-[#00296B]">
        <div class="content flex mx-auto justify-center pt-8">
            <div class="relative bg-[#7DA5D2] flex justify-center items-center w-56 h-56 rounded-full  text-center left-[12rem] top-[7rem]">
                <a href="" class="text-xl">NÃO ENCONTREI O QUE ESTAVA PROCURANDO</a>
            </div>
            <img src="/images/manMail.svg" alt="" class="">
            <div class="relative bg-white flex justify-center items-center w-48 h-48 rounded-full p-7 text-center border right-[13rem] top-[7rem]">
                <a href="" class="text-3xl">O QUE FAZER?</a>
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