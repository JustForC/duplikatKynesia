<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Language;

class TableLanguage extends Component
{
    protected $listeners = [
        'refreshLanguage' => '$refresh'
    ];

    public function select($id, $select)
    {
        if($select == "edit"){
            $this->emit('getLanguage', $id);
        }
        elseif($select == "delete"){
            $this->emit('deleteLanguage', $id);
        }
    }

    public function render()
    {
        $languages = Language::where('user_id', '=', Auth::user()->id)->get();
        return view('livewire.table-language')->with(['languages' => $languages]);
    }
}
