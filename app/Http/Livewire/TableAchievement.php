<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\Achievement;

class TableAchievement extends Component
{
    protected $listeners = [
        'refreshAchievement' => '$refresh'
    ];

    public function select($id, $select){
        if($select == "edit"){
            $this->emit('getAchievement', $id);
        }
        elseif($select == "delete"){
            $this->emit('deleteAchievement', $id);
        }
    }

    public function render()
    {
        $achievements = Achievement::where('user_id','=',Auth::user()->id)->get();
        return view('livewire.table-achievement')->with(['achievements' => $achievements]);
    }
}
