<?php

namespace App\Http\Controllers;
use App\Models\Music;
use Illuminate\Http\Request;

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

}
