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
        $content = "Nome da Música: " . ucfirst(Str::lower($music->name)) . "\n";
        $content .= "Nome do Cantor: " . ucfirst(Str::lower($music->singers)) . "\n";
        $content .= "Versão: " . ucfirst(Str::lower($music->name)) . "\n\n";
        $content .= "Letra: \n" . $music->lyrics ."\n\n";
        $content .= $music->copyright;


        $headers = [
            'Content-Security-Policy' => 'upgrade-insecure-requests',
            'Content-Type' => 'text/plain',
            'Content-Disposition' => 'attachment; filename="Music-' . Str::slug($music->name) . '.txt"',
            'Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload'
        ];

        return Response::make($content, 200, $headers);
    }

    public function store(Request $request){
        $music = new Music();
        $music->name  = $request->name;
        $music->singers = $request->singers;
        $music->version = $request->version;
        $music->lyrics = $request->lyrics;
        $music->englishVer = $request->englishVer;
        $music->copyright = $request->copyright;
        $music->save();
        return view('insertMusic');
    }

}
