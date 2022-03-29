<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TableAchievement extends Component
{
    protected $listeners = [
        'refreshAchievement' => '$refresh',
    ];

    public function select($id, $select)
    {
        if ($select == "edit") {
            $this->emit('getAchievement', $id);
        } elseif ($select == "delete") {
            $this->emit('deleteAchievement', $id);
        }
    }

    public function render()
    {
        $achievements = Achievement::where('user_id', '=', Auth::user()->id)->get();
        return view('livewire.table-achievement')->with(['achievements' => $achievements]);
    }
}
