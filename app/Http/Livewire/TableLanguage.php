<?php

namespace App\Http\Livewire;

use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TableLanguage extends Component
{
    protected $listeners = [
        'refreshLanguage' => '$refresh',
    ];

    public function select($id, $select)
    {
        if ($select == "edit") {
            $this->emit('getLanguage', $id);
        } elseif ($select == "delete") {
            $this->emit('deleteLanguage', $id);
        }
    }

    public function render()
    {
        $languages = Language::where('user_id', '=', Auth::user()->id)->get();
        return view('livewire.table-language')->with(['languages' => $languages]);
    }
}
