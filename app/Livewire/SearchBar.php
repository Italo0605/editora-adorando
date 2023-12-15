<?php

namespace App\Livewire;

use App\Models\Music;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";

    public function render()
    {
        $results = [];
        if(strlen($this->search) >=1){
            $results = Music::where('name', 'like', '%'.$this->search."%")->get();
        }else{
            $results = Music::all();
        }

        return view('livewire.search-bar', [
            'musics' => $results
        ]);
    }
}
