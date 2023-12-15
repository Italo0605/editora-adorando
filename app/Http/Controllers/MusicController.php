<?php

namespace App\Http\Controllers;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class MusicController extends Controller
{
    public function index(){
        $musics = Music::all();
        return view("pesquisa", [
            'musics' => $musics
        ]);

    }

    public function getMusic($id){
        $music = Music::find($id);
        return view("MusicView", [
            'music' => $music
        ]);
    }

    public function downloadMusic($id){
        $music = Music::findOrFail($id);

        $content = "Nome da Música: " . $music->name . "\n";
        $content .= "Nome do Cantor: " . $music->singers . "\n\n";
        $content .= "Letra da Música:\n" . $music->lyrics;

        $headers = [
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="Music-' . Str::slug($music->name) . '.txt"',
        ];
        return Response::make($content, 200, $headers);
    }

}
