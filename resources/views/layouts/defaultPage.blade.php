<!DOCTYPE html>
<html lang="en">
@extends('layouts.head')
<body class="flex flex-col min-h-screen font-didact">
    <header class="bg-[#00296B]">
        <div class="container mx-auto flex justify-between items-center max-w-5xl p-2 items-center">
            {{-- IMAGE --}}
            <a href="{{route("home")}}" >
              <img src="/images/logoAdorandoWhite.svg" alt="logo">
            </a>         
                {{-- NAV-BAR --}}
            <nav class="flex justify-between items-center gap-10 items-center text-[#4977AB]">
              <h3 class="cursor-pointer text-sm font-semibold transition duration-300 hover:text-gray-600"><a href="{{route("home")}}">Início</a></h3>
              
              <li class="group dropdown  px-4 text-sm font-semibold cursor-pointer font-bold text-base tracking-wide list-none " >
                <a>Pesquisa e Licença Autoral</a>
                <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 15 9" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4351 2.34285L8.07117 8.70681C7.68065 9.09733 7.04748 9.09733 6.65696 8.70681L0.292998 2.34285C-0.0975266 1.95232 -0.0975266 1.31916 0.292998 0.928635C0.683523 0.538111 1.31669 0.538111 1.70721 0.928635L7.36407 6.58549L13.0209 0.928635C13.4114 0.538111 14.0446 0.538111 14.4351 0.928635C14.8257 1.31916 14.8257 1.95232 14.4351 2.34285Z" fill="#4977AB"/>
                </svg>
                <div class="group-hover:block dropdown-menu absolute hidden h-auto ">
                  
                  <ul class="top-0 w-50 bg-white shadow px-6 py-8 text-center rounded-lg ">
                    <li class="py-1"><a class="block text-black text-sm font-semibold text-base uppercase hover:text-gray-600 cursor-pointer transition duration-300" href="{{route('music')}}">PESQUISAR</a></li>
                    <li class="py-1"><a class="block text-black text-sm font-semibold text-base uppercase hover:text-gray-600 cursor-pointer transition duration-300" href="{{route('form-page')}}">JÁ DECIDI QUE VOU GRAVAR</a></li>
                    <li class="py-1"><a class="block text-black text-sm font-semibold  text-base uppercase hover:text-gray-600 cursor-pointer transition duration-300" href="{{route('mail-page')}}">OPS! NÃO ENCONTREI O <BR> QUE ESTAVA PROCURANDO</a></li>
                  </ul>
                </div>
              </li>
                  
              <h3 class="cursor-pointer text-sm font-semibold transition duration-300 hover:text-gray-600">Quem Somos</h3>
              <h3 class="cursor-pointer text-sm font-semibold transition duration-300 hover:text-gray-600">Artigos</h3>
            </nav>
            {{-- LOGIN Button --}}
            <button class="text-white border-2 rounded-full px-6 py-2 text-sm font-bold hover:bg-white hover:border-transparent hover:text-[#00296B] transition duration-500">LOGIN</button>
        </div>
    </header>

    {{-- CONTENT HERE --}}
    <div class="flex-grow">
        @yield("content")
    </div>
        
    <footer class="bg-[#00296B]"><div class="container mx-auto max-w-3xl py-10 text-center text-white">©2023 - Editora Adorando. <br>
        Todos os direitos reservados.</div></footer>
</body>
</html>