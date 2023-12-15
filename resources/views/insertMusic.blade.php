<div>
    <form action="{{route('music.store')}}" method="POST">
        @csrf
        <h1>nome</h1>
        <input type="text" name="name"><br>
        <h1>lyrics</h1>
        <textarea name="lyrics" id="" cols="30" rows="10"></textarea>
        <h1>Singers</h1>
        <input type="text" name="singers"><br>
        <button type="submit">Enviar</button>
   </form>
</div>
