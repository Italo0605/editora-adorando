<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                "didact" : ['Didact Gothic', 'sans-serif']
              }
            }
          }
        }
      </script>
    <title>Document</title>
</head>
<body class="flex flex-col min-h-screen font-didact">
    <header style="background-color: #00296B; ">
        <div class="container mx-auto flex justify-between items-center max-w-5xl p-2 items-center">
            {{-- IMAGE --}}
            <a href="{{route("home")}}" >
              <img src="/images/logoAdorandoWhite.svg" alt="logo">
            </a>         
                {{-- NAV-BAR --}}
            <nav class="flex justify-between items-center gap-10 items-center">
                <h3 class="cursor-pointer text-white border-b-zinc-300 text-sm"><a href="{{route("home")}}">Início</a></h3>
                <h3 class="cursor-pointer text-white text-sm">Pesquisa e Licença Autoral</h3>
                <h3 class="cursor-pointer text-white text-sm">Quem Somos</h3>
                <h3 class="cursor-pointer text-white text-sm">Artigos</h3>
            </nav>
            {{-- LOGIN Button --}}
            <button class="text-white border-2 rounded-full px-6 py-2 text-sm">Login</button>
        </div>
    </header>

    {{-- CONTENT HERE --}}
    <div class="flex-grow bg-[url('/images/bgImage.png')] bg-no-repeat bg-center bg-cover">
        @yield("content")
    </div>
        
    <footer style="background: #4977AB;"><div class="container mx-auto max-w-3xl p-2 text-center">©2023 - Editora Adorando. <br>
        Todos os direitos reservados.</div></footer>
</body>
</html>