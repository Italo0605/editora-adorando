<section class="my-10 h-full">
    <div id="hero" class="container flex flex-col mx-auto text-center gap-7 max-w-screen-md m text-white">
        <div class="flex flex-col gap-2 ">
            <h1 class="text-7xl">Pesquisa Autoral</h1>
            <p class="text-xl">Pesquise e proteja direitos autorais de músicas conosco. Garanta que sua música respeite a autoria e a lei. Estamos aqui para ajudar.</p>
        </div>

        <form id="search-bar" class="flex justify-center rounded-full w-fit mx-auto w-full px-2 py-3 bg-white" method="GET">
            <input wire:model.live="search" type="text" name="search-button" id="search-button" class="w-full ml-2 focus:outline-none text-black">
            <img src="/images/lupa.svg" alt="">
        </form>
    </div>

    <div id="card-list" class="flex flex-col items-center mt-5">
            @foreach ($musics as $music)
            <a class="card group bg-white border rounded-lg flex content-center max-w-screen-md w-full mt-3 hover:bg-[#4977AB] transition-all duration-300" href="{{route("musicSearch", ['id' => $music->id])}}">
                <img src="/images/playIcon.svg" alt="play" width="30" class= "my-auto mx-2 transition-all duration-300 blueIco">
                <div class="my-1">
                    <h1 class="text-2xl capitalize group-hover:text-white transition-all duration-300">{{Str::lower($music->name)}}</h1>
                    <p class="text-sm capitalize text-[#7C7C7C] group-hover:text-white transition-all duration-300">{{Str::lower($music->singers)}}</p>
                </div>
            </a>
        @endforeach
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        function changeImagePath(element, newImagePath) {
            $(element).find('.blueIco').fadeOut(300, function(){
                $(this).attr('src', newImagePath).fadeIn(300);
            });
        }

        $('.card').mouseenter(function () {
            changeImagePath(this, 'images/whitePlayIco.svg');
        }).mouseleave(function () {
            changeImagePath(this, 'images/playIcon.svg');
        });
    });
    </script>
</section>

