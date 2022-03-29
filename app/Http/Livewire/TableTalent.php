<?php

namespace App\Http\Livewire;

use App\Models\Talent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TableTalent extends Component
{
    protected $listeners = [
        'refreshTalent' => '$refresh',
    ];

    public function select($id, $select)
    {
        if ($select == "edit") {
            $this->emit('getTalent', $id);
        } elseif ($select == "delete") {
            $this->emit('deleteTalent', $id);
        }
    }

    public function render()
    {
        $talents = Talent::where('user_id', '=', Auth::user()->id)->get();
        return view('livewire.table-talent')->with(['talents' => $talents]);
    }
}
