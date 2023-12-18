<div>
    <form action="{{route('music.store')}}" method="POST">
        @csrf
        <h1>nome</h1>
        <input type="text" name="name"><br>

        <h1>Singers</h1>
        <input type="text" name="singers"><br>

        <h1>lyrics</h1>
        <textarea name="lyrics" id="" col="600"></textarea><br>

        <h1>EnglishLyrics</h1>
        <textarea name="englishVer" id="" col="600"></textarea><br>

        <h1>Copyright</h1>
        <textarea name="copyright" id="" col="600"></textarea><br>
        <button type="submit">Enviar</button>
   </form>
</div>
